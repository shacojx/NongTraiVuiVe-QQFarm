<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );
$op = $_GET['op'] ? $_GET['op'] : 'main';

if($op == 'change'){
	$id = intval($_GET['id']);
	$my_house = get_house($id);
	if(empty($my_house)) showmessage('Sai! yêu cầu gửi dữ liệu bất hợp pháp', 'house.php?ac=house', 2);
	if(isset($_POST['myFormAc']) && $_POST['myFormAc'] == 'update') buyhouse_change_house($my_house);
}elseif($op == 'main'){
	if(isset($_POST['myFormAc']) && $_POST['myFormAc'] == 'update'){
		header('Content-type: text/xml');
		ajax_out(jsonencode(buyhouse_buy_house($uid)));
	}
}
$data = get_house_kind();
$total = count($data);
realname_get();
include_once( template( "house/view/buyhouse" ));

function buyhouse_change_house($my_house)
{
	global $house_db, $status;
	$cid = intval($_POST['cid']);
	$url = "house.php?ac=buyhouse&op=change&id=" . $my_house['id'];
	if(array_key_exists($cid, $house_db) === false) showmessage('Sai! yêu cầu gửi dữ liệu bất hợp pháp', $url, 2);
	if($house_db[$my_house['cid']]['buy'] * 0.8 + $status['money'] < $house_db[$cid]['buy']) showmessage('Sai! Giảm sau khi ngôi nhà cũ của bạn không đủ tiền mặt để mua nhà mới của bạn rằng', $url, 5);
	query_exec("update  ".tname("app_love_house")." set cid = '{$cid}' where id = '{$my_house['id']}'");
	$money = $house_db[$cid]['buy'] - $house_db[$my_house['cid']]['buy'] * 0.8;
	query_exec("update  ".tname("app_love_user")." set money = money - {$money} where uid = '{$my_house['uid']}'");
	showmessage('Xin chúc mừng! Đối với một ngôi nhà mới, tôi chúc bạn tăng cao hơn và cao hơn, thịnh vượng và Good Luck！', 'house.php?ac=house', 3);
}

function buyhouse_buy_house($uid)
{
	global $house_config, $house_kind, $_SN;
	$cid = intval($_GET['cid']);
	$house = get_house_kind_one($cid);
	if(!$house) return array(404, '<p>yêu cầu gửi dữ liệu bất hợp pháp！</p>');
	$house_money =  $house['buy'];
	$tax_money = intval($house_money * $house_config['tax'] / 100);
	$my_money = get_my_money($uid);
	$total = $tax_money + $house_money;
	if($my_money < $total)  return array(404, "<p>Bạn có đủ tiền mặt để mua nhà ở hiện hành.</p><p>Bạn hiện có tiền mặt {$my_money} Tiền xu vàng</p><p>{$house['title']} Giá trị gia tăng {$house_money}Vàng, cần phải nộp thuế {$tax_money}Vàng, sẽ yêu cầu tổng cộng {$total}Vàng</p>");
	$param = array(
		'cid'=>$cid,
		'uid'=>$uid,
		'name'=> $house_kind[$cid],
		'status'=>1
	);
	inserttable('app_love_house', $param, false);
	query_exec("update  ".tname("app_love_user")." set money = money - {$total}, house_num = house_num + 1 where uid = '{$uid}'");

	realname_get();
	/*add news*/
	$data = array($uid, $_SN[$uid], $total, $house_kind[$cid]);
	news::add($data , 5, 7);

	/*add feeds*/
	$data = array(
		'money'=>$total,
		'house'=>$house_kind[$cid]
	);
	feeds::add($data, 7);

	return array(200, "<p>Xin chúc mừng, bạn mua một ngôi nhà mới！<script type='text/javascript'>setTimeout(function(){window.location.href='house.php?ac=house';}, 1000);</script></p>");
}

function get_my_money($uid)
{
	$temp = query_one("select money from ".tname("app_love_user")." where uid = '{$uid}' ");
	return $temp['money'];
}

function get_house_kind_one($cid)
{
	$temp = query_one("select buy from ".tname("app_love_house_kind")." where cid = '{$cid}' ");
	return empty($temp) ? false : $temp;
}
?>