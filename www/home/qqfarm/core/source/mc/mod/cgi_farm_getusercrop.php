<?php

# User storage
qf_getCache('cropstype', '/nc/');
$list = $_QFG['db']->fetchOne("SELECT fruit,nclock FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($list['fruit']);

$nclock_all = explode(',',$list['nclock']);
$fruitarr = array();
foreach($fruit as $key => $value) {
	if(in_array($key, $nclock_all)){
		$lock = '1';
	} else $lock = '0';

	if($value > 0  && $key > 2000 ) {
		$fruitarr[] = '{"amount":' . $value . ',"cId":' . $key . ',"cName":"' . $cropstype[$key]['cName'] . '","ext":"","high_price":0,"isLock":'.$lock.',"level":' . $cropstype[$key]['cLevel'] . ',"price":' . $cropstype[$key]['sale'] . ',"type":' . $cropstype[$key]['cType'] . '}';
	}
}

if($fruitarr) {
	$fruitarr = '[' . implode(',', $fruitarr) . ']';
} else 	$fruitarr = '[]';

echo $fruitarr;

?>