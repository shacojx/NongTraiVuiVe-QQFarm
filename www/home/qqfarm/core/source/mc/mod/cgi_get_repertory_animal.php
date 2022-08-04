<?php

# Ranch Warehouse

$mc_package = $_QFG['db']->result('SELECT package FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
$mclock = $_QFG['db']->result('SELECT mclock FROM app_qqfarm_mc where uid=' . $_QFG['uid']);

$mc_package = qf_decode($mc_package);
$mclock_arr = explode(',',$mclock);
if( $_QFG['timestamp']>1289977200 && $_QFG['timestamp']<1290582000 ){
	$twoid = array('1505'=>1505,'1013'=>1013,'1011'=>1011,'1018'=>1018);
} elseif ( $_QFG['timestamp']>1290585600 && $_QFG['timestamp']<1291190400 ){
	$twoid = array('1510'=>1510,'1508'=>1508,'1509'=>1509,'1516'=>1516);
} elseif ( $_QFG['timestamp']>1291194000 && $_QFG['timestamp']<1291798800 ){
	$twoid = array('1010'=>1010,'1518'=>1518,'1514'=>1514,'1517'=>1517);
}
foreach($mc_package as $key => $value) {
	if($value > 0) {
		if(in_array($key, $mclock_arr)){
			$lock = ',"lock":1';
		} else {
			$lock = '';
		}
		$cName = '';
		$sprice = '';
		if($key<10000){
			if($key==1506){
				$cName = 'Phân';
				$cLevel = 0;
				$price = 30;
				$type=8;
			} elseif(array_key_exists($key, $animaltype)) {
				$cName = $animaltype[$key]['bName'];
				$cLevel = $animaltype[$key]['cLevel'];
				$type=2;
				$price = $animaltype[$key]['byproductprice'];
				if(array_key_exists($key, $twoid)){
					$by = 2*$animaltype[$key]['byproductprice'];
					$sprice = ',"sprice":'.$by.'';
				}
			} else {
				$up = 1;
				unset($mc_package[$key]);
			}
		} elseif(array_key_exists(($key-10000), $animaltype))  {
			$key1 = $key - 10000;
			$cName = $animaltype[$key1]['cName'];
			$cLevel = $animaltype[$key1]['cLevel'];
			$type=3;
			$price = $animaltype[$key1]['productprice'];
			if(array_key_exists($key1, $twoid)){
				$by = 2*$animaltype[$key1]['productprice'];
				$sprice = ',"sprice":'.$by.'';
			}
		} else {
			$up = 1;
			unset($mc_package[$key]);
		}
		if($cName) {
			$package[] = '{"amount":' . $value . ',"cId":' . $key . ',"cName":"' . $cName . '"'.$lock.',"lv":' . $cLevel . ',"price":' . $price . ''.$sprice.',"type":'.$type.'}';
		}
	}
}

$up = 1 && $_QFG['db']->query("update app_qqfarm_mc set package='".qf_encode($mc_package)."' where uid=" . $_QFG['uid']);

echo '[' . implode(',', (array)$package) . ']';

?>