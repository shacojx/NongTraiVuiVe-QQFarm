<? if(!defined('UC_ROOT')) exit('Access Denied');?>
<? include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>
<script src="js/calendar.js" type="text/javascript"></script>

<? if($a == 'ls') { ?>

	<script type="text/javascript">
		function switchbtn(btn) {
			$('srchuserdiv').style.display = btn == 'srch' ? '' : 'none';
			$('srchuserdiv').className = btn == 'srch' ? 'tabcontentcur' : '' ;
			$('srchuserbtn').className = btn == 'srch' ? 'tabcurrent' : '';
			$('adduserdiv').style.display = btn == 'srch' ? 'none' : '';
			$('adduserdiv').className = btn == 'srch' ? '' : 'tabcontentcur';
			$('adduserbtn').className = btn == 'srch' ? '' : 'tabcurrent';
		}
	</script>

	<div class="container">
		<? if($status) { ?>
			<div class="<? if($status > 0) { ?>correctmsg<? } else { ?>errormsg<? } ?>"><p><? if($status < 0) { ?><em>Thêm thành viên thất bại:</em> <? } ?><? if($status == 2) { ?>Xóa thành công thành viên<? } elseif($status == 1) { ?>Thêm thành viên thành công<? } elseif($status == -1) { ?>Tên thành viên không hợp pháp<? } elseif($status == -2) { ?>Tên thành viên có bao hàm từ cấm<? } elseif($status == -3) { ?>Tên thành viên đã tồn tại<? } elseif($status == -4) { ?>Email không cho phép<? } elseif($status == -5) { ?>Email có đuôi tên miền bị cấm<? } elseif($status == -6) { ?>Email này đã được đăng ký<? } ?></p></div>
		<? } ?>
		<div class="hastabmenu">
			<ul class="tabmenu">
				<li id="srchuserbtn" class="tabcurrent"><a href="#" onclick="switchbtn('srch')">Tìm thành viên</a></li>
				<li id="adduserbtn"><a href="#" onclick="switchbtn('add')">Thêm thành viên</a></li>
			</ul>
			<div id="adduserdiv" class="tabcontent" style="display:none;">
				<form action="admin.php?m=user&a=ls&adduser=yes" method="post">
				<input type="hidden" name="formhash" value="<?=FORMHASH?>">
				<table width="100%">
					<tr>
						<td>Nick:</td>
						<td><input type="text" name="addname" class="txt" /></td>
						<td>Mật khẩu:</td>
						<td><input type="text" name="addpassword" class="txt" /></td>
						<td>Email:</td>
						<td><input type="text" name="addemail" class="txt" /></td>
						<td><input type="submit" value="Submit"  class="btn" /></td>
					</tr>
				</table>
				</form>
			</div>
			<div id="srchuserdiv" class="tabcontentcur">
				<form action="admin.php?m=user&a=ls" method="post">
				<input type="hidden" name="formhash" value="<?=FORMHASH?>">
				<table width="100%">
					<tr>
						<td>Nick:</td>
						<td><input type="text" name="srchname" value="<?=$srchname?>" class="txt" /></td>
						<td>UID:</td>
						<td><input type="text" name="srchuid" value="<?=$srchuid?>" class="txt" /></td>
						<td>Email:</td>
						<td><input type="text" name="srchemail" value="<?=$srchemail?>" class="txt" /></td>
						<td rowspan="2"><input type="submit" value="Submit" class="btn" /></td>
					</tr>
					<tr>
						<td>Đăng ký vào:</td>
						<td colspan="3"><input type="text" name="srchregdatestart" onclick="showcalendar();" value="<?=$srchregdatestart?>" class="txt" /> Tới <input type="text" name="srchregdateend" onclick="showcalendar();" value="<?=$srchregdateend?>" class="txt" /></td>
						<td>IP:</td>
						<td><input type="text" name="srchregip" value="<?=$srchregip?>" class="txt" /></td>
					</tr>
				</table>
				</form>
			</div>
		</div>

		<? if($adduser) { ?><script type="text/javascript">switchbtn('add');</script><? } ?>
<br />
		<h3>Danh sách thành viên</h3>
		<div class="mainbox">
			<? if($userlist) { ?>
				<form action="admin.php?m=user&a=ls&srchname=<?=$srchname?>&srchregdate=<?=$srchregdate?>" onsubmit="return confirm('Hành động này không thể khôi phục, bạn có chắc chắn xóa những thành viên này?');" method="post">
				<input type="hidden" name="formhash" value="<?=FORMHASH?>">
				<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
					<tr>
						<th><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" class="checkbox" /><label for="chkall">Xóa</label></th>
						<th>Nick</th>
						<th>Email</th>
						<th>Đăng ký vào</th>
						<th>IP</th>
						<th>Sửa</th>
					</tr>
					<? foreach((array)$userlist as $user) {?>
						<tr>
							<td class="option"><input type="checkbox" name="delete[]" value="<?=$user['uid']?>" class="checkbox" /></td>
							<td><?=$user['smallavatar']?> <strong><?=$user['username']?></strong></td>
							<td><?=$user['email']?></td>
							<td><?=$user['regdate']?></td>
							<td><?=$user['regip']?></td>
							<td><a href="admin.php?m=user&a=edit&uid=<?=$user['uid']?>">Sửa</a></td>
						</tr>
					<? } ?>
					<tr class="nobg">
						<td><input type="submit" value="Submit" class="btn" /></td>
						<td class="tdpage" colspan="6"><?=$multipage?></td>
					</tr>
				</table>
				</form>
			<? } else { ?>
				<div class="note">
					<p class="i">Tạm thời chưa có danh sách ghi chép nào!</p>
				</div>
			<? } ?>
		</div>
	</div>

<? } else { ?>

	<div class="container">
		<h3 class="marginbot">Sửa thành viên
			<? if(getgpc('fromadmin')) { ?>
				<a href="admin.php?m=admin&a=ls" class="sgbtn">Trở lại danh sách quản lý</a>
			<? } else { ?>
				<a href="admin.php?m=user&a=ls" class="sgbtn">Trở lại danh sách thành viên</a>
			<? } ?>
		</h3>
		<? if($status == 1) { ?>
			<div class="correctmsg"><p>Chỉnh sửa thành viên thành côngs</p></div>
		<? } elseif($status == -1) { ?>
			<div class="correctmsg"><p>Chỉnh sửa thành viên thất bại</p></div>
		<? } else { ?>
			<div class="note"><p class="i">Mật khẩu để trống có nghĩa là không đổi</p></div>
		<? } ?>
		<div class="mainbox">
			<form action="admin.php?m=user&a=edit&uid=<?=$uid?>" method="post">
			<input type="hidden" name="formhash" value="<?=FORMHASH?>">
				<table class="opt">
					<tr>
						<th>Hình đại diện: <input name="delavatar" class="checkbox" type="checkbox" value="1" /> Xóa bỏ hình đại diện</th>
					</tr>
					<tr>
						<th>{ user_avatar_virtual }:</th>
					</tr>
					<tr>
						<td><?=$user['bigavatar']?></td>
					</tr>
					<tr>
						<th>{ user_avatar_real }:</th>
					</tr>
					<tr>
						<td><?=$user['bigavatarreal']?></td>
					</tr>
					<tr>
						<th>Tên:</th>
					</tr>
					<tr>
						<td>
							<input type="text" name="newusername" value="<?=$user['username']?>" class="txt" />
							<input type="hidden" name="username" value="<?=$user['username']?>" class="txt" />
						</td>
					</tr>
					<tr>
						<th>Mật khẩu:</th>
					</tr>
					<tr>
						<td>
							<input type="text" name="password" value="" class="txt" />
						</td>
					</tr>
					<tr>
						<th>Câu hỏi bảo mật: <input type="checkbox" class="checkbox" name="rmrecques" value="1" /> Xóa câu hỏi bảo mật</th>
					</tr>
					<tr>
						<th>Email:</th>
					</tr>
					<tr>
						<td>
							<input type="text" name="email" value="<?=$user['email']?>" class="txt" />
						</td>
					</tr>
				</table>
				<div class="opt"><input type="submit" name="submit" value=" Submit " class="btn" tabindex="3" /></div>
			</form>
		</div>
	</div>
<? } ?>
<? include $this->gettpl('footer');?>