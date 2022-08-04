<?php
// Develop by  T48
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

if(empty($_GET['back']))
{
	//添加FEED
	$icon = 'dapthu';
	$title_template = '{actor} chơi game <a href="dapthu.php">Đập thú</a> rất vui vẻ.';
	$title_data	= '<a href="dapthu.php"><img src="image/app/dapthu.png" alt="Game Đập thú" class="summaryimg"/></a> <div class="detail" >{actor}  mời bạn cùng chơi game <a href="dapthu.php">Đập thú</a> ở <a href="http://Me.Dhcsnd" target="_blank">Mạng xã hội DHCSND</a>!</div> ';
	feed_add($icon, $title_template, '',$title_data);	
}
include_once(template("dapthu/view/index"));


?>