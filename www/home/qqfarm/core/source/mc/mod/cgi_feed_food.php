<?php

# To help themselves, friends plus grass

if(!is_numeric((int)$_REQUEST['foodnum']) || (int)$_REQUEST['foodnum'] < 1) {
	exit();
}
$foodnum = (int)$_REQUEST['foodnum'] < 1001 ? (int)$_REQUEST['foodnum'] : 1000;

if($_REQUEST['uId'] && $_QFG['uid'] != $_REQUEST['uId']) {
	$uId = (int)$_REQUEST['uId'];
	$toFriend = true;
} else $uId = $_QFG['uid'];
$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$vip = qf_decode($vip);
if($vip['status']) {
		$mc_price = 30;
	} else {
		$mc_price = 60;
}

if($_REQUEST['type'] == "0") {
	$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$fruit = qf_decode($fruit);
	$id = 40;
	if($fruit[$id] < 1 || $fruit[$id] < $foodnum) {
		die('{"errorContent":"Không có đủ cỏ trong kho","errorType":"1011"}');
	} else {
		$mucaoid = 40;
		$list = $_QFG['db']->fetchOne("SELECT status,feed FROM app_qqfarm_mc where uid=" . $uId);
		$animal = qf_decode($list['status']);
		$feed = qf_decode($list['feed']);
		if(1001 < $feed['animalfood'] + $foodnum) {
			$foodnum = ceil(1000 - $feed['animalfood']);
		}
		$feed['animalfood'] = $feed['animalfood'] + $foodnum;
		$fruit[$mucaoid] = $fruit[$mucaoid] - $foodnum;
		if($foodnum == 0) {
			die('{"errorContent":"Bạn cho thêm cỏ quá nhiều rồi đấy..","errorType":"1011"}');
		}
		$addExp = 0;
		if($_POST['uId'] != $_QFG['uid']) {
			$addExp = floor($foodnum / 10);
		}
		$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);
		$_QFG['db']->query("UPDATE app_qqfarm_mc set exp=exp+" . $addExp . " where uid=" . $_QFG['uid']);
		$newanimal = getNewAnimal();
		$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',feed='".qf_encode($feed)."' where uid=" . $uId);
		//Output
		if($toFriend) {
			$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $uId . " AND type = 3 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
			foreach($values as $value) {
				if(($value[type] == 3) && ($value['fromid'] == $_QFG['uid']) && ($foodnum > 0)) {
					$scount = $value['count'];
					$stime = $value['time'];
					$scount = $scount + $foodnum;
					$sql1 = "UPDATE app_qqfarm_mclogs set count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 0 where uid = " . $uId . " AND type = 3 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
				}
			}
			if((!$sql1) && ($foodnum > 0)) {
				$sql1 = "INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(" . $uId . ", 3," . $foodnum . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 40, 0, 0);";
			}
			if($sql1) $query = $_QFG['db']->query($sql1);
		}
		//Output
		die('{"addExp":' . $addExp . ',"added":' . $foodnum . ',"animal":' . $newanimal . ',"direction":"Đã thêm<font color=\"#009900\"> <b>' . $foodnum . '</b> </font> cỏ","money":0,"total":' . $feed[animalfood] . ',"type":0,"uId":' . $uId . '}');
	}
}
elseif($_REQUEST['type'] == '1') {
	//$mc_price = 60;
	$mc_id = 40;
	$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
	if($money < $mc_price * $foodnum) {
		die('{"errorContent":"Không đủ tiền mua ' . $foodnum . ' cỏ, cần có ' . ($mc_price * $foodnum) . ' Xu.","errorType":"1011"}');
	}
	
	$list = $_QFG['db']->fetchOne("SELECT status,feed FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$animal = qf_decode($list['status']);
	$feed = qf_decode($list['feed']);
	if(1001 < $feed['animalfood'] + $foodnum) {
		$foodnum = ceil(1000 - $feed['animalfood']);
	}
	$feed['animalfood'] = $feed['animalfood'] + $foodnum;
	$money = $money - ($mc_price * $foodnum);
	$newanimal = getNewAnimal();
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=" . $money . " where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',feed='".qf_encode($feed)."' where uid=" . $_QFG['uid']);
	//Output
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 4 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if(($value[type] == 4) && ($value['fromid'] == $_QFG['uid']) && ($foodnum > 0)) {
			$money = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$money = $money + ($mc_price * $foodnum);
			$scount = $scount + $foodnum;
			$sql1 = "UPDATE app_qqfarm_mclogs set money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 1 where uid = " . $_QFG['uid'] . " AND type = 4 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
		}
	}
	if((!$sql1) && ($foodnum > 0)) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(" . $_QFG['uid'] . ", 4," . $foodnum . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 40, 1, " . ($mc_price * $foodnum) . ");";
	}
	if($sql1) $query = $_QFG['db']->query($sql1);
	//Output
	echo stripslashes('{"addExp":0,"added":0,"alert":"Đã mua ' . $foodnum . 'cỏ hết ' . ($mc_price * $foodnum) . ' Xu (Đã được cho vào máy xay thức ăn).","animal":' . $newanimal . ',"money":' . ($mc_price * $foodnum) . ',"total":' . $feed[animalfood] . ',"type":1,"uId":' . $_QFG['uid'] . '}');
} elseif($_REQUEST['type'] == '2') {
	//$mc_price = 60;
	$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
	if($money < $mc_price * $foodnum) {
		die('{"errorContent":"Không đủ tiền mua ' . $foodnum . ' cỏ, cần có ' . ($mc_price * $foodnum) . ' Xu.","errorType":"1011"}');
	}
	$list = $_QFG['db']->fetchOne("SELECT status,feed FROM app_qqfarm_mc where uid=" . $uId);
	$animal = qf_decode($list['status']);
	$feed = qf_decode($list['feed']);
	if($feed[animalfood] >= 1000) {
		die('{"errorContent":"Hôm nay, bạn đã đạt mức Exp tối đa từ việc giúp đỡ bạn bè.. ","errorType":"1011"}');
	}
	if(1001 < $feed[animalfood] + $foodnum) {
		$foodnum = ceil(1000 - $feed['animalfood']);
	}
	$feed[animalfood] = $feed['animalfood'] + $foodnum;
	$money = $money - ($mc_price * $foodnum);
	$newanimal = getNewAnimal();
	$addExp = 0;
	if($toFriend) {
		$addExp = floor($foodnum / 10);
	}

	$_QFG['db']->query("UPDATE app_qqfarm_user set money=" . $money . " where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set exp=exp+" . $addExp . " where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',feed='".qf_encode($feed)."' where uid=" . $uId);
	//Add grass Log
	if($toFriend) {
		$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $uId . " AND type = 5 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
		foreach($values as $value) {
			if(($value['type'] == 5) && ($value[fromid] == $_QFG['uid']) && ($foodnum > 0)) {
				$money = $value['money'];
				$scount = $value['count'];
				$stime = $value['time'];
				$money = $money + ($mc_price * $foodnum);
				$scount = $scount + $foodnum;
				$sql1 = "UPDATE app_qqfarm_mclogs set money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 0 where uid = " . $uId . " AND type = 5 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
			}
		}
		if((!$sql1) && ($foodnum > 0)) {
			$sql1 = "INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(" . $uId . ", 5," . $foodnum . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 40, 0, " . ($mc_price * $foodnum) . ");";
		}
		if($sql1) $query = $_QFG['db']->query($sql1);
	}
	//Output
	echo stripslashes('{"addExp":' . $addExp . ',"added":0,"animal":' . $newanimal . ',"alert":"Đã mua ' . $foodnum . ' cỏ với giá ' . ($mc_price * $foodnum) . ' xu (Đã cho vào máy xay)","money":' . ($mc_price * $foodnum) . ',"total":' . $feed[animalfood] . ',"type":2,"uId":' . $uId . '}');
}

