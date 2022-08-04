<?php

# Y money to buy

$value = $_QFG['db']->fetchOne("SELECT yb,vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$fb = (int)$value['yb'];
$vip = qf_decode($value['vip']);
$activeitem = $_REQUEST['payitem'];
list($ai, $number) = explode("-", $activeitem);

$type = intval($ai/10000);

if($type == 5) {
	$guard = $_QFG['db']->result("SELECT guard FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$guard = qf_decode($guard);
	$wid = $ai-50000;
	if($vip['status']) {
		$buy_fb = $toolstype[$wid]["yqdprice"] * $number;
	} else {
		$buy_fb = $toolstype[$wid]["qdprice"] * $number;
	}
	$name = $toolstype[$wid]['name'];

	if($buy_fb == 0) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Vui lòng thử lại sau!","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Không đủ tiền!","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($guard["guardFeedTime"] < $_QFG['timestamp']) {
		$guard["guardFeedTime"] = $_QFG['timestamp'] + $toolstype[$wid]["effect"]*$number;
	} else {
		$guard["guardFeedTime"] = $guard["guardFeedTime"] + $toolstype[$wid]["effect"]*$number;
	}
	$_QFG['db']->query("UPDATE app_qqfarm_mc set guard='" . qf_encode($guard) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	//Log consumption
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if (($value['type'] == 11) && ($value['fromid'] == $_QFG['uid']) && ($number > 0)) {
			$list = $value['iid'];
			$money = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$sy=explode(",",$list);
			$ct=explode(",",$scount);
			if(in_array(($activeitem+10000),$sy)){
				for($i=0;$i<count($sy);$i++){
					if($sy[$i]==($activeitem+10000)){
						$ct[$i] = $ct[$i]+$number;
					}
				}
				$scount = implode(",",$ct);
				$list = $list;
			}else{
				$list = $list . "," . ($activeitem+10000);
				$scount = $scount . "," . $number;
			}
			$money = $money + $buy_fb;
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list .
			"', money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .
			", isread = 1 where uid = " . $_QFG['uid'] .
			" AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .
			$_QFG['uid'];
		}
	}
	if(!$sql1 && $number > 0) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .
		$_QFG['uid'] . ", 11," . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . 
		($activeitem+10000) . ", 1, " . $buy_fb . ");";
	}
	$query = $_QFG['db']->query($sql1);
	echo '{"code":0,"payresultcode":0,"payerrorcode":0,"msg":"Mua thành công!","payqb":30,"payqp":0,"dnaurl":""}';
}

if($type == 6) {
	$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$decorative = qf_decode($decorative);
	$itemID = $ai-60000;
	if($vip['status']) {
		$buy_fb = $itemtype[$itemID]["YFBPrice"] * $number;
	} else {
		$buy_fb = $itemtype[$itemID]["FBPrice"] * $number;
	}

	$buy_time = $itemtype[$itemID]['itemValidTime'];
	$buy_type = $itemtype[$itemID]['itemType'];
	$buy_exp = $itemtype[$itemID]['exp'];

	if($buy_fb == 0) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Vui lòng thử lại sau!","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Không đủ tiền!","payqb":0,"payqp":0,"dnaurl":""}');
	}

	foreach($decorative['item1'] as $key => $value1) {
		if($key == $itemID) {
			die('{"code":1,"payresultcode":0,"payerrorcode":0,"msg":"Bạn đã mua thứ này rồi!","payqb":0,"payqp":0,"dnaurl":""}');
		} else {
			$dec = 1;
			$decorative['item1'][$itemID]['status'] = 1;
			$decorative['item1'][$itemID]['validtime'] = $_QFG['timestamp'] + $buy_time;
		}
	}

	if($dec) {
		foreach($decorative['item1'] as $key => $value1) {
			if($key != $itemID) $decorative['item1'][$key]['status'] = 0;
		}
	}

	$_QFG['db']->query("UPDATE app_qqfarm_mc set exp = exp + " . $buy_exp . ",decorative='" . qf_encode($decorative) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	echo '{"code":0,"addExp":' . $buy_exp . ',"levelUp":false}';
}

if($type == 7) {
	$fertarr = $_QFG['db']->result("SELECT tools FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$fertarr = qf_decode($fertarr);
	$wid = $ai-70000;
	if($vip['status']) {
		$buy_fb = $toolstype[$wid]["yqdprice"] * $number;
	} else {
		$buy_fb = $toolstype[$wid]["qdprice"] * $number;
	}
	$name = $toolstype[$wid]['name'];
	if($buy_fb == 0) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Vui lòng thử lại sau!","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Không đủ tiền!","payqb":0,"payqp":0,"dnaurl":""}');
	}
	$fertarr[$wid] = $fertarr[$wid] + $number;

	$_QFG['db']->query("UPDATE app_qqfarm_mc set tools='" . qf_encode($fertarr) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	//Log consumption
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if (($value['type'] == 11) && ($value['fromid'] == $_QFG['uid']) && ($number > 0)) {
			$list = $value['iid'];
			$money = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$sy=explode(",",$list);
			$ct=explode(",",$scount);
			if(in_array(($activeitem+10000),$sy)){
				for($i=0;$i<count($sy);$i++){
					if($sy[$i]==($activeitem+10000)){
						$ct[$i] = $ct[$i]+$number;
					}
				}
				$scount = implode(",",$ct);
				$list = $list;
			}else{
				$list = $list . "," . ($activeitem+10000);
				$scount = $scount . "," . $number;
			}
			$money = $money + $buy_fb;
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list .
			"', money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .
			", isread = 1 where uid = " . $_QFG['uid'] .
			" AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .
			$_QFG['uid'];
		}
	}
	if(!$sql1 && $number > 0) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .
		$_QFG['uid'] . ", 11," . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . 
		($activeitem+10000) . ", 1, " . $buy_fb . ");";
	}
	$query = $_QFG['db']->query($sql1);

	echo '{"tId":' . $wid . ',"name":"' . $name . '","code":1,"msg":"Mua thành công!","num":' . $number . ',"fb":-' . $buy_fb . ',"money":0,"type":' . $type . '}';
}

