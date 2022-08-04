<?php

# Crystal Warehouse
qf_getCache('crystalinf', '/mc/');
$crystal = $_QFG['db']->result("SELECT crystal FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$tools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$crystal = qf_decode($crystal);
$tools = qf_decode($tools);
$type = (int)$_REQUEST['type'];

//$crystalarr = array();
if($type ==9){
	foreach($crystal as $key => $value) {
		if($value > 0 && array_key_exists($key, $crystalinf) ) {
			$crystalarr[] = '{"amount":' . $value . ',"cId":' . $key . ',"cName":"' . $crystalinf[$key]['name'] . '","price":' . $crystalinf[$key]['sale'] . ',"type":' . $crystalinf[$key]['type'] . '}';
		} else {
			unset($crystal[$key]);
			$_QFG['db']->query("UPDATE app_qqfarm_user set crystal='" . qf_encode($crystal) . "' where uid=" . $_QFG['uid']);

		}
	}
} else {
	foreach($tools as $key => $value) {
		if($value > 0  && $key > 100000 && array_key_exists($key, $toolstype)) {
			$crystalarr[] = '{"blood":' . $toolstype[$key]['blood'] . ',"desc":"' . $toolstype[$key]['depict'] . '","id":' . ($key-100000) . ',"name":"' . $toolstype[$key]['tName'] . '","num":' . $value . ',"type":10}';
		} 
	}
}

$crystalarr = '[' . implode(',', $crystalarr) . ']';

echo '{"ecode":0,"info":'.$crystalarr.'}';

?>