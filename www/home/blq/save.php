<?php 


//更新活动session
if($_SGLOBAL['supe_uid']) {
        getmember(); //获取当前用户信息
		realname_set($_SGLOBAL['supe_uid'], $_SGLOBAL['supe_username']);
       updatetable('session', array('lastactivity' => $_SGLOBAL['timestamp']), array('uid'=>$_SGLOBAL['supe_uid']));
}

$uid = $_SGLOBAL['member']['uid'];
$score = intval($_POST['gscore']);

$type = $_POST['gtype'];
$gtime = $_SGLOBAL['timestamp'];

if(empty($score) || $score <= 0)
	showmessage('You do not have the game results, do not need to save!','blq.php?back=1');
	
	
$tys = array('single','double');

if(empty($type) && in_array($type,$tys))
	showmessage('Into the bowling!','blq.php?back=1');

$sql = "SELECT score FROM ".tname("app_blq")." WHERE uid=".$uid;
$query = $_SGLOBAL['db']->query( $sql );
$query = $_SGLOBAL['db']->fetch_array($query);

$tmpArr = is_array($query)?$query['score']:0;

if(is_array($query)) {
	//添加FEED
	$icon = 'blq';
	$title_template = '<a href="blq.php">Bowling</a> cattle were {actor} has been '.$score.'Points good results, and excited to say: I Love Bowling';
	$body_template	= '<a href="blq.php"><img src="image/app/blq.gif" alt="Bowling" class="summaryimg"/></a> <div class="quote"><span class="q"> To thank MTV, thanks CCTV, no way! I am most cow! <a href="blq.php">To challenge me so solemnly!</a></span></div>';
	feed_add($icon, $title_template, $body_template,$body_template);
	
	if($score<$tmpArr) {
		showmessage('The score is less than the highest score, not to save!','blq.php?back=1');
	} else {
		$_SGLOBAL['db']->query("UPDATE ".tname("app_blq")." SET `score` = '".$score."',`gtime` = '".$gtime."' WHERE uid =".$uid);
		showmessage('Submitted to the success!','bgsjw.php?back=1'); 
	}	
} else {
	//添加FEED
	$icon = 'blq';
	$title_template = '<a href="blq.php">Bowling</a> cattle were {actor} to break his own records, has been '.$score.' 'points, and excited to say: I Love My Home ';
	$title_data = array($score);
	$title_data = '<a href="blq.php"><img src="image/app/blq.gif" alt="Bowling" class="summaryimg"/></a> <div class="quote"><span class="q">Thank MTV, thanks CCTV, no way! I am most cow! <a href="blq.php">Challenge me so solemnly! </a></span></div>';
	feed_add($icon, $title_template, '',$title_data);
	
	$_SGLOBAL['db']->query("INSERT INTO ".tname("app_blq")." (`id`, `type`, `uid`, `score`, `gtime`) VALUES (NULL, '".$type."', '".$uid."', '".$score."', '".$gtime."')");
	showmessage('Submitted to the success!','blq.php?back=1'); 
}




?>