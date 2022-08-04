<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/

class dbstuff {

	var $result = null; //结果集
	var $dbconn = null; //数据库连接
	var $queryCount = 0; //数据库查询次数
	var $debug = false; //是否生成错误日志
	var $tbPrefix = array(); //SQL替换列表

	//构造函数
	function dbstuff($myCFG) {
		$CFG = array('dbhost' => '', 'dbuser' => '', 'dbpass' => '', 'dbname' => '', 'charset' => '', 'pconnect' => 0);
		extract(array_merge($CFG, array_intersect_key($myCFG, $CFG)));
		$this->connect($dbhost, $dbuser, $dbpass, $dbname, $charset, $pconnect);
	}

	//连接服务器
	function connect($dbhost, $dbuser, $dbpass, $dbname = '', $charset = '', $pconnect = 0) {
		$func = $this->pconnect ? 'mysql_pconnect' : 'mysql_connect';
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

	//提交查询
	function query($sql, $unbuffered = false) {
		if(count($this->tbPrefix) > 1) {
			$sql = str_replace($this->tbPrefix[0], $this->tbPrefix[1], $sql);
		}
		$func = $unbuffered && @function_exists('mysql_unbuffered_query') ? 'mysql_unbuffered_query' : 'mysql_query';
		if(!$this->result = @$func($sql, $this->dbconn)) {
			$this->halt('MySQL Query Error', $sql);
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

	//返回结果集字段数
	function numFields($sql = '') {
		if($sql) {
			$this->query($sql);
		}
		return @mysql_num_fields($this->result);
	}

	//返回所有表名
	function listTables() {
		return $this->fetchAll('SHOW TABLES');
	}

	//转义敏感字符
	function lscapeString($char) {
		return $char ? @mysql_escape_string($char) : false;
	}

	//关闭数据库连接
	function close() {
		//[使用持续连接时无效]
		return @mysql_close($this->dbconn);
	}

	//错误调试
	function halt($message = '', $sql = '') {
		$errno = intval(($this->link) ? mysql_errno($this->link) : mysql_errno());
		if($this->debug) {
			$error = (($this->link) ? mysql_error($this->link) : mysql_error());
			error_log(
				"Message: {$message} \r\n" .
				"    URI: {$_SERVER['REQUEST_URI']} \r\n" .
				"    SQL: {$sql} \r\n" .
				"  Errno: {$errno} \r\n \r\n".
				"  Error: {$error} \r\n" ,
				3, "data/logs/#mysql_error.log"
			);
		}
		$output = $message ? "$message($errno)" : $errno;
		die("Error: {$output}.");
	}

}

?>