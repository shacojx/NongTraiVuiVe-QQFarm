<?php
//Game ngôi nhà hạnh phúc được phát triển bởi Kết Nối trẻ group
//Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group
//Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group
if ( !defined( "IN_UCHOME" ) ) exit( "Access Denied" );
$n = new news;
$data = array();
$mapping = array(
	'Tin tức sống chung', 'Tín hiệu đau khổ', 'Sự kiện sống chung', 'Sự kiện quà tặng','Tuyên ngôn tình yêu', 'Tin tức mua nhà', 'Làm việc để kiếm tiền',  'Các sự kiện'
);
for($i=0; $i<8; $i++){
	$data[] = _get_news($i, $n);
}

realname_get();
include_once( template( "house/view/news" ) );

function _get_news($type, &$news)
{
	$temp = query_all("select  * from ".tname("app_love_news")." where type = '{$type}' order by id desc limit 10");
	foreach($temp as $key=>$val){
		$temp[$key]['html'] = $news->display($val);
		$temp[$key]['dateline'] = get_tip($temp[$key]['dateline']);
	}
	return $temp;
}
?>