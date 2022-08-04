<?php
//My decoration

$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$decorative = qf_decode($decorative);

foreach($decorative['item1'] as $key => $value1) {
	if($value1['validtime'] > $_QFG['timestamp'] || $value1['validtime'] == 1) {
		if($key == 105) {
			$get_itemName = "Vườn địa đàng";
			$itemValidTime = 0;
		} elseif(array_key_exists($key, $itemtype)){
			$get_itemName = $itemtype[$key]['itemName'];
			$itemValidTime = $value1['validtime'];
		} else {
			unset($decorative['item1'][$key]);
			$_QFG['db']->query("update app_qqfarm_mc set decorative='".qf_encode($decorative)."' where uid=" . $_QFG['uid']);		
		} 
		$decorative_str[] = '{"created":' . $key . ',"itemName":"' . $get_itemName . '","itemId":' . $key . ',"itemValidTime":' . $itemValidTime . ',"status":' . $value1['status'] . '}';
	}
	
}

echo '[' . implode(',', $decorative_str) . ']';

?>