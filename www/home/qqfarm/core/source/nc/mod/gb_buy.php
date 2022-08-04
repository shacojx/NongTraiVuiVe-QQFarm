<?php

# Buy ingot

$value = $_QFG['db']->fetchOne("SELECT yb,vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$fb = (int)$value['yb'];
$vip = qf_decode($value['vip']);

$activeitem = $_REQUEST['payitem'];
list($ai, $number) = explode("-", $activeitem);

$type = intval($ai / 10000);

if($type == 4) {//买狗
	$tid = $ai - 40000;
	$dogstr = $_QFG['db']->result("SELECT dog FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$dogstr = qf_decode($dogstr);
	if($tid < 9000) {
		if($vip['status']) {
			$buy_fb = $toolstype[$ai]["YFBPrice"];
		} else {
			$buy_fb = $toolstype[$ai]["FBPrice"];
		}
		$tName = $toolstype[$ai]['tName'];
		if($buy_fb == 0) {
			die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Vui lòng thử lại!","payqb":0,"payqp":0,"dnaurl":""}');
		}
		if($fb < $buy_fb) {
			die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Không đủ tiền!","payqb":0,"payqp":0,"dnaurl":""}');
		}
		if($dogstr["dogs"] <> "") {
			if($dogstr["dogs"]->$tid->dogUnWorkTime == 1) {
				die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Bạn đã có chó rồi!","payqb":0,"payqp":0,"dnaurl":""}');
			}
		}
		if($dogstr["dogFeedTime"] < $_QFG['timestamp']) {
			$dogstr["dogFeedTime"] = $_QFG['timestamp'] + 86400;
		} else {
			$dogstr["dogFeedTime"] = $dogstr["dogFeedTime"] + 86400;
		}
		foreach((array)$dogstr as $key => $value) {
			foreach((array)$value as $k => $v){
				if($k == $tid) {
					die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Bạn đã có chó rồi!","payqb":0,"payqp":0,"dnaurl":""}');
				} else {
					$dec = 1;
					$dogstr["dogs"][$tid]['status'] = 1;
					$dogstr["dogs"][$tid]['dogUnWorkTime'] = 1;
				}
			}
			if($dec) {
				foreach((array)$value as $k => $v){
					if($k != $tid) $dogstr[$key][$k]['status'] = 0;
				}
			}
		}
	} else {
		if($vip['status']) {
			$buy_fb = $toolstype[$ai - 40000]["YFBPrice"];
		} else {
			$buy_fb = $toolstype[$ai - 40000]["FBPrice"];
		}
		$tName = $toolstype[$tid]["tName"];
		if($buy_fb == 0) {
			die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Vui lòng thử lại!","payqb":0,"payqp":0,"dnaurl":""}');
		}
		if($fb < $buy_fb ) {
			die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Không đủ tiền!","payqb":0,"payqp":0,"dnaurl":""}');
		}
		if($ai - 40000 == 9001) {
			$dogFeed = 86400;
		} elseif($ai - 40000 == 9002) {
			$dogFeed = 604800;
		} else {
			$dogFeed = 0;
		}
		if($dogstr["dogFeedTime"] < $_QFG['timestamp']) {
			$dogstr["dogFeedTime"] = $_QFG['timestamp'] + $dogFeed;
		} else {
			$dogstr["dogFeedTime"] = $dogstr["dogFeedTime"] + $dogFeed;
		}
	}

	$_QFG['db']->query("UPDATE app_qqfarm_nc set dog='" . qf_encode($dogstr) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	//Log consumption
	$payitem = explode('-',$_REQUEST['payitem']);
	$payitem[0] = $payitem[0]>49000 ? ($payitem[0]-40000) : $payitem[0];
	$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] .
			", 8, " . $payitem[1] . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] .
			", '" . $payitem[0] . "', 1, '".$buy_fb."');";
	$_QFG['db']->query($sql);

	die('{"tId":' . $tid . ',"tName":"' . $tName . '","code":0,"direction":"Mua thành công!","num":' . $number . ',"FB":-' . $buy_fb . ',"money":0,"type":' . $type . '}');

} elseif($type == 2) {//If you buy
	$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$decorative = qf_decode($decorative);
	if($vip['status']) {
		$buy_fb = $itemtype[$ai - 20000]['YFBPrice'];
	} else {
		$buy_fb = $itemtype[$ai - 20000]['FBPrice'];
	}
	$buy_time = $itemtype[$ai - 20000]['itemValidTime'];
	$buy_type = $itemtype[$ai - 20000]['itemType'];
	$buy_exp = $itemtype[$ai - 20000]['exp'];
	if($buy_fb == 0) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Vui lòng thử lại!","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Không đủ tiền!","payqb":0,"payqp":0,"dnaurl":""}');
	}
	foreach($decorative as $item_type => $value) {
		if($buy_type == $item_type) {
			foreach((array)$value as $key => $v) {
				if($key == $ai - 20000) {
					die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Bạn đã mua vật phẩm này rồi!","payqb":0,"payqp":0,"dnaurl":""}');
				} else {
					$ai1 = $ai - 20000;
					$dec = 1;
					$decorative[$item_type][$ai1]['status'] = 1;
					$decorative[$item_type][$ai1]['validtime'] = $_QFG['timestamp'] + $buy_time;
				}
			}
			if($dec) {
				foreach((array)$value as $key => $v) {
					if($key != $ai - 20000)
						$decorative[$item_type][$key]['status'] = 0;
				}
			}
		}
	}

	$_QFG['db']->query("UPDATE app_qqfarm_nc set exp = exp + " . $buy_exp . ",decorative='" . qf_encode($decorative) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb= " . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	//Log consumption
	$payitem = explode('-',$_REQUEST['payitem']);
	$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] .
			", 8, " . $payitem[1] . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] .
			", '" . ($payitem[0]-20000) . "', 1, '".$buy_fb."');";
	$_QFG['db']->query($sql);

	echo '{"code":0,"direction":"","ecode":0,"exp":' . $buy_exp . ',"itemId":'.$ai1.',"itemName":"'.$itemtype[$ai1]['itemName'].'","itemType":'.$itemtype[$ai1]['itemType'].',"levelUp":false,"money":0,"FB":-' . $buy_fb . ',"num":1}';

} elseif($type == 3 || $type == 10) {// Buy fertilizer
	$tools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$tools = qf_decode($tools);
	$mctools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_user where uid=" . $_QFG['uid']);
	$mctools = qf_decode($mctools);
	$fertarr = $_QFG['db']->result("SELECT tools FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$fertarr = qf_decode($fertarr);

	if($vip['status']) {
		$buy_fb = $toolstype[$ai]["YFBPrice"] * $number;
	} else {
		$buy_fb = $toolstype[$ai]["FBPrice"] * $number;
	}

	$tName = $toolstype[$ai]['tName'];

	if($buy_fb == 0) die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Vui lòng thử lại!","payqb":0,"payqp":0,"dnaurl":""}');
	if($fb < $buy_fb) die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Không đủ tiền!","payqb":0,"payqp":0,"dnaurl":""}');
	
	if($ai == 39101 || $ai == 39102){
		$tid = $ai - 39100;
		$fertarr[$tid + 1] = $fertarr[$tid + 1] + 7*$number;
		$num = 7*$number;
	} elseif($ai == 39103 ){
		$tid = 7;
		$fertarr[7] = $fertarr[7] + 7*$number;
		$num = 7*$number;
	} elseif($ai == 100013 || $ai == 100014 ){
		$tid = $ai - 100011;
		$fertarr[$tid] = $fertarr[$tid] + 5*$number;
		$tools[3] = $tools[3] + ($ai - 100012) * $number;
		$num = 5*$number;
	} elseif($ai>100000 && $ai < 100009){
		$tid = $ai - 100000;
		$mctools[$ai] += $number; 
		$num = $number;
	} else {
		$tid = $ai - 30000;
		$fertarr[$tid] = $fertarr[$tid] + $number;
		$num = $number;
	}

	$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($fertarr) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set tools='" . qf_encode($tools) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . ",tools='" . qf_encode($mctools) . "' where uid=" . $_QFG['uid']);

	//Log consumption
	$payitem = explode('-',$_REQUEST['payitem']);
	$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] .
			", 8, " . $payitem[1] . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] .
			", '" . $payitem[0] . "', 1, '".$buy_fb."');";
	$_QFG['db']->query($sql);

	echo '{"tId":' . $tid . ',"tName":"' . $tName . '","code":0,"msg":"Mua thành công!","num":' . $num . ',"fb":-' . $buy_fb . ',"money":0,"type":' . $type . '}';
}


?>