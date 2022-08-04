<?php
if(!defined('IN_UCHOME')) exit('Access Denied');
$_SGLOBAL['creditrule']=Array
	(
	'register' => Array
		(
		'rid' => 1,
		'rulename' => 'Xây nhà mới',
		'action' => 'register',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 10,
		'experience' => '0'
		),
	'realname' => Array
		(
		'rid' => 2,
		'rulename' => 'Xác nhận tên thật',
		'action' => 'realname',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 20,
		'experience' => 20
		),
	'realemail' => Array
		(
		'rid' => 3,
		'rulename' => 'Xác nhận email',
		'action' => 'realemail',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 40,
		'experience' => 40
		),
	'invitefriend' => Array
		(
		'rid' => 4,
		'rulename' => 'Mời bạn bè thành côn',
		'action' => 'invitefriend',
		'cycletype' => 4,
		'cycletime' => '0',
		'rewardnum' => 20,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 10,
		'experience' => 10
		),
	'setavatar' => Array
		(
		'rid' => 5,
		'rulename' => 'Cài avatar',
		'action' => 'setavatar',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 15,
		'experience' => 15
		),
	'videophoto' => Array
		(
		'rid' => 6,
		'rulename' => 'Mã chứng nhận',
		'action' => 'videophoto',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 40,
		'experience' => 40
		),
	'report' => Array
		(
		'rid' => 7,
		'rulename' => 'Báo cáo thành công',
		'action' => 'report',
		'cycletype' => 4,
		'cycletime' => '0',
		'rewardnum' => '0',
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 2,
		'experience' => 2
		),
	'updatemood' => Array
		(
		'rid' => 8,
		'rulename' => 'Cập nhật tâm trạng',
		'action' => 'updatemood',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 3,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 3,
		'experience' => 3
		),
	'hotinfo' => Array
		(
		'rid' => 9,
		'rulename' => 'Thông tin nóng',
		'action' => 'hotinfo',
		'cycletype' => 4,
		'cycletime' => '0',
		'rewardnum' => '0',
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 10,
		'experience' => 10
		),
	'daylogin' => Array
		(
		'rid' => 10,
		'rulename' => 'Đăng nhập ngày',
		'action' => 'daylogin',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 15,
		'experience' => 15
		),
	'visit' => Array
		(
		'rid' => 11,
		'rulename' => 'Truy cập vào không g',
		'action' => 'visit',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 10,
		'rewardtype' => 1,
		'norepeat' => 2,
		'credit' => 1,
		'experience' => 1
		),
	'poke' => Array
		(
		'rid' => 12,
		'rulename' => 'Xin chào',
		'action' => 'poke',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 10,
		'rewardtype' => 1,
		'norepeat' => 2,
		'credit' => 1,
		'experience' => 1
		),
	'guestbook' => Array
		(
		'rid' => 13,
		'rulename' => 'Thông báo',
		'action' => 'guestbook',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 20,
		'rewardtype' => 1,
		'norepeat' => 2,
		'credit' => 2,
		'experience' => 2
		),
	'getguestbook' => Array
		(
		'rid' => 14,
		'rulename' => 'Nhận thông báo',
		'action' => 'getguestbook',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 5,
		'rewardtype' => 1,
		'norepeat' => 2,
		'credit' => 1,
		'experience' => '0'
		),
	'doing' => Array
		(
		'rid' => 15,
		'rulename' => 'Được đăng hồ sơ',
		'action' => 'doing',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 5,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 1,
		'experience' => 1
		),
	'publishblog' => Array
		(
		'rid' => 16,
		'rulename' => 'Viết blog',
		'action' => 'publishblog',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 3,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 5,
		'experience' => 5
		),
	'uploadimage' => Array
		(
		'rid' => 17,
		'rulename' => 'Upload hình ảnh',
		'action' => 'uploadimage',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 10,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 2,
		'experience' => 2
		),
	'camera' => Array
		(
		'rid' => 18,
		'rulename' => 'Hoàn thành biểu tượn',
		'action' => 'camera',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 5,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 3,
		'experience' => 3
		),
	'publishthread' => Array
		(
		'rid' => 19,
		'rulename' => 'Đăng chủ đề',
		'action' => 'publishthread',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 5,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 5,
		'experience' => 5
		),
	'replythread' => Array
		(
		'rid' => 20,
		'rulename' => 'Trả lời chủ đề',
		'action' => 'replythread',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 10,
		'rewardtype' => 1,
		'norepeat' => 1,
		'credit' => 1,
		'experience' => 1
		),
	'createpoll' => Array
		(
		'rid' => 21,
		'rulename' => 'Tạo bình chọn',
		'action' => 'createpoll',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 5,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 2,
		'experience' => 2
		),
	'joinpoll' => Array
		(
		'rid' => 22,
		'rulename' => 'Tham gia bình chọn',
		'action' => 'joinpoll',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 10,
		'rewardtype' => 1,
		'norepeat' => 1,
		'credit' => 1,
		'experience' => 1
		),
	'createevent' => Array
		(
		'rid' => 23,
		'rulename' => 'Tạo sự kiện',
		'action' => 'createevent',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 3,
		'experience' => 3
		),
	'joinevent' => Array
		(
		'rid' => 24,
		'rulename' => 'Tham gia sự kiện',
		'action' => 'joinevent',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => 1,
		'norepeat' => 1,
		'credit' => 1,
		'experience' => 1
		),
	'recommendevent' => Array
		(
		'rid' => 25,
		'rulename' => 'Yêu cầu sự kiện',
		'action' => 'recommendevent',
		'cycletype' => 4,
		'cycletime' => '0',
		'rewardnum' => '0',
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 10,
		'experience' => 10
		),
	'createshare' => Array
		(
		'rid' => 26,
		'rulename' => 'Tạo chia sẻ',
		'action' => 'createshare',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 3,
		'rewardtype' => 1,
		'norepeat' => '0',
		'credit' => 2,
		'experience' => 2
		),
	'comment' => Array
		(
		'rid' => 27,
		'rulename' => 'Bình luận',
		'action' => 'comment',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 40,
		'rewardtype' => 1,
		'norepeat' => 1,
		'credit' => 1,
		'experience' => 1
		),
	'getcomment' => Array
		(
		'rid' => 28,
		'rulename' => 'Nhận bình luận',
		'action' => 'getcomment',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 20,
		'rewardtype' => 1,
		'norepeat' => 1,
		'credit' => 1,
		'experience' => '0'
		),
	'installapp' => Array
		(
		'rid' => 29,
		'rulename' => 'Cài đặt ứng dụng',
		'action' => 'installapp',
		'cycletype' => 4,
		'cycletime' => '0',
		'rewardnum' => '0',
		'rewardtype' => 1,
		'norepeat' => 3,
		'credit' => 5,
		'experience' => 5
		),
	'useapp' => Array
		(
		'rid' => 30,
		'rulename' => 'Sử dụng ứng dụng',
		'action' => 'useapp',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 10,
		'rewardtype' => 1,
		'norepeat' => 3,
		'credit' => 1,
		'experience' => 1
		),
	'click' => Array
		(
		'rid' => 31,
		'rulename' => 'Thông tin nổi bật',
		'action' => 'click',
		'cycletype' => 1,
		'cycletime' => '0',
		'rewardnum' => 10,
		'rewardtype' => 1,
		'norepeat' => 1,
		'credit' => 1,
		'experience' => 1
		),
	'editrealname' => Array
		(
		'rid' => 32,
		'rulename' => 'Sửa tên thật',
		'action' => 'editrealname',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 5,
		'experience' => '0'
		),
	'editrealemail' => Array
		(
		'rid' => 33,
		'rulename' => 'Sửa email',
		'action' => 'editrealemail',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 5,
		'experience' => '0'
		),
	'delavatar' => Array
		(
		'rid' => 34,
		'rulename' => 'Xóa Avatar',
		'action' => 'delavatar',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 10,
		'experience' => 10
		),
	'invitecode' => Array
		(
		'rid' => 35,
		'rulename' => 'Nhận mã lời mời',
		'action' => 'invitecode',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => '0',
		'experience' => '0'
		),
	'search' => Array
		(
		'rid' => 36,
		'rulename' => 'Tiềm kiếm',
		'action' => 'search',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 1,
		'experience' => '0'
		),
	'blogimport' => Array
		(
		'rid' => 37,
		'rulename' => 'Nhập blog',
		'action' => 'blogimport',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 10,
		'experience' => '0'
		),
	'modifydomain' => Array
		(
		'rid' => 38,
		'rulename' => 'Sửa đổi tên miền',
		'action' => 'modifydomain',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 5,
		'experience' => '0'
		),
	'delblog' => Array
		(
		'rid' => 39,
		'rulename' => 'Xóa blog',
		'action' => 'delblog',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 10,
		'experience' => 10
		),
	'deldoing' => Array
		(
		'rid' => 40,
		'rulename' => 'Xóa hoạt động',
		'action' => 'deldoing',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 2,
		'experience' => 2
		),
	'delimage' => Array
		(
		'rid' => 41,
		'rulename' => 'Xóa ảnh',
		'action' => 'delimage',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 4,
		'experience' => 4
		),
	'delpoll' => Array
		(
		'rid' => 42,
		'rulename' => 'Xóa bình chọn',
		'action' => 'delpoll',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 4,
		'experience' => 4
		),
	'delthread' => Array
		(
		'rid' => 43,
		'rulename' => 'Xóa chủ đề',
		'action' => 'delthread',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 4,
		'experience' => 4
		),
	'delevent' => Array
		(
		'rid' => 44,
		'rulename' => 'Xóa sự kiện',
		'action' => 'delevent',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 6,
		'experience' => 6
		),
	'delshare' => Array
		(
		'rid' => 45,
		'rulename' => 'Xóa chia sẻ',
		'action' => 'delshare',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 4,
		'experience' => 4
		),
	'delguestbook' => Array
		(
		'rid' => 46,
		'rulename' => 'Xóa thông báo',
		'action' => 'delguestbook',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 4,
		'experience' => 4
		),
	'delcomment' => Array
		(
		'rid' => 47,
		'rulename' => 'Xóa bình luận',
		'action' => 'delcomment',
		'cycletype' => '0',
		'cycletime' => '0',
		'rewardnum' => 1,
		'rewardtype' => '0',
		'norepeat' => '0',
		'credit' => 2,
		'experience' => 2
		)
	)
?>