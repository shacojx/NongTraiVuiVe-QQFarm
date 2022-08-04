<?php

# Dog Food Tips

$dog = $_QFG['db']->result("SELECT dog FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$dog = qf_decode($dog);

$hours = floor(($dog['dogFeedTime'] - $_QFG['timestamp']) / 3600);
if($hours < 0) {
	$hours = 0;
}

echo '{"hours":' . $hours . ',"saleOut":"'.$toolstype[9001]['saleOut'].'"}';

?>