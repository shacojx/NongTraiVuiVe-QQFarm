<?php

# Cattle in friends
$isfarm = (int)$_REQUEST['isfarm'];
$ownerId = (int)$_REQUEST['ownerId'];
$slotid = (int)$_REQUEST['slotid'];
$type = (int)$_REQUEST['type'];

$list = $_QFG['db']->fetchOne("select beasts from app_qqfarm_user where uid=".$ownerId);
$beasts = qf_decode($list['beasts']);
foreach($beasts['info'] as $key => $value) {
	if((int)$value['isfarm'] == $isfarm){
		foreach($value['attack'] as $nkey => $nvalue) {
			if($attack){
				$attack1 = array("$nvalue[fid]"=>qf_getUserName($nvalue['fid']));
				$attack = $attack + $attack1;
			} else {
				$attack = array("$nvalue[fid]"=>qf_getUserName($nvalue['fid']));
			}
		}
		$beastsinfo[] = array("attack"=>$attack,"fid"=>$value['fid'],"nick"=>qf_getUserName($value['fid']));
	}
}

echo '{"ecode":0,"info":'.qf_jsonCode($beastsinfo).'}';
?>
