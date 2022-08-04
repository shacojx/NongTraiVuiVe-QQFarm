<?php

# Malicious worms release

//Check the number of mischief
$badnum = $_QFG['db']->result("SELECT badnum FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
if($badnum < 1) {
	die('{"code":1,"direction":"Hôm nay phá thế là đủ rồi đấy!","poptype":1}');
}

$ownerId = (int)$_REQUEST['ownerId'];

$list = $_QFG['db']->fetchOne("SELECT status,tips FROM app_qqfarm_nc where uid=" . $ownerId);
$status = qf_decode($list['status']);
$Tips = qf_decode($list['tips']);

$place = explode(",", $_REQUEST['place']);
foreach($place as $id) {
	if($badnum > 0) {
		$g = $status[$id]['g'];
		$farm_p = $status[$id]['p'];
		if($g < 3) {
			$code_temp = 1;
			$g += 1;
			$status[$id]['pest'][$_QFG['uid']] += 1;
			$badnum -= 1;
			$echo_str[] = '{"canbad":' . $badnum . ',"code":1,"direction":"' . $Tips['pest_a'] . '","farmlandIndex":' . $id . ',"poptype":1,"pest":' . $g . '}';
		}
		$status[$id]['g'] = $g;
		//Crop condition p
		if($farm_p) {
			$farm_time = $_QFG['timestamp'];
			if(isset($farm_p[$farm_time])) {
				$farm_time += $g;
			}
			$farm_p1 = array($farm_time => 1);
			$farm_p = $farm_p + $farm_p1;
		} else {
			$farm_p = array($_QFG['timestamp'] => 1);
		}
		$status[$id]['p'] = $farm_p;
	}
}

//Log insect release
if($code_temp != 0) {
	$result = $_QFG['db']->fetchOne("SELECT `id`, `uid`, `fromid`, `count`, `type` FROM  app_qqfarm_nclogs WHERE fromid = " . $_QFG['uid'] . " and type = 3 and uid = " . $ownerId);
	if($result != null) {
		$sql = "UPDATE app_qqfarm_nclogs set time = " . $_QFG['timestamp'] . " where fromid = " . $_QFG['uid'] . " and type = 3 and uid = " . $ownerId;
	} else {
		$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $ownerId . ", 3,0, " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 0, 0);";
	}
	$_QFG['db']->query($sql);
}

$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "' where uid=" . $ownerId);
$_QFG['db']->query("UPDATE app_qqfarm_nc set badnum=" . $badnum . " where uid=" . $_QFG['uid']);

echo '[' . implode(',', $echo_str) . ']';

?>