<?php

# The information received flowers

$list = $_QFG['db']->fetchOne("SELECT flower,nc_e FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$flower = qf_decode($list['flower']);

foreach($flower as $key => $value) {
	$flowerId = $value['fId'];
	$flower[$key]['desc'] = $allflower[$flowerId]['desc'];
	$flower[$key]['fName'] = $allflower[$flowerId]['fName'];
}

if($list['nc_e']) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set nc_e=0 where uid=" . $_QFG['uid']);
}

echo '{"code":1,"flowerPath":"module/ui/flower","myFlower":' . qf_jsonCode($flower) . '}';

?>