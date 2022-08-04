<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
$psize = 25;
$pid = intval($_GET['pid']);
$pid = $pid < 1 ? 1 : $pid;
$start = ($pid - 1) * $psize;

//处理查询
$purl = "admin.php?mod=user_list";
$user_list = array();
$count = $_HFG['db']->result("SELECT COUNT(*) FROM app_fish_ui");
if($count) {
	$user_list = $_HFG['db']->fetchAll("SELECT * from app_fish_ui order by uid asc LIMIT {$start},{$psize}");
	foreach($user_list as $k=>$v) {
		$user_list[$k]['level'] = qf_toLevel($v['exp']);
		$user_list[$k]['visittime'] = date("Y-m-d",($v['visittime']));
	}
}

qf_getView("admin/user_list");

?>