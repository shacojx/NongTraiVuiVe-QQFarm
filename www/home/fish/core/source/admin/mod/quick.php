<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/

$go = $_GET['go'];

if($go == "exchange_clean") {
	$_HFG['db']->query("DELETE FROM app_fish_logs");
	die('1|&|清理日志成功.');
} elseif($go == "repertory_clean") {
	$_HFG['db']->query("update app_fish_ui set repertory=''");
	die('1|&|初始化成果.');
} else {
	qf_getView("admin/quick");
}

?>