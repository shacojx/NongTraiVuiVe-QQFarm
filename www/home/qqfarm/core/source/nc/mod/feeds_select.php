<?php
# User status

//type:1偷东西,2帮忙,3放虫，4狗咬，5放草，6出售 7消费 8Y币购买工具 9牛


$uId = (int)$_REQUEST['uin'];

$log = array();
$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_nclogs WHERE uid = {$uId} and type not in(6,7,8,11,12) ORDER BY time DESC limit 0,50");
foreach($values as $value) {
	$username = qf_getUserName($value['fromid']);
	if($value['type'] == 1) {
		$counts_ = explode(';', $value['counts']);
		$counts_all = "";
		foreach($counts_ as $value_) {
			$counts_t = explode(':', $value_);
			$counts_all .= $counts_t[1] . " " . $cropstype[$counts_t[0]]['cName'] . ", ";
		}
		if($counts_all != "") {
			$counts_all = substr($counts_all, 0, -3);
		}
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> đã hái trộm ' . $counts_all. '"';
	}
	elseif($value['type'] == 2) {
		$counts_all = "";
		$counts_ = explode(':', $value['counts']);
		if($counts_[0] > 0) {
			$counts_all .= " nhổ " . $counts_[0] . " cây cỏ";
		}
		if($counts_[1] > 0) {
			$counts_all .= " trừ " . $counts_[1] . " con sâu";
		}
		if($counts_[2] > 0) {
			$counts_all .= " tưới " . $counts_[2] . " thùng nước";
		}
		if($counts_all != "") {
			$counts_all = substr($counts_all, 0, -3);
		}
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> đã giúp đỡ bạn ' . $counts_all . '"';
	}
	elseif($value['type'] == 3) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> đã thả sâu vào vườn nhà bạn"';
	}
	elseif($value['type'] == 4) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> ăn trộm nông sản của bạn, lúc bỏ chạy đánh rơi ' . $value['count'] . ' xu"';
	}
	elseif($value['type'] == 5) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> đã trồng cỏ vào vườn nhà bạn"';
	}
	elseif($value['type'] == 9) {
		$msg = '"Thú hoang của <font color=\"#009900\"><b>' . $username . '</b></font> đã ăn 1 '.$cropstype[$value['cropid']]['cName'].' của bạn"';
	}
	elseif($value['type'] == 13) {
		$msg = '"Đã nhận món quà dành cho hội viên cấp '.$value['cropid'].' (Hằng ngày)"';
		if($value['money']==2) 	$msg = '"Đã nhận món quà dành cho hội viên thường niên cấp '.$value['cropid'].' (Hằng ngày)"';
	}
	$log[] = '{"domain":1,"cn":' . $msg . ',"t":' . $value['time'] . ',"opuin":'.$value['fromid'].'}';
}
$log = '[' . implode(',', $log) . ']';

echo '{"d":'.$log.',"r":0}';

?>