<? if(!defined('UC_ROOT')) exit('Access Denied');?>
<? include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>
<div class="container">

	<div class="note">
		<p class="i">Bấm vào [đồng thời áp dụng các thiết lập điểm] có thể được áp dụng để có được những thiết lập điểm, và thiết lập để thông báo các kết quả của ứng dụng</p>
	</div>

	<? if($status) { ?>
		<div class="<? if($status > 0) { ?>correctmsg<? } else { ?>errormsg<? } ?>"><p><? if($status == 1) { ?>cập nhật các chương trình nhập thành công<? } elseif($status == -1) { ?>Trao đổi trước và sau khi áp dụng cùng một, xin vui lòng thiết lập lại.<? } ?></p></div>
	<? } ?>
	<div class="hastabmenu">
		<ul class="tabmenu">
			<li class="tabcurrent"><a href="#" class="tabcurrent">Thông tin Điểm thưởng chương trình giao lưu</a></li>
		</ul>
		<div class="tabcontentcur">
			<form id="creditform" action="admin.php?m=credit&a=ls&addexchange=yes" method="post">
			<input type="hidden" name="formhash" value="<?=FORMHASH?>">
			<table class="dbtb">
				<tr>
					<td class="tbtitle">Trao đổi hướng:</td>
					<td>
						<select onchange="switchcredit('src', this.value)" name="appsrc">
							<option>Xin vui lòng lựa chọn</option><?=$appselect?>
						</select><span id="src"></span>
						&nbsp;&gt;&nbsp;
						<select onchange="switchcredit('desc', this.value)" name="appdesc">
							<option>Xin vui lòng lựa chọn</option><?=$appselect?>
						</select><span id="desc"></span>
					</td>
				</tr>
				<tr>
					<td class="tbtitle">Tỷ giá ngoại tệ:</td>
					<td>
						<input name="ratiosrc" size="3" value="<?=$ratiosrc?>" class="txt" style="margin-right:0" />
						&nbsp;:&nbsp;
						<input name="ratiodesc" size="3" value="<?=$ratiodesc?>" class="txt" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Submit" class="btn" /> &nbsp;
						<input type="button" value="Đồng thời áp dụng các thiết lập điểm" class="btn" onclick="location.href='admin.php?m=credit&a=sync&sid=<?=$sid?>'" />
					</td>
				</tr>
			</table>
			<div style="display: none">
			<script type="text/javascript">
			var credit = new Array();
			<? foreach((array)$creditselect as $select) {?><?=$select?><? } ?>
			<? if($appsrc) { ?>
				setselect($('creditform').appsrc, <?=$appsrc?>);
				switchcredit('src', <?=$appsrc?>);
			<? } ?>
			<? if($appdesc) { ?>
				setselect($('creditform').appdesc, <?=$appdesc?>);
				switchcredit('desc', <?=$appdesc?>);
			<? } ?>
			<? if($creditsrc) { ?>
				setselect($('creditform').creditsrc, <?=$creditsrc?>);
			<? } ?>
			<? if($creditdesc) { ?>
				setselect($('creditform').creditdesc, <?=$creditdesc?>);
			<? } ?>
			</script>
			</div>
			</form>
		</div>
	</div>
	<br />
	<h3>Điểm thưởng trao đổi</h3>
	<div class="mainbox">
		<? if($creditexchange) { ?>
			<form action="admin.php?m=credit&a=ls&delexchange=yes" method="post">
			<input type="hidden" name="formhash" value="<?=FORMHASH?>">
			<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
				<tr>
					<th><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" class="checkbox" /><label for="chkall">Xóa</label></th>
					<th style="padding-right: 11px; text-align: right">Trao đổi hướng</th>
					<th></th>
					<th style="text-align: center">Tỷ giá ngoại tệ</th>
				</tr>
				<? foreach((array)$creditexchange as $key => $exchange) {?>
					<tr>
						<td class="option"><input type="checkbox" name="delete[]" value="<?=$key?>" class="checkbox" /></td>
						<td align="right"><?=$exchange['appsrc']?> <?=$exchange['creditsrc']?></td>
						<td>&nbsp;&gt;&nbsp;<?=$exchange['appdesc']?> <?=$exchange['creditdesc']?></td>
						<td align="center"><?=$exchange['ratiosrc']?> : <?=$exchange['ratiodesc']?></td>
					</tr>
				<?}?>
				<tr class="nobg">
					<td><input type="submit" value="Submit" class="btn" /></td>
				</tr>
			</table>
			</form>
		<? } else { ?>
			<div class="note">
				<p class="i">Tạm thời chưa có danh sách ghi chép nào!</p>
			</div>
		<? } ?>
</div>

<? include $this->gettpl('footer');?>