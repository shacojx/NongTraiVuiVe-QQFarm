<?php

# Processing plants

$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$list = $_QFG['db']->fetchOne("SELECT mc.package,nc.tools,nc.fruit FROM app_qqfarm_mc mc,app_qqfarm_nc nc where mc.uid=nc.uid and nc.uid=" . $_QFG['uid']); //便便

$nc_tools = qf_decode($list['tools']);
$nc_fruit = qf_decode($list['fruit']);
$mc_package = qf_decode($list['package']);


//化肥= 5 Poo + 5 Red Rose + 1000 Gold

$bbID = 1506;//[1506 poo]
$hmgID = 41;//[41 Red Rose]
$hfID = 3;//[2 high-speed chemical | 3 Speed ​​fertilizer]
if($mc_package[$bbID] < 5) {
	$msg = '<font color=\"#F47600\"><b>' . (5 - $mc_package[$bbID]) . ' bao phân</b></font> ';
}
if($nc_fruit[$hmgID] < 5) {
	$msg .= '<font color=\"#F47600\"><b>' . (5 - $nc_fruit[$hmgID]) . ' bông hồng đỏ</b></font> ';
}
if($money < 1000) {
	$msg .= '<font color=\"#F47600\"><b>' . (1000 - $money) . ' Xu</b></font>';
}
if($msg) {
	die('{"code":0,"direction":"Tệ hơn cả ' . $msg . '<br>Bây giờ, tôi chả giúp được gì cho bạn cả.<br>Hãy thu thập đủ rồi tính.","poptype":0}');
}
$mc_package[$bbID] -= 5;
$nc_fruit[$hmgID] -= 5;
$nc_tools[$hfID] += 1;

$_QFG['db']->query("update app_qqfarm_user set money=money-1000 where uid=" . $_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_nc set tools='" . qf_encode($nc_tools) . "', fruit='" . qf_encode($nc_fruit) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_mc set package='" . qf_encode($mc_package) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"direction":"Tôi đã giúp bạn chế biến <font color=\"#F47600\"><b>5 cục phân</b></font> thành <font color=\"#F47600\"><b>bao phân bón (lớn)</b></font> rồi đấy!<br> Tôi sẽ lấy <font color=\"#F47600\"><b>5 bông hồng đỏ</b></font> và <font color=\"#F47600\"><b>1000 xu</b></font> coi như là tiền công vậy.<br>Thế nhé! Bye bye!<br>","money":-1000,"poptype":0}';

?>