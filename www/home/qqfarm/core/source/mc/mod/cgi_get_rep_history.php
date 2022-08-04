<?php

#Rancho results

$uId = (int)$_REQUEST['uId'];
if(!$uId){
	$uId = (int)$_REQUEST['uIdx'];
}

$repertory = $_QFG['db']->result('SELECT repertory FROM app_qqfarm_mc where uid=' . $uId);
$repertory = qf_decode($repertory);
foreach($repertory as $k=>$v) {
	if($v["cId"]<10000){
		if($v["cId"]==1506 || $v["cId"]==10){
		$cName = 'Phân';
		}else{
			$cName = $animaltype[$v["cId"]]['bName'];
		}
	} else {
		$key1 = $v["cId"] - 10000;
		$cName = $animaltype[$key1]['cName'];
	}
	if(!empty($rep)) {
		$rep .= ',{"cId":'.$v["cId"].',"cName":"'.$cName.'","harvest":'.$v["harvest"].',"scrounge":'.$v["scrounge"].'}';
	} else {
		$rep = '{"cId":'.$v["cId"].',"cName":"'.$cName.'","harvest":'.$v["harvest"].',"scrounge":'.$v["scrounge"].'}';
	}
}
if($unsetsql) {
	$_QFG['db']->query("update app_qqfarm_mc  set repertory ='".qf_encode($repertory)."' where uid=" . $uId);
}


//Output
echo '[' . $rep . ']';

?>