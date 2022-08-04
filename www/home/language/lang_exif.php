<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: lang_exif.php 6565 2008-03-14 09:26:09Z liguode $
*/
/**
 * việt hóa bởi Discuz-Viet.CO.CC
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}

$_SGLOBAL['exiflang'] = array(

	'unknown' => 'Không biết',
	'resolutionunit' => array('', '', 'inches', 'cm'),
	'exposureprogram' => array('Không biết', 'Hướng dẫn', 'Tiêu chuẩn', 'Aperture', 'Shutter Speed', 'Exposure', 'Chế độ thể thao', 'Chế độ hình ảnh', 'Chế độ Nature'),
	'meteringmode' => array(
		'0'		=>	'Không biết',
		'1'		=>	'Bình thường',
		'2'		=>	'Center weighted average',
		'3'		=>	'Spot Metering',
		'4'		=>	'Multi-zone Metering',
		'5'		=>	'Evaluating Metering',
		'6'		=>	'Partial Metering',
		'255'	=>	'Others'
		),
	'lightsource' => array(
		'0'		=>	'Không biết',
		'1'		=>	'Sunlight',
		'2'		=>	'Fluorescent light',
		'3'		=>	'Tungsten light',
		'10'	=>	'Flash light',
		'17'	=>	'Standard light A',
		'18'	=>	'Standard light B',
		'19'	=>	'Standard light C',
		'20'	=>	'D55',
		'21'	=>	'D65',
		'22'	=>	'D75',
		'255'	=>	'Khác'
		),
	'img_info' => array ('Thông tin file' => 'Không tìm thấy EXIF thông tin'),
	
	'FileName' => 'Tên file',
	'FileType' => 'Loại file',
	'MimeType' => 'Định dạng',
	'FileSize' => 'Cỡ',
	'FileDateTime' => 'Ngày',
	'ImageDescription' => 'Mộ tả',
	'auto'     => 'Auto',
	'Make'     => 'Manufacture',
	'Model'    => 'Model',
	'Orientation' => 'Orientation',
	'XResolution' => 'X Resolution',
	'YResolution' => 'Y Resolution',
	'Software'    => 'Phần mềm',
	'DateTime'    => 'Ngày',
	'Artist'      => 'Tác giả',
	'YCbCrPositioning' => 'YCbCr',
	'Copyright'   => 'Bản quyền',
	'Photographer'=> 'Photographer',
	'Editor'      => 'Editor',
	'ExifVersion' => 'Phiên bản Exif',
	'FlashPixVersion' => 'Phiên bản FlashPix',
	'DateTimeOriginal' => 'Ngày',
	'DateTimeDigitized'=> 'Digitize',
	'Height'  => 'Chiều cao',
	'Width'   => 'Chiều rộng',
	'ApertureValue' => 'Aperture',
	'ShutterSpeedValue' => 'Shutter Speed',
	'ApertureFNumber'   => 'Aperture Number',
	'MaxApertureValue'  => 'Max Aperture',
	'ExposureTime'      => 'Exposure Time',
	'FNumber'           => 'F-Number',
	'MeteringMode'      => 'Metering Mode',
	'LightSource'       => 'Light Source',
	'Flash'             => 'Flash Light',
	'ExposureMode'		=> 'Exposure Mode',
	'manual'            => 'Hướng dẫn',
	'WhiteBalance'      => 'White Balance',
	'ExposureProgram'   => 'Exposure Program',
	'ExposureBiasValue' => 'Exposure Bias Value',
	'ISOSpeedRatings'   => 'ISO speed rating',
	'ComponentsConfiguration' => 'Components Configuration',
	'CompressedBitsPerPixel'  => 'Compress ratio',
	'FocusDistance'     => 'Focus Distance',
	'FocalLength'       => 'Focus',
	'FocalLengthIn35mmFilm' => '35mm focus length',
	'UserCommentEncoding' => 'Người dùng mã hóa',
	'UserComment'		=> 'Người dùng bình luận',
	'ColorSpace'		=> 'Màu sắc không gian',
	'ExifImageLength'   => 'Chiều dài Exif',
	'ExifImageWidth'    => 'Chiều rộng Exif',
	'FileSource'        => 'Mã nguồn file',
	'SceneType'			=> 'Scene Type',
	'ThumbFileType'     => 'Loại file',
	'ThumbMimeType'     => 'Loại Mime'
);

?>