<?php
# 活动 

$actid = (int)$_REQUEST['actid'];
$op = (int)$_REQUEST['op'];

$list = $_QFG['db']->fetchOne('SELECT package,decorative,fruit,chris FROM app_qqfarm_nc where uid=' . $_QFG['uid']);
$list1 = $_QFG['db']->fetchOne('SELECT goods,decorative FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
$fruit = qf_decode($list['fruit']);
$package_nc = qf_decode($list['package']);
$decorative_nc = qf_decode($list['decorative']);

$goods_mc = qf_decode($list1['goods']);
$decorative_mc = qf_decode($list1['decorative']);

$money = 0;

if($actid==0){//Christmas gift Christmas cards Q [2002] 2, Santa Claus [2001] Card 1
	if($op==0){
		if($fruit['2001'] < 1 || $fruit['2002'] < 2 ){
			die('{"errorContent":"Bạn chưa đủ điều kiện!","errorType":"logic","limit":[{"id":2001,"num":'.(1-$fruit['2001']).'},{"id":2002,"num":'.(2-$fruit['2002']).'}]}');
		} else {
			echo'{"code":1}';
		}
	} elseif($op==1){
		if( $fruit['2001']>0 && $fruit['2002']>1 ){
			$fruit['2001'] -= 1;
			$fruit['2002'] -= 2;
			foreach($fruit as $key => $value) {
				if($value == 0) {
					unset($fruit[$key]);
				}
			}

			$package_nc['310'] += 1;
			$echo_all ='{"code":1}';

		} else {
			die('{"code":50,"errorContent":"Bạn chưa đủ điều kiện!"}');
		}
	}

} elseif ($actid==1){//Reindeer Christmas fun gift card [2005] 2, Santa Claus [2001] Card 1
	if($op==0){
		if($fruit['2001'] < 1 || $fruit['2005'] < 2 ){
			die('{"errorContent":"Bạn chưa đủ điều kiện!","errorType":"logic","limit":[{"id":2001,"num":'.(1-$fruit['2001']).'},{"id":2005,"num":'.(2-$fruit['2005']).'}]}');
		} else {
			echo'{"code":1}';
		}
	} elseif($op==1){
		if( $fruit['2001']>0 && $fruit['2005']>1 ){
			$fruit['2001'] -= 1;
			$fruit['2005'] -= 2;
			foreach($fruit as $key => $value) {
				if($value == 0) {
					unset($fruit[$key]);
				}
			}

			$goods_mc['1044'] += 1;
			$echo_all ='{"code":1}';

		} else {
			die('{"code":50,"errorContent":"Bạn chưa đủ điều kiện!"}');
		}
	}

} elseif($actid==2){//Christmas card Christmas gift-hyun [2002] 30, reindeer cards [2005] 30, Santa cards [2001] 10
	if($op==0){
		if( $fruit['2001']<10 || $fruit['2002']<30 || $fruit['2005']<30){
			die('{"errorContent":"Bạn chưa đủ điều kiện!","errorType":"logic","limit":[{"id":2002,"num":'.(30-$fruit['2002']).'},{"id":2005,"num":'.(30-$fruit['2005']).'},{"id":2001,"num":'.(10-$fruit['2001']).'}]}');
			
		} else {
			echo'{"code":1}';
		}
	} elseif($op==1 && $list['chris']!=20101225){
		if( $fruit['2001']>9 && $fruit['2002']>29 && $fruit['2005']>29 ){
			$fruit['2001'] -=10;
			$fruit['2002'] -=30;
			$fruit['2005'] -=30;

			foreach($fruit as $key => $value) {
				if($value == 0) {
					unset($fruit[$key]);
				}
			}

			$package_nc[314] +=5;
			$goods_mc[1043] +=5;
			$money = 2010;


			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 737) {
						$buyed = 1;
						$decorative_nc[1][737]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[1][737]['status'] = 0;
				$decorative_nc[1][737]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 738) {
						$buyed = 1;
						$decorative_nc[2][738]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[2][738]['status'] = 0;
				$decorative_nc[2][738]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 739) {
						$buyed = 1;
						$decorative_nc[3][739]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[3][739]['status'] = 0;
				$decorative_nc[3][739]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 740) {
						$buyed = 1;
						$decorative_nc[4][740]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[4][740]['status'] = 0;
				$decorative_nc[4][740]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_mc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 151) {
						$buyed = 1;
						$decorative_mc['item1'][151]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_mc['item1'][151]['status'] = 0;
				$decorative_mc['item1'][151]['validtime'] = $_QFG['timestamp'] + 16070400;
			}
			
			$echo_all ='{"code":1,"money":2010}';

			$_QFG['db']->query("update app_qqfarm_nc set chris=20101225 where uid=".$_QFG['uid']);

		} else {
			die('{"code":50,"errorContent":"Bạn chưa đủ điều kiện!"}');
		}
	}

} elseif($actid==3){//Xuemei Fragrance Package Snowman Card [2004] 2, New Year cards [2003] 1
	if($op==0){
		if($fruit['2003'] < 1 || $fruit['2004'] < 2 ){
			die('{"errorContent":"Bạn chưa đủ điều kiện!","errorType":"logic","limit":[{"id":2003,"num":'.(1-$fruit['2003']).'},{"id":2004,"num":'.(2-$fruit['2004']).'}]}');
		} else {
			echo'{"code":1}';
		}
	} elseif($op==1){
		if( $fruit['2003']>0 && $fruit['2004']>1 ){
			$fruit['2003'] -= 1;
			$fruit['2004'] -= 2;
			foreach($fruit as $key => $value) {
				if($value == 0) {
					unset($fruit[$key]);
				}
			}

			$package_nc['309'] += 1;
			$echo_all ='{"code":1}';

		} else {
			die('{"code":50,"errorContent":"Bạn chưa đủ điều kiện!"}');
		}
	}

} elseif ($actid==4){//Snowman card package Egret Jixiang Li [2004] 2, New Year cards [2003] 1
	if($op==0){
		if($fruit['2003'] < 1 || $fruit['2004'] < 2 ){
			die('{"errorContent":"Bạn chưa đủ điều kiện!","errorType":"logic","limit":[{"id":2003,"num":'.(1-$fruit['2003']).'},{"id":2004,"num":'.(2-$fruit['2004']).'}]}');
		} else {
			echo'{"code":1}';
		}
	} elseif($op==1){
		if( $fruit['2003']>0 && $fruit['2004']>1 ){
			$fruit['2003'] -= 1;
			$fruit['2004'] -= 2;
			foreach($fruit as $key => $value) {
				if($value == 0) {
					unset($fruit[$key]);
				}
			}

			$goods_mc['1544'] += 1;
			$echo_all ='{"code":1}';

		} else {
			die('{"code":50,"errorContent":"Bạn chưa đủ điều kiện!"}');
		}
	}

} elseif($actid==5){//Hyun gift card Christmas Snowman [2004] 30, New Year cards [2003] 10
	if($op==0){
		if( $fruit['2003']<10 || $fruit['2004']<30 ){
			die('{"errorContent":"Bạn chưa đủ điều kiện!","errorType":"logic","limit":[{"id":2004,"num":'.(30-$fruit['2004']).'},{"id":2003,"num":'.(10-$fruit['2003']).'}]}');
			
		} else {
			echo'{"code":1}';
		}
	} elseif($op==1 && $list['chris']!=20110101){
		if( $fruit['2003']>9 && $fruit['2004']>29 ){
			$fruit['2003'] -=10;
			$fruit['2004'] -=30;

			foreach($fruit as $key => $value) {
				if($value == 0) {
					unset($fruit[$key]);
				}
			}

			$package_nc[82] +=6;
			$goods_mc[1543] +=3;
			$money = 6666;


			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 753) {
						$buyed = 1;
						$decorative_nc[1][753]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[1][753]['status'] = 0;
				$decorative_nc[1][753]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 754) {
						$buyed = 1;
						$decorative_nc[2][754]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[2][754]['status'] = 0;
				$decorative_nc[2][754]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 755) {
						$buyed = 1;
						$decorative_nc[3][755]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[3][755]['status'] = 0;
				$decorative_nc[3][755]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_nc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 756) {
						$buyed = 1;
						$decorative_nc[4][756]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_nc[4][756]['status'] = 0;
				$decorative_nc[4][756]['validtime'] = $_QFG['timestamp'] + 16070400;
			}

			foreach((array)$decorative_mc as $item_type => $value) {
				foreach((array)$value as $key1 => $value1) {
					if($key1 == 157) {
						$buyed = 1;
						$decorative_mc['item1'][157]['validtime'] += 16070400;
					}
				}
			}
			if(!$buyed) {
				$decorative_mc['item1'][157]['status'] = 0;
				$decorative_mc['item1'][157]['validtime'] = $_QFG['timestamp'] + 16070400;
			}
			
			$echo_all ='{"code":1,"money":6666}';

			$_QFG['db']->query("update app_qqfarm_nc set chris=20110101 where uid=".$_QFG['uid']);

		} else {
			die('{"code":50,"errorContent":"Bạn chưa đủ điều kiện!"}');
		}
	}

} else exit();

$_QFG['db']->query("update app_qqfarm_nc set package='".qf_encode($package_nc)."',fruit='".qf_encode($fruit)."',decorative='".qf_encode($decorative_nc)."' where uid=".$_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_mc set goods='".qf_encode($goods_mc)."',decorative='".qf_encode($decorative_mc)."' where uid=".$_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+".$money." where uid=" . $_QFG['uid']);

echo $echo_all;

?>