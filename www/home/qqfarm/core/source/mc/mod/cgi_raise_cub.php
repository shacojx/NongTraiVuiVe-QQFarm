<?php

# 放奍动物

$cid = (int)$_REQUEST['type'];
$number = (int)$_REQUEST['number'];

$list = $_QFG['db']->fetchOne("SELECT status,exp,decorative,goods,feed FROM app_qqfarm_mc where uid=" . $_QFG['uid']);

$animal = qf_decode($list['status']);
$decorative = qf_decode($list['decorative']);
$goods = qf_decode($list['goods']);
$feed= qf_decode($list['feed']);

$item2 = $decorative['item2'] + (3 > $decorative['item2'] ? 1 : 2);
$item3 = (0 == $decorative['item3']) ? 0 : ($decorative['item3'] + 2);
$animalnum = $item2 + $item3;

$item2count = 0;
$item3count = 0;
foreach($animal as $key => $value) {
	if(!$value['cId']|| $key >= $animalnum) {
		unset($animal[$key]);//Remove invalid data
	}
	else {
		$value['cId'] > 1500 ? $item3count++ : $item2count++;
	}
}
$anicount = $item2count + $item3count;

if($number > $animalnum) {
	echo '{"errorContent":"Nâng cấp để có thể nuôi ' . ($animalnum - $anicount) . ' con vật","errorType":"1011"}';
	exit();
}
if($cid > 1500 && $number > ($item3 - $item3count)) {
	echo '{"errorContent":"Nâng cấp chuồng để có thể nuôi ' . ($item3 - $item3count) . ' con vật","errorType":"1011"}';
	exit();
}
if($cid > 1000 && $cid < 1500 && $number > ($item2 - $item2count)) {
	echo '{"errorContent":"Nâng cấp ổ để có thể nuôi ' . ($item2 - $item2count) . ' con vật","errorType":"1011"}';
	exit();
}

if($goods[$cid] > 0){
	$goods[$cid] = $goods[$cid] - 1;
	if($goods[$cid] < 1) unset($goods[$cid]);
}else{
	die( '{"errorContent":"Chưa có gì cả!","errorType":"1011"}' );
}

$animal[] = array("buyTime"=>$_QFG['timestamp'],"cId"=>$cid,"postTime"=>0,"totalCome"=>0,"tou"=>"", "growtime"=>0,"p"=>0);

$buyanimal[] = array("buyTime"=>$_QFG['timestamp'], "cId"=>$cid, "growTime"=>0,"growTimeNext"=>($animaltime[$cid][0] - 1),"postTime"=>0,"hungry"=>0,"serial"=>($key+2) ,"status"=>1,"statusNext"=>2,"totalCome"=>0);



//Save user data
$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',goods='".qf_encode($goods)."',exp=exp+5 where uid=" . $_QFG['uid']);


echo '{"addExp":5,"animal":' . qf_jsonCode($buyanimal) . ',"code":0,"num":' . $number . ',"animalFood":'.$feed[animalfood].'}';

?>