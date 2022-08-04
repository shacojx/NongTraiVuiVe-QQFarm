<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: lang_cpmessage.php 12043 2009-04-29 02:21:42Z liguode $
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}

$_SGLOBAL['cplang'] = array(
	//common
	'do_success' => 'Hoạt động thành công',

	//admincp.php
	'enter_the_password_is_incorrect' => 'Sai mật khẩu, vui lòng thử lại',
	'excessive_number_of_attempts_to_sign' => 'Bạn có thể đăng nhập sai tối đa 3 lần, nếu vượt quá bạn phải chờ 30 phút mới có thể đăng nhập lại.',
	//admincp.php

	//admin/admincp_ad.php
	'no_authority_management_operation' => 'Rất tiếc. Không có Phép để làm hoạt động này.',
	'please_check_whether_the_option_complete_required' => 'Vui lòng kiểm tra lựa chọn để hoàn thành',
	'please_choose_to_remove_advertisements' => 'Vui lòng chọn 1 quảng cáo để xóa bỏ',
	'no_authority_management_operation_edittpl' => 'Vì lý do an ninh, chỉ có Admin mới có thể sử dụng tính năng này.',
	'no_authority_management_operation_backup' => 'Vì lý do an ninh, chỉ có Admin mới có thể sử dụng tính năng này.',

	//admin/admincp_album.php
	'at_least_one_option_to_delete_albums' => 'Vui lòng chọn album muốn xóa',

	//admin/admincp_backup.php
	'data_import_failed_the_file_does_not_exist' => 'Nhập dữ liệu thất bạied. File không tồn tại.',
	'start_transferring_data' => 'Bắt đầu nhập dữ liệu.',
	'wrong_data_file_format_into_failure' => 'Định dạng sữ liệu sait.',
	'documents_were_incorrect_length' => 'Chiều dài của file quá lớn.',
	'backup_table_wrong' => 'Table sao lưu sai.',
	'failure_writes_the_document_check_file_permissions' => 'Ghi thất bại, vui lòng kiểm tra quyền của file.',
	'successful_data_compression_and_backup_server_to' => 'Dữ liệu được sao lưu thành công!',
	'backup_file_compression_failure' => 'Rất tiếc, sao lưu thất bại.',
	'shell_backup_failure' => 'Sao lưu Shell thất bại.',
	'data_file_does_not_exist' => 'Rất tiếc. Dữ liệu không tồn tại.',
	'the_volumes_of_data_into_databases_success' => 'Nhập dữ liệu thành công.',
	'data_file_does_not_exist' => 'Rất tiếc, file dữ liệu không tồn tại.',
	'data_file_format_is_wrong_not_into' => 'Dữ liệu sai định dạng, không thể nhập.',
	'directory_does_not_exist_or_can_not_be_accessed' => 'Thư mục không tồn tại hoặc không chấp nhận.',
	'vol_backup_database' => 'Vol backup database.',
	'complete_database_backup' => 'Database backup thành công.',
	'decompress_data_files_success' => 'Data files decompress thành công.',
	'data_files_into_success' => 'Nhập dữ liệu thành công.',


	//admin/admincp_block.php
	'correctly_completed_module_name' => 'Vui lòng nhập vào đúng tên module.',
	'a_call_to_delete_the_specified_modules_success' => 'Xóa thành công modules.',
	'designated_data_transfer_module_does_not_exist' => 'Những mô-đun chuyển dữ liệu không tồn tại.',
	'sql_statements_can_not_be_completed_for_normal' => 'SQL error. <br> máy phục vụ thông tin phản hồi: <br>ERROR: \\1<br>ERRNO. \\2',
	'enter_the_next_step' => 'bước tiếp theo.',
	'choose_to_delete_the_data_transfer_module' => 'Chọn một dữ liệu module để xóa.',


	//admin/admincp_blog.php
        'the_correct_choice_to_delete_the_log' => 'Chọn ít nhật một blog để xóa',

	'the_correct_choice_to_add_topic' => 'Chọn ít nhật một chủ đề để xóa',
	'add_topic_success' => 'Chủ đề thuộc top chủ đề�� \\1 có feed',

	//admin/admincp_cache.php

	//admin/admincp_censor.php

	//admin/admincp_comment.php
         'the_correct_choice_to_delete_comments' => 'Chọn ít nhất 1 bình luận dể xóa',

	'choice_batch_action' => 'Vui lòng lựa chọn 1 hoạt động mà bạn muốn thực hiện',


	//admin/admincp_config.php
	'ip_is_not_allowed_to_visit_the_area' => 'IP hiện tại không chấp nhận vào khu vực này.',
	'the_prohibition_of_the_visit_within_the_framework_of_ip' => 'IP  hiện tại của bạn thuộc danh sách cấm.',
	
	'config_uc_dir_error' => 'Config UCenter lỗi',

	//admin/admincp_credit.php
	'rules_do_not_exist_points' => 'Quy tắc này không tồn tại',

	//admin/admincp_cron.php
	'designated_script_file_incorrect' => 'Những tập lệnh tập tin không chính xác.',
	'implementation_cycle_incorrect_script' => 'Thực hiện chu kỳ tập lệnh không chính xác.',


	//admin/admincp_item.php
	'choose_to_delete_events' => 'Chọn một sự kiện để xóa.',

	//admin/admincp_mtag.php
	'choose_to_delete_the_columns_tag' => 'Chọn một cột từ khóa để xóa.',
	'designated_to_merge_the_columns_do_not_exist' => 'Những cột hợp nhất không còn tồn tại.',
	'the_successful_merger_of_the_designated_columns' => 'Những cột kết hợp thành công.',
	'columns_option_to_merge_the_tag' => 'Xin vui lòng chọn một cột để nhập.',
	'lock_open_designated_columns_tag_success' => 'Khóa / mở được xem cột tage thành công.',
	'choose_to_operate_columns_tag' => 'Chọn cột từ khóa để hoạt động.',
	
	'failed_to_change_the_length_of_columns' => 'Không thể thay đổi độ dài của các cột',


	//admin/admincp_pic.php
	'choose_to_delete_pictures' => 'Xin vui lòng chọn hình ảnh để xóa.',

	//admin/admincp_post.php
	'choose_to_delete_the_topic' => 'Xin vui lòng chọn chủ đề để xóa.',

	//admin/admincp_profield.php
	'there_is_no_designated_users_columns' => 'Những người sử dụng thiết kế cột không còn tồn tại.',
	'choose_to_delete_the_columns' => 'Xin vui lòng chọn các cột để xóa.',
	'have_one_mtag' => 'Xóa không thành công, bạn cần phải giữ lại ít nhất một câu lạc bộ',

	//admin/admincp_poll.php
	'the_correct_choice_to_delete_the_poll' => 'Vui lòng chọn một bình chọn để xóa.',

	//admin/admincp_report.php
	'the_right_to_report_the_specified_id' => 'Xin vui lòng báo cáo chính xác ID',

	//admin/admincp_share.php
	'please_delete_the_correct_choice_to_share' => 'Xin vui lòng chọn chia sẻ để xóa.',

	//admin/admincp_space.php
	'designated_users_do_not_exist' => 'Những người dùng không tồn tại.',
	'choose_to_delete_the_space' => 'Xin vui lòng chọn không gian để xóa.',
	'not_have_permission_to_operate_founder' => 'Bạn không được phép hoạt động như người sáng lập.',
	'uc_error' => 'UC communication error.',

	//admin/admincp_stat.php
	'choose_to_reconsider_statistical_data_types' => 'Xin vui lòng chọn loại dữ liệu thống kê để tính toán lại',
	'data_processing_please_wait_patiently' => '<a href="\\1"> thực hiện ( \\2 ), vui lòng đợi...</a> (<a href="\\3"> Dừng </a>)',

	//admin/admincp_tag.php
	'choose_to_delete_the_tag' => 'Xin vui lòng chọn từ khóa để xóa.',
	'to_merge_the_tag_name_of_the_length_discrepancies' => 'Chiều dài TAG muốn nhập không hợp lệ (1 ~ 30 ký tự)',
	'the_tag_choose_to_merge' => 'Xin vui lòng chọn từ khóa để nhập.',
	'choose_to_operate_tag' => 'Xin vui lòng chọn từ khóa để hoạt động.',


	//admin/admincp_template.php
	'designated_template_files_can_not_be_restored' => 'Các tập tin bản mẫu được xem không thể được phục hồi.',
	'template_files_editing_failure_check_directory_competence' => 'Tập tin mẫu chỉnh sửa thất bại. Xin vui lòng kiểm tra danh mục cho phép. ',

	//admin/admincp_thread.php
	'choosing_to_operate_the_topic' => 'Xin vui lòng chọn chủ đề để hoạt động.',

	//admin/admincp_usergroup.php
	'user_group_does_not_exist' => 'Nhóm người dùng này không tồn tại.',
	'user_group_were_not_empty' => 'Nhóm người dùng không thể để trống.',
	'integral_limit_duplication_with_other_user_group' => 'Điểm giới hạn xung đột với các nhóm người sử dụng.',
	'system_user_group_could_not_be_deleted' => 'Hệ thống nhóm người sử dụng có thể không bị xóa.',
	'integral_limit_error' => 'Giới hạn điểm sai, ít hơn 999999999 và nhiều hơn -999999998',
	
	//admin/admincp_userapp.php
	'my_register_sucess' => 'Dịch vụ ứng dụng người dùng đã mở',
	'my_register_error' => 'Không thể mở dịch vụ ứng dụng người sử dụng do: <br>\\2 (ERRCODE:\\1)<br><br><a href="http://discuz-viet.co.cc/bbs/index.php?gid=13" target="_blank">Vui lòng vào để được giúp đỡ.</a>。',
	'sitefeed_error' => 'Xin vui lòng nhập chính xác vào tiêu đề nguồn cấp dữ liệu',

	//admin/admincp_event.php
	'choose_to_delete_the_columns_event'=>'Vui lòng lựa chọn sự kiện bạn muốn xóa',
	'choose_to_grade_the_columns_event'=>'Vui lòng lựa chọn status, status mới có thể không giống status cũ',

);

?>