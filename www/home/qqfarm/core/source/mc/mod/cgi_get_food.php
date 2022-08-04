<?php

# 买草

$food = array();
$food['40'] = array(
	"FBPrice" => 0,
	"consume" => "Vật nuôi ăn 5 cỏ mỗi 1~4 giờ",
	"depict" => "Thức ăn cho vật nuôi (nếu đói, vật nuôi sẽ ngừng tăng trưởng và sinh sản)",
	"effect" => 0,
	"price" => 60,
	"store" => "Cỏ sẽ tự động được cho vào máy xay thức ăn",
	"tId" => 1,
	"tName" => "Cỏ",
	"timeLimit" => 0,
	"tip" => "Trồng cỏ sẽ giúp bạn tiết kiệm được nhiều tiền hơn là mua trong cửa hàng.",
	"type" => 25
);

echo qf_jsonCode(array_values($food));

?>