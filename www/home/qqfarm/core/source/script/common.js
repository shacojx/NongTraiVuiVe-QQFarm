/*!
 * common.js
 * create by seaif@zealv.com
 */

/*!
 * Request data to the server
 * Accept the data format is: Result Code | & | tips | & | Jump URL | & | the number of seconds or other data delayed
 */
function request(url, msgOId, data, secFn) {
	var msgObj = msgOId && SQuery('#'+msgOId);
	var msgFuc = function(msg, sec) {
		if(msgObj) {
			msgObj.innerHTML = msg;
			sec = sec > 0 ? sec : 3000;
			setTimeout(function(){msgObj.innerHTML = '';}, sec);
		}
	};
	SQuery.ajax({
		url: url, data: data,
		type: data ? 'POST' : 'GET',
		start: function() {
			msgFuc('Request data to the server is.', 0);
		},
		success: function(data) {
			data = data.indexOf('|&|') > 0 ? data.split('|&|') : ['-1','Server returns data exception.'];
			var DelaySec = !isNaN(data[3]) ? data[3]*1000 : 0;
			if(data[1]) {
				msgFuc(data[1], DelaySec);
			}
			if(data[2]) {
				data[2] = SQuery.trim(data[2]);
				if(data[2] != 'null') {
					var reurl = data[2] == 'refresh' ? location : data[2];
					if(DelaySec > 0) {
						setTimeout(function(){location.assign(reurl);}, DelaySec);
					} else {
						location.assign(reurl);
					}
				}
			}
			secFn && secFn(data);//Two callback function
		},
		error: function() {
			msgFuc('Request Server Error.', 5);
		}
	});
}

/*!
 * Paging function
 * Parameters: CFG {
 *   pid: Parameters: CFG
 *   purl: Page url prefix
 *   psize: Number of items per page,
 *   count: Total number of projects
 * }
 */
function multiPage(CFG) {
	CFG = CFG || {};
	var
	 pcode = '',
	 pid = CFG.pid || 1,
	 purl = CFG.purl || '',
	 psize = CFG.psize || 10,
	 pcount = Math.ceil(CFG.count/psize);
	if(pcount > 1) {
		var i = pid > 2 ? pid - 2 : 1;
		var iMax = i + 5;
		if(iMax > pcount) {
			i = i - (iMax - pcount);
			i = i > 0 ? i : 1;
			iMax = pcount;
		}
		pcode += '<a href="'+purl+'&pid=1">|<</a>';
		for(i; i <= iMax; i++) {
			url_tmp = purl+'&pid='+i;
			cls_tmp = pid == i ? ' class="active"' : '';
			pcode += '<a href="'+url_tmp+'"'+cls_tmp+'>'+i+'</a>';
		}
		pcode += '<a href="'+purl+'&pid='+pcount+'">>|</a>';
	}
	return pcode;
}

/*!
 * Operation of the parent window element
 */
function doParent(farmVersion, viewPlayer) {
	try {
		if(window.parent.curQFWindow == 'myfarm_full') {
			SQuery('#tabs').style.display = 'none';
			SQuery('#info').style.display = 'none';
		}
	} catch(e) {}
	try {
		if(viewPlayer > 0) {
			SQuery('#qfplayer', window.parent.document).style.display = 'block';
		}
	} catch(e) {}
	try {
		var ptdoc = SQuery('#qfversion', window.parent.document);
		ptdoc.innerHTML = '<a href="http://www.phpye.com" target="_blank" title="PHP Institute" style="color:#444;">phpYe.QFarm ' + farmVersion + '</a>';
		ptdoc.style.display = 'block';
	} catch(e) {}
}
