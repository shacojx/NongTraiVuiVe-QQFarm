<?php
// Develop by  T48
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

if(empty($_GET['back']))
{
	//添加FEED
	$icon = 'bangau';
	$title_template = '{actor} chơi game <a href="bangau.php">Bắn gấu</a> rất vui vẻ.';
	$title_data	= '<a href="bangau.php"><img src="image/app/bangau.png" alt="Game Bắn gấu" class="summaryimg"/></a> <div class="detail" >{actor}  mời bạn cùng chơi game <a href="bangau.php">Bắn gấu</a> ở <a href="http://Me.Dhcsnd" target="_blank">Mạng xã hội DHCSND</a>!</div> ';
	feed_add($icon, $title_template, '',$title_data);	
}
include_once(template("bangau/view/index"));


?>