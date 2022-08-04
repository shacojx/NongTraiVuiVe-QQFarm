<?php

# Upgrade the house - storage

$money = $_QFG['db']->result('SELECT money FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$list = $_QFG['db']->fetchOne('SELECT exp,decorative FROM app_qqfarm_mc where uid=' . $_QFG['uid']);

$decorative = qf_decode($list['decorative']);
$exp = $list['exp'];

if($_REQUEST['type'] == '1') {
	$item = 'item2';
	$itemarr = array('1' => 0, '2' => 3000, '3' => 20000, '4' => 60000, '5' => 120000, '6' => 210000, '7' => 300000, '8' => 400000);
	$levelarr = array('1' => 0, '2' => 1, '3' => 4, '4' => 8, '5' => 12, '6' => 16, '7' => 20, '8' => 24);
} else {
	$item = 'item3';
	$itemarr = array('1' => 5000, '2' => 40000, '3' => 90000, '4' => 160000, '5' => 250000, '6' => 350000, '7' => 500000, '8' => 700000);
	$levelarr = array('1' => 2, '2' => 6, '3' => 10, '4' => 14, '5' => 18, '6' => 22, '7' => 26, '8' => 28);
}

$decorative[$item] = $decorative[$item] + 1;
if($money < $itemarr[$decorative[$item]] || qf_toLevel($exp) < $levelarr[$decorative[$item]]) {
	die('{"errorContent":"Vui lòng không chơi gian lận!","errorType":"1011"}');
}

if($decorative[$item]>8){
	$decorative[$item] = 8;
}

$money = $money - $itemarr[$decorative[$item]];
$money1 = $itemarr[$decorative[$item]];

$_QFG['db']->query('UPDATE app_qqfarm_user set money=' . $money . ' where uid=' . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='".qf_encode($decorative)."' where uid=" . $_QFG['uid']);


die('{"2":{"id":102,"lv":' . $decorative['item2'] . '},"3":{"id":103,"lv":' . $decorative['item3'] . '},"code":1,"money":-' . $money1 . '}');

?>