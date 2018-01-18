	function set_chbtn ( d ) {
	    var theclass = document.getElementById(d);
	    if (theclass.className == d) {
    		theclass.setAttribute("class",d+"x");
    		theclass.setAttribute("className",d+"x");
	    } else if (theclass.className == d+"x") {
    		theclass.setAttribute("class",d);
    		theclass.setAttribute("className",d);
	    }
	} 
	function ch_share() {
	    var params = Form.serialize($('chshareform'));
	    new Ajax.Updater('chshareresp', baseurl+'modules/channels/ch_share.php', {asynchronous:true, parameters:params});
	}
	function set_subscription(type, username, userid) {
	    var params = Form.serialize($('chsubsform'));
	    new Ajax.Updater('subsrespdiv', baseurl+'modules/channels/ch_act.php?type='+type+'&userid='+userid+'&username='+username, {asynchronous:true, parameters:params});
	}
	function ch_act(d) {
	    if ( d == 'block' ) { 
		var params = Form.serialize($('chblockform'));
		new Ajax.Updater('chblockresp', baseurl+'modules/channels/ch_act.php?type=block', {asynchronous:true, parameters:params});
	    } else if ( d == 'friend' ) { 
		var params = Form.serialize($('chfriendform'));
		new Ajax.Updater('chfriendresp', baseurl+'modules/channels/ch_act.php?type=friend', {asynchronous:true, parameters:params});
	    }
	}
