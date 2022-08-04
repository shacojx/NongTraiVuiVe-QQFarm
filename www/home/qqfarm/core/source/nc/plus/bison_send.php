<?php
# Stocking success
$uId = intval($_REQUEST['ownerId']); //Farm user ID

$list = $_QFG['db']->fetchOne("select status,bison,dog,healthMode from app_qqfarm_nc where uid=".$uId);
$status = qf_decode($list['status']);
$dog = qf_decode($list['dog']);
$healthMode = qf_decode($list['healthMode']);
$fbison = qf_decode($list['bison']);

$bison = $_QFG['db']->result("select bison from app_qqfarm_nc where uid=".$_QFG['uid']);
$bison = qf_decode($bison);

if($healthMode['valid']) {
	die('{"code":-101}');
}

if($fbison['ownerid']>0) {
	die('{"code":-2106}');
}

$dogbit = '';
if($dog['dogFeedTime']>=$_QFG['timestamp']) {
	$dogwork = false;
	foreach($dog['dogs'] as $dk=>$dv) {
		if($dv['status']==1) {
			$dogwork = true;
		}
	}
	if($dogwork) {
		$dogflag = mt_rand(1,10);
		if($dogflag>7) {
			$dogbit = ',"dogbit":1';
			$bison['powerLevel'] -= 1;
		}
	}
}
$cid = 0; //Crop ID
$money = 0;
$landId = 0;
foreach($status as $sk=>$sv) {
	if($sv['b']==6 && $sv['m']>$sv['l']) {
		$landId = $sk+1;
		$status[$sk]['m'] -= 1;
		$cid = $status[$sk]['a'];
		$money += $cropstype[$cid]['sale']*3;
		$bison['feed'] = array($uId,$sv['a']);
		$bison['alreadyEat'] = 1;
		$bison['feedTime'] = $_QFG['timestamp'];
		
		$_QFG['db']->query("INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES ({$uId}, 9,0,{$_QFG['uid']},{$_QFG['timestamp']},{$sv['a']}, 0)");
		break;
	}
}
$bison['money'] += $money;
$bison['income'] = $money;
$bison['jumpKey'] = $uId;
$bison['sendTime'] = $_QFG['timestamp'];
$bison['state'] = 2;
$bison['lastEatTime'] = $_QFG['timestamp'];
$fbison['ownerid'] = $_QFG['uid'];




$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($bison)."' where uid=".$_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($fbison)."',status='".qf_encode($status)."' where uid=".$uId);

echo '{"cid":'.$cid.',"code":1,"landId":'.$landId.',"money":'.$money.$dogbit.'}';

?>