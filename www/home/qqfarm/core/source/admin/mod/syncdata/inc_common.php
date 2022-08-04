<?PHP
/**
 * QQFarm for updates automatically
 * QQFarm for updates automatically:20100718
 */

function getfile_nc($sid){
	return array(
		'http://appimg1.qq.com/happyfarm/module/ui/allcrops/Crop_'.$sid.'.swf',
		'http://appimg1.qq.com/happyfarm/module/ui/allcrops/Crop_'.$sid.'_Seed.swf',
	);
}

function getfile_mc($sid){
	return array(
		'http://appimg.qq.com/mc/module/mc/farm/icon/a'.$sid.'.png',
		'http://appimg.qq.com/mc/module/mc/farm/icon/p'.$sid.'.png',
		'http://appimg.qq.com/mc/module/mc/farm/animal/a'.$sid.'.jpg',
		'http://appimg.qq.com/mc/module/mc/farm/animal/a'.$sid.'b.jpg',
		'http://appimg.qq.com/mc/module/mc/farm/animal/a'.$sid.'p.jpg',
		'http://appimg.qq.com/mc/module/mc/farm/aswf/a'.$sid.'_0.swf',
		'http://appimg.qq.com/mc/module/mc/farm/aswf/a'.$sid.'_1.swf',
		//'http://appimg.qq.com/mc/module/mc/main/animal/a'.$sid.'.swf',
		'http://appimg.qq.com/mc/module/mc/main/sound/animal/1/s'.$sid.'.swf',
		'http://appimg.qq.com/mc/module/mc/main/sound/animal/2/s'.$sid.'.swf',
		'http://appimg.qq.com/mc/module/mc/farm/product/p'.$sid.'.swf'
	);
}

function getItemID($xml,$item){
    $doc=new DOMDocument();
    $doc->load($xml);
    foreach($doc->getElementsByTagName($item) as $v){
        $itemID[$v->getAttribute('id')]=$v->getAttribute('name')?$v->getAttribute('name'):$v->getElementsByTagName("name")->item(0)->nodeValue;
    }
    return $itemID;
}

function edit_ncxml($sid,$value){
	global $n_xml;
	$dom=new DOMDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->load($n_xml);
	//if(!$nc)die('error');
	$crops=$dom->getElementsByTagName('crops');
	$crop=$dom->getElementsByTagName('crop');
	foreach($crop as $v){
		$allid[]=$v->getAttribute('id');
	}
	if(!in_array($sid,$allid)){
		$crop=$crops->item(0)->appendChild($dom->createElement('crop'));
		$value['sid']?$crop->setAttribute('id',$value['sid']):'';
		$value['isFlower']?$crop->setAttribute('isFlower',$value['isFlower']):'';
		$value['offsetX']?$crop->setAttribute('offsetX',$value['offsetX']):'';
		$value['offsetY']?$crop->setAttribute('offsetY',$value['offsetY']):'';
		$value['seed']?$v->setAttribute('seed',$value['seed']):'';
		$value['harvestNum']?$crop->setAttribute('harvestNum',$value['harvestNum']):'';
		$value['isFood']?$crop->setAttribute('isFood',$value['isFood']):'';
		$value['isLock']?$crop->setAttribute('isLock',$value['isLock']):'';
		$value['isRed']?$crop->setAttribute('isRed',$value['isRed']):'';
		$insect=$crop->appendChild($dom->createElement('insect'));
		$insect->setAttribute('position',$value['insect']);
		$nextText=$crop->appendChild($dom->createElement('nextText'));
		$nextText->setAttribute('value',$value['nextText']);
		$cropGrow=$crop->appendChild($dom->createElement('cropGrow'));
		$cropGrow->setAttribute('value',$value['cropGrow']);
		$tip=$crop->appendChild($dom->createElement('tip'));
		$tip=$tip->appendChild($dom->createTextNode($value['tip']));
		$name=$crop->appendChild($dom->createElement('name'));
		$name=$name->appendChild($dom->createTextNode($value['cname']));
		$gossip=$crop->appendChild($dom->createElement('gossip'));
		$gossip=$gossip->appendChild($dom->createTextNode($value['gossip']));
	}else{
		foreach($crop as $v){
			if($v->getAttribute('id')==$sid){
				$value['sid']?$v->setAttribute('id',$value['sid']):'';
				$value['isFlower']?$v->setAttribute('isFlower',$value['isFlower']):'';
				$value['offsetX']?$v->setAttribute('offsetX',$value['offsetX']):'';
				$value['offsetY']?$v->setAttribute('offsetY',$value['offsetY']):'';
				$value['seed']?$v->setAttribute('seed',$value['seed']):'';
				$value['harvestNum']?$v->setAttribute('harvestNum',$value['harvestNum']):'';
				$value['isFood']?$v->setAttribute('isFood',$value['isFood']):'';
				$value['isLock']?$v->setAttribute('isLock',$value['isLock']):'';
				$value['isRed']?$v->setAttribute('isRed',$value['isRed']):'';
				$insects = $v->getElementsByTagName("insect");
				$insects->item(0)->setAttribute('position',$value['insect']);
				$nextTexts = $v->getElementsByTagName("nextText");
				$nextTexts->item(0)->setAttribute('value',$value['nextText']);
				$cropGrows = $v->getElementsByTagName("cropGrow");
				$cropGrows->item(0)->setAttribute('value',$value['cropGrow']);
				$tips = $v->getElementsByTagName("tip");
				$tips->item(0)->nodeValue=$value['tip'];
				$names = $v->getElementsByTagName("name");
				$names->item(0)->nodeValue=$value['cname'];
				$gossips = $v->getElementsByTagName("gossip");
				$gossips->item(0)->nodeValue=$value['gossip'];
			}
		}
	}
	$dom->save($n_xml);
}

