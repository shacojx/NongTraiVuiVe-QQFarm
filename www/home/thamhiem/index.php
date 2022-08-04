<?php
// Develop by  T48
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

if(empty($_GET['back']))
{
	//添加FEED
	$icon = 'thamhiem';
	$title_template = '{actor} chơi game <a href="thamhiem.php">Thám hiểm</a> rất vui vẻ.';
	$title_data	= '<a href="thamhiem.php"><img src="image/app/thamhiem.png" alt="Game Thám hiểm" class="summaryimg"/></a> <div class="detail" >{actor}  mời bạn cùng chơi game <a href="thamhiem.php">Thám hiểm</a> ở <a href="http://Me.Dhcsnd" target="_blank">Mạng xã hội DHCSND</a>!</div> ';
	feed_add($icon, $title_template, '',$title_data);	
}
include_once(template("thamhiem/view/index"));


?>