<?php

# User Backpack

$list = $_QFG['db']->fetchOne("SELECT package,tools FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$mctools = $_QFG['db']->result('SELECT tools FROM app_qqfarm_user where uid=' . $_QFG['uid']);

$package = qf_decode($list['package']);
foreach($package as $key => $value) {
	$hour = ($cropstype[$key]['growthCycle']) / 3600;
	if($value > 0  && $key > 0 && array_key_exists($key, $cropstype)  && $key < 2000) {
		$packagearr[] = '{"type":1,"cId":' . $key . ',"cName":"' . $cropstype[$key]['cName'] . '","amount":' . $value . ',"lifecycle":' . $hour . ',"level":' . $cropstype[$key]['cLevel'] . '}';
	} else {
		$up = 1;
		unset($package[$key]);
	}
}

$tools = qf_decode($list['tools']);
foreach($tools as $key => $value) {
	if($value > 0 && $key < 500 && array_key_exists($key + 30000, $toolstype)) {
		$packagearr[] = '{"type":3,"tId":' . $key . ',"tName":"' . $toolstype[30000 + $key]['tName'] . '","amount":' . $value . ',"depict":"' . $toolstype[30000 + $key]['depict'] . '"}';
	} else {
		$up = 1;
		unset($tools[$key]);
	}
}

$mctools = qf_decode($mctools);
foreach($mctools as $key => $value) {
	if($value > 0  && $key > 100000 && array_key_exists($key, $toolstype)){
		$packagearr[] = '{"type":10,"tId":' . ($key-100000) . ',"tName":"' . $toolstype[$key]['tName'] . '","amount":' . $value . ',"depict":"' . $toolstype[$key]['depict'] . '"}';
	} 
}
$up = 1 && $_QFG['db']->query("update app_qqfarm_nc set package='".qf_encode($package)."',tools='".qf_encode($tools)."' where uid=" . $_QFG['uid']);

echo '[' . implode(',', (array)$packagearr) . ']';

?>