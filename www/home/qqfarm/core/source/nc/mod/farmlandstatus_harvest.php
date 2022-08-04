<?php

# Harvesting

qf_getCache('cropstime', '/nc/');;

$list = $_QFG['db']->fetchOne("SELECT status,fruit,package,tools,dog,exp,repertory FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$status = qf_decode($list['status']);
$fruit = qf_decode($list['fruit']);
$package = qf_decode($list['package']);
$tools = qf_decode($list['tools']);
$dog = qf_decode($list['dog']);
$exp = $list['exp'];
$repertory = qf_decode($list['repertory']);

$place = explode(",", $_REQUEST['place']);
$exp_str = 0;
foreach($place as $id) {
	$cid = $status[$id]['a'];
	if($cid == 0 || $status[$id]['b'] != 6 || $status[$id]['m']<1) {
		die('{"code":0,"direction":"Không có gì để thu hoạch cả","farmlandIndex":'.$id.',"harvest":0,"poptype":1}');
	}
	if($status[$id]['j'] >= 0 && $_QFG['timestamp']-$status[$id]['q'] < $cropstime[$status[$id]['a']][4]) {
		die('{"code":0,"direction":"Không có gì để thu hoạch cả","farmlandIndex":'.$id.',"harvest":0,"poptype":1}');
	}
	$output = $status[$id]['m'];
	$fruit[$cid] = $fruit[$cid] + $output;
	$harvest = $status[$id]['m'];
	$status[$id]['c'] = 0;
	$status[$id]['d'] = 0;
	$status[$id]['e'] = 1;
	$status[$id]['f'] = 0;
	$status[$id]['g'] = 0;
	$status[$id]['h'] = 1;
	$status[$id]['i'] = 100;
	$status[$id]['k'] = 0;
	$status[$id]['l'] = 0;
	$status[$id]['m'] = 0;
	$status[$id]['n'] = array();
	$status[$id]['o'] = 0;
	$status[$id]['p'] = array();
	$status[$id]['q'] = 0;
	$status[$id]['r'] = $_QFG['timestamp'];
	if($status[$id]['j'] + 1 == $cropstype[$status[$id]['a']]['maturingTime']) {
		$status[$id]['b'] = 7;
		$status[$id]['j'] = 0;
	} else {
		$status[$id]['b'] = 6;
		$status[$id]['j'] = $status[$id]['j'] + 1;
		$status[$id]['q'] = $_QFG['timestamp'] - $cropstime[$status[$id]['a']][2];
	}
	$status[$id]['bitmap'] = (int)$status[$id]['bitmap'];
	$status[$id]['pId'] = (int)$status[$id]['pId'];
	$exp_str += $cropstype[$status[$id]['a']]['cropExp'];
	$exp_arr = $exp + $cropstype[$status[$id]['a']]['cropExp'];
	//Current events red envelope
	if($_QSC['missionName']) {
		@include("source/nc/mission/{$_QSC['missionName']}_gift.php");
	}
	//Harvest events
	$cropmt_rand = mt_rand(1, 100);
	if($cropmt_rand > 97){
		$num = mt_rand(1, 2);
		$cropid = array_rand($cropstype);
		$package[$cropid] +=$num;
		$gift = '"gift":{"direction":"\nChúc mừng bạn đã may mắn nhận được: \n<font color=\"#FF0000\">'.$num.' hạt giống '.$cropstype[$cropid]['cName'].'</font >","item":[{"eNum":'.$num.',"eParam":'.$cropid.',"eType":1}],"title":"Thu hoạch"},';
	} elseif($cropmt_rand > 95){
		$num = mt_rand(1, 3);
		$tools[$num] +=1;
		$gift = '"gift":{"direction":"\nChúc mừng bạn đã may mắn nhận được: \n<font color=\"#FF0000\">1 '.$toolstype[30000+$num]['tName'].'</font >","item":[{"eNum":1,"eParam":'.$num.',"eType":3}],"title":"Thu hoạch"},';
	} elseif( $cropmt_rand > 80 && $status[$id]['a'] > 310 && $status[$id]['a'] < 314 ) {
		$gift = '"gift":[{"eNum":1,"eParam":2003,"eType":11}],';
		$fruit['2003'] += 1 ;
	} elseif( $cropmt_rand > 60 && $status[$id]['a'] > 310 && $status[$id]['a'] < 314 ) {
		$gift = '"gift":[{"eNum":1,"eParam":2004,"eType":11}],';
		$fruit['2004'] += 1 ;
	} else {
		$gift = '';
	}
	//Upgrade Tips
	$levelup = $_QFG['db']->result("SELECT levelup FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$levelup_arr = 'false';
	if($exp_arr >= $levelup && $levelup < 93001) {
		include("source/nc/plus/levelup.php"); //Upgrade Tips
	}

	$echo_str[] = '{"code":1,"direction":"","exp":' . $cropstype[$status[$id]['a']]['cropExp'] . ',"farmlandIndex":' . $id . ',' . $red_gift . '"harvest":' . $harvest . ','.$gift.'"levelUp":'.$levelup_arr.',"poptype":4,"status":{"action":' . qf_jsonCode($status[$id]['p']) . ',"bitmap":' . $status[$id]['bitmap'] . ',"cId":' . $status[$id]['a'] . ',"cropStatus":' . $status[$id]['b'] . ',"fertilize":' . $status[$id]['o'] . ',"harvestTimes":' . $status[$id]['j'] . ',"health":100,"humidity":' . $status[$id]['h'] . ',"leavings":' . $status[$id]['m'] . ',"min":' . $status[$id]['l'] . ',"oldhumidity":' . $status[$id]['e'] . ',"oldpest":' . $status[$id]['d'] . ',"oldweed":' . $status[$id]['c'] . ',"output":' . $status[$id]['k'] . ',"pId":' . $status[$id]['pId'] . ',"pest":' . $status[$id]['g'] . ',"plantTime":' . $status[$id]['q'] . ',"thief":{},"updateTime":' . $status[$id]['r'] . ',"weed":' . $status[$id]['f'] . '}}';
	$flag = false;
	foreach((array)$repertory as $key => $val) {
		if($cid == $val['cId']) {
			$flag = true;
			$repertory[$key]['harvestNumber'] = $repertory[$key]['harvestNumber'] + $output;
		}
	}
	if(!$flag) {
		$repertory[] = array('cId'=>$cid,'harvestNumber'=>$output,'scroungeNumber'=>0);
	}
}
$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "', exp=exp+".$exp_str." ,fruit='" . qf_encode($fruit) . "',package='" . qf_encode($package) . "', repertory='" . qf_encode($repertory) . "' ,tools='" . qf_encode($tools) . "',dog='" . qf_encode($dog) . "' where uid=" . $_QFG['uid']);

if(count($echo_str)>1 ) {
	echo '[' . implode(',', $echo_str) . ']';
} else echo '' . implode(',', $echo_str) . '';

qf_addFeed('farmlandstatus_harvest');

?>