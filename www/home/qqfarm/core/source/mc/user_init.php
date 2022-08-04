<?php
//Initialize the new user data


//Read the initial configuration
qf_getCache('_INIT');

//Parameters of the initial animal
$status = array(
	array('buyTime'=>$_QFG['timestamp'],'cId'=>1002,'postTime'=>0,'totalCome'=>0,'tou'=>'','growtime'=>165601,'p'=>0),
	array('buyTime'=>$_QFG['timestamp'] , 'cId'=>1002,'postTime'=>0,'totalCome'=>0,'tou'=>'','growtime'=>36001,'p'=>0)
);
//Novice tasks
$taskid = 0;
//Initial Experience
$exp = $_INIT['mc_exp'];
//Feed
$feed = array('animalfood'=>20,"animalfeedtime"=>$_QFG['timestamp']);
//Decoration
$decorative = array('item1'=>array('105'=>array('status'=>1,'validtime'=>1)),'item2'=>1,'item3'=>0);
//Queue
$parade = array('i'=>'Nhập nội dung..', 'p'=>0, 'v'=>1);

//Written to the database
$uid = $_QFG['db']->result("SELECT uid FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
if(!$uid) $_QFG['db']->query("INSERT INTO app_qqfarm_mc(uid,status,taskid,exp,feed,decorative,parade,badnum,zong) VALUES(" . $_QFG['uid'] . ",'" . qf_encode($status) . "','" . $taskid . "','" . $exp . "','" . qf_encode($feed) . "','" . qf_encode($decorative) . "','" . qf_encode($parade) . "',25,100)");
$_QFG['db']->query('UPDATE app_qqfarm_user set pf=1 where uid=' . $_QFG['uid']);
qf_addFeed('user_initmc');
$status = $taskid = $exp = $feed = $decorative = $parade = null;

?>