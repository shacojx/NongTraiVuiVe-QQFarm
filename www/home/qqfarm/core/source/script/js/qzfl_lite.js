window.QZFL = window.QZFL || {};
if (typeof(QZONE) == "object") {
    QZFL = QZONE;
} else {
    window.QZONE = QZFL = {};
}
QZFL.version = "2.0.8.3";
QZFL._qzfl = 2.083;
QZFL.emptyFn = function() {};
QZFL.returnFn = function(v) {
    return v;
};
QZFL.userAgent = (function() {
    var t, vie, vff, vopera, vsf, vawk, vair, vchrome, winver, wintype, mactype, isBeta, isIPad, isIPhone, discerned, _ua = navigator.userAgent,
    _nv = navigator.appVersion,
    vffRE = /(?:Firefox|GranParadiso|Iceweasel|Minefield).(\d+\.\d+)/i,
    vwebkitRE = /AppleWebKit.(\d+\.\d+)/i,
    vchromeRE = /Chrome.(\d+\.\d+)/i,
    vsafariRE = /Version.(\d+\.\d+)/i,
    vwinRE = /Windows.+?(\d+\.\d+)/,
    vie = vff = vopera = vsf = vawk = vair = vchrome = winver = NaN;
    wintype = mactype = isBeta = isIPad = discerned = false;
    if (window.ActiveXObject) {
        vie = 9 - (window.DataTransfer ? 0 : 1) - (window.XDomainRequest ? 0 : 1) - (window.XMLHttpRequest ? 0 : 1);
        t = navigator.appMinorVersion;
        if (vie > 7 && t && t.toLowerCase().indexOf("beta") > -1) {
            isBeta = true;
        }
    } else if (document.getBoxObjectFor || typeof(window.mozInnerScreenX) != "undefined") {
        t = _ua.match(vffRE);
        vff = parseFloat((t && t[1]) || "3.3", 10);
    } else if (!navigator.taintEnabled) {
        t = _ua.match(vwebkitRE);
        vawk = (t && t.length > 1) ? parseFloat(t[1], 10) : ( !! document.evaluate ? ( !! document.querySelector ? 525 : 420) : 419);
        if ((t = _nv.match(vchromeRE)) || window.chrome) {
            if (!t) {
                t = _ua.match(vchromeRE);
            }
            vchrome = parseFloat((t && t[1]) || "2.0", 10);
        }
        if ((t = _nv.match(vsafariRE)) && !window.chrome) {
            if (!t) {
                t = _ua.match(vsafariRE);
            }
            vsf = parseFloat((t && t[1]) || "3.3", 10);
        }
        if (_ua.indexOf("AdobeAIR") > -1) {
            vair = 1;
        }
        if (_ua.indexOf("iPad") > -1) {
            isIPad = true;
        }
        if (_ua.indexOf("iPhone") > -1) {
            isIPhone = true;
        }
    } else if (window.opera) {
        vopera = parseFloat(_nv, 10);
    } else {
        vie = 6;
    }
    if (_ua.indexOf("Windows") > -1) {
        wintype = true;
        t = _ua.match(vwinRE);
        winver = parseFloat((t && t[1]) || "5.1", 10);
    } else if (_ua.indexOf("Mac OS X") > -1) {
        mactype = true;
    } else {
        wintype = true;
    }
    function adjustBehaviors() {
        if (!adjustBehaviors.adjusted && vie && vie < 7) {
            try {
                document.execCommand('BackgroundImageCache', false, true);
            } catch(ignored) {}
            adjustBehaviors.adjusted = true;
        }
    }
    return {
        beta: isBeta,
        firefox: vff,
        ie: vie,
        opera: vopera,
        air: vair,
        safari: vsf,
        safariV: vsf,
        webkit: vawk,
        chrome: vchrome,
        adjustBehaviors: adjustBehaviors,
        windows: winver || wintype,
        isiPad: isIPad,
        isiPhone: isIPhone,
        macs: mactype
    };
})();
QZFL.object = {
    map: function(object, scope) {
        scope = scope || window;
        QZFL.object.extend(scope, object);
    },
    extend: function() {
        var target = arguments[0] || {},
        i = 1,
        length = arguments.length,
        deep = false,
        options,
        name,
        src,
        copy;
        if (typeof target === "boolean") {
            deep = target;
            target = arguments[1] || {};
            i = 2;
        }
        if (typeof target !== "object" && QZFL.object.getType(target) !== "function") {
            target = {};
        }
        if (length === i) {
            target = QZFL; --i;
        }
        for (; i < length; i++) {
            if ((options = arguments[i]) != null) {
                for (name in options) {
                    src = target[name];
                    copy = options[name];
                    if (target === copy) {
                        continue;
                    }
                    if (deep && copy && typeof copy === "object" && !copy.nodeType) {
                        var clone;
                        if (src) {
                            clone = src;
                        } else if (QZFL.lang.isArray(copy)) {
                            clone = [];
                        } else if (QZFL.object.getType(copy) === 'object') {
                            clone = {};
                        } else {
                            clone = copy;
                        }
                        target[name] = QZFL.object.extend(deep, clone, copy);
                    } else if (copy !== undefined) {
                        target[name] = copy;
                    }
                }
            }
        }
        return target;
    },
    each: function(obj, callback) {
        var name, value, i = 0,
        length = obj.length,
        isObj = (length === undefined) || (typeof(obj) == "function");
        if (isObj) {
            for (name in obj) {
                if (callback.call(obj[name], obj[name], name, obj) === false) {
                    break;
                }
            }
        } else {
            for (value = obj[0]; i < length && callback.call(value, value, i, obj) !== false; value = obj[++i]) {}
        }
        return obj;
    },
    getType: function(obj) {
        return obj === null ? 'null': (obj === undefined ? 'undefined': Object.prototype.toString.call(obj).slice(8, -1).toLowerCase());
    },
    routeRE: /([\d\w_]+)/g,
    route: function(obj, path) {
        obj = obj || {};
        path += '';
        var r = QZFL.object.routeRE,
        m;
        r.lastIndex = 0;
        while ((m = r.exec(path)) !== null) {
            obj = obj[m[0]];
            if (obj === undefined || obj === null) break;
        }
        return obj;
    },
    bind: function(obj, fn) {
        var args = Array.prototype.slice.call(arguments, 2);
        return function() {
            var _obj = obj || this,
            _args = args.concat(Array.prototype.slice.call(arguments, 0));
            if (typeof(fn) == "string") {
                if (_obj[fn]) {
                    return _obj[fn].apply(_obj, _args);
                }
            } else {
                return fn.apply(_obj, _args);
            }
        }
    }
};
QZFL.console = {
    print: function(msg, type) {
        window.console && console.log((type == 4 ? (new Date() + ":") : "") + msg);
    }
};
QZFL.runTime = {
    isDebugMode: false,
    error: QZFL.emptyFn,
    warn: QZFL.emptyFn
};
QZFL.widget = {};
QZFL.namespace = QZFL.object;
QZFL.config = {
    debugLevel: 0,
    defaultDataCharacterSet: "GB2312",
    DCCookieDomain: "qzone.qq.com",
    domainPrefix: "qq.com",
    gbEncoderPath: "http://imgcache.qq.com/qzone/v5/toolpages/",
    FSHelperPage: "http://imgcache.qq.com/qzone/v5/toolpages/fp_gbk.html",
    defaultShareObject: "http://imgcache.qq.com/qzone/v5/toolpages/getset.swf",
    staticServer: "http://imgcache.qq.com/ac/qzone/qzfl/lc/"
};
QZFL.css = {
    classNameCache: {},
    getClassRegEx: function(className) {
        var o = QZFL.css.classNameCache;
        return o[className] || (o[className] = new RegExp('(?:^|\\s+)' + className + '(?:\\s+|$)'));
    },
    convertHexColor: function(color) {
        var p = '0x';
        color = (color || '').toString();
        color.charAt(0) == '#' && (color = color.substring(1));
        color.length == 3 && (color = color.replace(/([0-9a-f])/ig, '$1$1'));
        return color.length == 6 ? [p + color.substr(0, 2) - 0, p + color.substr(2, 2) - 0, p + color.substr(4, 2) - 0] : [0, 0, 0];
    },
    styleSheets: {},
    getStyleSheetById: function(id) {
        var s;
        return (s = QZFL.dom.get(id)) && s.sheet || (s = document.styleSheets) && s[id];
    },
    getRulesBySheet: function(sheetId) {
        var ss = typeof(sheetId) == "object" ? sheetId: QZFL.css.getStyleSheetById(sheetId),
        rs = {},
        head,
        base;
        if (ss && !(rs = ss.cssRules || ss.rules)) {
            if (head = document.getElementsByTagName('head')[0]) {
                if (base = head.getElementsByTagName('base')[0]) {
                    QZFL.dom.removeElement(base);
                    rs = ss.cssRules;
                    head.appendChild(base);
                }
            }
        }
        return rs;
    },
    getRuleBySelector: function(sheetId, selector) {
        var _ss = QZFL.css.getStyleSheetById(sheetId),
        _rs = QZFL.css.getRulesBySheet(_ss);
        if (!_rs) {
            return null;
        }
        selector = (selector + '').toLowerCase(); ! _ss.cacheSelector && (_ss.cacheSelector = {});
        var _cs = _ss.cacheSelector[selector];
        if (_cs && _rs[_cs] && selector == (_rs[_cs].selectorText + '').toLowerCase()) {
            return _rs[_cs];
        }
        for (var i = 0,
        len = _rs.length; i < len; i++) {
            if (selector == (_rs[i].selectorText + '').toLowerCase()) {
                _ss.cacheSelector[selector] = i;
                return _rs[i];
            }
        }
        return null;
    },
    insertCSSLink: function(url, id) {
        var doc = document,
        cssLink = (cssLink = $(id)) && cssLink.nodeName == 'LINK' ? cssLink: null,
        head = doc.getElementsByTagName("head")[0];
        if (!cssLink) {
            cssLink = doc.createElement("link");
            id && (cssLink.id = id);
            cssLink.rel = "stylesheet";
            cssLink.rev = "stylesheet";
            cssLink.type = "text/css";
            cssLink.media = "screen";
            head.appendChild(cssLink);
        }
        url && (cssLink.href = url);
        return cssLink.sheet || cssLink;
    },
    insertStyleSheet: function(sheetId) {
        var ss = document.createElement("style");
        ss.id = sheetId;
        document.getElementsByTagName("head")[0].appendChild(ss);
        return ss.sheet || ss;
    },
    removeStyleSheet: function(id) {
        var _ss = QZFL.css.getStyleSheetById(id);
        _ss && QZFL.dom.removeElement(_ss.owningElement || _ss.ownerNode);
    },
    updateClassName: function(elem, removeNames, addNames) {
        if (!elem || elem.nodeType != 1) {
            return;
        }
        var oriName = elem.className;
        if (removeNames && typeof(removeNames) == 'string' || addNames && typeof(addNames) == 'string') {
            if (removeNames == '*') {
                oriName = '';
            } else {
                var ar = oriName.split(' '),
                i = 0,
                k,
                l = ar.length,
                n,
                b;
                oriName = {};
                for (; i < l; i++) {
                    ar[i] && (oriName[ar[i]] = true);
                }
                if (addNames) {
                    ar = addNames.split(' ');
                    l = ar.length;
                    for (i = 0; i < l; i++) { (n = ar[i]) && !oriName[n] && (b = oriName[n] = true);
                    }
                }
                if (removeNames) {
                    ar = removeNames.split(' ');
                    l = ar.length;
                    for (i = 0; i < l; i++) { (n = ar[i]) && oriName[n] && (b = true) && delete oriName[n];
                    }
                }
                ar.length = 0;
                for (var k in oriName) {
                    ar.push(k);
                }
                oriName = ar.join(' ');
            }
            if (b) {
                elem.className = oriName;
            }
        }
        return oriName;
    },
    hasClassName: function(elem, name) {
        return elem && (elem = elem.className) && name && ((' ' + elem + ' ').indexOf(' ' + name + ' ') + 1);
    },
    addClassName: function(elem, names) {
        QZFL.css.updateClassName(elem, null, names);
    },
    removeClassName: function(elem, names) {
        QZFL.css.updateClassName(elem, names);
    },
    replaceClassName: function(elems, a, b) {
        QZFL.css.swapClassName(elems, a, b, true);
    },
    swapClassName: function(elems, a, b, _isRep) {
        if (elems) {
            if (elems.constructor != Array) {
                elems = [elems];
            }
            for (var elem, i = 0,
            l = elems.length; i < l; i++) {
                if ((elem = elems[i]) && elem.nodeType == 1) {
                    if (QZFL.css.hasClassName(elem, a)) {
                        QZFL.css.updateClassName(elem, a, b);
                    } else if (!_isRep && QZFL.css.hasClassName(elem, b)) {
                        QZFL.css.updateClassName(elem, b, a);
                    }
                }
            }
        }
    },
    toggleClassName: function(elem, name) {
        if (!elem || elem.nodeType != 1) {
            return;
        }
        if (QZFL.css.hasClassName(elem, name)) {
            QZFL.css.updateClassName(elem, name);
        } else {
            QZFL.css.updateClassName(elem, null, name);
        }
    }
};
QZFL.dom = {
    getById: function(id) {
        return document.getElementById(id);
    },
    getByName: function(name, tagName, rt) {
        return QZFL.selector((tagName || "") + '[name="' + name + '"]', rt);
    },
    get: function(e) {
        return (typeof(e) == "string") ? document.getElementById(e) : e;
    },
    getNode: function(e) {
        return (e && (e.nodeType || e.item)) ? e: ((typeof(e) == 'string') ? document.getElementById(e) : null);
    },
    removeElement: function(el) {
        if (typeof(el) == "string") {
            el = document.getElementById(el);
        }
        if (!el) {
            return;
        }
        if (el.removeNode) {
            el.removeNode(true);
        } else {
            if (el.parentNode) {
                el.parentNode.removeChild(el);
            }
        }
        el = null;
        return null;
    },
    searchElementByClassName: function(el, className) {
        el = QZFL.dom.get(el);
        if (!el) {
            return null
        }
        var re = QZFL.css.getClassRegEx(className);
        while (el) {
            if (re.test(el.className)) {
                return el;
            }
            el = el.parentNode;
        }
        return null;
    },
    getElementsByClassName: function(className, tag, root) {
        return QZFL.selector((tag || '') + '.' + className, root);
    },
    isAncestor: function(node1, node2) {
        if (!node1 || !node2) {
            return false;
        }
        if (node1.contains && node2.nodeType && !QZFL.userAgent.webkit) {
            return node1.contains(node2) && node1 != node2;
        }
        if (node1.compareDocumentPosition && node2.nodeType) {
            return !! (node1.compareDocumentPosition(node2) & 16);
        } else if (node2.nodeType) {
            return !! QZFL.dom.getAncestorBy(node2,
            function(el) {
                return el == node1;
            });
        }
        return false;
    },
    getAncestorBy: function(node, method) {
        while (node = node.parentNode) {
            if (node && node.nodeType == 1 && (!method || method(node))) {
                return node;
            }
        }
        return null;
    },
    getFirstChild: function(node) {
        node = QZFL.dom.getNode(node);
        if (!node) {
            return null;
        }
        var child = !!node.firstChild && node.firstChild.nodeType == 1 ? node.firstChild: null;
        return child || QZFL.dom.getNextSibling(node.firstChild);
    },
    getNextSibling: function(node) {
        node = QZFL.dom.getNode(node);
        if (!node) {
            return null;
        }
        while (node) {
            node = node.nextSibling;
            if ( !! node && node.nodeType == 1) {
                return node;
            }
        }
        return null;
    },
    getPreviousSibling: function(node) {
        node = QZFL.dom.getNode(node);
        if (!node) {
            return null;
        }
        while (node) {
            node = node.previousSibling;
            if ( !! node && node.nodeType == 1) {
                return node;
            }
        }
        return null;
    },
    swapNode: function(node1, node2) {
        if (node1.swapNode) {
            node1.swapNode(node2);
        } else {
            var prt = node2.parentNode,
            next = node2.nextSibling;
            if (next == node1) {
                prt.insertBefore(node1, node2);
            } else if (node2 == node1.nextSibling) {
                prt.insertBefore(node2, node1);
            } else {
                node1.parentNode.replaceChild(node2, node1);
                prt.insertBefore(node1, next);
            }
        }
    },
    createElementIn: function(tagName, el, insertFirst, attributes) {
        var tagName = tagName || "div",
        el = QZFL.dom.get(el) || document.body,
        _doc = el.ownerDocument,
        _e = _doc.createElement(tagName);
        if (attributes) {
            for (var k in attributes) {
                if (k == "class") {
                    _e.className = attributes[k];
                } else if (k == "style") {
                    _e.style.cssText = attributes[k];
                } else {
                    _e[k] = attributes[k];
                }
            }
        }
        if (insertFirst) {
            el.insertBefore(_e, el.firstChild);
        } else {
            el.appendChild(_e);
        }
        return _e;
    },
    getStyle: function(el, property) {
        el = QZFL.dom.get(el);
        if (!el || el.nodeType == 9) {
            return null;
        }
        var w3cMode = document.defaultView && document.defaultView.getComputedStyle,
        computed = !w3cMode ? null: document.defaultView.getComputedStyle(el, ''),
        value = "";
        switch (property) {
        case "float":
            property = w3cMode ? "cssFloat": "styleFloat";
            break;
        case "opacity":
            if (!w3cMode) {
                var val = 100;
                try {
                    val = el.filters['DXImageTransform.Microsoft.Alpha'].opacity;
                } catch(e) {
                    try {
                        val = el.filters('alpha').opacity;
                    } catch(e) {}
                }
                return val / 100;
            } else {
                return parseFloat((computed || el.style)[property]);
            }
            break;
        case "backgroundPositionX":
            if (w3cMode) {
                property = "backgroundPosition";
                return ((computed || el.style)[property]).split(" ")[0];
            }
            break;
        case "backgroundPositionY":
            if (w3cMode) {
                property = "backgroundPosition";
                return ((computed || el.style)[property]).split(" ")[1];
            }
            break;
        }
        if (w3cMode) {
            return (computed || el.style)[property];
        } else {
            return (el.currentStyle[property] || el.style[property]);
        }
    },
    setStyle: function(el, properties, value) {
        if (! (el = QZFL.dom.get(el)) || el.nodeType != 1) {
            return false;
        }
        var tmp, bRtn = true,
        w3cMode = (tmp = document.defaultView) && tmp.getComputedStyle,
        rexclude = /z-?index|font-?weight|opacity|zoom|line-?height/i;
        if (typeof(properties) == 'string') {
            tmp = properties;
            properties = {};
            properties[tmp] = value;
        }
        for (var prop in properties) {
            value = properties[prop];
            if (prop == 'float') {
                prop = w3cMode ? "cssFloat": "styleFloat";
            } else if (prop == 'opacity') {
                if (!w3cMode) {
                    prop = 'filter';
                    value = value >= 1 ? '': ('alpha(opacity=' + Math.round(value * 100) + ')');
                }
            } else if (prop == 'backgroundPositionX' || prop == 'backgroundPositionY') {
                tmp = prop.slice( - 1) == 'X' ? 'Y': 'X';
                if (w3cMode) {
                    var v = QZFL.dom.getStyle(el, "backgroundPosition" + tmp);
                    prop = 'backgroundPosition';
                    typeof(value) == 'number' && (value = value + 'px');
                    value = tmp == 'Y' ? (value + " " + (v || "top")) : ((v || 'left') + " " + value);
                }
            }
            if (typeof el.style[prop] != "undefined") {
                el.style[prop] = value + (typeof value === "number" && !rexclude.test(prop) ? 'px': '');
                bRtn = bRtn && true;
            } else {
                bRtn = bRtn && false;
            }
        }
        return bRtn;
    },
    createNamedElement: function(type, name, doc) {
        var _doc = doc || document,
        element;
        try {
            element = _doc.createElement('<' + type + ' name="' + name + '">');
        } catch(ign) {}
        if (!element) {
            element = _doc.createElement(type);
        }
        if (!element.name) {
            element.name = name;
        }
        return element;
    },
    getPosition: function(el) {
        var xy = QZFL.dom.getXY(el),
        size = QZFL.dom.getSize(el);
        return {
            "top": xy[1],
            "left": xy[0],
            "width": size[0],
            "height": size[1]
        };
    },
    setPosition: function(el, pos) {
        QZFL.dom.setXY(el, pos['left'], pos['top']);
        QZFL.dom.setSize(el, pos['width'], pos['height']);
    },
    getXY: function(el, doc) {
        var _t = 0,
        _l = 0,
        _doc = doc || document;
        if (el) {
            if (_doc.documentElement.getBoundingClientRect && el.getBoundingClientRect) {
                var box = el.getBoundingClientRect(),
                oDoc = el.ownerDocument,
                _fix = QZFL.userAgent.ie ? 2 : 0;
                _t = box.top - _fix + QZFL.dom.getScrollTop(oDoc);
                _l = box.left - _fix + QZFL.dom.getScrollLeft(oDoc);
            } else {
                while (el.offsetParent) {
                    _t += el.offsetTop;
                    _l += el.offsetLeft;
                    el = el.offsetParent;
                }
            }
        }
        return [_l, _t];
    },
    getSize: function(el) {
        var _fix = [0, 0];
        if (el) {
            QZFL.object.each(["Left", "Right", "Top", "Bottom"],
            function(v) {
                _fix[v == "Left" || v == "Right" ? 0 : 1] += (parseInt(QZFL.dom.getStyle(el, "border" + v + "Width"), 10) || 0) + (parseInt(QZFL.dom.getStyle(el, "padding" + v), 10) || 0);
            });
            var _w = el.offsetWidth - _fix[0],
            _h = el.offsetHeight - _fix[1];
            return [_w, _h];
        }
        return [ - 1, -1];
    },
    setXY: function(el, x, y) {
        el = QZFL.dom.get(el);
        var _ml = parseInt(QZFL.dom.getStyle(el, "marginLeft")) || 0,
        _mt = parseInt(QZFL.dom.getStyle(el, "marginTop")) || 0;
        QZFL.dom.setStyle(el, "left", parseInt(x) - _ml + "px");
        QZFL.dom.setStyle(el, "top", parseInt(y) - _mt + "px");
    },
    getScrollLeft: function(doc) {
        var _doc = doc || document;
        return Math.max(_doc.documentElement.scrollLeft, _doc.body.scrollLeft);
    },
    getScrollTop: function(doc) {
        var _doc = doc || document;
        return Math.max(_doc.documentElement.scrollTop, _doc.body.scrollTop);
    },
    getScrollHeight: function(doc) {
        var _doc = doc || document;
        return Math.max(_doc.documentElement.scrollHeight, _doc.body.scrollHeight);
    },
    getScrollWidth: function(doc) {
        var _doc = doc || document;
        return Math.max(_doc.documentElement.scrollWidth, _doc.body.scrollWidth);
    },
    setScrollLeft: function(value, doc) {
        var _doc = doc || document;
        _doc[_doc.compatMode == "CSS1Compat" && !QZFL.userAgent.webkit ? "documentElement": "body"].scrollLeft = value;
    },
    setScrollTop: function(value, doc) {
        var _doc = doc || document;
        _doc[_doc.compatMode == "CSS1Compat" && !QZFL.userAgent.webkit ? "documentElement": "body"].scrollTop = value;
    },
    getClientHeight: function(doc) {
        var _doc = doc || document;
        return _doc.compatMode == "CSS1Compat" ? _doc.documentElement.clientHeight: _doc.body.clientHeight;
    },
    getClientWidth: function(doc) {
        var _doc = doc || document;
        return _doc.compatMode == "CSS1Compat" ? _doc.documentElement.clientWidth: _doc.body.clientWidth;
    },
    _SET_SIZE_RE: /^\d+(?:\.\d*)?(px|%|em|in|cm|mm|pc|pt)?$/,
    setSize: function(el, w, h) {
        el = QZFL.dom.get(el);
        var _r = QZFL.dom._SET_SIZE_RE,
        m;
        QZFL.dom.setStyle(el, "width", (m = _r.exec(w)) ? (m[1] ? w: (parseInt(w, 10) + 'px')) : 'auto');
        QZFL.dom.setStyle(el, "height", (m = _r.exec(h)) ? (m[1] ? h: (parseInt(h, 10) + 'px')) : 'auto');
    },
    getDocumentWindow: function(doc) {
        var _doc = doc || document;
        return _doc.parentWindow || _doc.defaultView;
    },
    getElementsByTagNameNS: function(node, ns, tgn) {
        var res = [];
        if (node) {
            if (node.getElementsByTagNameNS) {
                return node.getElementsByTagName(ns + ":" + tgn);
            } else if (node.getElementsByTagName) {
                var n = document.namespaces;
                if (n.length > 0) {
                    var l = node.getElementsByTagName(tgn);
                    for (var i = 0,
                    len = l.length; i < len; ++i) {
                        if (l[i].scopeName == ns) {
                            res.push(l[i]);
                        }
                    }
                }
            }
        }
        return res;
    },
    collection2Array: function(coll) {
        if (QZFL.lang.isArray(coll)) {
            return coll;
        } else {
            var r = [];
            for (var i = 0,
            len = coll.length; i < len; ++i) {
                r.push(coll[i]);
            }
        }
        return r;
    },
    getElementByTagNameBubble: function(a, tn) {
        if (!isNode(a)) {
            return null;
        }
        tn += "";
        var maxLv = 31;
        while (a && a.tagName && (a.tagName != tn.toUpperCase())) {
            if (a == document.body || (--maxLv) < 0) {
                return null;
            }
            a = a.parentNode;
        }
        return a;
    }
};
QZFL.event = {
    KEYS: {
        BACKSPACE: 8,
        TAB: 9,
        RETURN: 13,
        ESC: 27,
        SPACE: 32,
        LEFT: 37,
        UP: 38,
        RIGHT: 39,
        DOWN: 40,
        DELETE: 46
    },
    _eventListDictionary: {},
    _fnSeqUID: 0,
    _objSeqUID: 0,
    addEvent: function(obj, eventType, fn, argArray) {
        var cfn, res = false,
        l;
        if (!obj) {
            return res;
        }
        if (!obj.eventsListUID) {
            obj.eventsListUID = "e" + (++QZFL.event._objSeqUID);
        }
        if (! (l = QZFL.event._eventListDictionary[obj.eventsListUID])) {
            l = QZFL.event._eventListDictionary[obj.eventsListUID] = {};
        }
        if (!fn.__elUID) {
            fn.__elUID = "e" + (++QZFL.event._fnSeqUID) + obj.eventsListUID;
        }
        if (!l[eventType]) {
            l[eventType] = {};
        }
        if (typeof(l[eventType][fn.__elUID]) == 'function') {
            return false;
        }
        cfn = function(evt) {
            return fn.apply(obj, !argArray ? [QZFL.event.getEvent(evt)] : ([QZFL.event.getEvent(evt)]).concat(argArray));
        };
        if (obj.addEventListener) {
            obj.addEventListener(eventType, cfn, false);
            res = true;
        } else if (obj.attachEvent) {
            res = obj.attachEvent("on" + eventType, cfn);
        } else {
            res = false;
        }
        if (res) {
            l[eventType][fn.__elUID] = cfn;
        }
        return res;
    },
    removeEvent: function(obj, eventType, fn) {
        var cfn = fn,
        res = false,
        l = QZFL.event._eventListDictionary,
        r;
        if (!obj) {
            return res;
        }
        if (!fn) {
            return QZFL.event.purgeEvent(obj, eventType);
        }
        if (obj.eventsListUID && l[obj.eventsListUID]) {
            l = l[obj.eventsListUID][eventType];
            if (l && l[fn.__elUID]) {
                cfn = l[fn.__elUID];
                r = l;
            }
        }
        if (obj.removeEventListener) {
            obj.removeEventListener(eventType, cfn, false);
            res = true;
        } else if (obj.detachEvent) {
            obj.detachEvent("on" + eventType, cfn);
            res = true;
        } else {
            return false;
        }
        if (res && r && r[fn.__elUID]) {
            delete r[fn.__elUID];
        }
        return res;
    },
    purgeEvent: function(obj, type) {
        var l;
        if (obj.eventsListUID && (l = QZFL.event._eventListDictionary[obj.eventsListUID]) && l[type]) {
            for (var k in l[type]) {
                if (obj.removeEventListener) {
                    obj.removeEventListener(type, l[type][k], false);
                } else if (obj.detachEvent) {
                    obj.detachEvent('on' + type, l[type][k]);
                }
            }
        }
        if (obj['on' + type]) {
            obj['on' + type] = null;
        }
        if (l) {
            l[type] = null;
            delete l[type];
        }
        return true;
    },
    getEvent: function(evt) {
        var evt = evt || window.event,
        c;
        if (!evt && !QZFL.userAgent.ie) {
            c = QZFL.event.getEvent.caller,
            cnt = 1;
            while (c) {
                evt = c.arguments[0];
                if (evt && Event == evt.constructor) {
                    break;
                } else if (cnt > 32) {
                    break;
                }
                c = c.caller;
                cnt++;
            }
        }
        return evt;
    },
    getButton: function(evt) {
        var e = QZFL.event.getEvent(evt);
        if (!e) {
            return - 1
        }
        if (QZFL.userAgent.ie) {
            return e.button - Math.ceil(e.button / 2);
        } else {
            return e.button;
        }
    },
    getTarget: function(evt) {
        var e = QZFL.event.getEvent(evt);
        if (e) {
            return e.srcElement || e.target;
        } else {
            return null;
        }
    },
    getCurrentTarget: function(evt) {
        var e = QZFL.event.getEvent(evt);
        if (e) {
            return e.currentTarget || document.activeElement;
        } else {
            return null;
        }
    },
    cancelBubble: function(evt) {
        evt = QZFL.event.getEvent(evt);
        if (!evt) {
            return false
        }
        if (evt.stopPropagation) {
            evt.stopPropagation();
        } else {
            if (!evt.cancelBubble) {
                evt.cancelBubble = true;
            }
        }
    },
    preventDefault: function(evt) {
        evt = QZFL.event.getEvent(evt);
        if (!evt) {
            return false
        }
        if (evt.preventDefault) {
            evt.preventDefault();
        } else {
            evt.returnValue = false;
        }
    },
    mouseX: function(evt) {
        evt = QZFL.event.getEvent(evt);
        return evt.pageX || (evt.clientX + (document.documentElement.scrollLeft || document.body.scrollLeft));
    },
    mouseY: function(evt) {
        evt = QZFL.event.getEvent(evt);
        return evt.pageY || (evt.clientY + (document.documentElement.scrollTop || document.body.scrollTop));
    },
    getRelatedTarget: function(ev) {
        ev = QZFL.event.getEvent(ev);
        var t = ev.relatedTarget;
        if (!t) {
            if (ev.type == "mouseout") {
                t = ev.toElement;
            } else if (ev.type == "mouseover") {
                t = ev.fromElement;
            } else {}
        }
        return t;
    },
    onDomReady: function(fn) {
        QZFL.event.onDomReady._fn = function() {
            fn();
            QZFL.event.onDomReady._fn = null;
        };
        if (document.addEventListener) {
            if (QZFL.userAgent.safari < 4) {
                var interval = setInterval(function() {
                    if ((/loaded|complete/).test(document.readyState)) {
                        QZFL.event.onDomReady._fn();
                        clearInterval(interval);
                    }
                },
                50);
            } else {
                document.addEventListener("DOMContentLoaded", QZFL.event.onDomReady._fn, true);
            }
        } else {
            var src = window.location.protocol == 'https:' ? '//:': 'javascript:void(0)';
            document.write('<script onreadystatechange="if(this.readyState==\'complete\'){this.parentNode.removeChild(this);QZFL.event.onDomReady._fn();}" defer="defer" src="' + src + '"><\/script\>');
        }
    }
};
QZFL.event.on = QZFL.event.addEvent;
QZFL.event.bind = QZFL.object.bind;
QZFL.lang = {
    isString: function(o) {
        return QZFL.object.getType(o) == "string";
    },
    isArray: function(o) {
        return QZFL.object.getType(o) == "array";
    },
    isFunction: function(o) {
        return QZFL.object.getType(o) == "function";
    },
    isHashMap: function(o) {
        return QZFL.object.getType(o) == "object";
    },
    isNode: function(o) {
        if (typeof(Node) == 'undefined') {
            Node = null;
        }
        try {
            if (!o || !((Node != undefined && o instanceof Node) || o.nodeName)) {
                return false;
            }
        } catch(ignored) {
            return false;
        }
        return true;
    },
    isElement: function(o) {
        return o && o.nodeType == 1;
    }
};; (function() {
    var chunker = /((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^[\]]*\]|['"][^'"]*['"]|[^[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?/g,
    done = 0,
    toString = Object.prototype.toString,
    hasDuplicate = false;
    var Sizzle = function(selector, context, results, seed) {
        results = results || [];
        var origContext = context = context || document;
        if (context.nodeType !== 1 && context.nodeType !== 9) {
            return [];
        }
        if (!selector || typeof selector !== "string") {
            return results;
        }
        var parts = [],
        m,
        set,
        checkSet,
        check,
        mode,
        extra,
        prune = true,
        contextXML = isXML(context);
        chunker.lastIndex = 0;
        while ((m = chunker.exec(selector)) !== null) {
            parts.push(m[1]);
            if (m[2]) {
                extra = RegExp.rightContext;
                break;
            }
        }
        if (parts.length > 1 && origPOS.exec(selector)) {
            if (parts.length === 2 && Expr.relative[parts[0]]) {
                set = posProcess(parts[0] + parts[1], context);
            } else {
                set = Expr.relative[parts[0]] ? [context] : Sizzle(parts.shift(), context);
                while (parts.length) {
                    selector = parts.shift();
                    if (Expr.relative[selector]) selector += parts.shift();
                    set = posProcess(selector, set);
                }
            }
        } else {
            if (!seed && parts.length > 1 && context.nodeType === 9 && !contextXML && Expr.match.ID.test(parts[0]) && !Expr.match.ID.test(parts[parts.length - 1])) {
                var ret = Sizzle.find(parts.shift(), context, contextXML);
                context = ret.expr ? Sizzle.filter(ret.expr, ret.set)[0] : ret.set[0];
            }
            if (context) {
                var ret = seed ? {
                    expr: parts.pop(),
                    set: makeArray(seed)
                }: Sizzle.find(parts.pop(), parts.length === 1 && (parts[0] === "~" || parts[0] === "+") && context.parentNode ? context.parentNode: context, contextXML);
                set = ret.expr ? Sizzle.filter(ret.expr, ret.set) : ret.set;
                if (parts.length > 0) {
                    checkSet = makeArray(set);
                } else {
                    prune = false;
                }
                while (parts.length) {
                    var cur = parts.pop(),
                    pop = cur;
                    if (!Expr.relative[cur]) {
                        cur = "";
                    } else {
                        pop = parts.pop();
                    }
                    if (pop == null) {
                        pop = context;
                    }
                    Expr.relative[cur](checkSet, pop, contextXML);
                }
            } else {
                checkSet = parts = [];
            }
        }
        if (!checkSet) {
            checkSet = set;
        }
        if (!checkSet) {
            throw "Syntax error, unrecognized expression: " + (cur || selector);
        }
        if (toString.call(checkSet) === "[object Array]") {
            if (!prune) {
                results.push.apply(results, checkSet);
            } else if (context && context.nodeType === 1) {
                for (var i = 0; checkSet[i] != null; i++) {
                    if (checkSet[i] && (checkSet[i] === true || checkSet[i].nodeType === 1 && contains(context, checkSet[i]))) {
                        results.push(set[i]);
                    }
                }
            } else {
                for (var i = 0; checkSet[i] != null; i++) {
                    if (checkSet[i] && checkSet[i].nodeType === 1) {
                        results.push(set[i]);
                    }
                }
            }
        } else {
            makeArray(checkSet, results);
        }
        if (extra) {
            Sizzle(extra, origContext, results, seed);
            Sizzle.uniqueSort(results);
        }
        return results;
    };
    Sizzle.uniqueSort = function(results) {
        if (sortOrder) {
            hasDuplicate = false;
            results.sort(sortOrder);
            if (hasDuplicate) {
                for (var i = 1; i < results.length; i++) {
                    if (results[i] === results[i - 1]) {
                        results.splice(i--, 1);
                    }
                }
            }
        }
    };
    Sizzle.matches = function(expr, set) {
        return Sizzle(expr, null, null, set);
    };
    Sizzle.find = function(expr, context, isXML) {
        var set, match;
        if (!expr) {
            return [];
        }
        for (var i = 0,
        l = Expr.order.length; i < l; i++) {
            var type = Expr.order[i],
            match;
            if ((match = Expr.match[type].exec(expr))) {
                var left = RegExp.leftContext;
                if (left.substr(left.length - 1) !== "\\") {
                    match[1] = (match[1] || "").replace(/\\/g, "");
                    set = Expr.find[type](match, context, isXML);
                    if (set != null) {
                        expr = expr.replace(Expr.match[type], "");
                        break;
                    }
                }
            }
        }
        if (!set) {
            set = context.getElementsByTagName("*");
        }
        return {
            set: set,
            expr: expr
        };
    };
    Sizzle.filter = function(expr, set, inplace, not) {
        var old = expr,
        result = [],
        curLoop = set,
        match,
        anyFound,
        isXMLFilter = set && set[0] && isXML(set[0]);
        while (expr && set.length) {
            for (var type in Expr.filter) {
                if ((match = Expr.match[type].exec(expr)) != null) {
                    var filter = Expr.filter[type],
                    found,
                    item;
                    anyFound = false;
                    if (curLoop == result) {
                        result = [];
                    }
                    if (Expr.preFilter[type]) {
                        match = Expr.preFilter[type](match, curLoop, inplace, result, not, isXMLFilter);
                        if (!match) {
                            anyFound = found = true;
                        } else if (match === true) {
                            continue;
                        }
                    }
                    if (match) {
                        for (var i = 0; (item = curLoop[i]) != null; i++) {
                            if (item) {
                                found = filter(item, match, i, curLoop);
                                var pass = not ^ !!found;
                                if (inplace && found != null) {
                                    if (pass) {
                                        anyFound = true;
                                    } else {
                                        curLoop[i] = false;
                                    }
                                } else if (pass) {
                                    result.push(item);
                                    anyFound = true;
                                }
                            }
                        }
                    }
                    if (found !== undefined) {
                        if (!inplace) {
                            curLoop = result;
                        }
                        expr = expr.replace(Expr.match[type], "");
                        if (!anyFound) {
                            return [];
                        }
                        break;
                    }
                }
            }
            if (expr == old) {
                if (anyFound == null) {
                    throw "Syntax error, unrecognized expression: " + expr;
                } else {
                    break;
                }
            }
            old = expr;
        }
        return curLoop;
    };
    var Expr = Sizzle.selectors = {
        order: ["ID", "NAME", "TAG"],
        match: {
            ID: /#((?:[\w\u00c0-\uFFFF_-]|\\.)+)/,
            CLASS: /\.((?:[\w\u00c0-\uFFFF_-]|\\.)+)/,
            NAME: /\[name=['"]*((?:[\w\u00c0-\uFFFF_-]|\\.)+)['"]*\]/,
            ATTR: /\[\s*((?:[\w\u00c0-\uFFFF_-]|\\.)+)\s*(?:(\S?=)\s*(['"]*)(.*?)\3|)\s*\]/,
            TAG: /^((?:[\w\u00c0-\uFFFF\*_-]|\\.)+)/,
            CHILD: /:(only|nth|last|first)-child(?:\((even|odd|[\dn+-]*)\))?/,
            POS: /:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^-]|$)/,
            PSEUDO: /:((?:[\w\u00c0-\uFFFF_-]|\\.)+)(?:\((['"]*)((?:\([^\)]+\)|[^\2\(\)]*)+)\2\))?/
        },
        attrMap: {
            "class": "className",
            "for": "htmlFor"
        },
        attrHandle: {
            href: function(elem) {
                return elem.getAttribute("href");
            }
        },
        relative: {
            "+": function(checkSet, part, isXML) {
                var isPartStr = typeof part === "string",
                isTag = isPartStr && !/\W/.test(part),
                isPartStrNotTag = isPartStr && !isTag;
                if (isTag && !isXML) {
                    part = part.toUpperCase();
                }
                for (var i = 0,
                l = checkSet.length,
                elem; i < l; i++) {
                    if ((elem = checkSet[i])) {
                        while ((elem = elem.previousSibling) && elem.nodeType !== 1) {}
                        checkSet[i] = isPartStrNotTag || elem && elem.nodeName === part ? elem || false: elem === part;
                    }
                }
                if (isPartStrNotTag) {
                    Sizzle.filter(part, checkSet, true);
                }
            },
            ">": function(checkSet, part, isXML) {
                var isPartStr = typeof part === "string";
                if (isPartStr && !/\W/.test(part)) {
                    part = isXML ? part: part.toUpperCase();
                    for (var i = 0,
                    l = checkSet.length; i < l; i++) {
                        var elem = checkSet[i];
                        if (elem) {
                            var parent = elem.parentNode;
                            checkSet[i] = parent.nodeName === part ? parent: false;
                        }
                    }
                } else {
                    for (var i = 0,
                    l = checkSet.length; i < l; i++) {
                        var elem = checkSet[i];
                        if (elem) {
                            checkSet[i] = isPartStr ? elem.parentNode: elem.parentNode === part;
                        }
                    }
                    if (isPartStr) {
                        Sizzle.filter(part, checkSet, true);
                    }
                }
            },
            "": function(checkSet, part, isXML) {
                var doneName = done++,
                checkFn = dirCheck;
                if (!/\W/.test(part)) {
                    var nodeCheck = part = isXML ? part: part.toUpperCase();
                    checkFn = dirNodeCheck;
                }
                checkFn("parentNode", part, doneName, checkSet, nodeCheck, isXML);
            },
            "~": function(checkSet, part, isXML) {
                var doneName = done++,
                checkFn = dirCheck;
                if (typeof part === "string" && !/\W/.test(part)) {
                    var nodeCheck = part = isXML ? part: part.toUpperCase();
                    checkFn = dirNodeCheck;
                }
                checkFn("previousSibling", part, doneName, checkSet, nodeCheck, isXML);
            }
        },
        find: {
            ID: function(match, context, isXML) {
                if (typeof context.getElementById !== "undefined" && !isXML) {
                    var m = context.getElementById(match[1]);
                    return m ? [m] : [];
                }
            },
            NAME: function(match, context, isXML) {
                if (typeof context.getElementsByName !== "undefined") {
                    var ret = [],
                    results = context.getElementsByName(match[1]);
                    for (var i = 0,
                    l = results.length; i < l; i++) {
                        if (results[i].getAttribute("name") === match[1]) {
                            ret.push(results[i]);
                        }
                    }
                    return ret.length === 0 ? null: ret;
                }
            },
            TAG: function(match, context) {
                return context.getElementsByTagName(match[1]);
            }
        },
        preFilter: {
            CLASS: function(match, curLoop, inplace, result, not, isXML) {
                match = " " + match[1].replace(/\\/g, "") + " ";
                if (isXML) {
                    return match;
                }
                for (var i = 0,
                elem; (elem = curLoop[i]) != null; i++) {
                    if (elem) {
                        if (not ^ (elem.className && (" " + elem.className + " ").indexOf(match) >= 0)) {
                            if (!inplace) result.push(elem);
                        } else if (inplace) {
                            curLoop[i] = false;
                        }
                    }
                }
                return false;
            },
            ID: function(match) {
                return match[1].replace(/\\/g, "");
            },
            TAG: function(match, curLoop) {
                for (var i = 0; curLoop[i] === false; i++) {}
                return curLoop[i] && isXML(curLoop[i]) ? match[1] : match[1].toUpperCase();
            },
            CHILD: function(match) {
                if (match[1] == "nth") {
                    var test = /(-?)(\d*)n((?:\+|-)?\d*)/.exec(match[2] == "even" && "2n" || match[2] == "odd" && "2n+1" || !/\D/.test(match[2]) && "0n+" + match[2] || match[2]);
                    match[2] = (test[1] + (test[2] || 1)) - 0;
                    match[3] = test[3] - 0;
                }
                match[0] = done++;
                return match;
            },
            ATTR: function(match, curLoop, inplace, result, not, isXML) {
                var name = match[1].replace(/\\/g, "");
                if (!isXML && Expr.attrMap[name]) {
                    match[1] = Expr.attrMap[name];
                }
                if (match[2] === "~=") {
                    match[4] = " " + match[4] + " ";
                }
                return match;
            },
            PSEUDO: function(match, curLoop, inplace, result, not) {
                if (match[1] === "not") {
                    if (chunker.exec(match[3]).length > 1 || /^\w/.test(match[3])) {
                        match[3] = Sizzle(match[3], null, null, curLoop);
                    } else {
                        var ret = Sizzle.filter(match[3], curLoop, inplace, true ^ not);
                        if (!inplace) {
                            result.push.apply(result, ret);
                        }
                        return false;
                    }
                } else if (Expr.match.POS.test(match[0]) || Expr.match.CHILD.test(match[0])) {
                    return true;
                }
                return match;
            },
            POS: function(match) {
                match.unshift(true);
                return match;
            }
        },
        filters: {
            enabled: function(elem) {
                return elem.disabled === false && elem.type !== "hidden";
            },
            disabled: function(elem) {
                return elem.disabled === true;
            },
            checked: function(elem) {
                return elem.checked === true;
            },
            selected: function(elem) {
                elem.parentNode.selectedIndex;
                return elem.selected === true;
            },
            parent: function(elem) {
                return !! elem.firstChild;
            },
            empty: function(elem) {
                return ! elem.firstChild;
            },
            has: function(elem, i, match) {
                return !! Sizzle(match[3], elem).length;
            },
            header: function(elem) {
                return /h\d/i.test(elem.nodeName);
            },
            text: function(elem) {
                return "text" === elem.type;
            },
            radio: function(elem) {
                return "radio" === elem.type;
            },
            checkbox: function(elem) {
                return "checkbox" === elem.type;
            },
            file: function(elem) {
                return "file" === elem.type;
            },
            password: function(elem) {
                return "password" === elem.type;
            },
            submit: function(elem) {
                return "submit" === elem.type;
            },
            image: function(elem) {
                return "image" === elem.type;
            },
            reset: function(elem) {
                return "reset" === elem.type;
            },
            button: function(elem) {
                return "button" === elem.type || elem.nodeName.toUpperCase() === "BUTTON";
            },
            input: function(elem) {
                return /input|select|textarea|button/i.test(elem.nodeName);
            }
        },
        setFilters: {
            first: function(elem, i) {
                return i === 0;
            },
            last: function(elem, i, match, array) {
                return i === array.length - 1;
            },
            even: function(elem, i) {
                return i % 2 === 0;
            },
            odd: function(elem, i) {
                return i % 2 === 1;
            },
            lt: function(elem, i, match) {
                return i < match[3] - 0;
            },
            gt: function(elem, i, match) {
                return i > match[3] - 0;
            },
            nth: function(elem, i, match) {
                return match[3] - 0 == i;
            },
            eq: function(elem, i, match) {
                return match[3] - 0 == i;
            }
        },
        filter: {
            PSEUDO: function(elem, match, i, array) {
                var name = match[1],
                filter = Expr.filters[name];
                if (filter) {
                    return filter(elem, i, match, array);
                } else if (name === "contains") {
                    return (elem.textContent || elem.innerText || "").indexOf(match[3]) >= 0;
                } else if (name === "not") {
                    var not = match[3];
                    for (i = 0, l = not.length; i < l; i++) {
                        if (not[i] === elem) {
                            return false;
                        }
                    }
                    return true;
                }
            },
            CHILD: function(elem, match) {
                var type = match[1],
                node = elem;
                switch (type) {
                case 'only':
                case 'first':
                    while ((node = node.previousSibling)) {
                        if (node.nodeType === 1) {
                            return false;
                        }
                    }
                    if (type == 'first') {
                        return true;
                    }
                    node = elem;
                case 'last':
                    while ((node = node.nextSibling)) {
                        if (node.nodeType === 1) return false;
                    }
                    return true;
                case 'nth':
                    var first = match[2],
                    last = match[3];
                    if (first == 1 && last == 0) {
                        return true;
                    }
                    var doneName = match[0],
                    parent = elem.parentNode;
                    if (parent && (parent.sizcache !== doneName || !elem.nodeIndex)) {
                        var count = 0;
                        for (node = parent.firstChild; node; node = node.nextSibling) {
                            if (node.nodeType === 1) {
                                node.nodeIndex = ++count;
                            }
                        }
                        parent.sizcache = doneName;
                    }
                    var diff = elem.nodeIndex - last;
                    if (first == 0) {
                        return diff == 0;
                    } else {
                        return (diff % first == 0 && diff / first >= 0);
                    }
                }
            },
            ID: function(elem, match) {
                return elem.nodeType === 1 && elem.getAttribute("id") === match;
            },
            TAG: function(elem, match) {
                return (match === "*" && elem.nodeType === 1) || elem.nodeName === match;
            },
            CLASS: function(elem, match) {
                return (" " + (elem.className || elem.getAttribute("class")) + " ").indexOf(match) > -1;
            },
            ATTR: function(elem, match) {
                var name = match[1],
                result = Expr.attrHandle[name] ? Expr.attrHandle[name](elem) : elem[name] != null ? elem[name] : elem.getAttribute(name),
                value = result + "",
                type = match[2],
                check = match[4];
                return result == null ? type === "!=": type === "=" ? value === check: type === "*=" ? value.indexOf(check) >= 0 : type === "~=" ? (" " + value + " ").indexOf(check) >= 0 : !check ? value && result !== false: type === "!=" ? value != check: type === "^=" ? value.indexOf(check) === 0 : type === "$=" ? value.substr(value.length - check.length) === check: type === "|=" ? value === check || value.substr(0, check.length + 1) === check + "-": false;
            },
            POS: function(elem, match, i, array) {
                var name = match[2],
                filter = Expr.setFilters[name];
                if (filter) {
                    return filter(elem, i, match, array);
                }
            }
        }
    };
    var origPOS = Expr.match.POS;
    for (var type in Expr.match) {
        Expr.match[type] = new RegExp(Expr.match[type].source + /(?![^\[]*\])(?![^\(]*\))/.source);
    }
    var makeArray = function(array, results) {
        array = Array.prototype.slice.call(array);
        if (results) {
            results.push.apply(results, array);
            return results;
        }
        return array;
    };
    try {
        Array.prototype.slice.call(document.documentElement.childNodes);
    } catch(e) {
        makeArray = function(array, results) {
            var ret = results || [];
            if (toString.call(array) === "[object Array]") {
                Array.prototype.push.apply(ret, array);
            } else {
                if (typeof array.length === "number") {
                    for (var i = 0,
                    l = array.length; i < l; i++) {
                        ret.push(array[i]);
                    }
                } else {
                    for (var i = 0; array[i]; i++) {
                        ret.push(array[i]);
                    }
                }
            }
            return ret;
        };
    }
    var sortOrder;
    if (document.documentElement.compareDocumentPosition) {
        sortOrder = function(a, b) {
            var ret = a.compareDocumentPosition(b) & 4 ? -1 : a === b ? 0 : 1;
            if (ret === 0) {
                hasDuplicate = true;
            }
            return ret;
        };
    } else if ("sourceIndex" in document.documentElement) {
        sortOrder = function(a, b) {
            var ret = a.sourceIndex - b.sourceIndex;
            if (ret === 0) {
                hasDuplicate = true;
            }
            return ret;
        };
    } else if (document.createRange) {
        sortOrder = function(a, b) {
            var aRange = a.ownerDocument.createRange(),
            bRange = b.ownerDocument.createRange();
            aRange.selectNode(a);
            aRange.collapse(true);
            bRange.selectNode(b);
            bRange.collapse(true);
            var ret = aRange.compareBoundaryPoints(Range.START_TO_END, bRange);
            if (ret === 0) {
                hasDuplicate = true;
            }
            return ret;
        };
    } (function() {
        var form = document.createElement("div"),
        id = "script" + (new Date).getTime();
        form.innerHTML = "<a name='" + id + "'/>";
        var root = document.documentElement;
        root.insertBefore(form, root.firstChild);
        if ( !! document.getElementById(id)) {
            Expr.find.ID = function(match, context, isXML) {
                if (typeof context.getElementById !== "undefined" && !isXML) {
                    var m = context.getElementById(match[1]);
                    return m ? m.id === match[1] || typeof m.getAttributeNode !== "undefined" && m.getAttributeNode("id").nodeValue === match[1] ? [m] : undefined: [];
                }
            };
            Expr.filter.ID = function(elem, match) {
                var node = typeof elem.getAttributeNode !== "undefined" && elem.getAttributeNode("id");
                return elem.nodeType === 1 && node && node.nodeValue === match;
            };
        }
        root.removeChild(form);
        root = form = null;
    })(); (function() {
        var div = document.createElement("div");
        div.appendChild(document.createComment(""));
        if (div.getElementsByTagName("*").length > 0) {
            Expr.find.TAG = function(match, context) {
                var results = context.getElementsByTagName(match[1]);
                if (match[1] === "*") {
                    var tmp = [];
                    for (var i = 0; results[i]; i++) {
                        if (results[i].nodeType === 1) {
                            tmp.push(results[i]);
                        }
                    }
                    results = tmp;
                }
                return results;
            };
        }
        div.innerHTML = "<a href='#'></a>";
        if (div.firstChild && typeof div.firstChild.getAttribute !== "undefined" && div.firstChild.getAttribute("href") !== "#") {
            Expr.attrHandle.href = function(elem) {
                return elem.getAttribute("href", 2);
            };
        }
        div = null;
    })();
    if (document.querySelectorAll)(function() {
        var oldSizzle = Sizzle,
        div = document.createElement("div");
        div.innerHTML = "<p class='TEST'></p>";
        if (div.querySelectorAll && div.querySelectorAll(".TEST").length === 0) {
            return;
        }
        Sizzle = function(query, context, extra, seed) {
            context = context || document;
            if (!seed && context.nodeType === 9 && !isXML(context)) {
                try {
                    return makeArray(context.querySelectorAll(query), extra);
                } catch(e) {}
            }
            return oldSizzle(query, context, extra, seed);
        };
        for (var prop in oldSizzle) {
            Sizzle[prop] = oldSizzle[prop];
        }
        div = null;
    })();
    if (document.getElementsByClassName && document.documentElement.getElementsByClassName)(function() {
        var div = document.createElement("div");
        div.innerHTML = "<div class='test e'></div><div class='test'></div>";
        if (div.getElementsByClassName("e").length === 0) return;
        div.lastChild.className = "e";
        if (div.getElementsByClassName("e").length === 1) return;
        Expr.order.splice(1, 0, "CLASS");
        Expr.find.CLASS = function(match, context, isXML) {
            if (typeof context.getElementsByClassName !== "undefined" && !isXML) {
                return context.getElementsByClassName(match[1]);
            }
        };
        div = null;
    })();
    function dirNodeCheck(dir, cur, doneName, checkSet, nodeCheck, isXML) {
        var sibDir = dir == "previousSibling" && !isXML;
        for (var i = 0,
        l = checkSet.length; i < l; i++) {
            var elem = checkSet[i];
            if (elem) {
                if (sibDir && elem.nodeType === 1) {
                    elem.sizcache = doneName;
                    elem.sizset = i;
                }
                elem = elem[dir];
                var match = false;
                while (elem) {
                    if (elem.sizcache === doneName) {
                        match = checkSet[elem.sizset];
                        break;
                    }
                    if (elem.nodeType === 1 && !isXML) {
                        elem.sizcache = doneName;
                        elem.sizset = i;
                    }
                    if (elem.nodeName === cur) {
                        match = elem;
                        break;
                    }
                    elem = elem[dir];
                }
                checkSet[i] = match;
            }
        }
    }
    function dirCheck(dir, cur, doneName, checkSet, nodeCheck, isXML) {
        var sibDir = dir == "previousSibling" && !isXML;
        for (var i = 0,
        l = checkSet.length; i < l; i++) {
            var elem = checkSet[i];
            if (elem) {
                if (sibDir && elem.nodeType === 1) {
                    elem.sizcache = doneName;
                    elem.sizset = i;
                }
                elem = elem[dir];
                var match = false;
                while (elem) {
                    if (elem.sizcache === doneName) {
                        match = checkSet[elem.sizset];
                        break;
                    }
                    if (elem.nodeType === 1) {
                        if (!isXML) {
                            elem.sizcache = doneName;
                            elem.sizset = i;
                        }
                        if (typeof cur !== "string") {
                            if (elem === cur) {
                                match = true;
                                break;
                            }
                        } else if (Sizzle.filter(cur, [elem]).length > 0) {
                            match = elem;
                            break;
                        }
                    }
                    elem = elem[dir];
                }
                checkSet[i] = match;
            }
        }
    }
    var contains = document.compareDocumentPosition ?
    function(a, b) {
        return a.compareDocumentPosition(b) & 16;
    }: function(a, b) {
        return a !== b && (a.contains ? a.contains(b) : true);
    };
    var isXML = function(elem) {
        return elem.nodeType === 9 && elem.documentElement.nodeName !== "HTML" || !!elem.ownerDocument && elem.ownerDocument.documentElement.nodeName !== "HTML";
    };
    var posProcess = function(selector, context) {
        var tmpSet = [],
        later = "",
        match,
        root = context.nodeType ? [context] : context;
        while ((match = Expr.match.PSEUDO.exec(selector))) {
            later += match[0];
            selector = selector.replace(Expr.match.PSEUDO, "");
        }
        selector = Expr.relative[selector] ? selector + "*": selector;
        for (var i = 0,
        l = root.length; i < l; i++) {
            Sizzle(selector, root[i], tmpSet);
        }
        return Sizzle.filter(later, tmpSet);
    };
    QZFL.selector = Sizzle;
    QZFL.object.makeArray = makeArray;
    QZFL.dom.uniqueSort = Sizzle.uniqueSort;
    QZFL.dom.contains = contains;
})();; (function() {
    var _handler = QZFL.ElementHandler = function(selector, context) {
        this.elements = null;
        this._isElementHandler = true;
        this._init(selector, context);
    };
    _handler.prototype = {
        _init: function(selector, context) {
            if (QZFL.lang.isString(selector)) {
                this.elements = QZFL.selector(selector, context);
            } else if (selector instanceof QZFL.ElementHandler) {
                this.elements = selector.elements.slice();
            } else if (QZFL.lang.isArray(selector)) {
                this.elements = selector;
            } else if (selector && ((selector.nodeType && selector.nodeType !== 3 && selector.nodeType !== 8) || selector.setTimeout)) {
                this.elements = [selector];
            } else {
                this.elements = [];
            }
        },
        findElements: function(selector) {
            var _pushstack = [],
            _s;
            this.each(function(el) {
                _s = QZFL.selector(selector, el);
                if (_s.length > 0) {
                    _pushstack = _pushstack.concat(_s);
                }
            });
            return _pushstack;
        },
        find: function(selector) {
            return _el.get(this.findElements(selector));
        },
        filter: function(expr, elems, not) {
            if (not) {
                expr = ":not(" + expr + ")";
            }
            return _el.get(QZFL.selector.matches(expr, elems || this.elements));
        },
        each: function(fn) {
            QZFL.object.each(this.elements, fn);
            return this;
        },
        concat: function(elements) {
            return _el.get(this.elements.concat( !! elements._isElementHandler ? elements.elements: elements));
        },
        get: function(index) {
            return _el.get(this.elements[index]);
        },
        slice: function() {
            return _el.get(Array.prototype.slice.apply(this.elements, arguments));
        }
    };
    var _el = QZFL.element = {
        get: function(selector, context) {
            return new _handler(selector, context);
        },
        extend: function(object) {
            QZFL.object.extend(_handler, object);
        },
        extendFn: function(object) {
            QZFL.object.extend(_handler.prototype, object);
        },
        getVersion: function() {
            return _handler.version;
        }
    }
})();
QZFL.element.extend({
    version: "1.0"
});
QZFL.element.extendFn({
    bind: function(evtType, fn) {
        if (typeof(fn) != 'function') {
            return false;
        }
        return this.each(function(el) {
            QZFL.event.addEvent(el, evtType, fn);
        });
    },
    unBind: function(evtType, fn) {
        return this.each(function(el) {
            QZFL.event[fn ? 'removeEvent': 'purgeEvent'](el, evtType, fn);
        });
    },
    onHover: function(fnOver, fnOut) {
        this.onMouseOver(fnOver);
        return this.onMouseOut(fnOut);
    },
    onMouseEnter: function(fn) {
        return this.bind('mouseover',
        function(evt) {
            var rel = QZFL.event.getRelatedTarget(evt);
            if (QZFL.lang.isFunction(fn) && !QZFL.dom.isAncestor(this, rel)) {
                fn.call(this, evt);
            }
        });
    },
    onMouseLeave: function(fn) {
        return this.bind('mouseout',
        function(evt) {
            var rel = QZFL.event.getRelatedTarget(evt);
            if (QZFL.lang.isFunction(fn) && !QZFL.dom.isAncestor(this, rel)) {
                fn.call(this, evt);
            }
        });
    }
});
QZFL.object.each(['onClick', 'onMouseOver', 'onMouseMove', 'onMouseOut', 'onFocus', 'onBlur', 'onKeyDown', 'onKeyPress', 'onKeyUp'],
function(name, index) {
    QZFL.ElementHandler.prototype[name] = function(fn) {
        return this.bind(name.slice(2).toLowerCase(), fn);
    };
});
QZFL.element.extendFn({
    setHtml: function(value) {
        return this.setAttr("innerHTML", value);
    },
    getHtml: function(index) {
        var _e = this.elements[index || 0];
        return !! _e ? _e.innerHTML: null;
    },
    setVal: function(value) {
        if (QZFL.object.getType(value) == "array") {
            var _v = "\x00" + value.join("\x00") + "\x00";
            this.each(function(el) {
                if (/radio|checkbox/.test(el.type)) {
                    el.checked = el.nodeType && ("\x00" + _v.indexOf(el.value.toString() + "\x00") > -1 || _v.indexOf("\x00" + el.name.toString() + "\x00") > -1);
                } else if (el.tagName == "SELECT") {
                    QZFL.object.each(el.options,
                    function(e) {
                        e.selected = e.nodeType == 1 && ("\x00" + _v.indexOf(e.value.toString() + "\x00") > -1 || _v.indexOf("\x00" + e.text.toString() + "\x00") > -1);
                    });
                } else {
                    el.value = value;
                }
            })
        } else {
            this.setAttr("value", value);
        }
        return this;
    },
    getVal: function(index) {
        var _e = this.elements[index || 0],
        _v;
        if (_e) {
            if (_e.tagName == "SELECT") {
                _v = [];
                if (_e.selectedIndex < 0) {
                    return null;
                }
                if (_e.type == "select-one") {
                    _v.push(_e.value);
                } else {
                    QZFL.object.each(_e.options,
                    function(e) {
                        if (e.nodeType == 1 && e.selected) {
                            _v.push(e.value);
                        }
                    });
                }
            } else {
                _v = _e.value;
            }
        } else {
            return null
        }
        return _v;
    },
    hasClass: function(className) {
        if (this.elements && this.elements.length) {
            return QZFL.css.hasClassName(this.elements[0], className);
        }
        return false;
    },
    addClass: function(className) {
        return this.each(function(el) {
            QZFL.css.addClassName(el, className);
        })
    },
    removeClass: function(className) {
        return this.each(function(el) {
            QZFL.css.removeClassName(el, className);
        })
    },
    toggleClass: function(className) {
        return this.each(function(el) {
            QZFL.css.toggleClassName(el, className);
        })
    },
    getSize: function(index) {
        var _e = this.elements[index || 0];
        return !! _e ? QZFL.dom.getSize(_e) : null;
    },
    getXY: function(index) {
        var _e = this.elements[index || 0];
        return !! _e ? QZFL.dom.getXY(_e) : null;
    },
    setSize: function(width, height) {
        return this.each(function(el) {
            QZFL.dom.setSize(el, width, height);
        })
    },
    setXY: function(X, Y) {
        return this.each(function(el) {
            QZFL.dom.setXY(el, X, Y);
        })
    },
    hide: function() {
        return this.each(function(el) {
            QZFL.dom.setStyle(el, "display", "none");
        })
    },
    show: function(isBlock) {
        return this.each(function(el) {
            QZFL.dom.setStyle(el, "display", isBlock ? 'block': '');
        })
    },
    getStyle: function(key, index) {
        var _e = this.elements[index || 0];
        return !! _e ? QZFL.dom.getStyle(_e, key) : null;
    },
    setStyle: function(key, value) {
        return this.each(function(el) {
            QZFL.dom.setStyle(el, key, value);
        })
    },
    setAttr: function(key, value) {
        key = (key == "class" ? "className": key);
        return this.each(function(el) {
            el[key] = value;
        });
    },
    getAttr: function(key, index) {
        key = (key == "class" ? "className": key);
        var _e = this.elements[index || 0];
        return !! _e ? (_e[key] || _e.getAttribute(key)) : null;
    }
});
QZFL.element.extendFn({
    getPrev: function() {
        var _arr = [];
        this.each(function(el) {
            var _e = QZFL.dom.getPreviousSibling(el);
            _arr.push(_e);
        });
        return QZFL.element.get(_arr);
    },
    getNext: function() {
        var _arr = [];
        this.each(function(el) {
            var _e = QZFL.dom.getNextSibling(el);
            _arr.push(_e);
        });
        return QZFL.element.get(_arr);
    },
    getChildren: function() {
        var _arr = [];
        this.each(function(el) {
            var node = QZFL.dom.getFirstChild(el);
            while (node) {
                if ( !! node && node.nodeType == 1) {
                    _arr.push(node);
                }
                node = node.nextSibling;
            }
        });
        return QZFL.element.get(_arr);
    },
    getParent: function() {
        var _arr = [];
        this.each(function(el) {
            var _e = el.parentNode;
            _arr.push(_e);
        });
        return QZFL.element.get(_arr);
    }
});
QZFL.element.extendFn({
    create: function(tagName, attributes) {
        var _arr = [];
        this.each(function(el) {
            _arr.push(QZFL.dom.createElementIn(tagName, el, false, attributes));
        });
        return QZFL.element.get(_arr);
    },
    appendTo: function(el) {
        var el = (el.elements && el.elements[0]) || QZFL.dom.get(el);
        return this.each(function(element) {
            el.appendChild(element)
        });
    },
    insertAfter: function(el) {
        var el = (el.elements && el.elements[0]) || QZFL.dom.get(el),
        _ns = el.nextSibling,
        _p = el.parentNode;
        return this.each(function(element) {
            _p[!_ns ? "appendChild": "insertBefore"](element, _ns);
        });
    },
    insertBefore: function(el) {
        var el = (el.elements && el.elements[0]) || QZFL.dom.get(el),
        _p = el.parentNode;
        return this.each(function(element) {
            _p.insertBefore(element, el)
        });
    },
    remove: function() {
        return this.each(function(el) {
            QZFL.dom.removeElement(el);
        })
    }
});
QZFL.queue = (function() {
    var _o = QZFL.object;
    var _queue = {};
    var _Queue = function(key, queue) {
        if (this instanceof arguments.callee) {
            this._qz_queuekey = key;
            return this;
        }
        if (_o.getType(queue = queue || []) == "array") {
            _queue[key] = queue;
        }
        return new _Queue(key);
    };
    var _extend = {
        push: function(key, fn) {
            fn = this._qz_queuekey ? key: fn;
            _queue[this._qz_queuekey || key].push(fn);
        },
        shift: function(key) {
            var _q = _queue[this._qz_queuekey || key];
            if (_q) {
                return QZFL.queue._exec(_q.shift());
            }
        },
        getLen: function(key) {
            return _queue[this._qz_queuekey || key].length;
        },
        run: function(key) {
            var _q = _queue[this._qz_queuekey || key];
            if (_q) {
                _o.each(_q, QZFL.queue._exec);
            }
        },
        timedChunk: function(key, conf) {
            var _q = _queue[this._qz_queuekey || key],
            _conf;
            if (_q) {
                _conf = QZFL.lang.propertieCopy(conf, QZFL.queue._tcCof, null, true);
                setTimeout(function() {
                    var _start = +new Date();
                    do {
                        QZFL.queue.shift(key);
                    } while ( QZFL . queue . getLen ( key ) > 0 && ( + new Date() - _start < _conf.runTime));
                    if (QZFL.queue.getLen(key) > 0) {
                        setTimeout(arguments.callee, _conf.waitTime);
                        _conf.onWait();
                    } else {
                        _conf.onRunEnd();
                    }
                },
                0);
            }
        },
        _tcCof: {
            'runTime': 50,
            'waitTime': 25,
            'onRunEnd': QZFL.emptyFn,
            'onWait': QZFL.emptyFn
        },
        _exec: function(value, key, source) {
            if (!value || _o.getType(value) != "function") {
                if (_o.getType(key) == "number") {
                    source[key] = null;
                }
                return false;
            }
            try {
                return value();
            } catch(e) {
                QZFL.console.print("QZFL Queue Got An Error: [" + e.name + "]  " + e.message, 1)
            }
        }
    };
    _o.extend(_Queue.prototype, _extend);
    _o.extend(_Queue, _extend);
    return _Queue;
})();
QZFL.string = {
    RegExps: {
        trim: /^\s+|\s+$/g,
        ltrim: /^\s+/,
        rtrim: /\s+$/,
        nl2br: /\n/g,
        s2nb: /[\x20]{2}/g,
        URIencode: /[\x09\x0A\x0D\x20\x21-\x29\x2B\x2C\x2F\x3A-\x3F\x5B-\x5E\x60\x7B-\x7E]/g,
        escHTML: {
            re_amp: /&/g,
            re_lt: /</g,
            re_gt: />/g,
            re_apos: /\x27/g,
            re_quot: /\x22/g
        },
        escString: {
            bsls: /\\/g,
            nl: /\n/g,
            rt: /\r/g,
            tab: /\t/g
        },
        restXHTML: {
            re_amp: /&amp;/g,
            re_lt: /&lt;/g,
            re_gt: /&gt;/g,
            re_apos: /&(?:apos|#0?39);/g,
            re_quot: /&quot;/g
        },
        write: /\{(\d{1,2})(?:\:([xodQqb]))?\}/g,
        isURL: /^(?:ht|f)tp(?:s)?\:\/\/(?:[\w\-\.]+)\.\w+/i,
        cut: /[\x00-\xFF]/,
        getRealLen: {
            r0: /[^\x00-\xFF]/g,
            r1: /[\x00-\xFF]/g
        },
        format: /\{([\d\w\.]+)\}/g
    },
    commonReplace: function(s, p, r) {
        return s.replace(p, r);
    },
    listReplace: function(s, l) {
        if (QZFL.lang.isHashMap(l)) {
            for (var i in l) {
                s = QZFL.string.commonReplace(s, l[i], i);
            }
            return s;
        } else {
            return s + '';
        }
    },
    trim: function(str) {
        return QZFL.string.commonReplace(str + "", QZFL.string.RegExps.trim, '');
    },
    ltrim: function(str) {
        return QZFL.string.commonReplace(str + "", QZFL.string.RegExps.ltrim, '');
    },
    rtrim: function(str) {
        return QZFL.string.commonReplace(str + "", QZFL.string.RegExps.rtrim, '');
    },
    nl2br: function(str) {
        return QZFL.string.commonReplace(str + "", QZFL.string.RegExps.nl2br, '<br />');
    },
    s2nb: function(str) {
        return QZFL.string.commonReplace(str + "", QZFL.string.RegExps.s2nb, '&nbsp;&nbsp;');
    },
    URIencode: function(str) {
        var cc, ccc;
        return (str + "").replace(QZFL.string.RegExps.URIencode,
        function(a) {
            if (a == "\x20") {
                return "+";
            } else if (a == "\x0D") {
                return "";
            }
            cc = a.charCodeAt(0);
            ccc = cc.toString(16);
            return "%" + ((cc < 16) ? ("0" + ccc) : ccc);
        });
    },
    escHTML: function(str) {
        var t = QZFL.string.RegExps.escHTML;
        return QZFL.string.listReplace((str + ""), {
            '&amp;': t.re_amp,
            '&lt;': t.re_lt,
            '&gt;': t.re_gt,
            '&#039;': t.re_apos,
            '&quot;': t.re_quot
        });
    },
    escString: function(str) {
        var t = QZFL.string.RegExps.escString,
        h = QZFL.string.RegExps.escHTML;
        return QZFL.string.listReplace((str + ""), {
            '\\\\': t.bsls,
            '\\n': t.nl,
            '': t.rt,
            '\\t': t.tab,
            '\\\'': h.re_apos,
            '\\"': h.re_quot
        });
    },
    restHTML: function(str) {
        if (!QZFL.string.restHTML.__utilDiv) {
            QZFL.string.restHTML.__utilDiv = document.createElement("div");
        }
        var t = QZFL.string.restHTML.__utilDiv;
        t.innerHTML = (str + "");
        if (typeof(t.innerText) != 'undefined') {
            return t.innerText;
        } else if (typeof(t.textContent) != 'undefined') {
            return t.textContent;
        } else if (typeof(t.text) != 'undefined') {
            return t.text;
        } else {
            return '';
        }
    },
    restXHTML: function(str) {
        var t = QZFL.string.RegExps.restXHTML;
        return QZFL.string.listReplace((str + ""), {
            '<': t.re_lt,
            '>': t.re_gt,
            '\x27': t.re_apos,
            '\x22': t.re_quot,
            '&': t.re_amp
        });
    },
    write: function(strFormat, someArgs) {
        if (arguments.length < 1 || !QZFL.lang.isString(strFormat)) {
            return '';
        }
        var rArr = QZFL.lang.arg2arr(arguments),
        result = rArr.shift(),
        tmp;
        return result.replace(QZFL.string.RegExps.write,
        function(a, b, c) {
            b = parseInt(b, 10);
            if (b < 0 || (typeof rArr[b] == 'undefined')) {
                return '(n/a)';
            } else {
                if (!c) {
                    return rArr[b];
                } else {
                    switch (c) {
                    case 'x':
                        return '0x' + rArr[b].toString(16);
                    case 'o':
                        return 'o' + rArr[b].toString(8);
                    case 'd':
                        return rArr[b].toString(10);
                    case 'Q':
                        return '\x22' + rArr[b].toString(16) + '\x22';
                    case 'q':
                        return '`' + rArr[b].toString(16) + '\x27';
                    case 'b':
                        return '<' + !!rArr[b] + '>';
                    }
                }
            }
        });
    },
    isURL: function(s) {
        return QZFL.string.RegExps.isURL.test(s);
    },
    customEncode: function(s, type) {
        var r;
        if (typeof type == 'undefined') {
            type = '';
        }
        switch (type.toUpperCase()) {
        case "URICPT":
            r = encodeURIComponent(s);
            break;
        default:
            r = encodeURIComponent(s);
        }
        return r;
    },
    escapeURI: function(s) {
        if (window.encodeURIComponent) {
            return encodeURIComponent(s);
        }
        if (window.escape) {
            return escape(s);
        }
        return '';
    },
    fillLength: function(source, length, ch, isRight) {
        source = source + '';
        if (source.length < length) {
            var res = (1 << (length - source.length)).toString(2).substring(1);
            if (ch) {
                res = res.replace("0", ch);
            }
            return isRight ? (source + res) : (res + source);
        } else {
            return source;
        }
    },
    cut: function(str, bitLen, tails) {
        str += '';
        bitLen -= 0;
        tails = tails || '';
        if (isNaN(bitLen)) {
            return str;
        }
        var len = str.length,
        i = Math.min(Math.floor(bitLen / 2), len),
        cnt = QZFL.string.getRealLen(str.slice(0, i));
        for (; i < len && cnt < bitLen; i++) {
            cnt += 1 + !QZFL.string.RegExps.cut.test(str.charAt(i));
        }
        return str.slice(0, cnt > bitLen ? i - 1 : i) + (i < len ? tails: '');
    },
    getRealLen: function(s, isUTF8) {
        if (typeof(s) != 'string') {
            return 0;
        }
        if (!isUTF8) {
            return s.replace(QZFL.string.RegExps.getRealLen.r0, "**").length;
        } else {
            var cc = s.replace(QZFL.string.RegExps.getRealLen.r1, "");
            return (s.length - cc.length) + (encodeURI(cc).length / 3);
        }
    },
    format: function(str) {
        var args = Array.prototype.slice.call(arguments),
        v;
        str = args.shift() + '';
        if (args.length == 1 && typeof(args[0]) == 'object') {
            args = args[0];
        }
        QZFL.string.RegExps.format.lastIndex = 0;
        return str.replace(QZFL.string.RegExps.format,
        function(m, n) {
            v = QZFL.object.route(args, n);
            return v === undefined ? m: v;
        });
    }
};
QZFL.util = {
    buildUri: function(s) {
        return new QZFL.util.URI(s);
    },
    URI: function(s) {
        if (! (QZFL.object.getType(s) == "string")) {
            return null;
        }
        if (s.indexOf("://") < 1) {
            s = location.protocol + "//" + location.host + (s.indexOf("/") == 0 ? "": location.pathname.substr(0, location.pathname.lastIndexOf("/") + 1)) + s;
        }
        var depart = s.split("://");
        if (QZFL.object.getType(depart) == "array" && depart.length > 1 && (/^[a-zA-Z]+$/).test(depart[0])) {
            this.protocol = depart[0].toLowerCase();
            var h = depart[1].split("/");
            if (QZFL.object.getType(h) == "array") {
                this.host = h[0];
                this.pathname = "/" + h.slice(1).join("/").replace(/(\?|\#).+/i, "");
                this.href = s;
                var se = depart[1].lastIndexOf("?"),
                ha = depart[1].lastIndexOf("#");
                this.search = (se >= 0) ? depart[1].substring(se) : "";
                this.hash = (ha >= 0) ? depart[1].substring(ha) : "";
                if (this.search.length > 0 && this.hash.length > 0) {
                    if (ha < se) {
                        this.search = "";
                    } else {
                        this.search = depart[1].substring(se, ha);
                    }
                }
                return this;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
};
QZFL.Tween = function(el, property, func, startValue, finishValue, duration) {
    this._func = func || QZFL.transitions.simple;
    this._obj = QZFL.dom.get(el);
    this.isColor = /^#/.test(startValue);
    this._prop = property;
    var reSuffix = /\d+([a-z%]+)/i.exec(startValue);
    this._suffix = reSuffix ? reSuffix[1] : "";
    this._startValue = this.isColor ? 0 : parseFloat(startValue);
    this._finishValue = this.isColor ? 100 : parseFloat(finishValue);
    if (this.isColor) {
        this._startColor = QZFL.css.convertHexColor(startValue);
        this._finishColor = QZFL.css.convertHexColor(finishValue);
    }
    this._duration = duration || 10;
    this._timeCount = 0;
    this._startTime = 0;
    this._changeValue = this._finishValue - this._startValue;
    this.currentValue = 0;
    this.isPlayed = false;
    this.isLoop = false;
    this.onMotionStart = QZFL.emptyFn;
    this.onMotionChange = QZFL.emptyFn;
    this.onMotionStop = QZFL.emptyFn;
};
QZFL.Tween.prototype.start = function(loop) {
    this._reloadTimer();
    this.isPlayed = true;
    this._runTime();
    this.isLoop = loop ? true: false;
    this.onMotionStart.apply(this);
    return "d"
};
QZFL.Tween.prototype.pause = function() {
    this.isPlayed = false;
};
QZFL.Tween.prototype.stop = function() {
    this.isPlayed = false;
    this._playTime(this._duration + 0.1);
};
QZFL.Tween.prototype._reloadTimer = function() {
    this._startTime = new Date().getTime() - this._timeCount * 1000;
};
QZFL.Tween.prototype._playTime = function(time) {
    var _isEnd = false;
    if (time > this._duration) {
        time = this._duration;
        _isEnd = true;
    }
    var pValue = this._func(time, this._startValue, this._changeValue, this._duration);
    this.currentValue = /(opacity)/i.test(this._prop) ? pValue: Math.round(pValue);
    if (this.isColor) {
        this.currentValue = QZFL.Tween.getColor(this._startColor, this._finishColor, pValue);
    }
    var _try2setCSS = QZFL.dom.setStyle(this._obj, this._prop, this.currentValue + this._suffix);
    if (!_try2setCSS) {
        this._obj[this._prop] = this.currentValue + this._suffix;
    }
    this.onMotionChange.apply(this, [this._obj, this._prop, this.currentValue]);
    if (_isEnd) {
        this.isPlayed = false;
        if (this.isLoop) {
            this.isPlayed = true;
            this._reloadTimer();
        }
        this.onMotionStop.apply(this);
        if (window.CollectGarbage) {
            CollectGarbage();
        }
    }
};
QZFL.Tween.prototype._runTime = function() {
    var o = this;
    if (o.isPlayed) {
        o._playTime((new Date().getTime() - this._startTime) / 1000);
        setTimeout(function() {
            o._runTime.apply(o, [])
        },
        0);
    }
};
QZFL.Tween.prototype.getPercent = function() {
    return (this.currentValue - this._startValue) / this._changeValue * 100;
};
QZFL.Tween.prototype.swapValue = function() {
    if (this.isColor) {
        var tempValue = this._startColor.join(",");
        this._startColor = this._finishColor;
        this._finishColor = tempValue.split(",");
    } else {
        var tempValue = this._startValue;
        this._startValue = this._finishValue;
        this._finishValue = tempValue;
        this._changeValue = this._finishValue - this._startValue;
    }
};
QZFL.Tween.getColor = function(startColor, finishColor, percent) {
    var _sc = startColor,
    _fc = finishColor,
    _color = [];
    if (percent > 100) {
        percent = 100;
    }
    if (percent < 0) {
        percent = 0;
    }
    for (var i = 0; i < 3; i++) {
        _color[i] = Math.floor(_sc[i] * 1 + (percent / 100) * (_fc[i] - _sc[i])).toString(16);
        if (_color[i].length < 2) {
            _color[i] = "0" + _color[i];
        }
    }
    return "#" + _color.join("");
};
QZFL.transitions = {
    simple: function(time, startValue, changeValue, duration) {
        return changeValue * time / duration + startValue;
    },
    regularEaseIn: function(t, b, c, d) {
        return c * (t /= d) * t + b;
    },
    regularEaseOut: function(t, b, c, d) {
        return - c * (t /= d) * (t - 2) + b;
    },
    regularEaseInOut: function(t, b, c, d) {
        if ((t /= d / 2) < 1) {
            return c / 2 * t * t + b;
        }
        return - c / 2 * ((--t) * (t - 2) - 1) + b;
    }
};; (function() {
    var _easeAnimate = function(_t, a1, a2, ease) {
        var _s = QZFL.dom["get" + _t](this),
        _reset = typeof a1 != "number" && typeof a2 != "number";
        if (_t == "Size" && _reset) {
            QZFL.dom["set" + _t](this, a1, a2);
            var _s1 = QZFL.dom["get" + _t](this);
            a1 = _s1[0];
            a2 = _s1[1];
        }
        var _v1 = _s[0] - a1;
        var _v2 = _s[1] - a2;
        var n = new QZFL.Tween(this, "_p", QZFL.transitions[ease] || QZFL.transitions.regularEaseOut, 0, 100, 0.5);
        n.onMotionChange = QZFL.event.bind(this,
        function() {
            var _p = arguments[2];
            QZFL.dom["set" + _t](this, typeof a1 != "number" ? _s[0] : (_s[0] - _p / 100 * _v1), typeof a2 != "number" ? _s[1] : (_s[1] - _p / 100 * _v2));
        });
        if (_t == "Size" && _reset) {
            n.onMotionStop = QZFL.event.bind(this,
            function() {
                QZFL.dom["set" + _t](this);
            });
        }
        n.start();
    };
    var _easeShowAnimate = function(_t, ease) {
        var n = new QZFL.Tween(this, "opacity", QZFL.transitions[ease] || QZFL.transitions.regularEaseOut, (_t ? 0 : 1), (_t ? 1 : 0), 0.5);
        n[_t ? "onMotionStart": "onMotionStop"] = QZFL.event.bind(this,
        function() {
            this.style.display = _t ? "": "none";
            QZFL.dom.setStyle(this, "opacity", 1);
        });
        n.start();
    };
    var _easeScroll = function(top, left, ease) {
        if (this.nodeType == 9) {
            var _stl = [QZFL.dom.getScrollTop(this), QZFL.dom.getScrollLeft(this)];
        } else {
            var _stl = [this.scrollTop, this.scrollLeft];
        }
        var _st = _stl[0] - top;
        var _sl = _stl[1] - left;
        var n = new QZFL.Tween(this, "_p", QZFL.transitions[ease] || QZFL.transitions.regularEaseOut, 0, 100, 0.5);
        n.onMotionChange = QZFL.event.bind(this,
        function() {
            var _p = arguments[2],
            _t = (_stl[0] - _p / 100 * _st),
            _l = (_stl[1] - _p / 100 * _sl);
            if (this.nodeType == 9) {
                QZFL.dom.setScrollTop(_t, this);
                QZFL.dom.setScrollLeft(_l, this);
            } else {
                this.scrollTop = _t;
                this.scrollLeft = _l;
            }
        });
        n.start();
    };
    QZFL.element.extendFn({
        tween: function() {},
        effectShow: function(effect, ease) {
            this.each(function(el) {
                _easeShowAnimate.apply(el, [true, ease])
            });
            if (effect == "resize") {
                this.each(function(el) {
                    _easeAnimate.apply(el, ["Size", null, null, ease])
                });
            }
        },
        effectHide: function(effect, ease) {
            this.each(function(el) {
                _easeShowAnimate.apply(el, [false, ease])
            });
            if (effect == "resize") {
                this.each(function(el) {
                    _easeAnimate.apply(el, ["Size", 0, 0, ease])
                });
            }
        },
        effectResize: function(width, height, ease) {
            this.each(function(el) {
                _easeAnimate.apply(el, ["Size", width, height, ease])
            });
        },
        effectMove: function(x, y, ease) {
            this.each(function(el) {
                _easeAnimate.apply(el, ["XY", x, y, ease])
            });
        },
        effectScroll: function(top, left, ease) {
            this.each(function(el) {
                _easeScroll.apply(el, [top, left, ease])
            });
        }
    })
})();
QZFL.XHR = function(actionURL, cname, method, data, isAsync, nocache) {
    if (!cname) {
        cname = "_xhrInstence_" + (QZFL.XHR.counter + 1);
    }
    var prot;
    if (QZFL.XHR.instance[cname] instanceof QZFL.XHR) {
        prot = QZFL.XHR.instance[cname];
    } else {
        prot = (QZFL.XHR.instance[cname] = this);
        QZFL.XHR.counter++;
    }
    prot._name = cname;
    prot._nc = !!nocache;
    prot._method = (QZFL.object.getType(method) != "string" || method.toUpperCase() != "GET") ? "POST": (method = "GET");
    prot._isAsync = (!(isAsync === false)) ? true: isAsync;
    prot._uri = actionURL;
    prot._data = (QZFL.object.getType(data) == "object" || QZFL.object.getType(data) == 'string') ? data: {};
    prot._sender = null;
    prot._isHeaderSetted = false;
    prot._xmlQueue = QZFL.queue("xhr" + cname, [function() {
        return new XMLHttpRequest();
    },
    function() {
        return new ActiveXObject("Msxml2.XMLHTTP");
    },
    function() {
        return new ActiveXObject("Microsoft.XMLHTTP");
    }]);
    this.onSuccess = QZFL.emptyFn;
    this.onError = QZFL.emptyFn;
    this.charset = "gb2312";
    this.proxyPath = "";
    return prot;
};
QZFL.XHR.instance = {};
QZFL.XHR.counter = 0;
QZFL.XHR._errCodeMap = {
    400 : {
        msg: 'Bad Request'
    },
    401 : {
        msg: 'Unauthorized'
    },
    403 : {
        msg: 'Forbidden'
    },
    404 : {
        msg: 'Not Found'
    },
    999 : {
        msg: 'Proxy page error'
    },
    1000 : {
        msg: 'Bad Response'
    },
    1001 : {
        msg: 'No Network'
    },
    1002 : {
        msg: 'No Data'
    },
    1003 : {
        msg: 'Eval Error'
    }
};
QZFL.XHR.xsend = function(o, uri) {
    if (! (o instanceof QZFL.XHR)) {
        return false;
    }
    if (QZFL.userAgent.firefox && QZFL.userAgent.firefox < 3) {
        return false;
    }
    function clear(obj) {
        try {
            obj._sender = obj._sender.callback = obj._sender.errorCallback = obj._sender.onreadystatechange = null;
        } catch(ignore) {}
        if (QZFL.userAgent.safari || QZFL.userAgent.opera) {
            setTimeout('QZFL.dom.removeElement($("_xsend_frm_' + obj._name + '"))', 50);
        } else {
            QZFL.dom.removeElement($("_xsend_frm_" + obj._name));
        }
    }
    if (o._sender === null || o._sender === void(0)) {
        var sender = document.createElement("iframe");
        sender.id = "_xsend_frm_" + o._name;
        sender.style.width = sender.style.height = sender.style.borderWidth = "0";
        document.body.appendChild(sender);
        sender.callback = QZFL.event.bind(o,
        function(data) {
            o.onSuccess(data);
            clear(o);
        });
        sender.errorCallback = QZFL.event.bind(o,
        function(num) {
            o.onError(QZFL.XHR._errCodeMap[num]);
            clear(o);
        });
        o._sender = sender;
    }
    var tmp = QZFL.config.gbEncoderPath;
    o.GBEncoderPath = tmp ? tmp: "";
    o._sender.src = uri.protocol + "://" + uri.host + (this.proxyPath ? this.proxyPath: "/xhr_proxy_gbk.html");
    return true;
};
QZFL.XHR.genHttpParamString = function(o, cs) {
    cs = (cs || "gb2312").toLowerCase();
    var r = [];
    for (var i in o) {
        r.push(i + "=" + ((cs == "utf-8") ? encodeURIComponent(o[i]) : QZFL.string.URIencode(o[i])));
    }
    return r.join("&");
};
QZFL.XHR.prototype.send = function() {
    if (this._method == 'POST' && this._data == null) {
        return false;
    }
    var u = new QZFL.util.URI(this._uri);
    if (u == null) {
        return false;
    }
    this._uri = u.href;
    if (QZFL.object.getType(this._data) == "object") {
        this._data = QZFL.XHR.genHttpParamString(this._data, this.charset);
    }
    if (this._method == 'GET' && this._data) {
        this._uri += (this._uri.indexOf("?") < 0 ? "?": "&") + this._data;
    }
    if (u.host != location.host) {
        return QZFL.XHR.xsend(this, u);
    }
    if (this._sender === null || this._sender === void(0)) {
        var sender = (function() {
            if (!this._xmlQueue.getLen()) {
                return null;
            }
            var _xhr = this._xmlQueue.shift();
            if (_xhr) {
                return _xhr;
            } else {
                return arguments.callee.call(this);
            }
        }).call(this);
        if (!sender) {
            return false;
        }
        this._sender = sender;
    }
    try {
        this._sender.open(this._method, this._uri, this._isAsync);
    } catch(err) {
        return false;
    }
    if (this._method == 'POST' && !this._isHeaderSetted) {
        this._sender.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        this._isHeaderSetted = true;
    }
    if (this._nc) {
        this._sender.setRequestHeader('If-Modified-Since', 'Thu, 1 Jan 1970 00:00:00 GMT');
        this._sender.setRequestHeader('Cache-Control', 'no-cache');
    }
    this._sender.onreadystatechange = QZFL.event.bind(this,
    function() {
        try {
            if (this._sender.readyState == 4) {
                if (this._sender.status >= 200 && this._sender.status < 300) {
                    this.onSuccess({
                        text: this._sender.responseText,
                        xmlDom: this._sender.responseXML
                    });
                } else {
                    if (QZFL.userAgent.safari && (QZFL.object.getType(this._sender.status) == 'undefined')) {
                        this.onError(QZFL.XHR._errCodeMap[1002]);
                    } else {
                        this.onError(QZFL.XHR._errCodeMap[this._sender.status]);
                    }
                }
                delete this._sender;
                this._sender = null;
            }
        } catch(err) {}
    });
    this._sender.send((this._method == 'POST' ? this._data: void(0)));
    return true;
};
QZFL.XHR.prototype.destroy = function() {
    var n = this._name;
    delete QZFL.XHR.instance[n]._sender;
    QZFL.XHR.instance[n]._sender = null;
    delete QZFL.XHR.instance[n];
    QZFL.XHR.counter--;
    return null;
};
QZFL.FormSender = function(actionURL, method, data, charset) {
    this.name = "_fpInstence_" + QZFL.FormSender.counter;
    QZFL.FormSender.instance[this.name] = this;
    QZFL.FormSender.counter++;
    this.method = method || "POST";
    this.uri = actionURL;
    this.data = (typeof(data) == "object" || typeof(data) == 'string') ? data: null;
    this.proxyURL = (typeof(charset) == 'string' && charset.toUpperCase() == "UTF-8") ? QZFL.config.FSHelperPage.replace(/_gbk/, "_utf8") : QZFL.config.FSHelperPage;
    this._sender = null;
    this.onSuccess = QZFL.emptyFn;
    this.onError = QZFL.emptyFn;
};
QZFL.FormSender.instance = {};
QZFL.FormSender.counter = 0;
QZFL.FormSender._errCodeMap = {
    999 : {
        msg: 'Connection or Server error'
    }
};
QZFL.FormSender.prototype.send = function() {
    if (this.method == 'POST' && this.data == null) {
        return false;
    }
    function clear(o) {
        o._sender = o._sender.callback = o._sender.errorCallback = o._sender.onreadystatechange = null;
        if (QZFL.userAgent.safari || QZFL.userAgent.opera) {
            setTimeout('QZFL.dom.removeElement($("_fp_frm_' + o.name + '"))', 50);
        } else {
            QZFL.dom.removeElement($("_fp_frm_" + o.name));
        }
    }
    if (this._sender === null || this._sender === void(0)) {
        var sender = document.createElement("iframe");
        sender.id = "_fp_frm_" + this.name;
        sender.style.width = sender.style.height = sender.style.borderWidth = "0";
        sender.style.display = "none";
        document.body.appendChild(sender);
        sender.callback = QZFL.event.bind(this,
        function(o) {
            clearInterval(interval);
            this.onSuccess(o);
            clear(this);
        });
        sender.errorCallback = QZFL.event.bind(this,
        function(o) {
            clearInterval(interval);
            this.onError(o);
            clear(this);
        });
        if (typeof sender.onreadystatechange != 'undefined') {
            sender.onreadystatechange = QZFL.event.bind(this,
            function() {
                if (this._sender.readyState == 'complete' && this._sender.submited) {
                    clear(this);
                    this.onError(QZFL.FormSender._errCodeMap[999]);
                }
            });
        } else {
            var interval = setInterval(QZFL.event.bind(this,
            function() {
                try {
                    var _t = this._sender.contentWindow.location.href;
                    if (_t.indexOf(this.uri) == 0) {
                        clearInterval(interval);
                        this.onError(QZFL.FormSender._errCodeMap[999]);
                        clear(this);
                    }
                } catch(err) {
                    clearInterval(interval);
                    this.onError(QZFL.FormSender._errCodeMap[999]);
                    clear(this);
                }
            }), 100);
        }
        this._sender = sender;
    }
    this._sender.src = this.proxyURL;
    return true;
};
QZFL.FormSender.prototype.destroy = function() {
    var n = this.name;
    delete QZFL.FormSender.instance[n]._sender;
    QZFL.FormSender.instance[n]._sender = null;
    delete QZFL.FormSender.instance[n];
    QZFL.FormSender.counter--;
    return null;
};
QZFL.JsLoader = function(isDebug) {
    this.debug = isDebug || (QZFL.config.debugLevel > 1);
    this.onload = QZFL.emptyFn;
    this.onerror = QZFL.emptyFn;
};
QZFL.JsLoader.prototype.load = function(src, doc, opt) {
    var opts = {},
    t = typeof(opt),
    o = this;
    if (t == "string") {
        opts.charset = opt;
    } else if (t == "object") {
        opts = opt;
    }
    opts.charset = opts.charset || "gb2312";
    setTimeout(function() {
        o._load.apply(o, [src, doc || document, opts]);
        o = null;
    },
    0);
};
QZFL.JsLoader.prototype._load = function(src, doc, opts) {
    var _ie = QZFL.userAgent.ie,
    _js = doc.createElement("script"),
    o = this,
    _rm = QZFL.dom.removeElement,
    _ae = QZFL.event.addEvent,
    tmp,
    k;
    _ae(_js, (_ie ? "readystatechange": "load"),
    function() {
        if (!_js || _ie && !(_js.readyState == 'loaded')) {
            return;
        }
        o.onload();
        if (!o.debug) {
            _rm(_js);
        }
        _js = _rm = _ae = o = null;
    });
    if (!_ie) {
        _ae(_js, 'error',
        function() {
            o.onerror();
            if (!o.debug) {
                _rm(_js);
            }
            _js = _rm = _ae = o = null;
        })
    }
    for (k in opts) {
        if (typeof(tmp = opts[k]) == "string" && k.toLowerCase() != "src") {
            _js.setAttribute(k, tmp);
        }
    }
    doc.getElementsByTagName("head")[0].appendChild(_js);
    _js.src = src;
    opts = null;
};
QZFL["js" + "Loader"] = QZFL.JsLoader;
QZFL.JSONGetter = function(actionURL, cname, data, charset, junctionMode) {
    if (QZFL.object.getType(cname) != "string") {
        cname = "_jsonInstence_" + (QZFL.JSONGetter.counter + 1);
    }
    var prot = QZFL.JSONGetter.instance[cname];
    if (prot instanceof QZFL.JSONGetter) {} else {
        QZFL.JSONGetter.instance[cname] = prot = this;
        QZFL.JSONGetter.counter++;
        prot._name = cname;
        prot._sender = null;
        prot._timer = null;
        this.onSuccess = QZFL.emptyFn;
        this.onError = QZFL.emptyFn;
        this.onTimeout = QZFL.emptyFn;
        this.timeout = 5000;
        this.clear = QZFL.emptyFn;
        this._baseClear = function() {
            this._waiting = false;
            this._squeue = [];
            this._equeue = [];
            this.onSuccess = this.onError = QZFL.emptyFn;
            this.clear = null;
        };
    }
    prot._uri = actionURL;
    prot._data = (data && (QZFL.object.getType(data) == "object" || QZFL.object.getType(data) == "string")) ? data: null;
    prot._charset = (QZFL.object.getType(charset) != 'string') ? QZFL.config.defaultDataCharacterSet: charset;
    prot._jMode = !!junctionMode;
    return prot;
};
QZFL.JSONGetter.instance = {};
QZFL.JSONGetter.counter = 0;
QZFL.JSONGetter._errCodeMap = {
    999 : {
        msg: 'Connection or Server error.'
    },
    998 : {
        msg: 'Connection to Server timeout.'
    }
};
QZFL.JSONGetter.genHttpParamString = function(o) {
    var r = [];
    for (var i in o) {
        r.push(i + "=" + encodeURIComponent(o[i]));
    }
    return r.join("&");
};
QZFL.JSONGetter.prototype.addOnSuccess = function(f) {
    if (typeof(f) == "function") {
        if (this._squeue && this._squeue.push) {} else {
            this._squeue = [];
        }
        this._squeue.push(f);
    }
};
QZFL.JSONGetter._runFnQueue = function(q, resultArgs, th) {
    var f;
    if (q && q.length) {
        while (q.length > 0) {
            f = q.shift();
            if (typeof(f) == "function") {
                f.apply(th ? th: null, resultArgs);
            }
        }
    }
};
QZFL.JSONGetter.prototype.addOnError = function(f) {
    if (typeof(f) == "function") {
        if (this._equeue && this._equeue.push) {} else {
            this._equeue = [];
        }
        this._equeue.push(f);
    }
};
QZFL.JSONGetter.prototype.send = function(callbackFnName) {
    if (this._waiting) {
        return;
    }
    var cfn = (QZFL.object.getType(callbackFnName) != 'string') ? "callback": callbackFnName,
    clear,
    da = this._uri;
    if (this._data) {
        if (QZFL.object.getType(this._data) == "object") {
            da += ((da.indexOf("?") < 0 ? "?": "&") + QZFL.JSONGetter.genHttpParamString(this._data));
        } else {
            da += ((da.indexOf("?") < 0 ? "?": "&") + this._data);
        }
    }
    if (this._jMode) {
        window[cfn] = this.onSuccess;
        var _sd = new QZFL.JsLoader();
        _sd.onerror = this.onError;
        _sd.load(da, void(0), this._charset);
        return;
    }
    this._timer = setTimeout((function(th) {
        return function() {
            th.onTimeout();
        };
    })(this), this.timeout);
    if (QZFL.userAgent.ie) {
        if (QZFL.userAgent.ie < 9 && QZFL.userAgent.beta) {
            var _hf = new ActiveXObject("htmlfile");
            this.clear = clear = function(o) {
                clearTimeout(o._timer);
                if (o._sender) {
                    o._sender.close();
                    o._sender.parentWindow[cfn] = o._sender.parentWindow["errorCallback"] = null;
                    o._sender = null;
                }
                o._baseClear();
            };
            this._sender = _hf;
            var _cb = (function(th) {
                return (function() {
                    setTimeout((function(_o, _a) {
                        return (function() {
                            th._waiting = false;
                            _o.onSuccess.apply(_o, _a);
                            QZFL.JSONGetter._runFnQueue(th._squeue, _a, th);
                            clear(_o);
                        })
                    })(th, arguments), 0);
                });
            })(this);
            var _ecb = (function(th) {
                return (function() {
                    th._waiting = false;
                    var _eo = QZFL.JSONGetter._errCodeMap[999];
                    th.onError(_eo);
                    QZFL.JSONGetter._runFnQueue(th._equeue, [_eo], th);
                    clear(th);
                });
            })(this);
            _hf.open();
            _hf.parentWindow[cfn] = function() {
                _cb.apply(null, arguments);
            };
            _hf.parentWindow["errorCallback"] = _ecb;
            this._waiting = true;
            _hf.write("<script src=\"" + da + "\" charset=\"" + this._charset + "\"><\/script><script defer>setTimeout(\"try{errorCallback();}catch(ign){}\",0)<\/script>");
        } else {
            var df = document.createDocumentFragment(),
            sender = (QZFL.userAgent.ie == 9 ? document: df).createElement("script");
            sender.charset = this._charset;
            this._senderDoc = df;
            this._sender = sender;
            this.clear = clear = function(o) {
                clearTimeout(o._timer);
                if (o._sender) {
                    o._sender.onreadystatechange = null;
                }
                df = o._senderDoc = o._sender = null;
                o._baseClear();
            };
            df[cfn] = (function(th) {
                return (function() {
                    th._waiting = false;
                    th.onSuccess.apply(th, arguments);
                    QZFL.JSONGetter._runFnQueue(th._squeue, arguments, th);
                    clear(th);
                });
            })(this);
            sender.onreadystatechange = (function(th) {
                return (function() {
                    if (th._sender && th._sender.readyState == "loaded") {
                        try {
                            th._waiting = false;
                            var _eo = QZFL.JSONGetter._errCodeMap[999];
                            th.onError(_eo);
                            QZFL.JSONGetter._runFnQueue(th._equeue, [_eo], th);
                            clear(th);
                        } catch(ignore) {}
                    }
                });
            })(this);
            this._waiting = true;
            df.appendChild(sender);
            this._sender.src = da;
        }
    } else {
        this.clear = clear = function(o) {
            clearTimeout(o._timer);
            if (o._sender) {
                o._sender.src = "about:blank";
                o._sender = o._sender.callback = o._sender.errorCallback = null;
            }
            if (QZFL.userAgent.safari || QZFL.userAgent.opera) {
                setTimeout('QZFL.dom.removeElement($("_JSON_frm_' + o._name + '"))', 50);
            } else {
                QZFL.dom.removeElement($("_JSON_frm_" + o._name));
            }
            o._baseClear();
        };
        var _cb = (function(th) {
            return (function() {
                th._waiting = false;
                th.onSuccess.apply(th, arguments);
                QZFL.JSONGetter._runFnQueue(th._squeue, arguments, th);
                clear(th);
            });
        })(this);
        var _ecb = (function(th) {
            return (function() {
                th._waiting = false;
                var _eo = QZFL.JSONGetter._errCodeMap[999];
                th.onError(_eo);
                QZFL.JSONGetter._runFnQueue(th._equeue, [_eo], th);
                clear(th);
            });
        })(this);
        var frm = document.createElement("iframe");
        frm.id = "_JSON_frm_" + this._name;
        frm.style.width = frm.style.height = frm.style.borderWidth = "0";
        this._sender = frm;
        var _dm = (document.domain == location.host) ? '': 'document.domain="' + document.domain + '";',
        dout = '<html><head><meta http-equiv="Content-type" content="text/html; charset=' + this._charset + '"/></head><body><script>' + _dm + ';function ' + cfn + '(){frameElement.callback.apply(null, arguments);}<\/script><script charset="' + this._charset + '" src="' + da + '"><\/script><script>setTimeout(frameElement.errorCallback,50);<\/script></body></html>';
        frm.callback = _cb;
        frm.errorCallback = _ecb;
        this._waiting = true;
        if (QZFL.userAgent.chrome || QZFL.userAgent.opera || QZFL.userAgent.firefox < 3) {
            frm.src = "javascript:'" + QZFL.string.escString(dout) + "'";
            document.body.appendChild(frm);
        } else {
            document.body.appendChild(frm);
            frm.contentWindow.document.open('text/html');
            frm.contentWindow.document.write(dout);
            frm.contentWindow.document.close();
        }
    }
};
QZFL.JSONGetter.prototype.destroy = function() {
    var n = this._name;
    delete QZFL.JSONGetter.instance[n]._sender;
    QZFL.JSONGetter.instance[n]._sender = null;
    delete QZFL.JSONGetter.instance[n];
    QZFL.JSONGetter.counter--;
    return null;
};
QZFL.cookie = {
    set: function(name, value, domain, path, hour) {
        if (hour) {
            var expire = new Date();
            expire.setTime(expire.getTime() + 3600000 * hour);
        }
        document.cookie = name + "=" + value + "; " + (hour ? ("expires=" + expire.toGMTString() + "; ") : "") + (path ? ("path=" + path + "; ") : "path=/; ") + (domain ? ("domain=" + domain + ";") : ("domain=" + QZFL.config.domainPrefix + ";"));
        return true;
    },
    get: function(name) {
        var r = new RegExp("(?:^|;+|\\s+)" + name + "=([^;]*)"),
        m = document.cookie.match(r);
        return (!m ? "": m[1]);
    },
    del: function(name, domain, path) {
        document.cookie = name + "=; expires=Mon, 26 Jul 1997 05:00:00 GMT; " + (path ? ("path=" + path + "; ") : "path=/; ") + (domain ? ("domain=" + domain + ";") : ("domain=" + QZFL.config.domainPrefix + ";"));
    }
};
QZFL.object.map(QZFL.lang || {});
var ua = window.ua || QZFL.userAgent,
$e = QZFL.element.get,
$ = QZFL.dom.get,
removeNode = QZFL.dom.removeElement,
ENV = QZFL.enviroment,
addEvent = QZFL.event.addEvent,
removeEvent = QZFL.event.removeEvent,
getEvent = QZFL.event.getEvent;
/*  |xGv00|d51da75a06d01156c247490db165a7cb */
