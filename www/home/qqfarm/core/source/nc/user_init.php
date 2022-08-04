<?php
//Initialize the new user data

//Read the initial configuration
qf_getCache('_INIT');

//The default prompt message
$Tips = array(
	'water_b' => 'Cám ơn nha!',
	'weed_b' => 'Cám ơn nha!',
	'pest_b' => 'Cám ơn nha!',
	'weed_a' => 'Chơi kì vậy!',
	'pest_a' => 'Chơi kì vậy!'
);
//Parameters of the initial field
$status=array(
	array('a'=>2,'b'=>6,'c'=>0,'d'=>0,'e'=>1,'f'=>0,'g'=>0,'h'=>1,'i'=>100,'j'=>0,'k'=>16,'l'=>9,'m'=>16,'n'=>array(),'o'=>0,'p'=>array(),'q'=>($_QFG['timestamp'] - 36030),'r'=>1251351720),
	array('a'=>2,'b'=>1,'c'=>0,'d'=>0,'e'=>1,'f'=>1,'g'=>0,'h'=>1,'i'=>100,'j'=>0,'k'=>0,'l'=>0,'m'=>0,'n'=>array(),'o'=>0,'p'=>array(),'q'=>($_QFG['timestamp'] - 14400),'r'=>1251351725),
	array('a'=>2,'b'=>1,'c'=>0,'d'=>0,'e'=>1,'f'=>0,'g'=>0,'h'=>0,'i'=>100,'j'=>0,'k'=>0,'l'=>0,'m'=>0,'n'=>array(),'o'=>0,'p'=>array(),'q'=>($_QFG['timestamp'] - 14400),'r'=>1251351725),
	array('a'=>2,'b'=>1,'c'=>0,'d'=>0,'e'=>1,'f'=>0,'g'=>2,'h'=>1,'i'=>100,'j'=>0,'k'=>0,'l'=>0,'m'=>0,'n'=>array(),'o'=>0,'p'=>array(),'q'=>($_QFG['timestamp'] - 25200),'r'=>1251351725),
	array('a'=>0,'b'=>0,'c'=>0,'d'=>0,'e'=>1,'f'=>0,'g'=>0,'h'=>1,'i'=>100,'j'=>0,'k'=>0,'l'=>0,'m'=>0,'n'=>array(),'o'=>0,'p'=>array(),'q'=>0,'r'=>1251351725),
	array('a'=>0,'b'=>0,'c'=>0,'d'=>0,'e'=>1,'f'=>0,'g'=>0,'h'=>1,'i'=>100,'j'=>0,'k'=>0,'l'=>0,'m'=>0,'n'=>array(),'o'=>0,'p'=>array(),'q'=>0,'r'=>1251351725)
);
//Initial Experience
$exp = $_INIT['nc_exp'];
//Initial Experience
$decorative = array(
	'1'=>array('1'=>array('status'=>1,'validtime'=>1)),
	'2'=>array('2'=>array('status'=>1,'validtime'=>1)),
	'3'=>array('3'=>array('status'=>1,'validtime'=>1)),
	'4'=>array('4'=>array('status'=>1,'validtime'=>1))
);
//Health model parameters
$healthmode = array('beginTime'=>0,'canClose'=>1,'date'=>'1970-01-01|1970-01-07','endTime'=>0,'serverTime'=>$_QFG['timestamp'],'set'=>0,'time'=>'08|00','valid'=>0);
//Parameter storage
$uid = $_QFG['db']->result("SELECT uid FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
if(!$uid) $_QFG['db']->query("INSERT INTO app_qqfarm_nc(uid,tips,status,exp,decorative,healthmode,zong) VALUES({$_QFG['uid']},'" . qf_encode($Tips) . "','" . qf_encode($status) . "',{$exp},'" . qf_encode($decorative) . "','" . qf_encode($healthmode) . "',150)");
//Push Feed
qf_addFeed('user_init');

$Tips = $status = $exp = $decorative = $healthmode = null;

?>