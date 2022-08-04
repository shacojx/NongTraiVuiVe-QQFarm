
var tabs = [];
var contentDiv = SQuery('#help_content');

function generateTabs() {
	var tabsContainter = SQuery('#help_tabs');
	for(var i=0; i<helpContent.length; ++i) {
		var t = document.createElement('span');
		t.innerHTML = ['<a id="', helpContent[i].id, '" href="javascript:;" onclick="return false;">', helpContent[i].kind ,'</a>'].join('');
		tabs.push(t);
		if(i) {
			tabsContainter.appendChild(document.createTextNode('|'));
		}
		tabsContainter.appendChild(t);
		SQuery.addEvent(t, 'click', (function(a) {
				return function(evt) {
					clearTags();
					tabs[a].style.fontWeight = "bold";
					contentDiv.innerHTML = '';
					generateContent(a);
				}
			})(i)
		);
	}
}

function generateContent(id) {
	for(var i=0; i<helpContent[id].content.length; i+=2) {
		generateItem({
			title : helpContent[id].content[i], 
			content : ['<p>', helpContent[id].content[i+1], '</p>'].join(''),
			show : Boolean(i / 2 < 5)
		});
	}
}

function generateItem(dp) {
	var dd = document.createElement('dd');
	dd.style.display = dp.show ? '' : 'none';
	dd.innerHTML = dp.content;
	var dt = document.createElement('dt');
	dt.innerHTML = [
		'<a href="javascript:;" onclick="return false;">',
		dp.title,
		dp.show ? '<span class="help_show_icon">' : '<span class="help_hide_icon">',
		'&nbsp;&nbsp;&nbsp;&nbsp;</span></a>'
	].join('');
	var a = dt.getElementsByTagName('a')[0];
	var btn = dt.getElementsByTagName('span')[0];
	var f = function(evt) {
		if(dd.style.display != 'none'){
			dd.style.display = 'none'
			btn.className = 'help_hide_icon';
		}
		else {
			dd.style.display = ''
			btn.className = 'help_show_icon';
		}
	}
	SQuery.addEvent(a, 'click', f);
	contentDiv.appendChild(dt);
	contentDiv.appendChild(dd);
}

function clearTags() {
	for(var i=tabs.length-1; i>=0; --i) {
		tabs[i].style.fontWeight = '';
	}
}
