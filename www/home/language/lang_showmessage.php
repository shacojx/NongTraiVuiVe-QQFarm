<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: lang_showmessage.php 12775 2009-07-20 07:06:59Z xupeng $
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}

$_SGLOBAL['msglang'] = array(

	'box_title' => 'Tin tức',

	//common
	'do_success' => 'Hoạt động thành công',
	'no_privilege' => 'Bạn không được phép dùng hoạt động này',
	'no_privilege_realname' => 'Bạn cần sử dụng tên thật,  đó bạn sẽ chỉ có quyền truy cập vào các tính năng hạn chế.<a href="cp.php?ac=profile">Thêm tên thật</a>',
	'no_privilege_videophoto' => 'bạn không đươc phép, Bạn không có xác minh thông qua Webcam��<a href="cp.php?ac=videophoto">Bấm vào đây để xác minh WebCam</a>',
	'no_open_videophoto' => 'Ngay bây giờ, chức năng này được đóng lại',
	'is_blacklist' => 'Thiết lập hiệu lực bảo mật.',
	'no_privilege_newusertime' => 'Bạn là người sử dụng mới, cần phải đợi \\1 giờ để tiếp tục',
	'no_privilege_avatar' => 'Bạn cần phải thiết lập Avatar để tiếp tục, click <a href="cp.php?ac=avatar">here</a> để thiết lập Avatar của bạn.',
	'no_privilege_friendnum' => 'Bạn cần phải thêm \\1 bạn bè để tiếp tục, click <a href="cp.php?ac=friend&op=find">here</a> để thêm bạn bè.',
	'no_privilege_email' => 'Bạn cần phải xác nhận và kích hoạt địa chỉ email của bạn để tiếp tục, click <a href="cp.php?ac=password">here</a> để kích hoạt.',
	'uniqueemail_check' => 'Email này đã được sử dụng, vui lòng thử bằng email khác',
	'uniqueemail_recheck' => 'địa chỉ e-mail của bạn đã được kích hoạt, xin vui lòng nhập lại thông tin cá nhân để tái thiết lập e-mail',
	'you_do_not_have_permission_to_visit' => 'Oops, bạn đã làm gì mà bị ban nick rồi!',

	//mt.php
	'designated_election_it_does_not_exist' => 'Các nhóm chỉ định không tồn tại',
	'mtag_tagname_error' => 'Tên nhóm không hợp lệ',
	'mtag_join_error' => 'Nhóm mà bạn cho phép để tham gia trong thể loại này đã đạt đến giới hạn',
	'mtag_join_field_error' => 'Mục nhóm \\1 chỉ chấp nhận thành viên tối đa là \\2 thành viên, đã đến giới hạn tối đa',
	'mtag_creat_error' => 'Nhóm không tồn tại, tại sao không tạo ra một nhóm mới!',

	//index.php
	'enter_the_space' => 'Nhập Profile',

	//network.php
	'points_deducted_yes_or_no' => 'Tính năng này sẽ mất \\1 tiền của bạn. Bạn có muốn tiếp tục?<p><a href="\\2" class="submit">Tiếp tục</a> &nbsp; <a href="javascript:history.go(-1);" class="button">Hủy bỏ</a></p>',

	'points_search_error' => "Lỗi tìm kiếm điểm",

	//source/cp_album.php
	'photos_do_not_support_the_default_settings' => 'Album mặc định không hỗ trợ tính năng này,',
	'album_name_errors' => 'Xin vui lòng nhập đúng tên cho album',

	//source/space_app.php
	'correct_choice_for_application_show' => 'Xin vui lòng lựa chọn để tiếp tục',

	//source/do_login.php
	'users_were_not_empty_please_re_login' => 'Rất tiếc, tên người dùng không thể để trống, xin vui lòng thử lại một lần nữa',
	'login_failure_please_re_login' => 'Rất tiếc, đăng nhập không thành công, xin vui lòng thử lại một lần nữa',


	//source/cp_blog.php
	'no_authority_expiration_date' => 'Đặc quyền quản trị hiện tại của bạn đã được tạm thu hồi, thời gian phục hồi là: \\1',
	'no_authority_expiration' => 'Hiện nay cho phép quản trị viên của bạn đã được thu hồi, cám ơn sự tham gia của bạn',
	'no_authority_to_add_log' => 'Bạn không có sự cho phép để thêm một blog',
	'no_authority_operation_of_the_log' => 'Bạn không có sự cho phép để sử dụng tính năng này',
	'that_should_at_least_write_things' => 'Xin vui lòng ghi ít nhất một số nội dung',
	'failed_to_delete_operation' => 'Xóa thất bại, vui lòng thử lại',

	'click_error' => 'Biểu tượng không hợp lệ',
	'click_item_error' => 'Không tồn tại',
	'click_no_self' => 'Gush, bạn không thể tự bình chọn cho mình',
	'click_have' => 'Bạn đã bình chọn',
	'click_success' => 'Bình chọn thành công',

	//source/cp_class.php
	'did_not_specify_the_type_of_operation' => 'Xin vui lòng chọn đúng tùy chọn để tiếp tục',
	'enter_the_correct_class_name' => 'Please enter a category name',

	'note_wall_reply_success' => 'tin nhắn \\1  bảng tin',

	//source/cp_comment.php

	'operating_too_fast' => "Vui lòng đợi \\1 giây để tiếp tục",
	'content_is_too_short' => 'nội dung quá ngắn, ít nhất là 2 ký tự',
	'comments_do_not_exist' => 'Bình luận chỉ định không tồn tại',
	'do_not_accept_comments' => 'Không được bình luận ở Blog này',
	'sharing_does_not_exist' => 'Chia sẻ không tồn tại',
	'non_normal_operation' => 'Hoạt động không hợp lệ',

	'the_vote_only_allows_friends_to_comment' => 'chỉ có người tham gia mới có thể bình luận',

	//source/cp_common.php
	'security_exit' => 'Bạn đã đăng xuất thành công \\1',

	//source/cp_doing.php
	'should_write_that' => 'Vui lòng điền vào nội dung',
	'docomment_error' => 'Xin vui lòng chọn việc mà bạn muốn bình luận',

	//source/cp_invite.php
	'mail_can_not_be_empty' => 'Danh sách email không thể để trống',
	'send_result_1' => 'Email đã gửi. Cần vào phút để bạn bè của bạn nhận được email',
	'send_result_2' => '<strong>Những email thất bại:</strong><br/>\\1',
	'send_result_3' => 'không thể tìm thấy hồ sơ, gửi lai email không thành công.',
	'there_is_no_record_of_invitation_specified' => 'Những hồ sơ lời mời mà bạn đã chỉ định không tồn tại',

	//source/cp_import.php
	'blog_import_no_result' => 'Lấy dữ liệu ban đầu không thành công, xin vui lòng chắc chắn rằng bạn đã nhập đúng địa chỉ URL và thông tin đăng nhập, liên hệ:<br /><textarea name=\"tmp[]\" style=\"width:98%;\" rows=\"4\">\\1</textarea>"',
	'blog_import_no_data' => 'Lấy dữ liệu ban đầu không thành công, xin vui lòng tham khảo:<br />\\1',
	'support_function_has_not_yet_opened fsockopen' => 'Trang web không hỗ trợ fsockopen, bạn không thể sử dụng tính năng này',
	'integral_inadequate' => "Tín dụng hiện tại của bạn là \\1 không đủ để hoàn tất thao tác này, hoạt động này cần: \\2",
	'experience_inadequate' => "Currently you have \\1,  it is insufficient, this operattion needs: \\2",
	'url_is_not_correct' => 'URL không đúng',
	'choose_at_least_one_log' => 'Vui lòng chọn ít nhất 1 blog để import',

	//source/cp_friend.php
	'friends_add' => 'Ban và \\1 đã kết bạn',
	'you_have_friends' => 'Bạn đã kết bạn',
	'enough_of_the_number_of_friends' => 'Số bạn bè đã đạt tới giới hạn, xin vui lòng xoá một số bạn bè trước khi thêm bạn bè mới',
	'enough_of_the_number_of_friends_with_magic' => 'Bạn đã đạt đến giới hạn bạn bè tối đa <a id="a_magic_friendnum2" href="magic.php?mid=friendnum" onclick="ajaxmenu(event, this.id, 1)">Click vào đây để có được giới hạn thêm</a>',
	'request_has_been_sent' => 'Yêu cầu đã được gửi, xin vui lòng chờ xác nhận của người sử dụng',
	'waiting_for_the_other_test' => 'Đang chờ xác nhận từ người sử dụng',
	'please_correct_choice_groups_friend' => 'Xin vui lòng lựa chọn một nhóm bạn bè',
	'specified_user_is_not_your_friend' => 'Người dùng không là bạn bè của bạn',

	//source/cp_mtag.php
	'mtag_managemember_no_privilege' => 'No admin power, try something else',
	'mtag_max_inputnum' => 'Tham gia câu lạc bộ không thành công, theo các thể loại "\\1"  Số tiền tối đa được cho phép để tham gia \\2',
	'you_are_already_a_member' => 'Bạn đã là một thành viên của câu lạc bộ này',
	'join_success' => 'Tham gia câu lạc bộ thành công, bạn là một thành viên chính thức của câu lạc bộ này ngay bây giờ',
	'the_discussion_topic_does_not_exist' => 'Rất tiếc, chủ đề liều không tồn tại ',
	'content_is_not_less_than_four_characters' => 'Rất tiếc, nội dung là quá ngắn, ít nhất là 2 ký tự',
	'you_are_not_a_member_of' => 'Bạn không phải là một thành viên của câu lạc bộ này',
	'unable_to_manage_self' => 'Không thể hoạt động với bạn',
	'mtag_joinperm_1' => 'Bạn đã chọn tham gia vào câu lạc bộ này, chờ đợi để được chấp thuận',
	'mtag_joinperm_2' => 'Bạn cần phải được mời tham gia',
	'invite_mtag_ok' => 'Bạn đã tham gia câu lạc bộ này, bạn có thể: <br><br><a href="space.php?do=mtag&tagid=\\1" target="_blank"> ghé thăm ngay bây giờ</a><br>hoà nhập với bạn bè<br><br><a href="cp.php?ac=mtag&op=mtaginvite"> quay lại trang mời</a><br>dể mời tiếp bạn bè',
	'invite_mtag_cancel' => 'Bỏ qua lời mới tham gia',
	'failure_to_withdraw_from_group' => 'Withdras từ các nhóm bí mật không thành công, xin vui lòng chọn một nhóm lãnh đạo.',
	'fill_out_the_grounds_for_the_application' => 'Xin vui lòng điền vào lý do cho ứng dụng',

	//source/cp_pm.php
	'this_message_could_not_be_deleted' => 'Tin nhắn không thể bị xóa',
	'unable_to_send_air_news' => 'Thông điệp không thể để trống, xin vui lòng kiểm tra lại một lần nữa',
	'message_can_not_send' => 'Gửi tin nhắn riêng tư không thành công, xin vui lòng kiểm tra lại một lần nữa',
	'message_can_not_send1' => 'Gửi không thành công, bạn đã đạt đến số giới hạn cho phép để gửi trong 24 giơ',
	'message_can_not_send2' => 'Bạn gửi quá nhanh, xin vui lòng chờ một chút thời gian để gửi tin nhắn thứ hai',
	'message_can_not_send3' => 'Bạn không thể gửi số lượng lớn tin nhắn cho bạn bè',
	'message_can_not_send4' => 'Bạn không thể gửi msg ngay bây giờ',
	'not_to_their_own_greeted' => 'Bạn có thể không chào chính mình',
	'has_been_hailed_overlooked' => 'Tin nhắn chào mừng đã được bỏ qua',











	//source/cp_profile.php
	'update_on_successful_individuals' => 'Hồ sơ cá nhân cập nhật thành công',

	//source/cp_poll.php
	'no_authority_to_add_poll' => 'Bạn không có quyền bỏ phiếu',
	'no_authority_operation_of_the_poll' => 'Bạn không được phép bỏ phiếu',
	'add_at_least_two_further_options' => 'Tùy chọn không hợp lệ, tối thiểu cần 2 tùy chọn (lựa chọn) để thăm dò ý kiến',
	'the_total_reward_should_not_overrun' => 'Tổng số giải thưởng không thể được thêm sau \\1',
	'wrong_total_reward' => 'Không hợp lệ phần thưởng điểm, hãy kiểm tra tổng số phần thưởng',
	'voting_does_not_exist' => 'Thăm dò ý kiến này không tồn tại',
	'already_voted' => 'Bạn đã bình chọn',
	'option_exceeds_the_maximum_number_of' => 'Có thể không được nhiều hơn  20 tùy chọn',
	'the_total_reward_should_not_be_empty' => 'Tổng số phần thưởng không thể để trống',
	'average_reward_should_not_be_empty' => 'Điểm cho mỗi biểu quyết không thể để trống',
	'average_reward_can_not_exceed' => 'Điểm cho mỗi biểu quyết có thể không được vượt quá \\1 tổng số phần thưởng',
	'added_option_should_not_be_empty' => 'Tùy chọn bỏ phiếu không thể để trống',
	'time_expired_error' => 'Thời diểm thăm dò ý kiến đóng phải lớn hơn ngày hiện tại',
	'please_select_items_to_vote' => 'Chọn ít nhất một lựa chọn để bỏ phiếu thăm dò ý kiến này',
	'fill_in_at_least_an_additional_value' => 'Xin vui lòng thêm ít nhất một giá trị',

	//source/cp_share.php
	'blog_does_not_exist' => 'Blog không tồn tại',
	'logs_can_not_share' => 'Blog nay không thể được chia sẻ do cài đặt bảo mật',
	'album_does_not_exist' => 'Album không tồn tại',
	'album_can_not_share' => 'Album này không thể được chia sẻ do cài đặt bảo mật',
	'image_does_not_exist' => 'Hình ảnh không tồn tại',
	'image_can_not_share' => 'Hình ảnh này không thể được chia sẻ do cài đặt bảo mật',
	'topics_does_not_exist' => 'Chủ đề không tồn tại',
	'mtag_fieldid_does_not_exist' => 'Nhóm không tồn tại',
	'tag_does_not_exist' => 'Từ khóa không tồn tại',
	'url_incorrect_format' => 'Địa chỉ URL không đúng',
	'description_share_input' => 'Xin vui lòng nhập mô tả đầu tiên',
	'poll_does_not_exist' => 'Thăm dò ý kiến này không tồn tại!',
	'share_not_self' => 'Bạn không thể chia sẻ cho chính mình',
	'share_space_not_self' => 'bây giờ bạn có thể chia sẻ porfile của bạn mình',

	//source/cp_space.php
	'domain_length_error' => 'tên miền phụ là quá ngắn, không thể ít hơn \\1 ký tự',
	'credits_exchange_invalid' => 'Tín dụng là không hợp lệ trao đổi, xin vui lòng kiểm tra lại một lần nữa',
	'credits_transaction_amount_invalid' => 'Số tiền giao dịch  là không hợp lệ, xin vui lòng kiểm tra lại một lần nữa',
	'credits_password_invalid' => 'Mật khẩu mà bạn đã nhập là sai, xin vui lòng kiểm tra lại một lần nữa',
	'credits_balance_insufficient' =>   'Bạn không có đủ số dư trong thẻ tín dụng của bạn, trao đổi không thành công',
	'extcredits_dataerror' => 'Giao dịch không thành công, xin vui lòng liên hệ admin để biết thêm chi tiết',
	'domain_be_retained' => 'Tên miền này đã được reserved',
	'not_enabled_this_feature' => 'Hệ thống không hỗ trợ tính năng này',
	'space_size_inappropriate' => 'Xin vui lòng điền chính xác số lượng lưu trữ, bạn sẽ trao đổi',
	'space_does_not_exist' => 'Home không tồn tại',
	'integral_convertible_unopened' => 'Dịch vụ trao đổi không sẵn sàng',
	'two_domain_have_been_occupied' => 'Tên miền phụ này đã tồn tại, xin vui lòng thử một số khác',
	'only_two_names_from_english_composition_and_figures' => 'sudomain phải bắt đầu bằng một chữ cái tiếng anh và con số',
	'two_domain_length_not_more_than_30_characters' => 'Tên miền phụ quá dài, tối đa 30 ký tự',
	'old_password_invalid' => 'Xin vui lòng nhập mật khẩu ban đầu của bạn',
	'no_change' => 'Không có gì thay đổi',
	'protection_of_users' => 'Được bảo vệ thành viên, bạn không có sự cho phép để thay đổi bất kỳ cài đặt',


	//source/cp_sendmail.php
	'email_input' => 'Bạn đã không cài đặt tài khoản email, xin vui lòng điền vào email thật của bạn<a href="cp.php?ac=password">tại đây</a>.',
	'email_check_sucess' => 'Kích hoạt Email thành công',
	'email_check_error' => 'Email kích hoạt không thành công, xin vui lòng kiểm tra lại liên kết',
	'email_check_send' => 'Link kích hoạt được gửi đến email của bạn, nó có thể mất vài phút để nhận được',
	'email_error' => 'Email không đúng định dạng',

	//source/cp_theme.php
	'theme_does_not_exist' => 'Các chủ đề không tồn tại',
	'css_contains_elements_of_insecurity' => 'CSS của bạn có một số vấn đề bảo mật',

	//source/cp_upload.php
	'upload_images_completed' => 'Hình ảnh đăng tải thành công',

	//source/cp_thread.php
	'to_login' => 'Xin vui lòng đăng nhập',
	'title_not_too_little' => 'Tiêu đề chiều dài sai, phải có ít nhất 2 ký tự',
	'posting_does_not_exist' => 'Chủ đề không tồn tại',
	'settings_of_your_mtag' => 'Đây là nơi mà người dân quan tâm chia sẻ với một đáp ứng, nhận biết nhau, và thông báo lưu trú. Nhóm của bạn cho phép bạn truy cập nhanh tới:<br>
~Chia sẻ tin nhắn lưu trữ<br>
~Hình ảnh và album<br>
~Nhóm sự kiện lịch<br>
~Thăm dò ý kiến thành viên và chia sẻ liên kết <br><br><a href="cp.php?ac=mtag" class="submit">Tạo nhóm mới</a>',
	'first_select_a_mtag' => 'Xin vui lòng lựa chọn ít nhất một Nhóm.<br><br><a href="cp.php?ac=mtag" class="submit">Thiết lập Nhóm của tôi</a>',
	'no_mtag_allow_thread' => 'Không có đủ các thành viên trong Nhóm, bạn không thể bắt đầu một chủ đề ở đây.<br><br><a href="cp.php?ac=mtag" class="submit">Thiết lập Nhóm của tôi</a>',
	'mtag_close' => 'Nhóm này đã bị khóa',

	//source/space_album.php
	'to_view_the_photo_does_not_exist' => 'Rất tiếc, album bạn đang tìm kiếm không tồn tại',

	//source/space_blog.php
	'view_to_info_did_not_exist' => 'Rất tiếc, tin nhắn bạn đang tìm kiếm không tồn tại',

	//source/space_pic.php
	'view_images_do_not_exist' => 'Rất tiếc, hình ảnh bạn đang tìm kiếm không tồn tại',

	//source/mt_thread.php
	'topic_does_not_exist' => 'Rất tiếc, chủ đề bạn đang tìm kiếm không tồn tại',

	//source/do_inputpwd.php
	'news_does_not_exist' => 'Rất tiếc, tin nhắn không tồn tại',
	'proved_to_be_successful' => 'Hoàn tất quá trình xác minh, ngay bây giờ bạn để chuyển tiếp vào URL',
	'password_is_not_passed' => 'Mật khẩu sai, xin vui lòng kiểm tra xem nó và thử lại một lần nữa.',



	//source/do_login.php
	'login_success' => 'Bạn đã đăng nhập thành công, chuyển tiếp bạn tới trang \\1',
	'not_open_registration' => 'Bạn đã được đăng nhập thành công, bạn chuyển tiếp đến trang',
	'not_open_registration_invite' => 'Xin lỗi, đăng ký trực tiếp là không được phép, bạn cần có một mã số lời mời để đăng ký',

	//source/do_lostpasswd.php
	'getpasswd_account_notmatch' => 'Tên người dùng và email không đúng, xin vui lòng kiểm tra lại một lần nữa',
	'getpasswd_email_notmatch' => 'Tên người dùng và email không đúng, xin vui lòng kiểm tra lại một lần nữa',
	'getpasswd_send_succeed' => 'Chúng tôi đã gửi một liên kết yêu cầu nhận mật khẩu của bạn vào Email: <br />Xin vui lòng truy cập vào email có chứa liên kết trong vòng 3 ngày.',
	'user_does_not_exist' => 'Tên người dùng không tồn tại',
	'getpasswd_illegal' => 'Tên người dùng không tồn tại',
	'profile_passwd_illegal' => 'Mật khẩu có chứa ký tự không hợp lệ, xin vui lòng kiểm tra lại một lần nữa',
	'getpasswd_succeed' => 'Bạn đã thay đổi mật khẩu thành công, xin vui lòng thử đăng nhập bằng mật khẩu mới của bạn ngay bây giờ',
	'getpasswd_account_invalid' => 'Xin lỗi, admin không thể sử dụng tính năng này,',
	'reset_passwd_account_invalid' => 'Xin lỗi, admin hoặc người bảo vệ không thể sử dụng tính năng này,',

	//source/do_register.php
	'registered' => 'Đăng ký xong, bây giờ bạn chuyển tiếp đến trang chủ của bạn',
	'system_error' => 'Hệ thống báo lỗi, không thể định vị thư mục UCenter',
	'password_inconsistency' => 'Mật khẩu bạn đã nhập không đúng',
	'profile_passwd_illegal' => 'Mật khẩu các ký tự không hợp lệ, xin vui lòng kiểm tra lại một lần nữa',
	'user_name_is_not_legitimate' => 'Tên người dùng không hợp lệ',
	'include_not_registered_words' => 'Tên người có chứa các ký tự không hợp lệ',
	'user_name_already_exists' => 'Tên người sử dụng đã tồn tại',
	'email_format_is_wrong' => 'Email lỗi',
	'email_not_registered' => 'Thư điện tử không được cho phép trong trang web nay',
	'email_has_been_registered' => 'Thư điện tử đã được đăng ký',
	'register_error' => 'Đăng ký không thành công, xin vui lòng liên hệ admin để biết thêm chi tiết',

	//tag.php
	'tag_does_not_exist' => 'Tag không tồn tại',

	//cp_poke.php
	'poke_success' => 'Tin nhắn đã được gửi, \\1 người dùng sẽ nhận được nó sau khi đăng nhập ',
	'mtag_minnum_erro' => 'Các thành viên của Nhóm này là ít hơn  \\1 , bạn không thể sử dụng tính năng này',

	//source/function_common.php
	'information_contains_the_shielding_text' => 'Rất tiếc, tin nhắn mà bạn gủi có chứa ký tự không hợp lệ',
	'site_temporarily_closed' => 'Site đóng',
	'ip_is_not_allowed_to_visit' => 'IP của bạn không được phép truy cập vào các trang web này',
	'no_data_pages' => 'Không có dữ liệu hơn trong trang này',
	'length_is_not_within_the_scope_of' => 'Số dữ liệu vượt quá giới hạn',
















	//source/function_block.php
	'page_number_is_beyond' => 'Số trang vượt khỏi giới hạn',
	//source/function_cp.php
	'incorrect_code' => 'Mã bảo mật lỗi, xin vui lòng kiểm tra lại một lần nữa',

	//source/function_space.php
	'the_space_has_been_closed' => 'Prolife này đã bị xóa',

	//source/network_album.php
	'search_short_interval' => 'Xin vui lòng chờ 30 giây để tiếp tục tìm kiếm',
	'set_the_correct_search_content' => 'Xin vui lòng điền vào biểu mẫu trước khi tìm kiếm',

	//source/space_share.php
	'share_does_not_exist' => 'Chia sẻ không tồn tại',

	//source/space_tag.php
	'tag_locked' => 'Tags đã bị khóa',

	'invite_error' => 'Không thể mời, hãy kiểm tra xem nếu bạn có đủ các khoản tín dụng',
	'invite_code_error' => 'Xin lỗi, liên kết mời xấu',
	'invite_code_fuid' => 'Rất tiếc, link lời mời đã được dùng',

	//source/do_invite.php
	'should_not_invite_your_own' => 'Xin lỗi, bạn không thể mời mình để đăng ký tài khoản',
	'close_invite' => 'Tính năng lời mời đã bị vô hiệu hoá',










	'field_required' => 'Các trường bắt buộc “\\1”  không thể để trống, xin vui lòng điền vào nó',
	'firend_self_error' => 'Rất tiếc, bạn không thể thêm mình vào bạn bè',
	'change_friend_groupname_error' => 'Thay đổi tên nhóm sai',
	
	'mtag_not_allow_to_do' => 'Không hợp lệ, Bạn không phải là thành viên của câu lạc bộ này',
	
	//cp_task
	'task_unavailable' => 'Hoạt động không hợp lệ',
	'task_maxnum' => 'Đạt tới giới hạn số thành viên',
	'update_your_mood' => 'Xin vui lòng cập nhật tâm trạng của bạn, aka shout',
	
	'showcredit_error' => 'Xin vui lòng cập nhật tâm trạng của bạn, aka shout',
	'showcredit_fuid_error' => 'Người bạn không hợp lệ',
	'showcredit_do_success' => 'Chào giá thành công',
	'showcredit_friend_do_success' => 'Chào giá là thành công, bạn của bạn sẽ được thông báo',
	
	'submit_invalid' => 'Gửi không hợp lệ, xin vui lòng sử dụng các trình duyệt web tiêu chuẩn',
	'no_privilege_my_status' => 'Xin lỗi, chúng tôi hiện đang đóng cửa các dịch vụ này',
	'no_privilege_myapp' => 'Xin lỗi, chúng tôi hiện đang đóng cửa các dịch vụ này, xem <a href="cp.php?ac=userapp&my_suffix=%2Fapp%2Flist">các tính năng khác ở đây.</a>',
	
	'report_error' => 'Xin vui lòng lựa chọn thành viên để báo cáo.',
	'report_success' => 'Báo cáo thành công, chúng tôi sẽ xử lý nó sớm nhất.',
	'manage_no_perm' => 'Bạn không thể quản lý msg được gửi  của riêng bạn.',
	'repeat_report' => 'Xin vui lòng không báo cáo liên tục.',
	'the_normal_information' => 'Thông tin bình thường, không cần phải báo cáo.',
	'friend_ignore_next' => 'Bỏ qua yêu cầu của bạn bè \\1, tiến hành yêu cầu tiếp theo (<a href="cp.php?ac=friend&op=request">dừng</a>)',
	'friend_addconfirm_next' => 'Bạn đã trở thành bạn bè với \\1 , tiến hành yêu cầu tiếp theo (<a href="cp.php?ac=friend&op=request">dừng</a>)',





	//source/cp_event.php
	'event_title_empty'=>'Tiêu đề sự kiện không thể để trống!',
	'event_classid_empty'=>'Chọn loại sự kiện',
	'event_city_empty'=>'Địa điểm tổ chức sự kiện không thể để trống',
	'event_detail_empty'=>'Mô tả sự kiện không thể để trống',
	'event_bad_time_range'=>'Sự kiện không thể được tạo trước khi 60 ngày.',
	'event_bad_endtime'=>'Thời gian kết thúc phải sau thời gian bắt đầu',
	'event_bad_deadline'=>'Thời gian đăng ký có thể không được sau khi sự kiện kết thúc',
	'event_bad_starttime'=>'Thới gian bắt đầu không thể quá gần hiện tại',
	'event_already_full'=>'Xin lỗi, người tham gia tổ chức sự kiện được giới hạn và bây giờ là sự kiện đóng cho người tham gia mới',
	'event_will_full' => 'Sự kiện này đã hạn chế số lượng người tham gia',
	'no_privilege_add_event'=>'Bạn không có quyền để tạo ra hoạt động mới',
	'no_privilege_edit_event'=>'Bạn không được phép sửa đổi sự kiện này',
	'no_privilege_manage_event_members' =>'Bạn không có quyền để quản lý thành viên sự kiện',
	'no_privilege_manage_event_comment' => 'Bạn không có quyền truy cập để quản lý bình luận sự kiện',
	'no_privilege_manage_event_pic' => 'Bạn không có quyền truy cập để quản lý hình ảnh sự kiện',
	'no_privilege_do_eventinvite' =>'Bạn không có quyền gửi mời cho sự kiện này',
	'event_does_not_exist'=>'Sự kiện này không tồn tại!',




	'event_create_failed'=>'Thất bại, Hãy chắc chắn rằng bạn đã cung cấp thông tin hợp lệ',
	'event_need_verify'=>'Sự kiện đang chờ phê duyệt',
	'upload_photo_failed'=>'Tải lên thất bại, hãy thử lại',
	'choose_right_eventmember'=>'Chọn thành viên liên quan cho sự kiện này',
	'choose_event_pic'=>'Chọn poster sự kiện',
	'only_creator_can_set_admin'=>'Chỉ có người sáng tạo có thể thiết lập các tổ chức khác',
	'event_not_set_verify'=>'Sự kiện này không được kiểm duyệt',
	'event_join_limit'=>'Để tham gia sự kiện này bạn phải có lời mời',
	'cannot_quit_event'=>'Bạn không thể bỏ bởi vì bạn đã không tham gia sự kiện này hoặc bạn là người tạo ra sự kiện này',
	'event_not_public'=>'Đây là sự kiện cá nhận phải có mời mới có thể xem',
	'no_privilege_do_event_invite' => 'Bạn không có quyền mời người khác',
	'event_under_verify' => 'đang chờ phê duyệt',
	'cityevent_under_condition' => 'Để truy cập vào các sự kiện tại địa phương, cần thiết lập nơi ở của bạn trong profile',
	'event_is_over' => 'Sự kiện đã được hoàn tất',
	'event_meet_deadline'=>'Sự kiện đã đến hạn chót đăng ký',
	'bad_userevent_status'=>'Hãy lựa chọn đúng bang tổ chức sự kiện cho các thành viên',
	'event_has_followed'=>'Bạn đang quan tâm đến sự kiện này',
	'event_has_joint'=>'Bạn đã gia nhập sự kiện này',
	'event_is_closed'=>'Sự kiện đóng cửa',




	'event_only_allows_members_to_comment'=>'Chỉ có người tham gia mới có thể bình luận',
	'event_only_allows_admins_to_upload'=>'Chỉ Admin / người sáng tạo mới có thể tải lên',
	'event_only_allows_members_to_upload'=>'Chỉ có người tham gia mới có thể tải lên',
	'eventinvite_does_not_exist'=>'Sự kiện không cho phép mời người khác',
	'event_can_not_be_opened' => 'Sự kiện này không thể được mở ra bây giờ',
	'event_can_not_be_closed' => 'Sự kiện này không thể được đóng bây giờ',
	'event_only_allows_member_thread' => 'Chỉ có người tham gia có thể tạo mới được thảo luận',
	'event_mtag_not_match' => 'Nhóm này không liên quan đến sự kiện này',
	'event_memberstatus_limit' => 'Đây là sự kiện cá nhân, chỉ có người tha gia mới được chấp nhận',
	'choose_event_thread' => 'Chọn sự kiện liên quan để tạo ra thảo luận mới',






	//source/cp_magic.php
	'magicuse_success' => 'Magic sử dụng thành công',
	'unknown_magic' => 'Thẻ magic này không tồn tại hoặc không có sẵn ngay bây giờ',
	'choose_a_magic' => 'Vui lòng lựa chọn magic',
	'magic_is_closed' => 'Thẻ magic này đã bị đóng lại',
	'magic_groupid_not_allowed' => 'Truy cập bị từ chối, tăng level của bạn',
	'input_right_buynum' => 'Hãy nhập Số lượng chính xác để mua',
	'credit_is_not_enough' => 'Không đủ Gyn',
	'not_enough_storage' => 'Oops, Cổ phần không có sẵn, cổ phiếu có sẵn tại \\1',
	'magicbuy_success' => 'Mua thành công, chi tiêu tích phân \\1',
	'bad_friend_username_given' => 'Tên bạn bè không hợp lệ',
	'has_no_more_present_magic' => 'Geez! bạn không có thẻ magic, <a id="a_buy_license" href="cp.php?ac=magic&op=buy&mid=license" onclick="ajaxmenu(event, this.id, 1)">Mua ngay</a>',
	'has_no_more_magic' => 'Bạn không có thẻ magic \\1 <a id="\\2" href="\\3" onclick="ajaxmenu(event, this.id, 1)">Mua ngay</a>',
	'magic_can_not_be_presented' => 'Thẻ magic này không thể có quà',
	'magicpresent_success' => 'Quà tặng thành công đã giao cho\\1 ',
	'magic_store_is_closed' => 'Cửa hàng đã đóng cửa',
	'magic_not_used_under_right_stage' => 'Thẻ magic này không thể được sử dụng trong giai đoạn này',
	'magic_groupid_limit' => 'Level hiện tại bạn không thể mua',
	'magic_usecount_limit' => 'Bạn không thể sử dụng thẻ magic.<br>Bạn có thể sử dụng sau \\1 ',
	'magicuse_note_have_no_friend' => 'Bạn không có bất cứ bạn bè nào',
	'magicuse_author_limit' => 'Lịch sử thẻ magic có thể chỉ được sử dụng của nó ',
	'magicuse_object_count_limit' => 'Bạn đã dùng thẻ magic \\1  đạt đến giới hạn',
	'magicuse_object_once_limit' => 'Bạn đã được sử dụng thẻ magic này, có thể được tái sử dụng',
	'magicuse_bad_credit_given' => 'Tiền không hợp lệ',





	'magicuse_not_enough_credit' => 'Oops! không đủ tiền!',
	'magicuse_bad_chunk_given' => 'Giá trị không hợp lệ',
	'magic_gift_already_given_out' => 'Đã có quà tặng',
	'magic_got_gift' => 'Bạn có để có được món quà: cần tăng \\1 gyn',
	'magic_had_got_gift' => 'Bạn nhận được một món quà',
	'magic_has_no_gift' => 'không có quà',
	'magicuse_object_not_exist' => 'Oops! Không tồn tại!',
	'magicuse_bad_object' => 'Chọn lựa tệ hại',
	'magicuse_condition_limit' => 'quà tặng giới hạn sử dụng',
	'magicuse_bad_dateline' => 'Thời gian không hợp lệ',
	'magicuse_not_click_yet' => 'Phải cung cấp cho opitnion của bạn',
	'not_enough_coupon' => 'Không đủ Coupon',
	'magicuse_has_no_valid_friend' => 'Thất bại, tên không hợp lệ',
	'magic_not_hidden_yet' => 'Tình trạng của bạn không phải là offline',
	'magic_not_for_sale' => 'Không phải để bán',
	'not_set_gift' => 'Oops, cần lên level để sử dụng quà tặng',
	'not_superstar_yet' => 'không có Superstar',
	'no_flicker_yet' => ' không sử dụng thẻ magic cầu vồng',
	'no_color_yet' => 'Không có sử dụng thẻ magic màu',
	'no_frame_yet' => 'Không sử dụng khung ảnh cho AVATAR',
	'no_bgimage_yet' => 'Không sử dụng hình nền cho bài viết',
	'bad_buynum' => 'Giá trị không hợp lệ',

	'feed_no_found' => 'Không tìm thấy RSS Feed',
	'not_open_updatestat' => 'Apologies dịch vụ này không có sẵn bây giờ',
	
	'topic_subject_error' => 'Quá ngắn, tối thiểu 4 ký tự',
	'topic_no_found' => 'Thảo luận không tồn tại',
	'topic_list_none' => 'Không có danh sách',

	'space_has_been_locked' => 'Không gian này đã bị cấm, Nếu bạn có thắc mắc gì xin vui lòng liên hệ với quản trị viên',


	
);

?>