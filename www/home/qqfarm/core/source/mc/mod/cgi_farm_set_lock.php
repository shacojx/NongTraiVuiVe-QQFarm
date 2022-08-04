<?php

# Buy ingot
$crop = $_REQUEST['crop'];
list($cropid, $type) = explode(":", $crop);
$nc_lock = $_QFG['db']->result('SELECT nclock FROM app_qqfarm_nc where uid=' . $_QFG['uid']);



if($type==1){
	if($nc_lock) {
		$nc_lock .= ",".$cropid;
	} else $nc_lock =$cropid;

} elseif($type==2) {
	$nclock_arr = explode(',',$nc_lock);
	$nc_lock = '';
	foreach($nclock_arr as $key=>$value) {
		if($cropid == $value) {
			unset($nclock_arr[$key]);
		} else {
			if($nc_lock) {
				$nc_lock .= ",".$value;
			} else $nc_lock =$value;
		}
	}
} else exit();

$_QFG['db']->query("UPDATE app_qqfarm_nc set nclock='" . $nc_lock . "' where uid=" . $_QFG['uid']);


echo '{"code":1,"crop":[{"cId":'.$cropid.',"isLock":'.$type.'}],"ecode":0}';

?>