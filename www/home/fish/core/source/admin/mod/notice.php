<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/

if($_GET['submit'] == 1) {
	//获取滚动公告
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
	//保存公告
	if(qf_putCache('_NOTICE', $_NOTICE)) {
		die('1|&|修改成功|&|refresh');
	}
	die('0|&|修改失败');
}

qf_getView("admin/notice");

?>