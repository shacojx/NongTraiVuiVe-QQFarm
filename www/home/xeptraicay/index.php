<?php
// Develop by  T48
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

if(empty($_GET['back']))
{
	//添加FEED
	$icon = 'xeptraicay';
	$title_template = '{actor} chơi game <a href="xeptraicay.php">Xếp trái cây</a> rất vui vẻ.';
	$title_data	= '<a href="xeptraicay.php"><img src="image/app/xeptraicay.png" alt="Game Xếp trái cây" class="summaryimg"/></a> <div class="detail" >{actor}  mời bạn cùng chơi game <a href="xeptraicay.php">Xếp trái cây</a> ở <a href="http://Me.Dhcsnd" target="_blank">Mạng xã hội DHCSND</a>!</div> ';
	feed_add($icon, $title_template, '',$title_data);	
}
include_once(template("xeptraicay/view/index"));


?>