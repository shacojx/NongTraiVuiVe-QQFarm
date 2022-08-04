<? if(!defined('UC_ROOT')) exit('Access Denied');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=UC_CHARSET?>" />
<title>UCenter Administrator's Control Panel</title>
<link rel="stylesheet" href="images/admincp.css" type="text/css" media="all" />
<meta content="Comsenz Inc." name="Copyright" />
</head>
<body><div id="append"></div>
<? if(!empty($iframe) && !empty($user)) { ?>
	<a class="othersoff" style="float:right;text-align:center" id="header_menu" onclick="headermenu(this)">Menu</a>
	<ul id="header_menu_menu" style="display: none">
		<li><a href="admin.php?m=frame&a=main&iframe=1" target="main" class="tabon">Trang chủ</a></li>
		<? if($user['allowadminsetting'] || $user['isfounder']) { ?><li><a href="admin.php?m=setting&a=ls&iframe=1" target="main">Cơ bản</a></li><? } ?>
		<? if($user['allowadminsetting'] || $user['isfounder']) { ?><li><a href="admin.php?m=setting&a=register&iframe=1" target="main">Thiết đặt đăng ký</a></li><? } ?>
		<? if($user['allowadminsetting'] || $user['isfounder']) { ?><li><a href="admin.php?m=setting&a=mail&iframe=1" target="main">Thiết đặt Mail</a></li><? } ?>
		<? if($user['allowadminapp'] || $user['isfounder']) { ?><li><a href="admin.php?m=app&a=ls&iframe=1" target="main">Quản lý ứng dụng</a></li><? } ?>
		<? if($user['allowadminuser'] || $user['isfounder']) { ?><li><a href="admin.php?m=user&a=ls&iframe=1" target="main">Quản lý thành viên</a></li><? } ?>
		<? if($user['isfounder']) { ?><li><a href="admin.php?m=admin&a=ls&iframe=1" target="main">Quản lý viên</a></li><? } ?>
		<? if($user['allowadminpm'] || $user['isfounder']) { ?><li><a href="admin.php?m=pm&a=ls&iframe=1" target="main">Tin nhắn</a></li><? } ?>
		<? if($user['allowadmincredits'] || $user['isfounder']) { ?><li><a href="admin.php?m=credit&a=ls&iframe=1" target="main">Đổi điểm</a></li><? } ?>
		<? if($user['allowadminbadword'] || $user['isfounder']) { ?><li><a href="admin.php?m=badword&a=ls&iframe=1" target="main">Từ cấm</a></li><? } ?>
		<? if($user['allowadmindomain'] || $user['isfounder']) { ?><li><a href="admin.php?m=domain&a=ls&iframe=1" target="main">Danh sách tên miền</a></li><? } ?>
		<? if($user['allowadmindb'] || $user['isfounder']) { ?><li><a href="admin.php?m=db&a=ls&iframe=1" target="main">Sao lưu dữ liệu</a></li><? } ?>
		<? if($user['isfounder']) { ?><li><a href="admin.php?m=feed&a=ls&iframe=1" target="main">Danh sách các dữ liệu</a></li><? } ?>
		<? if($user['allowadmincache'] || $user['isfounder']) { ?><li><a href="admin.php?m=cache&a=update&iframe=1" target="main">Cập nhật cache</a></li><? } ?>
		<? if($user['isfounder']) { ?><li><a href="admin.php?m=plugin&a=filecheck&iframe=1" target="main">Plugin</a></li><? } ?>
		<a href="admin.php?m=user&a=logout" target="main">Thoát</a>
	</ul>
<? } ?>
<script type="text/javascript">
	function headermenu(ctrl) {
		ctrl.className = ctrl.className == 'otherson' ? 'othersoff' : 'otherson';
		var menu = document.getElementById('header_menu_body');
		if(!menu) {
			menu = document.createElement('div');
			menu.id = 'header_menu_body';
			menu.innerHTML = '<ul>' + document.getElementById('header_menu_menu').innerHTML + '</ul>';
			var obj = ctrl;
			var x = ctrl.offsetLeft;
			var y = ctrl.offsetTop;
			while((obj = obj.offsetParent) != null) {
				x += obj.offsetLeft;
				y += obj.offsetTop;
			}
			menu.style.left = x + 'px';
			menu.style.top = y + ctrl.offsetHeight + 'px';
			menu.className = 'togglemenu';
			menu.style.display = '';
			document.body.appendChild(menu);
		} else {
			menu.style.display = menu.style.display == 'none' ? '' : 'none';
		}
	}
</script>
