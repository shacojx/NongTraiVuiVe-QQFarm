<?php

# Day (0 points) to perform the task
# Modify by seaif@zealv.com

//Restrictions put grass every day, put a total of 50 insects, weeds, pesticides 150 times, 3 times a clown task
$_QFG['db']->query("UPDATE app_qqfarm_nc set badnum=50,zong=150");

//25 day limit put mosquitoes, playing 100 mosquitoes, feeding carrots 30
$_QFG['db']->query("UPDATE app_qqfarm_mc set badnum=25,zong=100,sfeedleft=30"); 

/*$values1 = $_QFG['db']->fetchAll("SELECT uid,npc FROM app_qqfarm_user");
foreach($values1 as $value1) {
	$npc = qf_decode($value1['npc']);
	$npc['nc_day'] = 10;
	$npc['mc_day'] = 10;
	$npc['ncput'] = array();
	$npc['mcput'] = array();
	$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=".$value1['uid']);
}*/
//VIP Package Upgrade & day
$vipgift = true;
include('source/cron/vip.php');

?>