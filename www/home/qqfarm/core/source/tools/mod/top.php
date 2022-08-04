<?php
/**
 * Top
 * Modify by seaif@zealv.com
 */

$list_money = $_QFG['db']->fetchAll("select uid,username,regname,money from app_qqfarm_user order by money desc limit 12");
$list_visit = $_QFG['db']->fetchAll("select uid,username,regname,visittime from app_qqfarm_user order by visittime desc limit 12");
$list_ncexp = $_QFG['db']->fetchAll("select u.uid,u.username,u.regname,n.exp from app_qqfarm_user u, app_qqfarm_nc n  where n.uid=u.uid order by n.exp desc limit 12");
$list_mcexp = $_QFG['db']->fetchAll("select u.uid,u.username,u.regname,m.exp from app_qqfarm_user u, app_qqfarm_mc m where u.uid=m.uid order by m.exp desc limit 12");

qf_getView("tools/top");

?>