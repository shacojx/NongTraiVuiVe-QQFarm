<?php

# Back information
$bison = $_QFG['db']->result("select bison from app_qqfarm_nc where uid=".$_QFG['uid']);
$bison = qf_decode($bison);
if($bison['alreadyEat']>0) {
	echo '{"alreadyEat":'.$bison['alreadyEat'].',"code":1,"domain":1,"feedTime":'.$bison['feedTime'].',"income":'.$bison['income'].',"nick":"'.qf_getUserName($bison['feed'][0]).'"}';
} else {
	echo '{"code":1}';
}
?>