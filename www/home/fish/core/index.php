<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
include_once('common.php');
header('Content-Type:text/html; charset=utf-8');

$auth && die($auth);

//获取参数
$type = in_array($_GET['type'], array('ui')) ? $_GET['type'] : 'ui';

//加载模板
qf_getView('ui');

?>