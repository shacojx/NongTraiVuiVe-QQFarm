<?php
//Information received flowers

$flower = $_QFG['db']->result("SELECT flower FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$flower = qf_decode($flower);

foreach($flower as $key => $value) {
	if($value['fromId'] == $_REQUEST['uid'] && $value['time'] == $_REQUEST['time']) {
		$echo_srt = '{"code":1,"time":' . $value['time'] . ',"uid":' . $value['fromId'] . ',"word":"' . $value['word'] . '"}';
	}
}

echo $echo_srt ? $echo_srt : '';

?>