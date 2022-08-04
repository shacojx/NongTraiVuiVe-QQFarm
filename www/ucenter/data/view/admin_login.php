<? if(!defined('UC_ROOT')) exit('Access Denied');?>
<? include $this->gettpl('header');?>
<script type="text/javascript">
function $(id) {
	return document.getElementById(id);
}
</script>

<div class="container">
	<form action="admin.php?m=user&a=login" method="post" id="loginform" <? if($iframe) { ?>target="_self"<? } else { ?>target="_top"<? } ?>>
		<input type="hidden" name="formhash" value="<?=FORMHASH?>" />
		<input type="hidden" name="seccodehidden" value="<?=$seccodeinit?>" />
		<input type="hidden" name="iframe" value="<?=$iframe?>" />
		<table class="mainbox">
			<tr>
				<td class="loginbox">
					<h1>UCenter</h1>
					<p>UCenter là một ứng dụng cầu nối, nó có thể chia sẽ dữ liệu thành viên, đồng nhất đăng nhập, đăng ký và quản lý thành viên.</p>
				</td>
				<td class="login">
					<? if($errorcode == UC_LOGIN_ERROR_FOUNDER_PW) { ?><div class="errormsg loginmsg"><p>Mật khẩu người sáng lập thất bại</p></div>
					<? } elseif($errorcode == UC_LOGIN_ERROR_ADMIN_PW) { ?><div class="errormsg loginmsg"><p><em>Đăng nhập thất bại!</em><br />Tên thành viên hoặc mật khẩu không đúng.</p></div>
					<? } elseif($errorcode == UC_LOGIN_ERROR_ADMIN_NOT_EXISTS) { ?><div class="errormsg loginmsg"><p>Quản lý này không tồn tại</p></div>
					<? } elseif($errorcode == UC_LOGIN_ERROR_SECCODE) { ?><div class="errormsg loginmsg"><p>Mã nghiệm chứng sai</p></div>
					<? } elseif($errorcode == UC_LOGIN_ERROR_FAILEDLOGIN) { ?><div class="errormsg loginmsg"><p>Mật khẩu nhập sai nhiều lần, 15 phút sau thử lại</p></div>
					<? } ?>
					<p>
						<input type="radio" name="isfounder" value="1" class="radio" <? if((isset($_POST['isfounder']) && $isfounder) || !isset($_POST['isfounder'])) { ?>checked="checked"<? } ?> onclick="$('username').value='UCenter Administrator'; $('username').readOnly = true; $('username').disabled = true; $('password').focus();" id="founder" /><label for="founder">Người sáng lập</label>
						<input type="radio" name="isfounder" value="0" class="radio" <? if((isset($_POST['isfounder']) && !$isfounder)) { ?>checked="checked"<? } ?> onclick="$('username').value=''; $('username').readOnly = false; $('username').disabled = false; $('username').focus();" id="admin" /><label for="admin">Quản lý viên</label>
					</p>
					<p id="usernamediv">Tên:<input type="text" name="username" class="txt" tabindex="1" id="username" value="<?=$username?>" /></p>
					<p>Mật khẩu:<input type="password" name="password" class="txt" tabindex="2" id="password" value="<?=$password?>" /></p>
					<p>Code:<input type="text" name="seccode" class="txt" tabindex="2" id="seccode" value="" style="margin-right:5px;width:85px;" /><img width="70" height="21" src="admin.php?m=seccode&seccodeauth=<?=$seccodeinit?>&<? echo rand();?>" /></p>
					<p class="loginbtn"><input type="submit" name="submit" value="Đăng nhập" class="btn" tabindex="3" /></p>
				</td>
			</tr>
		</table>
	</form>
</div>
<script type="text/javascript">
<? if((isset($_POST['isfounder']) && $isfounder) || !isset($_POST['isfounder'])) { ?>
	$('username').value='UCenter Administrator';
	$('username').disabled = true;
	$('username').readOnly = true;
	$('password').focus();
<? } else { ?>
	$('username').readOnly = false;
	$('username').readOnly = false;
	$('username').focus();
<? } ?>
</script>
<div class="footer">Powered by UCenter <?=UC_SERVER_VERSION?> &copy; 2001 - 2008 <a href="http://www.comsenz.com/" target="_blank">Comsenz</a> Inc.</div>
<? include $this->gettpl('footer');?>