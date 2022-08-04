<?PHP
/**
 * Updated farm species
 * Identification of the date of the U.S. dead end の:20100711
 */
 

include_once("config/nc/cropstype.php");
include_once("config/nc/cropstime.php");

if($sid){
	$value=get_ncxml($sid);
	$isred=$value['isRed']?'是':'否';
	qf_getView("admin/syncdata/nc_crop");
	//die;
}

if($see){
	if(!$only){
		foreach($value['file'] as $filetype){
			if(remote_file_exists($filetype)){
				get_file($filetype,dirname(preg_replace($replace_ncword,'',$filetype)));
			}
		}
	}
	//edit_ncxml($sid,$value);
	$cropstype[$sid]['cId']=$sid;
	$cropstype[$sid]['cLevel']=$_POST['cLevel']?$_POST['cLevel']:'0';
	$cropstype[$sid]['cName']=$_POST['cname']?$_POST['cname']:$value['cname'];
	$cropstype[$sid]['cType']=1;
	$cropstype[$sid]['cropExp']=$_POST['cropExp']?$_POST['cropExp']:'0';
	$cropstype[$sid]['expect']=$_POST['expect']?$_POST['expect']:'0';
	$cropGrow=explode(',',$value['cropGrow']);
	$cropstype[$sid]['growthCycle']=$cropGrow[4];
	$cropstype[$sid]['maturingTime']=$_POST['maturingTime']?$_POST['maturingTime']:'0';
	$cropstype[$sid]['output']=$_POST['output']?$_POST['output']:'0';
	$cropstype[$sid]['price']=$_POST['price']?$_POST['price']:'0';
	$cropstype[$sid]['sale']=$_POST['sale']?$_POST['sale']:'0';
	cache_write('cropstype',$cropstype,"/nc/");
	$cropstime[$sid]=explode(',',$value['cropGrow']);
	cache_write('cropstime',$cropstime,"/nc/");
	die('1|&|Hoàn tất!|&|refresh|&|1');
}
?>
