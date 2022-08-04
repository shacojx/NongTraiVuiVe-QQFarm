<?php

# Ranch Store

//Hidden configuration
qf_getCache('_HIDE');
if( $_QFG['timestamp']>1289977200 && $_QFG['timestamp']<1290582000 ){
	$twoid = array('1505'=>1505,'1013'=>1013,'1011'=>1011,'1018'=>1018);
} elseif ( $_QFG['timestamp']>1290585600 && $_QFG['timestamp']<1291190400 ){
	$twoid = array('1510'=>1510,'1508'=>1508,'1509'=>1509,'1516'=>1516);
} elseif ( $_QFG['timestamp']>1291194000 && $_QFG['timestamp']<1291798800 ){
	$twoid = array('1010'=>1010,'1518'=>1518,'1514'=>1514,'1517'=>1517);
}
foreach($animaltype as $key => $value) {
	if(in_array($value['cId'], $_HIDE['animal'])) {
		unset($animaltype[$key]);
	} else {
		$cLevel[$key] = $value['cLevel'];
		if(array_key_exists($key, $twoid)){
			$animaltype[$key]['bsprice'] = 2*$animaltype[$key]['byproductprice'];
			$animaltype[$key]['msprice'] = 2*$animaltype[$key]['productprice'];	
		}else{
			$animaltype[$key]['bsprice'] = 0;
			$animaltype[$key]['msprice'] = 0;	
		}
	}
}

array_multisort($cLevel, SORT_ASC, $animaltype);
echo qf_jsonCode(array_values($animaltype));

?>
