<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$auth && die($auth);
include_once("source/ui/fish.php");

# Trang trí ao cá
if($_REQUEST['mod']=="item" && $_REQUEST['act']=="activeitem") {
	$i = (int)$_POST['i'];
	$decorative = $_HFG['db']->result("SELECT decorative FROM app_fish_ui where uid=" . $_HFG['uid']);
	$decorative = qf_decode($decorative);
	foreach($decorative as $item_type => $value) {
			foreach((array)$value as $key => $value1) {
					if($key == $i) {
						$dec = $item_type;
						$decorative[$item_type][$i]['status'] = 1;
					}
				}
			}
			if($dec) {
				foreach($decorative as $item_type => $value)
					if($item_type == $dec) {
						foreach((array)$value as $key => $value1) {
							if($key != $i)
								$decorative[$item_type][$key]['status'] = 0;
						}
					}
			}
			$_HFG['db']->query("UPDATE app_fish_ui set decorative='" . qf_encode($decorative) . "' where uid=" . $_HFG['uid']);
	
	echo '{"code":1,"i":' . $i . '}';
}

?>