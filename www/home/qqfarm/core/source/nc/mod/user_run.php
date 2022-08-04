<?php

# Visit the farm yourself and others

if($_REQUEST['ownerId'] && $_QFG['uid'] != $_REQUEST['ownerId']) {
	$toFriend = true;
	$uId = (int)$_REQUEST['ownerId'];
}
else $uId = $_QFG['uid'];

if($toFriend) {
	$list = $_QFG['db']->fetchOne("
		SELECT U.uid,U.username,U.beasts,U.regname,U.money,U.yb,U.pf,U.tianqi,
			N.status,N.reclaim,N.exp,N.taskid,N.badnum,N.dog,N.decorative,N.activeItem,N.healthMode,N.chris,N.randtime
				FROM  app_qqfarm_user U Left JOIN app_qqfarm_nc N ON N.uid=U.uid where U.uid={$uId}
	");
} else {
	$list = $_QFG['db']->fetchOne("
		SELECT U.uid,U.username,U.beasts,U.regname,U.money,U.yb,U.vip,U.pf,U.tianqi,
			N.status,N.reclaim,N.nc_e,N.exp,N.taskid,N.badnum,N.dog,N.decorative,N.chris,N.activeItem,N.healthMode,N.randtime 
				FROM app_qqfarm_user U Left JOIN app_qqfarm_nc N ON N.uid=U.uid where U.uid={$uId}
	");
}

$username=$list['username'];
if(!$username){
	$username=$list['regname'];
	if(!$username){
		$username='Người chơi';
	}
}
//Health model
$isUpdate = 0;
$healthMode = qf_decode($list['healthMode']);
if($_QFG['timestamp'] > $healthMode['endTime']) {
	$set = 0;
	$valid = 0;
	$canClose = 1;
	if($healthMode['valid'] != 0) {
		$isUpdate = 1;
		$healthMode['beginTime'] = 0;
		$healthMode['endTime'] = 0;
		$healthMode['set'] = 0;
		$healthMode['valid'] = 0;
		$healthMode['canClose'] = 1;
		$healthMode['date'] = '1970-01-01|1970-01-07';
	}
} elseif($_QFG['timestamp'] < $healthMode['beginTime'] && $healthMode['beginTime'] != 0) {
	$set = 1;
	$valid = 0;
	$canClose = 1;
} else {
	$set = 1;
	$valid = 1;
	$canClose = 0;
}
if($isUpdate == 1) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set healthMode='" . qf_encode($healthMode) . "' where uid=" . $uId);
	$isUpdate = 0;
}

//Field parameters
$status = qf_decode($list['status']);
foreach($status as $key => $value) {
	//Fix possible errors
	if($key >= $list['reclaim']) {
		unset($status[$key]);
		$isUpdate = 1;
		continue;
	}
	//Crop condition update
	if($status[$key]['a'] != 0) {
		$a = $status[$key]['a'];
		$q = $status[$key]['q'];
		$k = $status[$key]['k'];
		$p = (array)$status[$key]['p'];
		$zuowutime = $_QFG['timestamp'] - $q;
		if($zuowutime >= $cropstype[$a]['growthCycle'] && $k == 0 && $q != 0) {
			$b = 6;
			$c = 0;
			$d = 0;
			$e = 1;
			$f = 0;
			$g = 0;
			$h = 1;
			$k = $cropstype[$a]['output'];
			$cnt = 0; //
			foreach($p as $pk => $pv) {
				if($pv == 1 or $pv == 2) {
					$cnt += ceil(($_QFG['timestamp'] - $pk) / 300) + 1;
				} elseif($pv == 3) {
					$cnt += ceil(($_QFG['timestamp'] - $pk) / 300) * 2 + 2;
				}
			}
			if($cnt > 50) {
				$cnt = 50;
			}
			$k = ceil($k * (100 - $cnt) / 100);
			$l = floor($k * 0.6);
			if( $status[$key]['bitmap'] == 1 && (int)$cropstype[$a]['isRed'] !=1 ){
				$k = intval($k * 1.1);
			}
			$m = $k;
			$status[$key]['b'] = $b;
			$status[$key]['c'] = $c;
			$status[$key]['d'] = $d;
			$status[$key]['e'] = $e;
			$status[$key]['f'] = $f;
			$status[$key]['g'] = $g;
			$status[$key]['h'] = $h;
			$status[$key]['k'] = $k;
			$status[$key]['l'] = $l;
			$status[$key]['m'] = $m;
			$isUpdate = 1;
		}
	}
}

if($isUpdate == 1) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "', randtime=".$list['randtime']." where uid=" . $uId);
	$isUpdate = 0;
}

