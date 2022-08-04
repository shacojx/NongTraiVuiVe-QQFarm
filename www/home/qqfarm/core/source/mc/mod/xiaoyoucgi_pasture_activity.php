<?php
# Mid-Autumn Festival celebrations 

$actid = (int)$_REQUEST['actid'];
$op = (int)$_REQUEST['op'];
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);

$list = $_QFG['db']->fetchOne('SELECT package,decorative,chris FROM app_qqfarm_nc where uid=' . $_QFG['uid']);
$list1 = $_QFG['db']->fetchOne('SELECT goods,decorative FROM app_qqfarm_mc where uid=' . $_QFG['uid']);

$package_nc = qf_decode($list['package']);
$decorative_nc = qf_decode($list['decorative']);

$goods_mc = qf_decode($list1['goods']);
$decorative_mc = qf_decode($list1['decorative']);

$money = 0;

if($actid==0){//Halloween candy sweet packs [167] 5
	if($op==0){
		if($npc[167]<5 ){
			die('{"errorContent":"Bạn chưa đủ điều kiện!","errorType":"logic","limit":[{"id":1,"num":'.(5-$npc[167] ).'}]}');
		} else {
			echo'{"code":1}';
		}
	} elseif($op==1){
		if( $npc[167]>4 ){
			$npc[167] -=5;

			foreach($npc as $key => $value) {
				if($value == 0) {
					unset($npc[$key]);
				}
			}
			$package_nc[164] +=1;


			$echo_all ='{"code":1}';
		} else {
			die('{"code":50,"errorContent":"Bạn chưa đủ điều kiện!"}');
		}
	}

} elseif ($actid==1){//Halloween candy, 55 packs, 55 crackers
	if($op==0){
		if($npc[1037]<5 ){
			die('{"errorContent":"Bạn chưa đủ điều kiện!","errorType":"logic","limit":[{"id":2,"num":'.(5-$npc[1037] ).'}]}');
		} else {
			echo'{"code":1}';
		}
	} elseif($op==1){
		if( $npc[1037]>4 ){
			$npc[1037] -=5;

			foreach($npc as $key => $value) {
				if($value == 0) {
					unset($npc[$key]);
				}
			}
			$goods_mc[1537] +=1;


			$echo_all ='{"code":1}';
		} else {
			die('{"code":50,"errorContent":"Bạn chưa đủ điều kiện!"}');
		}
	}

} elseif($actid==2){//Halloween candy, 55 packs, 55 crackers
	if($op==0){
		if($npc[167] <55 || $npc[1037] <55 ){
			die('{"errorContent":"Bạn chưa đủ điều kiện!","errorType":"logic","limit":[{"id":1,"num":'.(55-$npc[167] ).'},{"id":2,"num":'.(55-$npc[1037] ).'}]}');
		} else {
			echo'{"code":1}';
		}
	} elseif($op==1 && $npc['exchange_flag']!=1){
		if( $npc[167]>54 && $npc[1037]>54 ){
			$npc[167] -=55;
			$npc[1037] -=55;


			foreach($npc as $key => $value) {
				if($value == 0) {
					unset($npc[$key]);
				}
			}

			$package_nc[166] +=1;
			$goods_mc[1038] +=1;
			$money = 20000;
			$npc['exchange_flag'] = 1;

			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 665) {
						$buyed = 1;
						$decorative_nc[1][665]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[1][665]['status'] = 0;
				$decorative_nc[1][665]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 666) {
						$buyed = 1;
						$decorative_nc[2][666]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[2][666]['status'] = 0;
				$decorative_nc[2][666]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 667) {
						$buyed = 1;
						$decorative_nc[3][667]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[3][667]['status'] = 0;
				$decorative_nc[3][667]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 668) {
						$buyed = 1;
						$decorative_nc[4][668]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[4][668]['status'] = 0;
				$decorative_nc[4][668]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_mc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 135) {
						$buyed = 1;
						$decorative_mc['item1'][135]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_mc['item1'][135]['status'] = 0;
				$decorative_mc['item1'][135]['validtime'] = $_QFG['timestamp'] + 16070400;
			}
			
			$echo_all ='{"code":1,"money":20000}';

			$_QFG['db']->query("update app_qqfarm_nc set chris=922 where uid=".$_QFG['uid']);

		} else {
			die('{"code":50,"errorContent":"Bạn chưa đủ điều kiện!"}');
		}
	}

} else exit();

$_QFG['db']->query("update app_qqfarm_nc set package='".qf_encode($package_nc)."',decorative='".qf_encode($decorative_nc)."' where uid=".$_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_mc set goods='".qf_encode($goods_mc)."',decorative='".qf_encode($decorative_mc)."' where uid=".$_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "',money=money+".$money." where uid=" . $_QFG['uid']);

echo $echo_all;

?>