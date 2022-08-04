<?php
//Initialization decoration


$list = $_QFG['db']->fetchOne("SELECT dog,decorative FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$decorative = qf_decode($list['decorative']);
foreach($decorative as $item_type => $value) {
	foreach($value as $key => $value1) {
		if($value1['status'] == 1) {
			if(array_key_exists($key, $itemtype)) {
				$get_itemName = $itemtype[$key]['itemName'];
				$get_price = $itemtype[$key]['price'];
				$get_exp = $itemtype[$key]['exp'];
				$validTime = $value1['validtime'];
				if($value1['validtime'] == 1) $validTime = 0;
			}  else {
				$up = 1;
				unset($decorative[$item_type][$key]);
			}
			
			$current_str[] = '{"created":'.$validTime.',"itemId":' . $key . ',"itemType":' . $item_type . ',"validTime":' . $validTime . ',"status":' . $value1['status'] . ',"id":' . $key . ',"itemName":"' . $get_itemName . '","price":' . $get_price . ',"exp":' . $get_exp . '}';
		} 

		if($value1['validtime'] > $_QFG['timestamp'] || $value1['validtime'] == 1) {
			if(array_key_exists($key, $itemtype)) {
				$get_itemName = $itemtype[$key]['itemName'];
				$get_price = $itemtype[$key]['price'];
				$get_exp = $itemtype[$key]['exp'];
				$validTime = $value1['validtime'];
				if($validTime == 1) $validTime = 0;
			}  else {
				$up = 1;
				unset($decorative[$item_type][$key]);
			}
			
			$decorative_str[] = '{"created":'.$validTime.',"itemId":' . $key . ',"itemType":' . $item_type . ',"validTime":' . $validTime . ',"status":' . $value1['status'] . ',"id":' . $key . ',"itemName":"' . $get_itemName . '","price":' . $get_price . ',"exp":' . $get_exp . '}';
		} 
	} 
}
$dog = qf_decode($list['dog']);
foreach((array)$dog['dogs'] as $key => $value) {
	if( $value['status'] == 1 && array_key_exists($key + 40000, $toolstype)) {
		$get_itemName = $toolstype[40000 + $key]['tName'];
		$get_price = $toolstype[40000 + $key]['price'];
		$get_exp = 0;
		$current_str[] = '{"created":0,"itemId":' . (80000 + $key) . ',"itemType":8,"validTime":0,"status":' . $value['status'] . ',"id":' . (80000 + $key) . ',"itemName":"' . $get_itemName . '","price":' . $get_price . ',"exp":' . $get_exp . '}';
	}
	if( $value['dogUnWorkTime'] == 1 && array_key_exists($key + 40000, $toolstype)) {
		$get_itemName = $toolstype[40000 + $key]['tName'];
		$get_price = $toolstype[40000 + $key]['price'];
		$get_exp = 0;
		$decorative_str[] = '{"created":0,"itemId":' . (80000 + $key) . ',"itemType":8,"validTime":0,"status":' . $value['status'] . ',"id":' . (80000 + $key) . ',"itemName":"' . $get_itemName . '","price":' . $get_price . ',"exp":' . $get_exp . '}';
	} else {
		$up = 1;
		unset($dog['dogs'][$key]);
	}
}


$up = 1 && $_QFG['db']->query("update app_qqfarm_nc set decorative='".qf_encode($decorative)."',dog='".qf_encode($dog)."' where uid=" . $_QFG['uid']);

echo '{"code":1,"current":[' . implode(',', $current_str) . '],"direction":"","ecode":0,"items":[' . implode(',', $decorative_str) . ']}';

?>