<? if(!defined('UC_ROOT')) exit('Access Denied');?>
<? include $this->gettpl('header');?>
<? if($iframe) { ?>
<script type="text/javascript">
	var uc_menu_data = new Array();
	o = document.getElementById('header_menu_menu');
	elems = o.getElementsByTagName('A');
	for(i = 0; i<elems.length; i++) {
		uc_menu_data.push(elems[i].innerHTML);
		uc_menu_data.push(elems[i].href);
	}
	try {
		parent.uc_left_menu(uc_menu_data);
		parent.uc_modify_sid('<?=$sid?>');
	} catch(e) {}
</script>
<? } ?>
<div class="container">
	<h3>Thống kê</h3>
	<ul class="memlist fixwidth">
		<li><em><? if($user['allowadminapp'] || $user['isfounder']) { ?><a href="admin.php?m=app&a=ls">Tổng ứng dụng</a><? } else { ?>Tổng ứng dụng<? } ?>:</em><?=$apps?></li>
		<li><em><? if($user['allowadminuser'] || $user['isfounder']) { ?><a href="admin.php?m=user&a=ls">Tổng thành viên</a><? } else { ?>Tổng thành viên<? } ?>:</em><?=$members?></li>
		<li><em><? if($user['allowadminpm'] || $user['isfounder']) { ?><a href="admin.php?m=pm&a=ls">Số tin nhắn</a><? } else { ?>Số tin nhắn<? } ?>:</em><?=$pms?></li>
		<li><em>Số bằng hưu:</em><?=$friends?></li>
	</ul>
	
	<h3>Thông báo trạng thái</h3>
	<ul class="memlist fixwidth">
		<li><em><? if($user['allowadminnote'] || $user['isfounder']) { ?><a href="admin.php?m=note&a=ls">Chưa gửi thông báo</a><? } else { ?>Chưa gửi thông báo<? } ?>:</em><?=$notes?></li>
		<? if($errornotes) { ?>
			<li><em><? if($user['allowadminnote'] || $user['isfounder']) { ?><a href="admin.php?m=note&a=ls">Áp dụng việc thông báo</a><? } else { ?>Áp dụng việc thông báo<? } ?>:</em>		
			<? foreach((array)$errornotes as $appid => $error) {?>
				<?=$applist[$appid]['name']?>&nbsp;
			<?}?>
		<? } ?>
	</ul>
	
	<h3>Hệ điều hành</h3>
	<ul class="memlist fixwidth">
		<li><em>Phiên bảnUCenter:</em>UCenter <?=UC_SERVER_VERSION?> Release <?=UC_SERVER_RELEASE?> <a href="http://www.discuz.net/forumdisplay.php?fid=151" target="_blank">Xem phiên bản mới nhất</a> 
		<li><em>Phiên bản PHP:</em><?=$serverinfo?></li>
		<li><em>Phần mềm máy chủ:</em><?=$_SERVER['SERVER_SOFTWARE']?></li>
		<li><em>MySQL:</em><?=$dbversion?></li>
		<li><em>Có thể đưa dữ liệu:</em><?=$fileupload?></li>
		<li><em>Dữ liệu của diễn đàn:</em><?=$dbsize?></li>		
		<li><em>Host name (IP):</em><?=$_SERVER['SERVER_NAME']?> (<?=$_SERVER['SERVER_ADDR']?>:<?=$_SERVER['SERVER_PORT']?>)</li>
		<li><em>magic_quote_gpc:</em><?=$magic_quote_gpc?></li>
		<li><em>allow_url_fopen:</em><?=$allow_url_fopen?></li>		
	</ul>
	<h3>Thông tin về mã nguồn</h3>
	<ul class="memlist fixwidth">
		<li>
			<em>Bản quyền thuộc về:</em>
			<em class="memcont"><a href="http://www.comsenz.com" target="_blank">&#x5eb7;&#x76db;&#x521b;&#x60f3;(&#x5317;&#x4eac;)&#x79d1;&#x6280;&#x6709;&#x9650;&#x516c;&#x53f8; (Comsenz Inc.)</a></em>
		</li>
		<li>
			<em>Tổng quản lý:</em>
			<em class="memcont"><a href="http://www.discuz.net/space.php?uid=1" target="_blank">&#x6234;&#x5FD7;&#x5EB7; (Kevin 'Crossday' Day)</a></em>
		</li>
		<li>
			<em>Nhóm phát triển:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/space.php?uid=859" target="_blank">Hypo 'cnteacher' Wang</a>,
				<a href="http://www.discuz.net/space.php?uid=16678" target="_blank">Yang 'Dokho' Song</a>,
				<a href="http://www.discuz.net/space.php?uid=10407" target="_blank">Qiang Liu</a>,
				<a href="http://www.discuz.net/space.php?uid=80629" target="_blank">Ning 'Monkey' Hou</a>,				
				<a href="http://www.discuz.net/space.php?uid=15104" target="_blank">Xiongfei 'Redstone' Zhao</a>
			</em>
		</li>
		<li>
			<em>Nhóm bảo mật:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/space.php?uid=859" target="_blank">Hypo 'cnteacher' Wang</a>,
				<a href="http://www.discuz.net/space.php?uid=210272" target="_blank">XiaoDun 'Kenshine' Fang</a>,
				<a href="http://www.discuz.net/space.php?uid=492114" target="_blank">Liang 'Metthew' Xu</a>,
				<a href="http://www.discuz.net/space.php?uid=285706" target="_blank">Wei (Sniffer) Yu</a>
			</em>
		</li>
		<li>
			<em>Nhóm hỗ trợ:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/space.php?uid=2691" target="_blank">Liang 'Readme' Chen</a>,
				<a href="http://www.discuz.net/space.php?uid=1519" target="_blank">Yang 'Summer' Xia</a>,
				<a href="http://www.discuz.net/space.php?uid=1904" target="_blank">Tao 'FengXue' Cheng</a>
			</em>
		</li>
		<li>
			<em>Giao diện:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/space.php?uid=294092" target="_blank">Fangming 'Lushnis' Li</a>,
				<a href="http://www.discuz.net/space.php?uid=717854" target="_blank">Ruitao 'Pony.M' Ma</a>
			</em>
		</li>
		<li>
			<em>Nhờ có đóng góp:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/space.php?uid=122246" target="_blank">Heyond</a>
			</em>
		</li>
		<li>
			<em>Công ty phát hành:</em>
			<em class="memcont"><a href="http://www.comsenz.com" target="_blank">http://www.Comsenz.com</a></em>
		</li>
		<li>
			<em>Trang web:</em>
			<em class="memcont"><a href="http://www.discuz.com" target="_blank">http://www.Discuz.com</a></em>
		</li>
		<li>
			<em>Diễn đàn:</em>
			<em class="memcont"><a href="http://www.discuz.net" target="_blank">http://www.Discuz.net</a></em>
		</li>
	</ul>
</div>

<?=$ucinfo?>

<? include $this->gettpl('footer');?>