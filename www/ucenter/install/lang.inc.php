<?php

define('UC_VERNAME', 'Phiên bản tiếng Việt');

$lang = array(

	'SC_GBK' => 'GBK',
	'TC_BIG5' => 'BIG5',
	'SC_UTF8' => 'SC UTF8',
	'TC_UTF8' => 'TC UTF8',
	'EN_ISO' => 'ENGLISH ISO8859',
	'EN_UTF8' => 'ENGLIST UTF-8',

	'title_install' => SOFT_NAME.' GoHooH.CoM - Cài đặt UCenter việt hóa bởi GoHooH.CoM',
	'agreement_yes' => 'Tôi đồng ý ',
	'agreement_no' => 'Tôi không đồng ý ',
	'notset' => 'Không giới hạn',

	'message_title' => 'Thông báo',
	'error_message' => 'Tin nhắn báo lỗi',
	'message_return' => 'Trở lại',
	'return' => 'Trở lại',
	'install_wizard' => 'Cài đặt Wizard',
	'config_nonexistence' => 'Tập tin cấu hình không tồn tại',
	'nodir' => 'Thư mục không tồn tại ',
	'short_open_tag_invalid' => 'Xin lỗi, xin vui lòng và php.ini ở short_open_tag bật On',
	'redirect' => 'Cài đặt được tự động<br>Nếu không vui lòng bấm vào đây',

	'database_errno_2003' => 'Không thể kết nối với cơ sở dữ liệu',
	'database_errno_1044' => 'Không thể tạo ra một cơ sở dữ liệu mới',
	'database_errno_1045' => 'Không thể kết nối với cơ sở dữ liệu',
	'database_errno_1064' => 'Lỗi cú pháp SQL ',

	'dbpriv_createtable' => 'Không cho phép CREATE TABLE, không thể tiếp tục cài đặt',
	'dbpriv_insert' => 'Không cho phép INSERT, không thể tiếp tục cài đặt',
	'dbpriv_select' => 'Không cho phép SELECT, không thể tiếp tục cài đặt',
	'dbpriv_update' => 'Không cho phép UPDATE, không thể tiếp tục cài đặt', 
	'dbpriv_delete' => 'Không cho phép DELETE, không thể tiếp tục cài đặt',
	'dbpriv_droptable' => 'Không cho phép DROP TABLE, không thể tiếp tục cài đặt',
	'db_not_null' => 'Cơ sở dữ liệu UCenter đã được cài đặt,Tiếp tục sẽ xóa dữ liệu cũ',
	'db_drop_table_confirm' => 'Bạn có muốn tiếp tục?',

	'writeable' => 'Được ghi',
	'unwriteable' => 'Không thể ghi',
	'old_step' => 'Bước trước',
	'new_step' => 'Bước tiếp theo',

	'database_errno_2003' => 'Không thể kết nối với cơ sở dữ liệu',
	'database_errno_1044' => 'Không thể tạo ra một cơ sở dữ liệu mới',
	'database_errno_1045' => 'Không thể kết nối với cơ sở dữ liệu',

	'step_env_check_title' => 'Bắt đầu tiến trình cài đặt',
	'step_env_check_desc' => 'Kiểm tra môi trường cài đặt',
	'step_db_init_title' => 'Cài đặt các cơ sở dữ liệu',
	'step_db_init_desc' => 'Hoàn tất cài đặt',
	
	'step1_file' => 'Thư mục tập tin ',
	'step1_need_status' => 'Yêu cầu',
	'step1_status' => 'Tình trạng hiện tại',
	'not_continue' => 'Sửa lại những dòng màu đỏ (nếu có để tiếp tục)',

	'tips_dbinfo' => 'Điền vào thông tin cơ sở dữ liệu ',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => 'Thông tin quản trị viên ',
	'tips_admininfo_comment' => 'Hãy ghi nhớ tài khoản và mật khẩu UCenter',
	'step_ext_info_title' => 'Cài đặt thành công ',
	'step_ext_info_desc' => 'Click vào để hoàn tất',

	'ext_info_succ' => 'Cài đặt thành công',
	'install_locked' => 'Cài đặt bị khóa, nếu bạn chắc rằng bạn muốn cài đặt lại, hãy vào máy chủ để xoá <br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => 'Sửa lỗi để tiếp tục',

	'step_app_reg_title' => 'Thiết lập môi trường',
	'step_app_reg_desc' => 'Phát hiện môi trường UCenter',
	'tips_ucenter' => 'Xin vui lòng điền vào những thông tin liên quan UCenter ',
	'tips_ucenter_comment' => 'UCenter là sản phẩm cốt lõi của Comsenz để phục vụ các ứng dụng Discuz! Board, Ucentet home .Có thể vào <a href="http://discuz-viet.co.cc/bbs/index.php?gid=13" target="blank">Discuz-Viet</a> để tải bản mới nhất',

	'advice_mysql_connect' => 'Xin vui lòng kiểm tra mysql',
	'advice_fsockopen' => 'Vui lòng vào  php.ini mở allow_url_fopen',
	'advice_gethostbyname' => 'Nếu Cấu hình php bị cấm  Xin vui lòng liên lạc với không gian gethostbyname để mở chức năng',
	'advice_file_get_contents' => 'Vào php.ini mở allow_url_fopen',
	'advice_xml_parser_create' => 'Yêu cầu hỗ trợc hức năng PHP  XML. Xin vui lòng liên lạc với webmaster để xác định chức năng của mở',

	'ucurl' => 'UCenter  URL',
	'ucpw' => 'Mật khẩu sáng lập UCenter',

	'tips_siteinfo' => 'Xin vui lòng điền vào các thông tin trang web ',
	'sitename' => 'Tên trang web',
	'siteurl' => 'URL Trang web',

	'forceinstall' => 'Cài đặt bắt buộc',
	'dbinfo_forceinstall_invalid' => 'Các cơ sở dữ liệu hiện tại đã có chứa các dữ liệu từ cùng một bảng tiền tố bảng, bạn có thể sửa đổi "bảng tiền tố" để tránh việc xóa dữ liệu cũ, hoặc chọn một cài đặt bắt buộc. Bắt buộc cài đặt sẽ xóa các dữ liệu cũ, và không thể được khôi phục ',

	'click_to_back' => 'Click vào để trở lại bước trước',
	'adminemail' => 'Email admin',
	'adminemail_comment' => 'Thủ tục được sử dụng để gửi báo cáo lỗi',
	'dbhost_comment' => 'Địa chỉ  cơ sở dữ liệu máy chủ, thông thường là localhost',
	'tablepre_comment' => 'Cùng một cơ sở dữ liệu có thể chạy nhiều diễn đàn, xin vui lòng sửa đổi các tiền tố ',
	'forceinstall_check_label' => 'Tôi muốn xóa các dữ liệu, cài đặt bắt buộc !!!',

	'uc_url_empty' => 'Bạn không điền vào URL UCenter, vui lòng sửa lại',
	'uc_url_invalid' => 'URL lỗi',
	'uc_url_unreachable' => 'URL UCenter sai địa chỉ, xin vui lòng kiểm tra ',
	'uc_ip_invalid' => 'Không thể giải quyết tên miền, xin vui lòng điền vào IP trang web</font>',
	'uc_admin_invalid' => 'Mật khẩungười sáng lập UC sai, xin vui lòng điền lại',
	'uc_data_invalid' => 'Giao tiếp thất bại, xin vui lòng kiểm tra lại địa chỉ của UC là chính xác',
	'ucenter_ucurl_invalid' => 'URL của UC là trống rỗng, hoặc sai định dạng, xin vui lòng kiểm tra',
	'ucenter_ucpw_invalid' => 'Mật khẩu người sáng lập của UC là trống, hoặc định dạng lỗi, xin vui lòng kiểm tra',
	'siteinfo_siteurl_invalid' => 'URL của trang web là trống, hoặc sai định dạng, xin vui lòng kiểm tra ',
	'siteinfo_sitename_invalid' => 'Tên trang web là trống rỗng, hoặc sai định dạng, xin vui lòng kiểm tra ',
	'dbinfo_dbhost_invalid' => 'Cơ sở dữ liệu phục vụ là trống rỗng, hoặc sai định dạng, xin vui lòng kiểm tra ',
	'dbinfo_dbname_invalid' => 'Tên cơ sở dữ liệu được gọi là trống rỗng, hoặc sai định dạng, xin vui lòng kiểm tra ',
	'dbinfo_dbuser_invalid' => 'Tên người sử dụng cơ sở dữ liệu trống, hoặc định dạng lỗi, xin vui lòng kiểm tra ',
	'dbinfo_dbpw_invalid' => 'Mật khẩu cơ sở dữ liệulà trống, hoặc định dạng lỗi, xin vui lòng kiểm tra ',
	'dbinfo_adminemail_invalid' => 'Email không được để trống',
	'dbinfo_tablepre_invalid' => 'Tiền tố bảng tên không thể chứa các ký tự ".", Không được bắt đầu bằng con số',
	'admininfo_username_invalid' => 'Vui lòng điền tên Quản trị viên',
	'admininfo_email_invalid' => 'Vui lòng điền Email Quản trị viên',
	'admininfo_ucfounderpw_invalid' => 'Vui lòng điền mật khẩu quản trị viên',
	'admininfo_ucfounderpw2_invalid' => 'Hai mật khẩu không trùng khớp',

	'username' => 'Username',
	'email' => 'Email admin',
	'password' => 'Mật khẩu',
	'password_comment' => 'Mật khẩu không được để trống',
	'password2' => 'Lập lại mật khẩu',

	'admininfo_invalid' => 'Vui lòng kiểm tra lại thông tin Quản trị viên',
	'dbname_invalid' => 'Vui lòng điền vào tên cơ sở dữ liệu',
	'admin_username_invalid' => 'User name admin quá dái(tối đa 15 ký tự) hoặc chứa ký tự không hợp lệ',
	'admin_password_invalid' => 'Vui lòng nhập lại mật khẩu',
	'admin_email_invalid' => 'Email sai, vui lòng kiểm tra lại',
	'admin_invalid' => 'Vui lòng điền đầy đủ thông tin Admin',
	'admin_exist_password_error' => 'Người dùng đã tồn tại, nếu bạn muốn thiết lập người dùng này như admin, hãy nhập đúng mật khẩu',

	'tagtemplates_subject' => 'Tiêu đề',
	'tagtemplates_uid' => 'ID người dùng',
	'tagtemplates_username' => 'User Name',
	'tagtemplates_dateline' => 'Ngày',
	'tagtemplates_url' => 'URL',

	'uc_version_incorrect' => 'Phiên bản UCenter không đúng, vui lòng tải bản UCenter mới nhất tại http://discuz-viet.co.cc hoặc http://www.comsenz.com/ ',
	'config_unwriteable' => 'Vui lòng cmod file config.inc.php sang 777',

	'install_in_processed' => 'Vui lòng đợi...',
	'install_succeed' => 'Bước tiếp theo',
	'license' => '<div class="license"><h1>Đọc giấy phép qui định sử dụng nhé - Tiếng Trung Quốc</h1>
<p>Bản quyền việt hóa thuộc về Discuz! Việt - GoHooH.CoM có thắc mắc, hợp tác vui lòng vào http://www.gohooh.com hoặc Y!M: quannguyenphat</p>
<p>版权所有 (c) 2001-2009，康盛创想（北京）科技有限公司保留所有权利。</p>

<p>感谢您选择 UCenter 产品。希望我们的努力能为您提供一个高效快速和强大的站点解决方案。</p>

<p>康盛创想（北京）科技有限公司为 UCenter 产品的开发商，依法独立拥有 UCenter 产品著作权。康盛创想（北京）科技有限公司网址为 http://www.comsenz.com，UCenter 官方网站网址为 http://www.discuz.com，UCenter 官方讨论区网址为 http://www.discuz.net。</p>

<p>UCenter 著作权已在中华人民共和国国家版权局注册，著作权受到法律和国际公约保护。使用者：无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用 UCenter 软件。</p>

<p>本授权协议适用且仅适用于 UCenter 1.x 版本，康盛创想（北京）科技有限公司拥有对本授权协议的最终解释权。</p>

<h3>I. 协议许可的权利</h3>
<ol>
<li>您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。</li>
<li>您可以在协议规定的约束和限制范围内修改 UCenter 源代码(如果被提供的话)或界面风格以适应您的网站要求。</li>
<li>您拥有使用本软件构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与文章内容的相关法律义务。</li>
<li>获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。</li>
</ol>

<h3>II. 协议规定的约束和限制</h3>
<ol>
<li>未获商业授权之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目或实现盈利的网站）。购买商业授权请登陆http://www.discuz.com参考相关说明，也可以致电8610-51657885了解详情。</li>
<li>不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。</li>
<li>无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用 UCenter 的整体或任何部分，未经书面许可，页面页脚处的 UCenter 名称和康盛创想（北京）科技有限公司下属网站（http://www.comsenz.com、http://www.discuz.com 或 http://www.discuz.net） 的链接都必须保留，而不能清除或修改。</li>
<li>禁止在 UCenter 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</li>
<li>如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。</li>
</ol>

<h3>III. 有限担保和免责声明</h3>
<ol>
<li>本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。</li>
<li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</li>
<li>康盛创想（北京）科技有限公司不对使用本软件构建的网站中的文章或信息承担责任。</li>
</ol>

<p>有关 UCenter 最终用户授权协议、商业授权与技术服务的详细内容，均由 UCenter 官方网站独家提供。康盛创想（北京）科技有限公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权力，修改后的协议或价目表对自改变之日起的新授权用户生效。</p>

<p>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 UCenter，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p></div>',

	'uc_installed' => 'Đã cài đặt UCenter, nếu muốn cài lại vui lòng xóa file data/install.lock ',
	'i_agree' => 'Tôi đã đọc và đồng ý với các điều khoản của tất cả các nội dung nêu trên',
	'supportted' => 'Hỗ trợ',
	'unsupportted' => 'Không hỗ trợ',
	'max_size' => 'Hỗ trợ / lượng tối đa',
	'project' => 'Project',
	'ucenter_required' => 'UCenter yêu cầu cấu hình',
	'ucenter_best' => 'UCenter tốt nhất',
	'curr_server' => 'Máy chủ hiện tại',
	'env_check' => 'Kiểm tra',
	'os' => 'Hệ điều hành ',
	'php' => 'Phiên bản PHP',
	'attachmentupload' => 'File đính kèm',
	'unlimit' => 'Không giới hạn',
	'version' => 'Phiên bản',
	'gdversion' => 'GD',
	'allow' => 'Chấp nhận',
	'unix' => 'Unix',
	'diskspace' => 'Dung lượng',
	'priv_check' => 'Thư mục, tập tin cho phép kiểm tra ',
	'func_depend' => 'Chức năng kiểm tra phụ thuộc vào',
	'func_name' => 'Tên chức năng',
	'check_result' => 'Kết quả',
	'suggestion' => 'Đề nghị',
	'advice_mysql' => 'Xin vui lòng kiểm tra mysql',
	'advice_fopen' => 'Vào php.ini mở allow_url_fopen',
	'advice_file_get_contents' => 'Vào php.ini mở allow_url_fopen',
	'advice_xml' => 'Yêu cầu hỗ trợ PHP  XML',
	'none' => 'Không',

	'dbhost' => 'Máy chủ cơ sở dữ liệu phục vụ',
	'dbuser' => 'Tên người dùng CSDL',
	'dbpw' => 'Mật khẩu CSDL',
	'dbname' => 'Tên cơ sở dữ liệu',
	'tablepre' => 'Tiền tố ',

	'ucfounderpw' => 'Mật khẩu người sáng lập',
	'ucfounderpw2' => 'Lập lại mật khẩu',

	'create_table' => 'Tạo table',
	'succeed' => 'Thành công',
);