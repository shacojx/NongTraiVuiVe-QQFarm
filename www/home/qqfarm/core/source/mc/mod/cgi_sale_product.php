<?php

# Sell ​​products

$cId = (int)$_REQUEST['cId'];
$num = (int)$_REQUEST['num'];

if( $_QFG['timestamp']>1289977200 && $_QFG['timestamp']<1290582000 ){
	$twoid = array('1505'=>1505,'1013'=>1013,'1011'=>1011,'1018'=>1018);
} elseif ( $_QFG['timestamp']>1290585600 && $_QFG['timestamp']<1291190400 ){
	$twoid = array('1510'=>1510,'1508'=>1508,'1509'=>1509,'1516'=>1516);
} elseif ( $_QFG['timestamp']>1291194000 && $_QFG['timestamp']<1291798800 ){
	$twoid = array('1010'=>1010,'1518'=>1518,'1514'=>1514,'1517'=>1517);
}
$package = $_QFG['db']->result('SELECT package FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
$mclock = $_QFG['db']->result('SELECT mclock FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
$package = qf_decode($package);
$money = 0;
$mclock = explode(',',$mclock);

if((int)$_REQUEST['saleAll'] == '1') {
	foreach($package as $key => $value) {
			if( !in_array($key, $mclock) && $value > 0 ) {
				if($key<10001){
					if($key==1506){
						$price = 30;
					}else{
						if(array_key_exists($key,$twoid)){
							$price= 2*$animaltype[$key]['byproductprice'];
						}else{
							$price = $animaltype[$key]['byproductprice'];
						}
					}
				} else {
					$key1 = $key - 10000;
					if(array_key_exists($key1, $twoid)){
						$price= 2*$animaltype[$key1]['productprice'];
					}else{
						$price = $animaltype[$key1]['productprice'];
					}
				}
				$iid .= $iid==null ? $key : ",".$key;
				$count .= $count==null ? $value : ",".$value;
				$money += $price * $value;
				unset($package[$key]);
			}	
	}
	$echo_str = '{"direction":"Đã bán xong, nhận được <font color=\"#FF6600\"><b>' . $money . '</b> </font> Xu","money":' . $money . '}';
	$query = $_QFG['db']->query("INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .	$_QFG['uid'] . ", 9,'" . $count . "', " . $_QFG['uid'] .", " . $_QFG['timestamp'] . ", '" . $iid. "', 1, " . $money . ");");

} else {
	if($package[$cId] < $num) {
		exit();
	}

	if($cId<10001){
		if($cId==1506){
			$cName = '便便';
			$price = 30;
		}else{
			$cName = $animaltype[$cId]['bName'];
			if(array_key_exists($cId,$twoid)){
				$price= 2*$animaltype[$cId]['byproductprice'];
			}else{
				$price = $animaltype[$cId]['byproductprice'];
			}
		}
	} else {
		$key1 = $cId - 10000;
		$cName = $animaltype[$key1]['cName'];
		if(array_key_exists($key1, $twoid)){
			$price= 2*$animaltype[$key1]['productprice'];
		}else{
			$price = $animaltype[$key1]['productprice'];
		}	
	}
	$money = $price * $num;
	$package[$cId] = $package[$cId] - $num;
	foreach($package as $key => $value) {
		if($value == 0) unset($package[$key]);
	}
	$echo_str = '{"cId":' . $cId . ',"direction":"Đã bán <font color=\"#0099FF\"><b>' . $num . '</b></font>  ' . $cName . ', nhận được <font color=\"#FF6600\"><b>' . $money . '</b></font> Xu","money":' . $money . '}';
	//Sale of logs
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " .$_QFG['uid'] . " AND type = 9 AND time > " . ($_QFG['timestamp'] -3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if (($value['type'] == 9) && ($value['fromid'] == $_QFG['uid']) && ($num > 0)) {
			$list = $value['iid'];
			$moneyt = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$iid_arr = explode(',',$value['iid']);
			$count_arr = explode(',',$value['count']);
			if(!in_array($cId,$iid_arr)) {
				$list = $list . "," . $cId;
				$scount = $scount . "," . $num;
			} else {
				foreach($iid_arr as $key=>$iidv) {
					if($iidv==$cId) {
						$count_arr[$key] += $num;
					}
				}
				$scount = implode(',',$count_arr);
			}
			$moneyt = $moneyt + $money;
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list ."', money = '" . $moneyt . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .", isread = 1 where uid = " . $_QFG['uid'] ." AND type = 9 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .$_QFG['uid'];

		}
	}
	if ((!$sql1) && ($num > 0)) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .	$_QFG['uid'] . ", 9," . $num . ", " . $_QFG['uid'] .", " . $_QFG['timestamp'] . ", " . $cId . ", 1, " . $money . ");";	
	}
	$query = $_QFG['db']->query($sql1);
}
$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+' . $money . ' where uid=' . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);


qf_addFeed('cgi_sale_product');
echo $echo_str;

?>