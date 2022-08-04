<?php

# Event Selection Function
# create by seaif@zealv.com

function qf_getFeed($type, $oid = 0, $url = '') {
	global $_QFG;
	//应用链接
	$app = "<b><a href='" . qf_getFeedurl($_QFG['uid']) . "'>Nông trại</a></b>";
	$appmc = "<b><a href='" . qf_getFeedurl($_QFG['uid']) . "'>Trang trại</a></b>";
	//自己链接
	$actor = "<a href=" . qf_getHomePage($_QFG['uid']) . ">" . $_QFG['uname'] . "</a>";
	//好友链接
	if($oid > 0) {
		$owner = "<a href=" . qf_getHomePage($oid) . ">" . qf_getUserName($oid) . "</a>";
	}
	//事件信息
	switch($type) {
		case 'user_init':
			$title = "{$actor} đã đầu tư xây dựng nông trại";
			$body = "Quyết tâm xóa đói giảm nghèo";
			break;
		case 'user_initmc':
			$title = "{$actor} đã đầu tư xây dựng trang trại";
			$body = "Làm giàu không khó,phải nỗ lực mới được";
			break;
		case 'cgi_post_product1':
			$title = "{$actor} đã thu hoạch sản phẩm chăn nuôi";
			$body = "Chăn nuôi vừa khéo vừa khôn<br />Quanh năm gà lợn xuất chuồng quanh năm";
			break;
		case 'cgi_post_product2':
			$title = "{$actor} đã lấy trộm sản phẩm chăn nuôi của {$owner}";
			$body = "Không lo làm mà cứ suốt ngày đi phá làng phá xóm";
			break;
		case 'cgi_harvest_product':
			$title = "{$actor} đã thu hoạch sản phẩm chăn nuôi";
			$body = "Chăn nuôi vừa khéo vừa khôn<br />Quanh năm gà lợn xuất chuồng quanh năm";
			break;
		case 'cgi_sale_product':
			$title = "{$actor} đã bán nông sản trong kho";
			$body = "Tậu trâu, cưới vợ, làm nhà.<br />Cả ba việc ấy đều là khó thay!";
		case 'cgi_feedcan':
			$title = "{$actor} đã cho vật nuôi ăn";
			$body = "Chăn nuôi vừa khéo vừa khôn<br />Quanh năm gà lợn xuất chuồng quanh năm";
			break;
		case 'cgi_help_pasture1':
			$title = "{$actor} đã vệ sinh khu vực chuồng trại";
			$body = "Chăn nuôi vừa khéo vừa khôn<br />Quanh năm gà lợn xuất chuồng quanh năm";
			break;
		case 'cgi_help_pasture2':
			$title = "{$actor} đã giúp {$owner} vệ sinh khu vực chuồng trại";
			$body = "Một người vì mọi người, mọi người vì một người";
			break;
		case 'cgi_help_pasture3':
			$title = "{$actor} đã diệt muỗi khu vực chuồng trại";
			$body = "Ai ơi chớ bỏ ruộng hoang<br />Bao nhiêu tất đất, tấc vàng bấy nhiêu";
			break;
		case 'cgi_help_pasture4':
			$title = "{$actor} đã giúp {$owner} diệt muỗi khu vực chuồng trại";
			$body = "Một người vì mọi người, mọi người vì một người";
			break;
		case 'farmlandstaus_clearweed1':
			$title = "{$actor} đã diệt cỏ hại cây";
			$body = "Ai ơi chớ bỏ ruộng hoang<br />Bao nhiêu tất đất, tấc vàng bấy nhiêu";
			break;
		case 'farmlandstaus_clearweed2':
			$title = "{$actor} đã giúp {$owner} diệt cỏ hại cây";
			$body = "Một người vì mọi người, mọi người vì một người";
			break;
		case 'farmlandstatus_fertilize':
			$title = "{$actor} đã bón phân cho cây trồng";
			$body = "Ai ơi chớ bỏ ruộng hoang<br />Bao nhiêu tất đất, tấc vàng bấy nhiêu";
			break;
		case 'farmlandstatus_harvest':
			$title = "{$actor} đã thu hoạch nông sản";
			$body = "Ai ơi bưng bát cơm đầy<br />Nhớ công hôm sớm cấy cày cho chăng?";
			break;
		case 'farmlandstatus_planting':
			$title = "{$actor} đã gieo hạt cho vụ mùa mới";
			$body = "Ai ơi chớ bỏ ruộng hoang<br />Bao nhiêu tất đất, tấc vàng bấy nhiêu";
			break;
		case 'farmlandstatus_scarify':
			$title = "{$actor} đã xới đất chuẩn bị cho vụ mùa mới";
			$body = "Ai ơi chớ bỏ ruộng hoang<br /> Bao nhiêu tất đất, tấc vàng bấy nhiêu";
			break;
		case 'farmlandstatus_spraying1':
			$title = "{$actor} đã phun thuốc trừ sâu hại";
			$body = "Ai ơi bưng bát cơm đầy<br />Nhớ công hôm sớm cấy cày cho chăng?";
			break;
		case 'farmlandstatus_spraying2':
			$title = "{$actor} đã giúp {$owner} phun thuốc trừ sâu hại";
			$body = "Một người vì mọi người, mọi người vì một người";
			break;
		case 'farmlandstatus_water1':
			$title = "{$actor} đã tưới nước cho cây";
			$body = "Ai ơi bưng bát cơm đầy<br />Nhớ công hôm sớm cấy cày cho chăng?";
			break;
		case 'farmlandstatus_water2':
			$title = "{$actor} đã giúp {$owner} tưới nước cho cây";
			$body = "Một người vì mọi người, mọi người vì một người";
			break;
		case 'farmlandstatus_sale':
			$title = "{$actor} đã bán một ít nông sản trong kho";
			$body = "Tậu trâu, cưới vợ, làm nhà.<br />Cả ba việc ấy đều là khó thay!";
			break;
		case 'farmlandstatus_saleall':
			$title = "{$actor} đã bán hết nông sản";
			$body = "Tậu trâu, cưới vợ, làm nhà.<br />Cả ba việc ấy đều là khó thay!";
			break;
		default:
			$title = "{$type}";
			$body = "Ai ơi chớ bỏ ruộng hoang! Bao nhiêu tất đất, tấc vàng bấy nhiêu.";
			break;
	}
	return array($title, $body);
}

?>