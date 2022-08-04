<?php

# Farm Decoration

$activeItem = (int)$_REQUEST['id'];

if($activeItem > 90000) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set activeItem=" . $activeItem . " where uid=" . $_QFG['uid']);
} else {
	$list = $_QFG['db']->fetchOne("SELECT dog,decorative FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$decorative = qf_decode($list['decorative']);
	$dogstr = qf_decode($list['dog']);
	if($activeItem > 80000) {
		foreach((array)$dogstr as $key => $value) {
			foreach((array)$value as $k => $v){
				$tid = $activeItem - 80000;
				$dec = 1;
				$dogstr[$key][$tid]['status'] = 1;
				}
			if($dec) {
				foreach((array)$value as $k => $v){
					if($k != $tid) $dogstr[$key][$k]['status'] = 0;
				}
			}
		}
		$_QFG['db']->query("UPDATE app_qqfarm_nc set dog='" . qf_encode($dogstr) . "' where uid=" . $_QFG['uid']);
	} else {
		foreach((array)$decorative as $item_type => $value) {
			foreach((array)$value as $key => $value1) {
				if($key == $activeItem) {
					$dec = $item_type;
					$decorative[$item_type][$activeItem]['status'] = 1;
				}
			}
		}
		if($dec) {
			foreach($decorative as $item_type => $value)
				if($item_type == $dec) {
					foreach((array)$value as $key => $value1) {
						if($key != $activeItem)
							$decorative[$item_type][$key]['status'] = 0;
					}
				}
		}
		$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative) . "' where uid=" . $_QFG['uid']);
	}
}

echo '{"code":1,"id":' . $activeItem . '}';

?>