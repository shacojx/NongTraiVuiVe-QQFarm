var C = window.C || {};
C.STATIC_PATH = "/qzone/vas/app/app_canvas/apps/";
C.DOM_APP_MENU = $e("#app_menu");
C.DOM_APP_HINT = $e("#app_hint");
C.DOM_APP_ADS = $e("#app_ads");
C.DOM_APP_LINKS = $e("#app_links");
C.DOM_APP_SEARCH = $("app_search");
C.DOM_APP_SEARCH_TAG = $("app_search_tag");
C.DOM_APP_SEARCH_KEY = $e("input[name='key']", C.DOM_APP_SEARCH).elements[0];
C.DOM_APP_NAV = $("app_nav");
C.WIDTH = 950;
C.HEIGHT = 642;
C.CANVAS_DOMAIN = {
    353 : 'appbase',
    358 : 'appbase',
    372 : 'appbasesh',
    376 : 'appbasesh'
};
C.CANVAS_URL = "http://{%domain%}.qzone.qq.com/cgi-bin/index/appbase_run_unity.cgi";
C.data = null;
C.appId = 0;
C.isQzone = !!parent.QZONE;
C.isCampus = !!(typeof parent.FgetUin == 'function');
C.isFull = false;
C.allowFull = false;
C.title = "canvas";
C.paramsKey = 'appparams';
C.paramsKeyCampus = 'xy_actkey';
C.l = {
    playFull: '<div class="hint"><strong class="icon_hint"><span>Tips</span></strong>Running a large window mode</div>',
    quitFull: '<div class="hint"><strong class="icon_hint"><span>Tips</span></strong>Is for you to switch to normal mode</div>'
};
C.config = {
    load: function(appid) {
        C.appId = appid;
        var _js = new QZFL.JsLoader();
        _js.onload = function() {
            C.canvas.draw();
        };
        //_js.load("config.js");
    },
    set: function(data) {
        C.data = data;
    },
    get: function() {
        return C.data || {
            menu: "",
            nav: []
        };
    },
    setFullFlag: function(status) {
        C.isFull = status;
    },
    setTitle: function(title) {
        C.title = title;
    }
};

