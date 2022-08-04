/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: script_manage.js 11845 2009-03-26 08:00:50Z liguode $
*/

function validate_ajax(obj) {
    var subject = $('subject');
    if (subject) {
    	var slen = strlen(subject.value);
        if (slen < 1 || slen > 80) {
            alert("Title should be between min 1~ Max 80 Characters");
            subject.focus();
            return false;
        }
    }
    
    if($('seccode')) {
		var code = $('seccode').value;
		var x = new Ajax();
		x.get('cp.php?ac=common&op=seccode&code=' + code, function(s){
			s = trim(s);
			if(s.indexOf('succeed') == -1) {
				alert(s);
				$('seccode').focus();
           		return false;
			} else {
				edit_save();
				obj.form.submit();
				return true;
			}
		});
    } else {
    	edit_save();
    	obj.form.submit();
    	return true;
    }
}

function validate(obj) {
    var subject = $('subject');
    if (subject) {
    	var slen = strlen(subject.value);
        if (slen < 1 || slen > 80) {
            alert("Title must be between min 1~ Max 80 Characters");
            subject.focus();
            return false;
        }
    }
    
    var makefeed = $('makefeed');
    if(makefeed) {
    	if(makefeed.checked == false) {
    		if(!confirm("Note: Are you sure you do not want Feed? \n via feed friends can get the real time update")) {
    			return false;
    		}
    	}
    }

    if($('seccode')) {
		var code = $('seccode').value;
		var x = new Ajax();
		x.get('cp.php?ac=common&op=seccode&code=' + code, function(s){
			s = trim(s);
			if(s.indexOf('succeed') == -1) {
				alert(s);
				$('seccode').focus();
           		return false;
			} else {
				uploadEdit(obj);
				return true;
			}
		});
    } else {
    	uploadEdit(obj);
    	return true;
    }
}

function edit_album_show(id) {
	var obj = $('uchome-edit-'+id);
	if(id == 'album') {
		$('uchome-edit-pic').style.display = 'none';
	}
	if(id == 'pic') {
		$('uchome-edit-album').style.display = 'none';
	}
	if(obj.style.display == '') {
		obj.style.display = 'none';
	} else {
		obj.style.display = '';
	}
}
