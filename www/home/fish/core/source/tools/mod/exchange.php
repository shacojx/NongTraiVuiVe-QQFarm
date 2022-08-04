<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/

if($_GET['do'] == 'save') {
	//获取当前用户积分
	$credit = qf_userCredit(0);
	$number = $_GET['number'];
	$number = (!is_numeric($number) || $number < 1) ? 0 : intval($number);
	$type = $_GET['type'];
	if($type == "yb") {
		if($number * 10 > $credit)
			die('1|&|Bạn chưa đủ điểm.');
		elseif($number <= 0)
			die('2|&|Vui lòng nhập số nguyên dương.');
		else {
			qf_userCredit(0, "-" . ($number * 10));
			$_HFG['db']->query("UPDATE app_fish_ui set yb=yb+" . $number . " where uid=" . $_HFG['uid']);
			die('3|&|Giao dịch thành công.|&|refresh');
		}
	} elseif($type == "jb") {
		if($number > $credit)
			echo '1|&|Bạn chưa đủ điểm';
		elseif($number <= 0)
			echo '2|&|Vui lòng nhập số nguyên dương.';
		else {
			qf_userCredit(0, "-" . $number);
			$_HFG['db']->query("UPDATE app_fish_ui set money=money+" . ($number * 100) . " where uid=" . $_HFG['uid']);
			die('3|&|Giao dịch thành công.|&|refresh');
		}
	}
} else {
	qf_getView("tools/exchange");
}

?>