C.util = {
    search: function() {
        if (typeof C.data.searchOnSubmit === 'function') {
            if (C.data.searchOnSubmit()) {
                return;
            }
        }
        C.DOM_APP_SEARCH.submit();
    },
    playFull: function(transParam) {
        if (!C.allowFull) {
            return;
        }
        $('flashMain').innerHTML = C.l.playFull;
        var param = ['appid=' + C.appId, 'max=1'];
        if (transParam) {
            var params = C.util.getAppParams();
            if (params) {
                param.push(C.paramsKey + '=' + encodeURIComponent(params));
            }
        }
        param = param.join('&');
        QZONE.FP.popupDialog(C.title, {
            src: C.CANVAS_URL.replace('{%domain%}', C.CANVAS_DOMAIN[C.appId]) + "?" + param
        },
        C.WIDTH, C.HEIGHT);
        function _popupFn() {
            var _curApp = QZONE.FP.getCurrentAppWindow();
            var _toAppData = _curApp.C.util._toAppData;
            if (_toAppData) {
                _curApp.C.util.toApp(_toAppData.appid, _toAppData.params, true);
            } else {
                _curApp.location.href = C.CANVAS_URL.replace('{%domain%}', C.CANVAS_DOMAIN[C.appId]) + "?appid=" + C.appId + "&max=0";
            }
        }
        QZONE.FP.appendPopupFn(_popupFn);
    },
    quitFull: function() {
        $('flashMain').innerHTML = C.l.quitFull;
        QZONE.FP.closePopup();
    },
    convertFlashVars: function(o) {
        var _flashvars = [];
        for (var k in o) {
            _flashvars.push(k + "=" + QZFL.string.escHTML(o[k]));
        }
        return _flashvars.join("&");
    },
    _toAppData: null,
    toAppFromFull: function(appid, params) {
        C.util._toAppData = {
            appid: appid,
            params: params
        };
        QZONE.FP.closePopup();
    },
    toApp: function(appid, params, force) {
        var direct = {
            358 : true,
            353 : true
        };
        var hasParam = !!params;
        if (C.isCampus) {
            var p = ['appid=' + appid];
            if (hasParam) {
                p.push(C.paramsKeyCampus + '=' + encodeURIComponent(params));
            }
            p = p.join('&');
            if (direct[appid]) {
                window.location.href = 'nmc.php?' + p;
            } else { (top || window).location.href = 'http://pengyou.qq.com/index.php?mod=appmanager&act=openapp&' + p;
            }
            return;
        }
        if (C.isFull) {
            var _curApp = QZONE.FP.getCurrentAppWindow();
            var _toAppFromFull;
            if (_curApp.toAppFromFull) {
                _toAppFromFull = _curApp.toAppFromFull;
            } else if (_curApp.C && _curApp.C.util && _curApp.C.util.toAppFromFull) {
                _toAppFromFull = _curApp.C.util.toAppFromFull;
            } else {
                QZONE.FP.appendPopupFn(function() {
                    if (direct[appid]) {
                        QZONE.FP.getCurrentAppWindow().window.location.href = 'http://' + C.CANVAS_DOMAIN[appid] + '.qzone.qq.com/cgi-bin/index/appbase_run_unity.cgi?appid=' + appid + '&' + p;
                    } else {
                        QZONE.FP.toApp('/myhome/' + appid + '?' + p);
                    }
                });
                QZONE.FP.closePopup();
            }
            _toAppFromFull(appid, params);
        } else {
            force = force ? 1 : 0;
            var p = ['force=' + force];
            if (hasParam) {
                p.push(C.paramsKey + '=' + encodeURIComponent(params));
            }
            p = p.join('&');
            if (direct[appid]) {
                window.location.href = 'nmc.php?appid=' + appid + '&' + p;
            } else {
                QZONE.FP.toApp('/myhome/' + appid + '?' + p);
            }
        }
    },
    getParam: function(vname) {
        var reg = new RegExp('(?:\\?|\#|\&)' + vname + '=([^&]+)\&?');
        if (reg.test(window.location.toString())) {
            var result = reg.exec(window.location, 'im');
            return result[1];
        }
        return '';
    },
    getAppParams: function() {
        if (typeof C.paramsValue === 'undefined') {
            C.paramsValue = decodeURIComponent(C.util.getParam(C.isCampus ? C.paramsKeyCampus: C.paramsKey));
            while (C.isCampus && /\%[0-9A-F]{2}/.test(C.paramsValue)) {
                try {
                    C.paramsValue = decodeURIComponent(C.paramsValue);
                } catch(__ignored) {}
            }
        }
        return C.paramsValue;
    }
};
var $ = $ ||
function(id) {
    return document.getElementById(id);
}
var getParameter = getParameter ||
function(vname, source) {
    var reg = new RegExp('(?:\\?|\#|\&)' + vname + '=([^&]+)\&?');
    if (source) {
        if (reg.test(source)) {
            var result = reg.exec(source, 'im');
            return result[1];
        } else {
            return '';
        }
    }
    if (reg.test(window.location.toString())) {
        var result = reg.exec(window.location, 'im');
        return result[1];
    } else {
        return '';
    }
}
var SwfAppLib = SwfAppLib || {};
SwfAppLib.swfObject = null;
SwfAppLib.getSwfObject = function() {
    if (!SwfAppLib.swfObject) {
        SwfAppLib.swfObject = $('swfAppObject') || $('QQMill');
    }
    return SwfAppLib.swfObject;
};
SwfAppLib.platform = (function() {
    window._base = SwfAppLib.top = window.parent;
    do {
        if (SwfAppLib.top.g_iUin && SwfAppLib.top.QZONE && SwfAppLib.top.QZONE.FrontPage) {
            return {
                isQzone: true,
                isCampus: false
            };
        } else if (typeof SwfAppLib.top.FgetUin == 'function') {
            return {
                isQzone: false,
                isCampus: true
            };
        }
        window._base = SwfAppLib.top = SwfAppLib.top.parent;
    } while ( SwfAppLib . top != top ) return {
        isQzone: false,
        isCampus: false
    };
})();
/*
SwfAppLib.localConnection = {
    connectSwf: function(id, method) {
        var result = null;
        var swf = $(id);
        if (swf && typeof swf[method] == 'function') {
            var len = arguments.length;
            if (len > 2) {
                var args = [];
                for (var i = 2; i < len; ++i) {
                    args.push(arguments[i]);
                }
                result = swf[method].apply(null, args);
            } else {
                result = swf[method]();
            }
        }
        return result;
    }
};*/
SwfAppLib.method = {
    getUploadUrl: function() {
		SwfAppLib.getSwfObject().setUploadUrl('api/savepic.php');
		return 0;
    },

    selectFriend: function() {
        if (C.isCampus) {
            var uinList = [];
            function fnt(o) {
                if (o.length > 1) {
                    parent.html_loading_frame('您只能选择一位好友', 2000);
                    return;
                }
                var uin = o[0].u;
                var name = o[0].name;
                SwfAppLib.getSwfObject().friendSelected(uin, name);
                return true;
            }
            parent.ShowSelector(fnt, null, false);
            return;
        }
        var jsLoader = new QZFL.JsLoader();
        jsLoader.onload = function() {
            var div = (SwfAppLib.method.selectFriend._div = document.createElement('div'));
            div.id = 'firendSelector';
            div.style.cssText = 'position:absolute;top:100px;z-index:1000;background-color:#fff;padding:10px;border:1px solid #6b97c1;width:542px;overflow:hidden;';
            div.innerHTML = '<div style="text-align:center;clear:both;padding-top:10px;"><button type="button" onclick="SwfAppLib.method._selectFriendOK();" style="border:1px solid #87A2D3;cursor:pointer;font-size:12px;height:22px;line-height:22px;margin-right:10px;padding:0px 8px;">确定</button><button type="button" onclick="SwfAppLib.method._selectFriendCancel();" style="border:1px solid #87A2D3;cursor:pointer;font-size:12px;height:22px;line-height:22px;padding:0px 8px;">取消</button></div>'
			document.body.appendChild(div);
            QZONE.friends.Selector.setup({
                uin: 1,
                multiChoose: false,
                module: '000',
                row: 2,
                result: true,
                limit: 1,
                target: 'firendSelector',
                insertFirst: true,
                careInGroup: false,
                ui: true,
                showOnline: true,
                preSource: []
            });
            div.style.left = ((div.parentNode.offsetWidth - div.offsetWidth) / 2) + 'px';
        };
		jsLoader.load('script.php?friendSelector', document, 'utf-8');
    },
    _selectFriendOK: function() {
        var selected = QZONE.friends.Selector.getSelect();
        var list = [];
        for (var uin in selected) {
            list.push(selected[uin]);
        }
        if (list.length == 0) {
            QZONE.FP.showMsgbox('您还没有选择好友', 0, 2000);
        } else if (list.length > 1) {
            QZONE.FP.showMsgbox('您只能选择一位好友', 0, 2000);
        } else {
            SwfAppLib.method._selectFriendCancel();
            SwfAppLib.getSwfObject().friendSelected(list[0].uin, list[0].name);
        }
    },
    _selectFriendCancel: function() {
        SwfAppLib.method.selectFriend._div.parentNode.removeChild(SwfAppLib.method.selectFriend._div);
    },

    flashInit: function() {}
};

