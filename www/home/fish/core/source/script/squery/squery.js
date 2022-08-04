/*!
 * SQuery JavaScript Library v1.0.0406
 * http://project.zealv.com/jscript/squery/
 *
 * Copyright (c) 2009 seaif@zealv.com
 * Dual licensed under the MIT and GPL licenses.
 * http://project.zealv.com/?License
 *
 */

(function() {

var
	window = this,
	undefined,
	_$ = window.$,
	selectorExp = /^#([\w-]+)$|^\.([\w-]+)$|^([\w-]+)$/,
	SQuery = window.SQuery = window.$ = function(selector, context) {
		return SQuery.$(selector, context);
	};

if(_$) window.$ = _$;

/*!
 * 功能: 简单CSS选择器
 */
SQuery.$ = function(selector, context) {
	context = context || document;
	if(typeof selector === "string") {
		var match = selectorExp.exec(selector);
		if(match[1]) return context.getElementById(match[1]);
		else if(match[2]) {
			if(!context.getElementsByClassName) {
				//fixed getElementsByClassName for IE
				context.getElementsByClassName = function(ClassName) {
					var getElClass = [];
					var els = this.getElementsByTagName("*");
					var myclass = new RegExp("\\b"+ClassName+"\\b");
					for(i=0; i<els.length; i++) {
						if(myclass.test(els[i].className)) getElClass.push(els[i]);
					}
					return getElClass;
				};
			}
			return context.getElementsByClassName(match[2]);
		}
		else if(match[3]) {
			var matchs = context.getElementsByTagName(match[3]);
			if(matchs.length == 0) return context.getElementById(match[3]);
		}
	}
	else return selector;
};

/*!
 * 功能: 浏览器内核
 */
SQuery.userAgent = (function() {
	var ua = navigator.userAgent.toLowerCase();
	var version = (ua.match(/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/) || [0,'0'])[1];
	return {
		opera: /opera/.test(ua) && version,
		webkit: /webkit/.test(ua) && version,
		msie: /msie/.test(ua) && !/opera/.test(ua) && version,
		gecko: /gecko/.test(ua) && !/khtml/.test(ua) && version
	}
})();

/*!
 * 功能: 去首尾空格
 */
SQuery.trim = function(text) {
	return (text || '').replace(/^\s+|\s+$/g,'');
};

/*!
 * 功能: 使能setTimeout传参
 * 参数:
 *   @ callback: 回调函数
 *   @ second: 超时时间(秒)
 *   @ arg: arg1, arg2, ...
 */
SQuery.timeOut = function(callback, second, arg) {
	var args = arg ? Array.prototype.slice.call(arguments, 2) : [];
	setTimeout(function() {
		callback.apply(null, args);
	}, second * 1000);
};

/*!
 * 功能: 添加事件
 */
SQuery.addEvent = function(obj, event, f) {
	if(window.addEventListener) obj.addEventListener(event, f, false);
	else if(window.attachEvent) obj.attachEvent('on' + event, f);
};

/*!
 * 功能: 遍历对象
 * 参数:
 *   @ object: 要遍历的对象
 *   @ callback: 回调函数
 *   @ arg: arg1, arg2, ...
 */
SQuery.each = function(object, callback, arg) {
	var name, length = object.length;
	var args = arg ? Array.prototype.slice.call(arguments, 2) : [];
	if(length === undefined) {
		for(name in object) {
			if(callback.apply(object[name], args) === false) break;
		}
	}
	else {
		for(var i = 0; i < length; i++) {
			if(callback.apply(object[i], args) === false) break;
		}
	}
	return object;
};

/*!
 * 功能: 载入CSS文件
 * 参数:
 *   @ href: CSS文件路径
 */
SQuery.Loadcss = function(href, name) {
	if(name) {
		loaded = SQuery.Loadcss.loaded || [];
		if(loaded[name]) return;
		else loaded[name] = 1;
		SQuery.Loadcss.loaded = loaded;
	}
	var head = SQuery("head")[0] || document.documentElement;
	var link = document.createElement('link');
	link.type = 'text/css';
	link.rel = 'stylesheet';
	link.href = href;
	head.appendChild(link);
};

/*!
 * 功能: 执行Script
 * 参数:
 *   @ src: Script路径
 *   @ data: Script代码
 */
SQuery.evalScript = function(src, code) {
	var body = SQuery("body")[0] || document.documentElement;
	var script = document.createElement('script');
	script.type = 'text/javascript';
	if(src) script.src = src;
	else {
		try {script.appendChild(script.createTextNode(code));}
		catch(e) {script.text = code;}
	}
	body.insertBefore(script, body.firstChild);
	body.removeChild(script);
};

/*!
 * 设置cookie的值 
 *   SQuery.cookie('the_cookie', 'the_value');
 * 新建一个cookie 包括有效期 路径 域名等
 *   SQuery.cookie('the_cookie', 'the_value', {expires: 7, path: '/', domain: 'jquery.com', secure: true});
 * 读取cookie的值
 *   SQuery.cookie('the_cookie');
 * 删除一个cookie
 *   SQuery.cookie('the_cookie', null);
 */
SQuery.Cookie = function(name, value, CFG) {
	//读取Cookie
	if(value === undefined) {
		var cookieValue = null;
		if(document.cookie && document.cookie != '') {
			var cookies = document.cookie.split(';');
			for (var i = 0; i < cookies.length; i++) {
				var cookie = SQuery.trim(cookies[i]);
				//验证以name开头的字符串是不是我们想要的
				if(cookie.substring(0, name.length + 1) == (name + '=')) {
					cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
					break;
				}
			}
		}
		return cookieValue;
	}
	//设置Cookie
	else {
		CFG = CFG || {};
		if(value === null) {
			value = '';
			CFG.expires = -1;
		}
		var expires = '';
		if(CFG.expires && (typeof CFG.expires == 'number' || CFG.expires.toUTCString)) {
			if(typeof CFG.expires == 'number') {
				var date = new Date();
				date.setTime(date.getTime() + (CFG.expires * 24 * 60 * 60 * 1000));
			}
			else var date = CFG.expires;
			//使用expires属性,max-age不被IE支持
			expires = '; expires=' + date.toUTCString();
		}
		var path = CFG.path ? '; path=' + CFG.path : '';
		var domain = CFG.domain ? '; domain=' + CFG.domain : '';
		var secure = CFG.secure ? '; secure' : '';
		document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
	}
};

/*!
 * 获取FORM表单值
 */
SQuery.getForm = function(form, retype) {
	var elements = SQuery(form).elements;
	var element, FData = {};
	for(var i=0; i<elements.length; ++i) {
		element = elements[i];
		if(!element.name) continue;
		if(element.type == "select-multiple") {
			var options = element.options, olength = options.length;
			var item, j = k = 0, selected = [];
			for(j; j < olength; ++j) {
				item = options[j];
				if(item.selected) selected[k++] = item.value;
			}
			FData[element.name] = selected.join(",");
		}
		else if(element.type == "checkbox" || element.type == "radio") {
			if(element.checked) FData[element.name] = element.value;
		}
		else FData[element.name] = element.value;
		//替换值里面的'&'为%26
		if(FData[element.name]) {
			FData[element.name] = FData[element.name].replace(/\&/g, '%26');
		}
	}
	if(retype) {
		var param = [];
		for(var n in FData) {
			param.push(n + '=' + FData[n]);
		}
		FData = param.join('&');
	}
	return FData;
};

/*!
 * 功能: 提交请求到URL
 * 参数:
 *   @ CFG {
 *       url: 请求目标,
 *       data: 提交内容,
 *       type: 请求方式,
 *       accept: 返回数据类型[html,text,xml,json,script],
 *       start: 开始请求,
 *       success: 请求成功,
 *       error: 请求出错,
 *       async: 是否异步[true,false]
 *     }
 */
SQuery.ajax = function(CFG) {
	//设置参数
	CFG = CFG || {};
	if(typeof CFG.url !== 'string') return;
	CFG.async = !!!CFG.async;
	CFG.data = CFG.data || null;
	CFG.type = CFG.type || 'GET';
	if(CFG.data && CFG.type == "GET") {
		CFG.url += (CFG.url.match(/\?/) ? "&" : "?") + CFG.data;
		CFG.data = null;
	}
	CFG.accept = SQuery.ajaxBase.Accept(CFG.accept);
	//创建XMLHttp对象
	XMLHttp = SQuery.ajaxBase.XMLHttp();
	//设置回调函数
	XMLHttp.onreadystatechange = function() {
		if(XMLHttp.readyState == 1 && CFG.start) CFG.start();
		else if(XMLHttp.readyState == 4) {
			if(XMLHttp.status == 200 && CFG.success) CFG.success(XMLHttp.responseText);
			else if(CFG.error) CFG.error();
		}
	};
	//打开URL
	XMLHttp.open(CFG.type, CFG.url, CFG.async);
	//提交数据
	try {
		if(CFG.data) XMLHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		if(CFG.type == "GET") XMLHttp.setRequestHeader("If-Modified-Since", "0");//防止请求被缓存
		XMLHttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
		XMLHttp.setRequestHeader("Accept", CFG.accept);
	} catch(e){}
	XMLHttp.send(CFG.data);
};
SQuery.ajaxBase = {
	Accept: function(act) {
		switch(act) {
			case 'html':
				return "text/html, */*";
			case 'text':
				return "text/plain, */*";
			case 'xml':
				return "application/xml, text/xml, */*";
			case 'json':
				return "application/json, text/javascript, */*";
			case 'script':
				return "text/javascript, application/javascript, */*";
			default:
				return "*/*";
		}
	},
	XMLHttp: function() {
		return window.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest();
	}
};

/*!
 * 功能: DOM Ready
 */
SQuery.DomReady = function(f) {
	if(SQuery.DomReady.done) return f();
	if(SQuery.DomReady.timer) {
		SQuery.DomReady.list.push(f);
	}
	else {
		SQuery.DomReady.list = [f];
		SQuery.DomReady.check = function() {
			if(SQuery.DomReady.done) return false;
			//检查若干函数和元素是否可用
			if(document && document.getElementById && document.getElementsByTagName && document.body) {
				//标记DOM已加载
				SQuery.DomReady.done = true;
				//停止检查DOM状态
				clearInterval(SQuery.DomReady.timer);
				SQuery.DomReady.timer = null;
				//加载待执行函数
				SQuery.each(SQuery.DomReady.list, function() {
					this.call(document, SQuery);
				});
				SQuery.DomReady.list = null;
			}
		};
		//为页面加载完毕绑定一个事件，以防它最先完成
		SQuery.addEvent(window, 'load', SQuery.DomReady.check);
		//尽可能快地检查DOM是否已可用
		SQuery.DomReady.timer = setInterval(SQuery.DomReady.check, 100);
	}
};

})();
