<?php

# NPC Tasks:: Vụ mùa bội thu

//Củ cải: 2 Ngô: 3, Cà chua: 7, Bí ngô: 10 Dưa hấu: 14, Mướp: 44, Dứa: 27, Sơn trà: 55, Đu đủ: 38, Ổi: 79, Bạch quả: 83

$num1 = 2;
$num2 = 14;
$num3 = 7;
$num4 = 27;
$num5 = 38;
$yxsId = 25;
$zs1 = 269;
$zs2 = 270;
$zs3 = 271;
$zs4 = 272;

$chris = $_QFG['db']->result("SELECT chris FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
if($chris == 4) { //Have been issued
	die('{"code":0,"direction":"Không hợp lệ!"}');
}

$list = $_QFG['db']->fetchOne("SELECT fruit,package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$fruit = qf_decode($list[fruit]);
$package = qf_decode($list[package]);

$yxs = 0;
if($fruit[$num1] > 200) {
	$yxs += 10;
	$ok_str = " <font color='#ff0000'><b>Củ cải</b></font> ";
} else {
	$no_str .= " <font color='#ff0000'><b>Củ cải</b></font> ";
}
if($fruit[$num2] > 200) {
	$yxs += 10;
	$ok_str .= " <font color='#ff0000'><b>Dưa hấu</b></font> ";
} else {
	$no_str .= " <font color='#ff0000'><b>Dưa hấu</b></font> ";
}
if($fruit[$num3] > 200) {
	$yxs += 10;
	$ok_str .= " <font color='#ff0000'><b>Cà chua</b></font> ";
} else {
	$no_str .= " <font color='#ff0000'><b>Cà chua</b></font> ";
}
if($fruit[$num4] > 200) {
	$yxs += 10;
	$ok_str .= " <font color='#ff0000'><b>Dứa</b></font> ";
} else {
	$no_str .= " <font color='#ff0000'><b>Dứa</b></font> ";
}
if($fruit[$num5] > 200) {
	$yxs += 10;
	$ok_str .= " <font color='#ff0000'><b>Đu đủ</b></font> ";
} else {
	$no_str .= " <font color='#ff0000'><b>Đu đủ</b></font> ";
}

//No
if(empty($ok_str)) {
	die('{"code":0,"direction":"Bạn chưa thu thập đủ!<br /><br />Một trong số các nông sản sau: <b><font color=\"#ff0000\">Củ cải, cà chua, dưa hấu, dứa và đu đủ</font></b>! Bạn hãy thu thập 200 đơn vị một trong số các loại nông sản trên, bạn sẽ nhận được 10 hạt giống bạch quả! Khi đạt 50 cây bạch quả, bạn sẽ nhận được 1 bộ set trang trí!<br /><br /><a href=\"http://qbar.qq.com/appevent/r/?31\" target=\"_blank\"><font color=\"#ff0000\">Chi tiết&gt;&gt;</font></a><br /><br />Thời gian: 15:00 08/03 - 15:00 10/03 (1 lần)"}');

}


if($_REQUEST['confirm']) {
	echo '{"code":1,"direction":"Chúc mừng!<br />Bạn đã thu thập được <font color=\"#ff0000\"><b>' . $yxs . ' hạt giống bạch quả</b></font>.<br /><br />Bây giờ bạn hãy gieo hạt giống và chăm sóc cho cây chóng lớn!<br /><br />Khi thu hoạch cây bạch quả sẽ gặp nhiều điều thú vị đấy!<br />","item":[{"eNum":' . $yxs . ',"eParam":25,"eType":1}]}';
} else {
	if($yxs == 50) {
		//A .... decorative accessories
		$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
		$decorative = qf_decode($decorative);
		$decorative[$itemtype][$zs1]['itemType'][$zs1][status] = 0;
		$decorative[$itemtype][$zs1]['itemType'][$zs1][validtime] = $_QFG['timestamp'] + $itemtype[$zs1][itemValidTime];
		$decorative[$itemtype][$zs2]['itemType'][$zs2][status] = 0;
		$decorative[$itemtype][$zs2]['itemType'][$zs2][validtime] = $_QFG['timestamp'] + $itemtype[$zs2][itemValidTime];
		$decorative[$itemtype][$zs3]['itemType'][$zs3][status] = 0;
		$decorative[$itemtype][$zs3]['itemType'][$zs3][validtime] = $_QFG['timestamp'] + $itemtype[$zs3][itemValidTime];
		$decorative[$itemtype][$zs4]['itemType'][$zs4][status] = 0;
		$decorative[$itemtype][$zs4]['itemType'][$zs4][validtime] = $_QFG['timestamp'] + $itemtype[$zs4][itemValidTime];
		$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative) . "' where uid=" . $_QFG['uid']);
	}
	$package[$yxsId] += $yxs;
	$_QFG['db']->query("UPDATE app_qqfarm_nc set  package='" . qf_encode($package) . "', chris=4 where uid=" . $_QFG['uid']);
	echo '{"code":1,"direction":"<br /><br />Bạn cần thu thập đủ 200 đơn vị ' . $ok_str . '.<br />Phần thưởng: <font color=\"#ff0000\"><b>' . $yxs . ' hạt giống bạch quả</b></font>.<br />Bạn đã thu thập đủ chưa?"}';
}

?>