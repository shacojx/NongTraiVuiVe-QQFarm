<?php
// Develop by  T48
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

if(empty($_GET['back']))
{
	//添加FEED
	$icon = 'duluong';
	$title_template = '{actor} chơi game <a href="duluong.php">Dù lượng</a> rất vui vẻ.';
	$title_data	= '<a href="duluong.php"><img src="image/app/duluong.png" alt="Game Dù lượng" class="summaryimg"/></a> <div class="detail" >{actor}  mời bạn cùng chơi game <a href="duluong.php">Dù lượng</a> ở <a href="http://Me.Dhcsnd" target="_blank">Mạng xã hội DHCSND</a>!</div> ';
	feed_add($icon, $title_template, '',$title_data);	
}
include_once(template("duluong/view/index"));


?>