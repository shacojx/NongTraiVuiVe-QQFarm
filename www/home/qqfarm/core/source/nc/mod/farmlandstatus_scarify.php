<?php

# Crops from the land

$place = (int)$_REQUEST['place'];
$cropStatus = (int)$_REQUEST['cropStatus'];
$list = $_QFG['db']->fetchOne("SELECT status,exp,package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$status = qf_decode($list['status']);
if($status[$place]['b']<7 && $cropStatus==7) die('{"code":0,"direction":"Vui lòng thử lại!","farmlandIndex":'.$place.',"poptype":1}');
if($status[$place]['a']>0) {
	if($status[$place]['b'] == 7 && $cropStatus==7) {
		$jj = mt_rand(1, 50);
		$scarifyexp = 3;
	} else {
		$scarifyexp = 0;
		$jj = 2;
	}
	$status[$place]['a'] = 0;
	$status[$place]['b'] = 0;
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
	$status[$place]['q'] = 0;
	$status[$place]['r'] = 0;
	$status[$place]['bitmap'] = intval($status[$place]['bitmap']);
	$status[$place]['pId'] = 0;
	if($status[$place]['weed']) { unset($status[$place]['weed']); }
	if($status[$place]['pest']) { unset($status[$place]['pest']); }
	//升级
	$_QFG['db']->query("UPDATE app_qqfarm_nc set exp=exp+$scarifyexp where uid=" . $_QFG['uid']);
	$exp_arr = $_QFG['db']->result("SELECT exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$levelup = $_QFG['db']->result("SELECT levelup FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$levelup_arr = 'false';
	if($exp_arr >= $levelup && $levelup < 93001) {
		include("source/nc/plus/levelup.php"); //Upgrade Tips
	}
	if($jj == 1) {
		qf_getCache('_HIDE');
		$package = qf_decode($list['package']);
		$hideSeed = count($_HIDE['seed']) > 1 ? $_HIDE['seed'] : array(25,56,46,62,67,69,70,75,80,81,82,92,93,94,101,102,103,104,105,106,107,108,109,111,112,114,113,118,125);
		$zhongzi = array_rand($hideSeed);
		$zhongzi = $hideSeed[$zhongzi];
		$num = mt_rand(1, 2);
		$package[$zhongzi] = $package[$zhongzi] + $num;
		$cName = $cropstype[$zhongzi]['cName'];
		$maturingTime = $cropstype[$zhongzi]['maturingTime'];
		$output = $cropstype[$zhongzi]['output'];
		$exp = $cropstype[$zhongzi]['cropExp'];
		$sale = $cropstype[$zhongzi]['sale'];
		$growTime = $cropstype[$zhongzi]['growthCycle'];
		$up = $cropstype[$zhongzi]['cLevel'];
		$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);
		echo '{"farmlandIndex":' . $place . ',"code":1,"direction":"","exp":' . $scarifyexp . ',"levelUp":' . $levelup_arr . ',"randsend":{"desc":"' . $cName . '","id":"' . $zhongzi . '","name":"' . $cName . '","harvestTimes":"' . $maturingTime . '","output":"' . $output . '","exp":"' . $exp . '","sale":"' . $sale . '","growTime":"' . $growTime . '","num":' . $num . ',"level":"' . $up . '","type":1}}';
	} else {
		echo '{"farmlandIndex":' . $place . ',"code":1,"direction":"","exp":' . $scarifyexp . ',"levelUp":' . $levelup_arr . '}';
	}
	$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "' where uid=" . $_QFG['uid']);
} else echo '{"farmlandIndex":' . $place . ',"code":0,"poptype":1,"direction":"Đất đã được xới!"}';


qf_addFeed('farmlandstatus_scarify');

?>