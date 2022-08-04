<?php

# Put mosquito

$uId = (int)$_REQUEST['uId'];
$num = (int)$_REQUEST['num'];

$badnum = $_QFG['db']->result("SELECT badnum FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
if($badnum < 1) {
	die('{"errorContent":"Hôm nay bạn phá thế là đủ rồi đấy!","errorType":-2005}');
}

if($num > $badnum) {
	$num = $badnum;
}

$badnum = 0;
$bad = $_QFG['db']->result('SELECT bad FROM app_qqfarm_mc where uid=' . $uId);
if($bad != '') {
	$badnum = count(explode(',', $bad));
}
if(($num + $badnum) >= 9) {
	$num = 8 - $badnum;
}

for($i = 0; $i < $num; $i++) {
	if($bad == '') {
		$bad = $_QFG['uid'];
	} else {
		$bad = $bad . ',' . $_QFG['uid'];
	}
}
$_QFG['db']->query("UPDATE app_qqfarm_mc set bad = '" . $bad . "',badtime = " . $_QFG['timestamp'] . " where uid=" . $uId);
$_QFG['db']->query("UPDATE app_qqfarm_mc set badnum = badnum-'" . intval($num) . "' where uid=" . $_QFG['uid']);

//Put mosquito log
$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $uId . " AND type = 6 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
foreach($values as $value) {
	if(($value['type'] == 6) && ($value['fromid'] == $_QFG['uid']) && ($num > 0)) {
		$scount = $value['count'];
		$stime = $value['time'];
		$scount = $scount + $num;
		$sql1 = "UPDATE app_qqfarm_mclogs set count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 0 where uid = " . $uId . " AND type = 6 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
	}
}
if((!$sql1) && ($num > 0)) {
	$sql1 = "INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(" . $uId . ", 6," . $num . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 0, 0, 0);";
}
if($sql1) $query = $_QFG['db']->query($sql1);

//Return status
echo '{"cId":1,"leftnum":11,"num":' . $num . ',"total":' . ($badnum + $num) . '}';

?>