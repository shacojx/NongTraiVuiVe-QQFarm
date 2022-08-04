<?php
// Upgrade Red Land

# Update the necessary experience and money

$list = $_QFG['db']->fetchOne("
	SELECT U.uid,U.money,N.status,N.reclaim,N.exp,N.redland FROM app_qqfarm_user U
		Left JOIN app_qqfarm_nc N ON N.uid=U.uid where U.uid={$_QFG['uid']}
");
$money = $list['money'];
$status = qf_decode($list['status']);
$level =  qf_toLevel($list['exp']);
$reclaim = $list['reclaim'];
$redland = $list['redland'];
if($redland >=18) {
	die('{"code":888,"direction":"Chúc mừng bạn đã nâng cấp đất đỏ thành công!"}');
}

# Get the location of the land to upgrade the red
foreach($status as $key=>$value) {
	if(!$value['bitmap'] || $value['bitmap']==0){
		$place = $key;
		break;
	}
}
isset($place) || die('{"code":0,"direction":"Lỗi tham số!"}');

$upmoney = $upgrade[$place]['money'];
$uplevel = $upgrade[$place]['level'];

if($_REQUEST['confirm'] == 1) {
	if($money < $upmoney && $level < $uplevel && $reclaim < 18 && $redland <=18){
		die('{"code":0,"direction":"Xin vui lòng không sử dụng chương trình gian lận để nâng cấp đất đỏ!"}');
	} else {
		$status[$place]['bitmap'] = 1;
		$status[$place]['pId'] = 0;
		if($status[$place]['k']>0){
			$status[$place]['k'] = intval($status[$place]['k']*(1+0.1)); 
			$status[$place]['m'] = intval($status[$place]['m']*(1+0.1));
		}
		$_QFG['db']->query("UPDATE app_qqfarm_user set money=money-".$upmoney." where uid=".$_QFG['uid']);
		$_QFG['db']->query("UPDATE app_qqfarm_nc set Status='".json_encode(array_values($status))."' , redland= '".($place+1)."' where uid=".$_QFG['uid']);
		die( '{"code":1,"place":'.$place.',"output":'.$status[$place]['k'].',"leavings":'.$status[$place]['m'].',"min":'.$status[$place]['l'].',"money":-'.$upmoney.',"direction":"Chúc mừng bạn đã nâng cấp đất đỏ thành công!"}');
	}
} elseif($reclaim >=18 && $money >= $upmoney && $level >= $uplevel) {
	die('{"code":1,"direction":"<font size=\'14\'><b>Sau khi nâng cấp thành đất đỏ: </b></font><br />1.Có thể trồng các loại hạt giống đất đỏ có <font color=\"#FF6600\">năng suất cao</font>!<br />2.Sản lượng nông sản thu hoạch được tăng <font color=\"#FF6600\">10%</font><br />3.Có thể trồng <font color=\"#FF6600\">các loại cây quý hiếm</font><br />4.Khi thu hoạch nông sản, có cơ hội nhận <font color=\"#FF6600\">các phần thưởng có giá trị</font>Và nhiều điều thú vị khác đang chờ bạn!<br /><br /><b><font color=\"#399200\">Nâng cấp lần <font color=\"#FF6600\">'.($place+1).'</font> cần đạt <font color=\"#FF6600\">cấp '.$uplevel.'</font> và có <font color=\"#FF6600\">'.$upmoney.' xu</font></font></b>"}');
} else {
	if($reclaim < 18) {
		$ta='Bạn cần phải mở rộng tất cả các ô đất đã';
	}
	if($money < $upmoney && $level < $uplevel) {
		$ta='Chưa đủ điều kiện';
	} else {
		$level < $uplevel && $ta='Chưa đạt cấp độ yêu cầu';
		$money < $upmoney && $ta='Chưa đủ tiền';
	} 
	die('{"code":888,"direction":"<font size=\'14\'><b>Sau khi nâng cấp thành đất đỏ: </b></font><br />1.Có thể trồng các loại hạt giống đất đỏ có <font color=\"#FF6600\">năng suất cao</font>!<br />2.Sản lượng nông sản thu hoạch được tăng <font color=\"#FF6600\">10%</font><br />3.Có thể trồng <font color=\"#FF6600\">các loại cây quý hiếm</font><br />4.Khi thu hoạch nông sản, có cơ hội nhận <font color=\"#FF6600\">các phần thưởng có giá trị</font>Và nhiều điều thú vị khác đang chờ bạn!<br /><br /><b><font color=\"#399200\">Nâng cấp lần <font color=\"#FF6600\">'.$uplevel.'</font> cần có <font color=\"#FF6600\">'.$upmoney.'</font> xu'.$ta.'</font></b>"}');
}

?>
