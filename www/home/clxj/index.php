<?php
// Việt hóa bởi GoHooH.CoM
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

if(empty($_GET['back']))
{
	//添加FEED
	$icon = 'clxj';
	$title_template = '{actor} chơi game <a href="clxj.php">Audition</a> rất vui tại <a href="http://www.ketnoiteenviet.info"></a>';
	$title_data	= '<a href="clxj.php"><img src="image/app/clxj.gif" alt="Audition" class="summaryimg"/></a> <div class="detail" >Bạn đã thử cảm giác là <a href="clxj.php">Audition</a> chưa?</div> ';
	feed_add($icon, $title_template, '',$title_data);	
}
include_once(template("clxj/view/index"));


?>