//Decorative parameters
$decorative = qf_decode($list['decorative']);
foreach($decorative as $item_type => $value) {
	foreach($value as $key => $value1) {
		if($value1['status'] == 1) {
			if(($_QFG['timestamp'] < $value1['validtime'] || $value1['validtime'] == 1) && array_key_exists($key, $itemtype)) {
				$decorative_echo[$item_type]['itemId'] = $key;
			} else {
				unset($decorative[$item_type][$key]);
				$isUpdate = 1;
				$decorative[$item_type][$item_type]['status'] = 1;
				$decorative[$item_type][$item_type]['validtime'] = 1;
				$decorative_echo[$item_type]['itemId'] = $item_type;
			}
		} else {
			if($value1['validtime'] != 1 && $_QFG['timestamp'] >= $value1['validtime']) {
				unset($decorative[$item_type][$key]);
				$isUpdate = 1;
			}
		}
	}

	 if(!$decorative[$item_type]){
		 $isUpdate = 1;
		 $decorative[$item_type][$item_type]['status'] = 1;
		 $decorative[$item_type][$item_type]['validtime'] = 1;
		 $decorative_echo[$item_type]['itemId'] = $item_type;
	 }
}

if($isUpdate == 1) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative) . "' where uid=" . $uId);
	$isUpdate = 0;
}

//Dogs parameters
$dog = qf_decode($list['dog']);
$dogstr['dogId'] = 0;
$dogstr['isHungry'] = 0;
if($_QFG['timestamp'] > $dog['dogFeedTime']) {
	$dogstr['isHungry'] = 1;
} else {
	$dogstr['isHungry'] = 0;
}
if($dog) {
	foreach((array)$dog['dogs'] as $key => $value) {
		if($value['status'] == 1) {
			$decorative_echo['8']['itemId'] = 80000 + $key;
			$dogstr['dogId'] = $key;
		}
	}
}

//Billboard
if($list['activeItem'] > 0) $decorative_echo['9']['itemId'] = $list['activeItem'];	

//Farm Images
if($decorative['10'] > 0) $decorative_echo['10']['itemId'] = (int)$decorative['10'];
//Novice tasks
$taskid = '';
if($list[taskid] < 12) {
	$taskid = ',"task":{"taskId":' . $list[taskid] . ',"taskFlag":1}';
}
if($list[taskid] == 0) {
	$taskid = ',"task":{"taskId":1,"taskFlag":1},"welcome":1';

}

// Return information
$items = qf_jsonCode($decorative_echo);
if($items == 'null') {
	$items = '{"1":{"itemId":1},"2":{"itemId":2},"3":{"itemId":3},"4":{"itemId":4}}';
	$itemsdb = '{"1":{"1":{"status":1,"validtime":1}},"2":{"2":{"status":1,"validtime":1}},"3":{"3":{"status":1,"validtime":1}},"4":{"4":{"status":1,"validtime":1}}}';
	$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative=".$itemsdb." where uid=" . $uId);
	
}
//放牛
$beast_info = $beast_drop = array();
$beastsinfo = qf_decode($list['beasts']);
foreach($beastsinfo['info'] as $key => $value) {
	$beasts = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $value['fid']);
	$beasts = qf_decode($beasts);
	$fstatus = qf_decode($list['status']);
	if($beasts['beasts'][$value['id']]['status'] == 2 && $_QFG['timestamp'] < $beasts['beasts'][$value['id']]['returntime']){

		$beasts['beasts'][$value['id']]['curblood'] = round(($beasts['beasts'][$value['id']]['returntime'] - $_QFG['timestamp'])/360);
		if((int)$beasts['beasts'][$value['id']]['isfarm'] == 1){		
			$beast_info[$key] = array("app"=>"isfarm","attack"=>$value['attack'],"blood"=>$beasts['beasts'][$value['id']]['curblood'],"domain"=>"xy","fid"=>$value['fid'],"id"=>$value['id'],"income"=>$beasts['beasts'][$value['id']]['fincome'],"raisetime"=>$beasts['beasts'][$value['id']]['raisetime'],"returntime"=>$beasts['beasts'][$value['id']]['returntime'],"src"=>16,"status"=>2,"stealtime"=>$beasts['beasts'][$value['id']]['raisetime'],"type"=>$beasts['beasts'][$value['id']]['type']);
		}

	} elseif ($_QFG['timestamp'] > $beasts['beasts'][$value['id']]['returntime'] && $beasts['beasts'][$value['id']]['returntime']){
		$num = ($beasts['beasts'][$value['id']]['returntime'] - $beasts['beasts'][$value['id']]['raisetime'])/3600;

		if((int)$value['isfarm']==1){
			foreach($fstatus as $nkey => $nvalue) {
				if($nc_status[$nkey]['m']>0 && $nc_status[$nkey]['m'] > $nc_status[$nkey]['k']){
					$status[$nkey]['m'] -=(int)$num;
					$income = $cropstype[$nvalue['a']]['sale'] * (int)$num;;
					break;
				}
			}
			$_QFG['db']->query("update app_qqfarm_nc set status='" . qf_encode(array_values($fstatus)) . "' where uid=" . $uId);
		}

		$beasts['beasts'][$value['id']]['income'] += $income;
		$beasts['beasts'][$value['id']]['fincome'] += $income;
		if($_QFG['timestamp'] < $beasts['beasts'][$value['id']]['returntime'] + 5*3600){
			$up = 1 ;
			$beasts['beasts'][$value['id']]['status'] = 3;
			$beasts['beasts'][$value['id']]['return'] = 1;
			$beasts['beasts'][$value['id']]['curblood'] = round(($_QFG['timestamp']-$value['returntime'])/(5*3600/$value['totalblood']));
			unset($beastsinfo['info'][$key]);
		} else {
			$up = 1 ;
			$beasts['beasts'][$value['id']]['status'] = 1;
			$beasts['beasts'][$value['id']]['return'] = 1;
			$beasts['beasts'][$value['id']]['curblood'] = $beasts['beasts'][$value['id']]['totalblood'];
			unset($beastsinfo['info'][$key]);
		}
	} 

	$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beasts)."' where uid=" . $value['fid']);
}
$up == 1 && $_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beastsinfo)."' where uid=" . $uId);

