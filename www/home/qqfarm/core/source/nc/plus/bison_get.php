<?php

# Adoption cattle
$bison = $_QFG['db']->result("select bison from app_qqfarm_nc where uid=".$_QFG['uid']);
$bison = qf_decode($bison);

if($bison['id']){
	die('{"code":-2101}');
}
$bison += array("id"=>1,"alreadyEat"=>0,"hungerLevel"=>0,"jumpKey"=>0,"leftTime"=>($_QFG['timestamp']+7*24*3600),"money"=>0,"powerLevel"=>8,"sendTime"=>0,"state"=>3,"type"=>1,"backTime"=>0,"lastEatTime"=>0,"mapDrivers"=>array());
$_QFG['db']->query("update app_qqfarm_nc set bison='".qf_encode($bison)."' where uid=".$_QFG['uid']);

echo '{"code":1}';

?>