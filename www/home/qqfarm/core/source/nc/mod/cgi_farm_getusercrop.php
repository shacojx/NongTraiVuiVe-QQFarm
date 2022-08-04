<?php

# User storage

$list = $_QFG['db']->fetchOne("SELECT fruit,nclock FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($list['fruit']);

if( $_QFG['timestamp']>1289977200 && $_QFG['timestamp']<1290582000 ){
	$twoid = array('1'=>1,'101'=>101,'34'=>34,'48'=>48);
} elseif ( $_QFG['timestamp']>1290585600 && $_QFG['timestamp']<1291190400 ){
	$twoid = array('14'=>14,'109'=>109,'39'=>39,'76'=>76);
} elseif ( $_QFG['timestamp']>1291194000 && $_QFG['timestamp']<1291798800 ){
	$twoid = array('118'=>118,'72'=>72,'79'=>79,'27'=>27);
}
$nclock_all = explode(',',$list['nclock']);
$fruitarr = array();
foreach($fruit as $key => $value) {
	if(in_array($key, $nclock_all)){
		$lock = '1';
	} else $lock = '0';

	if($value > 0  && $key > 0 && array_key_exists($key, $cropstype)) {
		if(array_key_exists($key, $twoid)){
			$high_price= 2*$cropstype[$key]['sale'];
		}else{
			$high_price= 0;
		}
		$fruitarr[] = '{"amount":' . $value . ',"cId":' . $key . ',"cName":"' . $cropstype[$key]['cName'] . '","ext":"","high_price":'.$high_price.',"isLock":'.$lock.',"level":' . $cropstype[$key]['cLevel'] . ',"price":' . $cropstype[$key]['sale'] . ',"type":' . $cropstype[$key]['cType'] . '}';
	}else {
		unset($fruit[$key]);
		$_QFG['db']->query("update app_qqfarm_nc set fruit='".qf_encode($fruit)."' where uid=" . $_QFG['uid']);
	}
}

if($fruitarr) {
	$fruitarr = '[' . implode(',', $fruitarr) . ']';
} else 	$fruitarr = '[]';

echo '{"allFlower":' . qf_jsonCode(array_values($allflower)) . ',"crop":' . $fruitarr . ',"flowerPath":"module/ui/flower"}';

?>