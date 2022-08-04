<?php

# System Configuration

if($_GET['submit'] == 1) {
	//System configuration parameters
	$_QSC['friendType'] = (int)$_POST['friendType'];
	$_QSC['friendNumber'] = (int)$_POST['friendNumber'];
	$_QSC['closefarm'] = (int)$_POST['closefarm'];
	$_QSC['vip'] = (int)$_POST['vip'];
	$_QSC['creditType'] = $_POST['creditType'];
	$_QSC['redeem'] = (int)$_POST['redeem'];
	$_QSC['avatarStatic'] = (int)$_POST['avatarStatic'];
	$_QSC['closeinfo'] = $_POST['closeinfo'];
	$_QSC['missionName'] = $_POST['missionName'];
	$_QSC['diyLimitYDLevel'] = (int)$_POST['diyLimitYDLevel'];
	$_QSC['gzipcompress'] = (int)$_POST['gzipcompress'];
	$_QSC['view']['tplId'] = $_POST['view_tplId'];
	$_QSC['view']['player'] = (int)$_POST['view_player'];
	$_QSC['adminer'] = explode(',', $_POST['adminer']);
	//User initialization parameters
	$_INIT['money'] = (int)$_POST['init_money'];
	$_INIT['yb'] = (int)$_POST['init_yb'];
	$_INIT['nc_exp'] = (int)$_POST['init_nc_exp'];
	$_INIT['mc_exp'] = (int)$_POST['init_mc_exp'];
	//Hide seeds and decorative
	$_HIDE['seed'] = explode(',', $_POST['hide_seed']);
	$_HIDE['item'] = explode(',', $_POST['hide_item']);
	//Hide pups and pasture decoration
	$_HIDE['animal'] = explode(',', $_POST['hide_animal']);
	$_HIDE['mcitem'] = explode(',', $_POST['hide_mcitem']);
	//Verify the effectiveness parameters
	qf_getCache('cropstype', '/nc/');
	$crop = array_keys($cropstype);
	$noCrop = array_diff($_HIDE['seed'], array_intersect($_HIDE['seed'], $crop));
	if($noCrop) {
		die('0|&|Lỗi: '.implode(',', $noCrop).' ID hạt giống không đúng');
	}
	qf_getCache('itemtype', '/nc/');
	$item = array_keys($itemtype);
	$noItem = array_diff($_HIDE['item'], array_intersect($_HIDE['item'], $item));
	if($noItem) {
		die('0|&|Lỗi: '.implode(',', $noItem).' ID vật phẩm không đúng');
	}
	//Verify the effectiveness of pasture parameters
	qf_getCache('cropstype', '/mc/');
	$animal = array_keys($animaltype);
	$noanimal = array_diff($_HIDE['animal'], array_intersect($_HIDE['animal'], $animal));
	if($noanimal) {
		die('0|&|Lỗi: '.implode(',', $noanimal).' ID con giống không đúng');
	}
	qf_getCache('itemtype', '/mc/');
	$mcitem = array_keys($itemtype);
	$noItem = array_diff($_HIDE['mcitem'], array_intersect($_HIDE['mcitem'], $mcitem));
	if($noItem) {
		die('0|&|Lỗi: '.implode(',', $noItem).' ID vật phẩm không đúng');
	}
	//Save system configuration
	if(qf_putCache('_QSC', $_QSC) && qf_putCache('_INIT', $_INIT) && qf_putCache('_HIDE', $_HIDE)) {
		die('1|&|Thay đổi thành công|&|refresh');
	}
	die('0|&|Lỗi');
}

//Load cache
qf_getCache('_INIT');
qf_getCache('_HIDE');

//View list
$views = glob('view/qf_*');
foreach($views as $k=>$v) {
	$views[$k] = str_replace('view/', '', $v);
}

//Template loaded
qf_getView("admin/system");

?>