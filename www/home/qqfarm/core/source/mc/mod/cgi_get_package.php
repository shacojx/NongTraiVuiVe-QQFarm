<?php

# User Backpack

$fruit = $_QFG['db']->result('SELECT fruit FROM app_qqfarm_nc where uid=' . $_QFG['uid']);
$fruit = qf_decode($fruit);
$mctools = $_QFG['db']->result('SELECT tools FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$mctools = qf_decode($mctools);
$list = $_QFG['db']->fetchOne("SELECT goods,tools FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$tools = qf_decode($list['tools']);
$goods = qf_decode($list['goods']);

$cropstype=qf_getCache('cropstype', '/nc/');
$fruittype = array(
	"3" => array( "FBPrice" => 0, "consume" => "Cho thỏ ăn cà rốt sẽ giảm 5 phút sinh trưởng", "depict" => "", "effect" => 0, "price" => 0, "store" => "", "tId" => 3, "tName" => "Cà rốt", "timeLimit" => 0, "tip" => "", "type" => 4),
	"18" => array( "FBPrice" => 0, "consume" => "Cho khỉ ăn đào sẽ giảm 5 phút sinh trưởng", "depict" => "", "effect" => 0, "price" => 0, "store" => "", "tId" => 18, "tName" => "Đào tiên", "timeLimit" => 0, "tip" => "", "type" => 4),
	"72" => array( "FBPrice" => 0, "consume" => "Cho sóc ăn hạt dẻ sẽ giảm 5 phút sinh trưởng", "depict" => "", "effect" => 0, "price" => 0, "store" => "", "tId" => 72, "tName" => "Hạt dẻ", "timeLimit" => 0, "tip" => "", "type" => 4)
	);


$packagearr[] = '{"amount":' .(int)$fruit[40]. ',"tId":40,"tName":"Cỏ","type":4}';	

foreach($fruit as $key => $value) {
	if($value > 0  && $key > 0 && array_key_exists($key, $cropstype)){
		if($key == 3 || $key == 18 || $key == 72 ) {
			$packagearr[] = '{"type":4,"tId":' . $key . ',"tName":"' . $fruittype[$key]['tName'] . '","amount":' . $value . ',"tDesc":"' . $fruittype[$key]['consume'] . '"}';
		}
	} else {
		unset($fruit[$key]);
		$_QFG['db']->query("update app_qqfarm_nc set fruit='".qf_encode($fruit)."' where uid=" . $_QFG['uid']);
	}
}

foreach($tools as $key => $value) {
	if($value > 0  && $key < 100000 && $key > 0 && array_key_exists($key, $toolstype)){
		$packagearr[] = '{"type":7,"tId":' . $key . ',"tName":"' . $toolstype[$key]['name'] . '","amount":' . $value . ',"tDesc":"' . $toolstype[$key]['description'] . '"}';
	} else {
		$up = 1;
		unset($tools[$key]);
	}
}

foreach($mctools as $key => $value) {
	if($value > 0  && $key > 100000 && array_key_exists($key, $toolstype)){
		$packagearr[] = '{"type":10,"tId":' . ($key-100000) . ',"tName":"' . $toolstype[$key]['name'] . '","amount":' . $value . ',"tDesc":"' . $toolstype[$key]['description'] . '","appid":353}';
	} else {
		$up = 1;
		unset($mctools[$key]);
	}
}
foreach($goods as $key => $value) {
	if($value > 0  && $key > 0 && array_key_exists($key, $animaltype)){
		$packagearr[] = '{"type":9,"tId":' . $key . ',"tName":"' . $animaltype[$key]['cName'] . '","amount":' . $value . ',"tDesc":"' . $animaltype[$key]['cLevel'] . 'Sinh sản sau ' . ($animaltype[$key]['maturingTime']) / 3600 . ' giờ"}';
	} else {
		$up = 1;
		unset($goods[$key]);
	}
}
$up = 1 && $_QFG['db']->query("update app_qqfarm_mc set goods='".qf_encode($goods)."',tools='".qf_encode($tools)."' where uid=" . $_QFG['uid']);
$up = 1 && $_QFG['db']->query("update app_qqfarm_user set tools='".qf_encode($mctools)."' where uid=" . $_QFG['uid']);

echo '[' . implode(',', (array)$packagearr) . ']';

?>