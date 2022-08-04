<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$auth && die($auth);
include_once("source/ui/fish.php");
if($_REQUEST['mod']=='chat' && $_REQUEST['act']=='getallinfo') {
	$uId = (int)$_POST['u'];
	$list = $_HFG['db']->fetchOne('SELECT username,money,exp,repertory,yb FROM app_fish_ui where uid=' . $uId);
	$repertory = qf_decode($list['repertory']);
	foreach($repertory as $k=>$v) {
		if(!empty($rep)) {
			$rep .= ',{"bid":'.$v["cId"].',"bname":"'.$fishtype[$v["cId"]]["bn"].'","harvestnumber":'.$v["h"].',"scroungenumber":'.$v["s"].'}';
		} else {
			$rep = '{"bid":'.$v["cId"].',"bname":"'.$fishtype[$v["cId"]]["bn"].'","harvestnumber":'.$v["h"].',"scroungenumber":'.$v["s"].'}';
		}
	}
//type:1偷鱼,2帮忙,3放垃圾，4狗咬，5放鲨鱼
$_HFG['db']->query("delete from app_fish_logs where   uid = " . $uId . " and (UNIX_TIMESTAMP(now()) - time) >7*24*3600"); //清除七天前的日志
$log = array();
$values = $_HFG['db']->fetchAll("SELECT * FROM app_fish_logs WHERE uid = " . $uId . " ORDER BY time DESC limit 0,50");
foreach($values as $value) {
	$username = qf_getUserName($value[fromid]);
	if($value[type] == 1) {
		$counts_ = explode(';', $value[counts]);
		$counts_all = "";
		foreach($counts_ as $value_) {
			$counts_t = explode(':', $value_);
			$counts_all .= $counts_t[1] . "\u6761" . $fishtype[$counts_t[0]]['bn'] . "\u3001";
		}
		if($counts_all != "") {
			$counts_all = substr($counts_all, 0,-6 );
		}
		$msg = "\"<font color=\\\"#009900\\\"><b>" . $username . "</b></font> gohooh190{$counts_all}gohooh191"";
	}
	elseif($value[type] == 2) {
		$counts_all = "";
		$counts_ = explode(':', $value[counts]);
		if($counts_[0] > 0) {
			$counts_all .= "gohooh192" . $counts_[0] . "gohooh193";
		}
		if($counts_[1] > 0) {
			$counts_all .= "gohooh194" . $counts_[1] . "gohooh195";
		}
		if($counts_[2] > 0) {
			$counts_all .= "gohooh196" . $counts_[2] . "gohooh197";
		}
		if($counts_all != "") {
			$counts_all = substr($counts_all, 0, -6);
		}
		$msg = "\"<font color=\\\"#009900\\\"><b>" . $username . "</b></font> gohooh198{$counts_all}gohooh199"";
	}
	elseif($value[type] == 3) {
		$msg = "\"<font color=\\\"#009900\\\"><b>" . $username . "</b></font> gohooh200"";
	}
	elseif($value[type] == 4) {
		$msg = "\"<font color=\\\"#009900\\\"><b>" . $username . "</b></font> gohooh201" . $value[count] . "gohooh202"";
	}
	elseif($value[type] == 5) {
		$msg = "\"<font color=\\\"#009900\\\"><b>" . $username . "</b></font> gohooh203"";
	}
	
	$log[] = "{\"time\":" . $value['time'] . ",\"msg\":" . $msg . "}";
}

$log = '[' . implode(',', $log) . ']';
	echo '{"user":{"un":"'.$list['username'].'","headpicbig":"' . qf_getheadPic($uId, 'big') . '","l":' . qf_toLevel($list['exp']) . ',"e":'.$list["exp"].',"m":'.$list['money'].',"f":'.$list['yb'].',"homepage":"' . qf_getHomePage($uId) . '"},"log":'.$log.',"chat":[],"repertory":['.$rep.']}';
}
?>