function edit_mcxml($sid,$value){
	global $m_xml1;
	$dom=new DOMDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->load($m_xml1);
	$animals=$dom->getElementsByTagName('animals');
	$animal=$dom->getElementsByTagName('animal');
	foreach($animal as $v){
		$allid[]=$v->getAttribute('id');
	}
	if(!in_array($sid,$allid)){
		$animal=$animals->item(0)->appendChild($dom->createElement('animal'));
		$value['sid']?$animal->setAttribute('id',$value['sid']):'';
		$value['cname']?$animal->setAttribute('name',$value['cname']):'';
		$value['childNum']?$animal->setAttribute('childNum',$value['childNum']):'';
		$value['product']?$animal->setAttribute('product',$value['product']):'';
		$value['u']?$animal->setAttribute('u',$value['u']):'';
		$value['house']?$animal->setAttribute('house',$value['house']):'';
		$value['sound']?$animal->setAttribute('sound',$value['sound']):'';
		$value['sf']?$animal->setAttribute('sf',$value['sf']):'';
		$nextText=$animal->appendChild($dom->createElement('nextText'));
		$nextText->setAttribute('value',$value['nextText']);
		$nextTime=$animal->appendChild($dom->createElement('nextTime'));
		$nextTime->setAttribute('value',$value['nextTime']);
		$tip=$animal->appendChild($dom->createElement('tip'));
		$tip=$tip->appendChild($dom->createTextNode($value['tip']));
		$info=$animal->appendChild($dom->createElement('info'));
		foreach($value['info'] as $r=>$k){
			$l=$info->appendChild($dom->createElement('l'));
			$l=$l->appendChild($dom->createTextNode($k));
		}
	}else{
		foreach($animal as $v){
			if($v->getAttribute('id')==$sid){
				$value['cname']?$v->setAttribute('name',$value['cname']):'';
				$value['childNum']?$v->setAttribute('childNum',$value['childNum']):'';
				$value['product']?$v->setAttribute('product',$value['product']):'';
				$value['u']?$v->setAttribute('u',$value['u']):'';
				$value['house']?$v->setAttribute('house',$value['house']):'';
				$value['sound']?$v->setAttribute('sound',$value['sound']):'';
				$value['sf']?$v->setAttribute('sf',$value['sf']):'';
				$nextText = $v->getElementsByTagName("nextText");
				$nextText->item(0)->setAttribute('value',$value['nextText']);
				$nextTime = $v->getElementsByTagName("nextTime");
				$nextTime->item(0)->setAttribute('value',$value['nextTime']);
				$tip = $v->getElementsByTagName("tip");
				$tip->item(0)->nodeValue=$value['tip'];
				$ls = $v->getElementsByTagName("l");
				$a=0;
				foreach($ls as $k){
					$k->nodeValue=$value['info'][$a];
					$a=$a+1;
				}
			}
		}
	}
	$dom->save($m_xml);
}

