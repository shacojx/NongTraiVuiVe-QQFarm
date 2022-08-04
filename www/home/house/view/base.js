var IE = navigator.userAgent.indexOf('MSIE') > -1 ? true : false;
var Opera = navigator.userAgent.indexOf('Opera') > -1 ? true : false;
var IE7 = navigator.userAgent.indexOf('MSIE 7') > -1 ? true : false;
var Firefox = navigator.userAgent.indexOf('Firefox') > -1 ? true : false;
var xp = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
var getHost = function(url) {var host = "null";if(typeof url == "undefined" || null == url) url = window.location.href;var regex = /.*\:\/\/([^\/]*).*/;var match = url.match(regex);if(typeof match != "undefined"&& null != match)  host = match[1];return host;}
function $(_sId){return document.getElementById(_sId);}
String.prototype.resetBlank = function(){return this.replace(/\s+/g," ");}
String.prototype.LTrim = function(){return this.replace(/^\s+/g,"");} 
String.prototype.trim = function(){return this.replace(/(^\s+)|(\s+$)/g,""); }
String.prototype.getNum = function(){return this.replace(/[^\d]/g,"");}
String.prototype.getEn = function(){return this.replace(/[^A-Za-z]/g,""); }
String.prototype.getCn = function(){return this.replace(/[^\u4e00-\u9fa5\uf900-\ufa2d]/g,"");}
String.prototype.strlen = function(){return this.replace(/[^\x00-\xff]/g,"--").length;}
String.prototype.left = function(n){return this.slice(0,n);}
String.prototype.right = function(n){return this.slice(this.length-n);}
String.prototype.HTMLEncode = function(){var re = this;var q1 = [/\x26/g,/\x3C/g,/\x3E/g,/\x20/g];var q2 = ["&amp;","&lt;","&gt;","&nbsp;"];for(var i=0;i<q1.length;i++)re = re.replace(q1[i],q2[i]);return re;}
String.prototype.ascW = function(){var strText = "";for (var i=0; i<this.length; i++) strText += "&#" + this.charCodeAt(i) + ";";return strText;}
String.prototype.stripTags = function(){return this.replace(/<\/?[^>]+>/gi, '');};
String.prototype.inArray = function(arr){for(var i=0;i<arr.length;i++){if(this==arr[i]) return true;};return false;};
Array.prototype.unset = function(str){var _o = this; var len = _o.length;var temp = []; for(var i=0;i<len;i++){if(_o[i] != str) temp[temp.length] = _o[i];}; return temp;};
Array.prototype.inArray = function(str){var _o = this; var len = _o.length;for(var i=0;i<len;i++){if(_o[i] == str) return true;};return false;};
function domReady(func){if (!window.__load_events){var init = function(){if (arguments.callee.done) return;arguments.callee.done = true;if (window.__load_timer){clearInterval(window.__load_timer);window.__load_timer = null;};for (var i=0;i < window.__load_events.length;i++){window.__load_events[i]();};window.__load_events = null;};if (document.addEventListener){document.addEventListener("DOMContentLoaded", init, false);};if (/WebKit/i.test(navigator.userAgent)){window.__load_timer = setInterval(function(){if (/loaded|complete/.test(document.readyState)){init();};}, 10);};window.onload = init;window.__load_events = [];};window.__load_events.push(func);}
var base = new Object();
var bases = function(){
	var _o = this;
	var _t = '';
	this.sure = -1;
	this.eventIndex = -1;
	this.divIndex = 0;
	this.delObj = new Object();
	this.fetchOffset = function(obj) {var left_offset = obj.offsetLeft;var top_offset = obj.offsetTop;while((obj = obj.offsetParent) != null) {left_offset += obj.offsetLeft;top_offset += obj.offsetTop;};return { 'left' : left_offset, 'top' : top_offset };};
	this.getElementsByClassName = function(ele, className){if(document.all){var children = ele.all;}else{var children = ele.getElementsByTagName('*');};var elements = new Array();for (var i = 0; i < children.length; i++){var child = children[i];var classNames = child.className.split(' ');for (var j = 0; j < classNames.length; j++) {if (classNames[j].trim() == className) {elements[elements.length] = child;break;}}};return elements;};
	this.appendscript=function(txt){eval(txt);};
	this.evalscript = function(s){if(s.indexOf('<script') == -1) return s;var p = /<script[^\>]*?src=\"([^\>]*?)\"[^\>]*?(reload=\"1\")?(?:charset=\"([\w\-]+?)\")?><\/script>/ig;var arr = new Array();while(arr = p.exec(s)) appendscript(arr[1], '', arr[2], arr[3]);p = /<script (?!src)[^\>]*?( reload=\"1\")?>([^\x00]+?)<\/script>/ig;while(arr = p.exec(s)) _o.appendscript(arr[2]);return s;};
	this.encode = function(string){return encodeURIComponent(string);};
	this.getFile = function(url){var index = url.lastIndexOf('/');return url.substr(index+1);};
	this.evaljson = function(resp){var json; try{eval("json = " + resp);}catch(e){var l = resp.indexOf('{'); var r = resp.lastIndexOf('}'); eval("json = " + resp.substr(l, r-l+1));};return json;};
	this.preloadImg = function(arr){var imgs= new Array();for(var i=0;i<arr.length;i++){imgs[i]=new Image();imgs[i].src=arr[i];}};
	this.backIframeDis = function(){if(!IE) return false; var shield = document.createElement("DIV");shield.id = "iframeTop" ;shield.style.ition = "absolute";shield.style.left = "0px";shield.style.top = "0px";shield.style.width = "100%";shield.style.height = document.body.clientHeight + 'px';shield.style.zIndex = "499";shield.style.opacity = 0;shield.style.filter = "alpha(opacity=0)";document.body.appendChild(shield);shield.innerHTML= '<iframe src="about:blank" frameBorder=0 scrolling=no style="width:100%;height:100%;"></iframe>';};
	this.backGroundDis = function(){var shield = document.createElement("DIV");shield.id = "shield";shield.style.ition = "absolute";shield.style.left = "0px";shield.style.top = "0px";shield.style.width = "100%";shield.style.height = document.body.clientHeight + 'px';shield.style.background = "#000000";shield.style.textAlign = "center";shield.style.zIndex = "500";shield.style.filter = "alpha(opacity=50)";shield.style.opacity = 0.5;document.body.appendChild(shield);};
	this.backGroundDisColor = function(_s,_e){var _opac = parseFloat($('shield').style.opacity);if(_opac >= _e) return true;_opac = _opac+0.05;$('shield').style.filter = "alpha(opacity="+(_opac*100)+")";$('shield').style.opacity = _opac;this._t = setTimeout(function(){_o.backGroundDisColor(_s,_e);}, 50);};
	this.backGroundDisClose = function(){if($('shield') != null){clearTimeout(this._t);document.body.removeChild($('shield'));};if($('iframeTop')!= null){$('iframeTop').removeChild($('iframeTop').getElementsByTagName('iframe')[0]);document.body.removeChild($('iframeTop'));};};
	this.getElementsByName = function(name, tag){var _o = document.getElementsByName(name);if(_o.length > 0) return _o;var temp = [];tag = tag || 'DIV';var _o = document.getElementsByTagName(tag.toUpperCase());for(var i=0;i<_o.length;i++){if(_o[i].getAttribute('name') == name){temp[temp.length] = _o[i];}};return temp;};
	this.closeDoDiv = function(){if($('dialog-advanced') == null) return false;document.body.removeChild($('dialog-advanced'));window.onscroll=null;window.onresize=null;_o.backGroundDisClose();return false;};
	this.closeDiv = function(){base.closeDoDiv();return false;};
	this.bgChangeColor = function(_id, _type, fun){var fun = fun || null;this.obj = typeof(_id)=='object' ? _id : $(_id);this._type = _type || 'up';this.start = this._type == 'up' ? 0 : 1;this.end = this._type == 'up' ? 1 : 0;if(this.obj == null) return false;this.obj.style.background = 'yellow';this.obj.style.filter = "alpha(opacity="+(this.start*100)+")";this.obj.style.opacity = this.start;this.stat = 0;var _t = this;this.timer = window.setTimeout(function(){_t.change(fun);},1);this.getStep = function(op){return op <= 0.15 ? 0.05 : 0.2;};this.change = function(fun){var op = parseFloat(this.obj.style.opacity);var step = _t.getStep(op);if(_t._type == 'up'){if(op<=_t.end){this.obj.style.opacity = op + step;this.obj.style.filter = "alpha(opacity="+(op+step)*100+")";window.setTimeout(function(){_t.change(fun);},25);}else{clearTimeout(_t.timer);fun();}}else{if(op>=_t.end){this.obj.style.opacity = op - step;this.obj.style.filter = "alpha(opacity="+(op-step)*100+")";window.setTimeout(function(){_t.change(fun);},25);}else{clearTimeout(_t.timer);fun();}}};};
	this.makeSure = function(obj,title,delObj){if(delObj && $('delMakeSure') != null){_o.sure = -1;document.body.removeChild($('delMakeSure'));setTimeout(function(){_o.makeSure(obj, title, delObj);},100);return false;};if($('delMakeSure') == null){if(delObj == undefined) return false;_o.delObj = delObj;var _div = document.createElement('DIV');_div.id = 'delMakeSure';_div.style.cssText = 'visibility:visible;ition:absolute;display:block;z-index: 900;';_div.innerHTML = "<div class='dialog-1' style='ition: relative;'><div style='visibility: inherit;' class='hd'/><div style='visibility: inherit;' class='bd'><h3>&#30830;&#23450;&#21024;&#38500;&#35813;<span id='delSureTitle'>"+title+"</span>&#21527;&#65311;</h3></div><div style='visibility: inherit;' class='ft'><p class='act'><input type='button' onclick='base.sure=1;' class='f-button btn-confirm' value='&#30830;&#23450;' id='make_sure_act'/><input type='button' onclick='base.sure=0;' class='f-button f-alt btn-cancel' value='&#21462;&#28040;'/></p><div class='decor'><img src='img/pmsg_dialog.gif'/></div></div></div>";_div.style.top  = base.get(delObj, 0) - 83 +'px';_div.style.left  = base.get(delObj, 1) -200+'px';document.body.appendChild(_div);}if(window.eventList==null) window.eventList=new Array();_o.eventIndex=-1;for(var i=0;i<window.eventList.length;i++){if(window.eventList[i]==null){window.eventList[i]=obj;_o.eventIndex=i;break;}};if(_o.eventIndex==-1){ind=window.eventList.length;window.eventList[_o.eventIndex]=obj;};setTimeout("base.GoOn(" + _o.eventIndex + ",'"+title+"')",50);};
	this.delSure = function(obj, title, id){_o.makeSure(this,title,obj);this.NextStep=function(){if(base.sure == 1){if(!id) top.location = obj.getAttribute('rel');else{var url = obj.getAttribute('rel');AJAX.request(url,{method: 't',parameters:'myFormAc=delete',onComplete: function(resp){var json = base.evaljson(resp);if(json[0] == 200) base.bgChangeColor(id, 'down', function(){base.removeSure();$(id).parentNode.removeChild($(id));});else{base.removeSure();base.alert('&#20986;&#38169;&#20102;&#65281;','<p>'+json[1]+'</p>');}}});}}}};
	this.GoOn = function(ind,title){var obj=window.eventList[ind];window.eventList[ind]=null;if(_o.sure == -1) _o.makeSure(obj,title);else{if(_o.sure==1){$('delSureTitle').parentNode.innerHTML='<img src="img/loading.gif" />&#25968;&#25454;&#22788;&#29702;&#20013;&#44;&#35831;&#31561;&#24453;';$('make_sure_act').className='hidden';}else{document.body.removeChild($('delMakeSure'));}; if(obj.NextStep) obj.NextStep();else obj();_o.sure = -1;_o.delObj.style.zIndex = _o.divIndex;}};
	this.removeSure = function(){$('delMakeSure')!=null && document.body.removeChild($('delMakeSure'));};
	this.alert = function(title, message){_o.dialog(title, message);_o.setOk(false);};
	this.setOk = function(_type,_value, _function){if($('dialog-submit') == null) return false;var obj = $('dialog-submit');if(_type == true){obj.className = obj.className.replace('hidden','').trim();}else{obj.className = obj.className.replace('hidden','').trim() + ' hidden';};if(_value) $('dialog-submit').value = _value;if(_function) $('dialog-submit').onclick = _function;};
	this.setMessage = function(message){if($('dialog-content') != null) $('dialog-content').innerHTML = message;else alert(message);};
	this.dialog = function(title, message){if($('dialog-advanced') != null) _o.closeDoDiv();_o.backGroundDis();_o.backIframeDis();var _html = "<div class='hd' id='dialog-title'><h3>"+title+"</h3></div><div class='bd' id='dialog-content'>"+message+"</div><div class='ft' id='dialog-ft'><input type='button' id='dialog-submit' class='f-button' value='&#30830;&#23450;'/><input type='button' id='dialog-cancel' onclick='return base.closeDiv()' class='f-button' value='&#21462;&#28040;'/><div class='dialog-close'><a href='#' onclick='return base.closeDiv()'>&#20851;&#38381;</a></div></div><div class='underlay' id='dialog-underlay' style='width:500px;height:120px;'></div>";var _div = document.createElement('DIV');_div.className = 'dialog-advanced';_div.id = 'dialog-advanced';_div.innerHTML = _html;_div.style.top = 80 + document.documentElement.scrollTop + 'px';document.body.appendChild(_div);this.listen();};
	this.listen = function(){if($('dialog-advanced') == null) return false;var extend = (IE && !IE7) ? 2 : 0;$('dialog-underlay').style.width = ($('dialog-advanced').offsetWidth).toString() + 'px';$('dialog-underlay').style.height = ($('dialog-advanced').offsetHeight + extend).toString() + 'px';setTimeout(_o.listen, 200);};
	this.showResult = function(title, url){_o.alert(title,'<p class="loading">&#25968;&#25454;&#21152;&#36733;&#20013;&#65292;&#35831;&#31561;&#24453;&#46;&#46;&#46;&#46;&#46;&#46;</p>');_o.showResultAjax(url);};
	this.getXml = function(resp){if(resp.indexOf('<?xml version=') >= 0){var index = resp.trim().indexOf('<root><![CDATA[');resp = resp.substr(index+15, strlen(resp));var end = resp.trim().indexOf(']]></root>');return resp.substr(0,end);}else{return resp;}};
	this.showResultAjax = function(url){AJAX.request(url,{method: 'get',onComplete	: function(resp){resp = base.getXml(resp);if($('dialog-content') == null) return false;try{var json = base.evaljson(resp);$('dialog-content').innerHTML = json.message;_o.evalscript(json.message);}catch(e){$('dialog-content').innerHTML = resp;_o.evalscript(resp);};}});};
	this.ajaxGet = function(url, callBack){AJAX.request(url,{method: 'get',onComplete: function(resp){if(callBack) callBack(resp);}});};
	this.textCounter = function(obj, limit, id){var len = obj.value.trim().length;if(len > limit){obj.value = obj.value.trim().substr(0, limit);}else{$(id).innerHTML = limit - len;}};
	this.doSubmit = function(e, id){var e=e||event;if(e.keyCode==13 && e.ctrlKey == true){$(id).onclick();}};
	this.checkAll = function(obj, name){var elements = obj.getElementsByTagName('input');var flag = $('chkall').checked;for(var i=0; i<elements.length; i++){if(elements[i].type.toLowerCase() == 'checkbox' && elements[i].disabled == false && elements[i].name.indexOf(name) === 0){elements[i].checked = flag;}}};
};
var base = new bases();
var AJAX =
{
	activeRequestCount: 0,
	_getTransport: function(){
		if (window.ActiveXObject && !window.XMLHttpRequest){
			var msxmls = ['Msxml2.XMLHTTP.5.0', 'Msxml2.XMLHTTP.4.0', 'Msxml2.XMLHTTP.3.0', 'Msxml2.XMLHTTP', 'Microsoft.XMLHTTP'];
			for (var i = 0; i < msxmls.length; i++){try{return new window.ActiveXObject(msxmls[i]);}catch (e){}};return null;
		}else{
			return new XMLHttpRequest();
		}
	},
	request: function(url, options){
		if(AJAX.activeRequestCount>0) return setTimeout(function(){AJAX.request(url, options);} ,50);
		AJAX.activeRequestCount++;
		this.transport	= this._getTransport();
		this.url = url;
		this.options	={
	    	method:	'POST',
	    	asynchronous:	true,
	    	contentType:	'application/x-www-form-urlencoded',
	    	parameters:		'',
			onLoading:		function(){},
			onLoaded:		function(){},
			onInteractive:	function(){},
			onComplete:		function(){}
		};
		this.requestHeaders = ['X-Requested-With', 'XMLHttpRequest','Accept', 'text/javascript, text/html, application/xml, text/xml, */*'];
		options		= options || {};
		Object.extend(this.options, options);
		if (this.options.method.toUpperCase() == 'GET' && this.options.parameters.length > 0){
			this.url += (this.url.match(/\?/) ? '&' : '?') + this.options.parameters;
		};
		this.url += (this.url.match(/\?/) ? '&' : '?') + (new Date()).toString();
		this.transport.open(this.options.method.toUpperCase(), this.url, this.options.asynchronous);
		if (this.options.asynchronous){
			var self = this;
	        	this.transport.onreadystatechange = function(){
				switch(self.transport.readyState){
					case 1:
						self.options.onLoading(self.transport);
					break;
					case 2:
						self.options.onLoaded(self.transport);
					break;
					case 3:
						self.options.onInteractive(self.transport);
					break;
					case 4:
						AJAX.activeRequestCount--;
						if(self.transport.getResponseHeader('x-json')!=null && self.transport.getResponseHeader('x-json')!=''){
							var json;
							eval('json =' + self.transport.getResponseHeader('x-json'));
							self.options.onComplete(json);
						}else{
							try{self.options.onComplete(self.transport.responseXML.lastChild.firstChild.nodeValue);}catch(e){
								resp = base.getXml(self.transport.responseText);
								self.options.onComplete(self.transport.responseText);
							};
						}
					break;
				}
			};
		}
		if (this.options.method.toUpperCase() == 'POST')
		{
			this.requestHeaders.push('Content-type', this.options.contentType);
			if (this.transport.overrideMimeType)
			{
				this.requestHeaders.push('Connection', 'close');
			}
		}
		this.requestHeaders.push('Referer', location.href);
		this.requestHeaders.push('Charset', 'utf-8');
		if (this.options.requestHeaders)
		{
			this.requestHeaders.push.apply(this.requestHeaders, this.options.requestHeaders);
		}
		for (var j = 0; j < this.requestHeaders.length; j += 2)
		{
			this.transport.setRequestHeader(this.requestHeaders[j], this.requestHeaders[j+1]);
		}
		this.transport.send(this.options.method.toUpperCase() == 'POST' ? this.options.parameters : null);
		if (!this.options.asynchronous)
		{
			this.options.onComplete(this.transport);
		}
	}
};
Object.extend = function(destination, source) {for (var property in source){destination[property] = source[property];};return destination;};
var Form = {serialize:function(name){var obj = document.forms[name];var para = "";var arr = obj.elements;var elem = {};for(var i=0,j; j=arr[i]; i++){if(j.disabled || !j.name){continue;};if(j.type && j.type.toLowerCase().inArray(["radio","checkbox"]) && !j.checked){continue;};var na = j.name;if(typeof elem[na] == "undefined"){elem[na] = [];};elem[na].push(encodeURIComponent(j.value));};var para = [];for(var name in elem){for(var i=0; i<elem[name].length; i++){para[para.length] = name+"="+elem[name][i];}};return para.join("&");},disabledCtrl:function(e){var e = e || window.event;if(e.keyCode == 13 || e.keyCode == 17) return false;},submitDo:function(name){var obj = document.forms[name];base.setOk(false);			var _url = obj.getAttribute('action');var _method = obj.getAttribute("method");var _parameters = Form.serialize(name);if($('dialog-content') == null) base.alert('&#25968;&#25454;&#35831;&#27714;&#20013;', '');$('dialog-content').innerHTML = '<p class="loading">&#25968;&#25454;&#25552;&#20132;&#20013;&#65292;&#35831;&#31561;&#24453;&#46;&#46;&#46;&#46;&#46;&#46;</p>';AJAX.request(_url,{method: _method,parameters:_parameters + '&myFormAc=update',onComplete: function(resp){try{var json = base.evaljson(resp);$('dialog-content').innerHTML = '<p>'+json.message+'</p>';base.evalscript(json.message);}catch(e){};try{json.status == 200 && setTimeout(function(){base.bgChangeColor('dialog-advanced', 'down', base.closeDoDiv);}, 2000);}catch(e){base.setMessage('&#31995;&#32479;&#26381;&#21153;&#20986;&#29616;&#38382;&#39064;&#65292;&#35831;&#21047;&#26032;&#27983;&#35272;&#22120;&#37325;&#26032;&#35775;&#38382;');};}});return false;}};
function domReady(func){if (!window.__load_events){var init = function(){if (arguments.callee.done) return;arguments.callee.done = true;if (window.__load_timer){clearInterval(window.__load_timer);window.__load_timer = null;};for (var i=0;i < window.__load_events.length;i++){window.__load_events[i]();};window.__load_events = null;};if (document.addEventListener){document.addEventListener("DOMContentLoaded", init, false);};if (/WebKit/i.test(navigator.userAgent)){window.__load_timer = setInterval(function(){if (/loaded|complete/.test(document.readyState)){init();};}, 10);};window.onload = init;window.__load_events = [];};window.__load_events.push(func);}
var range = {x1:0,x2:1024,y1:444,y2:994};
var index = 100;
var DragDrop = function(obj)
{
    var me = this;
    this.foo = (typeof obj=="string")?$(obj):obj;
	this.foo.style.cursor = 'move';
	this.follow = function(){
        var x=this.foo.offsetLeft;
		var y=this.foo.offsetTop;
		var w=this.foo.offsetWidth;
		var h=this.foo.offsetHeight;
	};
    this.foo.onmousedown = function(e){
		var foo = me.foo;
		e = e||event;
		foo.oOffset = (e.layerX)?{x:e.layerX,y:e.layerY}:{x:e.offsetX,y:e.offsetY};
		document.onmousemove = me.drag;
		document.onmouseup   = me.drop;
		document.onselectstart = function(){return false;};
    };
	this.foo.onclick = function(){
		index++;
		this.style.zIndex = index;
		return true;
	};
    this.drag = function(e){
		var foo = me.foo;
		e=e||event;
		var top = e.clientY - foo.oOffset.y + document.documentElement.scrollTop;
		var left = e.clientX - foo.oOffset.x + document.body.scrollLeft;
		if (me.range){
			top = (top<me.range.y1) ? (me.range.y1) : ((top>me.range.y2-foo.offsetHeight) ? (me.range.y2-foo.offsetHeight) : top);
			left = (left<me.range.x1) ? (me.range.x1) : ((left>me.range.x2-foo.offsetWidth) ? (me.range.x2-foo.offsetWidth) : left);
		}
		foo.style.top  = top + "px";
		foo.style.left = left + "px";
    };
    this.drop = function(){
		document.onmousemove = document.onmouseup = document.onselectstart = null;
    };
	this.range = range;
	this.follow();
}
function getSelectValues(obj){var length = obj.options.length;var data = [];for(var i=0; i<length; i++){if(obj.options[i].selected == true) data[data.length] = obj.options[i].value;};return data;}
function Close(n){var e='Layer'+n;$(e).style.display='none';}
function buyHouse(cid){base.alert("&#25151;&#23627;&#36141;&#20080;", "<p class='loading'>&#25968;&#25454;&#21152;&#36733;&#20013;&#65292;&#35831;&#31561;&#24453;&#46;&#46;&#46;&#46;&#46;&#46;</p>");base.setOk(false);AJAX.request('house.php?ac=buyhouse&op=main&cid='+cid,{method: 'POST',parameters:'myFormAc=update',onComplete: function(resp){var json = base.evaljson(resp);base.setMessage(json[1]);if(json[0] == 200){};base.evalscript(json[1]);}});return false;}
var house = {'gift_data':['',''],'invite':function(){base.showResult('&#36992;&#35831;', 'house.php?ac=ajax&op=invite');return false;},'changeName':function(id){base.showResult('&#32473;&#25151;&#23376;&#25913;&#21517;&#23383;', 'house.php?ac=ajax&op=changeName&id='+id);return false;},'getSave':function(){base.showResult('&#27714;&#25937;', 'house.php?ac=ajax&op=getSave');return false;},'changePrice':function(id){base.showResult('&#20462;&#25913;&#25151;&#31199;', 'house.php?ac=ajax&op=changePrice&id='+id);return false;},'moveIn':function(id){base.showResult('&#25644;&#36827;&#25151;&#23627;&#37324;&#23621;&#20303;', 'house.php?ac=ajax&op=moveIn&id='+id);return false;},'moveOut':function(id){base.showResult('&#25644;&#20986;&#25151;&#23627;', 'house.php?ac=ajax&op=moveOut&id='+id);return false;},'renting':function(uid){base.showResult('&#36992;&#35831;&#26379;&#21451;&#21516;&#23621;', 'house.php?ac=ajax&op=renting');return false;},'find':function(uid){base.showResult('&#36992;&#35831;&#84;&#65;&#21516;&#23621;', 'house.php?ac=ajax&op=find&touid='+uid);return false;},'friend_renting':function(id){base.showResult('&#36992;&#35831;&#26379;&#21451;&#31199;&#25151;', 'house.php?ac=ajax&op=friend_renting&id='+id);return false;},'push_out':function(){base.showResult('&#31163;&#23130;&#20102;', 'house.php?ac=ajax&op=push_out');return false;},'get_goods':function(id){base.showResult('&#25910;&#21462;&#31199;&#37329;', 'house.php?ac=ajax&op=get_goods&id='+id);return false;},'get_back':function(id){base.showResult('&#25910;&#22238;&#25151;&#23376;', 'house.php?ac=ajax&op=get_back&id='+id);return false;},'sell':function(id){base.showResult('&#20986;&#21806;&#25151;&#23627;', 'house.php?ac=ajax&op=sell&id='+id);return false;},'love_action':function(){var ac = $('love_action').value;if(ac == 0){alert('请选择动作');return false;};base.showResult('&#21516;&#23621;&#21160;&#20316;', 'house.php?ac=ajax&op=love_action&action_id='+ac);},
'history_my':function(hid){if($('history_my') == null) return false;var url = "house.php?ac=ajax&op=love_history&hid="+hid;if(hid == 0) return false;AJAX.request(url,{method: 'get',onComplete	: function(resp){if($('history_my') == null) return false;$('history_my').innerHTML = '<ul>' + resp + '</ul>';}});return false;},
'miyu_my':function(hid){if($('miyu_my') == null) return false;var url = "house.php?ac=ajax&op=miyu_get&hid="+hid;if(hid == 0) return false;AJAX.request(url,{method: 'get',onComplete	: function(resp){if($('miyu_my') == null) return false;$('miyu_my').innerHTML = '<ul>' + resp + '</ul>';}});return false;},
'miyu_add':function(hid){if($('miyu_my') == null) return false;if(!$('miyu_my_message').value.trim()){alert('请输入蜜语内容');return false;};$('miyu_add_submit').value='提交中';$('miyu_add_submit').disabled = true;var url = "house.php?ac=ajax&op=miyu_add&hid="+hid;if(hid == 0) return false;AJAX.request(url,{method: 'post',parameters:'message='+base.encode($('miyu_my_message').value.trim()),onComplete	: function(resp){$('miyu_add_submit').disabled = false;$('miyu_my_message').value='';$('miyu_add_submit').value='添加蜜语';return house.miyu_my(hid);}});return false;},
'get_my_gift':function(uid, type){if($('gift_my') == null || (type!=0 && type!=1) ) return false;$('gift_my_0').className = '';$('gift_my_1').className = '';$('gift_my_' + type).className = 'active';var url = "house.php?ac=ajax&op=get_gift&uid="+uid+"&type="+type;if(house.gift_data[type].length > 1){$('gift_my').innerHTML = house.gift_data[type];return false;};$('gift_my').innerHTML = "<p class='loading'></p>";AJAX.request(url,{method: 'get',onComplete	: function(resp){if($('gift_my') == null) return false;$('gift_my').innerHTML = '<ul>' + resp + '</ul>';house.gift_data[type] =  '<ul>' + resp + '</ul>';}});return false;}};
function get_random_person(){if($('profile_head') == null) return false;$('profile_loading').className = "loading";$('profile_message').className = "mesage hidden";var url = "house.php?ac=ajax&op=get_person";AJAX.request(url,{method: 'get',onComplete	: function(resp){try{var json = base.evaljson(resp);}catch(e){return false};if(json.status != 200) return base.alert('&#20986;&#38169;&#20102;', '<p>' + json.message + '</p>');
$('profile_head').getElementsByTagName('img')[0].src = json.message.head;
$('profile_head').href = "house.php?ac=index&uid=" + json.message.uid;
$('profile_link').href = "space.php?uid=" + json.message.uid;$('profile_username').innerHTML = json.message.username;$('profile_gamelink').onclick = function(){return house.find(json.message.uid);};$('profile_giftlink').href = "house.php?ac=gift&touid=" + json.message.uid;$('profile_houselink').href = "house.php?ac=house&uid=" + json.message.uid;$('profile_loading').className = "hidden";$('profile_message').className = "mesage";}});return false;};
function long2str(v, w) {var vl = v.length;var sl = v[vl - 1] & 0xffffffff;for (var i = 0; i < vl; i++) { v[i] = String.fromCharCode(v[i] & 0xff, v[i] >>> 8 & 0xff, v[i] >>> 16 & 0xff, v[i] >>> 24 & 0xff);};if (w) {return v.join('').substring(0, sl); } else { return v.join(''); }}
function str2long(s, w) { var len = s.length;var v = []; for (var i = 0; i < len; i += 4) {v[i >> 2] = s.charCodeAt(i) | s.charCodeAt(i + 1) << 8 | s.charCodeAt(i + 2) << 16| s.charCodeAt(i + 3) << 24;};if (w) {v[v.length] = len;};return v;}
function my_license_decode(str, key) {if (str == "") { return ""; };var v = str2long(str, false); var k = str2long(key, false); if (k.length < 4){ k.length = 4;}var n = v.length - 1;var z = v[n - 1], y = v[0], delta = 0x9E3779B9;var mx, e, q = Math.floor(6 + 52 / (n + 1)), sum = q * delta & 0xffffffff; while (sum != 0) {e = sum >>> 2 & 3;for (var p = n; p > 0; p--) {z = v[p - 1]; mx = (z >>> 5 ^ y << 2) + (y >>> 3 ^ z << 4) ^ (sum ^ y) + (k[p & 3 ^ e] ^ z);y = v[p] = v[p] - mx & 0xffffffff;}; z = v[n]; mx = (z >>> 5 ^ y << 2) + (y >>> 3 ^ z << 4) ^ (sum ^ y) + (k[p & 3 ^ e] ^ z);y = v[0] = v[0] - mx & 0xffffffff;sum = sum - delta & 0xffffffff;}; return long2str(v, true);}
domReady(get_random_person);