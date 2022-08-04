<?php

# Novice tasks

$taskid = $_QFG['db']->result('SELECT taskid FROM app_qqfarm_mc where uid=' . $_QFG['uid']);

if($taskid == 0) {
	$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+50 where uid=' . $_QFG['uid']);
	$_QFG['db']->query('UPDATE app_qqfarm_mc set exp=exp+50,taskid=1 where uid=' . $_QFG['uid']);
	echo '{"addExp":50,"item":[{"num":50,"type":7},{"num":50,"type":6}],"money":50,"task":{"taskDesc":"Hoàn thành nhiệm vụ! Nhận được 50 Xu & 50 EXP.","taskFlag":1,"taskId":1}}';
} elseif($taskid == 1) {
	$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+100 where uid=' . $_QFG['uid']);
	$_QFG['db']->query('UPDATE app_qqfarm_mc set exp=exp+100,taskid=2 where uid=' . $_QFG['uid']);
	echo '{"addExp":100,"item":[{"num":100,"type":7},{"num":100,"type":6}],"money":100,"task":{"taskDesc":"Hoàn thành nhiệm vụ! Nhận được 100 Xu & 100 EXP.","taskFlag":1,"taskId":2}}';
} elseif($taskid == 2) {
	$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+150 where uid=' . $_QFG['uid']);
	$_QFG['db']->query('UPDATE app_qqfarm_mc set exp=exp+100,taskid=3 where uid=' . $_QFG['uid']);
	echo '{"addExp":100,"item":[{"num":100,"type":7},{"num":150,"type":6}],"money":150,"task":{"taskDesc":"Hoàn thành nhiệm vụ! Nhận được 100 Xu & 150 EXP.","taskFlag":1,"taskId":3}}';
} elseif($taskid == 3) {
	$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+200 where uid=' . $_QFG['uid']);
	$_QFG['db']->query('UPDATE app_qqfarm_mc set exp=exp+100,taskid=4 where uid=' . $_QFG['uid']);
	echo '{"addExp":100,"item":[{"num":100,"type":7},{"num":200,"type":6}],"money":200,"task":{"taskDesc":"Hoàn thành nhiệm vụ! Nhận được 100 Xu & 200 EXP.","taskFlag":1,"taskId":4}}';
} elseif($taskid == 4) {
	$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+250 where uid=' . $_QFG['uid']);
	$_QFG['db']->query('UPDATE app_qqfarm_mc set exp=exp+100,taskid=5 where uid=' . $_QFG['uid']);
	echo '{"addExp":100,"item":[{"num":100,"type":7},{"num":250,"type":6}],"money":250,"task":{"taskDesc":"Hoàn thành nhiệm vụ! Nhận được 100 Xu & 250 EXP.","taskFlag":1,"taskId":5}}';
} elseif($taskid == 5) {
	$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+300 where uid=' . $_QFG['uid']);
	$_QFG['db']->query('UPDATE app_qqfarm_mc set exp=exp+100,taskid=6 where uid=' . $_QFG['uid']);
	echo '{"addExp":100,"item":[{"num":100,"type":7},{"num":300,"type":6}],"money":300,"task":{"taskDesc":"Hoàn thành nhiệm vụ! Nhận được 100 Xu & 300 EXP.","taskFlag":1,"taskId":6}}';
} elseif($taskid == 6) {
	$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+350 where uid=' . $_QFG['uid']);
	$_QFG['db']->query('UPDATE app_qqfarm_mc set exp=exp+100,taskid=7 where uid=' . $_QFG['uid']);
	echo '{"addExp":100,"item":[{"num":100,"type":7},{"num":350,"type":6}],"money":350,"task":{"taskDesc":"Hoàn thành nhiệm vụ! Nhận được 100 Xu & 350 EXP.","taskFlag":1,"taskId":7}}';
} elseif($taskid == 7) {
	$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+400 where uid=' . $_QFG['uid']);
	$_QFG['db']->query('UPDATE app_qqfarm_mc set exp=exp+100,taskid=8 where uid=' . $_QFG['uid']);
	echo '{"addExp":100,"item":[{"num":100,"type":7},{"num":400,"type":6}],"money":400,"task":{"taskDesc":"Hoàn thành nhiệm vụ! Nhận được 100 Xu & 400 EXP.","taskFlag":1,"taskId":8}}';
} elseif($taskid == 8) {
	$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+450 where uid=' . $_QFG['uid']);
	$_QFG['db']->query('UPDATE app_qqfarm_mc set exp=exp+100,taskid=9 where uid=' . $_QFG['uid']);
	echo '{"addExp":100,"item":[{"num":100,"type":7},{"num":450,"type":6}],"money":450,"task":{"taskDesc":"Hoàn thành nhiệm vụ! Nhận được 100 Xu & 450 EXP.","taskFlag":1,"taskId":9}}';
} elseif($taskid == 9) {
	$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+500 where uid=' . $_QFG['uid']);
	$_QFG['db']->query('UPDATE app_qqfarm_mc set exp=exp+100,taskid=10 where uid=' . $_QFG['uid']);
	echo '{"addExp":100,"item":[{"num":100,"type":7},{"num":500,"type":6}],"money":500,"task":{"taskDesc":"Hoàn thành nhiệm vụ! Nhận được 100 Xu & 500 EXP.","taskFlag":1,"taskId":10}}';
}

?>