<?php

# Cattle drive
$ownerId = intval($_REQUEST['ownerId']); //Farmer ID
$fbison = $_QFG['db']->result("select bison from app_qqfarm_nc where uid=".$ownerId);
$fbison = qf_decode($fbison);
$fownerid = $fbison['ownerid'];
$bison = $_QFG['db']->result("select bison from app_qqfarm_nc where uid=".$fownerid);
$bison = qf_decode($bison);

if(array_key_exists(($_QFG['uid']+10000),$bison['mapDrivers'])) {
	die('{"code":-2117}');
}

$money = $exp = 0;
$isSuecc = mt_rand(1,100)>70 ? 0 : 1;
if($isSuecc==0) {
	$money = 2;
	$bison['mapDrivers'] += array(($_QFG['uid']+10000)=>1);
} else {
	$bison['powerLevel'] = $bison['powerLevel']>1 ? ($bison['powerLevel']-1) : 0;
	$bison['mapDrivers'] += array(($_QFG['uid']+10000)=>1);

	if($bison['powerLevel']==0) {
		$money = 150;
		$bison['backTime'] = $_QFG['timestamp'];
		$bison['state'] = 1;
		$bison['jumpKey'] = 0;
		$bison['mapDrivers'] = array();
		$fbison['ownerid'] = 0;
		$exp = 5;
		$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($fbison)."' where uid=".$ownerId);
	} else {
		$money = 50;
		$exp = 3;
	}
}

$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($bison)."' where uid=".$fownerid);
$_QFG['db']->query("update app_qqfarm_nc set exp=exp+".$exp." where uid=".$_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_user set money=money+".$money." where uid=".$_QFG['uid']);

echo '{"code":1,"exp":'.$exp.',"gain":'.$money.',"isSuecc":'.$isSuecc.'}';

?>