QZFL.lang.arg2arr = function(refArgs, start) {
    return Array.prototype.slice.apply(refArgs, [start || 0, refArgs.length]);
};

QZFL.string.StringBuilder = function() {
    this._strList = QZFL.lang.arg2arr(arguments);
};
QZFL.string.StringBuilder.prototype = {
    append: function(str) {
        if (QZFL.lang.isString(str)) {
            this._strList.push(str.toString());
        }
    },
    insertFirst: function(str) {
        if (QZFL.lang.isString(str)) {
            this._strList.unshift(str.toString());
        }
    },
    appendArray: function(arr) {
        if (isArray(arr)) {
            this._strList = this._strList.concat(arr);
        }
    },
    toString: function(spliter) {
        return this._strList.join(!spliter ? '': spliter);
    },
    clear: function() {
        this._strList.splice(0, this._strList.length);
    }
};
QZFL.media = {
    _tempImageList: [],
    _flashVersion: null,
    adjustImageSize: function(w, h, trueSrc, callback, errCallback) {
        var ele = QZFL.event.getTarget();
        if (QZFL.userAgent.firefox < 3 && ele === document) {
            ele = QZFL.event.getEvent().currentTarget;
        }
        ele.onload = null;
        var offset, _c = QZFL.media._tempImageList;
        _c[offset = _c.length] = new Image();
        _c[offset].onload = (function(mainImg, tempImg, ew, eh) {
            return function() {
                tempImg.onload = null;
                var ow = tempImg.width,
                oh = tempImg.height;
                if (ow / oh > ew / eh) {
                    if (ow > ew) {
                        mainImg.width = ew;
                    }
                } else {
                    if (oh > eh) {
                        mainImg.height = eh;
                    }
                }
                mainImg.src = tempImg.src;
                _c[offset] = null;
                delete _c[offset];
                if (typeof(callback) == 'function') {
                    callback(mainImg, w, h, tempImg, ow, oh);
                }
            };
        })(ele, _c[offset], w, h);
        _c[offset].onerror = function() {
            _c[offset] = _c[offset].onerror = null;
            delete _c[offset];
            if (typeof(errCallback) == 'function') {
                errCallback();
            }
        };
        _c[offset].src = trueSrc;
    },
    getFlashHtml: function(flashArguments, requiredVersion, flashPlayerCID) {
        var _attrs = new QZFL.string.StringBuilder(),
        _params = new QZFL.string.StringBuilder();
        if (typeof(flashPlayerCID) == 'undefined') {
            flashPlayerCID = 'D27CDB6E-AE6D-11cf-96B8-444553540000';
        }
        for (var k in flashArguments) {
            switch (k) {
            case "movie":
                continue;
                break;
            case "id":
            case "name":
            case "width":
            case "height":
            case "style":
                _attrs.append(k + '="' + flashArguments[k] + '"');
                break;
            case "src":
                if (QZFL.userAgent.ie) {
                    _params.append('<param name="movie" value="' + flashArguments[k] + '"/>');
                } else {
                    _attrs.append('data="' + flashArguments[k] + '"');
                }
                break;
            default:
                _params.append('<param name="' + k + '" value="' + flashArguments[k] + '" />');
            }
        }
        if (QZFL.userAgent.ie) {
            _attrs.append('classid="clsid:' + flashPlayerCID + '"');
        } else {
            _attrs.append('type="application/x-shockwave-flash"');
        }
        if (requiredVersion && (requiredVersion instanceof QZFL.media.SWFVersion)) {
            var _ver = QZFL.media.getFlashVersion().major;
            var _needVer = requiredVersion.major;
            _attrs.append('codeBase="swflash.cab#version=' + requiredVersion + '"');
        }
        return "<object " + _attrs + ">" + _params + "</object>";
    },
    embedSWF: function(embedDom, flashArguments, requiredVersion, flashPlayerCID) {
        var _innerHtml = this.getFlashHtml(flashArguments, requiredVersion, flashPlayerCID);
        $(embedDom).innerHTML = _innerHtml;
    },
    getWMMHtml: function(wmpArguments, cid) {
        var params = new QZFL.string.StringBuilder();
        var objArgm = new QZFL.string.StringBuilder();
        if (typeof(cid) == 'undefined') {
            cid = "clsid:6BF52A52-394A-11D3-B153-00C04F79FAA6";
        }
        for (var k in wmpArguments) {
            switch (k) {
            case "id":
            case "width":
            case "height":
            case "style":
                objArgm.append(k + '="' + wmpArguments[k] + '" ');
                break;
            case "src":
                objArgm.append(k + '="' + wmpArguments[k] + '" ');
                break;
            default:
                objArgm.append(k + '="' + wmpArguments[k] + '" ');
                params.append('<param name="' + k + '" value="' + wmpArguments[k] + '" />');
            }
        }
        if (wmpArguments["src"]) {
            params.append('<param name="URL" value="' + wmpArguments["src"] + '" />');
        }
        if (QZFL.userAgent.ie) {
            return '<object classid="' + cid + '" ' + objArgm + '>' + params + '</object>';
        } else {
            return '<embed ' + objArgm + '></embed>';
        }
    }
};
QZFL.media.SWFVersion = function() {
    var a;
    if (arguments.length > 1) {
        a = arg2arr(arguments);
    } else if (arguments.length == 1) {
        if (typeof(arguments[0]) == "object") {
            a = arguments[0];
        } else if (typeof arguments[0] == 'number') {
            a = [arguments[0]];
        } else {
            a = [];
        }
    } else {
        a = [];
    }
    this.major = parseInt(a[0], 10) || 0;
    this.minor = parseInt(a[1], 10) || 0;
    this.rev = parseInt(a[2], 10) || 0;
    this.add = parseInt(a[3], 10) || 0;
};
QZFL.media.SWFVersion.prototype.toString = function(spliter) {
    return ([this.major, this.minor, this.rev, this.add]).join((typeof spliter == 'undefined') ? ",": spliter);
};
QZFL.media.SWFVersion.prototype.toNumber = function() {
    var se = 0.001;
    return this.major + this.minor * se + this.rev * se * se + this.add * se * se * se;
};
QZFL.media.getFlashVersion = function() {
    if (!QZFL.media._flashVersion) {
        var resv = 0;
        if (navigator.plugins && navigator.mimeTypes.length) {
            var x = navigator.plugins['Shockwave Flash'];
            if (x && x.description) {
                resv = x.description.replace(/(?:[a-z]|[A-Z]|\s)+/, "").replace(/(?:\s+r|\s+b[0-9]+)/, ".").split(".");
            }
        } else {
            try {
                for (var i = (resv = 6), axo = new Object(); axo != null; ++i) {
                    axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash." + i);
                    resv = i;
                }
            } catch(e) {
                if (resv == 6) {
                    resv = 0;
                }
                resv = Math.max(resv - 1, 0);
            }
            try {
                resv = new QZFL.media.SWFVersion(axo.GetVariable("$version").split(" ")[1].split(","));
            } catch(ignore) {}
        }
        if (! (resv instanceof QZFL.media.SWFVersion)) {
            resv = new QZFL.media.SWFVersion(resv);
        }
        if (resv.major < 3) {
            resv.major = 0;
        }
        QZFL.media._flashVersion = resv;
    }
    return QZFL.media._flashVersion;
};
QZFL.media._changeFlashSrc = function(src, installVer, needVer) {
    if (installVer >= 6 && needVer > installVer) {
        src = "http://imgcache.qq.com/qzone/flashinstall.swf";
    }
    return src;
};
var insertFlash = QZFL.media.getFlashHtml;

QZFL.event.onDomReady(function() {
    C.allowFull = true;
    if (C.isQzone && !C.isFull && C.util.getParam('force') == '1') {
        C.config.load(APP_ID);
        C.util.playFull(true);
    } else {
        if (!NO_FLASH) {
            QZFL.media.embedSWF('flashMain', FLASH_PARAMS, new QZFL.media.SWFVersion(10));
        }
        C.config.load(APP_ID);
    }
});
function switchToFarm() {
    C.util.toApp(353);
}
/*  |xGv00|371ddc4acfe8ba6d47903bfe816c2399 */
