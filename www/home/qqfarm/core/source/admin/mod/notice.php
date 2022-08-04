<?php

# Announcement Management

if($_GET['submit'] == 1) {
	//Notice for Farm Ranch
	$_NOTICE['mc'] = $_POST['mc'];
	$_NOTICE['nc'] = $_POST['nc'];
	unset($_POST['mc'], $_POST['nc']);
	//Notice for Farm Ranch
	$main_text = $main_href = array();
	foreach($_POST as $key => $value) {
		if(strpos($key, 'main_text') === 0) {
			$main_text[] = $value;
		} elseif(strpos($key, 'main_href') === 0) {
			$main_href[] = $value;
		}
	}
	for($i=0; $i<count($main_text); $i++) {
		$_NOTICE['main'][$i]['text'] = $main_text[$i];
		$_NOTICE['main'][$i]['href'] = $main_href[$i];
	}
	//Save Notice
	if(qf_putCache('_NOTICE', $_NOTICE)) {
		die('1|&|Hoàn tất|&|refresh');
	}
	die('0|&|Lỗi');
}

qf_getView("admin/notice");

?>