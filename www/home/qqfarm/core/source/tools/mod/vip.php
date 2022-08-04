<?php
/*
 * VIP module (user UI part)
 * Modify by seaif@zealv.com
 */


//Update your VIP parameters
$vipme = true;
include('source/cron/vip.php');

//VIP movies shot placement
$vipCost = $_VIP['cost'];
$vipExps = $_VIP['exps'];
$vipSpeed = $_VIP['speed'];
$vipStatus = $_VIP['status'];


if($_POST['payMonth'] > 0) {
	$payMonth = (int)$_POST['payMonth'];
	//Ingot consumption calculation
	$yb = $_QFG['db']->result("SELECT yb FROM app_qqfarm_user where uid=".$_QFG['uid']);
	$needyb = $payMonth == 12 ? $vipCost[2] : $vipCost[1]*$payMonth;
	if($yb < $needyb) {
		die("1|&|Bạn không đủ vàng");
	}
	//VIP transformation parameters
	$vip['join'] = $_QFG['timestamp']; //Time renewals
	if($vip['valid'] >= $_QFG['timestamp']) {
		$vip['valid'] += $payMonth*30*86400; //Renew the current VIP
		if($vip['valid'] - $_QFG['timestamp'] > 63072000) {
			die("0|&|Gia hạn tối đa 2 năm");
		}
		$payMonth == 12 && $vip['status'] = 2; //Annual fee is transferred
		$vMsg = "1|&|Gia hạn thành công|&|refresh|&|1";
	} else {
		$vip['last'] = $_QFG['timestamp'];
		$vip['valid'] = $_QFG['timestamp'] + $payMonth*30*86400; //VIP or re-opening of the new open
		$vip['status'] = $payMonth == 12 ? 2 : 1; //状态
		$vip['exp'] || $vip['exp'] = 0;
		$vip['gift_nc'] || $vip['gift_nc'] = 0;
		$vip['gift_mc'] || $vip['gift_mc'] = 0;
		$vMsg = "2|&|Thực hiện thành công|&|refresh|&|1";
	}
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=yb-".$needyb.",vip='".qf_encode($vip)."' where uid=".$_QFG['uid']);
	die($vMsg);
} else {
	$vip['join']   = (int)$vip['join'];   //Time renewals
	$vip['valid']  = (int)$vip['valid'];  //Effective time
	$vip['last']   = (int)$vip['last'];   //Last transforming the experience of time
	$vip['status'] = (int)$vip['status']; //State [0: invalid | 1: Monthly fee | 2: Annual Fee]
	$vip['exp']    = (int)$vip['exp'];    //Growth experience
	$vip['gift_nc']  = (int)$vip['gift_nc'];  //State Farm Package
	$vip['gift_mc']  = (int)$vip['gift_mc'];  //Ranch Package status
	$vipExt['level'] = qf_toVipLevel($vip['exp'], $vip['status']);
	$vipExt['valid'] = $vip['valid'] > 0 ? date("Y-m-d", $vip['valid']) : $vipStatus[0];
	$vipExt['status'] = $vip['join'] && !$vip['status'] ? $vipStatus[-1] : $vipStatus[$vip['status']];
	$vipExt['allExp'] = abs(ceil(($vip['valid']-$_QFG['timestamp'])/86400) * $vipExps[$vip['status']]);
	qf_getView("tools/vip");
}

?>