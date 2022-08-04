<?php

# Feeding canned
$uId = (int)$_REQUEST['uId'] ? (int)$_REQUEST['uId'] : $_QFG['uid'];
$serial = (int)$_REQUEST['serial']-1;
$tid = (int)$_REQUEST['tid'];
$list = $_QFG['db']->fetchOne("SELECT status,tools FROM app_qqfarm_mc where uid=" . $uId);
$tools = qf_decode($list['tools']);
$animal = qf_decode($list['status']);
$aid = $animal[$serial]['cId']; //Animal ID
$s = (int)$animal[$serial]['s']; //The stage of animal
$p = (int)$animal[$serial]['p']; //Calculate the time period


#Calculate the time period
$addtime = 0;
if($tools[$tid]<1) {
	die('{"errorContent":"Chưa có thức ăn","errorType":"1001","serial":' .  $_REQUEST['serial'] . '}');
} 

$tools[$tid] = $tools[$tid] - 1;
if($tools[$tid]==0)  unset($tools[$tid]);
$cantime = $toolstype[$tid]['effect'];

if($animal[$serial]['growtime'] < ($animaltime[$aid][1] + $animaltime[$aid][0])) {//The second stage
	if($s==2) {die('{"errorContent":"Giai đoạn này đã được cho ăn rồi","errorType":"1001","serial":' .  $_REQUEST['serial'] . '}'); } //s is 2 for the second phase is fed twice
	$animal[$serial]['s'] = 2; //Each stage can be fed 1
	if(($animaltime[$aid][1] + $animaltime[$aid][0] - $animal[$serial]['growtime']) < $cantime) {
		$addtime = $animaltime[$aid][1] + $animaltime[$aid][0] - $animal[$serial]['growtime'];
	} else {
		$addtime = $cantime;
	}
}

if($animal[$serial]['growtime']<$animaltime[$aid][0]) { //The first stage
	if($s==1) { die('{"errorContent":"Giai đoạn này đã được cho ăn rồi","errorType":"1001","serial":' .  $_REQUEST['serial'] . '}'); } //s is one that has fed the first stage 1
	$animal[$serial]['s'] = 1; //Each stage can be fed 1
	if($animaltime[$aid][0] - $animal[$serial]['growtime'] < $cantime) {
		$addtime = $animaltime[$aid][0] - $animal[$serial]['growtime'];
	} else {
		$addtime = $cantime;
	}
} 

if($p>0) {
	if($s==3) { die('{"errorContent":"Giai đoạn này đã được cho ăn rồi","errorType":"1001","serial":' .  $_REQUEST['serial'] . '}'); } //s, said third stage 3 has fed 1
	$animal[$serial]['s'] = 3; //Each stage can be fed 1
	if($animaltime[$aid][5] - $animal[$serial]['growtime'] < $cantime) {
		$addtime = $animaltime[$aid][5] - $animal[$serial]['growtime'];
	} else {
		$addtime = $cantime;
	}
}

$animal[$serial]['growtime'] += $addtime;

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
		echo '{"animal":{"buyTime":'.$value['buyTime'].',"cId":'.$value['cId'].',"canCnt":1,"growTime":'.$value['growtime'].',"growTimeNext":'.$growTimeNext.',"hungry":0,"serial":'.$_REQUEST['serial'].',"status":'.$status.',"statusNext":'.$statusNext.',"totalCome":'.$totalCome.'},"increase":'.$addtime.'}';
		$animal[$key] = $value;//Update parameters
	}
}
qf_addFeed('cgi_feedcan');
$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',tools='" . qf_encode($tools) . "' where uid=" . $uId);

?>