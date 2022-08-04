<?php


if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );

if(empty($_GET['back']))
{
	//Ìí¼ÓFEED
	$icon = 'blq';
	$title_template = '<a href="blq.php">Bowling</a> Super Player {actor}';
	$title_data	= '<a href="blq.php"><img src="image/app/blq.gif" alt="Bowling" class="summaryimg"/></a> <div class="detail" Classic game "Bowling", Ta is the game, I would also like to play, <a href="blq.php">click here to play</a></div> ';
	feed_add($icon, $title_template, '',$title_data);
	
}


include_once(template("blq/view/index"));


?>