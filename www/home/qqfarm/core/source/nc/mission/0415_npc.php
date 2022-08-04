<?php

# NPC Tasks:: Anh hề vui tính
$list = $_QFG['db']->fetchOne('SELECT * FROM app_qqfarm_nc where uid=' . $_QFG['uid']);

$npc = $list['chris'];
if($npc<1) {exit();}
$package = qf_decode($list['package']);
$tools = qf_decode($list['tools']);
$randnum = mt_rand(1,100);
if($randnum <= 20) {
	$npc--;
	$_QFG['db']->query("UPDATE app_qqfarm_nc set chris=chris-1 where uid=" . $_QFG['uid']);
	die('{"code":1,"direction":"<TEXTFORMAT LEADING=\"2\"><P ALIGN=\"LEFT\"><FONT FACE=\"Verdana\" SIZE=\"14\" COLOR=\"#FF0000\" LETTERSPACING=\"0\" KERNING=\"0\"><B>Chúc bạn </B></FONT></P></TEXTFORMAT><TEXTFORMAT LEADING=\"2\"><P ALIGN=\"LEFT\"><FONT FACE=\"Verdana\" IZE=\"14\" COLOR=\"#FF0000\" LETTERSPACING=\"0\" KERNING=\"0\"><B>      “Luôn tràn đầy sức khỏe, vui vẻ, hạnh phúc, may mắn và thành công..”</B><FONT SIZE=\"12\"></FONT></FONT></P></TEXTFORMAT><TEXTFORMAT LEADING=\"2\"><P ALIGN=\"LEFT\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#333333\" LETTERSPACING=\"0\" ERNING=\"0\"></FONT></P></TEXTFORMAT><TEXTFORMAT LEADING=\"2\"><P ALIGN=\"LEFT\"><FONT ACE=\"Verdana\" SIZE=\"14\" COLOR=\"#333333\" LETTERSPACING=\"0\" KERNING=\"0\">Chúng ta lại có duyên gặp nhau rồi. Tôi sẽ tặng bạn món quà nhỏ, chúc 1 ngày tốt lành!</FONT></P></TEXTFORMAT><TEXTFORMAT LEADING=\"2\"><P LIGN=\"LEFT\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#333333\" LETTERSPACING=\"0\" ERNING=\"0\"></FONT></P></TEXTFORMAT><TEXTFORMAT LEADING=\"2\"><P ALIGN=\"LEFT\"><FONT ACE=\"Verdana\" SIZE=\"12\" COLOR=\"#333333\" LETTERSPACING=\"0\" KERNING=\"0\"><font size=\"12\">Hôm nay bạn còn '. $npc .' lần nhận thưởng nữa<br /><font color=\"#ff0000\">Sự kiện sẽ kết thúc lúc 16:00 21/04</font></font></FONT></P></TEXTFORMAT>","item":[""],"title":"Anh hề vui tính","vipText":""}');
} elseif($randnum <= 26) {
	$npc--;
	$_QFG['db']->query("UPDATE app_qqfarm_nc set chris=chris-1 where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+10000 where uid=" . $_QFG['uid']);
	die('{"code":1,"direction":"<p align=\"center\"><b><font color=\"#ff0000\">Chúc mừng bạn nhận được 500 xu!</font></b></p>Chúng ta lại có duyên gặp nhau rồi. Tôi sẽ tặng bạn món quà nhỏ, chúc 1 ngày tốt lành!","item":[{"eNum":10000,"eParam":98088,"eType":6}],"title":"Anh hề vui tính","vipText":"<font size=\"12\">Mỗi người có thể tham gia sự kiện 3 lần mỗi ngày<br /><font color=\"#ff0000\">Sự kiện sẽ kết thúc lúc 16:00 21/04</font></font>"}');
} elseif($randnum <= 70)  {
	$npc--;
	$randcropstype = array_rand($cropstype);
	$randflag = true;
	foreach($package as $key=>$value) {
		if($key == $randcropstype) {
			$package[$key]++;
			$randflag = false;
		} 
	}
	if($randflag) {
		$package[$randcropstype] = 1;
	}
	$name = $cropstype[$randcropstype]['cName'];
	$eParam = $randcropstype;
	$eType = 1;
} else {
	$npc--;
	if(array_key_exists(3, $tools)) {
		$tools[3] += 1;
	} else {
		$tools[3] = 1;
	}
	$name = 'Phân bón (lớn)';
	$eParam = 3;
	$eType = 3;
} 

$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($tools) . "', package='". qf_encode($package)."', chris=chris-1 where uid=" . $_QFG['uid']);
echo '{"code":1,"direction":"<p align=\'center\'><b><font color=\'#ff0000\'>Xin chúc mừng bạn nhận được hạt giống '. $name .'!</font></b></p>Chúng ta lại có duyên gặp nhau rồi. Tôi sẽ tặng bạn món quà nhỏ, chúc 1 ngày tốt lành!","item":[{"eNum":1,"eParam":'. $eParam .',"eType":' .$eType. '}],"title":"Anh hề vui tính","vipText":"Hôm nay còn '.(3-$npc).' lần nhận thưởng nữa<br /><font size=\'12\' color=\'#ff0000\'>Sự kiện sẽ kết thúc lúc 16:00 21/04</font>"}';

?>