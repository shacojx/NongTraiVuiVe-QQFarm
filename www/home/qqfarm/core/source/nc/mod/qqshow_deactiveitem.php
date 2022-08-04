<?php

# Farm Decoration

$activeItem = (int)$_REQUEST['id'];

$list = $_QFG['db']->fetchOne("SELECT decorative FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$decorative = qf_decode($list['decorative']);
$decorative['10'] = $activeItem;

$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"id":' . $activeItem . '}';

?>