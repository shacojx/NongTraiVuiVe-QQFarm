<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$auth && die($auth);


# 新用户检查
$nc_uid = $_HFG['db']->result("SELECT uid FROM app_fish_ui where uid=" . $_HFG['uid']);
if($nc_uid == null) {
	include_once("source/ui/user_init.php");
}


# 打开鱼塘
if ( $_REQUEST['mod'] == "user" && $_REQUEST['act'] == "run" ){
	include_once("source/ui/fish.php");

	$uId = (int)$_POST['u'];
	if($_POST['u']==0){
		$uId = $_HFG['uid'];
		$_HFG['db']->query("UPDATE app_fish_ui set visittime=".$_HFG['timestamp']." where uid=" . $uId);
	}
	$list = $_HFG['db']->fetchOne('select * from app_fish_ui where uid=' . $uId);
	if(!$list['username']) {
		$list['username'] = qf_getUserName($uId, true);//写入昵称
	}
	$username = $list['username'];

	$bstatus_arr = qf_decode($list['bstatus']);
	$fr_arr = qf_decode($list['fr']);
	if($fr_arr['time']>0 && $_QGF['timestamp'] < $fr_arr['time']) {
		$fr = $fr_arr['fr'];
	} else {
		$fr = 1;
		$_HFG['db']->query("UPDATE app_fish_ui set fr='{\"fr\":1,\"time\":0}' where uid=" . $uId);
	}

	# 装饰参数
	$decorative = qf_decode($list['decorative']);
	foreach($decorative as $itemtype => $value) {
		foreach($value as $key => $value1) {
			if($value1['status'] == 1) {
				if($_HFG['timestamp'] < $value1['validtime'] || $value1['validtime'] == 1) {
					$decorative_str[] = '{"i":' . $key . '}';

				} else {
					unset($decorative[$itemtype][$key]);
					$isUpdate = 1;
					$decorative[$itemtype][$itemtype]['status'] = 1;
					$decorative_str[] = '{"i":' . $itemtype . '}';
				}
			} else {
				if($value1['validtime'] != 1 && $_HFG['timestamp'] >= $value1['validtime']) {
					unset($decorative[$itemtype][$key]);
					$isUpdate = 1;
				}
			}
		}
	}

	$decorative_str = '[' . implode(',', $decorative_str) . ',{"i":50001}]';

	if($isUpdate == 1) {
		$_HFG['db']->query("UPDATE app_fish_ui set decorative='" . qf_encode($decorative) . "' where uid=" . $uId);
		$isUpdate = 0;
	}
	if(!$username){
	  $username='gohooh120';
	}
	$bstatus_str = qf_encode($bstatus_arr);

	echo '{"code":1,"d":"","tree":{"total_gift_num":0,"gifts":[]},"bstatus":'.$bstatus_str.',"items":'.$decorative_str.',"user":{"u":'.$uId.',"ut":0,"un":"'.$username.'","m":'.$list['money'].',"f":'.$list['yb'].',"e":'.$list['exp'].',"headpic":"'.qf_getheadPic(0, 'small').'"},"e":'.$list['exp'].',"m":'.$list['money'].',"fr":'.$fr.',"weather":{"weatherid":1,"weatherdesc":"gohooh121"},"a":'.$_HFG['timestamp'].',"servertime":{"time":'.$_HFG['timestamp'].'},"info":{"p":0,"l":0,"g":0},"giftDog":false,"dog":'.$list['dog'].'}';

# 随机刷草，虫，旱
	if(($_HFG['timestamp']-$list['randtime']) > 3600 ) {
		$_HFG['db']->query("UPDATE app_fish_ui set randtime=".$_HFG['timestamp']." where uid=" . $uId);
		if(mt_rand(0, 100) <= 50) {
			foreach($bstatus_arr as $key=>$value) {
				if( ($_HFG['timestamp'] - $value['q']) < $fishtime[$value['b']][2] && $value['b'] > 0) {
					if( $value['s']==0 ) {
						 $value['s'] = mt_rand(1,100) > 30 ? 1 : 0;
					}
					if( $value['k']==0 ) {
						$value['k'] = mt_rand(1,100) > 30 ? 1 : 0;
					}
					if( $value['r']==0 ) {
						$value['r'] = mt_rand(1,100) > 30 ?  mt_rand(1,3) : 0;
					} 
					$bstatus_arr[$key] = $value;
				}
				$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus_arr)) . "' where uid=" . $uId);
			}
			
	 }

	}

}

