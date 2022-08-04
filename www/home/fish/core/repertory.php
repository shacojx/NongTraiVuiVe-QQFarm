<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$auth && die($auth);
include_once("source/ui/fish.php");

# Cá 3D
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="getblist" && $_REQUEST['type']=="3") {
	$fishtype3 = array();
	foreach($fishtype as $value) {
		if( $value['bt']==3 ) {
			$fishtype3[] = $value;
		}
	}
	$echo_str = ui_jsonCode(array_values($fishtype3));
	die($echo_str);
}

# Cửa hàng (mua cá giống để nuôi)
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="getblist") {
	$fishtype2 = array();
	foreach($fishtype as $value) {
		if( $value['bt']==2 ) {
			$fishtype2[] = $value;
		}
	}
	$echo_str = ui_jsonCode(array_values($fishtype2));
	die($echo_str);
}

# gohooh1002
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="buyb") {
	$b = (int)$_REQUEST['b'];
	$num = (int)$_REQUEST['num'];
	# gohooh1003
	 if($_REQUEST['f']==0){
		$list = $_HFG['db']->fetchOne("SELECT money,package FROM app_fish_ui where uid=" . $_HFG['uid']);
		$money = $list['money'];
		$package = qf_decode($list['package']);
		$moneytotal = $num*$fishtype[$b]['price'];
		if($money<$moneytotal) {
			die('{"b":'.$b.',"code":0,"d":"gohooh130"}');
		}
		$package[$b] += $num;

		$_HFG['db']->query("UPDATE app_fish_ui set package='" . qf_encode($package) . "',money=money-" . $moneytotal . " where uid=" . $_HFG['uid']);

		die('{"b":'.$b.',"code":1,"bn":"'.$fishtype[$b]["bn"].'","num":'.$num.',"m":-'.$moneytotal.',"f":0}');
	 }

	 # gohooh1004
	if($_REQUEST['f']==1) {
		$list = $_HFG['db']->fetchOne("SELECT yb,package FROM app_fish_ui where uid=" . $_HFG['uid']);
		$yb = $list['yb'];
		$package = qf_decode($list['package']);
		$ybtotal = $num*$fishtype[$b]['fprice'];
		if($yb<$ybtotal) {
			die('{"b":'.$b.',"code":0,"d":"gohooh131"}');
		}
		$package[$b] += $num;
		$_HFG['db']->query("UPDATE app_fish_ui set package='" . qf_encode($package) . "',yb=yb-" . $ybtotal . " where uid=" . $_HFG['uid']);
		die('{"b":'.$b.',"code":1,"bn":"'.$fishtype[$b]["bn"].'","num":'.$num.',"m":0,"f":-'.$ybtotal.'}');
	}
}



# Cửa hàng Magic
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="gettlist") {
	$echo_str = ui_jsonCode(array_values($toolstype));
	die($echo_str);
}

# Mua Magic
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="buyt") {
	$t = (int)$_REQUEST['t'];
	$num = (int)$_REQUEST['num'];
	# Tiền vàng để mua Magic
	 if($_REQUEST['f']==0){
		$list = $_HFG['db']->fetchOne("SELECT money,tools FROM app_fish_ui where uid=" . $_HFG['uid']);
		$money = $list['money'];
		$tools = qf_decode($list['tools']);
		$moneytotal = $num*$toolstype[$t]['price'];
		if($money<$moneytotal) {
			die('{"t":'.$t.',"code":0,"d":"gohooh133"}');
		}
		$tools[$t] += $num;

		$_HFG['db']->query("UPDATE app_fish_ui set money=money-" . $moneytotal . ",tools='" . qf_encode($tools) . "' where uid=" . $_HFG['uid']);
		
		die('{"t":'.$t.',"code":1,"num":'.$num.',"m":-'.$moneytotal.',"f":0,"e":0,"d":"gohooh134 '.$num.' \u4efd '.$toolstype[$t]["tn"].'","levelup":false}');
	}
	 # Tiền xu để mua Magic
	 if($_REQUEST['f']==1){
		$list = $_HFG['db']->fetchOne("SELECT yb,tools FROM app_fish_ui where uid=" . $_HFG['uid']);
		$yb = $list['yb'];
		$tools = qf_decode($list['tools']);
		$ybtotal = $num*$toolstype[$t]['fprice'];
		if($yb<$ybtotal) {
			die('{"t":'.$t.',"code":0,"d":"gohooh135"}');
		}
		$tools[$t] += $num;

		$_HFG['db']->query("UPDATE app_fish_ui set yb=yb-" . $ybtotal . ",tools='" . qf_encode($tools) . "' where uid=" . $_HFG['uid']);

		die('{"t":'.$t.',"poptype":0,"code":1,"num":'.$num.',"m":0,"f":-'.$ybtotal.',"e":0,"d":"gohooh136 '.$num.' \u4efd '.$toolstype[$t]["tn"].'","levelup":false}');
	}
}

