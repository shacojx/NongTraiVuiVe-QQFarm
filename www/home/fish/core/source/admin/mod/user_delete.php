<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
$id = intval($_GET['id']);
if($id < 1) {
	die('1|&|参数错误. ');
}

$_HFG['db']->query("DELETE FROM app_fish_ui WHERE uid=" . $id);
$_HFG['db']->query("DELETE FROM app_fish_logsWHERE uid=" . $id);

die('1|&|删除UID为' . $id . '的用户的鱼塘成功.|&|refresh');

?>