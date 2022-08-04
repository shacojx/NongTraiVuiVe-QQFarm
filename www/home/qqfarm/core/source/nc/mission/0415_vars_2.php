<?php

# NPC Tasks:: clown
# Friends Farm Show NPC
# for source/nc/mod/user_run.php

$npc = '';
$npc_times = $_QFG['db']->result('SELECT chris FROM app_qqfarm_nc WHERE uid = ' . $_QFG['uid']);

$npc_flag = 0;
foreach($status as $sk=>$sv) {
	if($sv['b'] == 6 && $sv['m']>$sv['l']) {
		$npc_flag++;
	}
}
if($npc_times>0 && mt_rand(1,100)<33 && $npc_flag>0) {
	$npc = ',"npc":1';
}

?>