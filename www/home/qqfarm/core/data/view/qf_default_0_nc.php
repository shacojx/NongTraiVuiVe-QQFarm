<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi-vn" lang="vi-vn">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nông trại vui vẻ</title>
<link type="text/css" rel="stylesheet" href="view/qf_default/images/style.css" />
<script type="text/javascript" src="script.php?squery&common"></script>
<script type="text/javascript">
function fullWindow() {
try { window.parent.dlBox1_Show(); }
catch(e) {}
}
doParent("<?php echo FARM_VERSION; ?>", "<?php echo $_QSC['view']['player']; ?>");
</script>
</head>
<body>
<div id="wrap">
<div id="tabs" class="clearfix">
<ul>
<?php $active[$tab_name] = ' class="active"'; ?>
<li<?php echo $active['nc']; ?>><a href="nmc.php?type=nc"><span>Trồng trọt</span></a></li>
<li<?php echo $active['mc']; ?>><a href="nmc.php?appid=358"><span>Chăn nuôi</span></a></li>
<li<?php echo $active['market']; ?><?php echo $active['market_nc']; ?>><a href="tools.php?mod=market&act=nc"><span>Giao dịch</span></a></li>
<li<?php echo $active['vip']; ?>><a href="tools.php?mod=vip"><span>Hội viên</span></a></li>
<li<?php echo $active['exchange']; ?>><a href="tools.php?mod=exchange"><span>Đổi tiền</span></a></li>
<li<?php echo $active['setting']; ?>><a href="tools.php?mod=setting"><span>Thiết lập</span></a></li>
<li<?php echo $active['top']; ?>><a href="tools.php?mod=top"><span>Xếp hạng</span></a></li>
<li<?php echo $active['help']; ?>><a href="tools.php?mod=help"><span>Hướng dẫn</span></a></li>
<?php if(in_array($_QFG['uid'], $_QSC['adminer'])) { ?>
<li<?php echo $active['admin']; ?>><a href="admin.php"><span>Quản lý</span></a></li>
<?php } ?>
<li><a onclick="return fullWindow();" href="#"><span>Phóng lớn</span></a></li>
</ul>
</div>
<div id="info" class="clearfix">
<div id="info1">
<a href="#" target="_blank" id='msg_viewer'>Nhớ chú ý giữ gìn sức khỏe đấy nhé!</a>
</div>
<script type="text/javascript">
$.DomReady(function() {
var _msgs = eval('<?php echo qf_jsonCode($_NOTICE[main]); ?>');
var _timer, _curIndex = 0, _viewer = $('#msg_viewer');
var playMsg = function() {
if(_msgs.length > 1) {
clearInterval(_timer);
_viewer.innerHTML = _msgs[_curIndex].text;
_viewer.target = '_blank';
_timer = setInterval(function() {
_viewer.innerHTML = _msgs[_curIndex].text;
_viewer.href = _msgs[_curIndex].href;
if(++_curIndex == _msgs.length) {
_curIndex = 0;
}
_viewer.target = '_blank';
}, 5000);
}
else {
_viewer.innerHTML = _msgs[0].text;
_viewer.href = _msgs[0].href;
_viewer.target = '_blank';
}
};
if(typeof(_viewer) != 'undefined' && _viewer) {
playMsg();
}
});
</script>
<div id="info2">
<?php $credit = qf_userCredit(0); ?>
<?php list($money, $yb) = qf_getMoney(0); ?>
Vàng: <b id="qfmoney"><?php echo $money; ?></b>&nbsp;&nbsp; Xu: <b id="qfyb"><?php echo $yb; ?></b>&nbsp;&nbsp;GPoint:<b id="qfcredit"><?php echo $credit; ?></b>&nbsp;
</div>
</div>
<div id="main_nmc"><div id="flashMain"></div></div>
</div>
<!--Trigger Job-->
<img src="index.php?mod=cron" style="width:0;height:0;" />
</body>
</html>
<script type="text/javascript" src="script.php?qzfl_lite&appclientlib&c1"></script>
<script type="text/javascript">
var APP_ID = 353; //Current APPID
var NO_FLASH = 0; //If you do not show flash, set to 1
var HIGH_LIGHT = 1; //Highlight the current tag
C.config.setFullFlag(false); //Highlight the current tag
C.config.setTitle('Xứ sở thần tiên'); //Set Title
//Need to canvas the output
var FLASH_VARS = {
"app_key":"QQMCZZ",
"hmv2level":"0",
"hmv2CloseTime":"1261929600",
"batchStealHour":"5-10,12-13,19-22",
"cacheSeed":"64",
"buyToolHour":"0-24",
"buyToolTips":"Phân bón đã bán hết rồi, ngày mai quay lại nhé!",
"healthModeTime":"00:00 - 06:00",
"reqYellowlevel":"2",
"ShopToolLink":"",
"ShopHeadLink":"",
"filterUrl":"",
"noFoodTips":"Thức ăn cho chó đã bán hết rồi, ngày mai quay lại nhé!",
"missionTitle":"Rằm trung thu!",
"missionPrepareTime":"2010-9-8 02:00:00",
"missionAutumnBeginTime":"2010-9-20 00:00:00",
"missionNationalBeginTime":"2010-9-26 00:00:00",
"missionEndTime":"2010-10-9 00:10:00",
"fstTimeZq":"2010-9-20 10:00:00",
"sndTimeZq":"2010-9-20 12:00:00",
"trdTimeZq":"2010-9-20 14:00:00",
"fourthTimeZq":"2010-9-20 16:00:00",
"fifthTimeZq":"2010-9-20 18:00:00",
"fstTimeGq":"2010-9-26 10:00:00",
"sndTimeGq":"2010-9-26 12:00:00",
"trdTimeGq":"2010-9-26 14:00:00",
"fourthTimeGq":"2010-9-26 16:00:00",
"fifthTimeGq":"2010-9-26 18:00:00",
"missionPrepareHtml":"",
"config_url_qz":"module/ui_ini.xml?v=<?php echo $_QFG['timestamp']; ?>",
"config_url_xy":"module/ui_ini.xml?v=<?php echo $_QFG['timestamp']; ?>",
"miniFactoryText":"",
"snowslide":"3",
"uinMode":"1",
"flowerDayTips":"Yellow diamond during closed beta and open to more than 15 farms (including 15) users, will each be presented a bouquet of flowers every day Oh!",
"flowerYDLevel":"1",
"qShowAtFarm":"qShowAtFarm.swf",
"qShowLevel":"0",
//"restaurantConfig":"",
//"mill":"appid=376",
//"millLimitYDLevel":"1",
"TVShow":"",
"buyTin":"1",
"qixiPrepareTime":"2010-9-19 00:00:00",
"qixiBeginTime":"2010-9-19 23:35:00",
"qixiEndTime":"2010-9-26 00:05:00",
"diyLimitYDLevel":"<?php echo $_QSC['diyLimitYDLevel']; ?>",
"domian_qz":"farm.qzone",
"domian_xy":"farm.xiaoyou",
"loadingUrl":"module/loading2_v_1.swf",
"friend_list_mod_qz":"1000",
"friend_list_mod_xy":"1000",
"friend_list_qz":"",
"friend_list_xy":"",
"friend_list_tips":"Vui lòng thử lại sau!",
"steal_mod":"1000",
"steal":"",
"steal_tips":"In order to ensure more stable service, the system is part of the number of data maintenance. In this period the system will suspend your \"removal\" action to protect your data safe. Your friends can not be extracted during the crop, the other functioning properly! Thank you for your support!",
"steal_tips_other":"In order to ensure more stable service, the system is part of the number of data maintenance. Number of farms in this section will stop the removal of the maintenance period in order to protect data security. Your friends can not be extracted during the crop, the other functioning properly! Thank you for your support!",
"enter_into_mod":"1000",
"enter_into":"",
"redirect_url_qz":"",
"redirect_url_xy":"",
"addon":"",
"config_url":"<?php echo $xml; ?>nc_main_<?php echo FARM_DAY; ?>.xml",
"config_data":"<?php echo $xml; ?>nc_data_<?php echo FARM_DAY; ?>.xml",
"config_addon":"<?php echo $xml; ?>nc_addon_<?php echo FARM_DAY; ?>.xml",
"useflag":"11111111",
"usercheck":"7da443769f0243036e1f92b269f93a72"
};
FLASH_VARS.mode = SwfAppLib.platform.isQzone ? 1 : 2;
//@dante Part of the need to canvas cgi output
var FLASH_PARAMS = {
"id":"swfAppObject",
"width":"100%",
"height":"560",
"menu":"false",
"scale":"noScale",
"allowFullscreen":"true",
"allowScriptAccess":"always",
"bgcolor":"#FFFFFF",
"wmode":"opaque",
"src":"module/happyfarm3_v_10.swf"
,flashvars: C.util.convertFlashVars(FLASH_VARS)
};
</script>