<?php
//WEBMASTER and gifts

qf_getCache('cropstype', '/nc/');
qf_getCache('toolstype', '/nc/');
qf_getCache('animaltype', '/mc/');
$nc_itemtype=qf_getCache('itemtype', '/nc/');
$mc_itemtype=qf_getCache('itemtype', '/mc/');

//Farm
$add_ncpaid = intval($_REQUEST['add_ncpaid']);
$add_ncpanum = intval($_REQUEST['add_ncpanum']);
$add_ncfrid = intval($_REQUEST['add_ncfrid']);
$add_ncfrnum = intval($_REQUEST['add_ncfrnum']);
$add_nctlid = intval($_REQUEST['add_nctlid']);
$add_nctlnum = intval($_REQUEST['add_nctlnum']);
//Ranch
$add_mcfrid = intval($_REQUEST['add_mcfrid']);
$add_toolsid = intval($_REQUEST['add_toolsid']);
$add_mcfrnum = intval($_REQUEST['add_mcfrnum']);
$add_tools = intval($_REQUEST['add_tools']);

//Decoration
$add_nctlid2 = intval($_REQUEST['add_nctlid2']);
$add_mctlid = intval($_REQUEST['add_mctlid']);

//Storage treatment
$users = $_QFG['db']->fetchAll("SELECT uid FROM app_qqfarm_user");
foreach($users as $value) {
	$uId = $value['uid'];
	//Farm Seed
	if($add_ncpaid > 0 && $add_ncpanum > 0) {
		if(array_key_exists($add_ncpaid, $cropstype)) {
			$package = $_QFG['db']->result("select package from app_qqfarm_nc where uid=" . $uId);
			$package = qf_decode($package);
			$package[$add_ncpaid] = $package[$add_ncpaid] + $add_ncpanum;
			$_QFG['db']->query("update app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $uId);
		} else {
			die('1|&|Lỗi CID');
		}
	}
	//Farm Products
	if($add_ncfrid >0 && $add_ncfrnum >0) {
		if(array_key_exists($add_ncfrid, $cropstype)) {
			$fruit = $_QFG['db']->result("select fruit from app_qqfarm_nc where uid=" . $uId);
			$fruit = qf_decode($fruit);
			$fruit[$add_ncfrid] = $fruit[$add_ncfrid] + $add_ncfrnum;
			$_QFG['db']->query("update app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $uId);
		} else{
			die('1|&|Lỗi CID');
		}
	}
	//道具(不含狗)
	if($add_nctlid >0 && $add_nctlnum > 0) {
		if(array_key_exists($add_nctlid,$toolstype)) {
			if(in_array($add_nctlid, array(40001, 40003))) {
				die('1|&|Không thể nhận chó');
			} elseif(in_array($add_nctlid, array(9001, 9002))) {
				$dogstr = $_QFG['db']->result("SELECT dog FROM app_qqfarm_nc where uid=" . $uId);
				$dogstr = qf_decode($dogstr);
				if($add_nctlid == 9001) {
					$dogFeed = 86400*$add_nctlnum;
				} elseif($add_nctlid == 9002) {
					$dogFeed = 604800*$add_nctlnum;
				}
				if($dogstr["dogFeedTime"] < $_QFG['timestamp']) {
					$dogstr["dogFeedTime"] = $_QFG['timestamp'] + $dogFeed;
				} else {
					$dogstr["dogFeedTime"] = $dogstr["dogFeedTime"] + $dogFeed;
				}
				$_QFG['db']->query("UPDATE app_qqfarm_nc set dog='" . qf_encode($dogstr) . "' where uid=" . $uId);
			} else {
				$fertarr = $_QFG['db']->result("SELECT tools FROM app_qqfarm_nc where uid=" . $uId);
				$fertarr = qf_decode($fertarr);
				if($add_nctlid > 39000){
					$fertarr[$add_nctlid-39099] = $fertarr[$add_nctlid-39099] + 7*$add_nctlnum;
				} else {
					$fertarr[$add_nctlid-30000] = $fertarr[$add_nctlid-30000] + $add_nctlnum;
				}
				$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($fertarr) . "' where uid=" . $uId);
			}
		} else {
			die('1|&|Lỗi CID');
		}
	}
	//牧场幼崽
	if($add_mcfrid >0 && $add_mcfrnum > 0) {
		if(array_key_exists($add_mcfrid, $animaltype) || array_key_exists($add_mcfrid-10000, $animaltype)) {
			$goods = $_QFG['db']->result("select goods from app_qqfarm_mc where uid=" .  $uId);
			$goods = qf_decode($goods);
			$goodsid = $add_mcfrid-10000;
			$goods[$goodsid] = $goods[$goodsid] + $add_mcfrnum;
			$_QFG['db']->query("update app_qqfarm_mc set goods='" . qf_encode($goods) . "' where uid=" .  $uId);
		} else {
			die('1|&|Lỗi CID');
		}
	}
	//牧场罐头
	if($add_toolsid >0 && $add_tools > 0) {
			$tools = $_QFG['db']->result("select tools from app_qqfarm_mc where uid=" .  $uId);
			$tools = qf_decode($tools);
			$tools[$add_toolsid] = $tools[$add_toolsid] + $add_tools;
			$_QFG['db']->query("update app_qqfarm_mc set tools='" . qf_encode($tools) . "' where uid=" .  $uId);

	}
	//Farm Decoration
	if($add_nctlid2 >0) {
		if(array_key_exists($add_nctlid2, $nc_itemtype)) {
			$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_nc where uid=" . $uId);
			$decorative = qf_decode($decorative);
			$additemtype = $nc_itemtype[$add_nctlid2]['itemType'];
			foreach($decorative[$additemtype] as $key => $value1) {
				if(array_key_exists($add_nctlid2,$decorative[$additemtype])) {
					$decorative[$additemtype][$add_nctlid2]['validtime'] = $decorative[$additemtype][$add_nctlid2]['validtime'] + $nc_itemtype[$add_nctlid2]['itemValidTime'];
				} else {
					$decorative[$additemtype][$add_nctlid2]['status'] = 0;
					$decorative[$additemtype][$add_nctlid2]['validtime'] = $_QFG['timestamp'] + $nc_itemtype[$add_nctlid2]['itemValidTime'];
				}
			}
			$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative) . "' where uid=" . $uId);
		} else {
			die('1|&|Lỗi CID');
		}
	}
	//Ranch decoration
	if($add_mctlid >0) {
		if(array_key_exists($add_mctlid, $mc_itemtype)) {
			$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_mc where uid=" . $uId);
			$decorative = qf_decode($decorative);
			foreach($decorative['item1'] as $key => $value1) {
				if(array_key_exists($add_mctlid,$decorative['item1'])) {
					$decorative['item1'][$add_mctlid]['validtime'] = $decorative['item1'][$add_mctlid]['validtime'] + $mc_itemtype[$add_mctlid]['itemValidTime'];
				} else {
					$decorative['item1'][$add_mctlid]['status'] = 0;
					$decorative['item1'][$add_mctlid]['validtime'] = $_QFG['timestamp'] + $mc_itemtype[$add_mctlid]['itemValidTime'];
				}
				$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='" . qf_encode($decorative) . "' where uid=" . $uId);
			}
		} else {
			die('1|&|Lỗi CID');
		}
	}
}
die('3|&|Đã tặng quà cho tất cả mọi người');

?>