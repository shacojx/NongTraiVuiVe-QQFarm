<?php

# Crop water

$place = (int)$_REQUEST['place'];
$ownerId = (int)$_REQUEST['ownerId'];
$status = $_QFG['db']->result("SELECT status FROM app_qqfarm_nc where uid=" . $ownerId);
$status = qf_decode($status);

$p = $farm[$place]['p'];
foreach($p as $k => $v) {
	if($v == 3) {
		unset($p[$k]);
		break;
	}
}
$status[$place]['p'] = $p;
if($status[$place]['h'] == 1) {
	exit();
}
$status[$place]['h'] = 1;

if($ownerId == $_QFG['uid']) {
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+2 where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_nc set exp=exp+2,status='" . qf_encode(array_values($status)) . "' where uid=" . $_QFG['uid']);
	//升级
	$exp_arr = $_QFG['db']->result("SELECT exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$levelup = $_QFG['db']->result("SELECT levelup FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$levelup_arr = 'false';
	if($exp_arr >= $levelup && $levelup < 93001) {
		include("source/nc/plus/levelup.php"); //Upgrade Tips
	}
	qf_addFeed('farmlandstatus_water1');
} else {
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+2 where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_nc set exp=exp+2 where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "' where uid=" . $ownerId);
	//升级
	$list = $_QFG['db']->fetchOne("SELECT tips,levelup,exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$Tips = qf_decode($list['tips']);
	$exp_arr = $list['exp'];
	$levelup = $list['levelup'];
	$levelup_arr = 'false';
	if($exp_arr >= $levelup && $levelup < 93001) {
		include("source/nc/plus/levelup.php"); //Upgrade Tips
	}
	//Help water logging
	$result = $_QFG['db']->fetchOne("SELECT `id`,`counts` FROM	app_qqfarm_nclogs WHERE fromid = " . $_QFG['uid'] . " and type=2 and uid = " . $ownerId . " and time > " . ($_QFG['timestamp'] - 3600));
	if($result != null) {
		if (strpos($result['counts'], ':') !== false) {
			$counts_ = explode(':', $result['counts']);
			$counts_[2]++;
			$counts_all = join(':', $counts_);
		} else {
			$counts_all = "0:0:1";
		}
		$sql = "UPDATE app_qqfarm_nclogs set count = count+1,counts='{$counts_all}',time = " . $_QFG['timestamp'] . " where id = " . $result['id'];
	 } else {
		$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`,`counts`, `fromid`, `time`, `cropid`, `isread` ) VALUES (" . $ownerId . ", 2, 1,'0:0:1', " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 0, 0);";
	}
	$_QFG['db']->query($sql);
	qf_addFeed('farmlandstatus_water2');
}

echo '{"farmlandIndex":' . $place . ',"code":1,"poptype":1,"direction":"' . $Tips['water_b'] . '","money":2,"exp":2,"levelUp":' . $levelup_arr . ',"humidity":' . $status[$place]['h'] . '}';

?>