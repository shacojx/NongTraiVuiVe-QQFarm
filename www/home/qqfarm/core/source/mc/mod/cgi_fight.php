<?php

# Catching mice

$uId = (int)$_REQUEST['uId'];

$enemy = $_QFG['db']->result("SELECT enemy FROM app_qqfarm_mc where uid=" . $uId);
if($enemy==0){
	die('{"errorContent":"Có con chuột nào đâu?","errorType":"1011"}');
}

$list = $_QFG['db']->fetchOne("SELECT repertory,package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$mc_package = qf_decode($list['package']);
$mc_repertory = qf_decode($list['repertory']);

//To prevent the gold balance, must be reasonable recovery of gold
if( $uId == $_QFG['uid'] ){
	//Random grab for the gold
	$money =mt_rand(50,100);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set enemy=0 where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money . " where uid=" . $uId);
	//Return Information
	die('{"cId":1001,"code":1,"money":' . $money . ',"tip":"Đã bắt được con chuột! Bạn nhận được <font color=\"#FF6600\"> <b>' . $money . '</b> </font> Xu!"}');
}elseif( mt_rand(1,100) < 33) {
	//Random grab for the gold
	$money =mt_rand(50,100);
	$money1 =mt_rand(5,30);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set enemy=0 where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money1 . " where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money . " where uid=" . $_QFG['uid']);
	//Return Information
	die('{"code":1,"money":' . $money . ',"tip":"Đã bắt được con chuột! Bạn nhận được <font color=\"#FF6600\"> 
<b>' . $money . '</b> </font>Xu, chủ nhà cũng nhận được<font color=\"#FF6600\"> <b>' . $money1 . '</b> </font>Xu!"}');
} else {
	$cId = 1001;//鸡蛋
	$cIdn =mt_rand(1,3);
	//入包
	$mc_package[$cId] += $cIdn;
	//Updated results
	$flag = false;
	//Return Information
	foreach((array)$mc_repertory as $k => $v) {
		if($cId == $v['cId']) {
			$mc_repertory[$k]['scrounge'] += $cIdn;
			$flag = true;
		}
	}
	//Random grab for the gold
	if(!$flag) {
		$mc_repertory[] = array("cId" => $cId, "harvest" => 0, "scrounge" => $cIdn);
	}
	//Random stolen gold
	$money =mt_rand(30,100);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money . " where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money-" . $money . " where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set enemy=0 where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set repertory='" . qf_encode($mc_repertory) . "',package='" . qf_encode($mc_package) . "' where uid=" . $_QFG['uid']);
	//Return Information
	echo '{"cId":1001,"code":0,"money":-'.$money.',"tip":"Úi! Con chuột chạy mất rồi! Nó đã trộm <font color=\"#009900\"> <b>'.$cIdn.'</b> </font> trứng của khổ chủ, và lấy đi của bạn <font color=\"#FF6600\"> <b>'.$money.'</b> </font>Xu!"}';
}

?>