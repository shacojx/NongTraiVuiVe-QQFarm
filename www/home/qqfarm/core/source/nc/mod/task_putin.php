<?php

# Mid-Autumn Festival celebrations
$uId = (int)$_REQUEST['ownerId'];
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$ownernpc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $uId);
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$ownernpc = qf_decode($ownernpc);
$npc = qf_decode($npc);
$package = qf_decode($package);
$fruit = qf_decode($fruit);
if($fruit['167'] <= 0) die('{"code":-12,"errorContent":"Bạn chưa có kẹo, không thể tiếp tục!","type":1}');
if($npc['nc_day'] <= 0) die('{"code":-12,"errorContent":"Hôm nay bạn đã nhận đủ 10 cây kẹo rồi, ngày mai hãy quay lại nhé!","type":1}');

if(array_key_exists($_QFG['uid'], $ownernpc['ncput'])>0) die('{"code":-13,"errorContent":"Hãy đến trang trại của bạn bè xem sao!","type":1}');

$npc['nc_day'] -= 1;
$num = mt_rand(1, 2);
$package['167']  += $num;
$fruit['167']  -= 1;

$ownernpc['167'] += 1;
$ownernpc['ncput'][$_QFG['uid']] +=1;
$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($ownernpc) . "' where uid=" . $uId);
$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "',fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"num":'.$num.'}';

?>