<?php

#Stolen animals

$uId = (int)$_REQUEST['uId'];
$type = (int)$_REQUEST['type'];

$animal = $_QFG['db']->result("SELECT status FROM app_qqfarm_mc where uid=" . $uId);
$vipid = $_QFG['db']->result('SELECT vip FROM app_qqfarm_user where uid=' . $uId);
$guard = $_QFG['db']->result('SELECT guard FROM app_qqfarm_mc where uid=' . $uId);
$list = $_QFG['db']->fetchOne("SELECT repertory,package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$vip = $_QFG['db']->result('SELECT vip FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$money = $_QFG['db']->result('SELECT money FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$animal = qf_decode($animal);
$vipid = qf_decode($vipid);
$guard = qf_decode($guard); //猎人
$mc_package = qf_decode($list['package']);
$mc_repertory = qf_decode($list['repertory']);
$vip = qf_decode($vip);

$tounum = $gmoney = 0; //$gmoney Hunter caught the thief money
if($type == -1) { //A key steal
	//Began to steal
	if( $_QSC['vip'] == 1 ){
		if( $vip['status'] < 1 && $vipid['status'] > 0 ){
			die('{"code":1,"errorContent":"Bạn không phải là hội viên!","errorType":"1011"}');
		}
	}
	if($money<500) {
		die('{"code":1,"errorContent":"Không có đủ 500 Xu thì đừng hòng ăn trộm!","errorType":"1011"}');
	}
	
	$tou_cId = $tou_total = array();
	foreach($animal as $key => $value) {
		$touID = explode(',',$value['tou']);
		$_QFG['timestamp'] - $value['postTime'] <= 15 && die('{"errorContent":"Đang sinh sản..","errorType":"1011"}');
		if($value['cId']>0 && !in_array($_QFG['uid'], $touID) && $value['totalCome']>0) {
			//猎人..
			if($guard['guardFeedTime']>=$_QFG['timestamp'] && ($guard['guard'][1]['status']==1 || $guard['guard'][2]['status']==1 || $guard['guard'][3]['status']==1 || $guard['guard'][4]['status']==1) ) {
				$grand = mt_rand(1,10);
				if($grand>7) {
					$gmoney += mt_rand(40,80);
					$animal[$key]['tou'] .= ','.$_QFG['uid'] ;
				}
			} 
			if($animaltype[$value['cId']]['output'] / 2 < $value['totalCome'] && $grand<=8) {
				if(in_array($value['cId'], $tou_cId)) {
					foreach($tou_cId as $tk=>$tv) {
						if($tv == $value['cId']) {
							$tou_total[$tk] ++;
						}
					}
				} else {
					$tou_cId[] = $value['cId'];
					$tou_total[] = 1;
				}
				$flag = false;
				//Increase in the number of existing
				foreach($mc_repertory as $k => $v) {
					if($value['cId'] == $v['cId']) {
						$mc_repertory[$k]['scrounge']++;
						$flag = true;
					}
				}
				//Does not exist, create the object
				if(!$flag) {
					$mc_repertory[] = array("cId" => $value['cId'], "harvest" => 0, "scrounge" => 1);
				}
				++$tounum;
				$value['totalCome']--;
				$value['tou'] .= ','.$_QFG['uid'] ;
				
				$mc_package[$value['cId']] = $mc_package[$value['cId']] +1;//User Backpack
				$animal[$key] = $value;//Update parameters
			}	
		}
	}	
	$tounum==0 && $gmoney==0 && die('{"errorContent":"Đến muộn mất rồi!","errorType":"1011"}');
	
	//After stealing storage
	$_QFG['db']->query("UPDATE app_qqfarm_mc set repertory='" . qf_encode($mc_repertory) . "', package='" . qf_encode($mc_package) . "' where uid=" . $_QFG['uid']);
	$gmoney>0 && $_QFG['db']->query("update app_qqfarm_user set money=money-".$gmoney." where uid=".$_QFG['uid']);
	//Update status of host animals
	$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "' where uid=" . $uId);
	$gmoney>0 && $_QFG['db']->query("update app_qqfarm_user set money=money+".$gmoney." where uid=".$uId);
	foreach($tou_cId as $tk=>$tv) {
		$tou_str .= empty($tou_str) ? "[". $tv .",". $tou_total[$tk]."]" : ",[". $tv .",". $tou_total[$tk]."]";

		//General theft
		$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid=" . $uId . " AND type=1 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid=" . $_QFG['uid']);
		foreach($values as $value) {
			if(($value[type] == 1) && ($value['fromid'] == $_QFG['uid']) ) {
				$list = $value[iid];
				$scount = $value[count];
				$stime = $value[time];
				$list = $list . "," . $tv;
				$scount = $scount . "," . $tou_total[$tk];
				$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 0 where uid = " . $uId . " AND type = 1 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
			}
		}
		if((!$sql1) ) {
			$sql1 = 'INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(' . $uId . ', 1,' . $tou_total[$tk] . ', ' . $_QFG['uid'] . ', ' . $_QFG['timestamp'] . ', ' . $tv . ', 0, 0);';
		}
		if($sql1) $query = $_QFG['db']->query($sql1);
	}
	if($gmoney > 0) {
		$tou_str .= empty($tou_str) ? "[\"-". $gmoney ."\",\"Đang ăn trộm thì bị bảo vệ bắt<br>Bị phạt <font color='#FF6600'>".$gmoney."</font> Xu\"]" : ",[\"-". $gmoney ."\",\"Đang ăn trộm thì bị bảo vệ bắt<br>Bị phạt <font color='#FF6600'>".$gmoney."</font> Xu\"]";
		$_QFG['db']->query("insert into app_qqfarm_mclogs(uid,type,fromid,money,count,iid,isread,time)values({$uId},13,{$_QFG['uid']},{$gmoney},0,0,0,{$_QFG['timestamp']})");	
	}

	die('['. $tou_str .']');
}


