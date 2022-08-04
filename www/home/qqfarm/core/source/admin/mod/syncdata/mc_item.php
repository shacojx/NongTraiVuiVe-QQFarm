<?PHP
/**
 * Updated Ranch decoration
 * Identification of the date of the U.S. dead end:20100711
 */


$rep_mcit="http://appimg.qq.com/mc/";
$ymc_item_path="http://appimg.qq.com/mc/module/mc/farm/diy/";
$mc_item_path="module/mc/farm/diy";

if($sid){
	$it=array(
	remote_file_exists($ymc_item_path.'z1_'.$sid.'_1.swf')?$ymc_item_path.'z1_'.$sid.'_1.swf':'',
	remote_file_exists($ymc_item_path.'z1_'.$sid.'_1_shop.jpg')?$ymc_item_path.'z1_'.$sid.'_1_shop.jpg':''
	);
	qf_getView("admin/syncdata/mc_item");
}

if($see){
	if(!$only){
		foreach($it as $item){
			if(remote_file_exists($item)){
				get_file($item,$mc_item_path);
			}
		}
	}
	include_once("config/mc/itemtype.php");
	$itemtype[$sid]=array(
		"FBPrice"=>0,
		"YFBPrice"=>0,
		"exp"=>$_POST['iteme']?$_POST['iteme']:'0',
		"itemDesc"=>$_POST['item']?$_POST['item']:'Background',
		"itemId"=>$sid,
		"itemName"=>$_POST['item']?$_POST['item']:'Background',
		"itemType"=>101,
		"itemValidTime"=>15552000,
		"level"=>0,
		"price"=>$_POST['itemp']?$_POST['itemp']:'0'
	);
	cache_write('itemtype',$itemtype,"/mc/");
	die('1|&|Hoàn tất!|&|refresh|&|1');
}

?>