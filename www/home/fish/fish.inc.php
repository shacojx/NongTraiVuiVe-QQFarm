<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/

realname_set($_SGLOBAL['supe_uid'], $_SGLOBAL['supe_username']);
realname_get();

define('FISH_ROOT', str_replace('\\', '/', dirname(__file__)));
if(!@include(FISH_ROOT . '/core/data/_hsc.php')) {
	@include(FISH_ROOT . '/core/config/_hsc.php');
}

$qf_root = 'fish';
$qf_charset = $_SC['charset'] == 'gbk' ? 'gbk' : 'utf-8';
include template($qf_root . '/template/fish.' . $qf_charset);

?>