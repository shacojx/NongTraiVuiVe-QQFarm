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


SQuery.$ = function(selector, context) {
	context = context || document;
	if(typeof selector === "string") {
		var match = selectorExp.exec(selector);
		if(match[1]) return context.getElementById(match[1]);
		else if(match[2]) {
			if(!context.getElementsByClassName) {

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

SQuery.trim = function(text) {
	return (text || '').replace(/^\s+|\s+$/g,'');
};

SQuery.timeOut = function(callback, second, arg) {
	var args = arg ? Array.prototype.slice.call(arguments, 2) : [];
	setTimeout(function() {
		callback.apply(null, args);
	}, second * 1000);
};

SQuery.addEvent = function(obj, event, f) {
	if(window.addEventListener) obj.addEventListener(event, f, false);
	else if(window.attachEvent) obj.attachEvent('on' + event, f);
};

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

SQuery.Cookie = function(name, value, CFG) {
	if(value === undefined) {
		var cookieValue = null;
		if(document.cookie && document.cookie != '') {
			var cookies = document.cookie.split(';');
			for (var i = 0; i < cookies.length; i++) {
				var cookie = SQuery.trim(cookies[i]);
				if(cookie.substring(0, name.length + 1) == (name + '=')) {
					cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
					break;
				}
			}
		}
		return cookieValue;
	}

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
			expires = '; expires=' + date.toUTCString();
		}
		var path = CFG.path ? '; path=' + CFG.path : '';
		var domain = CFG.domain ? '; domain=' + CFG.domain : '';
		var secure = CFG.secure ? '; secure' : '';
		document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
	}
};

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

SQuery.ajax = function(CFG) {
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
	XMLHttp = SQuery.ajaxBase.XMLHttp();
	XMLHttp.onreadystatechange = function() {
		if(XMLHttp.readyState == 1 && CFG.start) CFG.start();
		else if(XMLHttp.readyState == 4) {
			if(XMLHttp.status == 200 && CFG.success) CFG.success(XMLHttp.responseText);
			else if(CFG.error) CFG.error();
		}
	};
	XMLHttp.open(CFG.type, CFG.url, CFG.async);
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

SQuery.DomReady = function(f) {
	if(SQuery.DomReady.done) return f();
	if(SQuery.DomReady.timer) {
		SQuery.DomReady.list.push(f);
	}
	else {
		SQuery.DomReady.list = [f];
		SQuery.DomReady.check = function() {
			if(SQuery.DomReady.done) return false;
			if(document && document.getElementById && document.getElementsByTagName && document.body) {
				SQuery.DomReady.done = true;
				clearInterval(SQuery.DomReady.timer);
				SQuery.DomReady.timer = null;
				SQuery.each(SQuery.DomReady.list, function() {
					this.call(document, SQuery);
				});
				SQuery.DomReady.list = null;
			}
		};
		SQuery.addEvent(window, 'load', SQuery.DomReady.check);
		SQuery.DomReady.timer = setInterval(SQuery.DomReady.check, 100);
	}
};

})();