//Common parts:: Update global $ animal, $ feed, and get $ newanimal
function getNewAnimal() {
	global $_QFG, $animaltime, $animaltype, $animal, $feed;
$needfood = $hourfood = $totaltime = $hungry = 0;
//xieph Animals need food per hour
foreach($animal as $k => $v) {
	$v['cId'] > 0 && $hourfood += $animaltype[$v['cId']]['consum'] /4 ; //Animals need food per hour
}
$totaltime = $feed['animalfood'] / $hourfood * 3600; //totaltime: food for animal consumption current total time
$need = 0; //From mature animals, the grass needed
$harvestarr = array();
foreach($animal as $k1 => $v1) { //Calculation about whether animals can be harvested
	if($v1['cId'] > 0) {
		$growtime = 0;
		if(($_QFG['timestamp'] -  $feed['animalfeedtime']) >= $totaltime ) {
			$growtime = $v1['growtime'] + $totaltime;
			if($growtime >= $animaltime[$v1['cId']][5]) {
				$need += ($animaltime[$v1['cId']][5] - $v1['growtime'])>0 ? ($animaltime[$v1['cId']][5] - $v1['growtime']) / 3600 * $animaltype[$v1['cId']]['consum'] / 4 : 0;
				$harvestarr[] = $k1;
			}
		} else {
			$growtime += $v1['growtime'] + ($_QFG['timestamp'] - $feed['animalfeedtime']);
			if($growtime >= $animaltime[$v1['cId']][5]) {
				$need += ($animaltime[$v1['cId']][5] - $v1['growtime']) > 0 ? ($animaltime[$v1['cId']][5] - $v1['growtime']) / 3600 * $animaltype[$v1['cId']]['consum'] /4 : 0;
				$harvestarr[] = $k1;
			}
		}
	}
}

if($harvestarr) {
	$hourfood = 0;
	foreach($animal as $k2 => $v2) {
		if($v2['cId']>0 && !in_array($k2, $harvestarr)) {
			$hourfood += $animaltype[$v2['cId']]['consum'] / 4;
		}
	}
	if($hourfood>0) {
		$totaltime = ($feed['animalfood'] - $need) / $hourfood * 3600;
	}
}
//_xieph

	foreach($animal as $key => $value) {
		if(0 < $value['cId']) {
			// xieph Increase growtime: animal growth time

		$growtime1 = $value['growtime'];
		if( ($_QFG['timestamp'] - $feed['animalfeedtime']) >= $totaltime ) {
			$value['growtime'] += $totaltime;
			if($value['growtime'] >= $animaltime[$value['cId']][5]) {
				$value_feedtime = $animaltime[$value['cId']][5]-$growtime1;
			} else {
				$value_feedtime = $totaltime;
			}
			$hungry = 1;
		} else {	
			$value['growtime'] += $_QFG['timestamp'] - $feed['animalfeedtime'];	
			if($value['growtime'] >= $animaltime[$value['cId']][5] ) {
				$value_feedtime = $animaltime[$value['cId']][5]-$growtime1;
			} else {
				$value_feedtime = $_QFG['timestamp'] - $feed['animalfeedtime'];
			}
			
			$hungry = 0;
		}
		$needfood = $value_feedtime / 3600 * $animaltype[$value['cId']]['consum'] / 4;
		$needfood = $needfood > 0 ? $needfood : 0;

		$feed['animalfood'] -= $needfood;
			$totalCome = $value['totalCome'];
			if($value['postTime'] == 0) {
				if($animaltime[$value['cId']][0] + $animaltime[$value['cId']][1] <= $value['growtime']) {
					$status = 3;
					$growTimeNext = 12993;
					$statusNext = 6;
				}
				if($animaltime[$value['cId']][0] <= $value['growtime'] && $value['growtime'] < $animaltime[$value['cId']][0] + $animaltime[$value['cId']][1]) {
					$status = 2;
					$growTimeNext = $animaltime[$value['cId']][0] + $animaltime[$value['cId']][1] - $value['growtime'];
					$statusNext = 3;
				}
				if($value['growtime'] < $animaltime[$value['cId']][0]) {
					$status = 1;
					$growTimeNext = $animaltime[$value['cId']][0] - $value['growtime'];
					$statusNext = 2;
				}
				if($animaltime[$value['cId']][5] < $value['growtime']) {
					$status = 6;
					$growTimeNext = 0;
					$statusNext = 6;
				}
			} else {
				$ptime = $value['growtime']-$value['p'];
				if($animaltime[$value['cId']][5] <= $value['growtime']) {
					$status = 6;
					$statusNext = 6;
					$growTimeNext = 0;
				}
				if($animaltime[$value['cId']][4] <= $ptime) {
					$status = 3;
					$statusNext = 6;
					$growTimeNext = 12993;
				}
				if($ptime <= $animaltime[$value['cId']][4]) {
					$status = 5;
					$statusNext = 3;
					$growTimeNext = $animaltime[$value['cId']][4] - $ptime;
				}
				if($ptime <= $animaltime[$value['cId']][3]) {
					$status = 4;
					$statusNext = 5;
					$growTimeNext = $animaltime[$value['cId']][3] - $ptime;
					$totalCome -= $animaltype[$value['cId']][output];
				}
				if($animaltime[$value['cId']][5] - $animaltime[$value['cId']][3] - $animaltime[$value['cId']][4] < $value['growtime']) {
					$status = 5;
					$statusNext = 6;
					$growTimeNext = $animaltime[$value['cId']][5] - $value['growtime'];
				}
			}
			//_xieph
			$newanimal[] = array('buyTime'=>$value['buyTime'],'cId'=>$value['cId'],'growTime'=>$value['growtime'],'growTimeNext'=>$growTimeNext,'hungry'=>$hungry,'serial'=>($key+1),'status'=>$status,'statusNext'=>$statusNext,'totalCome'=>$totalCome);
			$animal[$key] = $value;//Update parameters
		}
	}
	$feed['animalfood'] = ceil($feed['animalfood']);
	$GLOBALS['feed'] = $feed;
	$GLOBALS['animal'] = array_values($animal);
	$newanimal = str_replace('null', '[]', qf_jsonCode($newanimal));
	return $newanimal;
}

?>