function get_ncxml($sid){
	global $n_xml,$yn_xml,$replace_ncword;
	$doc=new DOMDocument();
	$doc->load($yn_xml);
	$module=$doc->getElementsByTagName('module');
	$value['nc_module']=$module->item(0)->getAttribute('url');
	$material=$doc->getElementsByTagName('material');
	foreach($material as $mat){
		$value['nc_material'][preg_replace($replace_ncword,'',$mat->getAttribute('url'))]=$mat->getAttribute('url');
	}
	$crop=$doc->getElementsByTagName('crop');
	if($sid){
		foreach($crop as $v){
			if($v->getAttribute('id')==$sid){
				$sid = $v->getAttribute('id');
				$names = $v->getElementsByTagName("name");
				$cropGrows = $v->getElementsByTagName("cropGrow");
				$insects = $v->getElementsByTagName("insect");
				$nextTexts = $v->getElementsByTagName("nextText");
				$gossips = $v->getElementsByTagName("gossip");
				$tips = $v->getElementsByTagName("tip");
				$value['sid']=$v->getAttribute('id');
				$value['cname'] = $names->item(0)->nodeValue;
				$value['tip'] = $tips->item(0)->nodeValue;
				$value['isFlower'] = $v->getAttribute('isFlower');
				$value['offsetX'] = $v->getAttribute('offsetX');
				$value['offsetY'] = $v->getAttribute('offsetY');
				$value['seed'] = $v->getAttribute('seed');
				$value['harvestNum'] = $v->getAttribute('harvestNum');
				$value['isFood'] = $v->getAttribute('isFood');
				$value['isLock'] = $v->getAttribute('isLock');
				$value['isRed'] = $v->getAttribute('isRed')?$v->getAttribute('isRed'):'';
				$value['cropGrow'] = $cropGrows->item(0)->getAttribute('value');
				$value['insect'] = $insects->item(0)->getAttribute('position');
				$value['nextText'] = $nextTexts->item(0)->getAttribute('value');
				$value['gossip'] = $gossips->item(0)->nodeValue;
				$value['file']=getfile_nc($sid);
			}
		}
	}
	$doc->load($n_xml);
	$module=$doc->getElementsByTagName('module');
	$value['d_nc_module']=$module->item(0)->getAttribute('url');
	$material=$doc->getElementsByTagName('material');
	foreach($material as $mat){
		$value['d_nc_material'][$mat->getAttribute('url')]=$mat->getAttribute('url');
	}
	return $value;
}

