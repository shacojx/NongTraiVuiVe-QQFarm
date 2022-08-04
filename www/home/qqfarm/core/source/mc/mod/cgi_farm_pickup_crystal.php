<?php

# Users to take crystal
$id = (int)$_REQUEST['id'];
$ownerId = (int)$_REQUEST['ownerId'];
$index = (int)$_REQUEST['index'];

$crystal = $_QFG['db']->result("SELECT crystal FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$crystal = qf_decode($crystal);
$beasts = $_QFG['db']->result("SELECT beasts FROM app_qqfarm_user where uid=" . $ownerId);
$beasts = qf_decode($beasts);
$beasts['drop'] = array_values($beasts['drop']);
unset($beasts['drop'][$index]);
$crystal[$id] += 1;
$beasts['drop'] = array_values($beasts['drop']);
$_QFG['db']->query("UPDATE app_qqfarm_user set crystal='" . qf_encode($crystal) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_user set beasts='" . qf_encode($beasts) . "' where uid=" . $ownerId);

echo '{"code":1,"ecode":0}';

?>