<?php

# 收获
$bison = $_QFG['db']->result("select bison from app_qqfarm_nc where uid=".$_QFG['uid']);
$bison = qf_decode($bison);

$bison['leftTime']>$_QFG['timestamp'] && die('{"code":-2112}');
$gain = (int)$bison['money'];
foreach($bison as $bk=>$bv) {
	if($bk!='ownerid') {
		unset($bison[$bk]);
	}
}
$gain > 0 && $_QFG['db']->query("update app_qqfarm_user set money=money+'".$gain."' where uid=".$_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($bison)."' where uid=".$_QFG['uid']);

echo '{"code":1,"gain":'.$gain.'}';

?>