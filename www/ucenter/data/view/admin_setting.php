<? if(!defined('UC_ROOT')) exit('Access Denied');?>
<? include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>

<div class="container">
	<? if($updated) { ?>
		<div class="correctmsg"><p>Cập nhật thành công</p></div>
	<? } elseif($a == 'register') { ?>
		<div class="note fixwidthdec"><p class="i">Cho phép/ Cấm Email, mỗi dòng một cái email, ví dụ @hotmail.com</p></div>
	<? } ?>
	<? if($a == 'ls') { ?>
		<div class="mainbox nomargin">
			<form action="admin.php?m=setting&a=ls" method="post">
				<input type="hidden" name="formhash" value="<?=FORMHASH?>">
				<table class="opt">
					<tr>
						<th colspan="2">Dạng ngày tháng:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="dateformat" value="<?=$dateformat?>" /></td>
						<td>Sử dụng yyyy(yy): năm, mm tháng, dd ngày. Ví dụ dd-mm-yyyy biểu thị 2000-1-1</td>
					</tr>
					<tr>
						<th colspan="2">Dạng thời gian:</th>
					</tr>
					<td>
						<input type="radio" id="hr24" class="radio" name="timeformat" value="1" <?=$timeformat[1]?> /><label for="hr24">24h</label>
						<input type="radio" id="hr12" class="radio" name="timeformat" value="0" <?=$timeformat[0]?> /><label for="hr12">12h</label>
					</td>
					</tr>
					<tr>
						<th colspan="2">Khu vực:</th>
					</tr>
					<tr>
						<td>
							<select name="timeoffset">
								<option value="-12" <?=$checkarray?>['-12']>(GMT -12:00) Eniwetok, Kwajalein</option>
								<option value="-11" <?=$checkarray?>['-11']>(GMT -11:00) Midway Island, Samoa</option>
								<option value="-10" <?=$checkarray?>['-10']>(GMT -10:00) Hawaii</option>
								<option value="-9" <?=$checkarray?>['-9']>(GMT -09:00) Alaska</option>
								<option value="-8" <?=$checkarray?>['-8']>(GMT -08:00) Pacific Time (US &amp; Canada), Tijuana</option>
								<option value="-7" <?=$checkarray?>['-7']>(GMT -07:00) Mountain Time (US &amp; Canada), Arizona</option>
								<option value="-6" <?=$checkarray?>['-6']>(GMT -06:00) Central Time (US &amp; Canada), Mexico City</option>
								<option value="-5" <?=$checkarray?>['-5']>(GMT -05:00) Eastern Time (US &amp; Canada), Bogota, Lima, Quito</option>
								<option value="-4" <?=$checkarray?>['-4']>(GMT -04:00) Atlantic Time (Canada), Caracas, La Paz</option>
								<option value="-3.5" <?=$checkarray?>['-3.5']>(GMT -03:30) Newfoundland</option>
								<option value="-3" <?=$checkarray?>['-3']>(GMT -03:00) Brassila, Buenos Aires, Georgetown, Falkland Is</option>
								<option value="-2" <?=$checkarray?>['-2']>(GMT -02:00) Mid-Atlantic, Ascension Is., St. Helena</option>
								<option value="-1" <?=$checkarray?>['-1']>(GMT -01:00) Azores, Cape Verde Islands</option>
								<option value="0" <?=$checkarray['0']?>>(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia</option>
								<option value="1" <?=$checkarray['1']?>>(GMT +01:00) Amsterdam, Berlin, Brussels, Madrid, Paris, Rome</option>
								<option value="2" <?=$checkarray['2']?>>(GMT +02:00) Cairo, Helsinki, Kaliningrad, South Africa</option>
								<option value="3" <?=$checkarray['3']?>>(GMT +03:00) Baghdad, Riyadh, Moscow, Nairobi</option>
								<option value="3.5" <?=$checkarray['3.5']?>>(GMT +03:30) Tehran</option>
								<option value="4" <?=$checkarray['4']?>>(GMT +04:00) Abu Dhabi, Baku, Muscat, Tbilisi</option>
								<option value="4.5" <?=$checkarray['4.5']?>>(GMT +04:30) Kabul</option>
								<option value="5" <?=$checkarray['5']?>>(GMT +05:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
								<option value="5.5" <?=$checkarray['5.5']?>>(GMT +05:30) Bombay, Calcutta, Madras, New Delhi</option>
								<option value="5.75" <?=$checkarray['5.75']?>>(GMT +05:45) Katmandu</option>
								<option value="6" <?=$checkarray['6']?>>(GMT +06:00) Almaty, Colombo, Dhaka, Novosibirsk</option>
								<option value="6.5" <?=$checkarray['6.5']?>>(GMT +06:30) Rangoon</option>
								<option value="7" <?=$checkarray['7']?>>(GMT +07:00) Bangkok, Hanoi, Jakarta</option>
								<option value="8" <?=$checkarray['8']?>>(GMT +08:00) &#x5317;&#x4eac;(Beijing), Hong Kong, Perth, Singapore, Taipei</option>
								<option value="9" <?=$checkarray['9']?>>(GMT +09:00) Osaka, Sapporo, Seoul, Tokyo, Yakutsk</option>
								<option value="9.5" <?=$checkarray['9.5']?>>(GMT +09:30) Adelaide, Darwin</option>
								<option value="10" <?=$checkarray['10']?>>(GMT +10:00) Canberra, Guam, Melbourne, Sydney, Vladivostok</option>
								<option value="11" <?=$checkarray['11']?>>(GMT +11:00) Magadan, New Caledonia, Solomon Islands</option>
								<option value="12" <?=$checkarray['12']?>>(GMT +12:00) Auckland, Wellington, Fiji, Marshall Island</option>
							</select>
						</td>
						<td>Mặc định: GMT +08:00</td>
					</tr>

					<tr>
						<th colspan="2">đăng ký ít nhất một vài ngày:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="pmsendregdays" value="<?=$pmsendregdays?>" /></td>
						<td>Đăng ký lần ít hơn các thiết lập số ngày, không được cho phép để gửi tin nhắn ngắn, một di chuyển được thực hiện theo thứ tự để hạn chế tự động quảng cáo</td>
					</tr>

					<tr>
						<th colspan="2">24 giờ để cho phép người dùng gửi tin nhắn ngắn của số lượng lớn nhất:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="pmlimit1day" value="<?=$pmlimit1day?>" /></td>
						<td>	Trong cùng một thành viên trong vòng 24 giờ để gửi tin nhắn SMS giới hạn, đó là đề nghị rằng 30 - 100 phạm vi của các giá trị, 0 cho không có hạn chế về việc di chuyển để giới hạn các máy móc thông qua hàng loạt quảng cáo chất béo</td>
					</tr>

					<tr>
						<th colspan="2">prevent water:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="pmfloodctrl" value="<?=$pmfloodctrl?>" /></td>
						<td>0 không có hạn chế về việc di chuyển để giới hạn các máy móc thông qua hàng loạt quảng cáo</td>
					</tr>

					<tr>
						<th colspan="2">Mở cửa của Trung tâm tin nhắn ngắn:</th>
					</tr>
					<tr>
					<td>
						<input type="radio" id="pmcenteryes" class="radio" name="pmcenter" value="1" <?=$pmcenter[1]?> onclick="$('hidden1').style.display=''"  /><label for="pmcenteryes">Yes</label>
						<input type="radio" id="pmcenterno" class="radio" name="pmcenter" value="0" <?=$pmcenter[0]?> onclick="$('hidden1').style.display='none'" /><label for="pmcenterno">No</label>
					</td>
					<td>Dù là việc khai trương của Trung tâm tin nhắn ngắn tính năng sẽ không ảnh hưởng đến việc sử dụng các ứng dụng tin nhắn SMS để sử dụng giao diện</td>
					</tr>
					<tbody id="hidden1" <?=$pmcenter['display']?>>
					<tr>
						<th colspan="2">Mã xác minh:</th>
					</tr>
					<tr>
						<td>
							<input type="radio" id="sendpmseccodeyes" class="radio" name="sendpmseccode" value="1" <?=$sendpmseccode[1]?> /><label for="sendpmseccodeyes">Yes</label>
							<input type="radio" id="sendpmseccodeno" class="radio" name="sendpmseccode" value="0" <?=$sendpmseccode[0]?> /><label for="sendpmseccodeno">No</label>
						</td>
						<td>Mã xác thực, để ngăn mã độc hại đến hệ thống</td>
					</tr>
					</tbody>
				</table>
				<div class="opt"><input type="submit" name="submit" value=" Submit " class="btn" tabindex="3" /></div>
			</form>
		</div>
	<? } elseif($a == 'register') { ?>
		<div class="mainbox nomargin">
			<form action="admin.php?m=setting&a=register" method="post">
				<input type="hidden" name="formhash" value="<?=FORMHASH?>">
				<table class="opt">
					<tr>
						<th colspan="2">Cho phép nhiều tài khoản đăng ký một email:</th>
					</tr>
					<tr>
						<td>
							<input type="radio" id="yes" class="radio" name="doublee" value="1" <?=$doublee[1]?> /><label for="yes">Yes</label>
							<input type="radio" id="no" class="radio" name="doublee" value="0" <?=$doublee[0]?> /><label for="no">No</label>
						</td>
					</tr>
					<tr>
						<th colspan="2">Email cho phép:</th>
					</tr>
					<tr>
						<td><textarea class="area" name="accessemail"><?=$accessemail?></textarea></td>
						<td valign="top">Chỉ cho phép email này đăng ký trên diễn đàn</td>
					</tr>
					<tr>
						<th colspan="2">Cấm Email:</th>
					</tr>
					<tr>
						<td><textarea class="area" name="censoremail"><?=$censoremail?></textarea></td>
						<td valign="top">Cấm sử dụng email có đuôi tên miền để đăng ký</td>
					</tr>
					<tr>
						<th colspan="2">Cấm thành viên:</th>
					</tr>
					<tr>
						<td><textarea class="area" name="censorusername"><?=$censorusername?></textarea></td>
						<td valign="top">Có thể thiết đặt thêm dấu sao, vd: beauty*</td>
					</tr>
				</table>
				<div class="opt"><input type="submit" name="submit" value=" Submit " class="btn" tabindex="3" /></div>
			</form>
		</div>
	<? } else { ?>
		<div class="mainbox nomargin">
			<form action="admin.php?m=setting&a=mail" method="post">
				<input type="hidden" name="formhash" value="<?=FORMHASH?>">
				<table class="opt">
					<tr>
						<th colspan="2">Địa chỉ E-mail của các nguồn:</th>
					</tr>
					<tr>
						<td><input name="maildefault" value="<?=$maildefault?>" type="text"></td>
						<td>Gửi e-mail khi bạn không chỉ rõ nguồn gốc của e-mail, sử dụng mặc định địa chỉ e-mail như là một nguồn</td>
					<tr>
						<th colspan="2">Gửi e-mail:</th>
					</tr>
					<tr>
						<td colspan="2">
							<label><input class="radio" name="mailsend" value="1"<? if($mailsend == 1) { ?> checked="checked"<? } ?> onclick="$('hidden1').style.display = 'none';$('hidden2').style.display = 'none';" type="radio"> Thông qua PHP để sendmail (Đề nghị nên dùng)</label><br />
							<label><input class="radio" name="mailsend" value="2"<? if($mailsend == 2) { ?> checked="checked"<? } ?> onclick="$('hidden1').style.display = '';$('hidden2').style.display = '';" type="radio"> Thông qua SOCKET Kết nối máy chủ SMTP để gửi(Phải hỗ trọ ESMTP)</label><br />
							<label><input class="radio" name="mailsend" value="3"<? if($mailsend == 3) { ?> checked="checked"<? } ?> onclick="$('hidden1').style.display = '';$('hidden2').style.display = 'none';" type="radio"> PHP thông qua chức năng SMTP để gửi email (chỉ dưới Windows máy chủ hiệu quả và không hỗ trợ ESMTP xác thực)</label>
						</td>
					</tr>
					<tbody id="hidden1"<? if($mailsend == 1) { ?> style="display:none"<? } ?>>
					<tr>
						<td colspan="2">SMTP Server:</td>
					</tr>
					<tr>
						<td>
							<input name="mailserver" value="<?=$mailserver?>" class="txt" type="text">
						</td>
						<td valign="top">Thiết lập các địa chỉ máy chủ SMTP</td>
					</tr>
					<tr>
						<td colspan="2">Cổng SMTP:</td>
					</tr>
					<tr>
						<td>
							<input name="mailport" value="<?=$mailport?>" type="text">
						</td>
						<td valign="top">Thiết lập cổng máy chủ SMTP , mặc định là 25</td>
					</tr>
					</tbody>
					<tbody id="hidden2"<? if($mailsend == 1 || $mailsend == 3) { ?> style="display:none"<? } ?>>
					<tr>
						<td colspan="2">SMTP Phục vụ yêu cầu xác thực:</td>
					</tr>
					<tr>
						<td>
							<label><input type="radio" class="radio" name="mailauth"<? if($mailauth == 1) { ?> checked="checked"<? } ?> value="1" />Yes</label>
							<label><input type="radio" class="radio" name="mailauth"<? if($mailauth == 0) { ?> checked="checked"<? } ?> value="0" />No</label>
						</td>
						<td valign="top">Nếu các máy chủ SMTP cần xác thực trước khi họ có thể gửi thư, chọn "Có"</td>
					</tr>
					<tr>
						<td colspan="2">Địa chỉ E-mail của người gửi:</td>
					</tr>
					<tr>
						<td>
							<input name="mailfrom" value="<?=$mailfrom?>" class="txt" type="text">
						</td>
						<td valign="top">Nếu bạn cần xác minh, để được phục vụ dựa trên địa chỉ e-mail. Địa chỉ E-mail nếu bạn muốn bao gồm một người dùng tên, định dạng「username &lt;user@domain.com&gt;」</td>
					</tr>
					<tr>
						<td colspan="2">SMTP Xác thực tên người dùng:</td>
					</tr>
					<tr>
						<td>
							<input name="mailauth_username" value="<?=$mailauth_username?>" type="text">
						</td>
						<td valign="top"></td>
					</tr>
					<tr>
						<td colspan="2">SMTP Xác nhận mật khẩu:</td>
					</tr>
					<tr>
						<td>
							<input name="mailauth_password" value="<?=$mailauth_password?>" type="text">
						</td>
						<td valign="top"></td>
					</tr>
					</tbody>
					<tr>
						<th colspan="2">Đầu tiên e-mail:</th>
					</tr>
					<tr>
						<td>
							<label><input class="radio" name="maildelimiter"<? if($maildelimiter == 1) { ?> checked="checked"<? } ?> value="1" type="radio"> CRLF được sử dụng như một separator</label><br />
							<label><input class="radio" name="maildelimiter"<? if($maildelimiter == 0) { ?> checked="checked"<? } ?> value="0" type="radio"> LF được sử dụng như một separator</label><br />
							<label><input class="radio" name="maildelimiter"<? if($maildelimiter == 2) { ?> checked="checked"<? } ?> value="2" type="radio"> CR được sử dụng như một separator</label>
						</td>
						<td>
							Tùy thuộc vào cài đặt máy chủ thư của bạn để điều chỉnh các tham số
						</td>
					</tr>
					<tr>
						<th colspan="2">Địa chỉ người nhận:</th>
					</tr>
					<tr>
						<td>
							<label><input type="radio" class="radio" name="mailusername"<? if($mailusername == 1) { ?> checked="checked"<? } ?> value="1" />Yes</label>
							<label><input type="radio" class="radio" name="mailusername"<? if($mailusername == 0) { ?> checked="checked"<? } ?> value="0" />No</label>
						</td>
						<td valign="top">Chọn "Có" của người nhận ở địa chỉ e-mail bao gồm trong diễn đàn để hiện tên thành viên</td>
					</tr>
					<tr>
						<th colspan="2">Khảo sát của tất cả các thư gửi lỗi:</th>
					</tr>
					<tr>
						<td>
							<label><input type="radio" class="radio" name="mailsilent"<? if($mailsilent == 1) { ?> checked="checked"<? } ?> value="1" />Yes</label>
							<label><input type="radio" class="radio" name="mailsilent"<? if($mailsilent == 0) { ?> checked="checked"<? } ?> value="0" />No</label>
						</td>
						<td valign="top">&nbsp;</td>
					</tr>
				</table>
				<div class="opt"><input type="submit" name="submit" value=" Submit " class="btn" tabindex="3" /></div>
			</form>
		</div>
	<? } ?>
</div>

<? include $this->gettpl('footer');?>