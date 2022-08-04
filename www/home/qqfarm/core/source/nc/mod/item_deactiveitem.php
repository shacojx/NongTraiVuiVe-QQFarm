<?php

# Cancel decoration

$activeItem = (int)$_REQUEST['id'];
if($activeItem > 90000) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set activeItem=0 where uid=" . $_QFG['uid']);
} else {
	$list = $_QFG['db']->fetchOne("SELECT dog,decorative FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$decorative = qf_decode($list['decorative']);
	$dogstr = qf_decode($list['dog']);
	if($activeItem > 80000) {
		$a = (int)$_REQUEST['id'] - 80000;
		$dogstr["dogs"][$a]['status'] = 0;
		$_QFG['db']->query("UPDATE app_qqfarm_nc set dog='" . qf_encode($dogstr) . "' where uid=" . $_QFG['uid']);
	} else {
		foreach($decorative as $item_type => $value) {
			foreach($value as $key => $value1) {
				if($key == $activeItem) {
					$decorative[$item_type][$key]['status'] = 0;
					$decorative[$item_type][$item_type]['status'] = 1;
				}
			}
		}
		$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative) . "' where uid=" . $_QFG['uid']);
	}
}
echo '{"code":1,"id":' . $key . '}';

?>