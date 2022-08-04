<?php
/**
 * Note: 连接数据库类
 * Filename: mysql.class.php
 * Create by seaif@zealv.com
 */

class dbstuff {

	var $result = null; //结果集
	var $dbconn = null; //数据库连接
	var $queryCount = 0; //数据库查询次数
	var $tbPrefix = array(); //SQL替换列表
	var $logFile = ''; //错误日志文件

	//构造函数
	function dbstuff($myCFG) {
		$CFG = array(
			'dbhost' => '', 'dbuser' => '', 'dbpass' => '', 'dbname' => '',
			'charset' => '', 'pconnect' => 0, 'logFile' => ''
		);
		extract(array_merge($CFG, array_intersect_key($myCFG, $CFG)));
		if($logFile) {
			$this->logFile = $logFile;
			is_dir(dirname($logFile)) || mkdir(dirname($logFile), 0777, true);
		}
		$this->connect($dbhost, $dbuser, $dbpass, $dbname, $charset, $pconnect);
	}

	//连接服务器
	function connect($dbhost, $dbuser, $dbpass, $dbname = '', $charset = '', $pconnect = 0) {
		$func = $pconnect ? 'mysql_pconnect' : 'mysql_connect';
		if(!$this->dbconn = @$func($dbhost, $dbuser, $dbpass)) {
			$this->halt('Can not connect to MySQL server');
		}
		if(($dbVersion = mysql_get_server_info($this->dbconn)) > '4.1') {
			if($charset) {
				@mysql_query("SET character_set_connection={$charset}, character_set_results={$charset}, character_set_client=binary", $this->dbconn);
			}
			if($dbVersion > '5.0.1') {
				@mysql_query("SET sql_mode=''", $this->dbconn);
			}
		}
		if($dbname && !@mysql_select_db($dbname)) {
			$this->halt('Can not select database');
		}
	}

	/**
	 * 提交查询
	 * $type = 'quiet'       开启安静模式
	 * $type = 'unbuffered'  不缓存缓存结果集
	 */
	function query($sql, $type = '') {
		if(count($this->tbPrefix) > 1) {
			$sql = str_replace($this->tbPrefix[0], $this->tbPrefix[1], $sql);
		}
		$func = ($type == 'unbuffered' && @function_exists('mysql_unbuffered_query')) ? 'mysql_unbuffered_query' : 'mysql_query';
		if(!$this->result = @$func($sql, $this->dbconn)) {
			$type == 'quiet' || $this->halt('MySQL Query Error', $sql);
		}
		$this->queryCount++;
		return $this->result;
	}

	//插入一条记录
	function insert($sql) {
		$this->result = $this->query($sql);
		return mysql_insert_id($this->dbconn);
	}

	//返回记录总数
	function count($sql = '') {
		if($sql) {
			$rs = $this->fetchOne($sql, MYSQL_NUM);
			return $rs[0];
		} else {
			return mysql_num_rows($this->result);
		}
	}

	//返回结果集中指定字段值
	function result($sql = '', $row = 0, $field = 0) {
		if($result = $sql ? $this->query($sql) : $this->result) {
			$rs = @mysql_result($result, $row, $field);
		}
		return $rs;
	}

	//返回一条结果集
	function fetchOne($sql = '', $rsType = MYSQL_ASSOC) {
		if($result = $sql ? $this->query($sql) : $this->result) {
			$rs = mysql_fetch_array($result, $rsType);
		}
		return $rs;
	}

	//返回所有结果集
	function fetchAll($sql = '', $primary = '', $rsType = MYSQL_ASSOC) {
		if($result = $sql ? $this->query($sql) : $this->result) {
			while($row = mysql_fetch_array($result, $rsType)) {
				if($primary && $row[$primary]) {
					$rs[$row[$primary]] = $row;
				} else {
					$rs[] = $row;
				}
			}
		}
		return $rs;
	}

	//返回数据表字段列表
	function listFields($table) {
		if(!$rs = $this->fetchAll('SHOW COLUMNS FROM ' . $table)) {
			return false;
		}
		foreach($rs as $key => $value) {
			$rslist[] = $value['Filed'];
		}
		return $rslist;
	}

	//Returns number of fields in the result set
	function numFields($sql = '') {
		if($sql) {
			$this->query($sql);
		}
		return @mysql_num_fields($this->result);
	}

	//Return all table names
	function listTables() {
		return $this->fetchAll('SHOW TABLES');
	}

	//Sensitive character escape
	function lscapeString($char) {
		return $char ? @mysql_escape_string($char) : false;
	}

	//Close the database connection
	function close() {
		//[使用持续连接时无效]
		return @mysql_close($this->dbconn);
	}

	//Error Debugging
	function halt($message = '', $sql = '') {
		$errno = intval(($this->link) ? mysql_errno($this->link) : mysql_errno());
		if($this->logFile) {
			$error = (($this->link) ? mysql_error($this->link) : mysql_error());
			error_log(
				"Message: {$message} \r\n" .
				"    URI: {$_SERVER['REQUEST_URI']} \r\n" .
				"    SQL: {$sql} \r\n" .
				"  Errno: {$errno} \r\n".
				"  Error: {$error} \r\n \r\n" ,
				3, $this->logFile
			);
		}
		$output = $message ? "$message($errno)" : $errno;
		die("Error: {$output}.");
	}

}

?>