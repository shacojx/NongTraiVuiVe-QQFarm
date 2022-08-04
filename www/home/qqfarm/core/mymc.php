<?php
//Ranch entrance 

include('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

//Check the login status
if($auth = qf_checkauth()) {
	die($auth);
}

//New User Check
if(!$_QFG['db']->result("SELECT uid FROM app_qqfarm_mc where uid=" . $_QFG['uid'])) {
	include("source/mc/user_init.php");
}


//定义允许访问的模块
$mod_list = array(
	'cgi_buy_animal', //买动物
	'cgi_buy_guard',//买守卫
	'cgi_animal_tips',//守卫提示
	'cgi_get_userguard',//守卫装饰
	'cgi_hide_guard',//守卫装饰
	'cgi_active_guard',//守卫装饰
	'cgi_clear_log', //清空日志
	'cgi_demolish_pasture', //放蚊子
	'cgi_enter', //牧场初始化
	'cgi_fight', //抓老鼠
	'cgi_ws_com', //抓老鼠
	'cgi_feed_food', //帮自己、好友加草
	'cgi_feed_special', //萝卜饲养
	'cgi_get_animals', //牧场商店
	'cgi_get_exp', //好友动作提示
	'cgi_get_food', //买草
	'cgi_get_notice', //牧场公告
	'gb_buy', //元宝购买
	'cgi_farm_buyweapon', //金币购买
	'cgi_get_items', //装饰商店
	'cgi_buy_food', //金币买草
	'cgi_buy_item', //金币买装饰
	'cgi_get_useritem', //我的装饰
	'cgi_active_item', //装饰牧场
	'cgi_get_repertory', //仓库上锁
	'cgi_get_repertory_animal', //牧场仓库
	'cgi_get_package', //牧场食物
	'cgi_get_parade', //读取队行
	'cgi_get_toollist', //道具商店
	'cgi_get_user_info', //牧场日志
	'cgi_harvest_product', //动物收成
	'cgi_help_pasture', //拍蚊子和扫便便
	'cgi_post_product', //动物生产
	'cgi_sale_product', //卖出产品
	'cgi_set_parade', //设置队行
	'cgi_steal_product', //偷动物
	'cgi_up_animalhouse', //升级房子-入库
	'cgi_up_animalhouse_query', //升级房子
	'cgi_up_task_1', //新手任务1
	'cgi_up_task_2', //新手任务2
	'chat_clearchat', //清空留言
	'chat_getallinfo', //牧场留言
	'chat_sendchat', //给好友留言
	'friend', //好友列表
	'cgi_get_gifts', //VIP礼品提示
	'cgi_accept_gift', //领取礼包
	'cgi_feedcan', //喂养罐头
	'cgi_farm_exchange', //牧场消费
	'cgi_raise_cub', //牧场放动物
	'cgi_donate_animal',//捐赠动物
	'cgi_farm_qixiflag',//七夕活动
	'cgi_pasture_activity',//七夕活动
	'fcg_ws_get_costfeeds',//用户成果
	'cgi_get_rep_history',//用户成果
	'cgi_farm_halloween',
	'cgi_farm_get_halloweenseed',
	'cgi_pasture_activity',
	'cgi_putin',
	'cgi_farm_qixiflag',
	'shop_verify',
	'sysmsg_select',
	'cgi_farm_checkbitmap',//圣诞NPC任务
	'cgi_farm_getusercrop',//农场卡片包
	'cgi_pasture_chunjie',//活动
	'cgi_pasture_checkbitmap',//活动
	'cgi_farm_set_lock',
	'repertory_sale',
	'repertory_saleall',
	'cgi_farm_attack_beast',
	'cgi_farm_get_userbeast',//用户牛信息
	'cgi_farm_get_moralexp',//用户人品值
	'cgi_farm_adopt_beast',//用户购买牛
	'cgi_farm_raise_beast',//在好友放牛
	'cgi_farm_get_usercrystal',//水晶仓库
	'cgi_farm_sell_crystal',//出售水晶
	'cgi_farm_pickup_crystal',//用户拿水晶
	'cgi_farm_reward_beast',//放牛奖励
	'cgi_farm_donate_beast',//收成放牛
	'cgi_farm_open_slot',//开启槽位
	'cgi_farm_hpage_beast',//
	'cgi_farm_beast_getnick'//
);

//See the number of movies shot special mod
$mod_map = array(
	'cgi_clear_log?' => 'cgi_clear_log',
	'cgi_enter?' => 'cgi_enter',
	'cgi_get_repertory?target=animal' => 'cgi_get_repertory_animal',
	'cgi_get_user_info?' => 'cgi_get_user_info'
);

//Name of building blocks
$mod_name = $_REQUEST['mod'] ? $_REQUEST['mod'] : '';
if(array_key_exists($mod_name, $mod_map)) {
	$mod_name = $mod_map[$mod_name];
} else {
	$mod_name .= $_REQUEST['act'] ? '_' . $_REQUEST['act'] : '';
}
$mod_name = strtolower($mod_name);

//Load Module
if(in_array($mod_name, $mod_list)) {
	qf_getCache('animaltime', '/mc/');
	qf_getCache('animaltype', '/mc/');
	qf_getCache('itemtype', '/mc/');
	qf_getCache('toolstype', '/mc/');
	include("source/mc/mod/{$mod_name}.php");
} elseif(FARM_DEBUG) {
	error_log($mod_name . "\r\n", 3, 'data/logs/#mcmod_deny.log');
}

?>