<?php

# Donation Animals

$key = (int)$_REQUEST['serial'] - 1;
$animal = $_QFG['db']->result("SELECT status FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$animal = qf_decode($animal);

$cid = $animal[$key]['cId'];
$money = $animaltype[$cid]['price'] / 2 ;
$animal[$key] = array("buyTime"=>0,"cId"=>0,"postTime"=>0,"totalCome"=>0,"tou"=>"", "growtime"=>0,"p"=>0);


//Save user data
if ($money>0) {
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+{$money} where uid={$_QFG['uid']}");
	$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "' where uid={$_QFG['uid']}");

	//Log consumption
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 12 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if ($value['type'] == 12 && $value['fromid'] == $_QFG['uid']) {
			$list = $value['iid'];
			$money1 = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$sy=explode(",",$list);
			$ct=explode(",",$scount);
			if(in_array(($cid),$sy)){
				for($i=0;$i<count($sy);$i++){
					if($sy[$i]==($cid)){
						$ct[$i] = $ct[$i]+1;
					}
				}
				$scount = implode(",",$ct);
				$list = $list;
			}else{
				$list = $list . "," . ($cid);
				$scount = $scount . ",1";
			}
			$money2 = $money1 + $money;
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list .
			"', money = '" . $money2 . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .
			", isread = 1 where uid = " . $_QFG['uid'] .
			" AND type = 12 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .
			$_QFG['uid'];
		}
	}
	if(!$sql1 && $key > 0) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .$_QFG['uid'] . ", 12,1, " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . $cid . ", 1, " . $money . ");";
	}
	if($sql1) {
		$query = $_QFG['db']->query($sql1);
	}
} else exit();

echo '{"cId":'.$cid.',"direction":"Giao dịch thành công!","money":'.$money.',"serial":'.(int)$_REQUEST['serial'].'}';

?>