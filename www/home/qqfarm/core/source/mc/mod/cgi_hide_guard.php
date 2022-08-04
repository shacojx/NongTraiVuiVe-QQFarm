<?php

# Cancel workers
$itemId = (int)$_REQUEST['itemId'];
$list = $_QFG['db']->fetchOne("SELECT guard FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$guard = qf_decode($list['guard']);
$guard['guard'][$itemId]['status'] = 0;
$_QFG['db']->query("UPDATE app_qqfarm_mc set guard='" . qf_encode($guard) . "' where uid=" . $_QFG['uid']);

echo'{"code":1}';
?>