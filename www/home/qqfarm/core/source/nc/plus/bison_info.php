<?php
# 奍牛
$list = $_QFG['db']->fetchOne("select bison from app_qqfarm_nc where uid=".$_QFG['uid']);
$bison = qf_decode($list['bison']);

if(($_QFG['timestamp']-$bison['backTime'])>=7200 && $bison['state']==1) {
	$bison['state'] = 3;
	$bison['powerLevel'] = 8;
}
$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($bison)."' where uid=".$_QFG['uid']);

if(($bison['leftTime']-$_QFG['timestamp'])<=0) {
		$bison['state'] = 4;
}
if($bison['state']==2) {
	$feed = '';
	if($bison['feedTime']>0) {
		$feed = ',"feed":"'.qf_getUserName($bison['feed'][0]).' của người khác đã ăn mất '.$cropstype[$bison['feed'][1]]['cName'].' và trộm của bạn '.($cropstype[$bison['feed'][1]]['sale']*3).' Xu.","feedTime":'.$bison['feedTime'];
	}
	echo '{"alreadyEat":'.$bison['alreadyEat'].$feed.',"code":1,"hungerLevel":'.(8-$bison['hungerLevel']).',"id":'.(int)$bison['id'].',"jumpKey":'.($bison['jumpKey'] + 10000).',"leftTime":'.(int)($bison['leftTime']-$_QFG['timestamp']).',"maxRestTime":7200,"money":'.$bison['money'].',"nickname":"'.qf_getUserName($bison['jumpKey']).'","powerLevel":'.(int)$bison['powerLevel'].',"sendTime":'.(int)$bison['sendTime'].',"state":'.$bison['state'].',"type":1}';
} else {
	echo '{"backTime":'.(int)$bison['backTime'].',"code":1,"id":'.(int)$bison['id'].',"leftTime":'.(int)($bison['leftTime']-$_QFG['timestamp']).',"maxRestTime":7200,"money":'.(int)$bison['money'].',"state":'.(int)$bison['state'].',"type":'.(int)$bison['type'].'}';
}
?>