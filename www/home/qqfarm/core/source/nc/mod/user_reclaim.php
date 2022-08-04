<?php

# Land reclamation

$tudiarr = array(
	"6" => array("level" => 5, "money" => 10000),
	"7" => array("level" => 7, "money" => 20000),
	"8" => array("level" => 9, "money" => 30000),
	"9" => array("level" => 11, "money" => 50000),
	"10" => array("level" => 13, "money" => 70000),
	"11" => array("level" => 15, "money" => 90000),
	"12" => array("level" => 17, "money" => 120000),
	"13" => array("level" => 19, "money" => 150000),
	"14" => array("level" => 21, "money" => 180000),
	"15" => array("level" => 23, "money" => 230000),
	"16" => array("level" => 25, "money" => 300000),
	"17" => array("level" => 27, "money" => 500000)
);

$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$list = $_QFG['db']->fetchOne("SELECT status,reclaim,exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$reclaim = $list['reclaim'];
if($money < $tudiarr[$reclaim]['money'] || $list['exp'] < $tudiarr[$reclaim]['exp']) {
	exit();
}

$status = qf_decode($list['status']);
foreach($status as $key => $value) {
	if($key >= $reclaim) {
		unset($status[$key]);
	}
}
$status[$reclaim] = array("a"=>0,"b"=>0,"c"=>0,"d"=>0,"e"=>1,"f"=>0,"g"=>0,"h"=>1,"i"=>100,"j"=>0,"k"=>0,"l"=>0,"m"=>0,"n"=>array(),"o"=>0,"p"=>array(),"q"=>0,"r"=>1251351725);
$status = array_values($status);

$_QFG['db']->query("UPDATE app_qqfarm_user set money = money - " . $tudiarr[$reclaim]['money'] . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode($status) . "',reclaim = reclaim + 1 where uid=" . $_QFG['uid']);

echo '{"code":1,"direction":"","money":-' . $tudiarr[$reclaim]['money'] . '}';

?>