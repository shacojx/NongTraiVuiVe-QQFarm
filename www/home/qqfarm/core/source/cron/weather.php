<?php

# Farm Weather modification
# Modify by seaif@zealv.com

$dateInfo = getdate();

if($dateInfo['wday'] == 4) {
	$_QFG['db']->query("UPDATE app_qqfarm_user set tianqi=3 where tianqi<4");//雨天
} else {
	$_QFG['db']->query("UPDATE app_qqfarm_user set tianqi=1");//晴天
}

?>