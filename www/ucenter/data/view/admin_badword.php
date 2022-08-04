<? if(!defined('UC_ROOT')) exit('Access Denied');?>
<? include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>
<script type="text/javascript">
	function switchbtn(btn) {
		$('srchuserdiv').style.display = btn == 'srch' ? '' : 'none';
		$('srchuserdiv').className = btn == 'srch' ? 'tabcontentcur' : '' ;
		$('srchuserbtn').className = btn == 'srch' ? 'tabcurrent' : '';
		$('adduserdiv').style.display = btn == 'srch' ? 'none' : '';
		$('adduserdiv').className = btn == 'srch' ? '' : 'tabcontentcur';
		$('adduserbtn').className = btn == 'srch' ? '' : 'tabcurrent';
		$('tmenu').style.height = btn == 'srch' ? '80'+'px' : '280'+'px';
	}
</script>
<div class="container">
	<? if($status) { ?>
		<div class="correctmsg"><p><? if($status == 2) { ?>Cập nhật từ cấm thành công<? } elseif($status == 1) { ?>Thêm từ cấm thành công<? } ?></p></div>
	<? } ?>
	<div id="tmenu" class="hastabmenu">
		<ul class="tabmenu">
			<li id="srchuserbtn" class="tabcurrent"><a href="#" onclick="switchbtn('srch');">Thêm từ cấm</a></li>
			<li id="adduserbtn"><a href="#" onclick="switchbtn('add');">Thêm hàng loạt</a></li>
		</ul>
		<div id="adduserdiv" class="tabcontent" style="display:none;">
			<form action="admin.php?m=badword&a=ls" method="post">
				<ul class="tiplist">
					<li>Những từ cấm của diễn đàn.</li>
					<li>Mỗi dòng một nhóm, từ cấm và từ thay thế ở giữa sử dụng dấu bằng để biểu thị thay thế từ dó</li>
					<li>Nếu như bạn muốn thay đổi ký tự cấm nhiều bạn có thể dùng dấu sao để biểu thị</li>
					<li><strong>Ví dụ:</strong></li>
					<li>toobad</li>
					<li>badword=good</li>
				</ul>
				<textarea name="badwords" class="bigarea"></textarea>
				<ul class="optlist">
					<li><input type="radio" name="type" value="2" id="badwordsopt2" class="radio" checked="checked" /><label for="badwordsopt2">Trong lúc xung đột, bạn có thể bỏ để quay lại từ đầu</label></li>
					<li><input type="radio" name="type" value="1" id="badwordsopt1" class="radio" /><label for="badwordsopt1">Trong lúc xung đột, đè lên từ cấm cũ</label></li>
					<li><input type="radio" name="type" value="0" id="badwordsopt0" class="radio" /><label for="badwordsopt0">Dọn sạch từ cấm trước, nhập từ cấm mới, hành động này bạn có thể sao lưu tại <a href="admin.php?m=badword&a=export" target="_blanks">đây</a></label></li>
				</ul>
				<input type="submit" name="multisubmit" value="Submit" class="btn" />
			</form>

		</div>
		<div id="srchuserdiv" class="tabcontentcur">
			<form action="admin.php?m=badword&a=ls" method="post">
			<input type="hidden" name="formhash" value="<?=FORMHASH?>">
			<table>
				<tr>
					<td>Từ nhạy cảm:</td>
					<td><input type="text" name="findnew" class="txt" /></td>
					<td>Thay bằng:</td>
					<td><input type="text" name="replacementnew" class="txt" /></td>
					<td><input type="submit" value="Submit"  class="btn" /></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
	<br />
	<h3>Từ cấm</h3>
	<div class="mainbox">
		<? if($badwordlist) { ?>
			<form action="admin.php?m=badword&a=ls" method="post">
				<table class="datalist fixwidth">
					<tr>
						<th><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" class="checkbox" /><label for="chkall">Xóa</label></th>
						<th style="text-align:right;padding-right:11px;">Từ nhạy cảm</th>
						<th></th>
						<th>Thay bằng</th>
						<th>Thực thi</th>
					</tr>
					<? foreach((array)$badwordlist as $badword) {?>
						<tr>
							<td class="option"><input type="checkbox" name="delete[]" value="<?=$badword['id']?>" class="checkbox" /></td>
							<td class="tdinput"><input type="text" name="find[<?=$badword['id']?>]" value="<?=$badword['find']?>" title="Bấm vào chỉnh sửa rồi mới bấm submit để sao lưu" class="txtnobd" onblur="this.className='txtnobd'" onfocus="this.className='txt'" /></td>
							<td class="tdarrow">&gt;</td>
							<td class="tdinput"><input type="text" name="replacement[<?=$badword['id']?>]" value="<?=$badword['replacement']?>" title="Bấm vào chỉnh sửa rồi mới bấm submit để sao lưu" class="txtnobd"  onblur="this.className='txtnobd'" onfocus="this.className='txt'" style="text-align:left;" /></td>
							<td><?=$badword['admin']?></td>
						</tr>
					<? } ?>
					<tr class="nobg">
						<td><input type="submit" value="Submit" class="btn" /></td>
						<td class="tdpage" colspan="4"><?=$multipage?></td>
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

<? include $this->gettpl('footer');?>