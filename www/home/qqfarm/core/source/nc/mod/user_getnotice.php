<?php

# Farm Bulletin
//Consumer tips
$isread = $_QFG['db']->result('SELECT COUNT(*) FROM app_qqfarm_nclogs WHERE uid = ' . $_QFG['uid'] . ' and isread = 0');
$a = $isread ? 1 : 0;

$nc_notice = $_NOTICE['nc'];

echo '{"id":' . $_QFG['timestamp'] . ',"content":"' . str_replace('"', '\"', $nc_notice) . '","time":' . $_QFG['timestamp'] . ',"have_new_feeds":'.$a.',"have_new_msg":false,"have_new_sysmsg":false,"code":1}';

?>