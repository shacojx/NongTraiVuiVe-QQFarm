<?php

# Animal Production

$needlog = 1;
if($_REQUEST['uId'] == null) {
	$_REQUEST['uId'] = $_QFG['uid'];
	$needlog = 0;
}
$serial = intval($_REQUEST['serial']-1);
$list = $_QFG['db']->fetchOne("SELECT status,feed FROM app_qqfarm_mc where uid=" . intval($_REQUEST['uId']));
$animal = qf_decode($list['status']);
$feed = qf_decode($list['feed']);

$needfood = $hourfood = $totaltime = $hungry = 0;
//xieph Calculate the total time for animals
foreach($animal as $k => $v) {
	$v['cId'] > 0 && $hourfood += $animaltype[$v['cId']]['consum'] /4 ; //Calculate the total time for animals
}
$totaltime = $feed['animalfood'] / $hourfood * 3600; //totaltime:Food for animal consumption current total time 
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
foreach($animal as $key => $value) {
	if(0 < $value['cId'] && $key==$serial) {
		if( ($_QFG['timestamp'] - $feed['animalfeedtime']) >= $totaltime ) {
			$animal[$serial]['growtime'] = $value['growtime'] + $totaltime;
		} else {	
			$animal[$serial]['growtime'] = $value['growtime'] + $_QFG['timestamp'] - $feed['animalfeedtime'];	
		}
	}
}


if($feed['animalfood'] <= 0) {
	die( '{"addExp":0,"animal":{"buyTime":'.$animal[$serial]["buyTime"].',"cId":'.$animal[$serial]["cId"].',"growTime":'.$animal[$serial]["growtime"].',"growTimeNext":'.$animaltime[$animal[$serial]["cId"]][3].',"hungry":1,"serial":'.($serial+1).',"status":3,"statusNext":6,"totalCome":'. $animaltype[$animal[$serial]["cId"]]["output"] .'},"errorCode":"-11000","errorContent":"Thiếu thức ăn, vật nuôi sẽ đói và không thể sinh sản","errorType":"1011"}');
}
if($_QFG['timestamp'] - $animal[$serial]['postTime'] <= $animaltime[$animal[$serial]['cId']][3]) {
	die( '{"addExp":0,"animal":{"buyTime":'.$animal[$serial]["buyTime"].',"cId":'.$animal[$serial]["cId"].',"growTime":'.$animal[$serial]["growtime"].',"growTimeNext":'.$animaltime[$animal[$serial]["cId"]][3].',"hungry":0,"serial":'.($serial+1).',"status":3,"statusNext":6,"totalCome":'. $animaltype[$animal[$serial]["cId"]]["output"] .'},"errorCode":"-11002","errorContent":"Đã được xử lý","errorType":"1016"}');
}

//Anti-speed gear

if($animal[$serial]['postTime'] == 0) {
	$chk_time = $animal[$serial]['growtime'];
	if($chk_time < $animaltime[$animal[$serial]['cId']][0] + $animaltime[$animal[$serial]['cId']][1]) {
		die( '{"addExp":0,"animal":{"buyTime":'.$animal[$serial]["buyTime"].',"cId":'.$animal[$serial]["cId"].',"growTime":'.$animal[$serial]["growtime"].',"growTimeNext":'.$animaltime[$animal[$serial]["cId"]][3].',"hungry":0,"serial":'.($serial+1).',"status":3,"statusNext":6,"totalCome":'. $animaltype[$animal[$serial]["cId"]]["output"] .'},"errorCode":"-11000","errorContent":"Chưa đến mùa sinh sản","errorType":"1011"}');
	}
} else {
	if( $animal[$serial]['growtime']-$animal[$serial]['p'] <= $animaltime[$animal[$serial]['cId']][4]) {
		die( '{"addExp":0,"animal":{"buyTime":'.$animal[$serial]["buyTime"].',"cId":'.$animal[$serial]["cId"].',"growTime":'.$animal[$serial]["growtime"].',"growTimeNext":'.$animaltime[$animal[$serial]["cId"]][3].',"hungry":0,"serial":'.($serial+1).',"status":3,"statusNext":6,"totalCome":'. $animaltype[$animal[$serial]["cId"]]["output"] .'},"errorCode":"-11000","errorContent":"Chưa đến mùa sinh sản","errorType":"1011"}');
	}
}

//入库

$animal[$serial]['growtime'] =(int)$animal[$serial]['growtime'];
$animal[$serial]['p'] =(int)$animal[$serial]['growtime'];
$animal[$serial]['s'] = 0;
$animal[$serial]['postTime'] = $_QFG['timestamp'];
$animal[$serial]['tou'] = "";
$animal[$serial]['totalCome'] = $animal[$serial]['totalCome'] + $animaltype[$animal[$serial]['cId']]['output'];
$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "' where uid=" . intval($_REQUEST['uId']));

$add_exp = $_REQUEST['uId'] == $_QFG['uid'] ? 5 : 2;
$_QFG['db']->query("UPDATE app_qqfarm_mc set exp=exp+" . $add_exp . " where uid=" . $_QFG['uid']);


//Production log to help
if($_QFG['uid'] != $_REQUEST['uId']) {
	qf_addFeed('cgi_post_product2');
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . intval($_REQUEST['uId']) . " AND type = 2 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if(($value['type'] == 2) && ($value['fromid'] == $_QFG['uid'])) {
			$list = explode(",", $value['iid']);
			$scount = explode(",", $value['count']);
			$stime = $value['time'];
			$listo = "";
			$scounto = "";
			$flag = 0;
			for($i = 0; $i < count($list); $i++) {
				if($list[$i] == $animal[$serial][cId]) {
					$flag = 1;
					$scount[$i] = $scount[$i] + 1;
				}
			}
			if($flag == 0) {
				$list[count($list)] = $animal[$serial][cId];
				$scount[count($list)] = 1;
			}
			for($i = 0; $i < (count($list)) - 1; $i++) {
				$listo = $listo . $list[$i] . ",";
				$scounto = $scounto . $scount[$i] . ",";
			}
			$listo = $listo . $list[count($list) - 1];
			$scounto = $scounto . $scount[count($list) - 1];
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $listo . "', count = '" . $scounto . "', time = " . $_QFG['timestamp'] . ", isread = 0 where uid = " . intval($_REQUEST['uId']) . " AND type = 2 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
		}
	}
	if(($listo == "") || ($scounto == "")) {
		$listo = $animal[$serial]['cId'];
		$scounto = 1;
	}
	if(!$sql1) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(" . (int)$_REQUEST['uId'] . ", 2, " . $scounto . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . $listo . ", 0, 0)";
	}
	if($sql1) $query = $_QFG['db']->query($sql1);
} else qf_addFeed('cgi_post_product1');

//Return Information
echo '{"addExp":' . $add_exp . ',"animal":{"buyTime":' . $animal[$serial]['buyTime'] . ',"cId":' . $animal[$serial][cId] . ',"createTime":0,"feedTime":' . ($_QFG['timestamp'] - $animaltime[$animal[$serial][cId]][0]) . ',"growTime":' . ($animal[$serial]['growtime']) . ',"growTimeNext":' . $animaltime[$animal[$serial][cId]][3] . ',"postTime":' . $_QFG['timestamp'] . ',"productNum":2,"serial":' . ($serial+1) . ',"status":4,"statusNext":5,"totalCome":' . $animaltype[$animal[$serial]['cId']]['output'] . '}}';

?>