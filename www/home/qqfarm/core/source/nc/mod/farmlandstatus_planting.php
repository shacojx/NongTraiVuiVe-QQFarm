<?php

# Planting crops

$cid = (int)$_REQUEST['cId'];
$place = (int)$_REQUEST['place'];
$list = $_QFG['db']->fetchOne("SELECT package,exp,status FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$status = qf_decode($list['status']);
$package = qf_decode($list['package']);

if($package[$cid] == 0 || $status[$place]['a'] != 0) {
	exit();
}

if(!(int)$status[$place]['bitmap']) {
	if( (int)$cropstype[$cid]['isRed'] ) {
		die( '{"cId":' . $cid . ',"farmlandIndex":' . $place . ',"code":0,"poptype":1,"direction":"Hạt giống cao cấp chỉ có thể trồng trên đất đỏ!"}');
	}
}
$direction = '';
if( !(int)$cropstype[$cid]['isRed'] && $status[$place]['bitmap']==1 ) $direction = 'Năng suất tăng 10%!';
$package[$cid] -= 1;
$status[$place]['a'] = $cid;
$status[$place]['b'] = 1;
$status[$place]['c'] = 0;
$status[$place]['d'] = 0;
$status[$place]['e'] = 1;
$status[$place]['f'] = 0;
$status[$place]['g'] = 0;
$status[$place]['h'] = 1;
$status[$place]['i'] = 100;
$status[$place]['j'] = 0;
$status[$place]['k'] = 0;
$status[$place]['l'] = 0;
$status[$place]['m'] = 0;
$status[$place]['n'] = array();
$status[$place]['o'] = 0;
$status[$place]['p'] = array();
$status[$place]['q'] = $_QFG['timestamp'];
$status[$place]['r'] = $_QFG['timestamp'];
$status[$place]['bitmap'] = intval($status[$place]['bitmap']);
$status[$place]['pId'] = 0;
/*
//Seed variation
if($status[$place]['bitmap'] == 1) {
	if(mt_rand(1,100)<5 && $cid < 200) {
		$status[$place]['a'] = 219;
		$status[$place]['pId'] = $cid;
	}
}
*/

foreach($package as $key => $value) {
	if($value == 0) {
		unset($package[$key]);
	}
}
$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "',package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);

//升级
$_QFG['db']->query("UPDATE app_qqfarm_nc set exp=exp+2 where uid=" . $_QFG['uid']);
$exp_arr = $_QFG['db']->result("SELECT exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$levelup = $_QFG['db']->result("SELECT levelup FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$levelup_arr = 'false';
if($exp_arr >= $levelup && $levelup < 93001) {
	include("source/nc/plus/levelup.php"); //Upgrade Tips
}

echo '{"cId":' . $status[$place]['a'] . ',"farmlandIndex":' . $place . ',"code":1,"poptype":1,"direction":"'.$direction.'","exp":2,"levelUp":' . $levelup_arr . '}';

qf_addFeed('farmlandstatus_planting');

?>