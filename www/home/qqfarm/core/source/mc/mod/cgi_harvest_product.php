<?php

# Animal harvest
$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($fruit);

if($_REQUEST['harvesttype'] == "1") {

	$list = $_QFG['db']->fetchOne("SELECT status,package,repertory FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$animal = qf_decode($list['status']);
	$mc_package = qf_decode($list['package']);
	$mc_repertory = qf_decode($list['repertory']);
	$exp = $totalCome = 0;
	$str = '';
	if($_REQUEST['type'] == -1) {
		$harvestarr = $harvesttotal = array(); 
		foreach($animal as $key => $value) {
			if($value['totalCome'] > 0) {
				if($value['cId'] == 1535 || $value['cId'] == 1536 || $value['cId'] == 1541 ){
					$rand = mt_rand(1, 100);
					if($rand > 85){
						$eParam = 2003;
					} elseif ($rand > 60){
						$eParam = 2004;
					}
				} 
				if(!in_array($value['cId'], $harvestarr)) {
					$harvestarr[] = $value['cId'];
					$harvesttotal[] = $value['totalCome'];
				} else {
					foreach($harvestarr as $hk=>$hv) {
						if($hv == $value['cId']) {
							$harvesttotal[$hk] += $value['totalCome'];
						}
					}
				}
			
				$flag = false;
				//Only increase the number of existing
				foreach($mc_repertory as $k => $v) {
					if($value['cId'] == $v['cId']) {
						$mc_repertory[$k]['harvest'] += $value['totalCome'];
						$flag = true;
					}
				}
				//Create the object does not exist
				if(!$flag) {
					$mc_repertory[] = array("cId" => $value['cId'], "harvest" => $value['totalCome'], "scrounge" => 0);
				}
				//Update backpack
				$mc_package[$value['cId']] +=  $value['totalCome'];

				$exp += $animaltype[$value['cId']]['harvestbExp'];
				$totalCome += $value['totalCome'];
				$value['tou'] = "";
				$value['totalCome'] = 0;
				$animal[$key] = $value;//Update parameters
				
				//Save Data
				$result = $_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',exp=exp+" . (int)$animaltype[$value['cId']]['harvestbExp'] . ",package='" . qf_encode($mc_package) . "',repertory='" . qf_encode($mc_repertory) . "' where uid=" . $_QFG['uid']);
			}
		}
		$totalCome == 0 && die('{"errorContent":"Đến muộn mất rồi!","errorType":"1011"}');
		//卡片
		if($eParam){
			$fruit[$eParam] += 1 ;
			$str = ',[{"eNum":1,"eParam":'.$eParam.',"eType":11}]';
			$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);
		}

		//Return Information
		if($result) {
			qf_addFeed('cgi_harvest_product');
			foreach($harvestarr as $k=>$v) {
				$harvest_str .= empty($harvest_str) ? "[". $v . ",". $harvesttotal[$k] ."]" : ",[". $v . ",". $harvesttotal[$k] ."]" ;
			}
			die('[' . $exp . ',[],['. $harvest_str .']'.$str.']');
			
		}
	}

	foreach($animal as $key => $value) {
		//Updated results
		if($value['cId'] == $_REQUEST['type'] && $value['totalCome'] > 0) {
			if($value['cId'] == 1535 || $value['cId'] == 1536 || $value['cId'] == 1541 ){
				$rand = mt_rand(1, 100);
				if($rand > 85){
					$eParam = 2003;
				} elseif ($rand > 60){
					$eParam = 2004;
				}
			} 
			$flag = false;
			//Only increase the number of existing
			foreach($mc_repertory as $k => $v) {
				if($_REQUEST['type'] == $v['cId']) {
					$mc_repertory[$k]['harvest'] += $value['totalCome'];
					$flag = true;
				}
			}
			//Create the object does not exist
			if(!$flag) {
				$mc_repertory[] = array("cId" => $_REQUEST['type'], "harvest" => $value['totalCome'], "scrounge" => 0);
			}
			++$exp;
			$totalCome += $value['totalCome'];
			$value['tou'] = "";
			$value['totalCome'] = 0;
			$animal[$key] = $value;//Update parameters
		}
	}
	$totalCome == 0 && die('{"errorContent":"Đến muộn mất rồi!","errorType":"1011"}');
	//Update backpack
	$mc_package[$_REQUEST['type']] += $totalCome;
	//卡片
	if($eParam){
		$fruit[$eParam] += 1 ;
		$str = ',[{"eNum":1,"eParam":'.$eParam.',"eType":11}]';
		$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);
	}
	//Save Data
	$result = $_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',exp=exp+" . intval($exp * $animaltype[$_REQUEST['type']]['harvestbExp']) . ",package='" . qf_encode($mc_package) . "',repertory='" . qf_encode($mc_repertory) . "' where uid=" . $_QFG['uid']);
	//Return Information
	if($result) {
		qf_addFeed('cgi_harvest_product');
		die('[' . $exp * $animaltype[$_REQUEST['type']]['harvestbExp'] . ',[],[[' . $_REQUEST['type'] . ',' . $totalCome . ']]'.$str.']');
		
	}
}

