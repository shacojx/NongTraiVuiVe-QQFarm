<?php

# Quick Management

$go = $_GET['go'];

if($go == "cache_clean") {
	qf_delCache('data/*.php');
	qf_delCache('data/nc/*.php');
	qf_delCache('data/mc/*.php');
	qf_delCache('data/xml/*.xml');
	qf_delCache('data/view/*.php');
	qf_delCache('data/friend/*.php');
	die('1|&|Hoàn tất');
} elseif($go == "exchange_clean") {
	$_QFG['db']->query("DELETE FROM app_qqfarm_nclogs ");
	$_QFG['db']->query("DELETE FROM app_qqfarm_mclogs ");
	$_QFG['db']->query("DELETE FROM app_qqfarm_message");
	die('1|&|Hoàn tất');
} elseif($go == "mc_clean") {
	$_QFG['db']->query("update app_qqfarm_mc set bad='',dabian=0");
	die('1|&|Hoàn tất');
} elseif($go == "repertory_clean") {
	$_QFG['db']->query("update app_qqfarm_nc set repertory=''");
	$_QFG['db']->query("update app_qqfarm_mc set repertory=''");
	die('1|&|Hoàn tất');
} elseif($go == "add_money") {
	$_QFG['db']->query("update app_qqfarm_user set money=money+" . intval($_GET["money"]));
	die('1|&|Hoàn tất');
} elseif($go == "add_yb") {
	$_QFG['db']->query("update app_qqfarm_user set yb=yb+" . intval($_GET["yb"]));
	die('1|&|Hoàn tất');
} elseif($go == "add_exp") {
	$_QFG['db']->query("update app_qqfarm_nc set exp=exp+" . intval($_GET["nc"]));
	$_QFG['db']->query("update app_qqfarm_mc set exp=exp+" . intval($_GET["mc"]));
	die('1|&|Hoàn tất');
} elseif($go == "healthmode") {

	$list1 = $_QFG['db']->fetchAll("SELECT uid,vip FROM app_qqfarm_user");
	foreach($list1 as $key1 => $value1) {
		//Repair VIP
		$vip = qf_decode($value1['vip']);
		if( $vip['status'] > 0 || $vip['valid'] >$_QFG['timestamp'] ){
			if(!(int)$vip['join']) $vip['join'] = $_QFG['timestamp'];
			if(!(int)$vip['last']) $vip['last'] = $_QFG['timestamp'];
			if(!(int)$vip['valid']) $vip['valid'] = $_QFG['timestamp'];
			if(!(int)$vip['status']) $vip['status'] = 0;
			if(!(int)$vip['exp']) $vip['exp'] = 0;
			if(!(int)$vip['gift_mc']) $vip['gift_mc'] = 0;
			if(!(int)$vip['gift_nc']) $vip['gift_nc'] = 0;
		} else {
			$vip['join'] = 0;
			$vip['last'] = 0;
			$vip['valid'] = 0;
			$vip['status'] = 0;
			$vip['exp'] = 0;
			$vip['gift_mc'] = 0;
			$vip['gift_nc'] = 0;		
		}
		$_QFG['db']->query("UPDATE app_qqfarm_user set vip='" . qf_encode($vip) . "' where uid=" . $value1['uid']);
	}

	$hm = '{"beginTime":0,"canClose":1,"date":"1970-01-01|1970-01-07","endTime":0,"serverTime":1266900062,"set":0,"time":"08|00","valid":0}';
	$_QFG['db']->query("update app_qqfarm_nc set healthmode='{$hm}'");
	die('1|&|Hoàn tất');
} elseif($go == "sendgift") {
	include('source/admin/mod/quick_gift.php');
} elseif($go == "sendmsg") {
	$name = $_GET["name"];
	$msg = $_POST["msg"];
	if(!$name || !$msg) {
		die('0|&|Chưa nhập thông tin cần thiết.');
	}
	$users = $_QFG['db']->fetchAll("SELECT uid FROM app_qqfarm_user");
	foreach($users as $v) {
		$_QFG['db']->query("INSERT INTO app_qqfarm_message (`toid`, `toname`, `fromid`, `fromname`, `msg`, `time`, `isreply`, `isread`) VALUES ({$v['uid']}, '". qf_getUserName($v['uid'])."', {$_QFG['uid']}, '{$name}', '{$msg}', {$_QFG['timestamp']}, 0, 0)");
	}
	die('1|&|Hoàn tất');
} elseif($go == "delmsg") {
	$name = $_GET["name"];
	if(!$name) {
		die('0|&|Chưa điền tên người gửi');
	}
	$_QFG['db']->query("DELETE FROM app_qqfarm_message where fromname ='{$name}'");
	die('1|&|Đã xóa tất cả tin nhắn được gửi bởi “'. $name .'”');
} elseif($go == "farmland") {
	qf_getCache('cropstype', '/nc/');
	$_QFG['db']->query("update app_qqfarm_nc set bison=''");
	$list = $_QFG['db']->fetchAll("SELECT uid, status, package, reclaim,redland FROM app_qqfarm_nc");
	foreach($list as $key => $value) {
		//Repair seed
		$package = qf_decode($value['package']);
		foreach($package as $pk=>$pv) {
			if(!in_array($pk, array_keys($cropstype))) {
				unset($package[$pk]);
			}
		}
		//Field parameters for
		$status = qf_decode($value['status']);
		//Get the actual number of cultivated farmland
		$farmlandCount = count($status);
		//Add a field to be cultivated
		if($farmlandCount < $value['reclaim']) {
			for($i = $farmlandCount; $i < $value[reclaim]; $i++) {
				$status[$i] = array("a"=>0,"b"=>0,"c"=>0,"d"=>0,"e"=>1,"f"=>0,"g"=>0,"h"=>1,"i"=>100,"j"=>0,"k"=>0,"l"=>0,"m"=>0,"n"=>array(),"o"=>0,"p"=>array(),"q"=>0,"r"=>1251351725,"bitmap"=>0,"pId"=>0);
			}
		}
		//Remove more farmland reclamation
		elseif($farmlandCount > $value['reclaim']) {
			foreach($status as $k => $v) {
				if($k >= $value['reclaim']) {
					unset($status[$k]);
				}
			}
		}
		//Red Land
		if($value['redland']>0 && $value['redland']<19 && $value['reclaim']==18) {
			foreach($status as $sk=>$sv) {
				if($sk<$value['redland']) {
					$status[$sk]['bitmap'] = 1;
				} else {
					$status[$sk]['bitmap'] = 0;
				}
			}
		}
		//Farmland preservation parameters
		$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "',package='" . qf_encode($package) . "' where uid=" . $value['uid']);
	}

	die('1|&|Hoàn tất');
} else {
	qf_getCache('cropstype', '/nc/');
	$nc_itemtype = qf_getCache('itemtype', '/nc/');
	qf_getCache('toolstype', '/nc/');
	$mc_itemtype = qf_getCache('itemtype', '/mc/');
	qf_getCache('animaltype', '/mc/');
	qf_getView("admin/quick");
}

?>