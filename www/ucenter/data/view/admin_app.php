<? if(!defined('UC_ROOT')) exit('Access Denied');?>
<? include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>
<script type="text/javascript">
var apps = new Array();
var run = 0;
function testlink() {
	if(apps[run]) {
		$('status_' + apps[run]).innerHTML = 'Đang kết nối...';
		$('link_' + apps[run]).src = $('link_' + apps[run]).getAttribute('testlink') + '&sid=<?=$sid?>';
	}
	run++;
}
window.onload = testlink;
</script>
<div class="container">
	<? if($a == 'ls') { ?>
		<h3 class="marginbot">Danh sách ứng dụng<a href="admin.php?m=app&a=add" class="sgbtn">＋thêm ứng dụng</a></h3>
		<? if(!$status) { ?>
			<div class="note fixwidthdec">
				<p class="i">Nếu như bạn phát hiện <img src="images/error.gif" /> <font color="red">kết nối thất bại</font>, xin mời bấm sửa lại tên miền hoặc IP.</p>
			</div>
		<? } elseif($status == '2') { ?>
			<div class="correctmsg"><p>Cập nhật thành công ứng dụng.</p></div>
		<? } ?>
		<div class="mainbox">
			<? if($applist) { ?>
				<form action="admin.php?m=app&a=ls" method="post">
					<input type="hidden" name="formhash" value="<?=FORMHASH?>">
					<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
						<tr>
							<th nowrap="nowrap"><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" class="checkbox" /><label for="chkall">Xóa</label></th>
							<th nowrap="nowrap">ID</th>
							<th nowrap="nowrap">Tên ứng dụng</th>
							<th nowrap="nowrap">URL liên kết</th>
							<th nowrap="nowrap">Trạng thái</th>
							<th nowrap="nowrap">Chi tiết</th>
						</tr>
						<? $i = 0;?>
						<? foreach((array)$applist as $app) {?>
							<tr>
								<td width="50"><input type="checkbox" name="delete[]" value="<?=$app['appid']?>" class="checkbox" /></td>
								<td width="35"><?=$app['appid']?></td>
								<td><a href="admin.php?m=app&a=detail&appid=<?=$app['appid']?>"><strong><?=$app['name']?></strong></a></td>
								<td><a href="<?=$app['url']?>" target="_blank"><?=$app['url']?></a></td>
								<td width="90"><div id="status_<?=$app['appid']?>"></div><script id="link_<?=$app['appid']?>" testlink="admin.php?m=app&a=ping&inajax=1&url=<? echo urlencode($app['url']);?>&ip=<? echo urlencode($app['ip']);?>&appid=<?=$app['appid']?>&random=<? echo rand()?>"></script><script>apps[<?=$i?>] = '<?=$app['appid']?>';</script></td>
								<td width="40"><a href="admin.php?m=app&a=detail&appid=<?=$app['appid']?>">Sửa</a></td>
							</tr>
							<? $i++?>
						<? } ?>
						<tr class="nobg">
							<td colspan="9"><input type="submit" value="Submit" class="btn" /></td>
						</tr>
					</table>
					<div class="margintop"></div>
				</form>
			<? } else { ?>
				<div class="note">
					<p class="i">Tạm thời chưa có danh sách ghi chép nào!</p>
				</div>
			<? } ?>
		</div>
	<? } elseif($a == 'add') { ?>
		<h3 class="marginbot">＋thêm ứng dụng<a href="admin.php?m=app&a=ls" class="sgbtn">Trở lại danh sách ứng dụng</a></h3>
		<div class="mainbox">
			<table class="opt">
				<tr>
					<th>Chọn cách cài:</th>
				</tr>
				<tr>
					<td>
						<input type="radio" name="installtype" class="radio" checked="checked" onclick="$('url').style.display='';$('custom').style.display='none';" />URL cài
						<input type="radio" name="installtype" class="radio" onclick="$('url').style.display='none';$('custom').style.display='';" />Tự cài
					</td>
				</tr>
			</table>
			<div id="url">
				<form method="post" action="" target="_blank" onsubmit="document.appform.action=document.appform.appurl.value;" name="appform">
					<table class="opt">
						<tr>
							<th>Địa chỉ cài:</th>
						</tr>
						<tr>
							<td><input type="text" name="appurl" size="50" value="http://domainname/install/index.php" style="width:300px;" /></td>
						</tr>
					</table>
					<div class="opt">
						<input type="hidden" name="ucapi" value="<?=UC_API?>" />
						<input type="hidden" name="ucfounderpw" value="<?=$md5ucfounderpw?>" />
						<input type="submit" name="installsubmit"  value=" Cài đặt " class="btn" />
					</div>
				</form>
			</div>
			<div id="custom" style="display:none;">
				<form action="admin.php?m=app&a=add" method="post">
				<input type="hidden" name="formhash" value="<?=FORMHASH?>">
					<table class="opt">
						<tr>
							<th colspan="2">Tên ứng dụng:</th>
						</tr>
						<tr>
							<td><input type="text" class="txt" name="name" value="" /></td>
							<td>Tên ứng dụng không quá 20 ký tự</td>
						</tr>
						<tr>
							<th colspan="2">URL liên kết:</th>
						</tr>
						<tr>
							<td><input type="text" class="txt" name="url" value="" /></td>
							<td>Đây là cổng nối giữa UCenter với ứng dụng khác, cuối không thêm dấu /</td>
						</tr>
						<tr>
							<th colspan="2">IP ứng dụng:</th>
						</tr>
						<tr>
							<td><input type="text" class="txt" name="ip" value="" /></td>
							<td>Ở trạng thái bình thường bạn không có vấn đề gì với việc nhập với tên miền, nếu như nhập tên miền có lỗi xin mời bạn thử nhập IP của máy chủ bạn.</td>
						</tr>
						<tr>
							<th colspan="2">Key:</th>
						</tr>
						<tr>
							<td><input type="text" class="txt" name="authkey" value="" /></td>
							<td>Chỉ được sử dụng ký tự tiếng anh và được dùng dưới 64 ký tự, key của ứng dụng phải cùng với Ucenter giống nhau, nếu không dữ liệu ứng dụng với Ucenter không hoạt động bình thường</td>
						</tr>
						<tr>
							<th colspan="2">Loại ứng dụng:</th>
						</tr>
						<tr>
							<td>
							<select name="type">
								<? foreach((array)$typelist as $typeid => $typename) {?>
									<option value="<?=$typeid?>"> <?=$typename?> </option>
								<?}?>
							</select>
							</td>
							<td></td>
						</tr>
						<tr>
							<th colspan="2">Áp dụng các đường dẫn:</th>
						</tr>
						<tr>
							<td>
								<input type="text" class="txt" name="apppath" value="" />
							</td>
							<td>Vui lòng trống mặc định, nếu như để điền vào đường dẫn liên quan (như ngược với UC), thủ tục sẽ tự động được chuyển đổi sang một con đường tuyệt đối, chẳng hạn như ../</td>
						</tr>
						<tr>
							<th colspan="2">Xem các dữ liệu cá nhân:</th>
						</tr>
						<tr>
							<td>
								<input type="text" class="txt" name="viewprourl" value="" />
							</td>
							<td> Đại chỉ URL，thay cho：/space.php?uid=%s bằng %s uid</td>
						</tr>
						<tr>
							<th colspan="2">Ứng dụng giao diện tên tập tin:</th>
						</tr>
						<tr>
							<td>
								<input type="text" class="txt" name="apifilename" value="uc.php" />
							</td>
							<td>uỨng dụng giao diện tập tin tên, theo mặc định uc.php</td>
						</tr>
						<tr>
							<th colspan="2">Nhãn hiển thị tại giao diện:</th>
						</tr>
						<tr>
							<td><textarea class="area" name="tagtemplates"></textarea></td>
							<td valign="top">Sử dụng dữ liệu nhãn tại giao diện khác</td>
						</tr>
						<tr>
							<th colspan="2">Giao diện nhãn:</th>
						</tr>
						<tr>
							<td><textarea class="area" name="tagfields"><?=$tagtemplates['fields']?></textarea></td>
							<td valign="top">Mỗi dòng một cách gợi ý nhãn, dùng dấu phẩy để phân cách giữa nhãn và gợi ý</td>
						</tr>
						<tr>
							<th colspan="2">Đồng bộ đăng nhập:</th>
						</tr>
						<tr>
							<td>
								<input type="radio" class="radio" id="yes" name="synlogin" value="1" /><label for="yes">Yes</label>
								<input type="radio" class="radio" id="no" name="synlogin" value="0" checked="checked" /><label for="no">No</label>
							</td>
							<td>Khởi động chức năng này, khi bạn đăng nhập ở Ứng dụng thì bạn không cần đăng nhập ở diễn đàn</td>
						</tr>
						<tr>
							<th colspan="2">Nhận thông báo:</th>
						</tr>
						<tr>
							<td>
								<input type="radio" class="radio" id="yes" name="recvnote" value="1"/><label for="yes">Yes</label>
								<input type="radio" class="radio" id="no" name="recvnote" value="0" checked="checked" /><label for="no">No</label>
							</td>
							<td></td>
						</tr>
					</table>
					<div class="opt"><input type="submit" name="submit" value=" Submit " class="btn" tabindex="3" /></div>
				</form>
			</div>
		</div>
	<? } else { ?>
		<h3 class="marginbot">Sửa ứng dụng<a href="admin.php?m=app&a=ls" class="sgbtn">Trở lại danh sách ứng dụng</a></h3>
		<? if($updated) { ?>
			<div class="correctmsg"><p>Cập nhật thành công</p></div>
		<? } elseif($addapp) { ?>
			<div class="correctmsg"><p>Thêm ứng dụng thành công</p></div>
		<? } ?>
		<div class="mainbox">
			<form action="admin.php?m=app&a=detail&appid=<?=$appid?>" method="post">
			<input type="hidden" name="formhash" value="<?=FORMHASH?>">
				<table class="opt">
					<tr>
						<th colspan="2">ID: <?=$appid?></th>
					</tr>
					<tr>
						<th colspan="2">Tên ứng dụng:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="name" value="<?=$name?>" /></td>
						<td>Tên ứng dụng không quá 20 ký tự</td>
					</tr>
					<tr>
						<th colspan="2">URL liên kết:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="url" value="<?=$url?>" /></td>
						<td>Đây là cổng nối giữa UCenter với ứng dụng khác, cuối không thêm dấu /</td>
					</tr>
					<tr>
						<th colspan="2">IP ứng dụng:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="ip" value="<?=$ip?>" /></td>
						<td>Ở trạng thái bình thường bạn không có vấn đề gì với việc nhập với tên miền, nếu như nhập tên miền có lỗi xin mời bạn thử nhập IP của máy chủ bạn.</td>
					</tr>
					<tr>
						<th colspan="2">Key:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="authkey" value="<?=$authkey?>" /></td>
						<td>Chỉ được sử dụng ký tự tiếng anh và được dùng dưới 64 ký tự, key của ứng dụng phải cùng với Ucenter giống nhau, nếu không dữ liệu ứng dụng với Ucenter không hoạt động bình thường</td>
					</tr>
					<tr>
						<th colspan="2">Loại ứng dụng:</th>
					</tr>
					<tr>
						<td>
						<select name="type">
							<? foreach((array)$typelist as $typeid => $typename) {?>
							<option value="<?=$typeid?>" <? if($typeid == $type) { ?>selected="selected"<? } ?>> <?=$typename?> </option>
							<?}?>
						</select>
						</td>
						<td></td>
					</tr>
					<tr>
						<th colspan="2">Áp dụng các đường dẫn:</th>
					</tr>
					<tr>
						<td>
							<input type="text" class="txt" name="apppath" value="<?=$apppath?>" />
						</td>
						<td>Vui lòng trống mặc định, nếu như để điền vào đường dẫn liên quan (như ngược với UC), thủ tục sẽ tự động được chuyển đổi sang một con đường tuyệt đối, chẳng hạn như ../</td>
					</tr>
					<tr>
						<th colspan="2">Xem các dữ liệu cá nhân:</th>
					</tr>
					<tr>
						<td>
							<input type="text" class="txt" name="viewprourl" value="<?=$viewprourl?>" />
						</td>
						<td> Đại chỉ URL，thay cho：/space.php?uid=%s bằng %s uid</td>
					</tr>
					<tr>
						<th colspan="2">Ứng dụng giao diện tên tập tin:</th>
					</tr>
					<tr>
						<td>
							<input type="text" class="txt" name="apifilename" value="<?=$apifilename?>" />
						</td>
						<td>uỨng dụng giao diện tập tin tên, theo mặc định uc.php</td>
					</tr>
					<tr>
						<th colspan="2">Nhãn hiển thị tại giao diện:</th>
					</tr>
					<tr>
						<td><textarea class="area" name="tagtemplates"><?=$tagtemplates['template']?></textarea></td>
						<td valign="top">Sử dụng dữ liệu nhãn tại giao diện khác</td>
					</tr>
					<tr>
						<th colspan="2">Giao diện nhãn:</th>
					</tr>
					<tr>
						<td><textarea class="area" name="tagfields"><?=$tagtemplates['fields']?></textarea></td>
						<td valign="top">Mỗi dòng một cách gợi ý nhãn, dùng dấu phẩy để phân cách giữa nhãn và gợi ý</td>
					</tr>
					<tr>
						<th colspan="2">Đồng bộ đăng nhập:</th>
					</tr>
					<tr>
						<td>
							<input type="radio" class="radio" id="yes" name="synlogin" value="1" <?=$synlogin[1]?> /><label for="yes">Yes</label>
							<input type="radio" class="radio" id="no" name="synlogin" value="0" <?=$synlogin[0]?> /><label for="no">No</label>
						</td>
						<td>Khởi động chức năng này, khi bạn đăng nhập ở Ứng dụng thì bạn không cần đăng nhập ở diễn đàn</td>
					</tr>
					<tr>
						<th colspan="2">Nhận thông báo:</th>
					</tr>
					<tr>
						<td>
							<input type="radio" class="radio" id="yes" name="recvnote" value="1" <?=$recvnotechecked[1]?> /><label for="yes">Yes</label>
							<input type="radio" class="radio" id="no" name="recvnote" value="0" <?=$recvnotechecked[0]?> /><label for="no">No</label>
						</td>
						<td></td>
					</tr>
				</table>
				<div class="opt"><input type="submit" name="submit" value=" Submit " class="btn" tabindex="3" /></div>
<? if($isfounder) { ?>
				<table class="opt">
					<tr>
						<th colspan="2">Áp dụng UCenter cấu hình thông tin:</th>
					</tr>
					<tr>
						<th>
<textarea class="area" onFocus="this.select()">
define('UC_CONNECT', 'mysql');
define('UC_DBHOST', '<?=UC_DBHOST?>');
define('UC_DBUSER', '<?=UC_DBUSER?>');
define('UC_DBPW', '<?=UC_DBPW?>');
define('UC_DBNAME', '<?=UC_DBNAME?>');
define('UC_DBCHARSET', '<?=UC_DBCHARSET?>');
define('UC_DBTABLEPRE', '`<?=UC_DBNAME?>`.<?=UC_DBTABLEPRE?>');
define('UC_DBCONNECT', '0');
define('UC_KEY', '<?=$authkey?>');
define('UC_API', '<?=UC_API?>');
define('UC_CHARSET', '<?=UC_CHARSET?>');
define('UC_IP', '');
define('UC_APPID', '<?=$appid?>');
define('UC_PPP', '20');
</textarea>
						</th>
						<td>Khi các ứng dụng UCenter thông tin cấu hình có thể được sao chép vào các ứng dụng mã ở phía bên trái của các hồ sơ</td>
					</tr>
				</table>
<? } ?>
			</form>
		</div>
	<? } ?>
</div>

<? include $this->gettpl('footer');?>