if($_REQUEST['harvesttype'] == "2") {
	$serial = $_REQUEST['serial'];
	$ks = $serial-1;
	$list = $_QFG['db']->fetchOne("SELECT status,package,feed,repertory FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$animal = qf_decode($list['status']);
	$feed = qf_decode($list['feed']);
	$mc_package = qf_decode($list['package']);
	$mc_repertory = qf_decode($list['repertory']);
	$str = '';
	if($serial == -1) {
		foreach($animal as $ak=>$av) {
		//Check the by-products
			if($animal[$ak]['totalCome'] > 0) {
				die('{"errorContent":"Hãy thu hoạch “' . $animaltype[$animal[$ak]['cId']]['bName'] . '”","errorType":"1011"}');
			}
		}
		foreach($animal as $ak=>$av) {
			$cid = 10000 + $animal[$ak]['cId'];
			if($animal[$ak]['cId'] == 1535 || $animal[$ak]['cId'] == 1536 || $animal[$ak]['cId'] == 1541 ){
				$rand = mt_rand(1, 100);
				if($rand > 85){
					$eParam = 2003;
				} elseif ($rand > 60){
					$eParam = 2004;
				}
			} 
			$growtime = $av['growtime'];
			if($growtime >= $animaltime[$animal[$ak]['cId']][5] && $av['cId']>0) {
				//入包
				if(empty($hk)) {
					$hk = $ak+1;
				} else {
					$hk .= ",".($ak+1);
				}
				$exp += $animaltype[$cid-10000]['harvestpExp'];
				$mc_package[$cid] += 1;
				//Animal harvest
				$animal[$ak]['buyTime'] = 0;
				$animal[$ak]['cId'] = 0;
				$animal[$ak]['postTime'] = 0;
				$animal[$ak]['totalCome'] = 0;
				$animal[$ak]['tou'] = "";
				$animal[$ak]['growtime'] = 0;
				$animal[$ak]['s'] = 0;
				$animal[$ak]['p'] = 0;
				//Updated results
				$flag = false;
				//Increase in the number of existing
				foreach((array)$mc_repertory as $k => $v) {
					if($cid == $v['cId']) {
						$mc_repertory[$k]['harvest'] += 1;
						$flag = true;
					}
				}
				//Does not exist, create the object
				if(!$flag) {
					$mc_repertory[] = array("cId" => $cid, "harvest" => 1, "scrounge" => 0);
				}
				//Save Data
				$result = $_QFG['db']->query("UPDATE app_qqfarm_mc set repertory='" . qf_encode($mc_repertory) . "',status='" . qf_encode(array_values($animal)) . "',exp=exp+" . (int)$animaltype[$cid-10000]['harvestpExp'] . ",package='" . qf_encode($mc_package) . "' where uid=" . $_QFG['uid']);
			}
		}
		//卡片
		if($eParam){
			$fruit[$eParam] += 1 ;
			$str = ',[{"eNum":1,"eParam":'.$eParam.',"eType":11}]';
			$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);
		}
		qf_addFeed('cgi_harvest_product');
		die('[' . $exp . ',[' . $hk . '],[]'.$str.']');
		
	}

	//Anti-speed gear
	if($animal[$ks]['growtime'] < $animaltime[$animal[$ks]['cId']][5]) {
		die('{"errorContent":"Chưa đến mùa sinh sản","errorType":"1011"}');
	}

	//Check the by-products
	$cid = 10000 + $animal[$ks]['cId'];

	if($animal[$ks]['totalCome'] > 0) {
		die('{"errorContent":"Hãy thu hoạch “' . $animaltype[$cid]['bName'] . '”","errorType":"1011"}');
	}

	if($animal[$ks]['cId'] == 1535 || $animal[$ks]['cId'] == 1536 || $animal[$ks]['cId'] == 1541){
		$rand = mt_rand(1, 100);
		if($rand > 85){
			$eParam = 2003;
		} elseif ($rand > 60){
			$eParam = 2004;
		}
	}

	//入包
	$mc_package[$cid] += 1;
	//Animal harvest
	$animal[$ks]['buyTime'] = 0;
	$animal[$ks]['cId'] = 0;
	$animal[$ks]['postTime'] = 0;
	$animal[$ks]['totalCome'] = 0;
	$animal[$ks]['tou'] = "";
	$animal[$ks]['growtime'] = 0;
	$animal[$ks]['s'] = 0;
	$animal[$ks]['p'] = 0;
	//Updated results
	$flag = false;
	//Increase in the number of existing
	foreach((array)$mc_repertory as $k => $v) {
		if($cid == $v['cId']) {
			$mc_repertory[$k]['harvest'] += 1;
			$flag = true;
		}
	}
	//Does not exist, create the object
	if(!$flag) {
		$mc_repertory[] = array("cId" => $cid, "harvest" => 1, "scrounge" => 0);
	}
	//卡片
	if($eParam){
		$fruit[$eParam] += 1 ;
		$str = ',[{"eNum":1,"eParam":'.$eParam.',"eType":11}]';
		$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);
	}
	//Save Data
	$result = $_QFG['db']->query("UPDATE app_qqfarm_mc set repertory='" . qf_encode($mc_repertory) . "',status='" . qf_encode(array_values($animal)) . "',exp=exp+" . (int)$animaltype[$cid-10000]['harvestpExp'] . ",package='" . qf_encode($mc_package) . "' where uid=" . $_QFG['uid']);
	//Return Information
	if($result) {
		qf_addFeed('cgi_harvest_product');
		die('[' . $animaltype[$cid-10000]['harvestpExp'] . ',[' . $serial . '],[]'.$str.']');
		
	}
}

?>