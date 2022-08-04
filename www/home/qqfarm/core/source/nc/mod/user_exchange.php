<?php
//Consumption, selling

$uId = (int)$_REQUEST['uIdx'];
$values = $_QFG['db']->fetchAll('SELECT * FROM app_qqfarm_nclogs WHERE uid = ' . $uId . ' and type in(6,7,8,11,12) ORDER BY time DESC limit 0,50');

foreach($values as $value) {
	if($value['type'] == 7) {
		$msg = '"Đã mua ' . $value['count'] . ' hạt giống ' .
		$cropstype[$value['cropid']]['cName'] . ' với giá '.$value['money'].' xu"';
	} elseif($value['type'] == 8) {
		if($value['cropid'] > 9000) {
			$msg = '"Đã mua ' . $value['count'] . ' ' . $toolstype[$value['cropid']]['tName'] . ',với giá '.$value['money'].' vàng"';
		} else {
			$msg = '"Đã mua ' . $value['count'] . ' ' . $itemtype[$value['cropid']]['itemName'] . ',với giá '.$value['money'].' vàng"';
		}
	} elseif($value['type'] == 11) {
			$msg = '"Đã mua ' . $value['count'] . ' ' . $itemtype[$value['cropid']]['itemName']. ',với giá '.$value['money'].' xu"';
	} elseif($value['type'] == 6) {
		$msg = '"Đã bán ' .
		$value['count'] . ' ' . $cropstype[$value['cropid']]['cName'] . '。"';
	} elseif($value['type'] == 12) {
			$msg = '"Đã mua ' . $value['count'] . ' ' . $toolstype[$value['cropid']]['tName'] . ',với giá '.$value['money'].' xu"';
	}
	if($cost) {
		$cost .= ',{"msg":' . $msg . ',"time":' . $value['time'] . '}';
	} else {
		$cost = '{"msg":' . $msg . ',"time":' . $value['time'] . '}';
	}
}
echo '{"code":1,"cost":['.$cost.']}';

?>