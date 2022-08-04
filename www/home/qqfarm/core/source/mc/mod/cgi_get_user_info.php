<?php

# Ranch operation log
# 1 steal; 2 to help production; 3 pack plus grass; 4 to buy their own grass; 5 to help friends buy grass; 6 release mosquito; 7 shooting mosquitoes; 8-clean toilet; 9 sold; 10 purchase, 13 hunter.


$uId = (int)$_REQUEST['uId'];

//金币
$money = $_QFG['db']->result('SELECT money FROM app_qqfarm_user where uid=' . $uId);

//Exp Ranch
$exp = $_QFG['db']->result('SELECT exp FROM app_qqfarm_mc where uid=' . $uId);

$mclog = array();
$values = $_QFG['db']->fetchAll('SELECT * FROM app_qqfarm_mclogs WHERE uid=' . $uId . ' and type not in(4,9,10,11,12) ORDER BY time DESC limit 0,50');
foreach($values as $value) {
	$username = qf_getUserName($value['fromid']);
	if($value['type'] == 1) {
		$scrids = array();
		$scrids = explode(',', $value['iid']);
		$scrcots = array();
		$scrcots = explode(',', $value['count']);
		$scrougestr = '';
		for($i = 0; $i < count($scrids); $i++) {
			$scrougestr = $scrougestr . $scrcots[$i] . $animaltype[$scrids[$i]]['bName'];
			if($i + 1 < count($scrids)) {
				$scrougestr = $scrougestr . ', ';
			} else {
				$scrougestr = $scrougestr . '. ';
			}
		}
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> lấy trộm ' . $scrougestr . ' "';
	} elseif($value['type'] == 2) {
		$helpids = array();
		$helpids = explode(',', $value['iid']);
		$helpcots = array();
		$helpcots = explode(',', $value['count']);
		$helpstr = '';
		for($i = 0; $i < count($helpids); $i++) {
			$helpstr = $helpstr . $helpcots[$i] . $animaltype[$helpids[$i]]['cName'] . '' ;
			if($i + 1 < count($helpids)) {
				$helpstr = $helpstr . ', ';
			} else {
				$helpstr = $helpstr . '. ';
			}
		}
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> đã giúp ' . $helpstr . ' "';
	} elseif($value['type'] == 3) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> đã cho ' . $value['count'] . ' cỏ vào máy xay thức ăn của bạn"';
	} elseif($value['type'] == 5) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> đã bỏ ra ' . $value['money'] . ' Xu để mua ' . $value['count'] . ' cỏ cho bạn"';
	} elseif($value['type'] == 6) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> đã thả ' . $value['count'] . ' muỗi vào trang trại của bạn."';
	} elseif($value['type'] == 7) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> đã giúp bạn đập chết ' . $value['count'] . ' con muỗi."';
	} elseif($value['type'] == 8) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> đã giúp bạn dọn ' . $value['count'] . ' đống phân."';
	} elseif($value['type'] == 13) {
		$msg = '"<font color=\"#009900\"><b>'.$username.'</b></font> vào trang trại bạn để ăn trộm thì bị <font color=\"#FF0000\"><b>bảo vệ</b></font>bắt, bị phạt <font color=\"#FF0000\"><b>'.$value['money'].'</b></font> Xu. "';
	} elseif($value['type'] == 14) {
		$msg = '"Đã nhận món quà dành cho hội viên cấp '.$value['iid'].' (hằng ngày)"';
		if($value['money']==2) 	$msg = '"Đã nhận món quà dành cho hội viên thường niên cấp '.$value['iid'].' (hằng ngày). "';
	}
	$mclog[] = '{"domain":2,"msg":' . $msg . ',"time":' . $value['time'] . '}';
}
$mclog = '[' . implode(',', $mclog) . ']';


//Mark Read
$_QFG['db']->query('UPDATE app_qqfarm_mclogs set isread=1 where uid=' . $_QFG['uid']);

//Output
echo '{"log":' . $mclog . ',"user":{"homePage":"' . qf_getHomePage($uId) . '","money":' . $money . ',"uExp":' . $exp . ',"uId":' . $uId . ',"uLevel":' . qf_toLevel($exp) . ',"uName":"' . qf_getUserName($uId) . '"}}';

?>