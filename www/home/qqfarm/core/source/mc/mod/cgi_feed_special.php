<?php

# Radish breeding

$uId = (int)$_REQUEST['uId'] ? (int)$_REQUEST['uId'] : $_QFG['uid'];

$serial = (int)$_REQUEST['serial']-1;

$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($fruit);


$list = $_QFG['db']->fetchOne("SELECT status,sfeedleft FROM app_qqfarm_mc where uid=" . $uId);
$animal = qf_decode($list['status']);
$sfeedleft = $list['sfeedleft'];

if($sfeedleft == 0) {
	die('{"errorContent":"Hôm nay bạn đã cho vật nuôi ăn đủ 30 lần rồi, không thể cho ăn nữa!","errorType":"1001","serial":' .  $_REQUEST['serial'] . ',"sfeedleft":' . $sfeedleft . '}');
}



if ($animal[$serial]['cId']==1002){
	$luoboid = 3;
} elseif ($animal[$serial]['cId']==1503){
	$luoboid = 18;
} elseif ($animal[$serial]['cId']==1008){
	$luoboid = 72;
} else {
	die('{"errorContent":"Chỉ sử dụng cho thỏ, khỉ và sóc.","errorType":"1001","serial":' .  $_REQUEST['serial'] . ',"sfeedleft":' . $sfeedleft . '}');
}

$fruit[$luoboid] = $fruit[$luoboid] - 1;
$animal[$serial]['growtime'] += 300;

foreach($animal as $key => $value) {
	if($key == $serial) {
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
		$newanimal = '{"animal":{"buyTime":'.$value['buyTime'].',"cId":'.$value['cId'].',"growTime":'.$value['growtime'].',"growTimeNext":'.$growTimeNext.',"hungry":0,"serial":'.$_REQUEST['serial'].',"status":'.$status.',"statusNext":'.$statusNext.',"totalCome":'.$totalCome.'},"serial":'.$_REQUEST['serial'].',"sfeedleft":'.$list['sfeedleft'].'}';
		$animal[$key] = $value;//Update parameters
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',sfeedleft='" . ($sfeedleft-1) . "' where uid=" . $uId);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);

echo $newanimal;

?>