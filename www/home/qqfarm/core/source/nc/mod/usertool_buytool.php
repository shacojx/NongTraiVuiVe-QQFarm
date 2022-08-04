<?php

# Buy Tools
$value = $_QFG['db']->fetchOne("SELECT yb,vip,money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$dogstr = $_QFG['db']->result("SELECT dog FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$tools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$fertarr = $_QFG['db']->result("SELECT tools FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fb = (int)$value['yb'];
$vip = qf_decode($value['vip']);
$money = (int)$value['money'];
$dogstr = qf_decode($dogstr);
$tools = qf_decode($tools);
$fertarr = qf_decode($fertarr);

$tid = (int)$_REQUEST['tId'];
$number = (int)$_REQUEST['number'];
$type = (int)$_REQUEST['type'];
$buy_fb = $buy_money =0;

if($type == 3) {//Purchase of fertilizer
	$ai = 30000 + $tid;
	if($tid==13 || $tid==14) $ai = 100000 + $tid;
	if($toolstype[$ai]["saleOut"] == true) die('{"code":50,"direction":"Sắp hết hàng rồi, nhớ báo cho bạn bè nhé!"}');	

	if($toolstype[$ai]["FBPrice"]>0){//Buy ingot
		if($vip['status']) {
			$buy_fb = $toolstype[$ai]["YFBPrice"] * $number;
		} else {
			$buy_fb = $toolstype[$ai]["FBPrice"] * $number;
		}
		$tName = $toolstype[$ai]['tName'];
		if($fb < $buy_fb || $buy_fb <= 0) die('{"code":50,"direction":"Không đủ tiền!"}');
		if($ai == 39101 || $ai == 39102){
			$tid = $ai - 39100;
			$fertarr[$tid + 1] += 7*$number;
		} elseif($ai == 39103 ){
			$tid = 7;
			$fertarr[7] += 7*$number;
		} elseif($ai == 100013 || $ai == 100014 ){
			$tid = $ai - 100011;
			$fertarr[$tid] += 5*$number;
			$tools[3] = $tools[3] + ($ai - 100012) * $number;
			$num = 5*$number;
		} else {
			$tid = $ai - 30000;
			$fertarr[$tid] += $number;
		}
		//Log consumption
		$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] .
				", 8, " . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] .
				", '" . $ai . "', 1, '".$buy_fb."');";
		$_QFG['db']->query($sql);

	} else {//金币购买
		$buy_money = $toolstype[$ai]["price"] * $number;
		$tName = $toolstype[$ai]["tName"];
		if($money < $buy_money) die('{"code":50,"direction":"Không đủ tiền!"}');
		$fertarr[$tid] = $fertarr[$tid] + $number;
		$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($fertarr) . "' where uid=" . $_QFG['uid']);
		//Log consumption
		$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] .
				", 12, ".$number.", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] .
				", '" . $ai . "', 1, '".$buy_money."');";
		$_QFG['db']->query($sql);
	}
} elseif ($type == 4 ||$type == 22) {
	$ai = 40000 + $tid;
	if($type==22) $type = 4;
	if($tid > 9000) $ai = $tid;
	if($toolstype[$ai]["YFBPrice"]>0){//Buy ingot
		if($tid < 9000) {
			if($vip['status']) {
				$buy_fb = $toolstype[$ai]["YFBPrice"];
			} else {
				$buy_fb = $toolstype[$ai]["FBPrice"];
			}
			$tName = $toolstype[$ai]['tName'];
			if($fb < $buy_fb || $buy_fb <= 0) die('{"code":50,"direction":"Không đủ tiền!"}');
			if($dogstr["dogFeedTime"] < $_QFG['timestamp']) {
				$dogstr["dogFeedTime"] = $_QFG['timestamp'] + 86400;
			} else {
				$dogstr["dogFeedTime"] = $dogstr["dogFeedTime"] + 86400;
			}
			foreach((array)$dogstr as $key => $value) {
				foreach((array)$value as $k => $v){
					if($k == $tid) {
						die('{"code":50,"direction":"Bạn đã có chó rồi!"}');
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
				$buy_fb = $toolstype[$ai]["YFBPrice"];
			} else {
				$buy_fb = $toolstype[$ai]["FBPrice"];
			}
			$tName = $toolstype[$tid]["tName"];
			if($fb < $buy_fb || $buy_fb <= 0) die('{"code":50,"direction":"Không đủ tiền!"}');
			if($tid == 9001) {
				$dogFeed = 86400;
			} elseif($tid == 9002) {
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
		//Log consumption
		$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] .
				", 8, " . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] .
				", '" . $ai . "', 1, '".$buy_fb."');";
		$_QFG['db']->query($sql);

	} else {//Buy gold
		if($tid < 9000) {
			$tName = $toolstype[$ai]["tName"];
			$buy_money = $toolstype[$ai]['price'] * $number;
			if($money < $buy_money) die('{"code":50,"direction":"Không đủ tiền!"}');		
			if($dogstr['dogFeedTime'] < $_QFG['timestamp']) {
					$dogstr['dogFeedTime'] = $_QFG['timestamp'] + 86400;
			} else {
					$dogstr['dogFeedTime'] = $dogstr['dogFeedTime'] + 86400;
			}
			foreach((array)$dogstr as $key => $value) {
				foreach((array)$value as $k => $v){
					if($k == $tid) {
						die('{"code":50,"direction":"Bạn đã có chó rồi!"}');
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
			$buy_money = $toolstype[$tid]["price"] * $number;
			if($money < $buy_money) die('{"code":50,"direction":"Không đủ tiền!"}');
			$tName = $toolstype[$ai]["tName"];
			if($tid == 9001) {
				$dogFeed = 86400;
			} elseif($tid == 9002) {
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
	}
}
//Written to the database
$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($fertarr) . "',dog='" . qf_encode($dogstr) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set tools='" . qf_encode($tools) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_user set money=money - " . $buy_money . ",yb=yb -" . $buy_fb . " where uid=" . $_QFG['uid']);
//提示
echo'{"tId":' . $tid . ',"tName":"' . $tName . '","code":1,"direction":"Mua thành công!","num":' . $number . ',"FB":-' . $buy_fb . ',"money":-' . $buy_money . ',"type":' . $type . '}';

?>