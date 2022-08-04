<?php
//Crop output


$place = (int)$_REQUEST['place'];
$uid = $_REQUEST['ownerId'] > 0 ? (int)$_REQUEST['ownerId'] : $_REQUEST['ownerId'] > 0;

$status = $_QFG['db']->result("SELECT status FROM app_qqfarm_nc where uid=" . $uid);
$status = qf_decode($status);

$a = $status[$place]['a'] ;
$b = $status[$place]['b'] = 6;
$c = $status[$place]['c'] = 0;
$d = $status[$place]['d'] = 0;
$e = $status[$place]['e'] = 1;
$f = $status[$place]['f'] = 0;
$g = $status[$place]['g'] = 0;
$h = $status[$place]['h'] = 1;
$i = $status[$place]['i'] ;
$j = $status[$place]['j'] ;
$k = $cropstype[$a]['output'];
$n = $status[$place]['n'] ;
$o = $status[$place]['o'] ;
$p = $status[$place]['p'] ;
$q = $status[$place]['q'] ;
$r = $status[$place]['r'] ;
$p = (array)$status[$place]['p'] ;
$pId = (int)$status[$place]['pId'];
$bitmap = (int)$status[$place]['bitmap'];

if($_QFG['timestamp'] - $q < $cropstype[$a]['growthCycle'] || $status[$place]['m']>0) exit();


foreach($p as $pk => $pv) {
	if($pv == 1 || $pv == 2) {
		$cnt += ceil(($_QFG['timestamp'] - $pk) / 300) + 1;
	} elseif($pv == 3) {
		$cnt += ceil(($_QFG['timestamp'] - $pk) / 300) * 2 + 2;
	}
}
$cnt = min($cnt, 50);
$k = ceil($k * (100 - $cnt) / 100);
if($bitmap == 1 && (int)$cropstype[$a]['isRed'] != 1 ) {
	$k = intval($k*1.1);
}
$m = $k;
$l = floor($k * 0.6);
$status[$place]['k'] = $k;
$status[$place]['l'] = $l;
$status[$place]['m'] = $m;

$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "' where uid=" . $uid);

echo '{"farmlandIndex":' . $place . ',"status":{"action":' . qf_jsonCode($p) . ',"cId":' . $a . ',"cropStatus":' . $b . ',"fertilize":' . $o . ',"harvestTimes":' . $j . ',"health":' . $i . ',"humidity":' . $h . ',"leavings":' . $m . ',"min":' . $l . ',"oldhumidity":' . $e . ',"oldpest":' . $d . ',"oldweed":' . $c . ',"output":' . $k . ',"pest":' . $g . ',"plantTime":' . qf_jsonCode($q) . ',"thief":' . qf_jsonCode($n) . ',"updateTime":' . qf_jsonCode($r) . ',"weed":' . $f . ',"bitmap":' . $bitmap . ',"pId":' . $pId . '}}';

?>