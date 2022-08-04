<?php

# Buy gold decoration

$itemId = (int)$_REQUEST['itemId'];
$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$decorative = qf_decode($decorative);
$buy_money = $itemtype[$itemId]['price'];
$buy_Name = $itemtype[$itemId]['itemName'];
$buy_type = $itemtype[$itemId]['itemType'];
$vip = qf_decode($value['vip']);

if($vip['status'] && qf_toVipLevel($vip['exp']) < $_QSC['diyLimitYDLevel'] ) {
	die('{"direction":"Cấp độ hội viên chưa đủ để sử dụng miễn phí!"}');
}

foreach((array)$decorative as $item_type => $value) {
	if($buy_type == $item_type) {
		foreach((array)$value as $key => $value1) {
			$dec = 1;
			$decorative[$item_type][$itemId]['status'] = 1;
			$decorative[$item_type][$itemId]['validtime'] = 1;
		}
		if($dec) {
			foreach((array)$value as $key => $value1) {
				if($key != $itemId) $decorative[$item_type][$key]['status'] = 0;
			}
		}
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative) . "' where uid=" . $_QFG['uid']);


echo '{"code":1,"direction":"","ecode":0,"exp":0,"itemId":'.$itemId.',"itemName":"'.$buy_Name.'","itemType":'.$buy_type.',"levelUp":false,"money":0,"num":1}';

?>