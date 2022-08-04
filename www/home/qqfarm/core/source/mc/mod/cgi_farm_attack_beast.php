<?php

# 赶牛
$type = $_REQUEST['attackType'];
$flag = (int)$_REQUEST['flag'];
$slotid = (int)$_REQUEST['slotid'];
$owner = (int)$_REQUEST['owner'];
$ownerId = (int)$_REQUEST['ownerId'];
$weapon = (int)$_REQUEST['weapon'];
$isfarm = (int)$_REQUEST['isfarm'];

$beastsinfo = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $ownerId);
$beastsfid = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $owner);
$list = $_QFG['db']->fetchOne("select beasts,tools from app_qqfarm_user where uid=".$_QFG['uid']);
$beasts = qf_decode($list['beasts']);
$tools = qf_decode($list['tools']);
$beastsfid = qf_decode($beastsfid);
$beastsinfo = qf_decode($beastsinfo);

if($type=='Gun'){//Tools
	if($tools[100000+$weapon]<0) die('{"direction":"Chưa có vũ khí","ecode":-30306}');
	$tools[100000+$weapon] -= 1;
	if($tools[100000+$weapon]<=0) unset($tools[100000+$weapon]);
	$result = 1;
	$leftblood = $toolstype[100000+$weapon]['blood'];
	$addmoral = mt_rand(4,8);
	$subblood = $beastsfid['beasts'][$slotid]['curblood'] - $leftblood;
	$beastsfid['beasts'][$slotid]['returntime'] -= $leftblood*360;
	$beastsfid['beasts'][$slotid]['curblood'] -= $leftblood;
	$beasts['moralexp'] += $addmoral;
} elseif ($type=='Hunter' ||$type=='Fight'||$type=='Dog'){//Call meat hunter
	if($ownerId != $_QFG['uid'] && $type=='Hunter') die('{"direction":"Chỉ sử dụng trong trang trại của mình mà thôi","ecode":-30306}');
	if(mt_rand(1,3)==1){
		$result = 3;
		$addmoral = 0;
		$subblood = $beastsfid['beasts'][$slotid]['curblood'];
		$leftblood = 0;
	} else {
		$result = 1;
		$leftblood = mt_rand(1,5);
		$addmoral = mt_rand(1,3);
		$subblood = $beastsfid['beasts'][$slotid]['curblood'] - $leftblood;
		$beastsfid['beasts'][$slotid]['returntime'] -= $leftblood*360;
		$beastsfid['beasts'][$slotid]['curblood'] -= $leftblood;
		$beasts['moralexp'] += $addmoral;
	}
}

$drop = '';
if(mt_rand(1,5)>4){
	$dropid = mt_rand(1,2);
	$dropid1 = mt_rand(1,2);
	$crystal[$dropid] += 1;
	$drop = ',"drop":[{"id":'.$dropid.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid1.',"num":1,"time":'.$_QFG['timestamp'].',"type":9}]';
	$droparray = array("id"=>$dropid,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
	$droparray1 = array("id"=>$dropid1,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
} elseif(mt_rand(1,4)>1){
	$dropid = mt_rand(1,2);
	$crystal[$dropid] += 1;
	$drop = ',"drop":[{"id":'.$dropid.',"num":1,"time":'.$_QFG['timestamp'].',"type":9}]';
	$droparray = array("id"=>$dropid,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
}
foreach($beastsinfo['info'] as $key => $value) {
	if($value['fid'] == $owner && (int)$value['isfarm'] == $isfarm){
		$beastsinfo['info'][$key]['attack'][] = array("fid"=>$_QFG['uid'],"flag"=>$flag,"id"=>$weapon,"isqz"=>true,"issucc"=>true);
		if($droparray) $beastsinfo['drop'][] = $droparray;
		if($droparray1) $beastsinfo['drop'][] = $droparray1;
	}
}
$beastsinfo['drop'] = array_values($beastsinfo['drop']);

$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beasts)."',tools='".qf_encode($tools)."' where uid=" . $_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beastsinfo)."' where uid=" . $ownerId);
$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beastsfid)."' where uid=" . $owner);

echo '{"addmoral":'.$addmoral.''.$drop.',"ecode":0,"leftblood":'.$subblood.',"result":'.$result.',"subblood":'.$leftblood.'}';


?>