<?php

# Crop Shop

//Hidden configuration
qf_getCache('_HIDE');
if( $_QFG['timestamp']>1289977200 && $_QFG['timestamp']<1290582000 ){
	$twoid = array('1'=>1,'101'=>101,'34'=>34,'48'=>48);
} elseif ( $_QFG['timestamp']>1290585600 && $_QFG['timestamp']<1291190400 ){
	$twoid = array('14'=>14,'109'=>109,'39'=>39,'76'=>76);
} elseif ( $_QFG['timestamp']>1291194000 && $_QFG['timestamp']<1291798800 ){
	$twoid = array('118'=>118,'72'=>72,'79'=>79,'27'=>27);
}
foreach($cropstype as $key => $value) {
	if(in_array($value['cId'], $_HIDE['seed']) || $value['cId']>2000) {
		unset($cropstype[$key]);
	} else {
		$cLevel[$key] = $value['cLevel'];
		if(array_key_exists($key, $twoid)){
			$cropstype[$key]['high_sale'] = 2*$cropstype[$key]['sale'];
		}else{
			$high_price= 0;
		}
	}
}

array_multisort($cLevel, SORT_ASC, $cropstype);

echo qf_jsonCode(array_values($cropstype));

?>