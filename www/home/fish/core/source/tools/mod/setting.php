<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/

$Tips = $_HFG['db']->result("select tips FROM app_fish_ui where uid=" . $_HFG['uid']);
$Tips = qf_decode($Tips);

if($_GET['do'] == "save") {
	$ncTips = array(
		's_h' => 'Cảm ơn bạn đã giúp đỡ, bạn là người tốt!',
		'k_h' => 'Cảm ơn bạn đã diệt cá mập giùm tớ!',
		'r_h' => 'Cảm ơn bạn đã vệ sinh ao giùm tớ!',
		'k_a' => 'Bạn là người xấu!',
		'r_a' => 'Chơi ác vậy!!!'
	);
	$tip_type = $_POST['type'];
	$tip_value = $_POST['value'];
	if(array_key_exists($tip_type, $ncTips)) {
		$Tips[$tip_type] = $_POST['value'] ? $_POST['value'] : $ncTips[$tip_type];
		$result = $_HFG['db']->query("UPDATE app_fish_ui set tips ='" . qf_encode($Tips) . "' where uid=" . $_HFG['uid']);
		if($result) {
			die('1|&|Thay đổi thành công.|&|null|&|' . $Tips[$tip_type]);
		} else
			die('2|&|Hoạt động thất bại.');
	} else
		die('3|&|Vui lòng điền nội dung.');
} else {
	qf_getView("tools/setting");
}

?>