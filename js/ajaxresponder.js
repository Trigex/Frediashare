Ajax.Responders.register({
    onCreate: function() {
        if (Ajax.activeRequestCount === 1) {
            if ( document.getElementById('thisDiv').value == 'yes' ) { 
        	if ( document.getElementById('ldivx').value == 'getusersresp' ) { $('loading2').show(); }
        	else if ( document.getElementById('ldivx').value == 'repdiv2' ) { $('loading2').show(); }
        	else if ( document.getElementById('ldivx').value == 'updateDiv' ) { $('loading3').show(); }
        	else if ( document.getElementById('ldivx').value == 'loadme' ) { $('loading4').show(); }
        	else if ( document.getElementById('ldivx').value == 'commdiv' ) { $('loading5').show(); }
        	else if ( document.getElementById('ldivx').value == 'subsrespdiv' ) { $('loading_sub').show(); }
        	else if ( document.getElementById('ldivx').value == 'subsrespdiv2' ) { $('loading_sub2').show(); }
        	else if ( document.getElementById('ldivx').value == 'subsrespdiv3' ) { $('loading_sub3').show(); }
        	else if ( document.getElementById('ldivx').value == 'qloadme' ) { $('qlistloading').show(); }
        	else if ( document.getElementById('ldivx').value == 'fshare' ) { $('loading_share').show(); }
        	else if ( document.getElementById('ldivx').value == 'featdiv2' ) { $('floading').show(); }
        	else if ( document.getElementById('ldivx').value == 'playlistdiv' ) { $('ploading').show(); }
        	else if ( document.getElementById('ldivx').value == 'chshareresp' ) { $('loading_sh').show(); }
        	else if ( document.getElementById('ldivx').value == 'repdiv' ) { $('loading_rep').show(); }
        	else if ( document.getElementById('ldivx').value == 'repbgdiv' ) { $('loading_bgrep').show(); }
        	else if ( document.getElementById('ldivx').value == 'asavea' || document.getElementById('ldivx').value == 'isavei' || document.getElementById('ldivx').value == 'vsavev' ) { $('loading_fd').show(); }
        	else if ( document.getElementById('ldivx').value == 'recpass' || document.getElementById('ldivx').value == 'recpass2' ) { $('loading_rec').show(); }
        	else if ( document.getElementById('ldivx').value == 'cth1' ) { $('change_th1').show(); }
        	else if ( document.getElementById('ldivx').value == 'cth2' ) { $('change_th2').show(); }
        	else if ( document.getElementById('ldivx').value == 'cth3' ) { $('change_th3').show(); }
        	else if ( document.getElementById('ldivx').value == 'rthumb_div' ) { $('loading_fx').show(); }
        	else { $('loading').show(); }
        	$(document.getElementById('ldivx').value).hide();
    	    }
        }
    },
    onComplete: function() {
        if (Ajax.activeRequestCount === 0) {
            if ( document.getElementById('thisDiv').value == 'yes' ) { 
        	if ( document.getElementById('ldivx').value == 'getusersresp' ) { $('loading2').hide(); }
        	else if ( document.getElementById('ldivx').value == 'repdiv2' ) { $('loading2').hide(); }
        	else if ( document.getElementById('ldivx').value == 'updateDiv' ) { $('loading3').hide(); }
        	else if ( document.getElementById('ldivx').value == 'loadme' ) { $('loading4').hide(); }
        	else if ( document.getElementById('ldivx').value == 'commdiv' ) { $('loading5').hide(); }
        	else if ( document.getElementById('ldivx').value == 'subsrespdiv' ) { $('loading_sub').hide(); }
        	else if ( document.getElementById('ldivx').value == 'subsrespdiv2' ) { $('loading_sub2').hide(); }
        	else if ( document.getElementById('ldivx').value == 'subsrespdiv3' ) { $('loading_sub3').hide(); }
        	else if ( document.getElementById('ldivx').value == 'qloadme' ) { $('qlistloading').hide(); }
        	else if ( document.getElementById('ldivx').value == 'fshare' ) { $('loading_share').hide(); }
        	else if ( document.getElementById('ldivx').value == 'featdiv2' ) { $('floading').hide(); }
        	else if ( document.getElementById('ldivx').value == 'playlistdiv' ) { $('ploading').hide(); }
        	else if ( document.getElementById('ldivx').value == 'chshareresp' ) { $('loading_sh').hide(); }
        	else if ( document.getElementById('ldivx').value == 'repdiv' ) { $('loading_rep').hide(); }
        	else if ( document.getElementById('ldivx').value == 'repbgdiv' ) { $('loading_bgrep').hide(); }
        	else if ( document.getElementById('ldivx').value == 'asavea' || document.getElementById('ldivx').value == 'isavei' || document.getElementById('ldivx').value == 'vsavev' ) { $('loading_fd').hide(); }
        	else if ( document.getElementById('ldivx').value == 'recpass' || document.getElementById('ldivx').value == 'recpass2' ) { $('loading_rec').hide(); }
        	else if ( document.getElementById('ldivx').value == 'cth1' ) { $('change_th1').hide(); }
        	else if ( document.getElementById('ldivx').value == 'cth2' ) { $('change_th2').hide(); }
        	else if ( document.getElementById('ldivx').value == 'cth3' ) { $('change_th3').hide(); }
        	else if ( document.getElementById('ldivx').value == 'rthumb_div' ) { $('loading_fx').hide(); }
        	else { $('loading').hide(); }
        	$(document.getElementById('ldivx').value).show();
    	    }
        }
    }
});