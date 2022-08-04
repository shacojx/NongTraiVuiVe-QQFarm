<?php

# Lì xì đầu năm

$redpackage =mt_rand(1,100);
if($redpackage < 3) {
	if($redpackage < 2) {
		$red_gift = "\"gift\":{\"direction\":\"Bạn mở phong bao lì xì đầu năm và nhận được: \",\"item\":[{\"eNum\":3,\"eParam\":2,\"eType\":3},{\"eNum\":3,\"eParam\":111,\"eType\":1},{\"eNum\":200,\"eParam\":1,\"eType\":7}],\"title\":\"Phong bao lì xì\"},";
		$bluerose = 111;
		$huafei = 2;
		$packagearr[$bluerose] += 3;
		$toolsarr[$huafei] += 3;
		$exp_str=$exp_str+200;
	} else {
		$red_gift = "\"gift\":{\"direction\":\"Bạn mở phong bao lì xì đầu năm và nhận được: \",\"item\":[{\"eNum\":1,\"eParam\":3,\"eType\":3},{\"eNum\":2,\"eParam\":114,\"eType\":1},{\"eNum\":1,\"eParam\":9001,\"eType\":909090}],\"title\":\"Phong bao lì xì\"},";
		$bluerose = 114;
		$huafei = 3;
		$packagearr[$bluerose] += 2;
		$toolsarr[$huafei] += 1;
		if($_QFG['timestamp'] < $dogarr['dogFeedTime']) {
			$dogarr['dogFeedTime'] += 3600*24;
		} else {
			$dogarr['dogFeedTime'] = $_QFG['timestamp']+3600*24;
		}
	}
} else {
	$red_gift = '';
}

?>