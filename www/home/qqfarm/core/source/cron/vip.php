<?php

# VIP Package Upgrade & day: TODO: to be optimized

/**
 * Predefined parameters are as follows:
 * (bool)$vipgift Is marked as not receiving VIP Package (default FALSE)
 * (bool)$vipme It only updates the current user VIP parameter (default FALSE)
 */


if($vipme) {
	$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=".$_QFG['uid']);
	$vip = qf_updateVipArgs(qf_decode($vip), $_QFG['timestamp']);
	if($vipgift && $vip['valid'] > $_QFG['timestamp']) {
		$vip['gift_nc'] = 1;//Mark as not to receive VIP Package
		$vip['gift_mc'] = 1; //Tag Ranch does not receive VIP Package
	}
	$_QFG['db']->query("UPDATE app_qqfarm_user set vip='" . qf_encode($vip) . "' where uid=".$_QFG['uid']);
} else {
	$values = $_QFG['db']->fetchAll("SELECT uid,vip FROM app_qqfarm_user");
	foreach($values as $value) {
		$vip = qf_updateVipArgs(qf_decode($value['vip']), $_QFG['timestamp']);
		if($vipgift && $vip['valid'] > $_QFG['timestamp']) {
			$vip['gift_nc'] = 1;//Mark as not to receive VIP Package
			$vip['gift_mc'] = 1; //Tag Ranch does not receive VIP Package
		}
		$_QFG['db']->query("UPDATE app_qqfarm_user set vip='" . qf_encode($vip) . "' where uid=".$value['uid']);
	}
}


/*
 * Update VIP parameters, the conversion length of experience
 * $vip = array(
 *     join     => Time renewals
 *     valid    => Effective time
 *     last     => Last transforming the experience of time
 *     status   => State [0: invalid | 1: Monthly fee | 2: Annual Fee]
 *     exp      => Growth experience
 *     gift_mc  => Ranch Package status
 *     gift_nc  => Farm Package status
 * );
 */
function qf_updateVipArgs($vip, $now) {
	global $_VIP;
	$vipSpeed = $_VIP['speed'];
	if($vip['join'] == 0) { return $vip; }
	if($vip['valid'] > $now) {
		//General experience growth
		$days = floor(($now-$vip['last'])/86400);
		$vip['exp'] += $days*$vipSpeed[$vip['status']];
		$vip['last'] += $days*86400;
	} else {
		//Replacement is not the experience of transformation
		if($vip['last'] < $vip['valid']) {
			$days = floor(($vip['valid']-$vip['last'])/86400);
			$vip['exp'] += $days*$vipSpeed[$vip['status']];
			$vip['last'] += $days*86400;
		}
		//Experience every day until the reduction of 10 to 0
		$days = ceil(($now-$vip['last'])/86400);
		$vip['exp'] += $days*$vipSpeed['-1'];
		$vip['last'] += $days*86400;
		if($vip['exp'] <= 0) {
			$vip['exp'] = 0;
			$vip['join'] = 0;
		}
		$vip['status'] = 0;
	}
	return $vip;
}

?>