# Mua cần câu
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="buyfr") {
	$t = (int)$_REQUEST['ri'];
	# Tiền vàng để mua cần câu
	 if($_REQUEST['f']==0){
		$list = $_HFG['db']->fetchOne("SELECT money,fr FROM app_fish_ui where uid=" . $_HFG['uid']);
		$money = $list['money'];
		$fr_arr = qf_decode($list['fr']);
		$moneytotal = $toolstype[$t]['price'];	
		if($money<$moneytotal) {
			die('{"t":'.$t.',"code":0,"d":"gohooh137"}');
		}
		$fr_arr['fr'] =	 $toolstype[$t]['effect'] ;
		$fr_arr['time'] = $_HFG['timestamp'] + $toolstype[$t]['timelimit'] ;
		$_HFG['db']->query("UPDATE app_fish_ui set money=money-" . $moneytotal . ",fr='" . qf_encode($fr_arr) . "' where uid=" . $_HFG['uid']);
		
		die('{"code":1,"d":"","re":'.$fr_arr['fr'].',"rt":'.$t.',"rn":"'.$toolstype[$t]['tn'].'","m":-'.$moneytotal.',"f":0}');
	}
	 # Tiền xu để mua cần câu
	 if($_REQUEST['f']==1){
		$list = $_HFG['db']->fetchOne("SELECT yb,fr FROM app_fish_ui where uid=" . $_HFG['uid']);
		$yb = $list['yb'];
		$fr_arr = qf_decode($list['fr']);
		$ybtotal = $toolstype[$t]['price'];	
		if($yb<$ybtotal) {
			die('{"t":'.$t.',"code":0,"d":"gohooh138"}');
		}
		$fr_arr['fr'] =	 $toolstype[$t]['effect'] ;
		$fr_arr['time'] = $_HFG['timestamp'] + $toolstype[$t]['timelimit'] ;
		$_HFG['db']->query("UPDATE app_fish_ui set yb=yb-" . $ybtotal . ",fr='" . qf_encode($fr_arr) . "' where uid=" . $_HFG['uid']);
		
		die('{"code":1,"d":"","re":'.$fr_arr['fr'].',"rt":'.$t.',"rn":"'.$toolstype[$t]['tn'].'","m":0,"f":-'.$ybtotal.'}');
	}
}

# Mua chó
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="buyd") {
	$t = (int)$_REQUEST['t'];
	$num = (int)$_REQUEST['num'];
	# Tiền vàng để mua chó
	 if($_REQUEST['f']==0){
		$list = $_HFG['db']->fetchOne("SELECT money,dog FROM app_fish_ui where uid=" . $_HFG['uid']);
		$money = $list['money'];
		$dog = qf_decode($list['dog']);
		$moneytotal = $toolstype[$t]['price'];		
		if($money<$moneytotal) {
			die('{"t":'.$t.',"code":0,"d":"gohooh139"}');
		}

		$dog['t'] = $t;
		$dog['ds']	= 'f';
		$dog['dt'] = $_HFG['timestamp']+4*24*3600;
		$_HFG['db']->query("UPDATE app_fish_ui set money=money-" . $moneytotal . ",dog='" . qf_encode($dog) . "' where uid=" . $_HFG['uid']);
		
		die('{"t":'.$t.',"poptype":0,"code":1,"num":'.$num.',"m":-'.$moneytotal.',"f":0,"e":0,"d":"","levelup":false}');
	}
	 # Tiền xu để mua chó
	 if($_REQUEST['f']==1){
		$list = $_HFG['db']->fetchOne("SELECT yb,dog FROM app_fish_ui where uid=" . $_HFG['uid']);
		$yb = $list['yb'];
		$dog = qf_decode($list['dog']);
		$ybtotal = $toolstype[$t]['fprice'];		
		if($yb<$ybtotal) {
			die('{"t":'.$t.',"code":0,"d":"gohooh140"}');
		}

		$dog['t'] = $t;
		$dog['ds']	= 'f';
		$dog['dt'] = $_HFG['timestamp']+4*24*3600;
		$_HFG['db']->query("UPDATE app_fish_ui set yb=yb-" . $ybtotal . ",dog='" . qf_encode($dog) . "' where uid=" . $_HFG['uid']);
		
		die('{"t":'.$t.',"poptype":0,"code":1,"num":'.$num.',"m":0,"f":-'.$ybtotal.',"e":0,"d":"","levelup":false}');
	}
}

