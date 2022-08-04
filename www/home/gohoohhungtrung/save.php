<?php 
//WWW.GoHooH.CoM

//���»session
if($_SGLOBAL['supe_uid']) {
        getmember(); //��ȡ��ǰ�û���Ϣ
		realname_set($_SGLOBAL['supe_uid'], $_SGLOBAL['supe_username']);
       updatetable('session', array('lastactivity' => $_SGLOBAL['timestamp']), array('uid'=>$_SGLOBAL['supe_uid']));
}

$uid = $_SGLOBAL['member']['uid'];
$score = intval($_POST['gscore']);

$type = $_POST['gtype'];
$gtime = $_SGLOBAL['timestamp'];

if(empty($score) || $score <= 0)
	showmessage('Bạn chưa có điểm, hãy quay lại chơi tiếp nhé','gohoohhungtrung.php?back=1');
	
	
$tys = array('single','double');

if(empty($type) && in_array($type,$tys))
	showmessage('Hãy tiếp tục hứng trứng nào!','gohoohhungtrung.php?back=1');

$sql = "SELECT score FROM ".tname("app_gohoohhungtrung")." WHERE uid=".$uid;
$query = $_SGLOBAL['db']->query( $sql );
$query = $_SGLOBAL['db']->fetch_array($query);

$tmpArr = is_array($query)?$query['score']:0;

if(is_array($query)) {
	//����FEED
	$icon = 'gohoohhungtrung';
	$title_template = '{actor} chơi game <a href="gohoohhungtrung.php">hứng trứng</a> vui vẻ đạt '.$score.' điểm.';
	$body_template	= '<a href="gohoohhungtrung.php"><img src="image/app/gohoohhungtrung.gif" alt="Trang trại trứng vàng" class="summaryimg"/></a> <div class="quote"><span class="q">{actor} thách đấu bạn hứng trứng vượt qua '.$score.' điểm. Chơi ngay tại <a href="gohoohhungtrung.php">Trang trại trứng vàng</a> ở <a href="http://www.gohooh.com/nhatui/">Nhà Tui</a></span></div>';
	feed_add($icon, $title_template, $body_template,$body_template);
	
	if($score<$tmpArr) {
		showmessage('Điểm của bạn chưa chưa hơn điểm lần chơi trước, hãy cố gắng nhé','gohoohhungtrung.php?back=1');
	} else {
		$_SGLOBAL['db']->query("UPDATE ".tname("app_gohoohhungtrung")." SET `score` = '".$score."',`gtime` = '".$gtime."' WHERE uid =".$uid);
		showmessage('Bạn đã phá kỷ lục rồi, xin chúc mừng','gohoohhungtrung.php?back=1'); 
	}	
} else {
	//����FEED
	$icon = 'gohoohhungtrung';
	$title_template = '{actor} chơi game <a href="gohoohhungtrung.php">hứng trứng</a> vui vẻ đạt '.$score.' điểm.';
	$body_template	= '<a href="gohoohhungtrung.php"><img src="image/app/gohoohhungtrung.gif" alt="Trang trại trứng vàng" class="summaryimg"/></a> <div class="quote"><span class="q">{actor} thách đấu bạn hứng trứng vượt qua '.$score.' điểm. Chơi ngay tại <a href="gohoohhungtrung.php">Trang trại trứng vàng</a> ở <a href="http://www.gohooh.com/nhatui/">Nhà Tui</a></span></div>';
	feed_add($icon, $title_template, '',$title_data);
	
	$_SGLOBAL['db']->query("INSERT INTO ".tname("app_gohoohhungtrung")." (`id`, `type`, `uid`, `score`, `gtime`) VALUES (NULL, '".$type."', '".$uid."', '".$score."', '".$gtime."')");
	showmessage('Điểm số của bạn đã được lưu lại. Hãy tiếp tục hứng trứng nào!','gohoohhungtrung.php?back=1'); 
}




?>X  