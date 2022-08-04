<?php

# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/


//HSC初始化
is_array($_HSC) || $_HSC = array();

//功能控制开关
$_HSC['apiType'] = 'uchome'; //接口类型
$_HSC['friendType'] = 1; //好友列表类型[1:默认好友,2:全站好友]
$_HSC['missionName'] = '0415'; //当前活动[填写活动名称,留空则关闭]

//模板参数
$_HSC['view']['tplId'] = 'qf_default';//模板名
$_HSC['view']['tplDir'] = 'view/';//模板根目录
$_HSC['view']['cplDir'] = 'data/view/';//编译目录
$_HSC['view']['tplBak'] = 'view/qf_default/';//备用模板
$_HSC['view']['player'] = 1; //音乐播放器[0:关|1:百度播放器]

//管理员列表
$_HSC['adminer'] = array(1);//格式为数组

//鱼塘关闭
$_HSC['closefish'] = 1;//0为关闭，1为开
$_HSC['closeinfo'] = 'Thông tin：<br /><br />　　Bạn đang chơi game Ao cá vui vẻ trên mạng xã hội Nhà Tui http://www.gohooh.com/nhatui<br />　　Chúc bạn vui vẻ!';//关闭鱼塘说明

?>