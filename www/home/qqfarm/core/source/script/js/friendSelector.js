/**
 * @fileoverview Friends selector Qzone public
 * @version 1.$Rev: 1573 $
 * @author QzoneWebGroup , joltwang
 * @lastUpdate $Date: 2009-11-18 11:18:12 +0800 (星期三, 18 十一月 2009) $
 */
QZONE.friends ={}; 
QZONE.friends.Selector = {
	/*
	 * QQ friends Cache
	 */
	qqfriendData : [],
	
	careListData : [],
	/**
	 * Selected results
	 */
	re : {},
	
	permitCnt : {},
	
	groupData : [],
	
	groupHash :{},
	
	friendHash : {},
	
	groupSelectHash :{},
	
	currentEntry :0,
	
	currentTab :'friend',//"friend","care","num",'recent'
	
	careIsShow : false,
	
	count : 0,
	
	allcount : 0,
	
	searchClick : false,
	
	_lastKey : "",
	
	_curData : {},
	
	_data : [],
	
	_searchResultArray :{},
	
	_overflowHash : {},
	
	_preCare : [],
	
	_isRemarkReady:false,
		
	/**
	 * 默认配置
	 * @param {Number} uin QQ number of current user
	 * @param {Boolean} multiChoose Whether the multiple choice
	 * @param {String} module Module configuration, QQ friends Required, 1 load, 0 to not load, followed by {'attention to friends', 'QQ numbers', 'recently selected'}
	 * @param {Number} row Friend appear the number of columns
	 * @param {Boolean} result 是否显示结果
	 * @param {Number} limit 多选时选择好友的上限
	 * @param {String} target 好友选择安装的容器的id
	 * @param {Boolean} insertFirst 是否把好友选择器的dom创建在容器的首节点
	 * @param {Boolean} careInGroup 是否将关注好友放在好友列表里
	 * @param {Boolean} ui 是否显示界面，供搜素好友用
	 * @param {Function} selectCallback 单项时选中时的回调函数
	 * @param {Boolean} showOnline 是否显示用户的在线情况
	 * @param {Array} preSource 预先加载的数据，用于勾选之前已选中的
	 * @param {object} opts 其它配置, 类似的结构 {type:1, cigUrl: '', appid:371}，暂时1表示app邀请页面
	 */
	defaultConfig : {'multiChoose':false,'module':'110','row':1,'result':false,'limit':10 ,'target':'starget' ,'insertFirst':false,'careInGroup':false,'ui':true,'selectCallback':QZFL.emptyFn,'showOnline':true,'opts':{},'preSource':[20050606]},
		
	/**
	 * Installation friend selector
	 * @param {Object} config Configurable items
	 */
	setup : function(config){
		var fs = QZONE.friends.Selector,fsd = QZONE.friends.Selector.defaultConfig;
		QZFL.css.insertCSSLink("view/qf_default/images/friend_selector.css");
		for(key in config){
			fsd[key] = config[key];
		}

		if(!fsd.multiChoose){
			fsd.limit=1;
		}
		if(fsd.ui){
			fs.createSelectUI();
			if(fsd.result){
				fs.createResultUI();
			}
		}
		fs.getFriendList();
	},
	
	/**
	 * 返回所选择的好友的个数
	 * @return {Number} 所选择的好友的个数
	 */
	getSelectCount : function(){
		var fs = QZONE.friends.Selector,fsd=fs.defaultConfig;
		fs.count=0;
		for(key in fs.re){
			fs.count++;
		}
		return fs.count;
	},
	
	/**
	 * 返回所选择的好友列表
	 * @return {Object} 所选择的好友 {'123456':{'uin':123456,'groupid':1,'name':QQlive,'img':'','yellow':7,'online':0}}
	 */	
	getSelect : function(){
		var fs = QZONE.friends.Selector;
		return fs.re;
	},
	/**
	 * 根据opts里的type类型返回不同的sender，使得能够配置不同的数据源
	 */
	getSenderByType : function(){
		var fs=QZONE.friends.Selector, friend_show = "mync.php?mod=friend&refresh=friend";
		if(!fs.defaultConfig.opts.type && fs.defaultConfig.opts.type == 1){
			return new QZONE.JSONGetter(fs.defaultConfig.opts.cgiUrl, "getFriendList", {"uin" : fs.defaultConfig.uin,"appid":fs.defaultConfig.opts.appid,"rd":Math.random()}, "GBK");
		}
		return new QZONE.JSONGetter(friend_show, "getFriendList", {"uin" : fs.defaultConfig.uin,"rd":Math.random()}, "utf-8");
	},
	/**
	 * 获取好友列表
	 */
	getFriendList : function(){
		var fs=QZONE.friends.Selector;
		var sender = fs.getSenderByType();
		sender.onSuccess = fs.cacheListData;
		sender.onError = function(){
			fs.showMsgbox("Không thể kết nối, vui lòng thử lại!",1,4000);
		};
		sender.send("_callback");
	},
	/**
	 * 返回允许邀请数 max-invited，暂供app邀请使用
	 */
	getPermitCnt : function(){
		return QZONE.friends.Selector.permitCnt || {max:10, invited:0};
	},
	/**
	 * 修正app邀请数据，这里可以根据type的不同做不同的修正  --- beta
	 * @param {Object} re
	 */
	fixData4AppInvite : function(re){
		var p = QZONE.friends.Selector;
		if(p.defaultConfig.opts.type && p.defaultConfig.opts.type == 1){
			if(re&&(typeof(re.inv_ret)!='undefined')&&(re.inv_ret==0)){
				var data = re.qqlist, i, j, l, m, t, t1, gr = [], gr_id =0, newdata = [];
				p.permitCnt = {max:re.inv_max, invited:re.inv_count};
				for(i=0, l=data.length; i < l; i++){
					t = data[i];
					gr.push({"gpid":gr_id,"gpname":t.label});
					for(j=0, m=t.data.length; j<m; j++){
						t1 = t.data[j];
						newdata.push({"uin":t1.data,"groupid":gr_id,"name":t1.label,"img":"5001.gif","yellow":-1,"online":+(!t1.noqz)});
					}
					gr_id++;
				}
				return {"items":newdata,"gpnames":gr};
			}
		}
		return re;
	},
	/**
	 * 缓存好友信息
	 */
	 cacheListData : function(re){
	 	var fs = QZONE.friends.Selector,fsd=fs.defaultConfig;
		re = fs.fixData4AppInvite(re);
		if(re&&re.items&&re.items.length>0){
			fs.qqfriendData = re.items;
			fs.groupData = re.gpnames;
			if(fs.defaultConfig.careInGroup&&fsd.ui){
				fs.getCareList();
			}else if(fsd.ui){
				fs.buildGroupData(fs.createQQTab);
			}else{
				fs.buildGroupData();
			}
		}else if(re&&re.items&&re.items.length==0){
			fs.showMsgbox("Bạn chưa có người bạn nào",1,2000);
		}else{
			fs.showMsgbox(re.error.msg||"Không thể kết nối, vui lòng thử lại!",1,3000);
		}
	 },
	 
	 /**
	  * 重新封装分组数据,这里拿空间来换操作的方便
	  */
	 buildGroupData : function(callback){
	 	var fs = QZONE.friends.Selector,fsd=fs.defaultConfig,uins,groupqq,uins,alluins=[],callback=callback||QZFL.emptyFn,group,qqfriend;
	 	//划归成员至每个组里
		for(var i=0;i<fs.groupData.length;i++){
			groupqq=[],uins=[],group=fs.groupData[i];
			for(var j=0;j<fs.qqfriendData.length;j++){
				qqfriend = fs.qqfriendData[j]
				if(group.gpid==qqfriend.groupid){
					if(qqfriend.online==1&&fsd.showOnline){
						groupqq.unshift(qqfriend);
						uins.unshift(qqfriend.uin);
					}else{
						groupqq.push(qqfriend);
						uins.push(qqfriend.uin);
					}
					continue;
				}
			}
			fs.groupHash[fs.groupData[i].gpid] = fs.groupData[i].gpname.length>0 ? fs.groupData[i].gpname : " ";
			fs.groupData[i].groupqq=groupqq;
			fs.groupData[i].uins=uins;
		}
		//方便查询到每个成员的信息，避免总是循环查找
		for(var k=0;k<fs.qqfriendData.length;k++){
			fs.friendHash[fs.qqfriendData[k].uin+''] = fs.qqfriendData[k];
			alluins.push(fs.qqfriendData[k].uin);
		}
		//开始获取备注
		fs.getRemarkList(alluins);
		fsd.care&&fs.showCareTab(true);
		//执行回调
		callback();
	},
	
	/*
	 *获取备注
	 */
	getRemarkList : function(uins){
		var fs = QZONE.friends.Selector;
		if(QZONE.FP&&QZONE.FP.getRemarkList){
			QZONE.FP.getRemarkList(function(re){
				fs.renderRemark(re,uins);
				fs._isRemarkReady=true;
			});
		}else{
			var get_remarks_cgi = "mync.php?mod=friend&refresh=friend",fs=QZONE.friends.Selector;
			var sender = new QZONE.JSONGetter(get_remarks_cgi, "getRemarkList", {"uin" : fs.defaultConfig.uin}, "utf-8");
			sender.onSuccess =function(re){
				fs.renderRemark(re,uins);
			};
			sender.onError = function(){
				this.showMsgbox("Không thể kết nối, vui lòng thử lại!",1,4000);
			};
			sender.send("_callback");
		}
	},
	
	renderRemark :  function(re,uins){
		var fs = QZONE.friends.Selector,preLength=0,fsd=fs.defaultConfig,preSource=fsd.preSource;
		for(var i=0;i<uins.length;i++){
			var uin=uins[i];
			if(re[uin]!=undefined){
				fs.friendHash[uin+''].remark = escHTML(re[uin]);
			}
		}
	 	if(!fs._isRemarkReady){
		 	preLength = (fsd.limit<preSource.length)?fsd.limit:preSource.length;
		 	for(var z=0;z<preLength;z++){
		 		//if(fs.friendHash[preSource[z]]!=undefined){
		 		if(preSource[z]!=""){
		 			fs.selectEntry(preSource[z]);
		 		}
		 		//}else{
		 			//fs._preCare.push(preSource[z]);
		 		//}
		 	}
	 	}
		fs.loadPinyin();
	},
	 
	 loadPinyin : function(){
	 	var fs = QZONE.friends.Selector;
		if(!QZFL.widget.pinyin){
			var _jsLoader = new QZONE.JsLoader();
			_jsLoader.onload=function(){
				fs.setDataProvider(fs.qqfriendData);
			};
			_jsLoader.load("script.php?pinyin&ver=1", null, "utf-8");
		}
	 },
	 
	 /**
	  * 根据配置开始创建UI,000,100,110,010,011,101
	  */
	 createSelectUI : function(){
	 	var fs = QZONE.friends.Selector,fsd = fs.defaultConfig,selector=null,cstyle="",addClass = QZFL.css.addClassName,delClass =QZFL.css.removeClassName;
	 	fsd.care = (fsd.module.charAt(0)=='1');
	 	fsd.qqnum = (fsd.module.charAt(1)=='1');
	 	fsd.recent = (fsd.module.charAt(2)=='1');
		cstyle = (fsd.care||fsd.qqnum||fsd.recent)? 'fs_with_tab' : ((fsd.row=='1') ? '':'fs_col_'+fsd.row);
		QZFL.dom.createElementIn("div", fsd.target, true, {"id":"gb_friend_selector"});//创建标题栏的tab容器
		selector = QZFL.dom.createElementIn("div", $('gb_friend_selector'), fsd.insertFirst, {"id" : "selector", "class" : "gb_friend_selector left "+cstyle});//创建容器
		QZFL.dom.createElementIn("div", selector, true, {"id":"title", "class":"gb_friend_selector_tit"});//创建标题栏的tab容器
		QZFL.dom.createElementIn("div", selector, false, {"id":"container", "class":"gb_friend_selector_cont"});//创建主体容器
		QZFL.dom.createElementIn("div", $('container'), true, {"id":"search-box", "class":"gb_friend_selector_search"});//创建搜索框
		$('search-box').innerHTML = '<div class="fs_search"><input id="search-input" type="text" value="Tìm bạn" class="fs_hint" /><a id="search-button" href="javascript:;" onclick="QZONE.friends.Selector.cancelSearch();return false;" class="fs_op">Tìm</a></div>';
		QZFL.dom.createElementIn("div", 'container', false, {"id":"friend-list", "class":"gb_friend_selector_list"});
		QZFL.dom.createElementIn("div", 'container', false, {"id":"search-list", "class":"gb_friend_selector_list none"});
		
		if(fsd.module=='000'){
			$('title').innerHTML = '<div class="fs_tit">Bạn bè</div>';
		}
	 	QZFL.event.addEvent($("search-input"),'click',function(){
 			if(!fs.searchClick){
 				$('search-input').value = '';
 				$('search-input').style.color = '#000';
 				fs.searchClick = true;
 			}
 			fs.loadPinyin();
	 	});
	 	QZFL.event.addEvent($("search-input"),'keyup',function(){
	 		var keywords=$("search-input").value;
	 		if(keywords.length>0){
	 			if(fs._lastKey!=keywords){
	 				addClass($("search-button"),'fs_del');
	 				$('search-list').innerHTML ='<img src="view/qf_default/images/loading.gif" style="margin:10px 0px 0px 90px;" alt="Đang tải.."/>';
	 				fs.search(keywords,fs.showResultList);
	 			}
	 		}else{
	 			fs.cancelSearch(true);
	 			fs._lastKey="";
	 		}
	 	});
	 },
	 
	 /**
	  * 创建显示结果的框框
	  */
	 createResultUI : function(){
	 	var fs = QZONE.friends.Selector,fsd = fs.defaultConfig,results=null,cstyle="",addClass = QZFL.css.addClassName,delClass =QZFL.css.removeClassName;
	 	results = QZFL.dom.createElementIn("div", $('gb_friend_selector'), false, {"id" : "results", "class" : "gb_friend_selector fs_with_tab right"});//创建容器
	 	results.innerHTML='<div class="gb_friend_selector_tit"><div class="fs_tit">Chọn bạn (<em id="result-count">0</em>/'+fsd.limit+')</div><div class="fs_tit_op"><a href="javascript:;" onclick="QZONE.friends.Selector.clearUp();this.blur();return false;" class="fs_empty">Chưa có</a></div></div>'
	 	+'<div class="gb_friend_selector_cont"><div class="gb_friend_selector_list fs_list_selected"><ul class="fs_clear" id="result-list"></ul>'
	 	+'<p id="overflow" class="fs_list_overflow fs_hit none"><span class="fs_ico_warn"></span>Bạn có thể chọn tối đa '+fsd.limit+' người</p></div></div>';
	 },
	 
	 
	 /**
	  * Create QQ Friends tab
	  */
	 createQQTab : function(){
	 	var fs = QZONE.friends.Selector,fsd=fs.defaultConfig,groupData = fs.groupData,friend_list=$('friend-list'),groupstr='',groupMember={},addClass=QZFL.css.addClassName,delClass=QZFL.css.removeClassName,group=null,gpid=0,preSource=fsd.preSource,preLength=0;
	 	for(var i=0;i<groupData.length;i++){
	 		gpid = groupData[i].gpid;
	 		QZFL.dom.createElementIn("dl", 'friend-list', false , {"id":"group-"+gpid, "class":"fs_fold"});
	 		groupstr = '<dt id="group-dt-'+gpid+'"><a href="javascript:;" onclick="QZONE.friends.Selector.showGroup('+gpid+');return false;" id="group-title-'+gpid+'" class="fs_group">'+groupData[i].gpname+'</a><a href="javascript:;" onclick="QZONE.friends.Selector.selectGroup('+gpid+');this.blur();return false;" class="fs_add_group" style="display:'+(fs.defaultConfig.multiChoose?'':'none')+'" title="Thêm tất cả">Thêm tất cả</a></dt><dd><ul class="fs_clear">';
	 		groupMember = groupData[i].groupqq;
	 		if(groupMember.length>0){
		 		for(var j=0;j<groupMember.length;j++){
		 			groupstr+='<li id="nick-li-'+groupMember[j].uin+'"'+(groupMember[j].online==0&&fsd.showOnline?'class="fs_offline"':'')+'><span id="checked-'+groupMember[j].uin+'" class="fs_checked" style="display:none;">Đã chọn </span><a href="javascript:;" onclick="QZONE.friends.Selector.selectEntry('+groupMember[j].uin+');return false;" class="fs_m" id="nick-'+groupMember[j].uin+'">'+(groupMember[j]['name'].length>0?groupMember[j]['name']:groupMember[j].uin)+'</a></li>';
		 		}
	 		}else{
	 			groupstr+='<li><span style="margin-left:20px;">Chưa có</span></li>';
	 		}
	 		groupstr += '</ul></dd>';
	 		$('group-'+gpid).innerHTML = groupstr;
	 		fs.addHover('group-dt-'+gpid);
	 	}
	 	if(fs._isRemarkReady){
		 	preLength = (fsd.limit<preSource.length)?fsd.limit:preSource.length;
		 	for(var z=0;z<preLength;z++){
		 		//if(fs.friendHash[preSource[z]]!=undefined){
		 		if(preSource[z]!=""){
		 			fs.selectEntry(preSource[z]);
		 		}
		 		//}else{
		 			//fs._preCare.push(preSource[z]);
		 		//}
		 	}
	 	}
	 },
	 
	 showTab : function(tab){
	 	var fs = QZONE.friends.Selector,addClass=QZFL.css.addClassName,delClass=QZFL.css.removeClassName;
	 	fs.cancelSearch();
	 	if(fs.currentTab!=tab){
	 		addClass($(fs.currentTab+'-list'),"none");
	 		delClass($(fs.currentTab+'-tab'),"fs_now");
	 		if(fs.currentTab=='num'||fs.currentTab=='care'){
	 			delClass($('search-box'),"none");
	 		}
	 	}
	 	addClass($(tab+'-tab'),"fs_now");
	 	delClass($(tab+'-list'),"none");
	 	if(tab=='care'||tab=='num'){
	 		addClass($('search-box'),"none");
	 		delClass($('care-tab'),"fs_bor");
	 	}
	 	
	 	if(tab=='friend'){
	 		delClass($('friend-tab'),"fs_bor");
	 		addClass($('care-tab'),"fs_bor");
	 	}
		
	 	if(tab=='num'){
	 		addClass($('friend-tab'),"fs_bor");
	 		QZFL.event.addEvent($('fs-input'),'keyup',function(){
	 			var e = arguments[0]||window.event;
	 			var keycode = e.keyCode || e.charCode;
				if (keycode == 13){
					fs.selectByNum();
				}
			});
	 		QZFL.event.addEvent($('fs-input'),'keydown',function(){
				if($('fs-input').value>0){
	  				QZFL.css.addClassName($('input-warn'),'none');
	  				QZFL.css.removeClassName($('fs-memo'),'none');
	  			}
			});
			$('fs-input').focus();
	 	}
	 	$(tab+'-tab').blur();
	 	fs.currentTab=tab;
	 },
	 
	 /**
	  * 添加hover样式
	  */	 
	 addHover : function(target){
	 	QZFL.event.addEvent($(target),'mouseover',function(){QZFL.css.addClassName($(target),'fs_hov');});
	 	QZFL.event.addEvent($(target),'mouseout',function(){QZFL.css.removeClassName($(target),'fs_hov');}); 	
	 },
	 
	 /**
	  * 单击选择
	  */
	 selectEntry : function(uin){
	 	var entry = $('checked-'+uin),fs = QZONE.friends.Selector, fsd=fs.defaultConfig,result_list=$('result-list'),search_entry=$('search-checked-'+uin);
	 	//搜索好友时联动
	 	if(search_entry&&!fs.isOk(uin)){
	 		if(fs.getSelectCount()<fsd.limit||!fsd.multiChoose){
		 		search_entry.style.display='';
		 		if(!fsd.multiChoose&&fs.currentEntry!=0&&(fs.currentEntry!=uin)&&$('search-checked-'+fs.currentEntry)){
		 			$('search-checked-'+fs.currentEntry).style.display="none";
		 		}
	 		}
	 	}else{
	 		if(search_entry){search_entry.style.display='none';}
	 	}
	 	//手动选择时联动
	 	//if(entry==null||entry.style.display=='none'){
	 	if(entry==null||!fs.isOk(uin)){
	 		if(fs.getSelectCount()<fsd.limit||!fsd.multiChoose){
		 		if(entry){entry.style.display="";}
		 		fs.re[uin+''] = fs.friendHash[uin+''];
		 		if(fs.defaultConfig.result){
		 			fs.sendEntryRight(uin);
		 		}
		 		if(!fsd.multiChoose&&fs.currentEntry!=0&&(fs.currentEntry!=uin)){
		 			fs.delEntry(fs.currentEntry);
		 		}
		 		fs.currentEntry=uin;
		 		fsd.selectCallback(fs.getSelect());
	 		}else{
	 			fs.showWarn();
	 		}
			fs.showCount();
	 	}else{
	 		fs.delEntry(uin);
	 	}
	 	if($('fs-input')){
	 		$('fs-input').value="";
	 	}
	 	if(entry&&$('nick-'+uin)){
	 		$('nick-'+uin).blur();//去掉a上的残影
	 	}
	 },
	 
	 /**
	  * 将选择的好友显示在结果集里
	  */
	 sendEntryRight : function(uin){
	 	if(uin==undefined){return;}
	 	var fs = QZONE.friends.Selector,fsd=fs.defaultConfig,info=fs.friendHash[uin+'']||{'uin':uin,remark:uin,name:uin},remark=info.remark?(info.remark.length>0?info.remark:uin):(info['name'].length>0?info['name']:uin),result_li=$('result-li-'+uin),overflow_li=$('overflow-li-'+uin);
	 	if(!result_li){
	 		QZFL.dom.createElementIn("li",'result-list', false, {"id" : 'result-li-'+uin, "class" :(info.online==0&&fsd.showOnline?'fs_offline':''),'style':'display:;'});
	 	}
	 	$('result-li-'+uin).innerHTML='<a href="javascript:;" onclick="QZONE.friends.Selector.delEntry('+uin+');return false;" class="fs_trash">Xóa</a><a href="javascript:;" onclick="this.blur();return false;" class="fs_m">'+remark+'</a>';
	 	fs.addHover('result-li-'+uin);
		fs.showCount();
	 },
	 
	 delEntry : function(uin){
	 	var entry = $('checked-'+uin),fs = QZONE.friends.Selector,fsd=fs.defaultConfig,result_list=$('result-list'),search_entry=$('search-checked-'+uin);
  		if(entry){entry.style.display="none";}
 		if(search_entry){search_entry.style.display="none";}
 		if(fs.defaultConfig.result){
 			QZFL.dom.removeElement('result-li-'+uin);
 		}
 		delete fs.re[uin+''];
 		fs.showWarn(true);
		fs.showCount();
	 },
	 
	 /**
	  * 添加整个分组
	  */
	  selectGroup :  function(gpid){
	  	var fs = QZONE.friends.Selector,fsd=fs.defaultConfig,uins = [],select = fs.groupSelectHash[gpid+''], display = select ? "none" : "",uin=0;
	  	var title = select ? 'Xóa nhóm':'Thêm tất cả';
	  	if(!fsd.multiChoose){
	  		fs.showMsgbox('Bạn chỉ có thể chọn 1 người',1,2000);
	  		return;
	  	}
	  	if(fs.getSelectCount()<fsd.limit||select){
		 	for(var i=0;i<fs.groupData.length;i++){
		 		if(gpid==fs.groupData[i].gpid){
		 			uins = fs.groupData[i].uins
		 			continue;
		 		}
		 	}
		  	for(var i=0;i<fsd.limit;i++){
		  		uin = uins[i];
		  		if(uin==undefined){return;}
		  		if(select){
		  			fs.delEntry(uin);
		  			fs.showWarn(true);
		  			fs.groupSelectHash[gpid+''] = false;
		  		}else{
		  			if(fs.getSelectCount()<fsd.limit){
			  			if($('checked-'+uin)){
				  			$('checked-'+uin).style.display = display;
				  			$('checked-'+uin).title = title;
				  		}
			  			fs.re[uin+''] = fs.friendHash[uin+''];
				 		if(fsd.result){
				 			fs.sendEntryRight(uin);
				 		}
			  			fs.groupSelectHash[gpid+''] = true;
		  			}
		  			fs.showCount();
		  			if(uins.length>fsd.limit){
				  		fs.showWarn();
				  	}
		  		}
		  	}
	  	}else{
	  		fs.showWarn();
	  	}
	  },
	  
	  selectByNum : function(){
	  	var fs_input=$('fs-input').value-0,fs = QZONE.friends.Selector;
	  	//debugger;
	  	if((!isNaN(fs_input))&&fs_input>10000&&$('fs-input').value.length<=11){
	  		if(!fs.friendHash[fs_input+'']){
	  			fs.friendHash[fs_input+''] = {"uin":fs_input,"groupid":8888,"name":fs_input,"online":1};
	  		}
	  		fs.selectEntry(fs_input);
	  		QZFL.css.addClassName($('input-warn'),'none');
	  		QZFL.css.removeClassName($('fs-memo'),'none');
	  	}else{
	  		QZFL.css.removeClassName($('input-warn'),'none');
	  		QZFL.css.addClassName($('fs-memo'),'none');
	  	}
	  },
	  
	  showCount : function(){
	  	var fs = QZONE.friends.Selector;
  		if($('result-count')){
 			$('result-count').innerHTML=fs.getSelectCount();
 		}
	  },
	  
	  /**
	   * 清空已选中的
	   */
	  clearUp : function(){
	  	var fs = QZONE.friends.Selector;
	  	$('result-list').innerHTML='';
	  	if(!QZFL.css.hasClassName($('overflow'),'none')){
	  		QZFL.css.addClassName($('overflow'),'none');
	  	}
	  	for(key in fs.re){
	  		if($('checked-'+key)){$('checked-'+key).style.display="none";}
	  		if($('search-checked-'+key)){$('search-checked-'+key).style.display="none";}
	  	}
	  	fs.re = {};
	  	fs.groupSelectHash = {};
	  	if($('result-count')){
	  		$('result-count').innerHTML=0;
	  		QZFL.css.removeClassName($('result-count'),'fs_hit');
	  		QZFL.css.addClassName($('overflow'),'none');
	  	}
	  	fs.count=0;
	  },
	  
	  /**
	   * 
	   */
	  showWarn : function(off){
	  	off = off || false;
	  	if(!off){
	  		if(!QZFL.css.hasClassName($('overflow'),"none")){
	  			QZFL.css.addClassName($('overflow'),"none");
	  		}
	  		setTimeout(function(){
	  			QZFL.css.removeClassName($('overflow'),"none");
	  		},200);
	  	}else{
	  		QZFL.css.addClassName($('overflow'),"none");
	  	}
	  },
	  
	 
	 /**
	  * 展开收起分组
	  */
	 showGroup : function(gpid){
	 	var addClass=QZFL.css.addClassName,delClass=QZFL.css.removeClassName,fs = QZONE.friends.Selector,groupData=fs.groupData,uins,uin;
	 	for(var i=0;i<groupData.length;i++){
	 		if(gpid==groupData[i].gpid){
	 			uins=groupData[i].uins;
	 			for(var j=0;j<uins.length;j++){
	 				uin = uins[j];
	 				QZONE.friends.Selector.addHover('nick-li-'+uin);
	 				if(fs.friendHash[uin+''].remark){
						$('nick-'+uin).innerHTML=fs.friendHash[uin+''].remark;
					}
	 			}
	 			continue;
	 		}
	 	}
		if(QZFL.css.hasClassName($('group-'+gpid),'fs_fold')){
			delClass($('group-'+gpid),'fs_fold');
			addClass($('group-'+gpid),'fs_unfold');
		}else{
			delClass($('group-'+gpid),'fs_unfold');
			addClass($('group-'+gpid),'fs_fold');
		}
	 },
	 
 
	 /**
	  * Friends list to get attention
	  */
	 getCareList :  function(){
	 	var fs = QZONE.friends.Selector,fsd = fs.defaultConfig,careInGroup = fsd.careInGroup,care_list=[],care_ul=$('care-ul'),care_ul_str="",care_li=null,preLength=0;
		FRIEND_GETCAREINFO = "http://r.qzone.qq.com/cgi-bin/tfriend/friend_getcareinfo.cgi",
		sender = new QZONE.JSONGetter(FRIEND_GETCAREINFO, "getCareList", {"uin" : fs.defaultConfig.uin}, "utf-8");
		preLength = (fsd.limit<fsd.preSource.length)?fsd.limit:fsd.preSource.length;
		sender.onSuccess = function(re){
			if(re&&re.items){
				fs.careListData = care_list = re.items;
				if(careInGroup){
					fs.groupData.push({"gpid":9999,"gpname":"Bạn bè"});
					for(var i=0;i<care_list.length;i++){
						care_list[i].groupid = 9999;
						fs.qqfriendData.push(care_list[i]);
					}
				}else{
					if(care_list.length>0){
						fs.addHover('care-dt');
						for(var i=0;i<care_list.length;i++){						 	
							QZFL.dom.createElementIn("li", care_ul, false, {"id":"care-li-"+care_list[i].uin,'class':(care_list[i].online==0&&fsd.showOnline?'fs_offline':'')});
							care_li = $('care-li-'+care_list[i].uin);
							care_li.innerHTML='<span class="fs_checked" id="checked-'+care_list[i].uin+'" style="display:none;">Đã chọn </span><a href="javascript:;" onclick="QZONE.friends.Selector.selectEntry('+care_list[i].uin+');return false;" class="fs_m">'+care_list[i]['name']+'</a>';
							fs.addHover('care-li-'+care_list[i].uin);
							fs.friendHash[care_list[i].uin+''] = care_list[i];//将好友的信息加进friend hash里
						}
						fs.careIsShow = true;
					}else{
						$('care-list').innerHTML="<div style='margin:10px 0px 0px 10px;'>Chưa có</div>";
					}
				}
				for(var z=0;z<fs._preCare.length;z++){
			 		fs.selectEntry(fs._preCare[z]);
			 	}
			}else{
				fs.showMsgbox(re.error.msg,1,2000);
			}
			if(careInGroup){
				fs.buildGroupData();
			}
		};
		sender.onError = function(){
			fs.showMsgbox("Không thể kết nối, vui lòng thử lại!",1,2000);
			if(careInGroup){
				fs.buildGroupData();
			}
		};
		sender.send("_callback");		 	
	 },
	
	/**
	 * Search for friends
	 * @param {String} key 关键字
	 * @param {Function} callback 搜索后回调
	 * @return {Object} 结果的json数据{'items':[]}
	 */
	search : function(key,callback){
		var fs = QZONE.friends.Selector,callback=callback||QZFL.emptyFn,data,o,keystr;
		
		if(fs._lastKey==key){
			return;
		}else if((fs._curData.length>0)&&fs._lastKey && key.toString().indexOf(fs._lastKey) == 0){
			data = objectClone(fs._curData);
		}else{
			data = fs._data;
		}
		
		fs._lastKey = key;
		keystr = key.toString().toLowerCase();
		fs._curData = [];
		
		for(var i=0;i<data.length;i++){
			o=data[i];
			if(o.searchfield.indexOf(keystr) != -1){
				fs._curData.push(o);
			}
		}
		
		callback(fs._curData);
		return fs._curData;		
	},
	
	/**
	 * Set the search data sources
	 * @param {Object} Json data in a data source
	 */
	setDataProvider : function(data){
		var fs = QZONE.friends.Selector,o,searchFieldArray=[],remark;
		if(data.length && !!QZFL.widget.pinyin){
			for(var i=0;i<data.length;i++){
				o=data[i];
				remark=fs.friendHash[o.uin+''].remark;
				searchFieldArray=[o.uin,o['name'],remark];
				if(/[\u4E00-\u9FA5]/.test(o['name'])){
					searchFieldArray=searchFieldArray.concat(QZFL.widget.pinyin.convertPYs(o['name'],true));
				}
				if(/[\u4E00-\u9FA5]/.test(remark)){
					searchFieldArray=searchFieldArray.concat(QZFL.widget.pinyin.convertPYs(remark,true));
				}
				o.searchfield = searchFieldArray.join('\x01').toLowerCase();
			}
		}
		fs._data = data;
		return data;
	},
	
	/**
	 * Search results
	 */
	showResultList : function(re){
		var fs = QZONE.friends.Selector;
		QZFL.css.addClassName($(fs.currentTab+'-list'),'none');
		QZFL.css.removeClassName($('search-list'),'none');
		if(re.length==0){
			$('search-list').innerHTML = '<p class="fs_error_msg" id="search-hint">Không tìm thấy...</p>';
		}else{
			fs.renderResultList(re);
		}
	},
	
	/**
	 * Cancel Search
	 */
	cancelSearch : function(isBlur){
		var fs = QZONE.friends.Selector,isBlur=isBlur||false;
		QZFL.css.removeClassName($(fs.currentTab+'-list'),'none');
		QZFL.css.addClassName($('search-list'),'none');
		QZFL.css.removeClassName($("search-button"),'fs_del');
	 	if(fs.searchClick&&!isBlur){
			$('search-input').value = 'Tìm bạn';
			$('search-input').style.color = '#b8b8b8';
			fs.searchClick = false;
			$('search-input').blur();
		}
	},
	
	/**
	 * Fill the list of results
	 */
	renderResultList :  function(re){
		var fs = QZONE.friends.Selector,fsd=fs.defaultConfig,items=re.items,uin=0,remark="",search_li=null,info=null,o;
		$('search-list').innerHTML='<ul id="result-items" class="fs_clear"></ul>';
		for(var i=0;i<re.length;i++){
			o=re[i];
			uin=o.uin;
		 	remark=o.remark?o.remark:o['name'];
		 	search_li=$('search-li-'+uin);
		 	if(!search_li){
		 		QZFL.dom.createElementIn("li",'result-items', false, {"id" : 'search-li-'+uin, "class" :(o.online==0&&fsd.showOnline?'fs_offline':''),'style':'display:;'});
		 	}
		 	$('search-li-'+uin).innerHTML='<span id="search-checked-'+uin+'" class="fs_checked" style="display:'+(fs.isOk(uin)?"":"none")+';">Đã chọn </span><a href="javascript:;" onclick="QZONE.friends.Selector.selectEntry('+uin+');return false;" class="fs_m" id="search-nick-'+uin+'">'+remark+'</a>';
		 	fs.addHover('search-li-'+uin);
		}
	},
	
	isOk : function(uin){
		return (QZONE.friends.Selector.re[uin+'']!=undefined);
	},
	
	/**
	 * 显示消息
	 */
	showMsgbox : (QZONE.FP.showMsgbox/* || parent.QZONE.FrontPage.showMsgbox || QZONE.FrontPage.showMsgbox*/)
};/*  |xGv00|006fbfec3f5aa7c4b6a61d40e134323c */