function get_mcxml($sid){
	global $m_xml,$ym_xml,$ym_xml1,$ym_fun,$replace_mcword;
	$doc=new DOMDocument();
	$doc->load($ym_xml);
	$module=$doc->getElementsByTagName('module');
	foreach($module as $mat){
	$value['mc_module'][preg_replace($replace_mcword,'',$mat->getAttribute('url'))]=$mat->getAttribute('url');
	}
	$material=$doc->getElementsByTagName('material');
	foreach($material as $mat){
		$value['mc_material'][preg_replace($replace_mcword,'',$mat->getAttribute('url'))]=$mat->getAttribute('url');
	}
	$doc->load($ym_xml1);
	$animal=$doc->getElementsByTagName('animal');
	if($sid){
		foreach($animal as $v){
			if($v->getAttribute('id')==$sid){
				$sid = $v->getAttribute('id');
				$nextTexts = $v->getElementsByTagName("nextText");
				$nextTimes = $v->getElementsByTagName("nextTime");
				$tips = $v->getElementsByTagName("tip");
				$value['sid']=$v->getAttribute('id');
				$value['cname']=$v->getAttribute('name');
				$value['childNum']=$v->getAttribute('childNum');
				$value['product']=$v->getAttribute('product');
				$value['u']=$v->getAttribute('u');
				$value['house']=$v->getAttribute('house');
				$value['sound']=$v->getAttribute('sound');
				$value['sf']=$v->getAttribute('sf');
				$value['nextText'] = $nextTexts->item(0)->getAttribute('value');
				$value['nextTime'] = $nextTimes->item(0)->getAttribute('value');
				$value['tip'] = $tips->item(0)->nodeValue;
				foreach($v->getElementsByTagName("l") as $l){
					$value['info'][]=$l->nodeValue;
				}
				$value['file']=getfile_mc($sid);
				$cgi_get_animals=json_decode(file_get_contents($ym_fun),true);
				foreach($cgi_get_animals as $ke=>$v){
					if($v['cId']==$sid){
						$value['byproductprice']=$v['byproductprice'];
						$value['cLevel']=$v['cLevel'];
						$value['consum']=$v['consum'];
						$value['cub']=$v['cub'];
						$value['cycle']=$v['cycle'];
						$value['expect']=$v['expect'];
						$value['growing']=$v['growing'];
						$value['growthCycle']=$v['growthCycle'];
						$value['harvestbExp']=$v['harvestbExp'];
						$value['harvestpExp']=$v['harvestpExp'];
						$value['maturingTime']=$v['maturingTime'];
						$value['output']=$v['output'];
						$value['price']=$v['price'];
						$value['procreation']=$v['procreation'];
						$value['productime']=$v['productime'];
						$value['productprice']=$v['productprice'];
						$value['sinfo']=$v['sinfo'];
					}
				}
			}
		}
	}
	$doc->load($m_xml);
	$module=$doc->getElementsByTagName('module');
	foreach($module as $mat){
		$value['d_mc_module'][$mat->getAttribute('url')]=$mat->getAttribute('url');
	}
	$material=$doc->getElementsByTagName('material');
	foreach($material as $mat){
		$value['d_mc_material'][$mat->getAttribute('url')]=$mat->getAttribute('url');
	}
	return $value;
}

function remote_file_exists($url_file){
	$url_file = trim($url_file);
	if(empty($url_file))return false;
	$url_arr = parse_url($url_file);
	if(!is_array($url_arr) || empty($url_arr))return false;
	$host = $url_arr['host'];
	$path = $url_arr['path'] ;
	$port = isset($url_arr['port']) ? $url_arr['port'] : "80";
	$fp = fsockopen($host, $port, $err_no, $err_str, 30);
	if(!$fp)return false;
	$request_str = "GET ".$path." HTTP/1.1\r\n";
	$request_str .= "Host: ".$host."\r\n";
	$request_str .= "Connection: Close\r\n\r\n";
	fwrite($fp, $request_str);
	$first_header = fgets($fp, 1024);
	fclose($fp);
	if (trim($first_header) == "")return false;
	if (!preg_match("/200/", $first_header)){
		return false;
	}
	return true;
}

function get_file($url, $folder){
	$d_folder = $folder?$folder.'/':''; 
	$newfname = $d_folder . basename($url);
	$ch = curl_init();
	$fp = fopen($newfname, "w");
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url, 
		CURLOPT_FILE => $fp,
		CURLOPT_HEADER => false
	));
	curl_exec($ch); 
	curl_close($ch); 
	fclose($fp);
}

function cache_write($key, $value, $dir = '/') {
	$dir = 'config'.$dir;
	is_dir($dir) || mkdir($dir, 0777, true);
	$cFile = $dir.strtolower($key).'.php';
	$cValue = $key.' = '.var_export((array)$value, true);
	return file_put_contents($cFile, "<?php\r\n\${$cValue};\r\n?>");
}
?>