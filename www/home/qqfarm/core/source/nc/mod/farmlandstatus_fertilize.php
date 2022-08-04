<?php

# Crop plus fertilizer

$place = (int)$_REQUEST['place'];
$tId = (int)$_REQUEST['tId'];

if(intval($_REQUEST['ownerId']) == $_QFG['uid']) {
	qf_getCache('cropstime', '/nc/');;
	$list = $_QFG['db']->fetchOne("SELECT tools,status FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$tools = qf_decode($list['tools']);
	$status = qf_decode($list['status']);
	if($tools[$tId] == 0) {
		exit();
	}
	if($tId==8 && (int)$cropstype[$status[$place]['a']]['isFlower'] ==0 ){
		die('{"code":0,"direction":"Chỉ sử dụng với hoa mà thôi!","farmlandIndex":' . $place. ',"poptype":1}');
	}
	$zuowutime = $_QFG['timestamp'] - $status[$place]['q'];
	$ii = 0;
	foreach($cropstime[$status[$place]['a']] as $key => $value) {
		if($value <= $zuowutime) {
			$ii = $key + 1;
		}
	}
	if($status[$place]['o'] == $ii + 1) {
		exit();
	}
	$zuowutime += $toolstype[30000 + $tId]['effect'];

	if($cropstime[$status[$place]['a']][$ii] < $zuowutime) {
		$zuowutime = $cropstime[$status[$place]['a']][$ii];
	}
	$status[$place]['q'] = $_QFG['timestamp'] - $zuowutime;
	$status[$place]['o'] = $ii + 1;
	$a = $status[$place]['a'];
	if($zuowutime >= $cropstype[$a]['growthCycle']) {
		$status[$place]['b'] = 6;
		$status[$place]['c'] = 0;
		$status[$place]['d'] = 0;
		$status[$place]['e'] = 1;
		$status[$place]['f'] = 0;
		$status[$place]['g'] = 0;
		$status[$place]['h'] = 1;
		$status[$place]['l'] = floor($cropstype[$a]['output'] * 0.6);
		$status[$place]['bitmap'] = intval($status[$place]['bitmap']);
		$status[$place]['pId'] = intval($status[$place]['pId']);
		if( $status[$place]['bitmap']==1 && (int)$cropstype[$a]['isRed'] != 1 ){
			$status[$place]['k'] = intval($cropstype[$a]['output']*1.1);
			$status[$place]['m'] = intval($cropstype[$a]['output']*1.1);
		} else {
			$status[$place]['k'] = $cropstype[$a]['output'];
			$status[$place]['m'] = $cropstype[$a]['output'];
		}
	}

	$tools[$tId] = $tools[$tId] - 1;
	foreach($tools as $key => $value) {
		if($value == 0) {
			unset($tools[$key]);
		}
	}

	$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "',tools='" . qf_encode($tools) . "' where uid=" . $_QFG['uid']);

	$cId = $status[$place]['a'] ;
	$cropStatus = $status[$place]['b'] ;
	$oldweed = $status[$place]['c'] ;
	$oldpest = $status[$place]['d'] ;
	$oldhumidity = $status[$place]['e'] ;
	$weed = $status[$place]['f'] ;
	$pest = $status[$place]['g'] ;
	$humidity = $status[$place]['h'] ;
	$health = $status[$place]['i'] ;
	$harvestTimes = $status[$place]['j'] ;
	$output = $status[$place]['k'] ;
	$min = $status[$place]['l'] ;
	$leavings = $status[$place]['m'] ;
	$thief = qf_jsonCode($status[$place]['n']) ;
	$fertilize = $status[$place]['o'] ;
	$action = qf_jsonCode($status[$place]['p']) ;
	$plantTime = $status[$place]['q'] ;
	$updateTime = $status[$place]['r'] ;
	$bitmap = (int)$status[$place]['bitmap'];
	$pId = (int)$status[$place]['pId'];
	echo '{"farmlandIndex":' . $place . ',"code":1,"tId":' . $tId . ',"status":{"cId":' . $cId . ',"cropStatus":' . $cropStatus . ',"oldweed":' . $oldweed . ',"oldpest":' . $oldpest . ',"oldhumidity":' . $oldhumidity . ',"weed":' . $weed . ',"pest":' . $pest . ',"humidity":' . $humidity . ',"health":' . $health . ',"harvestTimes":' . $harvestTimes . ',"output":' . $output . ',"min":' . $min . ',"leavings":' . $leavings . ',"thief":' . $thief . ',"fertilize":' . $fertilize . ',"action":' . $action . ',"plantTime":' . $plantTime . ',"updateTime":' . $updateTime . ',"bitmap":' . $bitmap . ',"pId":' . $pId . '}}';

	qf_addFeed('farmlandstatus_fertilize');
}

?>