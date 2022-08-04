<?php

# 送花

//to:好友ID, w:赠言,uIdx:主人ID,fId:花ID,farmTime:赠送时间

$fId = (int)$_REQUEST['fId']; //A gift of flowers id
$toId = (int)$_REQUEST['to'];
$uIdx = (int)$_REQUEST['uIdx'];
//Reduced its warehouse flowers ~ _ ~
$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($fruit);
if($uIdx == $toId) die('{"code":0,"direction":"Không thể tặng hoa cho chính bạn được!"}');

$need_number = $allflower[$fId]['need'][0]['amount']; //Number of flowers
$need_flower = $allflower[$fId]['need'][0]['cId']; //Flower Type
if($fruit[$need_flower]<$need_number) die('{"code":0,"direction":"Không có đủ số hoa cần thiết"}');

$fruit[$need_flower] -= $need_number;
if($allflower[$fId]['need'][1]) {
	$need_number1 = $allflower[$fId]['need']['1']['amount']; //Number of flowers
	$need_flower1 = $allflower[$fId]['need']['1']['cId']; //Flower Type
	$fruit[$need_flower1] -= $need_number1;
}
$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit = '" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);

//The bouquet of flowers into each other ^ _ ^
$flower = $_QFG['db']->result("SELECT flower FROM app_qqfarm_nc where uid=" . $toId);
$flower = qf_decode($flower);
$flower[] = array("time"=>$_REQUEST['farmTime'],"fId"=>$fId,"fromId"=>$_QFG['uid'],"friendName"=>qf_getUserName($uIdx),"word"=>$_REQUEST['w']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set flower = '" . qf_encode($flower) . "', nc_e=13 where uid=" . $toId);

echo '{"code":1,"direction":"Đã gửi theo yêu cầu ~ Chắc hẳn người ấy sẽ rất vui khi nhận được nó đấy!"}';

?>