//General theft
if( $_QSC['vip'] == 1 ){
	if( $vip['status'] < 1 && $vipid['status'] > 0 ){
		die('{"code":1,"errorContent":"Bạn không phải là hội viên!","errorType":"1011"}');
	}
}

foreach($animal as $key => $value) {
	$touID = explode(',',$value['tou']);
	if($type == $value['cId'] && !in_array($_QFG['uid'], $touID) && $value['totalCome']>0) {
		if($guard['guardFeedTime']>=$_QFG['timestamp'] && ($guard['guard'][1]['status']==1 || $guard['guard'][2]['status']==1 || $guard['guard'][3]['status']==1 || $guard['guard'][4]['status']==1)) {
			$grand = mt_rand(1,10);
			if($grand>7) {
				$gmoney += mt_rand(40,80);
				$animal[$key]['tou'] .= ','.$_QFG['uid'] ;
				$_QFG['db']->query("insert into app_qqfarm_mclogs(uid,type,fromid,money,count,iid,isread,time)values({$uId},13,{$_QFG['uid']},{$gmoney},0,0,0,{$_QFG['timestamp']})");
			}
		} 
		if($animaltype[$type]['output'] / 2 < $value['totalCome'] && $grand<=8) {
			$flag = false;
			//Increase in the number of existing
			foreach($mc_repertory as $k => $v) {
				if($type == $v['cId']) {
					$mc_repertory[$k]['scrounge']++;
					$flag = true;
				}
			}
			//Does not exist, create the object
			if(!$flag) {
				$mc_repertory[] = array("cId" => $type, "harvest" => 0, "scrounge" => 1);
			}
			++$tounum;
			$value['totalCome']--;
			$value['tou'] .= ','.$_QFG['uid'] ;
			
			$animal[$key] = $value;//Update parameters
		}
	}
}
$tounum == 0 && $gmoney==0 && die('{"errorContent":"Đến muộn mất rồi!","errorType":"1011"}');

//After stealing storage
$mc_package[$type] = $mc_package[$type] + $tounum;//User Backpack
$_QFG['db']->query("UPDATE app_qqfarm_mc set repertory='" . qf_encode($mc_repertory) . "', package='" . qf_encode($mc_package) . "' where uid=" . $_QFG['uid']);
$gmoney>0 && $_QFG['db']->query("update app_qqfarm_user set money=money+".$gmoney." where uid=".$_QFG['uid']);

//Update status of host animals
$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "' where uid=" . $uId);
$gmoney>0 && $_QFG['db']->query("update app_qqfarm_user set money=money+".$gmoney." where uid=".$uId);

//Update to steal log
$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid=" . $uId . " AND type=1 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid=" . $_QFG['uid']);
foreach($values as $value) {
	if(($value['type'] == 1) && ($value['fromid'] == $_QFG['uid']) && ($tounum > 0)) {
		$list = $value['iid'];
		$scount = $value['count'];
		$stime = $value['time'];
		$list = $list . "," . $type;
		$scount = $scount . "," . $tounum;
		$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 0 where uid = " . $uId . " AND type = 1 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
	}
}
if((!$sql1) && ($tounum > 0)) {
	$sql1 = 'INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(' . $uId . ', 1,' . $tounum . ', ' . $_QFG['uid'] . ', ' . $_QFG['timestamp'] . ', ' . $type . ', 0, 0);';
}
if($sql1) $query = $_QFG['db']->query($sql1);

//Return Information
if($gmoney==0) {
	echo '[[' . $type . ',' . $tounum . ']]';
} else {
	echo "[[" . $type . "," . $tounum . "],[\"-". $gmoney ."\",\"Đang ăn trộm thì bị bảo vệ bắt<br>Bị phạt <font color='#FF6600'>".$gmoney."</font> Xu\"]]";
}

?>