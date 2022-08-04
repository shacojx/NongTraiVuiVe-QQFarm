/*!
 * Note: This file is loaded in succession js UCH definition of the template
 */


/*!
 * Music player control
 * height:48|83|230
 */
function loadPlayer(height) {
	if(height > 0) {
		if(!loadPlayer.status) {
			loadPlayer.status = 1;
			SQuery("#qfplayer_main").className = 'qfplayer_main';
			SQuery("#qfplayer_main").innerHTML = '<div id="mp3Player"></div>';
			swfobject.embedSWF(
				"http://box.baidu.com/widget/flash/list.swf?id=3257558&autoPlay=true", 
				"mp3Player", "100%", "100%",
				"9.0.124", "qqfarm/source/script/swfobject/expressInstall.swf",
				{}, {wmode:"opaque", allowscriptaccess:"always"}
			);
		}
		SQuery("#qfplayer_main").style.height = height + 'px';
	}
	else {
		loadPlayer.status = 0;
		SQuery("#qfplayer_main").className = '';
		SQuery("#qfplayer_main").innerHTML = '';
		SQuery("#qfplayer_main").style.height = '0px';
	}
}


//////////////////////////////////////////////////////////////////////

curQFWindow = 'myfarm';
var dlBox = new DialogBox();

//Large window mode
dlBox.Add({Boxid: 'dlBox1_main'});
dlBox.Drag('dlBox1_head', 'dlBox1_main');
function dlBox1_Show() {
	var docEl = document.documentElement;
	var cfMsg = "提示: \r\n    The current browser is not suitable for direct viewing area the size of a large window mode, whether to continue? ";
	if((docEl.clientWidth > 910 && docEl.clientHeight > 600) || confirm(cfMsg)) {
		dlBox.Show('dlBox1_main');
		SQuery('#myfarm_full').src = SQuery('#myfarm').src ;
		SQuery('#myfarm').src = 'about:blank';
		curQFWindow = 'myfarm_full';
	}
	return false;
}
function dlBox1_Hide() {
	dlBox.Hide('dlBox1_main');
	SQuery('#myfarm').src = SQuery('#myfarm_full').src;
	SQuery('#myfarm_full').src = 'about:blank';
	curQFWindow = 'myfarm';
	return false; 
}