# Mua thức ăn chó
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="buydf") {
	$t = (int)$_REQUEST['t'];
	$num = (int)$_REQUEST['num'];
	# Tiền vàng để mua thức ăn chó
	 if($_REQUEST['f']==0){
		$list = $_HFG['db']->fetchOne("SELECT money,dog FROM app_fish_ui where uid=" . $_HFG['uid']);
		$money = $list['money'];
		$dog = qf_decode($list['dog']);
		$moneytotal = $num*$toolstype[$t]['price'];
		$effecttotal = $num*$toolstype[$t]['effect'];	
		if($money<$moneytotal) {
			die('{"t":'.$t.',"code":0,"d":"gohooh1401"}');
		}
	
		if($dog['dt']<$_HFG['timestamp']) {
			$dog['dt'] = $_HFG['timestamp'] + $effecttotal;
		} else {
			$dog['dt'] +=  $effecttotal;
		}
		$_HFG['db']->query("UPDATE app_fish_ui set money=money-" . $moneytotal . ",dog='" . qf_encode($dog) . "' where uid=" . $_HFG['uid']);
		
		die('{"t":'.$t.',"poptype":0,"code":1,"num":'.$num.',"m":-'.$moneytotal.',"f":0,"e":0,"d":"","levelup":false}');
	}
	 # Tiền xu để mua thức ăn chó
	 if($_REQUEST['f']==1){
		$list = $_HFG['db']->fetchOne("SELECT yb,dog FROM app_fish_ui where uid=" . $_HFG['uid']);
		$yb = $list['yb'];
		$dog = qf_decode($list['dog']);
		$ybtotal = $num*$toolstype[$t]['price'];
		$effecttotal = $num*$toolstype[$t]['effect'];	
		if($yb<$ybtotal) {
			die('{"t":'.$t.',"code":0,"d":"gohooh145"}');
		}
	
		if($dog['dt']<$_HFG['timestamp']) {
			$dog['dt'] = $_HFG['timestamp'] + $effecttotal;
		} else {
			$dog['dt'] +=  $effecttotal;
		}
		$_HFG['db']->query("UPDATE app_fish_ui set yb=yb-" . $ybtotal . ",dog='" . qf_encode($dog) . "' where uid=" . $_HFG['uid']);
		
		die('{"t":'.$t.',"poptype":0,"code":1,"num":'.$num.',"m":0,"f":-'.$ybtotal.',"e":0,"d":"","levelup":false}');
	}
}

# Cửa hàng trang trí
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="getilist") {
	$echo_str = ui_jsonCode(array_values($itemtype));
	die($echo_str);
}

