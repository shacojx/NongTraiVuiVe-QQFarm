<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
$id = intval($_GET['id']);
if($id < 1) {
	die('2|&|参数错误.');
}

if($_GET['submit'] == 1) {
	$reclaim = intval($_REQUEST['reclaim']);
	$exp = intval($_REQUEST['exp']);
	$money = intval($_REQUEST['money']);
	$yb = intval($_REQUEST['yb']);
	if($reclaim < 1 || $reclaim > 18) {
		die('1|&|修改失败,农田数目应大于1且小于19.');
	} 
	//修改fishlandstatus数据 -- START --
	$bstatus = $_HFG['db']->result("SELECT bstatus FROM app_fish_ui where uid=" . $id);
	 $bstatus= qf_decode($bstatus);
	//获取实际开垦农田数
	$fishCount = count($bstatus);
	//添加需开垦的农田
	if($fishCount < $reclaim) {
		for($i = $fishCount; $i < $reclaim; $i++) {
			$bstatus[$i] = array("a"=>(int)$reclaim,"b"=>0,"c"=>0,"g"=>0,"d"=>0,"m"=>0,"h"=>0,"j"=>0,"k"=>0,"bn"=>"","n"=>array(),"p"=>array(),"w"=>0,"q"=>0,"r"=>0,"s"=>0,"t"=>0,"x"=>100);
		}
	}
	//删除多开垦的农田
	elseif($fishCount > $reclaim) {
		foreach($bstatus as $k => $v) {
			if($k >= $reclaim) {
				unset($bstatus[$k]);
			}
		}
	}
	
	//修改bdstatus数据 -- OVER --
	$_HFG['db']->query("UPDATE app_fish_ui set exp=" . $exp . ",reclaim=" . $reclaim . ", bstatus='" . qf_encode(array_values($bstatus)) . "', yb=" . $yb . ",money=" . $money . " where uid=" . $id);
	die('1|&|修改用户(UID:' . $id . ')的信息成功.|&|refresh');
} else {
	$value = $_HFG['db']->fetchOne("SELECT * from app_fish_ui where uid=" . $id);
	$value['level'] = qf_toLevel($value['exp']);//鱼塘等级
	$value['username'] = qf_getUserName($id, true);//强制更新实名
	qf_getView("admin/user_edit");
}

?>