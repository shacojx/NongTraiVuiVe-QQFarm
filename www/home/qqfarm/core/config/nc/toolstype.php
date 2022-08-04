<?php
//Dummy type parameter
$toolstype = array(
	"30001" => array("tId" => 1,"tName" => "Phân bón (nhỏ)","price" => 400,"pe" => 4000,"FBPrice" => 0,"YFBPrice" => 0,"timeLimit" => 0,"type" => 3,"effect" => 3600,"depict" => "Giúp giảm 1h phát triển (mỗi giai đoạn chỉ được sử dụng 1 lần)","saleOut" => false),
	"30002" => array("tId" => 2,"tName" => "Phân bón (vừa)","price" => 0,"pe" => 8000,"FBPrice" => 4,"YFBPrice" => 3,"timeLimit" => 0,"type" => 3,"effect" => 9000,"depict" => "Giúp giảm 2.5h phát triển (mỗi giai đoạn chỉ được sử dụng 1 lần)","saleOut" => false),
	"39101" => array("FBPrice"=>20,"YFBPrice"=>16,"depict"=>"Khi mua 5 bao phân bón loại vừa, bạn sẽ được tặng kèm 2 bao cùng loại.","effect"=>0,"price"=>0,"saleOut"=>false,"tId"=>9101,"tName"=>"5x Phân bón (vừa)","timeLimit"=>0,"type"=>3),
	"30003" => array("tId" => 3,"tName" => "Phân bón (lớn) (Khuyến mãi)","price" => 0,"pe" => 12000,"FBPrice" => 10,"YFBPrice" => 8,"timeLimit" => 0,"type" => 3,"effect" => 19800,"depict" => "Giúp giảm 5h phát triển (mỗi giai đoạn chỉ được sử dụng  lần)","saleOut" => false),
	"39102" => array("FBPrice"=>50,"YFBPrice"=>40,"depict"=>"Khi mua 5 bao phân bón loại lớn, bạn sẽ được tặng kèm 2 bao cùng loại.","effect"=>0,"price"=>0,"saleOut"=>false,"tId"=>9102,"tName"=>"5x Phân bón (lớn)","timeLimit"=>0,"type"=>3),
	"30007" => array("tId" => 7,"tName" => "Phân bón cao cấp","price" => 0,"pe" => 24000,"FBPrice" => 15,"YFBPrice" => 12,"timeLimit" => 0,"type" => 3,"effect" => 36000,"depict" => "Giúp giảm 10h phát triển (mỗi giai đoạn chỉ được sử dụng 1 lần)","saleOut" => false),
	"39103" => array("FBPrice"=>75,"YFBPrice"=>60,"depict"=>"Khi mua 5 bao phân bón cao cấp, bạn sẽ được tặng kèm 2 bao cùng loại.","effect"=>0,"price"=>0,"saleOut"=>false,"tId"=>9103,"tName"=>"5x Phân bón cao cấp (Khuyến mãi)","timeLimit"=>0,"type"=>3),
	"9001" => array("tId" => 9001,"tName" => "Thức ăn cho chó","price" => 0,"FBPrice" => 4,"YFBPrice" => 3,"timeLimit" => 0,"type" => 909090,"effect" => "","depict" => "Phần thức ăn đủ cho chó ăn trong 1 ngày.","saleOut" => false),
	"9002" => array("tId" => 9002,"tName" => "Thức ăn cho chó (Khuyến mãi)","price" => 0,"FBPrice" => 20,"YFBPrice" => 15,"timeLimit" => 0,"type" => 909090,"effect" => "","depict" => "Khi bạn mua 5 phần thức ăn cho chó, bạn sẽ được tặng kèm 2 phần cùng loại.","saleOut" => false),
	"40001" => array("tId" => 1,"tName" => "Chó thường","price" => 1000,"FBPrice" => 0,"YFBPrice" => 0,"timeLimit" => 0,"type" => 4,"effect" => "","depict" => "Giúp bảo vệ nông trại của bạn khỏi những tay ăn trộm. Tỷ lệ bắt trộm không cao lắm.","saleOut" => false),
	"40002" => array("tId" => 2,"tName" => "Chó mực","price" => 8000,"FBPrice" => 0,"YFBPrice" => 0,"timeLimit" => 0,"type" => 4,"effect" => "","depict" => "Giúp bảo vệ nông trại của bạn khỏi những tay ăn trộm. Tỷ lệ bắt trộm 30%.","saleOut" => false),
	"40003" => array("tId" => 3,"tName" => "Chó Collie","price" => 5000,"FBPrice" => 0,"YFBPrice" => 0,"timeLimit" => 0,"type" => 4,"effect" => "","depict" => "Giúp bảo vệ nông trại của bạn khỏi những tay ăn trộm. Tỷ lệ bắt trộm 50%.","saleOut" => false),
	"40004" => array("tId" => 4,"tName" => "Chó đốm","price" => 10000,"FBPrice" => 0,"YFBPrice" => 0,"timeLimit" => 0,"type" => 4,"effect" => "","depict" => "Giúp bảo vệ nông trại của bạn khỏi những tay ăn trộm. Tỷ lệ bắt trộm 50%.","saleOut" => false),
	"40005" => array("tId" => 5,"tName" => "Chó Husky","price" => 12000,"FBPrice" => 0,"YFBPrice" => 0,"timeLimit" => 0,"type" => 4,"effect" => "","depict" => "Giúp bảo vệ nông trại của bạn khỏi những tay ăn trộm. Tỷ lệ bắt trộm 50%.","saleOut" => false),
	"40006" => array("tId" => 6,"tName" => "Chó Bécgiê","price" => 15000,"FBPrice" => 0,"YFBPrice" => 0,"timeLimit" => 0,"type" => 4,"effect" => "","depict" => "Giúp bảo vệ nông trại của bạn khỏi những tay ăn trộm. Tỷ lệ bắt trộm 50%.","saleOut" => false),
	"40007" => array("tId" => 7,"tName" => "Chó săn","price" => 20000,"FBPrice" => 0,"YFBPrice" => 0,"timeLimit" => 0,"type" => 4,"effect" => "","depict" => "Giúp bảo vệ nông trại của bạn khỏi những tay ăn trộm. Tỷ lệ bắt trộm 50%.","saleOut" => false),
	"40008" => array("tId" => 8,"tName" => "Dê núi","price" => 20000,"FBPrice" => 0,"YFBPrice" => 0,"timeLimit" => 0,"type" => 4,"effect" => "","depict" => "Giúp bảo vệ nông trại của bạn khỏi những tay ăn trộm. Tỷ lệ bắt trộm 50%.","saleOut" => false),
	"100001"=> array("FBPrice"=>10,"YFBPrice"=>8,"attacksucc"=>100,"blood"=>12,"depict"=>"Làm giảm 12 điểm sức khỏe của thú hoang (Mỗi con chỉ bắn được 1 lần mà thôi)","price"=>0,"tId"=>1,"tName"=>"Mũi tên đồng","type"=>10),
	"100002"=> array("FBPrice"=>15,"YFBPrice"=>12,"attacksucc"=>100,"blood"=>19,"depict"=>"Làm giảm 19 điểm sức khỏe của thú hoang (Mỗi con chỉ bắn được 1 lần mà thôi)","price"=>0,"tId"=>2,"tName"=>"Mũi tên bạc","type"=>10),
	"100003"=> array("FBPrice"=>20,"YFBPrice"=>16,"attacksucc"=>100,"blood"=>26,"depict"=>"Làm giảm 26 điểm sức khỏe của thú hoang (Mỗi con chỉ bắn được 1 lần mà thôi)","price"=>0,"tId"=>3,"tName"=>"Mũi tên vàng","type"=>10),
	"100004"=> array("FBPrice"=>0,"YFBPrice"=>0,"attacksucc"=>100,"blood"=>6,"depict"=>"Làm giảm 6 điểm sức khỏe của thú hoang (Mỗi con chỉ bắn được 1 lần mà thôi)","price"=>500,"tId"=>4,"tName"=>"Cây hút cầu","type"=>10)

);
?>
