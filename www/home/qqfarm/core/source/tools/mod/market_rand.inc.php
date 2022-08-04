<?php

//Opportunities for the sale and purchase market events

if($suiji <= 20) {
	if($suiji <= 14) {
		if($suiji <= 3) {
			$sjmoney = mt_rand(40,70);
			$_QFG['db']->query("update app_qqfarm_user set money=money+".$sjmoney." where uid=".$_QFG['uid']);
			$suijihua = 'Haha! Nhặt được '.$sjmoney.' xu';
		} elseif($suiji < 6) {
			$sjexp = mt_rand(10,30);
			$_QFG['db']->query("update app_qqfarm_nc set exp=exp+".$sjexp." where uid=".$_QFG['uid']);
			$suijihua = 'Đi chợ, học hỏi được thêm '.$sjexp.' Exp';
		} else {
			$sjmoney = mt_rand(10,30);
			$_QFG['db']->query("update app_qqfarm_user set money=money+".$sjmoney." where uid=".$_QFG['uid']);
			$suijihua = 'Haha! Nhặt được '.$sjmoney.' xu';
		}
	} elseif($suiji <= 17) {
		$sjmoney = mt_rand(10,30);
		$_QFG['db']->query("update app_qqfarm_user set money=money-".$sjmoney." where uid=".$_QFG['uid']);
		$suijihua = 'Bạn vô ý bị rơi mất '.$sjmoney.' xu';
	} else {
		$sjmoney = mt_rand(40,70);
		$_QFG['db']->query("update app_qqfarm_user set money=money-".$sjmoney." where uid=".$_QFG['uid']);
		$suijihua = 'Bạn bị kẻ gian chôm mất '.$sjmoney.' xu';
	}
}

?>