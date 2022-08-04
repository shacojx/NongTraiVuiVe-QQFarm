<?php
// Develop by  T48
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

if(empty($_GET['back']))
{
	//添加FEED
	$icon = 'daovang';
	$title_template = '{actor} chơi game <a href="daovang.php">Đào vàng</a> rất vui vẻ.';
	$title_data	= '<a href="daovang.php"><img src="image/app/daovang.png" alt="Game Đào vàng" class="summaryimg"/></a> <div class="detail" >{actor}  mời bạn cùng chơi game <a href="daovang.php">Đào vàng</a> ở <a href="http://Me.Dhcsnd" target="_blank">Mạng xã hội DHCSND</a>!</div> ';
	feed_add($icon, $title_template, '',$title_data);	
}
include_once(template("daovang/view/index"));


?>