foreach($beastsinfo['drop'] as $key => $value) {
	if($beastsinfo['drop']) $beast_drop[$key] = array("id"=>$value['id'],"num"=>$value['num'],"time"=>$value['time'],"type"=>9);
}

if($toFriend) {
	//NPC task parameters
	if($_QSC['missionName']) {
		@include("source/nc/mission/{$_QSC['missionName']}_vars_2.php");
	}
	isset($npc) || $npc = '';
	//Return Information
	echo '{"a":0,"c":0,"dog":' . qf_jsonCode($dogstr) . ',"exp":' . $list['exp'] . ',"farmlandStatus":' . qf_jsonCode($status) . ',"items":' . $items . $npc.',"user":{"healthMode":{"beginTime":' . $healthMode['beginTime'] . ',"canClose":' . $canClose . ',"date":"' . $healthMode['date'] . '","endTime":' . $healthMode['endTime'] . ',"serverTime":' . $_QFG['timestamp'] . ',"set":' . $set . ',"time":"' . $healthMode['time'] . '","valid":' . $valid . '},"pf":' . $list['pf'] . '},"beast":{"drop":'.qf_jsonCode(array_values($beast_drop)).',"info":'.qf_jsonCode(array_values($beast_info)).'}}';
} else {
	// Mischief times
	$canbad = $list['badnum'];
	//Consumer tips
	$isread = $_QFG['db']->result('SELECT COUNT(*) FROM app_qqfarm_nclogs WHERE uid = ' . $_QFG['uid'] . ' and isread = 0');
	$a = $isread ? 1 : 0;
	//Message tips
	$isread = $_QFG['db']->result('SELECT COUNT(*) FROM app_qqfarm_message WHERE toID = ' . $_QFG['uid'] . ' and isread = 0');
	$c = $isread ? 1 : 0;
	//Weather
	$tqq = $list['tianqi'] == 1 ? 'Nắng' : 'Mưa';
	//Update access time
	$_QFG['db']->query("UPDATE app_qqfarm_user set visittime=".$_QFG['timestamp']." where uid=" . $uId);
	//VIP status
	$vip = qf_decode($list['vip']);
	//uinLogin
	$uinLogin = $_QFG['uid'];
	//NPC task parameters
	if($_QSC['missionName']) {
		@include("source/nc/mission/{$_QSC['missionName']}_vars.php");
	}
	$missionTime =$mission['PrepareTime'] ? strtotime($mission['PrepareTime']) : $_QFG['timestamp'];
	//Return Information

	echo '{"a":' . $a . ',"b":1,"c":' . $c . ',"d":' . (int)$vip['gift_nc'] . ',"dog":' . qf_jsonCode($dogstr) . ',"e":' . $list['nc_e'] . ',"exp":' . $list['exp'] . ',"farmlandStatus":' . qf_jsonCode($status) . ',"items":' . $items . ',"serverTime":{"time":' . $_QFG['timestamp'] . '}' . $taskid . ',"user":{"canbad":' . $canbad . ',"exp":' . $list['exp'] . ',"headPic":"' . qf_getheadPic(0, 'small') . '","healthMode":{"beginTime":' . $healthMode['beginTime'] . ',"canClose":' . $canClose . ',"date":"' . $healthMode['date'] . '","endTime":' . $healthMode['endTime'] . ',"serverTime":' . $_QFG['timestamp'] . ',"set":' . $set . ',"time":"' . $healthMode['time'] . '","valid":' . $valid . '},"missionTime":' . $missionTime . ',"money":' . $list['money'] . ',"FB":' . $list['yb'] . ',"pf":' . $list['pf'] . ',"uId":' . $_QFG['uid'] . ',"uinLogin":'.$uinLogin.',"userName":"' . $username . '","yellowlevel":' . qf_toVipLevel($vip['exp']) . ',"yellowstatus":' . (int)$vip['status'] . '},"weather":{"weatherDesc":"' . $tqq . '","weatherId":' . $list['tianqi'] . '},"beast":{"drop":'.qf_jsonCode(array_values($beast_drop)).',"info":'.qf_jsonCode(array_values($beast_info)).'}}';
}

//Random brush grass, insects, drought
if(($_QFG['timestamp']-$list['randtime']) > 3600 ) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set randtime=".$_QFG['timestamp']." where uid=" . $uId);
	if(mt_rand(0, 100) <= 33) {
		include("source/nc/plus/bad_nc.php");
	}
}

?>