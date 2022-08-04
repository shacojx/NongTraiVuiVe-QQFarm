<?php
# User status

//type:1偷东西,2帮忙,3放虫，4狗咬，5放草，6出售 7消费 8Y币购买工具 9牛


$uId = (int)$_REQUEST['uId'];
$uIdx = (int)$_REQUEST['uIdx'];
$flag = (int)$_REQUEST['flag'];

$log = array();
/*$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_nclogs WHERE uid = {$uId} and type not in(6,7,8,11,12) ORDER BY time DESC limit 0,50");
foreach($values as $value) {
	$username = qf_getUserName($value['fromid']);
	if($value['type'] == 1) {
		$counts_ = explode(';', $value['counts']);
		$counts_all = "";
		foreach($counts_ as $value_) {
			$counts_t = explode(':', $value_);
			$counts_all .= $counts_t[1] . "个" . $cropstype[$counts_t[0]]['cName'] . "、";
		}
		if($counts_all != "") {
			$counts_all = substr($counts_all, 0, -3);
		}
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来农场偷窃，偷走' . $counts_all. '。"';
	}
	elseif($value['type'] == 2) {
		$counts_all = "";
		$counts_ = explode(':', $value['counts']);
		if($counts_[0] > 0) {
			$counts_all .= "除草" . $counts_[0] . "次、";
		}
		if($counts_[1] > 0) {
			$counts_all .= "杀虫" . $counts_[1] . "次、";
		}
		if($counts_[2] > 0) {
			$counts_all .= "浇水" . $counts_[2] . "次、";
		}
		if($counts_all != "") {
			$counts_all = substr($counts_all, 0, -3);
		}
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来农场帮忙' . $counts_all . '！"';
	}
	elseif($value['type'] == 3) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来农场放虫，作物“生病”了！"';
	}
	elseif($value['type'] == 4) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来农场偷东西被抓住，逃跑时遗落了' . $value['count'] . '个金币。"';
	}
	elseif($value['type'] == 5) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来农场放草，作物“生病”了！"';
	}
	elseif($value['type'] == 9) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 的野牛在你家吃了1个'.$cropstype[$value['cropid']]['cName'].'。"';
	}
	elseif($value['type'] == 13) {
		$msg = '"成功领取农场VIP LV'.$value['cropid'].'每日礼包。"';
		if($value['money']==2) 	$msg = '"成功领取农场VIP LV'.$value['cropid'].'、年费VIP每日礼包。"';
	}
	$log[] = '{"domain":2,"msg":' . $msg . ',"time":' . $value['time'] . '}';
}*/
$log = '[' . implode(',', $log) . ']';



$money = $_QFG['db']->result('SELECT money FROM app_qqfarm_user where uid=' . $uId);
$list = $_QFG['db']->fetchOne('SELECT exp,repertory FROM app_qqfarm_nc where uid=' . $uId);
$repertory = qf_decode($list['repertory']);
foreach($repertory as $k=>$v) {
	if($rep) {
		$rep .= ',{"cId":'.$v["cId"].',"cName":"'.$cropstype[$v["cId"]]["cName"].'","harvestNumber":'.$v["harvestNumber"].',"scroungeNumber":'.$v["scroungeNumber"].'}';
	} else {
		$rep = '{"cId":'.$v["cId"].',"cName":"'.$cropstype[$v["cId"]]["cName"].'","harvestNumber":'.$v["harvestNumber"].',"scroungeNumber":'.$v["scroungeNumber"].'}';
	}
}
$user_str = '{"headPicBig":"' . qf_getheadPic($uId, 'big') . '","homePage":"' . qf_getHomePage($uId) . '","money":' . $money . ',"FBPrice":4,"uExp":' . $list['exp'] . ',"uId":' . $uId . ',"uLevel":' . qf_toLevel($list['exp']) . ',"uName":"' . qf_getUserName($uId) . '"}';


$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_message WHERE toid = " . $uId . " ORDER BY time DESC limit 0,50");
foreach($values as $value) {
	if($value['fromid'] == $value['toid']) {
		$value["fromname"] = $value["toname"] = "农场主";
	}
	if($chat) {
		$chat .= ',{"fromId":'.(int)$value["fromid"].',"fromName":"'.$value["fromname"].'","toId":'.$uId.',"toName":"'.qf_getUserName($uId).'","time":'.$value["time"].',"msg":"'.$value["msg"].'","isReply":'.(int)$value["isreply"].'}';
	} else {
		$chat = '{"fromId":'.(int)$value["fromid"].',"fromName":"'.$value["fromname"].'","toId":'.$uId.',"toName":"'.qf_getUserName($uId).'","time":'.$value["time"].',"msg":"'.$value["msg"].'","isReply":'.(int)$value["isreply"].'}';
	}
}


if($flag == 2){
	echo '{"log":' . $log . '}';
	//Mark Read
	$_QFG['db']->query("UPDATE app_qqfarm_nclogs set isread=1 where uid=" . $uIdx);
} elseif($flag == 3 || $flag == 16){
	echo '{"user":' . $user_str . ',"log":' . $log . '}';
	//Mark Read
	$_QFG['db']->query("UPDATE app_qqfarm_nclogs set isread=1 where uid=" . $uIdx);
} elseif($flag == 4){
	echo '{"chat":[' . $chat . ']}';
	//Mark Read
	$_QFG['db']->query("UPDATE app_qqfarm_message set isread=1 where toid=" . $uIdx);
} elseif($flag == 5){
	echo '{"user":' . $user_str . ',"chat":[' . $chat . ']}';
	//Mark Read
	$_QFG['db']->query("UPDATE app_qqfarm_message set isread=1 where toid=" . $uIdx);
}elseif($flag == 8){
	echo '{"repertory":['.$rep.']}';
} else {
	echo '{"user":' . $user_str . ',"log":' . $log . ',"chat":[' . $chat . '],"repertory":['.$rep.']}';
}
?>