# Mua item trang trí
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="buyitem") {
	$itemid = (int)$_REQUEST['i'];

	# Tiền vàng để mua item trang trí
	if($_REQUEST['f']==0){
		$list = $_HFG['db']->fetchOne("SELECT money,decorative FROM app_fish_ui where uid=" . $_HFG['uid']);
		$money = $list['money'];
		$decorative = qf_decode($list['decorative']);

		$buy_money = $itemtype[$itemid]['m'];
		$buy_time = $itemtype[$itemid]['lc'];
		$buy_type = $itemtype[$itemid]['t'];
		$buy_exp = $itemtype[$itemid]['e'];
		if($money < $buy_money) {
			die('{"code":0,"d":"gohooh146"}');
		}

		foreach($decorative as $item_type => $value) {
			if($buy_type == $item_type) {
				foreach($value as $key => $value1) {
					if($key == $itemid) {
						die('{"d":"gohooh147"}');
					} else {
						$dec = 1;
						$decorative[$item_type][$itemid]['status'] = 1;
						$decorative[$item_type][$itemid]['validtime'] = $_HFG['timestamp'] + $buy_time;
					}
				}
				if($dec) {
					foreach($value as $key => $value1) {
						if($key != $itemid) $decorative[$item_type][$key]['status'] = 0;
					}
				}
			}
		}

		$_HFG['db']->query("UPDATE app_fish_ui set money=money - " . $buy_money . ",exp = exp + " . $buy_exp . ",decorative='" . qf_encode($decorative) . "' where uid=" . $_HFG['uid']);
		
		die('{"code":1,"e":' . $buy_exp . ',"m":-' . $buy_money . ',"levelUp":false,"d":"gohooh148 '.$itemtype[$itemid]['in'].'" }');
	 }

	# Tiền xu để mua item trang trí
	if($_REQUEST['f']==1){
		$list = $_HFG['db']->fetchOne("SELECT yb,decorative FROM app_fish_ui where uid=" . $_HFG['uid']);
		$yb = $list['yb'];
		$decorative = qf_decode($list['decorative']);

		$buy_yb = $itemtype[$itemid]['f'];
		$buy_time = $itemtype[$itemid]['lc'];
		$buy_type = $itemtype[$itemid]['t'];
		$buy_exp = $itemtype[$itemid]['e'];
		if($yb < $buy_yb) {
			die('{"code":0,"d":"gohooh149"}');
		}

		foreach($decorative as $item_type => $value) {
			if($buy_type == $item_type) {
				foreach($value as $key => $value1) {
					if($key == $itemid) {
						die('{"d":"gohooh150"}');
					} else {
						$dec = 1;
						$decorative[$item_type][$itemid]['status'] = 1;
						$decorative[$item_type][$itemid]['validtime'] = $_HFG['timestamp'] + $buy_time;
					}
				}
				if($dec) {
					foreach($value as $key => $value1) {
						if($key != $itemid) $decorative[$item_type][$key]['status'] = 0;
					}
				}
			}
		}

		$_HFG['db']->query("UPDATE app_fish_ui set yb=yb - " . $buy_yb . ",exp = exp + " . $buy_exp . ",decorative='" . qf_encode($decorative) . "' where uid=" . $_HFG['uid']);
		
		die('{"code":1,"e":' . $buy_exp . ',"f":-' . $buy_yb . ',"levelUp":false,"d":"gohooh151 '.$itemtype[$itemid]['in'].'" }');
	 }
}

# Người sử dụng trang trí
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="getuseritems") {

	$decorative = $_HFG['db']->result("SELECT decorative FROM app_fish_ui where uid=" . $_HFG['uid']);
	$decorative = qf_decode($decorative);
	foreach($decorative as $item_type => $value) {
		foreach($value as $key => $value1) {
			if($value1['validtime'] > $_HFG['timestamp'] || $value1['validtime'] == 1) {
				if($key == 11001) {
					$get_itemName = 'Bờ sông Nhà Tui';
					$validTime = 2000000000;
				} elseif($key == 12001) {
					$get_itemName = 'Nhà Tui';
					$validTime = 2000000000;
				} elseif($key == 13001) {
					$get_itemName = 'Thuyền phao Nhà Tui';
					$validTime = 2000000000;
				} elseif($key == 14001) {
					$get_itemName = 'Vòi phun Nhà Tui';
					$validTime = 2000000000;
				} else {
					$get_itemName = $itemtype[$key]['in'];
					$validTime = $value1['validtime'];
				}
				$decorative_str[] = '{"i":' . $key . ',"in":"' . $get_itemName . '","lc":' . $validTime . ',"bt":0,"et":' . $validTime . ',"use":' . $value1['status'] . '}';
			}
		}
	}

echo '[' . implode(',', $decorative_str) . ']';
}

