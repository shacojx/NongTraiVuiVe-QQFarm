<?php

# Mosquitoes and sweep the poop shoot

$uId = (int)$_REQUEST['uId'];
$zong = $_QFG['db']->result("SELECT zong FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
if($_REQUEST['type'] == 1) {
	$list = $_QFG['db']->fetchOne("SELECT exp,bad FROM app_qqfarm_mc where uid=" . $uId);
	if($list['bad'] == "") {
		exit();
	} else {
		$wenzi = explode(",", $list['bad']);
		$bad_num = count($wenzi);
		$pasture = 0;
		$number = $_REQUEST["num"];
		if($number > $bad_num) {
			$number = $bad_num;
		}
		for($i = 0; $i < $bad_num; $i++) {
			if($wenzi[$i] != $_QFG['uid'] && $pasture != $number) {
				unset($wenzi[$i]);
				$pasture = $pasture + 1;
			} else {
				$bad_all = $bad_all . $wenzi[$i];
				if($i < $bad_num - 1) {
					$bad_all = $bad_all . ",";
				}
			}
		}
		$number = $pasture;
	}
	$int = strlen($bad_all);
	if($int == 0) {
		$_QFG['db']->query("UPDATE app_qqfarm_mc set badtime=0 where uid=" . $uId);
	} else {
		$str = substr($bad_all, $int - 1, 1);
		if($str == ",") {
			$bad_all = substr($bad_all, 0, $int - 1);
		}
	}
	if($zong > 0){
		$exp = 3 * $number;
		$zong = $number;
	} else{
		$exp = 0;
		$zong = 0;
	}
	$_QFG['db']->query("UPDATE app_qqfarm_mc set bad='" . $bad_all . "' where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set exp = exp + " . intval($exp) . " ,zong = zong - " . intval($zong) . " where uid=" . $_QFG['uid']);
	//Take mosquito log
	if($_QFG['uid'] != $uId) {
		qf_addFeed('cgi_help_pasture3');
		$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $uId . " AND type = 7 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
		foreach($values as $value) {
			if(($value[type] == 7) && ($value[fromid] == $_QFG['uid'])) {
				$scount = $value['count'];
				$stime = $value['time'];
				$scount = $scount + 1;
				$sql1 = "UPDATE app_qqfarm_mclogs set count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 0 where uid = " . $uId . " AND type = 7 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
			}
		}
		if((!$sql1)) {
			$sql1 = "INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(" . $uId . ", 7,1, " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 0, 0, 0);";
		}
		if($sql1) $query = $_QFG['db']->query($sql1);
	} else qf_addFeed('cgi_help_pasture3');
	//Output
	echo '{"addExp":' . $exp . ',"cId":1,"num":' . $number . ',"pos":' . $_REQUEST['pos'] . '}';
}

if($_REQUEST['type'] == 2) {
	$cId = "1506";
	$bb = $_QFG['db']->result("SELECT dabian FROM app_qqfarm_mc where uid=" . $uId);
	$mc_package = $_QFG['db']->result("SELECT package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$mc_package = qf_decode($mc_package);
	if($bb <= 0) {
		echo '{"errorContent":"Hãy dọn dẹp vệ sinh thật sạch sẽ","errorType":"1004"}';
		exit();
	}
	//Poo results
	$mc_repertory = $_QFG['db']->result("SELECT repertory FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$mc_repertory = qf_decode($mc_repertory);
	$flag = false;
	foreach((array)$mc_repertory as $key => $val) {
		if(1506 == $val['cId']) {
			$mc_repertory[$key]['harvest'] += 1;
			$flag = true;
		}
	}
	if(!$flag) {
		$mc_repertory[] = array("cId" => 1506, "cName" => "Phân", "harvest" => 1, "scrounge" => 0);
	}
	$_QFG['db']->query("UPDATE app_qqfarm_mc set repertory='" . qf_encode($mc_repertory) . "' where uid=" . $_QFG['uid']);
	//Poo results
	$bb = $bb - 1;
	$mc_package[$cId] += 1;
	$_QFG['db']->query("UPDATE app_qqfarm_mc set dabian=" . $bb . "  where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set package='" . qf_encode($mc_package) . "' where uid=" . $_QFG['uid']);
	//Will help sweep log
	if($_QFG['uid'] != $uId) {
		qf_addFeed('cgi_help_pasture2');
		$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $uId . " AND type = 8 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
		foreach($values as $value) {
			if(($value[type] == 8) && ($value[fromid] == $_QFG['uid'])) {
				$scount = $value['count'];
				$stime = $value['time'];
				$scount = $scount + 1;
				$sql1 = "UPDATE app_qqfarm_mclogs set count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 0 where uid = " . $uId . " AND type = 8 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
			}
		}
		if((!$sql1)) {
			$sql1 = "INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(" . $uId . ", 8,1, " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 0, 0, 0);";
		}
		if($sql1) $query = $_QFG['db']->query($sql1);
	} else qf_addFeed('cgi_help_pasture1');
	echo '{"num":1,"pos":' . $_REQUEST['pos'] . ',"repNum":1,"type":2}';
}

?>