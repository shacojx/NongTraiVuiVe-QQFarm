<?php 

// Việt hóa bởi GoHooH.CoM
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
	showmessage('Bạn chưa có kết quả trò chơi, quay lại nhé','clxj.php?back=1');
	
	
$tys = array('single','double');

if(empty($type) && in_array($type,$tys))
	showmessage('Quay lại chơi game Gà Kon nào','clxj.php?back=1');

$sql = "SELECT score FROM ".tname("app_clxj")." WHERE uid=".$uid;
$query = $_SGLOBAL['db']->query( $sql );
$query = $_SGLOBAL['db']->fetch_array($query);

$tmpArr = is_array($query)?$query['score']:0;

if(is_array($query)) {
	//添加FEED
	$icon = 'clxj';
	$title_template = '{actor} chơi game <a href="clxj.php">Gà Kon</a> đạt '.$score.' điểm. Hura!';
	$body_template	= '<a href="clxj.php"><img src="image/app/clxj.gif" alt="Gà Kon" class="summaryimg"/></a> <div class="quote"><span class="q">Thử ngay cảm giác là <a href="clxj.php">GÀ!</a></span></div>';
	feed_add($icon, $title_template, $body_template,$body_template);
	
	if($score<$tmpArr) {
		showmessage('Điểm số của bạn chưa phá kỷ lục, vui lòng quay lại','clxj.php?back=1');
	} else {
		$_SGLOBAL['db']->query("UPDATE ".tname("app_clxj")." SET `score` = '".$score."',`gtime` = '".$gtime."' WHERE uid =".$uid);
		showmessage('Cập nhật thành công','clxj.php?back=1'); 
	}	
} else {
	//添加FEED
	$icon = 'clxj';
	$title_template = '{actor} chơi game <a href="clxj.php">Gà Kon</a> chiến thắng với '.$score.' diêm. Hura GoHooH!';
	$title_data = array($score);
	$title_data = '<a href="clxj.php"><img src="image/app/clxj.gif" alt="Gà Kon" class="summaryimg"/></a> <div class="quote"><span class="q">Thử ngay cảm giác là <a href="clxj.php">GÀ</a> nào!</span></div>';
	feed_add($icon, $title_template, '',$title_data);
	
	$_SGLOBAL['db']->query("INSERT INTO ".tname("app_clxj")." (`id`, `type`, `uid`, `score`, `gtime`) VALUES (NULL, '".$type."', '".$uid."', '".$score."', '".$gtime."')");
	showmessage('Cập nhật thành công','clxj.php?back=1'); 
}




?>