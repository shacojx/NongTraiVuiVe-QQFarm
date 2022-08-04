<?php

//动物市场

$type = in_array(
		$_GET['type'],
		array('index','myitem','myproduct','saleitem','cancelitem','buyitem')
	) ? $_GET['type'] : 'index';

qf_getCache('animaltype','/mc/');

if($type == "myproduct") {
	$fruit = $_QFG['db']->result("select package from app_qqfarm_mc where uid=".$_QFG['uid']);
	$fruit = qf_decode($fruit);
	$fruitarr = array();
	qf_getView("tools/market_mc_myproduct");
} elseif($type == "saleitem") {
	//添加出售信息
	$cid = (int)$_GET["cid"];
	$cprice = (int)$_GET["price"];
	$cnumber = (int)$_GET["number"];
	$mclass = (int)$_GET["mclass"];
	if($cnumber <= 0) {
		die('1|&|Giá trị phải lớn hơn 0');
	}
	$mprice = $cid > 10000 ? $animaltype[$cid - 10000]['productprice'] : $animaltype[$cid]['byproductprice'];
	if($cprice <= 0 || $cprice/$mprice > 1.1 || $cprice/$mprice < 0.9) {
		die('1|&|Giá trị phải lớn hơn 0 và không vượt quá 10% so với giá thị trường');
	}
	$package = $_QFG['db']->result("select package from app_qqfarm_mc where uid=".$_QFG['uid']);
	$packagearr = qf_decode($package);
	if($cnumber > $packagearr[$cid]) {
		die('1|&|Bạn không có đủ');
	}
	$packagearr[$cid] = $packagearr[$cid] - $cnumber;
	foreach($packagearr as $key => $value) {
		if($value == 0) {
			unset($packagearr[$key]);
		}
	}
	$_QFG['db']->query("update app_qqfarm_mc set package='".qf_encode($packagearr)."' where uid=".$_QFG['uid']);
	$sql = "insert into app_qqfarm_market (`cid`, `cnumber`, `cprice`, `mclass`, `selluid`) values ('$cid', '$cnumber','$cprice', 4, ".$_QFG['uid'].");";
	$_QFG['db']->query($sql);
	$suiji = mt_rand(0,100);
	if($suiji <= 33) {
		include ("source/tools/mod/market_rand.inc.php");
	}
	die('3|&|Hàng đã được rao bán|&|refresh|&|1');
} elseif($type == "cancelitem") {
	$marketlist = $_QFG['db']->fetchAll("select * from app_qqfarm_market where id=".$_GET['id']." and mclass =4 ");
	if($_QFG['uid'] != $marketlist[0]['selluid']) {
		die('1|&|Đây không phải là hàng của bạn');
	}
	$package = $_QFG['db']->result("select package from app_qqfarm_mc where uid=".$_QFG['uid']);
	$package = qf_decode($package);
	$package[$marketlist[0]['cid']] = $package[$marketlist[0]['cid']] + $marketlist[0]['cnumber'];
	$_QFG['db']->query("update app_qqfarm_mc set package='".qf_encode($package)."' where uid=".$_QFG['uid']);
	$_QFG['db']->query("DELETE FROM app_qqfarm_market WHERE id = ".$_GET['id']." and mclass =4 ");
	die('3|&|Đã ngưng bán|&|refresh|&|1');
} elseif($type == "buyitem") {
	$money = $_QFG['db']->result("select money from app_qqfarm_user where uid=".$_QFG['uid']);
	$marketlist = $_QFG['db']->fetchAll("select * from app_qqfarm_market where id=".$_GET['id']." and mclass =4 ");
	$cnumber = $_GET['number'];
	if($cnumber > $marketlist[0]['cnumber']) {
		die('1|&|Quá nhiều rồi đấy');
	}
	if($cnumber < 0) {
		die('1|&|Giá trị phải lớn hơn 0');
	}
	$money_1 = $cnumber * $marketlist[0]['cprice'];
	if($money < $money_1) {
		die('1|&|Bạn không có đủ tiền');
	}
	$package = $_QFG['db']->result("select package from app_qqfarm_mc where uid=".$_QFG['uid']);
	$package = qf_decode($package);
	$package[$marketlist[0]['cid']] = $package[$marketlist[0]['cid']] + $cnumber;
	$_QFG['db']->query("update app_qqfarm_mc set package='".qf_encode($package)."' where uid=".$_QFG['uid']);
	if($cnumber < $marketlist[0]['cnumber']) {
		$_QFG['db']->query("update app_qqfarm_market set cnumber='".($marketlist[0]['cnumber'] - $cnumber)."' WHERE id=".$_GET['id']." and mclass =4 ");
	} elseif($cnumber = $marketlist[0]['cnumber']) {
		$_QFG['db']->query("delete from app_qqfarm_market where id = ".$_GET['id']." and mclass =4 ");
	}
	if($money_1 < 1) {
		$money_1 = 1;
	}
	$_QFG['db']->query("update app_qqfarm_user set money=money-".$money_1." where uid=".$_QFG['uid']);
	$_QFG['db']->query("update app_qqfarm_user set money=money+".$money_1." where uid=".$marketlist[0]['selluid']);
	$suiji = mt_rand(0,100);
	if($suiji <= 33) {
		include ("source/tools/mod/market_rand.inc.php");
	}
	die('3|&|Đã mua với giá '.$money_1.' xu|&|refresh|&|1');
} else {
	//分页参数
	$psize = 17;
	$pid = (int)$_GET['pid'];
	$pid = $pid < 1 ? 1 : $pid;
	$start = ($pid - 1) * $psize;
	$purl = "tools.php?mod=market&act=mc";
	$count = $_QFG['db']->result("SELECT COUNT(*) FROM app_qqfarm_market where mclass=4");
	//处理查询
	$list = array();
	if($count) {
		$list = $_QFG['db']->fetchAll("select m.*,s.username from app_qqfarm_market m, app_qqfarm_user s where m.selluid=s.uid and mclass=4 order by s.uid asc LIMIT {$start},{$psize}");
	}
	qf_getView("tools/market_mc");
}

?>