<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: index.php 13234 2009-08-24 08:20:04Z liguode $
*/

define('IN_UCHOME', TRUE);

error_reporting(0);
$_SGLOBAL = $_SCONFIG = $_SBLOCK = array();

//程序目录
define('S_ROOT', substr(dirname(__FILE__), 0, -7));

//获取时间
$_SGLOBAL['timestamp'] = time();

include_once(S_ROOT.'./source/function_common.php');
if(!@include_once(S_ROOT.'./config.php')) {
	@include_once(S_ROOT.'./config.new.php');
	show_msg('Vui lòng sửa "config.new.php" thành "config.php"', 999);
}

//GPC过滤
if(!(get_magic_quotes_gpc())) {
	$_GET = saddslashes($_GET);
	$_POST = saddslashes($_POST);
}

//启用GIP
if ($_SC['gzipcompress'] && function_exists('ob_gzhandler')) {
	ob_start('ob_gzhandler');
} else {
	ob_start();
}

$formhash = formhash();

$theurl = 'index.php';
$sqlfile = S_ROOT.'./data/install.sql';
if(!file_exists($sqlfile)) {
	show_msg('Xin vui lòng tải lên file install.sql vào trong thư mục ./data rồi cài đặt lại', 999);
}
$configfile = S_ROOT.'./config.php';

//变量
$step = empty($_GET['step'])?0:intval($_GET['step']);
$action = empty($_GET['action'])?'':trim($_GET['action']);
$nowarr = array('','','','','','','');

