<?php

# Decorators


$itemId = (int)$_REQUEST['itemId'];
$list = $_QFG['db']->fetchOne("SELECT guard FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$guard = qf_decode($list['guard']);
$type = $itemId + 105;
if($_QFG['timestamp'] < $guard['guardFeedTime']) {
		$striketime = $guard['guardFeedTime'] - $_QFG['timestamp'];
	} else {
		$striketime = 0;
	}
foreach((array)$guard as $key => $value) {
	foreach((array)$value as $k => $v){
		$dec = 1;
		$guard[$key][$itemId]['status'] = 1;
	}
	if($dec) {
		foreach((array)$value as $k => $v){
			if($k != $itemId) $guard[$key][$k]['status'] = 0;
		}
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_mc set guard='" . qf_encode($guard) . "' where uid=" . $_QFG['uid']);

echo'{"code":1,"itemName":"'.$toolstype[$type]['name'].'","itemValidTime":'.$striketime.'}';
?>