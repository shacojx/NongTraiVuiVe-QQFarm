<?php

# Seed storage

$list = $_QFG['db']->fetchOne('SELECT package FROM app_qqfarm_nc where uid=' . $_QFG['uid']);
$package = qf_decode($list['package']);
foreach($package as $k=>$v) {
	$price = (int)($cropstype[$k]["price"]*0.5);
	if($rep) {
		$rep .= ',{"amount":'.$v.',"cId":'.$k.',"cName":"'.$cropstype[$k]["cName"].'","level":'.$cropstype[$k]["cLevel"].',"lifecycle":'.$cropstype[$k]["sale"].',"price":'.$price.',"type":1}';
	} else {
		$rep = '{"amount":'.$v.',"cId":'.$k.',"cName":"'.$cropstype[$k]["cName"].'","level":'.$cropstype[$k]["cLevel"].',"lifecycle":'.$cropstype[$k]["sale"].',"price":'.$price.',"type":1}';
	}
}

echo '['.$rep.']';


?>