#扩建鱼塘提示
if ( $_REQUEST['mod'] == "user" && $_REQUEST['act'] == "expandpay" ){

	$tudiarr = array(
		"6" => array("level" => 5, "money" => 10000),
		"7" => array("level" => 7, "money" => 20000),
		"8" => array("level" => 9, "money" => 30000),
		"9" => array("level" => 11, "money" => 50000),
		"10" => array("level" => 13, "money" => 70000),
		"11" => array("level" => 15, "money" => 90000),
		"12" => array("level" => 17, "money" => 120000),
		"13" => array("level" => 19, "money" => 150000),
		"14" => array("level" => 21, "money" => 180000),
		"15" => array("level" => 23, "money" => 230000),
		"16" => array("level" => 25, "money" => 300000),
		"17" => array("level" => 27, "money" => 500000)
	);

	$reclaim = $_HFG['db']->result("SELECT reclaim FROM app_fish_ui where uid=" . $_HFG['uid']);
	echo '{"a":'.$reclaim.',"code":1,"m":' . $tudiarr[$reclaim]['money'] . ',"l":' . $tudiarr[$reclaim]['level'] . '}';

}

#扩建鱼塘
if ( $_REQUEST['mod'] == "user" && $_REQUEST['act'] == "expand" ){

	$tudiarr = array(
		"6" => array("level" => 5, "money" => 10000),
		"7" => array("level" => 7, "money" => 20000),
		"8" => array("level" => 9, "money" => 30000),
		"9" => array("level" => 11, "money" => 50000),
		"10" => array("level" => 13, "money" => 70000),
		"11" => array("level" => 15, "money" => 90000),
		"12" => array("level" => 17, "money" => 120000),
		"13" => array("level" => 19, "money" => 150000),
		"14" => array("level" => 21, "money" => 180000),
		"15" => array("level" => 23, "money" => 230000),
		"16" => array("level" => 25, "money" => 300000),
		"17" => array("level" => 27, "money" => 500000)
	);

	$list = $_HFG['db']->fetchOne("SELECT money,bstatus,reclaim,exp FROM app_fish_ui where uid=" . $_HFG['uid']);

	$reclaim = $list['reclaim'];
	if($list['money'] < $tudiarr[$reclaim]['money'] || $list['exp'] < $tudiarr[$reclaim]['exp']) {
		exit();
	}

	$bstatus = qf_decode($list['bstatus']);
	foreach($bstatus as $key => $value) {
		if($key >= $reclaim) {
			unset($bstatus[$key]);
		}
	}
	$bstatus[$reclaim] = array("a"=>(int)$reclaim,"b"=>0,"c"=>0,"g"=>0,"d"=>0,"m"=>0,"h"=>0,"j"=>0,"k"=>0,"bn"=>"","n"=>array(),"p"=>array(),"w"=>0,"q"=>0,"r"=>0,"s"=>0,"t"=>0,"x"=>100);
	$bstatus = array_values($bstatus);

	$_HFG['db']->query("UPDATE app_fish_ui set money = money - " . $tudiarr[$reclaim]['money'] . ",bstatus='" . qf_encode($bstatus) . "',reclaim = reclaim + 1 where uid=" . $_HFG['uid']);

	echo '{"code":1,"direction":"","m":-' . $tudiarr[$reclaim]['money'] . '}';

}
?>