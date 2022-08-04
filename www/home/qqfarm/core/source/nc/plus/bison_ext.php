<?php

#Displays the current information on cattle farms
$ownerId = (int)$_REQUEST['ownerId']; //Cattle owner ID

$list = $_QFG['db']->fetchOne("select status,bison from app_qqfarm_nc where uid=".$ownerId);
$status = qf_decode($list['status']);
$bison = qf_decode($list['bison']);
$money = 0;

$hour = floor(($_QFG['timestamp']-$bison['lastEatTime'])/3600);
if($hour>=1 || $bison['hungerLevel']>0) {
		if($bison['powerLevel']<=$hour) {
		$needeat = $bison['powerLevel']+$bison['hungerLevel'];
		$jumpKey = $bison['jumpKey'];
		foreach($status as $sk=>$sv) {
			if($sv['b']==6 && $sv['m']>$sv['l'] && $needeat>0) {
				if(($sv['m']-$sv['l'])>=$needeat) {
					$money += $cropstype[$sv['a']]['sale']* $needeat * mt_rand(1, 3); //* 2 or 3 fruit money
					$status[$sk]['m'] -= $needeat;
					$bison['alreadyEat'] = $needeat;
					$bison['feed'] = array($ownerId,$sv['a']);
					$bison['feedTime'] = $bison['lastEatTime']+$bison['powerLevel']*3600;
					
					$_QFG['db']->query("INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES ({$jumpKey}, 9,0,{$ownerId},{$bison['feedTime']},{$sv['a']}, 0)");
					$needeat = 0;
					break;
				} else {
					$status[$sk]['m'] = $sv['l'];
					$needeat -= $sv['m']-$sv['l'];		
					$bison['alreadyEat'] = $sv['m']-$sv['l'];
					$money += $cropstype[$sv['a']]['sale']*($sv['m']-$sv['l']) * mt_rand(1, 3); //* 2 or 3 fruit money
				}
			}
		}

		$bison['money'] += $money;
		$bison['income'] += $money;
		$bison['jumpKey'] = 0 ;
		$bison['state'] = 1;
		$bison['backTime'] = $bison['lastEatTime']+$bison['powerLevel']*3600;
		$bison['hungerLevel'] = 0;
		$bison['lastEatTime'] = 0;
		$bison['powerLevel'] = 0;
		$bison['mapDrivers'] = array();
		
		$fbison = $_QFG['db']->result("select bison from app_qqfarm_nc where uid=".$jumpKey);
		$fbison = qf_decode($fbison);
		$fbison['ownerid'] = 0;
		$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($fbison)."' where uid=".$jumpKey);
	} else {
		$needeat = $hour+$bison['hungerLevel'];
		$jumpKey = $bison['jumpKey'];
		foreach($status as $sk=>$sv) {
			if($sv['b']==6 && $sv['m']>$sv['l'] && $needeat>0) {
				if(($sv['m']-$sv['l'])>=$needeat) {
					$money += $cropstype[$sv['a']]['sale']*$needeat* mt_rand(1, 3); //* 2 or 3 fruit money
					$status[$sk]['m'] -= $needeat;
					$bison['alreadyEat'] += $needeat;
					$bison['feed'] = array($ownerId,$sv['a']);
					$bison['feedTime'] = $bison['lastEatTime'] += 3600*$hour; 
					
					$_QFG['db']->query("INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES ({$jumpKey}, 9,0,{$ownerId},{$bison['feedTime']},{$sv['a']}, 0)");
					$needeat = 0;
					break;
				} else {
					$status[$sk]['m'] = $sv['l'];
					$needeat -= $sv['m']-$sv['l'];	
					$bison['alreadyEat'] += $sv['m']-$sv['l'];
					$money += $cropstype[$sv['a']]['sale']*($sv['m']-$sv['l'])* mt_rand(1, 3); //* 2 or 3 fruit money
				}
			}
		}

		$bison['money'] += $money;
		$bison['income'] += $money;
		$bison['powerLevel'] -= $hour;
		$bison['hungerLevel'] = $needeat;
	}
}

if(($_QFG['timestamp']-$bison['leftTime'])>=0) {
	$jumpKey = $bison['jumpKey'];
	$bison['state'] = 4;
	$bison['jumpKey'] = 0;
	$fbison['ownerid'] = 0;
	$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($fbison)."' where uid=".$jumpKey);
}
$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($bison)."',status='".qf_encode($status)."' where uid=".$ownerId);

echo '{"alreadyEat":'.$bison['alreadyEat'].',"code":1,"hungerLevel":'.(8-$bison['hungerLevel']).',"income":'.$bison['income'].',"leftTime":'.($bison['leftTime']-$_QFG['timestamp']).',"ownerNickname":"'.qf_getUserName($ownerId).'","powerLevel":'.$bison['powerLevel'].',"sendTime":'.$bison['sendTime'].'}';


?>