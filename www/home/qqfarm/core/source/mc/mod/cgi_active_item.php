<?php

# Farm Decoration

$activeItem = (int)$_REQUEST['itemId'];
$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_mc where uid=" . $_QFG['uid']);

$decorative = qf_decode($decorative);

foreach($decorative['item1'] as $key => $value1) {
	if($key == $activeItem) {
		$dec = 1;
		$decorative['item1'][$activeItem]['status'] = 1;
	}
}

if($dec) {
	foreach($decorative['item1'] as $key => $value1) {
		if($key != $activeItem) $decorative['item1'][$key]['status'] = 0;
	}
}
$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='" . qf_encode($decorative) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"id":' . $activeItem . ',"msg":'.(int)$itemtype[$activeItem]['msg'].',"skin":'.(int)$itemtype[$activeItem]['skin'].'}}';

?>