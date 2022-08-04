<?php

# Brushing farm / insects / dry

qf_getCache('cropstime', '/nc/');;

foreach($status as $k =>$v) {
	$t_p = $_QFG['timestamp'] - $v['q'];
	if($t_p < $cropstime[$v['a']][4]) {
		//草
		if($v['f'] == 0) {
			$suiji = mt_rand(0, 100);
			if($suiji < 3) {
				$v['f'] = 3;
			} elseif ($suiji < 6) {
				$v['f'] = 2;
			} elseif($suiji < 20) {
				$v['f'] = 1;
			}
		}
		//虫
		if($v['g'] == 0 && $t_p > $cropstime[$v['a']][2]) {
			$suiji = mt_rand(0, 100);
			if($suiji < 3) {
				$v['g'] = 3;
			} elseif ($suiji < 6) {
				$v['g'] = 2;
			} elseif($suiji < 15) {
				$v['g'] = 1;
			}
		}
		//旱
		if($list['tianqi'] == 1 && $v['h'] == 1) {
			if(mt_rand(0, 100) < 8) {
				$v['h'] = 0;
			}
		}
	}
	$status[$k] = $v;//Write-back parameters
}

$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "' where uid=" . $uId);

?>