if($type == 10) {
	$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$mctools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_user where uid=" . $_QFG['uid']);
	$tools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$fertarr = $_QFG['db']->result("SELECT tools FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$fruit = qf_decode($fruit);
	$mctools = qf_decode($mctools);
	$tools = qf_decode($tools);
	$fertarr = qf_decode($fertarr);
	$wid = $ai-100000;
	$wd = $ai-100010;

	if($vip['status']) {
		$buy_fb = $toolstype[$wid]["yqdprice"] * $number;
	} else {
		$buy_fb = $toolstype[$wid]["qdprice"] * $number;
	}
	$name = $toolstype[$wid]['name'];
	if($buy_fb == 0) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Vui lòng thử lại sau!","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"Không đủ tiền!","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($ai < 100009){
		$mctools[$ai] += $number;
		$name = $toolstype[$ai]['name'];
	} elseif($ai == 100015){
		$fertarr[1] = $fertarr[1] + 5 * $number;
		$tools[7] = $tools[7] + $number;
	} elseif($ai == 100016){
		$fertarr[2] = $fertarr[2] + 5 * $number;
		$tools[7] = $tools[7] +2 * $number;
	} elseif($ai == 100017){
		$fertarr[3] = $fertarr[3] + 3 * $number;
		$fertarr[2] = $fertarr[2] + $number;
		$fertarr[1] = $fertarr[1] + $number;
		$fertarr[4] = $fertarr[4] + 5 * $number;
		$fruit[2001] += $number;
	} elseif($ai == 100018){
		$fertarr[3] = $fertarr[3] + 3 * $number;
		$fertarr[2] = $fertarr[2] + $number;
		$fertarr[1] = $fertarr[1] + $number;
		$fertarr[4] = $fertarr[4] + 5 * $number;
		$fruit[2003] += $number;
	} elseif($ai == 100019){
		$fertarr[3] = $fertarr[3] + 3 * $number;
		$fertarr[2] = $fertarr[2] + $number;
		$fertarr[1] = $fertarr[1] + $number;
		$fertarr[4] = $fertarr[4] + 5 * $number;
		$fruit[2007] += $number;
	} else {
		$fertarr[$wd] = $fertarr[$wd] + 7 * $number;
	}


	$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($tools) . "',fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set tools='" . qf_encode($fertarr) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . ",tools='" . qf_encode($mctools) . "' where uid=" . $_QFG['uid']);

	//Log consumption
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if (($value['type'] == 11) && ($value['fromid'] == $_QFG['uid']) && ($number > 0)) {
			$list = $value['iid'];
			$money = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$sy=explode(",",$list);
			$ct=explode(",",$scount);
			if(in_array(($activeitem+10000),$sy)){
				for($i=0;$i<count($sy);$i++){
					if($sy[$i]==($activeitem+10000)){
						$ct[$i] = $ct[$i]+$number;
					}
				}
				$scount = implode(",",$ct);
				$list = $list;
			}else{
				$list = $list . "," . ($activeitem+10000);
				$scount = $scount . "," . $number;
			}
			$money = $money + $buy_fb;
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list .
			"', money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .
			", isread = 1 where uid = " . $_QFG['uid'] .
			" AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .
			$_QFG['uid'];
		}
	}
	if(!$sql1 && $number > 0) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .
		$_QFG['uid'] . ", 11," . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . 
		($activeitem+10000) . ", 1, " . $buy_fb . ");";
	}
	$query = $_QFG['db']->query($sql1);

	echo '{"tId":' . $wid . ',"name":"' . $name . '","code":1,"msg":"Mua thành công!","num":' . $number . ',"fb":-' . $buy_fb . ',"money":0,"type":' . $type . '}';
}

?>