/*!
 * 提示: 此文件继承UCH模板中加载的js定义
 */


//菜单选择
function qfMenu(o) {
	if(o) {
		SQuery('#myfish').src = o.href;
		//设置样式
		var thisTab = o.parentNode,
		    lastTab = qfMenu.lastTab || SQuery('#tab0');
		lastTab.className = '';
		thisTab.className = 'a';
		qfMenu.lastTab = thisTab;
	}
	else dlBox1_Show();
	return false;
}
//菜单样式
function qfMenli(o){
	if(o){
		SQuery(o).className='active';
	}
}

/*!
 * 音乐播放器控制
 * height:48|83|230
 */
function loadPlayer(height) {
	if(height > 0) {
		if(!loadPlayer.status) {
			loadPlayer.status = 1;
			SQuery("qfplayer_main").className = 'qfplayer_main';
			SQuery("qfplayer_main").innerHTML = '<div id="mp3Player"></div>';
			swfobject.embedSWF(
				"http://box.baidu.com/widget/flash/list.swf?id=605861&autoPlay=true", 
				"mp3Player", "100%", "100%",
				"9.0.124", "fish/core/source/script/swfobject/expressInstall.swf",
				{}, {wmode:"opaque", allowscriptaccess:"always"}
			);
		}
		SQuery("qfplayer_main").style.height = height + 'px';
	}
	else {
		loadPlayer.status = 0;
		SQuery("qfplayer_main").className = '';
		SQuery("qfplayer_main").innerHTML = '';
		SQuery("qfplayer_main").style.height = '0px';
	}
}

