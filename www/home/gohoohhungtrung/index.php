<?php
//Develop by WWW.GoHooH.CoM

if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

if(empty($_GET['back']))
{
	//����FEED
	$icon = 'gohoohhungtrung';
	$title_template = '{actor} <a href="gohoohhungtrung.php">hứng trứng</a> tại Trang trại trứng vàng.';
	$title_data	= '<a href="gohoohhungtrung.php"><img src="image/app/gohoohhungtrung.gif" alt="Trang trại trứng vàng" class="summaryimg"/></a> <div class="detail" >{actor} rủ bạn đi hứng trứng tại <a href="gohoohhungtrung.php">Trang trại trứng vàng</a> ở <a href="http://www.gohooh.com/nhatui/">Nhà Tui</a></div> ';
	feed_add($icon, $title_template, '',$title_data);
	
}



include_once(template("gohoohhungtrung/view/index"));


?>

f''