$lockfile = S_ROOT.'./data/install.lock';
if(file_exists($lockfile)) {
	show_msg('Cảnh báo! Bạn đã cài đặt UCenter Home<br>
		Để đảm bảo an ninh dữ liệu, xin vui lòng xóa file install/index.php <br>
		Nếu bạn muốn cài lại UCenter Home thì xóa file data/install.lock');
}

//检查config是否可写
if(!@$fp = fopen($configfile, 'a')) {
	show_msg("CMOD file $configfile sang 777. Vui lòng sửa để tiếp tục");
} else {
	@fclose($fp);
}

//提交处理
if (submitcheck('ucsubmit')) {

	//安装UC配置
	$step = 1;

	//判断域名是否解析
	$ucapi = preg_replace("/\/$/", '', trim($_POST['ucapi']));
	$ucip = trim($_POST['ucip']);

	if(empty($ucapi) || !preg_match("/^(http:\/\/)/i", $ucapi)) {
		show_msg('URL UCenter không đúng');
	} else {
		//检查服务器 dns 解析是否正常, dns 解析不正常则要求用户输入ucenter的ip地址
		if(!$ucip) {
			$temp = @parse_url($ucapi);
			$ucip = gethostbyname($temp['host']);
			if(ip2long($ucip) == -1 || ip2long($ucip) === FALSE) {
				$ucip = '';
			}
		}
	}

	//验证UCHome是否安装
	if(!@include_once S_ROOT.'./uc_client/client.php') {
		show_msg('Thư mục không tồn tại uc_client vui lòng tải gói cài đặt tương ứng lên ./upload/uc_client');
	}
	$ucinfo = uc_fopen2($ucapi.'/index.php?m=app&a=ucinfo&release='.UC_CLIENT_RELEASE, 500, '', '', 1, $ucip);
	list($status, $ucversion, $ucrelease, $uccharset, $ucdbcharset, $apptypes) = explode('|', $ucinfo);
	$dbcharset = strtolower(trim($_SC['dbcharset'] ? str_replace('-', '', $_SC['dbcharset']) : $_SC['dbcharset']));
	$ucdbcharset = strtolower(trim($ucdbcharset ? str_replace('-', '', $ucdbcharset) : $ucdbcharset));
	$apptypes = strtolower(trim($apptypes));
	if($status != 'UC_STATUS_OK') {
		show_header();
		print<<<END
		<form id="theform" method="post" action="$theurl">
		<table class="datatable">
		<tr><td><strong>UCenter Không thể kết nối ( $status ) Hãy chắc chắn rằng địa chỉ IP UCenter là chính xác</strong><br><br></td></tr>
		<tr><td>địa chỉ IP UCenter: <input type="text" name="ucip" value="$ucip"> Ví dụ 192.168.0.1</td></tr>
		</table>
		<table class=button>
		<tr><td>
		<input type="hidden" name="ucapi" value="$ucapi">
		<input type="hidden" name="ucfounderpw" value="$_POST[ucfounderpw]">
		<input type="submit" id="ucsubmit" name="ucsubmit" value="xác nhận"></td></tr>
		</table>
		<input type="hidden" name="formhash" value="$formhash">
		</form>
END;
		show_footer();
		exit();
	} elseif($dbcharset && $ucdbcharset && $ucdbcharset != $dbcharset) {
		show_msg('UCenter mã hóa không phù hợp: '.$ucdbcharset.'tải UCenter Home tại http://www.gohooh.com');
	} elseif(strexists($apptypes, 'uchome')) {
		show_msg('UCenter Home Đã được cài đặt, nếu bạn muốn tiếp tục cài đặt, vào UCenter (Quản lý ứng dụng) để xóa ứng dụng UCenter Home');
	}
	$tagtemplates = 'apptagtemplates[template]='.urlencode('<a href="{url}" target="_blank">{subject}</a>').'&'.
		'apptagtemplates[fields][subject]='.urlencode('Tiêu đề').'&'.
		'apptagtemplates[fields][uid]='.urlencode('ID Người sử dụng').'&'.
		'apptagtemplates[fields][username]='.urlencode('Tên người sử dụng ').'&'.
		'apptagtemplates[fields][dateline]='.urlencode('Ngày ').'&'.
		'apptagtemplates[fields][spaceurl]='.urlencode('Địa chỉ Không gian').'&'.
		'apptagtemplates[fields][url]='.urlencode('Địa chỉ ');

	$uri = $_SERVER['REQUEST_URI']?$_SERVER['REQUEST_URI']:($_SERVER['PHP_SELF']?$_SERVER['PHP_SELF']:$_SERVER['SCRIPT_NAME']);
	$app_url = strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0, strpos($_SERVER['SERVER_PROTOCOL'], '/'))).'://'.$_SERVER['HTTP_HOST'].preg_replace("/\/*install$/i", '', substr($uri, 0, strrpos($uri, '/install')));

	$postdata = "m=app&a=add&ucfounder=&ucfounderpw=".urlencode($_POST['ucfounderpw'])."&apptype=".urlencode('UCHOME')."&appname=".urlencode('个人家园')."&appurl=".urlencode($app_url)."&appip=&appcharset=".$_SC['charset'].'&appdbcharset='.$_SC['dbcharset'].'&release='.UC_CLIENT_RELEASE.'&'.$tagtemplates;
	$s = uc_fopen2($ucapi.'/index.php', 500, $postdata, '', 1, $ucip);
	if(empty($s)) {
		show_msg('UCenter không thể kết nối');
	} elseif($s == '-1') {
		show_msg('Mật khẩu & tài khoản quản trị viên UCenter là không chính xác ');
	} else {
		$ucs = explode('|', $s);
		if(empty($ucs[0]) || empty($ucs[1])) {
			show_msg('Dữ liệu UCenter xin vui lòng tham khảo:<br />'.shtmlspecialchars($s));
		} else {

			//处理成功
			$apphidden = '';
			//验证是否可以直接联接MySQL
			$link = mysql_connect($ucs[2], $ucs[4], $ucs[5], 1);
			$connect = $link && mysql_select_db($ucs[3], $link) ? 'mysql' : '';
			//返回
			foreach (array('key', 'appid', 'dbhost', 'dbname', 'dbuser', 'dbpw', 'dbcharset', 'dbtablepre', 'charset') as $key => $value) {
				if($value == 'dbtablepre') {
					$ucs[$key] = '`'.$ucs[3].'`.'.$ucs[$key];
				}
				$apphidden .= "<input type=\"hidden\" name=\"uc[$value]\" value=\"".$ucs[$key]."\" />";
			}
			//内置
			$apphidden .= "<input type=\"hidden\" name=\"uc[connect]\" value=\"$connect\" />";
			$apphidden .= "<input type=\"hidden\" name=\"uc[api]\" value=\"$_POST[ucapi]\" />";
			$apphidden .= "<input type=\"hidden\" name=\"uc[ip]\" value=\"$ucip\" />";

			show_header();
			print<<<END
			<form id="theform" method="post" action="$theurl">
			<table>
			<tr><td>UCenter Đăng ký thành công! ID hiện tại: $ucs[1]</td></tr>
			</table>

			<table class=button>
			<tr><td>$apphidden
			<input type="submit" id="uc2submit" name="uc2submit" value="Kế tiếp"></td></tr>
			</table>
			<input type="hidden" name="formhash" value="$formhash">
			</form>
END;
			show_footer();
			exit();
		}
	}

} elseif (submitcheck('uc2submit')) {

	//增加congfig配置
	$step = 2;

	//写入config文件
	$configcontent = sreadfile($configfile);
	$keys = array_keys($_POST['uc']);
	foreach ($keys as $value) {
		$upkey = strtoupper($value);
		$configcontent = preg_replace("/define\('UC_".$upkey."'\s*,\s*'.*?'\)/i", "define('UC_".$upkey."', '".$_POST['uc'][$value]."')", $configcontent);
	}
	if(!$fp = fopen($configfile, 'w')) {
		show_msg("Xin vui lòng thiết lập file $configfile được đọc và viết, và sau đó chạy lại chương trình cài đặt");
	}
	fwrite($fp, trim($configcontent));
	fclose($fp);

} elseif(!empty($_POST['sqlsubmit'])) {

	$step = 2;

	//先写入config文件
	$configcontent = sreadfile($configfile);
	$keys = array_keys($_POST['db']);
	foreach ($keys as $value) {
		$configcontent = preg_replace("/[$]\_SC\[\'".$value."\'\](\s*)\=\s*[\"'].*?[\"']/is", "\$_SC['".$value."']\\1= '".$_POST['db'][$value]."'", $configcontent);
	}
	if(!$fp = fopen($configfile, 'w')) {
		show_msg("Xin vui lòng CMOD 777 file $configfile và sau đó chạy lại chương trình cài đặt");
	}
	fwrite($fp, trim($configcontent));
	fclose($fp);
	
	if(empty($_POST['db']['tablepre'])) {
		show_msg('Tài khoản cơ sở dữ liệu UCenter Home không đúng');
	}

	//判断UCenter Home数据库
	$havedata = false;
	if(!@mysql_connect($_POST['db']['dbhost'], $_POST['db']['dbuser'], $_POST['db']['dbpw'])) {
		show_msg('数据库连接信息填写错误，请确认');
	}
	if(mysql_select_db($_POST['db']['dbname'])) {
		if(mysql_query("SELECT COUNT(*) FROM {$_POST['db']['tablepre']}space")) {
			$havedata = true;
		}
	} else {
		if(!mysql_query("CREATE DATABASE `".$_POST['db']['dbname']."`")) {
			show_msg('Thiết lập cơ sở dữ liệu UCenter Home không được phép, xin vui lòng chạy tiến trình cài đặt  bằng tay');
		}
	}

	if($havedata) {
		show_msg('Cảnh báo: đã có Cơ sở dữ liệu củaUCenter Home, nếu bạn tiếp tục cài đặt sẽ xóa dữ liệu cũ!', ($step+1));
	} else {
		show_msg('Bước kế tiếp', ($step+1), 1);
	}

} elseif (submitcheck('opensubmit')) {

	//检查用户身份
	include_once(S_ROOT.'./data/data_config.php');

	$step = 5;

	dbconnect();

	//同步获取用户源
	$_SGLOBAL['timestamp'] = time();

	//UC注册用户
	if(!@include_once S_ROOT.'./uc_client/client.php') {
		showmessage('system_error');
	}
	$uid = uc_user_register($_POST['username'], $_POST['password'], 'webmastor@yourdomain.com');
	if($uid == -3) {
		//已存在，登录
		if(!$passport = getpassport($_POST['username'], $_POST['password'])) {
			show_msg('Username và mật khẩu không đúng');
		}
		$setarr = array(
			'uid' => $passport['uid'],
			'username' => addslashes($passport['username'])
		);
	} elseif($uid > 0) {
		$setarr = array(
			'uid' => $uid,
			'username' => $_POST['username']
		);
	} else {
		show_msg('Tên người dùng không thể đăng ký, xin vui lòng nhập lại');
	}
	$setarr['password'] = md5("$setarr[uid]|$_SGLOBAL[timestamp]");//本地密码随机生成

	//更新本地用户库
	inserttable('member', $setarr, 0, true);

	//开通空间
	include_once(S_ROOT.'./source/function_space.php');
	$space = space_open($setarr['uid'], $_POST['username'], 1);

	//反馈受保护
	$result = uc_user_addprotected($_POST['username'], $_POST['username']);
	$_SGLOBAL['db']->query("UPDATE ".tname('space')." SET flag=1 WHERE username='$_POST[username]'");

	//清理在线session
	insertsession($setarr);

	//设置cookie
	ssetcookie('auth', authcode("$setarr[password]\t$setarr[uid]", 'ENCODE'), 2592000);

	//写log
	if(@$fp = fopen($lockfile, 'w')) {
		fwrite($fp, 'UCenter Home');
		fclose($fp);
	}

	show_msg('<font color="red">Chúc mừng! Bạn đã cài đặt hoàn tất UCenter Home!</font>
		<br>Để bảo mật dữ liệu của bạn, xin vui lòng truy cập vào ftp, xóa các tập tin cài đặt<br><br>
		Thông tin về quản trị viên đã được tạo, tiếp theo bạn có thể:<br>
		<br><a href="http://www.gohooh.com/forum/index.php?gid=172" target="_blank">Xem hướng dẫn sử dụng Ucenter home</a>
		<br><a href="../space.php" target="_blank">Truy cập vào không gian</a>
		<br>Vào trang chủ UCenter Home
		<br><a href="../admincp.php" target="_blank">Quản lý Ucenter home</a>
		<br>Cài đặt các tham số cho Ucenter home', 999);

}

if(empty($step)) {

	show_header();

	//检查权限设置
	$checkok = true;
	$perms = array();
	if(!checkfdperm(S_ROOT.'./config.php', 1)) {
		$perms['config'] = 'Không';
		$checkok = false;
	} else {
		$perms['config'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./attachment/')) {
		$perms['attachment'] = 'Không';
		$checkok = false;
	} else {
		$perms['attachment'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./data/')) {
		$perms['data'] = 'Không';
		$checkok = false;
	} else {
		$perms['data'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./uc_client/data/')) {
		$perms['uc_data'] = 'Không';
		$checkok = false;
	} else {
		$perms['uc_data'] = 'OK';
	}

	//安装阅读
	print<<<END
	<script type="text/javascript">
	function readme() {
		var tbl_readme = document.getElementById('tbl_readme');
		if(tbl_readme.style.display == '') {
			tbl_readme.style.display = 'none';
		} else {
			tbl_readme.style.display = '';
		}
	}
	</script>
	<table class="showtable">
	<tr><td>
	<strong>Chào mừng bạn đến với việc sử dụng UCenter Home</strong><br>
	Thông qua UCenter Home bạn sẽ tạo nên mạng xã hội ảo: viết blog, upload ảnh, bình luận, chia sẻ.....
	Gói Ucenter Home được Việt hóa hoàn toàn bởi <a href="http://www.google.com.vn/search?hl=vi&source=hp&q=gohooh.com&meta=&aq=f&oq=" target="_blank">Discuz! Việt - GoHooH.CoM</a> (có 1 file js từ ndvmedia). Mong các bạn tôn trong quyền tác giả để tiếp tục hoàn chỉnh bản Việt hóa.
	Có thể tham khảo các bài hướng dẫn sử dụng, cập nhật tính năng cho Ucenter home tại<a href="http://www.gohooh.com/forum/index.php?gid=172" target="_blank">Đây</a>
	<br><a href="javascript:;" onclick="readme()"><strong>Hãy đọc qui định về quyền sử dụng (Tiếng Trung Quốc):</strong></a>
	</td></tr>
	</table>

	<table>
	</td></tr>
	<tr><td>
	<strong>File / thư mục cho phép</strong><br>
	Khi bạn chạy file cài đặt để cài đặt trước khi việc cung cấp đầu tiên của các thuộc tính thư mục có liên quan, do đó, các tập tin dữ liệu có thể được procedurally chính xác đọc / ghi / xóa / tạo một thư mục con.<br>
	Đề nghị bạn làm như sau<br>CMod 777 các file và thư mục sau<br>
	<table class="datatable">
	<tr style="font-weight:bold;"><td>Tên</td><td>Quyền</td><td>Mô tả</td><td>Kết quả</td></tr>
	<tr><td><strong>./config.php</strong></td><td>Đọc / Viết</td><td>Hệ thống hồ sơ</td><td>$perms[config]</td></tr>
	<tr><td><strong>./attachment/</strong> (Bao gồm các thư mục, tập tin và thư mục con)</td><td>Đọc / ghi / xoá</td><td>Đính kèm</td><td>$perms[attachment]</td></tr>
	<tr><td><strong>./data/</strong> (Bao gồm các thư mục, tập tin và thư mục con)</td><td>Đọc / ghi / xoá</td><td>Dữ liệu trang web</td><td>$perms[data]</td></tr>
	<tr><td><strong>./uc_client/data/</strong> (Bao gồm các thư mục, tập tin và thư mục con)</td><td>Đọc / ghi / xoá</td><td>uc_clientThư mục dữ liệu</td><td>$perms[uc_data]</td></tr>
	</table>
	</td></tr>
	</table>
END;

	if(!$checkok) {
		echo "<table><tr><td><b>Vấn đề</b>:<br>Hệ thống phát hiện các thư mục hoặc tập tin thiết lập không đúng<br>Sửa lại để tiếp tục cài đặt<br>Nếu không, có thể chọn [<a href=\"$theurl?step=1\">cài đặt bắt buộc</a>]</td></tr></table>";
	} else {
		$ucapi = empty($_POST['ucapi'])?'/':$_POST['ucapi'];
		$ucfounderpw = empty($_POST['ucfounderpw'])?'':$_POST['ucfounderpw'];
		print <<<END
		<form id="theform" method="post" action="$theurl?step=1">
			<table class=button>
				<tr>
					<td><input type="submit" id="startsubmit" name="startsubmit" value="Chấp nhận thỏa thuận giấy phép, để bắt đầu cài đặt UCenter Home"></td>
				</tr>
			</table>
			<input type="hidden" name="ucapi" value="$ucapi" />
			<input type="hidden" name="ucfounderpw" value="$ucfounderpw" />
			<input type="hidden" name="formhash" value="$formhash">
		</form>
END;
	}

	print<<<END
	<table id="tbl_readme" style="display:none;" class="showtable">
	<tr>
	<td><strong>Xin nhớ đọc kỹ các thỏa thuận giấy phép sau đây:</strong> </td></tr>
	<tr>
	<td>
	<div>中文版授权协议 适用于中文用户
	<p>版权所有 (C) 2001-2009，康盛创想（北京）科技有限公司<br>保留所有权利。
	</p><p>感谢您选择 UCenter Home。希望我们的努力能为您提供一个强大的社会化网络(SNS)解决方案。通过 UCenter Home，建站者可以轻松构建一个以好友关系为核心的交流网络，让站点用户可以用一句话记录生活中的点点滴滴；方便快捷地发布日志、上传图片；更可以十分方便的与其好友们一起分享信息、讨论感兴趣的话题；轻松快捷的了解好友最新动态。
	</p><p>康盛创想（北京）科技有限公司为 UCenter Home 产品的开发商，依法独立拥有 UCenter Home 产品著作权（中国国家版权局 著作权登记号 2006SR12091）。康盛创想（北京）科技有限公司网址为
	http://www.comsenz.com，UCenter Home 官方网站网址为 http://u.discuz.net。
	</p><p>UCenter Home 著作权已在中华人民共和国国家版权局注册，著作权受到法律和国际公约保护。使用者：无论个人或组织、盈利与否、用途如何
	（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用 UCenter Home 软件。
	</p><p>康盛创想（北京）科技有限公司拥有对本授权协议的最终解释权。
	<ul type=i>
	<p>
	<li><b>协议许可的权利</b>
	<ul type=1>
	<li>您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。
	<li>您可以在协议规定的约束和限制范围内修改 UCenter Home 源代码(如果被提供的话)或界面风格以适应您的网站要求。
	<li>您拥有使用本软件构建的站点中全部会员资料、文章及相关信息的所有权，并独立承担与文章内容的相关法律义务。
	<li>获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，
	自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见
	将被作为首要考虑，但没有一定被采纳的承诺或保证。 </li></ul>
	<p></p>
	<li><b>协议规定的约束和限制</b>
	<ul type=1>
	<li>未获商业授权之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目或实现盈利的网站）。购买商业授权请登陆http://www.discuz.com参考相关说明，也可以致电8610-51657885了解详情。
	<li>不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。
	<li>无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用 UCenter Home 的整体或任何部分，未经书面许可，程序页面页脚处
	的 UCenter Home 名称和康盛创想（北京）科技有限公司下属网站（http://www.comsenz.com、http://u.discuz.net） 的 链接都必须保留，而不能清除或修改。
	<li>禁止在 UCenter Home 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。
	<li>如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。 </li></ul>
	<p></p>
	<li><b>有限担保和免责声明</b>
	<ul type=1>
	<li>本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。
	<li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，
	也不承担任何因使用本软件而产生问题的相关责任。
	<li>康盛创想（北京）科技有限公司不对使用本软件构建的站点中的文章或信息承担责任。 </li></ul></li></ul>
	<p>有关 UCenter Home 最终用户授权协议、商业授权与技术服务的详细内容，均由 UCenter Home 官方网站独家提供。康盛创想（北京）科技有限公司拥有在不 事先通知的情况下，修改授权协议和服务价目表的权力，修改后的协议或价目表对自改变之日起的新授权用户生效。
	<p>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 UCenter Home，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。 </p></div>
	</td></tr>
	</table>
END;

	show_footer();

} elseif($step == 1) {

	show_header();
	$ucapi = "http://";
	$ucfounderpw = '';
	$showdiv = 0;
	if($_POST['ucfounderpw']) {
		$showdiv = 1;
		$ucapi = trim($_POST['ucapi']);
		$ucfounderpw = trim($_POST['ucfounderpw']);
	}

	if($showdiv) {
		print<<<END
		<form id="theform" method="post" action="$theurl">
		<div>
			<table class="showtable">
				<tr><td><strong># Tham số UCenter</strong></td></tr>
				<tr><td id="msg2">Thông tin có liên quan UCenter đã được bảo đảm, xin vui lòng tiếp tục</td></tr>
			</table>
			<br/>
		</div>
		<div>
END;
	} else {
		$plus = '';
		if(!$ucfounderpw) {
			$plus = '<tr><td id="msg2">
					Việc sử dụng các UCenter Trang chủ cần phải cài đặt UCenter.<br>
					Nếu trang web của bạn chưa cài đặt UCenter, vui lòng thực hiện các hoạt động:<br>
					1. <a href="http://www.gohooh.com/forum/forumdisplay.php?fid=173" target="_blank"><b>Click vào đây để tải về phiên bản mới nhất của UCenter</b></a>, Và đọc hướng dẫn trong gói phần mềm cài đặt của UCenter. <br>
					2. Sau khi cài đặt UCenter thì điền thông tin của Ucenter vào để tiếp tục cài đặt của UCenter Home. <br>
				</td></tr>';
		}
		print<<<END
		<form id="theform" method="post" action="$theurl">
		<div>
			<table class="showtable">
				<tr><td><strong># Xin vui lòng điền vào thông số liên quan UCenter</strong></td></tr>
				$plus
			</table>
			<br>
			<p style="font-weight:bold;">Xin vui lòng nhập các thông tin đã cài đặt UCenter:</p>
END;
	}
	print<<<END
		<table class=datatable>
			<tbody>
				<tr>
					<td>UCenter URL:</td>
					<td><input type="text" id="ucapi" name="ucapi" size="60" value="$ucapi"><br>ví dụ http://www.gohooh.com/ucenter</td>
				</tr>
				<tr>
					<td>Mật khẩu UCenter:</td>
					<td><input type="password" id="ucfounderpw" name="ucfounderpw" size="20" value="$ucfounderpw"></td>
				</tr>
			</tbody>
		</table>
		<br>
	</div>
	<table class=button>
	<tr><td><input type="submit" id="ucsubmit" name="ucsubmit" value="Xác nhận cấu hình UCenter"></td></tr>
	</table>
	<input type="hidden" id="ucfounder" name="ucfounder" size="20" value="">
	<input type="hidden" name="formhash" value="$formhash">
	</form>
END;
	show_footer();

} elseif ($step == 2) {

	//检测目录属性
	show_header();
	//设置数据库配置
	print<<<END
	<form id="theform" method="post" action="$theurl">

	<table class="showtable">
	<tr><td><strong># Thông tin cơ sở dữ liệu UCenter Home</strong></td></tr>
	<tr><td id="msg1">Thiết lập thông tin cơ sở dữ liệu UCenter Home</td></tr>
	</table>
	<table class=datatable>
	<tr>
	<td width="25%">Máy chủ dữ liệu:</td>
	<td><input type="text" name="db[dbhost]" size="20" value="localhost"></td>
	<td width="30%">Thường là localhost</td>
	</tr>
	<tr>
	<td>Username:</td>
	<td><input type="text" name="db[dbuser]" size="20" value=""></td>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>Mật khẩu:</td>
	<td><input type="password" name="db[dbpw]" size="20" value=""></td>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>Mã hóa:</td>
	<td>
	<select name="db[dbcharset]" onchange="addoption(this)">
	<option value="$_SC[dbcharset]">$_SC[dbcharset]</option>
	<option value="gbk">gbk</option>
	<option value="utf8">utf8</option>
	<option value="big5">big5</option>
	<option value="latin1">latin1</option>
	<option value="addoption" class="addoption">+Tùy chỉnh</option>
	</select>
	</td>
	<td>Yêu cầu phiên bản MySQL >4.1</td>
	</tr>
	<tr>
	<td>Tên cơ sở dữ liệu:</td>
	<td><input type="text" name="db[dbname]" size="20" value=""></td>
	<td>Nếu không tồn tại, sẽtự động tạo ra</td>
	</tr>
	<tr>
	<td>Tiền tố:</td>
	<td><input type="text" name="db[tablepre]" size="20" value="uchome_"></td>
	<td>Mặc định là uchome_</td>
	</tr>
	</table>


	<table class=button>
	<tr><td><input type="submit" id="sqlsubmit" name="sqlsubmit" value="Ok"></td></tr>
	</table>
	<input type="hidden" name="formhash" value="$formhash">
	</form>
END;
	show_footer();

} elseif ($step == 3) {

	//链接数据库
	dbconnect();

	//安装数据库
	//获取最新的sql文
	$newsql = sreadfile($sqlfile);

	if($_SC['tablepre'] != 'uchome_') $newsql = str_replace('uchome_', $_SC['tablepre'], $newsql);//替换表名前缀

	//获取要创建的表
	$tables = $sqls = array();
	if($newsql) {
		preg_match_all("/(CREATE TABLE ([a-z0-9\_\-`]+).+?\s*)(TYPE|ENGINE)+\=/is", $newsql, $mathes);
		$sqls = $mathes[1];
		$tables = $mathes[2];
	}
	if(empty($tables)) {
		show_msg("Không thể thực hiện tiến trình cài đặt  SQL, hãy chắc chắn rằng tập tin SQL $sqlfile tồn tại");
	}

	$heaptype = $_SGLOBAL['db']->version()>'4.1'?" ENGINE=MEMORY".(empty($_SC['dbcharset'])?'':" DEFAULT CHARSET=$_SC[dbcharset]" ):" TYPE=HEAP";
	$myisamtype = $_SGLOBAL['db']->version()>'4.1'?" ENGINE=MYISAM".(empty($_SC['dbcharset'])?'':" DEFAULT CHARSET=$_SC[dbcharset]" ):" TYPE=MYISAM";
	$installok = true;
	foreach ($tables as $key => $tablename) {
		if(strpos($tablename, 'session')) {
			$sqltype = $heaptype;
		} else {
			$sqltype = $myisamtype;
		}
		$_SGLOBAL['db']->query("DROP TABLE IF EXISTS `$tablename`");
		if(!$query = $_SGLOBAL['db']->query($sqls[$key].$sqltype, 'SILENT')) {
			$installok = false;
			break;
		}
	}
	if(!$installok) {
		show_msg("<font color=\"blue\">Data Sheet ($tablename) tự động cài đặt không thành công</font><br />Phản hồi: ".mysql_error()."<br /><br />Xin vui lòng tham khảo tập tin SQL $sqlfile  và sau đó tiếp tục hoạt động cài đặt<br /><br /><a href=\"?step=$step\">Thử lại</a>");
	} else {
		show_msg('Bước tiếp theo', ($step+1), 1);
	}

} elseif ($step == 4) {

	//插入默认数据
	dbconnect();
	$privacy = array(
		'view' => array(
			'index' => 0,
			'profile' => 0,
			'friend' => 0,
			'wall' => 0,
			'feed' => 0,
			'mtag' => 0,
			'event' => 0,
			'doing' => 0,
			'blog' => 0,
			'album' => 0,
			'share' => 0,
			'poll' => 0
		),
		'feed' => array(
			'doing' => 1,
			'blog' => 1,
			'upload' => 1,
			'share' => 1,
			'poll' => 1,
			'joinpoll' => 1,
			'thread' => 1,
			'post' => 1,
			'mtag' => 1,
			'event' => 1,
			'join' => 1,
			'friend' => 1,
			'comment' => 1,
			'show' => 1,
			'spaceopen' => 1,
			'credit' => 1,
			'invite' => 1,
			'task' => 1,
			'profile' => 1,
			'album' => 1,
			'click' => 1
		)
	);
	//config
	$datas = array(
		"('sitename', 'Mạng xã hội - Viết blog - nhật ký online - GoHooH.CoM')",
		"('template', 'default')",
		"('adminemail', 'gohooh.com@".$_SERVER['HTTP_HOST']."')",
		"('onlinehold', '1800')",
		"('timeoffset', '8')",
		"('maxpage', '100')",
		"('starcredit', '100')",
		"('starlevelnum', '5')",
		"('cachemode', 'database')",
		"('cachegrade', '0')",
		"('allowcache', '1')",
		"('allowdomain', '0')",
		"('allowrewrite', '0')",
		"('allowwatermark', '0')",
		"('allowftp', '0')",
		"('holddomain', 'www|*blog*|*space*|x')",
		"('mtagminnum', '5')",
		"('feedday', '7')",
		"('feedmaxnum', '100')",
		"('feedfilternum', '10')",
		"('importnum', '100')",
		"('maxreward', '10')",
		"('singlesent', '50')",
		"('groupnum', '8')",
		"('closeregister', '0')",
		"('closeinvite', '0')",
		"('close', '0')",
		"('networkpublic', '1')",
		"('networkpage', '1')",
		"('seccode_register', '1')",
		"('uc_tagrelated', '1')",
		"('manualmoderator', '1')",
		"('linkguide', '1')",
		"('showall', '1')",
		"('sendmailday', '0')",
		"('realname', '0')",
		"('namecheck', '0')",
		"('namechange', '0')",
		"('name_allowviewspace', '1')",
		"('name_allowfriend', '1')",
		"('name_allowpoke', '1')",
		"('name_allowdoing', '1')",
		"('name_allowblog', '0')",
		"('name_allowalbum', '0')",
		"('name_allowthread', '0')",
		"('name_allowshare', '0')",
		"('name_allowcomment', '0')",
		"('name_allowpost', '0')",
		"('showallfriendnum', '10')",
		"('feedtargetblank', '1')",
		"('feedread', '1')",
		"('feedhotnum', '3')",
		"('feedhotday', '2')",
		"('feedhotmin', '3')",
		"('feedhiddenicon', 'friend,profile,task,wall')",
		"('uc_tagrelatedtime', '86400')",
		"('privacy', '".serialize($privacy)."')",
		"('cronnextrun', '$_SGLOBAL[timestamp]')",
		"('my_status', '0')",
		"('maxreward', '10')",
		"('uniqueemail', '1')",
		"('updatestat', '1')",
		"('my_showgift', '1')",
		"('topcachetime', '60')",
		"('newspacenum', '3')"
	);
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('config'));
	$_SGLOBAL['db']->query("REPLACE INTO ".tname('config')." (var, datavalue) VALUES ".implode(',', $datas));

	//profield
	$datas = array(
		"('自由联盟', 'text', '100', '0', '1')",
		"('地区联盟', 'text', '100', '0', '1')",
		"('兴趣联盟', 'text', '100', '0', '1')"
	);
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('profield'));
	$_SGLOBAL['db']->query("REPLACE INTO ".tname('profield')." (title,formtype,inputnum,manualmoderator,manualmember) VALUES ".implode(',', $datas));

	//用户组
	$datas = array();
	$datas['grouptitle'] = array('Admin', 'Mod', 'VIP', 'Thành viên bị giới hạn', 'Member', 'Thành viên trung cấp', 'Thành viên cao cấp', 'Banner');

	//核心设置
	$datas['gid'] = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$datas['system'] = array(-1, -1, 1, 0, 0, 0, 0, -1, -1);
	$datas['explower'] = array(0, 0, 0, -999999999, 0, 100, 1000, 0, 0);
	$datas['banvisit'] = array(0, 0, 0, 0, 0, 0, 0, 0, 1);
	$datas['searchignore'] = array(1, 1, 1, 0, 0, 0, 1, 0, 0);
	$datas['videophotoignore'] = array(1, 1, 0, 0, 0, 0, 0, 0, 0);
	$datas['spamignore'] = array(1, 1, 1, 0, 0, 0, 0, 0, 0);

	$datas['color'] = array('red', 'blue', 'green', '', '', '', '', '', '');
	$datas['icon'] = array('image/group/admin.gif', 'image/group/infor.gif', 'image/group/vip.gif', '', '', '', '', '', '');

	//基本设置
	$datas['maxfriendnum'] = array(0, 0, 0, 10, 100, 200, 300, 1, 1);
	$datas['maxattachsize'] = array(0, 0, 0, 10, 20, 50, 100, 1, 1);
	$datas['postinterval'] = array(0, 0, 0, 300, 60, 30, 10, 9999, 9999);
	$datas['searchinterval'] = array(0, 0, 0, 600, 60, 30, 10, 9999, 9999);
	
	$datas['verifyevent'] = array(0, 0, 0, 1, 0, 0, 0, 1, 1);

	$datas['domainlength'] = array(1, 3, 3, 0, 0, 5, 3, 99, 99);
	$datas['closeignore'] = array(1, 1, 0, 0, 0, 0, 0, 0, 0);
	$datas['seccode'] = array(0, 0, 0, 1, 0, 0, 0, 1, 1);

	$datas['allowhtml'] = array(1, 1, 1, 0, 0, 0, 1, 0, 0);
	$datas['allowcss'] = array(1, 1, 1, 0, 0, 0, 1, 0, 0);
	$datas['allowviewvideopic'] = array(1, 1, 1, 0, 0, 0, 0, 0, 0);
	
	$datas['allowtopic'] = array(1, 1, 0, 0, 0, 0, 0, 0, 0);
	$datas['allowstat'] = array(1, 1, 0, 0, 0, 0, 0, 0, 0);
	
	foreach (array('comment','blog','poll','doing','upload','share','mtag','thread','post','poke','friend','click','event','magic', 'pm', 'myop') as $value) {
		$datas['allow'.$value] = array(1, 1, 1, 0, 1, 1, 1, 0, 0);
	}

	//管理权限
	//站点设置
	foreach (array('config','usergroup','credit','profilefield','profield','censor','ad','cache','block','template','backup','stat','cron','app', 'network','name','task','report', 'eventclass', 'magic','magiclog','topic', 'batch', 'delspace', 'spacegroup', 'spaceinfo', 'spacecredit', 'spacenote', 'ip', 'hotuser', 'defaultuser', 'click', 'videophoto', 'log') as $value) {
		$datas['manage'.$value] = array(1, 0, 0, 0, 0, 0, 0, 0, 0);
	}

	//信息管理
	foreach (array('tag','mtag','feed','share','doing', 'blog','album','comment','thread', 'event', 'poll') as $value) {
		$datas['manage'.$value] = array(1, 1, 0, 0, 0, 0, 0, 0, 0);
	}

	$keys = array_keys($datas);
	$newdatas = array();
	$g_count = count($datas['grouptitle']);
	for ($i=0; $i<$g_count; $i++) {
		$thes = array();
		foreach ($keys as $value) {
			$thes[] = $datas[$value][$i];
		}
		$newdatas[$i] = "(".simplode($thes).")";
	}
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('usergroup'));
	$_SGLOBAL['db']->query("REPLACE INTO ".tname('usergroup')." (".implode(',', $keys).") VALUES ".implode(',', $newdatas));

	//积分规则
	$ruls = array();
	//加积分
	$ruls[] = "('Xây nhà mới', 'register', '0', '0', '1', '1', '10', '0', '0')";
	$ruls[] = "('Xác nhận tên thật', 'realname', '0', '0', '1', '1', '20', '0', '20')";
	$ruls[] = "('Xác nhận email', 'realemail', '0', '0', '1', '1', '40', '0', '40')";
	$ruls[] = "('Mời bạn bè thành công ', 'invitefriend', '4', '0', '20', '1', '10', '0', '10')";
	$ruls[] = "('Cài avatar', 'setavatar', '0', '0', '1', '1', '15', '0', '15')";
	$ruls[] = "('Mã chứng nhận', 'videophoto', '0', '0', '1', '1', '40', '0', '40')";
	$ruls[] = "('Báo cáo thành công', 'report', '4', '0', '0', '1', '2', '0', '2')";
	$ruls[] = "('Cập nhật tâm trạng', 'updatemood', '1', '0', '3', '1', '3', '0', '3')";
	$ruls[] = "('Thông tin nóng', 'hotinfo', '4', '0', '0', '1', '10', '0', '10')";
	$ruls[] = "('Đăng nhập ngày', 'daylogin', '1', '0', '1', '1', '15', '0', '15')";
	$ruls[] = "('Truy cập vào không gian cho những người khác', 'visit', '1', '0', '10', '1', '1', '2', '1')";
	$ruls[] = "('Xin chào', 'poke', '1', '0', '10', '1', '1', '2', '1')";
	$ruls[] = "('Thông báo', 'guestbook', '1', '0', '20', '1', '2', '2', '2')";
	$ruls[] = "('Nhận thông báo', 'getguestbook', '1', '0', '5', '1', '1', '2', '0')";
	$ruls[] = "('Được đăng hồ sơ', 'doing', '1', '0', '5', '1', '1', '0', '1')";
	$ruls[] = "('Viết blog', 'publishblog', '1', '0', '3', '1', '5', '0', '5')";
	$ruls[] = "('Upload hình ảnh', 'uploadimage', '1', '0', '10', '1', '2', '0', '2')";
	$ruls[] = "('Hoàn thành biểu tượng cảm xúc', 'camera', '1', '0', '5', '1', '3', '0', '3')";
	$ruls[] = "('Đăng chủ đề', 'publishthread', '1', '0', '5', '1', '5', '0', '5')";
	$ruls[] = "('Trả lời chủ đề', 'replythread', '1', '0', '10', '1', '1', '1', '1')";
	$ruls[] = "('Tạo bình chọn', 'createpoll', '1', '0', '5', '1', '2', '0', '2')";
	$ruls[] = "('Tham gia bình chọn', 'joinpoll', '1', '0', '10', '1', '1', '1', '1')";
	$ruls[] = "('Tạo sự kiện', 'createevent', '1', '0', '1', '1', '3', '0', '3')";
	$ruls[] = "('Tham gia sự kiện', 'joinevent', '1', '0', '1', '1', '1', '1', '1')";
	$ruls[] = "('Yêu cầu sự kiện', 'recommendevent', '4', '0', '0', '1', '10', '0', '10')";
	$ruls[] = "('Tạo chia sẻ', 'createshare', '1', '0', '3', '1', '2', '0', '2')";
	$ruls[] = "('Bình luận', 'comment', '1', '0', '40', '1', '1', '1', '1')";
	$ruls[] = "('Nhận bình luận', 'getcomment', '1', '0', '20', '1', '1', '1', '0')";
	$ruls[] = "('Cài đặt ứng dụng', 'installapp', '4', '0', '0', '1', '5', '3', '5')";
	$ruls[] = "('Sử dụng ứng dụng', 'useapp', '1', '0', '10', '1', '1', '3', '1')";
	$ruls[] = "('Thông tin nổi bật', 'click', '1', '0', '10', '1', '1', '1', '1')";
	//扣积分
	$ruls[] = "('Sửa tên thật', 'editrealname', '0', '0', '1', '0', '5', '0', '0')";
	$ruls[] = "('Sửa email', 'editrealemail', '0', '0', '1', '0', '5', '0', '0')";
	$ruls[] = "('Xóa Avatar', 'delavatar', '0', '0', '1', '0', '10', '0', '10')";
	$ruls[] = "('Nhận mã lời mời', 'invitecode', '0', '0', '1', '0', '0', '0', '0')";
	$ruls[] = "('Tiềm kiếm', 'search', '0', '0', '1', '0', '1', '0', '0')";
	$ruls[] = "('Nhập blog', 'blogimport', '0', '0', '1', '0', '10', '0', '0')";
	$ruls[] = "('Sửa đổi tên miền', 'modifydomain', '0', '0', '1', '0', '5', '0', '0')";
	$ruls[] = "('Xóa blog', 'delblog', '0', '0', '1', '0', '10', '0', '10')";
	$ruls[] = "('Xóa hoạt động', 'deldoing', '0', '0', '1', '0', '2', '0', '2')";
	$ruls[] = "('Xóa ảnh', 'delimage', '0', '0', '1', '0', '4', '0', '4')";
	$ruls[] = "('Xóa bình chọn', 'delpoll', '0', '0', '1', '0', '4', '0', '4')";
	$ruls[] = "('Xóa chủ đề', 'delthread', '0', '0', '1', '0', '4', '0', '4')";
	$ruls[] = "('Xóa sự kiện', 'delevent', '0', '0', '1', '0', '6', '0', '6')";
	$ruls[] = "('Xóa chia sẻ', 'delshare', '0', '0', '1', '0', '4', '0', '4')";
	$ruls[] = "('Xóa thông báo', 'delguestbook', '0', '0', '1', '0', '4', '0', '4')";
	$ruls[] = "('Xóa bình luận', 'delcomment', '0', '0', '1', '0', '2', '0', '2')";
	
	$_SGLOBAL['db']->query("INSERT INTO ".tname('creditrule')." (`rulename`, `action`, `cycletype`, `cycletime`, `rewardnum`, `rewardtype`, `credit`, `norepeat`, `experience`) VALUES ".implode(',', $ruls));
			
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('data'));
	//邮件设置
	$mails = array(
		'mailsend' => 1,
		'maildelimiter' => 0,
		'mailusername' => 1
	);
	data_set('mail', $mails);

	//缩略图设置
	$settings = array(
		'thumbwidth' => 100,
		'thumbheight' => 100,
		'watermarkpos' => 4,
		'watermarktrans' => 75
	);
	data_set('setting', $settings);
	
	//随便看看
	$network = array(
		'blog' => array('hot1'=>3, 'cache'=>600),
		'pic' => array('hot1'=>3, 'cache'=>700),
		'thread' => array('hot1'=>3, 'cache'=>800),
		'event' => array('cache'=>900),
		'poll' => array('cache'=>500),
	);
	data_set('network', $network);

	//计划任务
	$datas = array(
		"1, 'system', 'Cập nhật số liệu thống kê', 'log.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, -1, '0	5	10	15	20	25	30	35	40	45	50	55'",
		"1, 'system', 'Xóa feed', 'cleanfeed.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, 3, '4'",
		"1, 'system', 'Xóa thông báo cá nhân', 'cleannotification.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, 5, '6'",
		"1, 'system', 'Nhận feed', 'getfeed.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, -1, '2	7	12	17	22	27	32	37	42	47	52'",
		"1, 'system', 'Xóa dấu vết truy cập mới nhất', 'cleantrace.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, 2, '3'"
	);
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('cron'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('cron')." (available, type, name, filename, lastrun, nextrun, weekday, day, hour, minute) VALUES (".implode('),(', $datas).")");

	
	//用户任务
	$datas = array();
	$datas[] = "1, 'Cập nhật Avatar ban đầu', 'Đây là nơi quản lý avatar của bạn<br>Avatar kool sẽ giúp bạn được nhiều người ghé thăm', 'avatar.php', 1, '', 0, 20, 'image/task/avatar.gif'";
	$datas[] = "1, 'Cập nhật Prolife', 'Cập nhật đầy đủ các thông tin cá nhân<br>Nó giúp bạn được tìm thêm bạn bè, hệ thống sẽ giúp bạn được nhiều bạn bè tìm thấy hơn', 'profile.php', '', 2, 0, 20, 'image/task/profile.gif'";
	$datas[] = "1, 'Viết blog đầu tiên', 'Bạn có thể viết blog ngay bây giờ<br>Hãy chia sẻ cảm xúc với mọi người', 'blog.php', 3, '', 0, 5, 'image/task/blog.gif'";
	$datas[] = "1, 'Tìm và thêm bạn bè', 'Có thể nhiều bạn bè bạn sẽ cập nhập được nhiều thông tin bổ ích<br>Nó sẽ giúp trang của bạn phát triển tốt hơn', 'friend.php', 4, '', 0, 50, 'image/task/friend.gif'";
	$datas[] = "1, 'Kích hoạt email', 'Điền địa chỉ email thật của bạn để kích hoạt<br>Nếu bạn quên mật thì có thể dùng email này để lấy lại mật khẩu<br>Hoặc dùng nó để gửi thông báo cho bạn bè', 'email.php', 5, '', 0, 10, 'image/task/email.gif'";
	$datas[] = "1, 'Mời tham gia 10 bạn mới', 'Có thể dùng Y!M hay bất cứ gì để gởi lời mời bạn bè tham gia vào mạng xã hội ảo GoHooH.CoM', 'invite.php', 6, '', 0, 100, 'image/task/friend.gif'";
	$datas[] = "1, 'Nhận thưởng', 'Tặng thưởng cho các member GoHooH.CoM', 'gift.php', 99, 'day', 0, 5, 'image/task/gift.gif'";

	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('task'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('task')." (`available`, `name`, `note`, `filename`, `displayorder`, `nexttype`, `nexttime`, `credit`, `image`) VALUES (".implode('),(', $datas).")");

	//活动分类
	$datas = array(
		"1, 'Hội họp/Offline', 0, '费用说明：\r\n集合地点：\r\nDress code:\r\n联系方式：\r\n注意事项：', 1",
		"2, 'Du lịch', 0, '路线说明:\r\n费用说明:\r\n装备要求:\r\n交通工具:\r\n集合地点:\r\n联系方式:\r\n注意事项:', 2",
		"3, 'Cuộc thi/ Sự kiện ', 0, '费用说明：\r\n集合地点：\r\n着装要求：\r\n场地介绍：\r\n联系方式：\r\n注意事项：', 4",
		"4, 'Phim ảnh/ diễn viên', 0, '剧情介绍：\r\n费用说明：\r\n集合地点：\r\n联系方式：\r\n注意事项：', 3",
		"5, 'Giáo dục / Hội thảo', 0, '主办单位：\r\n活动主题：\r\n费用说明：\r\n集合地点：\r\n联系方式：\r\n注意事项：', 5",
		"6, 'Loại khác', 0, '', 6"
	);	
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('eventclass'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('eventclass')." (classid, classname, poster, template, displayorder) VALUES (".implode('),(', $datas).")");
	
	//道具
	$datas = array();
	$datas[] = "'invisible', 'Ẩn truy cập', 'Ấn dấu truy cập trong vòng 24h', '5', '50', '86400', '10', '86400', '1'";
	$datas[] = "'friendnum', 'Tăng giới hạn', 'Bạn có thể add thêm 10 bạn vào danh sách khi dùng thẻ này', '3', '30', '86400', '999', '0', '1'";
	$datas[] = "'attachsize', 'Tăng dung lượng', 'Dùng để tăng thêm dung lượng upload là 10MB', '3', '30', '86400', '999', '0', '1'";
	$datas[] = "'thunder', 'Thẻ vui nhộn', 'Làm cho mọi người biết thông tin của bạn', '5', '500', '86400', '5', '86400', '1'";
	$datas[] = "'updateline', 'Phao', 'Thời gian phát hành của đối tượng được chỉ định để cập nhật thời gian hiện tại', '5', '200', '86400', '999', '0', '1'";
		
	$datas[] = "'downdateline', 'Máy thời gian', 'Sự phát hành của đối tượng cụ thể để có thời gian thay đổi thời gian trong quá khứ', '5', '250', '86400', '999', '0', '1'";		
	$datas[] = "'color', 'Thẻ màu', 'Dùng để đổi màu tiêu đề bài viết', '5', '50', '86400', '999', '0', '1'";
	$datas[] = "'hot', 'Hot Lights', 'Tăng độ nóng và quan tâm của bài viết', '5', '50', '86400', '999', '0', '1'";
	$datas[] = "'visit', 'Thẻ ghé thăm', 'Chọn ngẫu nhiên 10 người bạn mời ghé thăm trang của mình', '2', '20', '86400', '999', '0', '1'";
	$datas[] = "'icon', 'Trứng cầu vồng', 'Tiêu đề bài được chọn sẽ tăng thêm 8 biểu tượng', '2', '20', '86400', '999', '0', '1'";
		
	$datas[] = "'flicker', 'Màu cầu vồng', 'Màu chữ bình luận, tiêu đề nhấp nháy', '3', '30', '86400', '999', '0', '1'";
	$datas[] = "'gift', 'Phong bì đỏ', 'Điểm trong không gian riêng của họ trồng trong một phong bì màu đỏ cho khách', '2', '20', '86400', '999', '0', '1'";
	$datas[] = "'superstar', 'Superstar', 'Tại trang chủ cá nhân, để tăng diện tích logo siêu sao của riêng mình', '3', '30', '86400', '999', '0', '1'";
	$datas[] = "'viewmagiclog', 'Gương thần', 'Xem được hồ sơ xử dụng thẻ Vip', '5', '100', '86400', '999', '0', '1'";
	$datas[] = "'viewmagic', 'Kính lúp', 'Xem các chủ sở hữu đang dùng thẻ VIP', '5', '100', '86400', '999', '0', '1'";
		
	$datas[] = "'viewvisitor', 'View visitor', 'Xem người được chỉ định đã ghé thăm 10 trang nào gần đây', '5', '100', '86400', '999', '0', '1'";
	$datas[] = "'call', 'Mời ghé thăm', 'Thông báo cho bạn bè xem mục được chọn', '5', '50', '86400', '999', '0', '1'";
	$datas[] = "'coupon', 'Chứng từ','Khi mua đạo cụ cho một số tiền nhất định của các điểm off', '0', '0', '0', '0', '0', '1'";
	$datas[] = "'frame', 'Khung ảnh', 'Tạo khung ảnh khi bạn up ảnh lên', '3', '30', '86400', '999', '0', '1'";
	$datas[] = "'bgimage', 'Nền bài viết', 'Thêm nền cho bài viết của bạn', '3', '30', '86400', '999', '0', '1'";
		
	$datas[] = "'doodle', 'Vẽ Graffiti', 'Cho phép bạn vẽ như Paint ngộ nghĩnh', '3', '30', '86400', '999', '0', '1'";
	$datas[] = "'anonymous', 'Thẻ Nặc danh', 'Có thể tham gia như người nặc danh', '5', '50', '86400', '999', '0', '1'";
	$datas[] = "'reveal', 'Gương thần', 'Bạn có thể xem danh tính thực sự của một người vô danh', '5', '100', '86400', '999', '0', '1'";
	$datas[] = "'license', 'Giấy phép', 'Giấy phép sẽ được giới thiệu cho các bạn', '1', '10', '3600', '999', '0', '1'";
	$datas[] = "'detector', 'Detector', 'Chôn trong một phong bì màu đỏ của không gian thăm dò', '1', '10', '86400', '999', '0', '1'";
	
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('magic'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('magic')."(`mid`, `name`, `description`, `experience`, `charge`, `provideperoid`, `providecount`, `useperoid`, `usecount`) VALUES (".implode('),(', $datas).")");		

	//表态
	$datas = array(
		"'1', 'Bỏ qua', 'luguo.gif', 'blogid'",
		"'2', 'Sét đánh', 'leiren.gif', 'blogid'",
		"'3', 'Kết bạn', 'woshou.gif', 'blogid'",
		"'4', 'Tặng hoa', 'xianhua.gif', 'blogid'",
		"'5', 'Ốp la', 'jidan.gif', 'blogid'",
		
		"'6', 'Yêu thích', 'piaoliang.gif', 'picid'",
		"'7', 'Cool', 'kubi.gif', 'picid'",
		"'8', 'Sét đánh', 'leiren.gif', 'picid'",
		"'9', 'Tặng hoa', 'xianhua.gif', 'picid'",
		"'10', 'Ốp la', 'jidan.gif', 'picid'",
		
		"'11', 'Buồn cười', 'gaoxiao.gif', 'tid'",
		"'12', 'Chóng mặt', 'mihuo.gif', 'tid'",
		"'13', 'Sét đánh', 'leiren.gif', 'tid'",
		"'14', 'Tặng hoa', 'xianhua.gif', 'tid'",
		"'15', 'Ốp la', 'jidan.gif', 'tid'"
	);
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('click'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('click')." (clickid, `name`, icon, idtype) VALUES (".implode('),(', $datas).")");

	show_msg('Thêm dữ liệu mặc định của hệ thống đã hoàn tất, nhập các bước tiếp theo', ($step+1), 1);

} elseif ($step == 5) {

	//更新缓存
	dbconnect();
	include_once(S_ROOT.'./source/function_cache.php');

	config_cache();
	usergroup_cache();
	profilefield_cache();
	profield_cache();
	censor_cache();
	block_cache();
	eventclass_cache();
	magic_cache();
	click_cache();
	task_cache();
	ad_cache();
	creditrule_cache();
	userapp_cache();
	app_cache();
	network_cache();

	$msg = <<<EOF
	<form method="post" action="$theurl">
	<table>
	<tr><td colspan="2">Hoàn tất việc cài đặt dữ liệu<br><br>
	Nhập Username và mật khẩu của UCenter<br>Hệ thống sẽ  mở ra cho bạn không gian đầu tiên, và bạn thiết lập bạn là quản trị viên!
	</td></tr>
	<tr><td>Username</td><td><input type="text" name="username" value="" size="30"></td></tr>
	<tr><td>Mật khẩu</td><td><input type="password" name="password" value="" size="30"></td></tr>
	<tr><td></td><td><input type="submit" name="opensubmit" value="Ok"></td></tr>
	</table>
	<input type="hidden" name="formhash" value="$formhash">
	</form>
EOF;

	show_msg($msg, 999);
}

