<?php
//All sold

$list = $_QFG['db']->fetchOne("SELECT fruit,nclock FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($list['fruit']);
$nclock_all = explode(',',$list['nclock']);
if( $_QFG['timestamp']>1289977200 && $_QFG['timestamp']<1290582000 ){
	$twoid = array('1'=>1,'101'=>101,'34'=>34,'48'=>48);
} elseif ( $_QFG['timestamp']>1290585600 && $_QFG['timestamp']<1291190400 ){
	$twoid = array('14'=>14,'109'=>109,'39'=>39,'76'=>76);
} elseif ( $_QFG['timestamp']>1291194000 && $_QFG['timestamp']<1291798800 ){
	$twoid = array('118'=>118,'72'=>72,'79'=>79,'27'=>27);
}
$money = 0;
$sellary = explode(',', $_REQUEST['cIds']);
foreach($fruit as $key => $value) {
	if(0 < $value && $cropstype[$key]['cType'] == 1 && in_array($key, $sellary) && !in_array($key, $nclock)) {
		if(array_key_exists($key, $twoid)){
			$price= 2*$cropstype[$key]['sale'];
		}else{
			$price= $cropstype[$key]['sale'];
		}
		$money = $money + $price * $value;
		$_QFG['db']->query("INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $_QFG['uid'] . ", 6, '".$value."', " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ",'".$key."', 1);");
		unset($fruit[$key]);
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"direction":"","money":' . $money . '}';

qf_addFeed('farmlandstatus_saleall');

?>