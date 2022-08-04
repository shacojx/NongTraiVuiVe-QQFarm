<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
# gohooh1001
if($nc_uid == null) {
	//初始金币
	$money = 500;
	//初始Y币
	$yb = 0;
	//初始鱼塘参数
	$bstatus='[{"a":0,"b":42,"c":4,"g":22,"d":13,"m":22,"h":0,"j":0,"k":0,"bn":"gohooh110","n":[],"p":[],"w":0,"q":'.($_HFG['timestamp']-21700).',"r":0,"s":0,"t":'.($_HFG['timestamp']-21700).',"x":100},{"a":1,"b":42,"c":4,"g":22,"d":13,"m":22,"h":0,"j":0,"k":0,"bn":"gohooh111","n":[],"p":[],"w":0,"q":'.($_HFG['timestamp']-12000).',"r":0,"s":0,"t":'.($_HFG['timestamp']-12000).',"x":100},{"a":2,"b":43,"c":4,"g":27,"d":16,"m":27,"h":0,"j":0,"k":0,"bn":"gohooh112","n":[],"p":[],"w":0,"q":'.($_HFG['timestamp']-16200).',"r":0,"s":0,"t":'.($_HFG['timestamp']-16200).',"x":100},{"a":3,"b":0,"c":0,"g":0,"d":0,"m":0,"h":0,"j":0,"k":0,"bn":"","n":[],"p":[],"w":0,"q":0,"r":0,"s":0,"t":0,"x":100},{"a":4,"b":0,"c":0,"g":0,"d":0,"m":0,"h":0,"j":0,"k":0,"bn":"","n":[],"p":[],"w":0,"q":0,"r":0,"s":0,"t":0,"x":100},{"a":5,"b":0,"c":0,"g":0,"d":0,"m":0,"h":0,"j":0,"k":0,"bn":"","n":[],"p":[],"w":0,"q":0,"r":0,"s":0,"t":0,"x":100}]';

	//初始经验
	$exp = 0;
	//初始装饰
	$decorative ='{"1":{"11001":{"status":1,"validtime":1}},"2":{"12001":{"status":1,"validtime":1}},"3":{"13001":{"status":1,"validtime":1}},"4":{"14001":{"status":1,"validtime":1}}}';
	//初始化狗
	$dog = '{"t":0,"ds":"n","dc":0,"dm":0,"dt":0}';
	//初始化鱼杆
	$fr = '{"t":0,"effect":1,"time":0}';
    //初始化说明
	$tips ='{"s_h":"Cảm ơn bạn đã giúp đỡ, bạn là người tốt!","k_h":"Cảm ơn bạn đã diệt cá mập giùm tớ!","r_h":"Cảm ơn bạn đã vệ sinh ao giùm tớ!","k_a":"Bạn là người xấu!","r_a":"Chơi ác vậy!!!"}';

	//参数入库
	$_HFG['db']->query("INSERT INTO app_fish_ui(uid,username,regname,money,yb,bstatus,exp,decorative,dog,fr,tips) VALUES({$_HFG['uid']},'".$_HFG['uname']."','".$_HFG[$member['username']]."',{$money},{$yb},'" . $bstatus . "',{$exp},'" .$decorative . "','".$dog."','".$fr."','".$tips."')");
	//Feed推送
	qf_addFeed('user_init');
}

?>