<?php
/**
 * Game Settings
 * Modify by seaif@zealv.com
 */


$Tips = $_QFG['db']->result("select tips FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$Tips = qf_decode($Tips);

if($_GET['do'] == "save") {
	$ncTips = array(
		'water_b' => 'Cám ơn bạn đã tưới nước giúp mình',
		'weed_b' => 'Cám ơn bạn đã diệt cỏ giúp mình',
		'pest_b' => 'Cám ơn bạn đã trừ sâu giúp mình',
		'weed_a' => 'EEh! Chơi gì kỳ vậy?',
		'pest_a' => 'EEh! Chơi gì kỳ vậy?'
	);
	$tip_type = $_POST['type'];
	$tip_value = $_POST['value'];
	if(array_key_exists($tip_type, $ncTips)) {
		$Tips[$tip_type] = $_POST['value'] ? $_POST['value'] : $ncTips[$tip_type];
		$result = $_QFG['db']->query("UPDATE app_qqfarm_nc set tips ='" . qf_encode($Tips) . "' where uid=" . $_QFG['uid']);
		if($result) {
			die('1|&|Sửa thành công|&|null|&|' . $Tips[$tip_type]);
		} else
			die('2|&|Không thể lưu');
	} else
		die('3|&|Chưa có nội dung.');
} else {
	qf_getView("tools/setting");
}

?>