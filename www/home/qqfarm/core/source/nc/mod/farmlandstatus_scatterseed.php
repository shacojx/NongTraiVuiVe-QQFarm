<?php

# Malicious grass

//Check the number of mischief
$badnum = $_QFG['db']->result("SELECT badnum FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
if($badnum < 1) {
	die('{"code":1,"direction":"Hôm nay đã phá đủ 50 lần rồi đấy!","poptype":1}');
}

$ownerId = (int)$_REQUEST['ownerId'];
$place = explode(",", $_REQUEST['place']);

$list = $_QFG['db']->fetchOne("SELECT status,tips FROM app_qqfarm_nc where uid=" . $ownerId);
$status = qf_decode($list['status']);
$Tips = qf_decode($list['tips']);

foreach($place as $id) {
	if($badnum > 0) {
		$f = $status[$id]['f'];
		$farm_w = $status[$id]['p'];
		if($f < 3) {
			$code_temp = 1;
			$f += 1;
			$status[$id]['weed'][$_QFG['uid']] += 1;
			$badnum -= 1;
			$echo_str[] = '{"canbad":' . $badnum . ',"code":1,"direction":"' . $Tips['weed_a'] . '","farmlandIndex":' . $id . ',"poptype":1,"weed":' . $f . '}';
		}
		$status[$id]['f'] = $f;
		//Crop condition p
		if($farm_w) {
			$farm_time = $_QFG['timestamp'];
			if(isset($farm_w[$farm_time])) {
				$farm_time += $f;
			}
			$farm_w1 = array($farm_time => 2);
			$farm_w = $farm_w + $farm_w1;
		} else {
			$farm_w = array($_QFG['timestamp'] => 2);
		}
		$status[$id]['p'] = $farm_w;
	} else break;
}

//Put grass Log
if($code_temp != 0) {
	$result = $_QFG['db']->fetchOne("SELECT `id`, `uid`, `fromid`, `count`, `type` FROM  app_qqfarm_nclogs WHERE fromid = " . $_QFG['uid'] . " and type = 5 and uid = " . $ownerId);
	if($result != null) {
		$sql = "UPDATE app_qqfarm_nclogs set time = " . $_QFG['timestamp'] . " where fromid = " . $_QFG['uid'] . " and type = 5 and uid = " . $ownerId;
	} else {
		$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $ownerId . ", 5,0, " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 0, 0);";
	}
	$_QFG['db']->query($sql);
}

$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "'  where uid=" . $ownerId);
$_QFG['db']->query("UPDATE app_qqfarm_nc set badnum=" . $badnum . " where uid=" . $_QFG['uid']);

echo '[' . implode(',', $echo_str) . ']';

?>