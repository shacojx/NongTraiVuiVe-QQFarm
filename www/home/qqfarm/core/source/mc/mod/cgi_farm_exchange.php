<?php

#Consumption, selling

$uId = intval($_REQUEST['uIdx']);
$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $uId . " and type in(4,9,10,11,12) ORDER BY time DESC limit 0,50");

foreach($values as $value){
	
	if($value['type'] == 12){
		$scrids = array();
		$scrids = explode(",", $value['iid']);
		$scrcots = array();
		$scrcots = explode(",", $value['count']);
		$scrougestr = "";
		for ($i = 0; $i < count($scrids); $i++) {
            $name = $animaltype[$scrids[$i]]['cName'];
			$s = ' ';
			$scrougestr = $scrougestr . $scrcots[$i] . $s ." Immature ". $name;
			if ($i + 1 < count($scrids)) {
				$scrougestr = $scrougestr . ", ";
			} else {
				$scrougestr = $scrougestr . ", ";
			}
		}
		$msg = '"Bạn đã đóng góp cho ' . $scrougestr . ' ' . $value['money'] . ' Xu."';
	
	}elseif($value['type'] == 11){
		$scrids = array();
		$scrids = explode(",", $value['iid']);
		$scrcots = array();
		$scrcots = explode(",", $value['count']);
		$scrougestr = "";
		for ($i = 0; $i < count($scrids); $i++) {
			if($scrids[$i]>80000 && $scrids[$i]<90000){
				 $scrids[$i] = $scrids[$i] - 80000;
                 $name = $toolstype[$scrids[$i]]['name'];
			} 
			if($scrids[$i]>110010 && $scrids[$i]<120000){
				 $scrids[$i] = $scrids[$i] - 110000;
                 $name = $toolstype[$scrids[$i]]['name'];
			} 
			if($scrids[$i]>110000 && $scrids[$i]<110010){
				 $scrids[$i] = $scrids[$i] - 10000;
                 $name = $toolstype[$scrids[$i]]['name'];
			} 
			if($scrids[$i]>60000 && $scrids[$i]<70000){
				 $scrids[$i] = $scrids[$i] - 60000;
                 $name = $toolstype[$scrids[$i]]['name'];
			} 
			$s = ' ';
			$scrougestr = $scrougestr . $scrcots[$i] . $s  . $name;
			if ($i + 1 < count($scrids)) {
				$scrougestr = $scrougestr . ", ";
			} else {
				$scrougestr = $scrougestr . ", ";
			}
		}
		$msg = '"Đã mua ' . $scrougestr . ' với giá ' . $value['money'] . ' Xu."';
	
	}elseif($value['type'] == 10){
		$scrids = array();
		$scrids = explode(",", $value['iid']);
		$scrcots = array();
		$scrcots = explode(",", $value['count']);
		$scrougestr = "";
		for ($i = 0; $i < count($scrids); $i++) {
			if($scrids[$i]<10000){
				if($scrids[$i]==1506 || $scrids[$i]==10){
					$name = 'Phân';
				}else{
                 $name = $animaltype[$scrids[$i]]['bName'];
				
				}
			} else {
				 $scrids[$i] = $scrids[$i] - 10000;
                 $name = $animaltype[$scrids[$i]]['cName'];
			} 
			$s = ' ';
			$scrougestr = $scrougestr . $scrcots[$i] . $s  . $name;
			if ($i + 1 < count($scrids)) {
				$scrougestr = $scrougestr . ", ";
			} else {
				$scrougestr = $scrougestr . ", ";
			}
		}
		$msg = '"Đã mua ' . $scrougestr . ' với giá ' . $value['money'] . ' Xu."';
	} elseif($value['type'] == 4) {
		$msg = '"Đã chi ' . $value['money'] . ' xu để mua ' . $value['count'] . ' cỏ cho vào máy xay."';
	} elseif($value['type'] == 9) {
		$scrids = array();
		$scrids = explode(',', $value['iid']);
		$scrcots = array();
		$scrcots = explode(',', $value['count']);
		$scrougestr = '';
		for($i = 0; $i < count($scrids); $i++) {
			if($scrids[$i]<10000){
				if($scrids[$i]==1506 || $scrids[$i]==10){
				$name = 'Phân';
				}else{
                $name = $animaltype[$scrids[$i]]['bName'];
				}
			} else {
				$scrids[$i] = $scrids[$i] - 10000;
                $name = $animaltype[$scrids[$i]]['cName'];
			}
			$s = ' ';
			$scrougestr = $scrougestr . $scrcots[$i] . $s . $name;
			if($i + 1 < count($scrids)) {
				$scrougestr = $scrougestr . ', ';
			} else {
				$scrougestr = $scrougestr . ', ';
			}
		}
		$msg = '"Đã bán ' . $scrougestr . ' và nhận được ' . $value['money'] . ' Xu."';
	}
	if($cost) {
		$cost .= ',{"msg":' . $msg . ',"time":' . $value['time'] . '}';
	} else {
		$cost = '{"msg":' . $msg . ',"time":' . $value['time'] . '}';
	}
}

echo '{"code":1,"cost":['.$cost.']}';

?>