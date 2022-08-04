<?php
#Animal type parameters
$animaltype = array(
	# Ổ
	"1001"=> array("byproductprice"=>17,"cId"=>1001,"cLevel"=>0,"cName"=>"Gà","bName"=>"Trứng gà","consum"=>1,"cub"=>14400,"cycle"=>21600,"expect"=>3215851080,"growing"=>"14400,14400,129600,15","growthCycle"=>0,"harvestbExp"=>6,"harvestpExp"=>26,"maturingTime"=>28800,"output"=>20,"price"=>700,"procreation"=>129600,"productime"=>15,"productprice"=>860,"sinfo"=>""),
	"1002"=> array("byproductprice"=>39,"cId"=>1002,"cLevel"=>1,"cName"=>"Thỏ","bName"=>"Thỏ con","consum"=>2,"cub"=>18000,"cycle"=>28800,"expect"=>3215851080,"growing"=>"18000,18000,129600,15","growthCycle"=>0,"harvestbExp"=>8,"harvestpExp"=>28,"maturingTime"=>36000,"output"=>12,"price"=>1200,"procreation"=>129600,"productime"=>15,"productprice"=>1460,"sinfo"=>"Ăn cà rốt sẽ giảm 5 phút sinh trưởng"),
	"1003"=> array("byproductprice"=>19,"cId"=>1003,"cLevel"=>3,"cName"=>"Ngỗng","bName"=>"Trứng ngỗng","consum"=>3,"cub"=>16200,"cycle"=>25200,"expect"=>3215851080,"growing"=>"16200,16200,144000,15","growthCycle"=>0,"harvestbExp"=>8,"harvestpExp"=>31,"maturingTime"=>32400,"output"=>20,"price"=>900,"procreation"=>144000,"productime"=>15,"productprice"=>1850,"sinfo"=>""),
	"1004"=> array("byproductprice"=>56,"cId"=>1004,"cLevel"=>5,"cName"=>"Mèo","bName"=>"Mèo con","consum"=>2,"cub"=>34200,"cycle"=>32400,"expect"=>3215851080,"growing"=>"34200,34200,216000,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>37,"maturingTime"=>68400,"output"=>12,"price"=>3200,"procreation"=>216000,"productime"=>15,"productprice"=>4060,"sinfo"=>""),
	"1005"=> array("byproductprice"=>35,"cId"=>1005,"cLevel"=>7,"cName"=>"Công","bName"=>"Lông công","consum"=>3,"cub"=>37800,"cycle"=>43200,"expect"=>3215851080,"growing"=>"37800,37800,237600,15","growthCycle"=>0,"harvestbExp"=>16,"harvestpExp"=>39,"maturingTime"=>75600,"output"=>24,"price"=>5000,"procreation"=>237600,"productime"=>15,"productprice"=>6060,"sinfo"=>""),
	"1006"=> array("byproductprice"=>68,"cId"=>1006,"cLevel"=>9,"cName"=>"Chim cánh cụt","bName"=>"Chim con","consum"=>3,"cub"=>41400,"cycle"=>54000,"expect"=>3215851080,"growing"=>"41400,41400,259200,15","growthCycle"=>0,"harvestbExp"=>22,"harvestpExp"=>44,"maturingTime"=>82800,"output"=>16,"price"=>10000,"procreation"=>259200,"productime"=>15,"productprice"=>11860,"sinfo"=>""),
	"1007"=> array("byproductprice"=>69,"cId"=>1007,"cLevel"=>10,"cName"=>"Rùa cạn","bName"=>"Rùa con","consum"=>3,"cub"=>27000,"cycle"=>36000,"expect"=>3215851080,"growing"=>"27000,27000,216000,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>26,"maturingTime"=>54000,"output"=>12,"price"=>11000,"procreation"=>216000,"productime"=>15,"productprice"=>12000,"sinfo"=>""),
	"1008"=> array("byproductprice"=>71,"cId"=>1008,"cLevel"=>12,"cName"=>"Sóc","bName"=>"Sóc con","consum"=>4,"cub"=>36000,"cycle"=>43200,"expect"=>3215851080,"growing"=>"36000,36000,288000,15","growthCycle"=>0,"harvestbExp"=>16,"harvestpExp"=>29,"maturingTime"=>72000,"output"=>13,"price"=>12640,"procreation"=>288000,"productime"=>15,"productprice"=>14570,"sinfo"=>"Ăn hạt dẻ sẽ giảm 5 phút sinh trưởng"),
	"1009"=> array("byproductprice"=>72,"cId"=>1009,"cLevel"=>13,"cName"=>"Mèo Ba Tư","bName"=>"Mèo con","consum"=>4,"cub"=>37800,"cycle"=>43200,"expect"=>3215851080,"growing"=>"37800,37800,302400,15","growthCycle"=>0,"harvestbExp"=>17,"harvestpExp"=>30,"maturingTime"=>75600,"output"=>14,"price"=>13000,"procreation"=>302400,"productime"=>15,"productprice"=>14790,"sinfo"=>""),
	"1010"=> array("byproductprice"=>78,"cId"=>1010,"cLevel"=>17,"cName"=>"Chuột Hamster","bName"=>"Chuột con","consum"=>2,"cub"=>41400,"cycle"=>50400,"expect"=>3215851080,"growing"=>"41400,41400,403200,15","growthCycle"=>0,"harvestbExp"=>20,"harvestpExp"=>32,"maturingTime"=>82800,"output"=>16,"price"=>14100,"procreation"=>403200,"productime"=>15,"productprice"=>16940,"sinfo"=>""),
	"1011"=> array("byproductprice"=>72,"cId"=>1011,"cLevel"=>21,"cName"=>"Nhím","bName"=>"Nhím con","consum"=>2,"cub"=>36000,"cycle"=>43200,"expect"=>3215851080,"growing"=>"36000,36000,345600,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>34,"maturingTime"=>72000,"output"=>15,"price"=>15230,"procreation"=>345600,"productime"=>15,"productprice"=>18000,"sinfo"=>""),
	"1012"=> array("byproductprice"=>73,"cId"=>1012,"cLevel"=>14,"cName"=>"Vịt","bName"=>"Trứng vịt","consum"=>3,"cub"=>37800,"cycle"=>43200,"expect"=>3215851080,"growing"=>"37800,37800,302400,15","growthCycle"=>0,"harvestbExp"=>17,"harvestpExp"=>29,"maturingTime"=>75600,"output"=>14,"price"=>13200,"procreation"=>302400,"productime"=>15,"productprice"=>14910,"sinfo"=>""),
	"1013"=> array("byproductprice"=>78,"cId"=>1013,"cLevel"=>18,"cName"=>"Chuột chũi","bName"=>"Chuột con","consum"=>3,"cub"=>37800,"cycle"=>50400,"expect"=>3215851080,"growing"=>"37800,37800,403200,15","growthCycle"=>0,"harvestbExp"=>19,"harvestpExp"=>31,"maturingTime"=>75600,"output"=>16,"price"=>14200,"procreation"=>403200,"productime"=>15,"productprice"=>17030,"sinfo"=>""),
	"1014"=> array("byproductprice"=>73,"cId"=>1014,"cLevel"=>22,"cName"=>"Mèo Nauy","bName"=>"Mèo con","consum"=>3,"cub"=>43200,"cycle"=>43200,"expect"=>3215851080,"growing"=>"43200,43200,345600,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>34,"maturingTime"=>86400,"output"=>16,"price"=>15550,"procreation"=>345600,"productime"=>15,"productprice"=>18100,"sinfo"=>""),
	"1015"=> array("byproductprice"=>72,"cId"=>1015,"cLevel"=>14,"cName"=>"Gà Silky","bName"=>"Trứng gà","consum"=>2,"cub"=>32400,"cycle"=>43200,"expect"=>3215851080,"growing"=>"32400,32400,270000,15","growthCycle"=>0,"harvestbExp"=>15,"harvestpExp"=>22,"maturingTime"=>64800,"output"=>12,"price"=>13100,"procreation"=>270000,"productime"=>15,"productprice"=>14890,"sinfo"=>""),
	"1016"=> array("byproductprice"=>74,"cId"=>1016,"cLevel"=>24,"cName"=>"Mèo Mỹ","bName"=>"Mèo con","consum"=>3,"cub"=>34200,"cycle"=>39600,"expect"=>3215851080,"growing"=>"34200,34200,316800,15","growthCycle"=>0,"harvestbExp"=>12,"harvestpExp"=>28,"maturingTime"=>68400,"output"=>15,"price"=>16300,"procreation"=>316800,"productime"=>15,"productprice"=>18210,"sinfo"=>""),
	"1017"=> array("byproductprice"=>70,"cId"=>1017,"cLevel"=>10,"cName"=>"Rùa nước","bName"=>"Rùa con","consum"=>2,"cub"=>21600,"cycle"=>36000,"expect"=>3215851080,"growing"=>"21600,21600,216000,15","growthCycle"=>0,"harvestbExp"=>13,"harvestpExp"=>25,"maturingTime"=>43200,"output"=>12,"price"=>11500,"procreation"=>216000,"productime"=>15,"productprice"=>12190,"sinfo"=>""),
	"1018"=> array("byproductprice"=>78,"cId"=>1018,"cLevel"=>28,"cName"=>"Tê tê","bName"=>"Tê tê con","consum"=>3,"cub"=>27000,"cycle"=>36000,"expect"=>3215851080,"growing"=>"27000,27000,288000,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>23,"maturingTime"=>54000,"output"=>13,"price"=>17300,"procreation"=>288000,"productime"=>15,"productprice"=>18890,"sinfo"=>""),
	"1019"=> array("byproductprice"=>82,"cId"=>1019,"cLevel"=>32,"cName"=>"Chồn Zibelin","bName"=>"Chồn con","consum"=>3,"cub"=>23400,"cycle"=>25200,"expect"=>3215851080,"growing"=>"23400,23400,226800,15","growthCycle"=>0,"harvestbExp"=>6,"harvestpExp"=>13,"maturingTime"=>46800,"output"=>10,"price"=>18560,"procreation"=>226800,"productime"=>15,"productprice"=>19100,"sinfo"=>""),
	"1020"=> array("byproductprice"=>83,"cId"=>1020,"cLevel"=>33,"cName"=>"Chồn sương","bName"=>"Chồn con","consum"=>3,"cub"=>25200,"cycle"=>32400,"expect"=>3215851080,"growing"=>"25200,25200,291600,15","growthCycle"=>0,"harvestbExp"=>9,"harvestpExp"=>14,"maturingTime"=>50400,"output"=>14,"price"=>18650,"procreation"=>291600,"productime"=>15,"productprice"=>19190,"sinfo"=>""),
	"1021"=> array("byproductprice"=>84,"cId"=>1021,"cLevel"=>34,"cName"=>"Koala","bName"=>"Koala con","consum"=>3,"cub"=>27000,"cycle"=>36000,"expect"=>3215851080,"growing"=>"27000,27000,324000,15","growthCycle"=>0,"harvestbExp"=>11,"harvestpExp"=>11,"maturingTime"=>54000,"output"=>16,"price"=>18690,"procreation"=>324000,"productime"=>15,"productprice"=>19290,"sinfo"=>""),
	"1022"=> array("byproductprice"=>86,"cId"=>1022,"cLevel"=>36,"cName"=>"Gà lôi","bName"=>"Gà con","consum"=>3,"cub"=>21600,"cycle"=>25200,"expect"=>3215851080,"growing"=>"21600,21600,226800,15","growthCycle"=>0,"harvestbExp"=>6,"harvestpExp"=>9,"maturingTime"=>43200,"output"=>11,"price"=>18750,"procreation"=>226800,"productime"=>15,"productprice"=>19380,"sinfo"=>""),
	"1023"=> array("byproductprice"=>87,"cId"=>1023,"cLevel"=>36,"cName"=>"Cánh cụt chúa","bName"=>"Chim con","consum"=>3,"cub"=>21600,"cycle"=>28800,"expect"=>0,"growing"=>"18000,18000,259200,15","growthCycle"=>0,"harvestbExp"=>6,"harvestpExp"=>9,"maturingTime"=>36000,"output"=>12,"price"=>18750,"procreation"=>259200,"productime"=>15,"productprice"=>19390,"sinfo"=>""),
	"1024"=> array("byproductprice"=>91,"cId"=>1024,"cLevel"=>40,"cName"=>"Khỉ đầu chó","bName"=>"Khỉ con","consum"=>3,"cub"=>28800,"cycle"=>36000,"expect"=>3084583288,"growing"=>"28800,28800,360000,15","growthCycle"=>0,"harvestbExp"=>11,"harvestpExp"=>9,"maturingTime"=>57600,"output"=>16,"price"=>19000,"procreation"=>360000,"productime"=>15,"productprice"=>19850,"sinfo"=>""),
	#"1025"=> array("byproductprice"=>93,"cId"=>1025,"cLevel"=>42,"cName"=>"不知道","bName"=>"不知道","consum"=>3,"cub"=>25200,"cycle"=>39600,"expect"=>3084583288,"growing"=>"25200,25200,396000,15","growthCycle"=>0,"harvestbExp"=>11,"harvestpExp"=>9,"maturingTime"=>50400,"output"=>18,"price"=>19000,"procreation"=>396000,"productime"=>15,"productprice"=>20000,"sinfo"=>""),
	"1026"=> array("byproductprice"=>93,"cId"=>1026,"cLevel"=>42,"cName"=>"Chuột Totoro","bName"=>"Chuột con","consum"=>3,"cub"=>25200,"cycle"=>39600,"expect"=>3085390200,"growing"=>"25200,25200,396000,15","growthCycle"=>0,"harvestbExp"=>12,"harvestpExp"=>10,"maturingTime"=>50400,"output"=>18,"price"=>19240,"procreation"=>396000,"productime"=>15,"productprice"=>20000,"sinfo"=>""),
	"1027"=> array("byproductprice"=>63,"cId"=>1027,"cLevel"=>18,"cName"=>"Hải ly","bName"=>"Hải ly con","consum"=>3,"cub"=>32400,"cycle"=>28800,"expect"=>0,"growing"=>"32400,32400,230400,15","growthCycle"=>0,"harvestbExp"=>6,"harvestpExp"=>9,"maturingTime"=>64800,"output"=>10,"price"=>18750,"procreation"=>230400,"productime"=>15,"productprice"=>17110,"sinfo"=>""),
	"1028"=> array("byproductprice"=>40,"cId"=>1028,"cLevel"=>7,"cName"=>"Sáo","bName"=>"Sáo con","consum"=>2,"cub"=>25200,"cycle"=>25200,"expect"=>3085033848,"growing"=>"25200,25200,176400,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>14,"maturingTime"=>50400,"output"=>13,"price"=>7000,"procreation"=>176400,"productime"=>15,"productprice"=>8000,"sinfo"=>""),
	"1029"=> array("byproductprice"=>40,"cId"=>1029,"cLevel"=>7,"cName"=>"Vịt cầu vồng","bName"=>"Lông vịt","consum"=>2,"cub"=>25200,"cycle"=>25200,"expect"=>3085033848,"growing"=>"25200,25200,176400,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>14,"maturingTime"=>50400,"output"=>13,"price"=>7000,"procreation"=>176400,"productime"=>15,"productprice"=>8000,"sinfo"=>""),
	"1030"=> array("byproductprice"=>140,"cId"=>1030,"cLevel"=>51,"cName"=>"Vật nuôi 1030","bName"=>"Orange Gem","consum"=>4,"cub"=>46800,"cycle"=>50400,"expect"=>3215687192,"growing"=>"46800,46800,655200,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>10,"maturingTime"=>93600,"output"=>25,"price"=>35000,"procreation"=>655200,"productime"=>15,"productprice"=>42000,"sinfo"=>""),
	"1031"=> array("byproductprice"=>95,"cId"=>1031,"cLevel"=>44,"cName"=>"Gấu túi","bName"=>"Gấu con","consum"=>3,"cub"=>28800,"cycle"=>36000,"expect"=>3085030264,"growing"=>"28800,28800,360000,15","growthCycle"=>0,"harvestbExp"=>11,"harvestpExp"=>7,"maturingTime"=>57600,"output"=>17,"price"=>19490,"procreation"=>360000,"productime"=>15,"productprice"=>21050,"sinfo"=>""),
	"1032"=> array("byproductprice"=>64,"cId"=>1032,"cLevel"=>8,"cName"=>"Thỏ ngọc (cái)","bName"=>"Thỏ ngọc","consum"=>3,"cub"=>25200,"cycle"=>43200,"expect"=>3220824792,"growing"=>"25200,25200,216000,15","growthCycle"=>0,"harvestbExp"=>13,"harvestpExp"=>25,"maturingTime"=>50400,"output"=>12,"price"=>8500,"procreation"=>216000,"productime"=>15,"productprice"=>10500,"sinfo"=>""),
	"1033"=> array("byproductprice"=>64,"cId"=>1033,"cLevel"=>8,"cName"=>"Thỏ ngọc (đực)","bName"=>"Đá mặt trăng","consum"=>3,"cub"=>25200,"cycle"=>43200,"expect"=>3220824792,"growing"=>"25200,25200,216000,15","growthCycle"=>0,"harvestbExp"=>13,"harvestpExp"=>25,"maturingTime"=>50400,"output"=>12,"price"=>8500,"procreation"=>216000,"productime"=>15,"productprice"=>10500,"sinfo"=>""),
	"1034"=> array("byproductprice"=>75,"cId"=>1034,"cLevel"=>10,"cName"=>"Mèo Thái","bName"=>"Mèo con","consum"=>3,"cub"=>37800,"cycle"=>46800,"expect"=>3215851080,"growing"=>"37800,37800,334800,15","growthCycle"=>0,"harvestbExp"=>19,"harvestpExp"=>31,"maturingTime"=>75600,"output"=>16,"price"=>24200,"procreation"=>334800,"productime"=>15,"productprice"=>18350,"sinfo"=>""),
	"1035"=> array("byproductprice"=>73,"cId"=>1035,"cLevel"=>20,"cName"=>"Rùa thần","bName"=>"Thọ tỷ","consum"=>3,"cub"=>43200,"cycle"=>46800,"expect"=>3215851080,"growing"=>"43200,43200,374400,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>34,"maturingTime"=>86400,"output"=>16,"price"=>25550,"procreation"=>374400,"productime"=>15,"productprice"=>17890,"sinfo"=>""),
	"1036"=> array("byproductprice"=>97,"cId"=>1036,"cLevel"=>46,"cName"=>"Thú ăn kiến","bName"=>"Thú con","cType"=>2,"consum"=>3,"cub"=>36000,"cycle"=>36000,"expect"=>3215851080,"growing"=>"36000,36000,360000,15","growthCycle"=>0,"harvestbExp"=>11,"harvestpExp"=>12,"maturingTime"=>72000,"output"=>18,"price"=>19600,"procreation"=>360000,"productime"=>15,"productprice"=>21350,"sinfo"=>""),
	"1037"=> array("byproductprice"=>70,"cId"=>1037,"cLevel"=>10,"cName"=>"Chuột tiên","bName"=>"Bánh quy","consum"=>2,"cub"=>28800,"cycle"=>43200,"expect"=>3215851080,"growing"=>"28800,28800,43200,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>34,"maturingTime"=>57600,"output"=>2,"price"=>888,"procreation"=>43200,"productime"=>15,"productprice"=>1800,"sinfo"=>""),
	"1038"=> array("byproductprice"=>146,"cId"=>1038,"cLevel"=>57,"cName"=>"Thủy tinh","bName"=>"Bạch ngọc","consum"=>4,"cub"=>45000,"cycle"=>46800,"expect"=>3215851080,"growing"=>"45000,45000,795600,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>34,"maturingTime"=>90000,"output"=>24,"price"=>28000,"procreation"=>795600,"productime"=>15,"productprice"=>55000,"sinfo"=>""),
	"1039"=> array("byproductprice"=>77,"cId"=>1039,"cLevel"=>15,"cName"=>"Thú tai to","bName"=>"Thú con","consum"=>2,"cub"=>39600,"cycle"=>50400,"expect"=>3215851080,"growing"=>"39600,39600,331200,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>34,"maturingTime"=>79200,"output"=>15,"price"=>26550,"procreation"=>331200,"productime"=>15,"productprice"=>15020,"sinfo"=>""),
	"1040"=> array("byproductprice"=>23,"cId"=>1040,"cLevel"=>3,"cName"=>"Gà thịt","bName"=>"Gà con","cType"=>4,"consum"=>2,"cub"=>28800,"cycle"=>28800,"expect"=>7,"growing"=>"28800,28800,230400,15","growthCycle"=>0,"harvestbExp"=>17,"harvestpExp"=>33,"maturingTime"=>57600,"output"=>20,"price"=>600,"procreation"=>230400,"productime"=>15,"productprice"=>125,"sinfo"=>""),
	"1041"=> array("byproductprice"=>28,"cId"=>1041,"cLevel"=>4,"cName"=>"Vịt thịt","bName"=>"Vịt con","cType"=>4,"consum"=>2,"cub"=>28800,"cycle"=>28800,"expect"=>8,"growing"=>"28800,28800,230400,15","growthCycle"=>0,"harvestbExp"=>15,"harvestpExp"=>18,"maturingTime"=>57600,"output"=>20,"price"=>800,"procreation"=>230400,"productime"=>15,"productprice"=>125,"sinfo"=>""),
	"1042"=> array("byproductprice"=>118,"cId"=>1042,"cLevel"=>52,"cName"=>"Kỳ lân","bName"=>"Lam ngọc","cType"=>2,"consum"=>3,"cub"=>36000,"cycle"=>36000,"expect"=>3215851080,"growing"=>"36000,36000,806400,15","growthCycle"=>0,"harvestbExp"=>11,"harvestpExp"=>12,"maturingTime"=>72000,"output"=>26,"price"=>25000,"procreation"=>360000,"productime"=>15,"productprice"=>26350,"sinfo"=>""),
	"1043"=> array("byproductprice"=>72,"cId"=>1043,"cLevel"=>13,"cName"=>"Bồ nông","bName"=>"Chim con","consum"=>2,"cub"=>36000,"cycle"=>43200,"expect"=>3215851080,"growing"=>"36000,36000,302400,15","growthCycle"=>0,"harvestbExp"=>15,"harvestpExp"=>18,"maturingTime"=>72000,"output"=>14,"price"=>13057,"procreation"=>302400,"productime"=>15,"productprice"=>14820,"sinfo"=>""),
	"1044"=> array("byproductprice"=>80,"cId"=>1044,"cLevel"=>10,"cName"=>"Người tuyết","bName"=>"Quả cầu tuyết","consum"=>3,"cub"=>28800,"cycle"=>32400,"expect"=>3215851080,"growing"=>"28800,28800,291600,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>10,"maturingTime"=>57600,"output"=>13,"price"=>18280,"procreation"=>291600,"productime"=>15,"productprice"=>18950,"sinfo"=>""),
	"1045"=> array("byproductprice"=>77,"cId"=>1045,"cLevel"=>15,"cName"=>"Mèo vui vẻ","bName"=>"Cá vui vẻ","consum"=>2,"cub"=>39600,"cycle"=>50400,"expect"=>3215851080,"growing"=>"39600,39600,331200,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>34,"maturingTime"=>79200,"output"=>15,"price"=>26550,"procreation"=>331200,"productime"=>15,"productprice"=>15020,"sinfo"=>""),
	"1046"=> array("byproductprice"=>98,"cId"=>1046,"cLevel"=>47,"cName"=>"Đàn lia","bName"=>"Đuôi chim","cType"=>2,"consum"=>3,"cub"=>36000,"cycle"=>36000,"expect"=>1,"growing"=>"36000,36000,360000,15","growthCycle"=>0,"harvestbExp"=>11,"harvestpExp"=>11,"maturingTime"=>72000,"output"=>18,"price"=>19630,"procreation"=>360000,"productime"=>15,"productprice"=>21500,"sinfo"=>""),
	"1047"=> array("byproductprice"=>100,"cId"=>1047,"cLevel"=>48,"cName"=>"Gà lông mượt","bName"=>"Trứng gà","consum"=>2,"cub"=>39600,"cycle"=>50400,"expect"=>3215851080,"growing"=>"39600,39600,327600,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>34,"maturingTime"=>79200,"output"=>16,"price"=>26550,"procreation"=>331200,"productime"=>15,"productprice"=>15020,"sinfo"=>""),
	"1048"=> array("byproductprice"=>105,"cId"=>1048,"cLevel"=>54,"cName"=>"Tatu","bName"=>"Tatu con","consum"=>2,"cub"=>36000,"cycle"=>43185,"expect"=>3215851080,"growing"=>"36000,36000,288000,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>34,"maturingTime"=>57600,"output"=>13,"price"=>12640,"procreation"=>291000,"productime"=>15,"productprice"=>18640,"sinfo"=>""),
	"1049"=> array("byproductprice"=>135,"cId"=>1049,"cLevel"=>58,"cName"=>"Thiên mã","bName"=>"Đằng vân","consum"=>0.01,"cub"=>54000,"cycle"=>53985,"expect"=>3215851080,"growing"=>"54000,54000,1080000,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>34,"maturingTime"=>108000,"output"=>20,"price"=>30000,"procreation"=>391000,"productime"=>15,"productprice"=>34000,"sinfo"=>""),
	"1050"=> array("byproductprice"=>68,"cId"=>1050,"cLevel"=>8,"cName"=>"Bồ câu","bName"=>"Trứng chim","consum"=>3,"cub"=>41400,"cycle"=>54000,"expect"=>3215851080,"growing"=>"41400,41400,259200,15","growthCycle"=>0,"harvestbExp"=>22,"harvestpExp"=>44,"maturingTime"=>82800,"output"=>16,"price"=>10000,"procreation"=>259200,"productime"=>15,"productprice"=>11860,"sinfo"=>""),
	"1051"=> array("byproductprice"=>88,"cId"=>1051,"cLevel"=>10,"cName"=>"Thỏ may mắn","bName"=>"Pháo hoa","consum"=>2,"cub"=>21600,"cycle"=>36000,"expect"=>3215851080,"growing"=>"21600,21600,216000,15","growthCycle"=>0,"harvestbExp"=>13,"harvestpExp"=>25,"maturingTime"=>43200,"output"=>15,"price"=>10000,"procreation"=>216000,"productime"=>15,"productprice"=>12888,"sinfo"=>""),
	"1052"=> array("price"=>19800,"cId"=>1052,"cName"=>"Thú ăn kiến","bName"=>"Thú non","cLevel"=>48,"growthCycle"=>0,"cub"=>36000,"growing"=>36000,"maturingTime"=>72000,"procreation"=>360000,"productime"=>15,"cycle"=>36000,"cType"=>2,"expect"=>1,"output"=>18,"productprice"=>21600,"byproductprice"=>99,"harvestbExp"=>11,"harvestpExp"=>11,"consum"=>3,"growing"=>"36000,36000,360000,15","sinfo"=>""),
	# Chuồng
	"1501"=> array("byproductprice"=>29,"cId"=>1501,"cLevel"=>2,"cName"=>"Cừu","bName"=>"Lông cừu","consum"=>3,"cub"=>27000,"cycle"=>43200,"expect"=>3215851080,"growing"=>"27000,27000,172800,15","growthCycle"=>0,"harvestbExp"=>16,"harvestpExp"=>38,"maturingTime"=>54000,"output"=>24,"price"=>2000,"procreation"=>172800,"productime"=>15,"productprice"=>2860,"sinfo"=>""),
	"1502"=> array("byproductprice"=>55,"cId"=>1502,"cLevel"=>4,"cName"=>"Bò sữa","bName"=>"Sữa bò","consum"=>4,"cub"=>32400,"cycle"=>43200,"expect"=>3215851080,"growing"=>"32400,32400,216000,15","growthCycle"=>0,"harvestbExp"=>17,"harvestpExp"=>40,"maturingTime"=>64800,"output"=>12,"price"=>3000,"procreation"=>216000,"productime"=>15,"productprice"=>4260,"sinfo"=>""),
	"1503"=> array("byproductprice"=>58,"cId"=>1503,"cLevel"=>6,"cName"=>"Khỉ","bName"=>"Khỉ con","consum"=>3,"cub"=>36000,"cycle"=>36000,"expect"=>3215851080,"growing"=>"36000,36000,216000,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>38,"maturingTime"=>72000,"output"=>12,"price"=>4000,"procreation"=>216000,"productime"=>15,"productprice"=>5260,"sinfo"=>"Ăn đậu Hà Lan giảm 5 phút sinh trưởng"),
	"1504"=> array("byproductprice"=>64,"cId"=>1504,"cLevel"=>8,"cName"=>"Kangaru","bName"=>"Kangaru con","consum"=>4,"cub"=>39600,"cycle"=>43200,"expect"=>3215851080,"growing"=>"39600,39600,237600,15","growthCycle"=>0,"harvestbExp"=>16,"harvestpExp"=>40,"maturingTime"=>79200,"output"=>12,"price"=>8000,"procreation"=>237600,"productime"=>15,"productprice"=>9860,"sinfo"=>""),
	"1505"=> array("byproductprice"=>70,"cId"=>1505,"cLevel"=>11,"cName"=>"Nai","bName"=>"Nai con","consum"=>3,"cub"=>32400,"cycle"=>36000,"expect"=>3215851080,"growing"=>"32400,32400,216000,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>27,"maturingTime"=>64800,"output"=>12,"price"=>12000,"procreation"=>216000,"productime"=>15,"productprice"=>13330,"sinfo"=>""),
	"1507"=> array("byproductprice"=>77,"cId"=>1507,"cLevel"=>15,"cName"=>"Linh dương","bName"=>"Linh dương con","consum"=>2,"cub"=>39600,"cycle"=>50400,"expect"=>3215851080,"growing"=>"39600,39600,331200,15","growthCycle"=>0,"harvestbExp"=>19,"harvestpExp"=>31,"maturingTime"=>79200,"output"=>15,"price"=>13470,"procreation"=>331200,"productime"=>15,"productprice"=>15020,"sinfo"=>""),
	"1508"=> array("byproductprice"=>79,"cId"=>1508,"cLevel"=>19,"cName"=>"Đà điểu","bName"=>"Trứng đà điểu","consum"=>2,"cub"=>43200,"cycle"=>54000,"expect"=>3215851080,"growing"=>"43200,43200,432000,15","growthCycle"=>0,"harvestbExp"=>21,"harvestpExp"=>33,"maturingTime"=>86400,"output"=>17,"price"=>14430,"procreation"=>432000,"productime"=>15,"productprice"=>17610,"sinfo"=>""),
	"1509"=> array("byproductprice"=>73,"cId"=>1509,"cLevel"=>23,"cName"=>"Gấu Bắc Mỹ","bName"=>"Gấu con","consum"=>2,"cub"=>36000,"cycle"=>43200,"expect"=>3215851080,"growing"=>"36000,36000,345600,15","growthCycle"=>0,"harvestbExp"=>13,"harvestpExp"=>35,"maturingTime"=>72000,"output"=>16,"price"=>15940,"procreation"=>345600,"productime"=>15,"productprice"=>18120,"sinfo"=>""),
	"1510"=> array("byproductprice"=>77,"cId"=>1510,"cLevel"=>16,"cName"=>"Hươu cao cổ","bName"=>"Hươu con","consum"=>3,"cub"=>39600,"cycle"=>50400,"expect"=>3215851080,"growing"=>"39600,39600,327600,15","growthCycle"=>0,"harvestbExp"=>18,"harvestpExp"=>33,"maturingTime"=>79200,"output"=>16,"price"=>13630,"procreation"=>327600,"productime"=>15,"productprice"=>15110,"sinfo"=>""),
	"1511"=> array("byproductprice"=>75,"cId"=>1511,"cLevel"=>25,"cName"=>"Sếu đầu đỏ","bName"=>"Sếu con","consum"=>3,"cub"=>37800,"cycle"=>46800,"expect"=>3215851080,"growing"=>"37800,37800,334800,15","growthCycle"=>0,"harvestbExp"=>13,"harvestpExp"=>30,"maturingTime"=>75600,"output"=>16,"price"=>16430,"procreation"=>334800,"productime"=>15,"productprice"=>18350,"sinfo"=>""),
	"1512"=> array("byproductprice"=>100,"cId"=>1512,"cLevel"=>50,"cName"=>"Phong lân","bName"=>"Hồng ngọc","consum"=>0.001,"cub"=>57600,"cycle"=>54000,"expect"=>3215851080,"growing"=>"57600,57600,810000,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>30,"maturingTime"=>115200,"output"=>20,"price"=>30000,"procreation"=>810000,"productime"=>15,"productprice"=>32000,"sinfo"=>""),
	"1513"=> array("byproductprice"=>76,"cId"=>1513,"cLevel"=>26,"cName"=>"Lạc đà","bName"=>"Lạc đà con","consum"=>3,"cub"=>32400,"cycle"=>50400,"expect"=>3215851080,"growing"=>"32400,32400,403200,15","growthCycle"=>0,"harvestbExp"=>16,"harvestpExp"=>31,"maturingTime"=>64800,"output"=>18,"price"=>16450,"procreation"=>403200,"productime"=>15,"productprice"=>18660,"sinfo"=>""),
	"1514"=> array("byproductprice"=>77,"cId"=>1514,"cLevel"=>27,"cName"=>"Tê giác","bName"=>"Tê giác con","consum"=>3,"cub"=>28800,"cycle"=>54000,"expect"=>3215851080,"growing"=>"28800,28800,432000,15","growthCycle"=>0,"harvestbExp"=>17,"harvestpExp"=>31,"maturingTime"=>57600,"output"=>19,"price"=>16780,"procreation"=>432000,"productime"=>15,"productprice"=>18880,"sinfo"=>""),
	"1515"=> array("byproductprice"=>79,"cId"=>1515,"cLevel"=>29,"cName"=>"Tinh tinh","bName"=>"Tinh tinh con","consum"=>3,"cub"=>30600,"cycle"=>32400,"expect"=>3215851080,"growing"=>"30600,30600,259200,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>13,"maturingTime"=>61200,"output"=>13,"price"=>17990,"procreation"=>259200,"productime"=>15,"productprice"=>18930,"sinfo"=>""),
	"1516"=> array("byproductprice"=>80,"cId"=>1516,"cLevel"=>30,"cName"=>"Hà mã","bName"=>"Hà mã con","consum"=>3,"cub"=>28800,"cycle"=>32400,"expect"=>3215851080,"growing"=>"28800,28800,291600,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>10,"maturingTime"=>57600,"output"=>13,"price"=>18280,"procreation"=>291600,"productime"=>15,"productprice"=>18950,"sinfo"=>""),
	"1517"=> array("byproductprice"=>81,"cId"=>1517,"cLevel"=>31,"cName"=>"Hồng hạc","bName"=>"Hồng hạc con","consum"=>3,"cub"=>23400,"cycle"=>28800,"expect"=>3215851080,"growing"=>"23400,23400,259200,15","growthCycle"=>0,"harvestbExp"=>8,"harvestpExp"=>9,"maturingTime"=>46800,"output"=>11,"price"=>18290,"procreation"=>259200,"productime"=>15,"productprice"=>19090,"sinfo"=>""),
	"1518"=> array("byproductprice"=>73,"cId"=>1518,"cLevel"=>20,"cName"=>"Bò Tây Tạng","bName"=>"Đuôi bò","consum"=>3,"cub"=>41400,"cycle"=>46800,"expect"=>3215851080,"growing"=>"41400,41400,374400,15","growthCycle"=>0,"harvestbExp"=>17,"harvestpExp"=>30,"maturingTime"=>82800,"output"=>16,"price"=>14860,"procreation"=>374400,"productime"=>15,"productprice"=>17890,"sinfo"=>""),
	"1519"=> array("byproductprice"=>85,"cId"=>1519,"cLevel"=>35,"cName"=>"Hươu xạ","bName"=>"Hươu xạ con","consum"=>3,"cub"=>28800,"cycle"=>36000,"expect"=>3215851080,"growing"=>"28800,28800,324000,15","growthCycle"=>0,"harvestbExp"=>11,"harvestpExp"=>12,"maturingTime"=>57600,"output"=>16,"price"=>18700,"procreation"=>324000,"productime"=>15,"productprice"=>19350,"sinfo"=>""),
	"1520"=> array("byproductprice"=>88,"cId"=>1520,"cLevel"=>37,"cName"=>"Ngựa ô","bName"=>"Ngựa con","consum"=>3,"cub"=>32400,"cycle"=>28800,"expect"=>3215851080,"growing"=>"32400,32400,259200,15","growthCycle"=>0,"harvestbExp"=>8,"harvestpExp"=>13,"maturingTime"=>64800,"output"=>13,"price"=>18780,"procreation"=>259200,"productime"=>15,"productprice"=>19480,"sinfo"=>""),
	"1521"=> array("byproductprice"=>20,"cId"=>1521,"cLevel"=>4,"cName"=>"Lừa","bName"=>"Lừa con","consum"=>2,"cub"=>18000,"cycle"=>18000,"expect"=>0,"growing"=>"18000,18000,108000,15","growthCycle"=>0,"harvestbExp"=>8,"harvestpExp"=>28,"maturingTime"=>36000,"output"=>15,"price"=>1200,"procreation"=>108000,"productime"=>15,"productprice"=>2200,"sinfo"=>""),
	"1522"=> array("byproductprice"=>88,"cId"=>1522,"cLevel"=>30,"cName"=>"Ngựa vằn","bName"=>"Ngựa con","consum"=>2,"cub"=>18000,"cycle"=>28800,"expect"=>3215851080,"growing"=>"18000,18000,291600,15","growthCycle"=>0,"harvestbExp"=>8,"harvestpExp"=>28,"maturingTime"=>36000,"output"=>13,"price"=>18570,"procreation"=>229600,"productime"=>15,"productprice"=>22000,"sinfo"=>""),
	"1523"=> array("byproductprice"=>89,"cId"=>1523,"cLevel"=>38,"cName"=>"Khỉ vàng","bName"=>"Khỉ con","consum"=>3,"cub"=>21600,"cycle"=>21600,"expect"=>3215851080,"growing"=>"21600,21600,216000,15","growthCycle"=>0,"harvestbExp"=>5,"harvestpExp"=>3,"maturingTime"=>43200,"output"=>9,"price"=>18800,"procreation"=>216000,"productime"=>15,"productprice"=>19600,"sinfo"=>""),
	"1524"=> array("byproductprice"=>92,"cId"=>1524,"cLevel"=>41,"cName"=>"Hải cẩu","bName"=>"Hải cẩu con","consum"=>3,"cub"=>21600,"cycle"=>36000,"expect"=>3085033848,"growing"=>"21600,21600,360000,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>12,"maturingTime"=>43200,"output"=>16,"price"=>19190,"procreation"=>360000,"productime"=>15,"productprice"=>19960,"sinfo"=>""),
	"1525"=> array("byproductprice"=>94,"cId"=>1525,"cLevel"=>43,"cName"=>"Voi","bName"=>"Voi con","consum"=>3,"cub"=>32400,"cycle"=>39600,"expect"=>3214417128,"growing"=>"32400,32400,396000,15","growthCycle"=>0,"harvestbExp"=>12,"harvestpExp"=>15,"maturingTime"=>64800,"output"=>18,"price"=>19350,"procreation"=>396000,"productime"=>15,"productprice"=>21000,"sinfo"=>""),
	"1526"=> array("byproductprice"=>90,"cId"=>1526,"cLevel"=>39,"cName"=>"Heo vòi","bName"=>"Heo vòi con","consum"=>3,"cub"=>18000,"cycle"=>36000,"expect"=>3215851080,"growing"=>"18000,18000,360000,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>10,"maturingTime"=>36000,"output"=>15,"price"=>18900,"procreation"=>360000,"productime"=>15,"productprice"=>19750,"sinfo"=>""),
	"1527"=> array("byproductprice"=>135,"cId"=>1527,"cLevel"=>60,"cName"=>"Kim lân","bName"=>"Hoàng ngọc","consum"=>4,"cub"=>39600,"cycle"=>57600,"expect"=>3215687192,"growing"=>"39600,39600,691200,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>10,"maturingTime"=>79200,"output"=>28,"price"=>38000,"procreation"=>691200,"productime"=>15,"productprice"=>40000,"sinfo"=>""),
	"1528"=> array("byproductprice"=>69,"cId"=>1528,"cLevel"=>10,"cName"=>"Thú thần tiên","bName"=>"Thú con","consum"=>2,"cub"=>28800,"cycle"=>36000,"expect"=>3215851080,"growing"=>"28800,28800,216000,15","growthCycle"=>0,"harvestbExp"=>14,"harvestpExp"=>27,"maturingTime"=>57600,"output"=>12,"price"=>11200,"procreation"=>216000,"productime"=>15,"productprice"=>12100,"sinfo"=>""),
	"1529"=> array("byproductprice"=>70,"cId"=>1529,"cLevel"=>10,"cName"=>"Tiên hoa","bName"=>"Thiên thần","consum"=>2,"cub"=>27000,"cycle"=>39600,"expect"=>3215687192,"growing"=>"27000,27000,237600,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>10,"maturingTime"=>54000,"output"=>13,"price"=>11300,"procreation"=>237600,"productime"=>15,"productprice"=>12150,"sinfo"=>""),
	"1530"=> array("byproductprice"=>30,"cId"=>1530,"cLevel"=>2,"cName"=>"Bò Daisy","bName"=>"Hộp sữa","consum"=>2,"cub"=>28800,"cycle"=>36000,"expect"=>3084804472,"growing"=>"28800,28800,180000,15","growthCycle"=>0,"harvestbExp"=>15,"harvestpExp"=>27,"maturingTime"=>57600,"output"=>22,"price"=>2500,"procreation"=>180000,"productime"=>15,"productprice"=>3000,"sinfo"=>""),
	"1531"=> array("byproductprice"=>120,"cId"=>1531,"cLevel"=>70,"cName"=>"Ngựa thần","bName"=>"Lam ngọc","consum"=>0.001,"cub"=>86400,"cycle"=>50400,"expect"=>3215687192,"growing"=>"86400,86400,705600,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>10,"maturingTime"=>86400,"output"=>16,"price"=>37000,"procreation"=>705600,"productime"=>15,"productprice"=>38000,"sinfo"=>""),
	#"1532"=> array("byproductprice"=>141,"cId"=>1532,"cLevel"=>52,"cName"=>"不知道","bName"=>"不知道","consum"=>4,"cub"=>32400,"cycle"=>43200,"expect"=>3084697976,"growing"=>"32400,32400,648000,15","growthCycle"=>0,"harvestbExp"=>11,"harvestpExp"=>10,"maturingTime"=>72000,"output"=>18,"price"=>19550,"procreation"=>648000,"productime"=>15,"productprice"=>45000,"sinfo"=>""),
	"1533"=> array("byproductprice"=>96,"cId"=>1533,"cLevel"=>45,"cName"=>"Alpaca","bName"=>"Alpaca con","consum"=>3,"cub"=>32400,"cycle"=>36000,"expect"=>3084697976,"growing"=>"32400,32400,360000,15","growthCycle"=>0,"harvestbExp"=>11,"harvestpExp"=>10,"maturingTime"=>64800,"output"=>18,"price"=>19550,"procreation"=>360000,"productime"=>15,"productprice"=>21140,"sinfo"=>""),
	"1534"=> array("byproductprice"=>69,"cId"=>1534,"cLevel"=>10,"cName"=>"Thần tình yêu","bName"=>"Trái tim","consum"=>0.001,"cub"=>28800,"cycle"=>36000,"expect"=>3215687192,"growing"=>"28800,28800,324000,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>10,"maturingTime"=>57600,"output"=>7,"price"=>20550,"procreation"=>324000,"productime"=>15,"productprice"=>12100,"sinfo"=>""),
	"1535"=> array("byproductprice"=>59,"cId"=>1535,"cLevel"=>6,"cName"=>"Tuần lộc đáng yêu","bName"=>"Chuông giáng sinh","cType"=>2,"consum"=>2,"cub"=>28800,"cycle"=>28800,"expect"=>1,"growing"=>"28800,28800,201600,15","growthCycle"=>0,"harvestbExp"=>12,"harvestpExp"=>16,"maturingTime"=>57600,"output"=>7,"price"=>4300,"procreation"=>201600,"productime"=>15,"productprice"=>5000,"sinfo"=>""),
	"1536"=> array("byproductprice"=>59,"cId"=>1536,"cLevel"=>6,"cName"=>"Tuần lộc lấp lánh","bName"=>"Vòng giáng sinh","cType"=>2,"consum"=>2,"cub"=>32400,"cycle"=>28800,"expect"=>1,"growing"=>"32400,32400,201600,15","growthCycle"=>0,"harvestbExp"=>12,"harvestpExp"=>16,"maturingTime"=>64800,"output"=>11,"price"=>4300,"procreation"=>201600,"productime"=>15,"productprice"=>5500,"sinfo"=>""),
	"1537"=> array("byproductprice"=>30,"cId"=>1537,"cLevel"=>30,"cName"=>"Đứa bé","bName"=>"Mũ bí ngô","consum"=>3,"cub"=>21600,"cycle"=>32400,"expect"=>3215851080,"growing"=>"21600,21600,259200,15","growthCycle"=>0,"harvestbExp"=>5,"harvestpExp"=>3,"maturingTime"=>43200,"output"=>6,"price"=>8800,"procreation"=>259200,"productime"=>15,"productprice"=>7000,"sinfo"=>""),
	"1538"=> array("byproductprice"=>57,"cId"=>1538,"cLevel"=>5,"cName"=>"Dê","bName"=>"Dê con","cType"=>4,"consum"=>2,"cub"=>28800,"cycle"=>28800,"expect"=>40,"growing"=>"28800,28800,230400,15","growthCycle"=>0,"harvestbExp"=>12,"harvestpExp"=>16,"maturingTime"=>57600,"output"=>12,"price"=>3800,"procreation"=>230400,"productime"=>15,"productprice"=>125,"sinfo"=>""),
	"1539"=> array("byproductprice"=>59,"cId"=>1539,"cLevel"=>6,"cName"=>"Bò thịt","bName"=>"Bò con","cType"=>4,"consum"=>2,"cub"=>28800,"cycle"=>28800,"expect"=>40,"growing"=>"28800,28800,230400,15","growthCycle"=>0,"harvestbExp"=>12,"harvestpExp"=>16,"maturingTime"=>57600,"output"=>11,"price"=>4300,"procreation"=>230400,"productime"=>15,"productprice"=>125,"sinfo"=>""),
	"1540"=> array("byproductprice"=>81,"cId"=>1540,"cLevel"=>31,"cName"=>"Mèo tai ngắn","bName"=>"Mèo con","consum"=>3,"cub"=>23400,"cycle"=>28800,"expect"=>3215851080,"growing"=>"23400,23400,259200,15","growthCycle"=>0,"harvestbExp"=>12,"harvestpExp"=>16,"maturingTime"=>46800,"output"=>11,"price"=>18290,"procreation"=>259200,"productime"=>15,"productprice"=>19090,"sinfo"=>""),
	"1541"=> array("byproductprice"=>59,"cId"=>1541,"cLevel"=>6,"cName"=>"Tuần lộc sành điệu","bName"=>"Tuyết giáng sinh","cType"=>2,"consum"=>2,"cub"=>36000,"cycle"=>28800,"expect"=>1,"growing"=>"36000,36000,201600,15","growthCycle"=>0,"harvestbExp"=>12,"harvestpExp"=>16,"maturingTime"=>72000,"output"=>11,"price"=>4300,"procreation"=>201600,"productime"=>15,"productprice"=>5800,"sinfo"=>""),
	"1542"=> array("byproductprice"=>70,"cId"=>1542,"cLevel"=>10,"cName"=>"Linh thú","bName"=>"Trứng linh thú","cType"=>2,"consum"=>2,"cub"=>21600,"cycle"=>36000,"expect"=>1,"growing"=>"21600,21600,216000,15","growthCycle"=>0,"harvestbExp"=>13,"harvestpExp"=>25,"maturingTime"=>43200,"output"=>6,"price"=>11500,"procreation"=>216000,"productime"=>15,"productprice"=>12190,"sinfo"=>""),
	"1543"=> array("byproductprice"=>105,"cId"=>1543,"cLevel"=>55,"cName"=>"Lôi lân","bName"=>"Đá ma thuật","cType"=>2,"consum"=>2,"cub"=>36000,"cycle"=>36000,"expect"=>1,"growing"=>"36000,36000,302400,15","growthCycle"=>0,"harvestbExp"=>13,"harvestpExp"=>25,"maturingTime"=>43200,"output"=>24,"price"=>44000,"procreation"=>424000,"productime"=>15,"productprice"=>50000,"sinfo"=>""),
	"1544"=> array("byproductprice"=>110,"cId"=>1544,"cLevel"=>56,"cName"=>"Cò","bName"=>"Cò con","cType"=>2,"consum"=>2,"cub"=>39600,"cycle"=>39600,"expect"=>1,"growing"=>"39600,39600,655200,15","growthCycle"=>0,"harvestbExp"=>13,"harvestpExp"=>25,"maturingTime"=>43200,"output"=>16,"price"=>13050,"procreation"=>324000,"productime"=>15,"productprice"=>15050,"sinfo"=>""),
	"1545"=> array("byproductprice"=>88,"cId"=>1545,"cLevel"=>10,"cName"=>"Sư tử","bName"=>"Lồng đèn","cType"=>2,"consum"=>2,"cub"=>39600,"cycle"=>43200,"expect"=>3215851080,"growing"=>"39600,39600,702000,15","growthCycle"=>0,"harvestbExp"=>16,"harvestpExp"=>40,"maturingTime"=>79200,"output"=>30,"price"=>36500,"procreation"=>237600,"productime"=>15,"productprice"=>38888,"sinfo"=>""),
	"1546"=> array("byproductprice"=>40,"cId"=>1546,"cLevel"=>18,"cName"=>"Thỏ vàng","bName"=>"Thỏi vàng","cType"=>2,"consum"=>2,"cub"=>25200,"cycle"=>25200,"expect"=>3085033848,"growing"=>"25200,25200,129600,15","growthCycle"=>0,"harvestbExp"=>10,"harvestpExp"=>14,"maturingTime"=>50400,"output"=>6,"price"=>1200,"procreation"=>176400,"productime"=>15,"productprice"=>2000,"sinfo"=>""),
	"1547"=> array("byproductprice"=>125,"cId"=>1547,"cLevel"=>57,"cName"=>"Hỏa kỳ lân","bName"=>"Hồng ngọc","cType"=>2,"consum"=>0.01,"cub"=>36000,"cycle"=>36000,"expect"=>1,"growing"=>"36000,36000,648000,15","growthCycle"=>0,"harvestbExp"=>13,"harvestpExp"=>25,"maturingTime"=>43200,"output"=>23,"price"=>42000,"procreation"=>424000,"productime"=>15,"productprice"=>46000,"sinfo"=>""),
	"1548"=> array("price"=>19800,"cId"=>1548,"cName"=>"Vượn cáo","bName"=>"Vượn con","cLevel"=>48,"growthCycle"=>0,"cub"=>36000,"growing"=>36000,"maturingTime"=>72000,"procreation"=>360000,"productime"=>15,"cycle"=>36000,"cType"=>2,"expect"=>1,"output"=>18,"productprice"=>21600,"byproductprice"=>99,"harvestbExp"=>11,"harvestpExp"=>11,"consum"=>3,"growing"=>"36000,36000,360000,15","sinfo"=>""),
	"1549"=> array("price"=>20000,"cId"=>1549,"cName"=>"Oka Okapi","bName"=>"Thú non","cLevel"=>49,"growthCycle"=>0,"cub"=>36000,"growing"=>36000,"maturingTime"=>72000,"procreation"=>360000,"productime"=>15,"cycle"=>36000,"cType"=>2,"expect"=>1,"output"=>19,"productprice"=>21700,"byproductprice"=>100,"harvestbExp"=>11,"harvestpExp"=>11,"consum"=>3,"growing"=>"36000,36000,360000,15","sinfo"=>"")
);
?>