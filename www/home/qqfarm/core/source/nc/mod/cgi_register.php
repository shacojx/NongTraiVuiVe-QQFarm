<?php

# Open pasture

$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$exp = $_QFG['db']->result("SELECT exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$vip = qf_decode($vip);

if($vip['status'] || qf_toVipLevel($vip['exp']) > $reqLevel) {
	$_QFG['db']->query("UPDATE app_qqfarm_user set pf=1 where uid=" . $_QFG['uid']);
	echo '{"code":1}';
} else {
	echo '{"code":0,"direction":"Bạn chưa đáp ứng đủ điều kiện!"}';
}

?>