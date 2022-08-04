<?PHP
/**
 * Updated Ranch Animals
 * Updated Ranch Animals:20100711
 */


include('config/mc/animaltype.php');
include('config/mc/animaltime.php');

if($sid){
	$value=get_mcxml($sid);
	$info=implode('<br>',$value['info']);
	qf_getView("admin/syncdata/mc_animal");
}

if($see){
	if(!$only){
		foreach($value['file'] as $filetype){
			if(remote_file_exists($filetype)){
				get_file($filetype,dirname(preg_replace($replace_mcword,'',$filetype)));
			}
		}
	}
	edit_mcxml($sid,$value);
	$animaltype[$sid]['byproductprice'] = $value['byproductprice']?$value['byproductprice']:'100';
	$animaltype[$sid]['cId'] = $value['sid'];
	$animaltype[$sid]['cLevel'] = $_POST['cLevel']?$_POST['cLevel']:$value['cLevel'];
	$animaltype[$sid]['cName'] = $_POST['cName']?$_POST['cName']:$value['cname'];
	$animaltype[$sid]['bName'] = $value['product']?$value['product']:'';
	$animaltype[$sid]['consum'] = $value['consum']?$value['consum']:'2';
	$animaltype[$sid]['cub'] = $value['cub']?$value['cub']:'18000';
	$animaltype[$sid]['cycle'] = $value['cycle']?$value['cycle']:'28800';
	$animaltype[$sid]['expect'] = $value['expect']?$value['expect']:'3219151272';
	$animaltype[$sid]['growing'] = $value['growing']?$value['growing']:'18000,18000,129600,15';
	$animaltype[$sid]['growthCycle'] = $value['growthCycle']?$value['growthCycle']:'0';
	$animaltype[$sid]['harvestbExp'] = $value['harvestbExp']?$value['harvestbExp']:'8';
	$animaltype[$sid]['harvestpExp'] = $value['harvestpExp']?$value['harvestpExp']:'28';
	$animaltype[$sid]['maturingTime'] = $value['maturingTime']?$value['maturingTime']:'36000';
	$animaltype[$sid]['output'] = $_POST['output']?$_POST['output']:$value['output'];
	$animaltype[$sid]['price'] = $_POST['price']?$_POST['price']:$value['price'];
	$animaltype[$sid]['procreation'] = $_POST['byproductprice']?$_POST['byproductprice']:$value['procreation'];
	$animaltype[$sid]['productime'] = $value['productime']?$value['productime']:'';
	$animaltype[$sid]['productprice'] = $_POST['productprice']?$_POST['productprice']:$value['productprice'];
	$animaltype[$sid]['sinfo'] = $value['sinfo']?$value['sinfo']:'';
	cache_write('animaltype',$animaltype,"/mc/");
	$animaltime[$sid]=explode(',',$value['nextTime']);
	cache_write('animaltime',$animaltime,"/mc/");
	die('1|&|Hoàn tất!|&|refresh|&|1');
}
?>
