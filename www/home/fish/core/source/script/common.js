/*!
 * common.js
 * create by seaif@zealv.com
 */

//向服务器请求数据
function request(url, msgOId, data, secFn) {
	var msgObj = msgOId && SQuery('#'+msgOId);
	var msgFuc = function(msg, sec) {
		if(msgObj) {
			msgObj.innerHTML = msg;
			if(sec > 0) setTimeout(function() {msgObj.innerHTML = '';}, sec * 1000);
		}
	};
	SQuery.ajax({
		url: url, data: data,
		type: data ? 'POST' : 'GET',
		start: function() {
			msgFuc("Không kết nối tới máy chủ CSDL.", 0);
		},
		success: function(data) {
			data = data.indexOf('|&|') > 0 ? data.split('|&|') : ['-1','Server trả về dữ liệu bất thường.']; 
			if(data[2]) {
				data[2] = $.trim(data[2]);
				if(data[2] != 'null') {
					var reurl = data[2] == "refresh" ? location : data[2];
					location.assign(reurl);
				}
			}
			msgFuc(data[1], 3);
			secFn && secFn(data);//二级回调函数
		},
		error: function() {
			msgFuc("Yêu cầu Server Error.", 5);
		}
	});
}

/*!
 * 分页函数
 * 参数: CFG {
 *   pid: 当前页码id,
 *   purl: 分页url前缀,
 *   psize: 每页项目数,
 *   count: 项目总数
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