//页面头部
function show_header() {
	global $_SGLOBAL, $nowarr, $step, $theurl, $_SC;

	$nowarr[$step] = ' class="current"';
	print<<<END
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=$_SC[charset]" />
	<title>GoHooH.CoM - Cài đặt UCenter Home việt hóa bởi GoHooH.CoM</title>
	<style type="text/css">
	* {font-size:12px; font-family: Verdana, Arial, Helvetica, sans-serif; line-height: 1.5em; word-break: break-all; }
	body { text-align:center; margin: 0; padding: 0; background: #F5FBFF; }
	.bodydiv { margin: 40px auto 0; width:720px; text-align:left; border: solid #86B9D6; border-width: 5px 1px 1px; background: #FFF; }
	h1 { font-size: 18px; margin: 1px 0 0; line-height: 50px; height: 50px; background: #E8F7FC; color: #5086A5; padding-left: 10px; }
	#menu {width: 100%; margin: 10px auto; text-align: center; }
	#menu td { height: 30px; line-height: 30px; color: #999; border-bottom: 3px solid #EEE; }
	.current { font-weight: bold; color: #090 !important; border-bottom-color: #F90 !important; }
	.showtable { width:100%; border: solid; border-color:#86B9D6 #B2C9D3 #B2C9D3; border-width: 3px 1px 1px; margin: 10px auto; background: #F5FCFF; }
	.showtable td { padding: 3px; }
	.showtable strong { color: #5086A5; }
	.datatable { width: 100%; margin: 10px auto 25px; }
	.datatable td { padding: 5px 0; border-bottom: 1px solid #EEE; }
	input { border: 1px solid #B2C9D3; padding: 5px; background: #F5FCFF; }
	.button { margin: 10px auto 20px; width: 100%; }
	.button td { text-align: center; }
	.button input, .button button { border: solid; border-color:#F90; border-width: 1px 1px 3px; padding: 5px 10px; color: #090; background: #FFFAF0; cursor: pointer; }
	#footer { font-size: 10px; line-height: 40px; background: #E8F7FC; text-align: center; height: 38px; overflow: hidden; color: #5086A5; margin-top: 20px; }
	</style>
	<script type="text/javascript">
	function $(id) {
		return document.getElementById(id);
	}
	//添加Select选项
	function addoption(obj) {
		if (obj.value=='addoption') {
			var newOption=prompt('Nhập:','');
			if (newOption!=null && newOption!='') {
				var newOptionTag=document.createElement('option');
				newOptionTag.text=newOption;
				newOptionTag.value=newOption;
				try {
					obj.add(newOptionTag, obj.options[0]); // doesn't work in IE
				}
				catch(ex) {
					obj.add(newOptionTag, obj.selecedIndex); // IE only
				}
				obj.value=newOption;
			} else {
				obj.value=obj.options[0].value;
			}
		}
	}
	</script>
	</head>
	<body id="append_parent">
	<div class="bodydiv">
	<h1>Cài đặt UCenter Home</h1>
	<div style="width:90%;margin:0 auto;">
	<table id="menu">
	<tr>
	<td{$nowarr[0]}>1.Bắt đầu cài đặt</td>
	<td{$nowarr[1]}>2.Thiết lập thông tin UCenter</td>
	<td{$nowarr[2]}>3.Cơ sở dữ liệu</td>
	<td{$nowarr[3]}>4.Tạo cơ sở dữ liệu</td>
	<td{$nowarr[4]}>5.Địa chỉ mặc định dữ liệu</td>
	<td{$nowarr[5]}>6.Tiến trình cài đặt hoàn tất</td>
	</tr>
	</table>
END;
}

//页面顶部
function show_footer() {
	print<<<END
	</div>
	<iframe id="phpframe" name="phpframe" width="0" height="0" marginwidth="0" frameborder="0" src="about:blank"></iframe>
	<div id="footer">&copy; Comsenz Inc. 2001-2009 u.discuz.net - Việt hóa bởi GoHooH,CoM</div>
	</div>
	<br>
	</body>
	</html>
END;
}


//显示
function show_msg($message, $next=0, $jump=0) {
	global $theurl;

	$nextstr = '';
	$backstr = '';

	obclean();
	if(empty($next)) {
		$backstr .= "<a href=\"javascript:history.go(-1);\">Quay trở lại bước trước</a>";
	} elseif ($next == 999) {
	} else {
		$url_forward = "$theurl?step=$next";
		if($jump) {
			$nextstr .= "<a href=\"$url_forward\">Xin vui lòng chờ...</a><script>setTimeout(\"window.location.href ='$url_forward';\", 1000);</script>";
		} else {
			$nextstr .= "<a href=\"$url_forward\">Bước tiếp theo</a>";
			$backstr .= "<a href=\"javascript:history.go(-1);\">Quay trở lại bước trước</a>";
		}
	}

	show_header();
	print<<<END
	<table>
	<tr><td>$message</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>$backstr $nextstr</td></tr>
	</table>
END;
	show_footer();
	exit();
}

//检查权限
function checkfdperm($path, $isfile=0) {
	if($isfile) {
		$file = $path;
		$mod = 'a';
	} else {
		$file = $path.'./install_tmptest.data';
		$mod = 'w';
	}
	if(!@$fp = fopen($file, $mod)) {
		return false;
	}
	if(!$isfile) {
		//是否可以删除
		fwrite($fp, ' ');
		fclose($fp);
		if(!@unlink($file)) {
			return false;
		}
		//检测是否可以创建子目录
		if(is_dir($path.'./install_tmpdir')) {
			if(!@rmdir($path.'./install_tmpdir')) {
				return false;
			}
		}
		if(!@mkdir($path.'./install_tmpdir')) {
			return false;
		}
		//是否可以删除
		if(!@rmdir($path.'./install_tmpdir')) {
			return false;
		}
	} else {
		fclose($fp);
	}
	return true;
}

?>
