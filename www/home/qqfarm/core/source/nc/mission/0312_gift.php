<?php

#Trồng cây tránh bão


$redpackage =mt_rand(1,100);

if($redpackage < 6) {
	$red_gift = '"gift":{"direction":"<font size=\"12\"><font color=\"#FF0000\"></b >Trồng cây chắn gió</b ></font ></font >\nMùa bão lũ sắp đến rồi, chúng ta cần phải trồng thật nhiều cây để giảm thiểu sức gió khi cơn bão tràn vào đất liền.\n<font color=\"#FF0000\">Phần thưởng:</font ><font color=\"#FF0000\">1 hạt giống Dạ Lan Hương</font >","item":[{"eNum":1,"eParam":112,"eType":1}],"title":"Trồng cây chắn gió"},';
	$bluerose = 112;
	$packagearr[$bluerose] += 1;
} elseif($redpackage < 11) {
	$red_gift = '"gift":{"direction":"<font size=\"12\"><font color=\"#FF0000\"></b >Trồng cây gây rừng</b ></font ></font >\nMôi trường ngày càng ô nhiễm, diện tích rừng ngày càng thu hẹp, chúng ta cần phải trồng thật nhiều cây để góp phần hạn chế vấn đề đó.\n<font color=\"#FF0000\">Phần thưởng:</font ><font color=\"#FF0000\">1 hạt giống hoa Hồng</font >","item":[{"eNum":1,"eParam":111,"eType":1}],"title":"Trồng cây gây rừng"},';
	$bluerose = 111;
	$packagearr[$bluerose] += 1;
}
else {
	$red_gift = '';
}

?>