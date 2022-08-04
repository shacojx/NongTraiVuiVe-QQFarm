<?php

# Daily Package
$taskid = $_QFG['db']->result("SELECT taskid FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
if($taskid == 0) {
	echo '{"direction":"<font color=\"#0099ff\">Chào '.$_QFG['uname'].'!</font><br>  Chào mừng bạn tham gia nông trại, đây là món quà đầu tiên dành tặng cho tân thủ:","item":[{"eNum":4,"eParam":1,"eType":3},{"eNum":2,"eParam":7,"eType":1}],"title":"Quà tặng tân thủ","vip":0,"vipItem":"","vipText":"Hãy tham gia hội viên để được hưởng nhiều ưu đãi đặc biệt<br>Đăng nhập hằng ngày, bạn sẽ thấy nhiều điều ngạc nhiên, thú vị.. "}';
	exit();
}

//VIP-level reading, according to the different VIP levels to send a gift
$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']); 
$vip = qf_decode($vip);
$vip_level = qf_toVipLevel($vip['exp']);
$Plus ='';
/*if(substr($_QFG['uid'],-1,1) < 6 && substr($_QFG['uid'],-1,1) > 0 ){
	$Plus=',{"eNum":'.$vip['level'].',"eParam":153,"eType":1}';
	$PlusText='<font color=\"#666633\">【送了您不能买的中秋国庆活动作物哦】</font>';
} else {
	$Plus=',{"eNum":'.$vip['level'].',"eParam":154,"eType":1}';
	$PlusText='<font color=\"#666633\">【送了您不能买的中秋国庆活动作物哦】</font>';
}*/

switch($vip_level) {
	case 1:
		$item = '[{"eNum":1,"eParam":41,"eType":1}'.$Plus.']';
		break;
	case 2:
		$item = '[{"eNum":1,"eParam":2,"eType":3},{"eNum":1,"eParam":1,"eType":3}'.$Plus.']';
		break;
	case 3:
		$item = '[{"eNum":1,"eParam":3,"eType":3},{"eNum":1,"eParam":2,"eType":3}'.$Plus.']';
		break;
	case 4:
		$item = '[{"eNum":1,"eParam":7,"eType":3},{"eNum":1,"eParam":3,"eType":3}'.$Plus.']';
		break;
	case 5:
		$item = '[{"eNum":1,"eParam":7,"eType":3},{"eNum":1,"eParam":3,"eType":3},{"eNum":1,"eParam":2,"eType":3}'.$Plus.']';
		break;
	case 6:
		$item = '[{"eNum":2,"eParam":7,"eType":3},{"eNum":2,"eParam":3,"eType":3},{"eNum":2,"eParam":2,"eType":3}'.$Plus.']';
		break;
	case 7:
		$item = '[{"eNum":3,"eParam":7,"eType":3},{"eNum":3,"eParam":3,"eType":3},{"eNum":3,"eParam":2,"eType":3}'.$Plus.']';
		break;
	default:
		$item = '';
}

if($vip['status'] == 2){
	$vipItem = '[{"eNum":1,"eParam":7,"eType":3},{"eNum":1,"eParam":9001,"eType":909090}]';
	$vipText = '<font color=\"#FF0000\">Bạn là hội viên thường niên nên sẽ được nhận thêm:<br></font>';
} else {
	$vipItem = '""';
	$vipText = '';
}

echo '{"direction":"Đây là món quà nhỏ của hội nông dân dành tặng cho hội viên (mỗi ngày):<br>Hiện bạn đang là hội viên cấp </b><font color=\"#CC3300\">' . $vip_level . '</font>, nhận được: '.$PlusText.'<br>","item":' . $item . ',"title":"Quà tặng mỗi ngày","vip":' . $vip_level . ',"vipItem":'.$vipItem.',"vipText":"'.$vipText.'"}';

?>