# Ba lô ngư dân
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="getusergoods") {
	$list = $_HFG['db']->fetchOne("SELECT package,tools FROM app_fish_ui where uid=" . $_HFG['uid']);
	$package = qf_decode($list['package']);
	foreach($package as $key => $value) {
		$hour = ($cropstype[$key]['growthCycle']) / 3600;
		if(0 < $value) {
			$packagearr[] = '{"type":1,"b":' . $key . ',"bn":"' . $fishtype[$key]["bn"] . '","amount":' . $value . '}';
		}
	}

	$tools = qf_decode($list['tools']);
	foreach($tools as $key => $value) {
		if(0 < $value && $key < 500) {
			$packagearr[] = '{"type":2,"t":' . $key . ',"tn":"' . $toolstype[$key]["tn"] . '","amount":' . $value . '}';	
		}
	}

	echo '[' . implode(',', (array)$packagearr) . ']';

}

# Người dùng Coulomb
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="getuserhavest") {
	$fruit = $_HFG['db']->result("SELECT fruit FROM app_fish_ui where uid=" . $_HFG['uid']);
	$fruit = qf_decode($fruit);
	$fruitarr = array();
	foreach($fruit as $key => $value) {
		if(0 < $value) {
			$fruitarr[] = '{"b":' . $key . ',"bn":"' . $fishtype[$key]['bn'] . '","amount":' . $value . ',"sale":' . $fishtype[$key]['sale'] . '}';	
		}
	}
	if($fruitarr) {
		$fruitarr = '[' . implode(',', $fruitarr) . ']';
	} else {
		$fruitarr = '[]';
	}

	echo $fruitarr;

}

# Bán
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="sale") {

	$fruit = $_HFG['db']->result("SELECT fruit FROM app_fish_ui where uid=" . $_HFG['uid']);
	$fruit = qf_decode($fruit);
	if($fruit[$_REQUEST['b']] < $_REQUEST['num']) {
		die('{"b":0,"code":0,"d":"gohooh156"}');
	}

	$fruit[$_REQUEST['b']] -= $_REQUEST['num'];
	foreach($fruit as $key => $value) {
		if($value == 0) {
			unset($fruit[$key]);
		}
	}
	$_HFG['db']->query("UPDATE app_fish_ui set money=money+" . $fishtype[$_REQUEST['b']][sale] * $_REQUEST['num'] . ",fruit='" . qf_encode($fruit) . "' where uid=" . $_HFG['uid']);

	die('{"b":"'.$_REQUEST['b'].'","code":1,"d":"gohooh157<b>'.$fishtype[$_REQUEST['b']]['sale'] * $_REQUEST['num'].'<\\\/b>gohooh158","e":0,"m":'.$fishtype[$_REQUEST['b']]['sale'] * $_REQUEST['num'].'}');

}

# Bán hết
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="saleall") {

	$fruit = $_HFG['db']->result("SELECT fruit FROM app_fish_ui where uid=" . $_HFG['uid']);
	$fruit = qf_decode($fruit);
	$money = 0;
	foreach($fruit as $key => $value) {
		if(0 < $value ) {
			$money = $money + $fishtype[$key]['sale'] * $value;
			unset($fruit[$key]);
		}
	}
	$_HFG['db']->query("UPDATE app_fish_ui set money=money+" . $money . ",fruit='" . qf_encode($fruit) . "' where uid=" . $_HFG['uid']);

	die( '{"code":1,"d":"gohooh159<b>'.$money.'<\\\/b>\gohooh160","e":0,"m":'.$money.'}');

}

# Làm sạch ao cá
if($_REQUEST['mod']=="repertory" && $_REQUEST['act']=="cleanb") {
	$a = (int)$_REQUEST['a'];
	$bstatus = $_HFG['db']->result("SELECT bstatus FROM app_fish_ui where uid=" . $_HFG['uid']);
	$bstatus = qf_decode($bstatus);
	$exp = 2;
	if($bstatus[$a]['c']!=5){
	$exp = 0;
	} 
	$bstatus[$a]['b'] = 0;
	$bstatus[$a]['c'] = 0;

	$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus)) . "', exp=exp+".$exp ."  where uid=" . $_HFG['uid']);


	die('{"a":'.$a.',"code":1,"e":'.$exp .',"levelup":false}');
}
?>