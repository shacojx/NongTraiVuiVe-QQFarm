<?php 
//Phát triển bởi .CoM

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
	showmessage('Bạn chưa có điểm để lưu, hãy quay lại chơi tiếp nhé!','xeptraicay.php?back=1');
	
	
$tys = array('single','double');

if(empty($type) && in_array($type,$tys))
	showmessage('Hãy quay lại chơi tiếp nhé!','xeptraicay.php?back=1');

$sql = "SELECT score FROM ".tname("app_xeptraicay")." WHERE uid=".$uid;
$query = $_SGLOBAL['db']->query( $sql );
$query = $_SGLOBAL['db']->fetch_array($query);

$tmpArr = is_array($query)?$query['score']:0;

if(is_array($query)) {
	//添加FEED
	$icon = 'xeptraicay';
	$title_template = '{actor} phá kỷ lục game <a href="xeptraicay.php">Xếp trái cây</a> với '.$score.' điểm. Bạn có muốn thử sức?';
	$body_template	= '<a href="xeptraicay.php"><img src="image/app/xeptraicay.png" alt="Game Xếp trái cây" class="summaryimg"/></a> <div class="quote"><span class="q">{actor} mời bạn cùng chơi game <a href="xeptraicay.php">Xếp trái cây</a> ở <a href="http://Me.Dhcsnd" target="_blank">Mạng xã hội DHCSND</a></span></div>';
	feed_add($icon, $title_template, $body_template,$body_template);
	
	if($score<$tmpArr) {
		showmessage('Điểm của bạn chưa chưa hơn điểm lần chơi trước, hãy cố gắng nhé!','xeptraicay.php?back=1');
	} else {
		$_SGLOBAL['db']->query("UPDATE ".tname("app_xeptraicay")." SET `score` = '".$score."',`gtime` = '".$gtime."' WHERE uid =".$uid);
		showmessage('Bạn đã phá kỷ lục rồi, xin chúc mừng','xeptraicay.php?back=1'); 
	}	
} else {
	//添加FEED
	$icon = 'xeptraicay';
	$title_template = '{actor} phá kỷ lục game <a href="xeptraicay.php">Xếp trái cây</a> với '.$score.' điểm. Bạn có muốn thử sức?';
	$title_data = array($score);
	$title_data = '<a href="xeptraicay.php"><img src="image/app/xeptraicay.png" alt="Game Xếp trái cây" class="summaryimg"/></a> <div class="quote"><span class="q">{actor} mời bạn cùng chơi game <a href="xeptraicay.php">Xếp trái cây</a> ở <a href="http://Me.Dhcsnd" target="_blank">Mạng xã hội DHCSND</a></span></div>';
	feed_add($icon, $title_template, '',$title_data);
	
	$_SGLOBAL['db']->query("INSERT INTO ".tname("app_xeptraicay")." (`id`, `type`, `uid`, `score`, `gtime`) VALUES (NULL, '".$type."', '".$uid."', '".$score."', '".$gtime."')");
	showmessage('Điểm của bạn đã được lưu, hãy tiếp tục chơi nhé!','xeptraicay.php?back=1'); 
}




?>