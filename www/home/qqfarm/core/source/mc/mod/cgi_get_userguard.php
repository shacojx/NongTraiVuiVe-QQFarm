<?php

# Decorative workers


$list = $_QFG['db']->fetchOne("SELECT guard FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$guard = qf_decode($list['guard']);

foreach((array)$guard['guard'] as $key => $value) {
	if( $value['guardUnWorkTime'] == 1 && array_key_exists($key + 105, $toolstype)) {
		$itemName = $toolstype[105 + $key]['name'];
		$itemId = $toolstype[105 + $key]['id'];
		$itemValidTime = $guard['guardFeedTime'] - $_QFG['timestamp'];
		$status = $guard['guard'][$itemId]['status'];
		$guard_str[] = '{"created":1280759825,"itemId":'.$itemId.',"itemName":"'.$itemName.'","itemValidTime":'.$itemValidTime.',"status":'.$status.'}';
	} else {
		$up = 1;
		unset($guard['guard'][$key]);
	}
}
$up = 1 && $_QFG['db']->query("update app_qqfarm_mc set guard='".qf_encode($guard)."' where uid=" . $_QFG['uid']);

echo '[' . implode(',', $guard_str) . ']';
?>