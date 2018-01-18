var idBorders = new Array("bb_tb1","bb1_tb1","bbsub_tb1","bbusub_tb1","bbfrl_tb1","bbucomm1_tb1","bbpl_tb1","bbfv_tb1","bbfv1_tb1","bbvlog_tb1","bbffav_tb1","bbffav1_tb1","bbsub1_tb1","bbusub1_tb1","bbufr_tb1","bbucomm_tb1");
var idBackgrounds = new Array("bb_th1","bb1_th1","bbsub_th1","bbusub_th1","bbfrl_th1","bbucomm1_th1","bbpl_th1","bbfv_th1","bbfv1_th1","bbffav_th1","bbffav1_th1","bbsub1_th1","bbusub1_th1","bbufr_th1","bbucomm_th1");
var idBackgrounds2 = new Array("bb1_th1","bbsub_th1","bbusub_th1","bbfrl_th1","bbucomm1_th1","bbpl_th1","bbfv_th1","bbfv1_th1","bbffav_th1","bbffav1_th1","bbsub1_th1","bbusub1_th1","bbufr_th1","bbucomm_th1");
var bbBackgrounds = new Array("bb1_th2","bbsub_th2","bbusub_th2","bbfrl_th2","bbucomm1_th2","bbpl_th2","bbfv_th2","bbfv1_th2","bbffav_th2","bbffav1_th2","bbsub1_th2","bbusub1_th2","bbufr_th2","bbucomm_th2");

function sh_featvid_disable() { var rads = document.ctheme.th_featvidlatest; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_featvidlatest[i].disabled = true; } document.ctheme.th_featsrc.disabled = true; }
function sh_featvid_enable() { var rads = document.ctheme.th_featvidlatest; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_featvidlatest[i].disabled = false; } document.ctheme.th_featsrc.disabled = false; }
function sh_featvid() { //show/hide featured video box
    if ( document.getElementById("th_featvid").checked == false ) { sh_featvid_disable(); document.ctheme.th_featvidurl.disabled = true; HideContent('div_featvid'); }
    else { sh_featvid_enable(); document.ctheme.th_featvidurl.disabled = false; ShowContent('div_featvid'); }
}

function sh_subsbox_disable() { var rads = document.ctheme.th_subspos; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_subspos[i].disabled = true; } }
function sh_subsbox_enable() { var rads = document.ctheme.th_subspos; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_subspos[i].disabled = false; } }
function sh_subsbox() { //show/hide subscriptions box
    if ( document.getElementById("th_subsbox").checked == true ) { //if box is enabled ( if left is checked ( show left hide right ) else if right is checked ( hide left, show right ) )
	sh_subsbox_enable();
	if ( document.getElementById("th_subsposleft").checked == true ) {
	    ShowContent('div_subsdivleft'); HideContent('div_subsdivright');
	} else {
	    HideContent('div_subsdivleft'); ShowContent('div_subsdivright');
	}
    } else { // if box is disabled { if left is checked, hide left, else if right is checked, hide right }
	sh_subsbox_disable();
	if ( document.getElementById("th_subsposleft").checked == true ) { HideContent('div_subsdivleft'); }
	else { HideContent('div_subsdivright'); }
    }
}

//function sh_bulletinbox() { //show/hide bulletin box
//    if ( document.getElementById('div_bulletins').style.display == 'none' ) { ShowContent('div_bulletins'); }
//    else { HideContent('div_bulletins'); }
//}

function sh_playlistbox() { //show/hide playlist box
    if ( document.getElementById('div_playlist').style.display == 'none' ) { ShowContent('div_playlist'); }
    else { HideContent('div_playlist'); }
}

//function sh_mycommbox() { //show/hide my recent comments
//    if ( document.getElementById('div_mycomm').style.display == 'none' ) { ShowContent('div_mycomm'); }
//    else { HideContent('div_mycomm'); }
//}

function sh_vidbox_disable() { var rads = document.ctheme.th_vidview; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_vidview[i].disabled = true; } }
function sh_vidbox_enable() { var rads = document.ctheme.th_vidview; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_vidview[i].disabled = false; } }
function sh_vidbox() { //show/hide video box
    if ( document.getElementById("th_vgrid").checked == true ) {
	sh_vidbox_enable();
	if ( document.getElementById("th_vidviewgrid").checked == true ) {
	    ShowContent('div_videogrid'); HideContent('div_videocomp');
	} else {
	    HideContent('div_videogrid'); ShowContent('div_videocomp');
	}
    } else {
	sh_vidbox_disable();
	if ( document.getElementById("th_vidviewgrid").checked == true ) { HideContent('div_videogrid'); } 
	else { HideContent('div_videocomp'); }
    }
}

function sh_vlogbox() { //show/hide video log box
    if ( document.getElementById('div_videolog').style.display == 'none' ) { ShowContent('div_videolog'); }
    else { HideContent('div_videolog'); }
}

function sh_favbox_disable() { var rads = document.ctheme.th_favview; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_favview[i].disabled = true; } }
function sh_favbox_enable() { var rads = document.ctheme.th_favview; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_favview[i].disabled = false; } }
function sh_favbox() { //show/hide favorites box
    if ( document.getElementById("th_fav").checked == true ) {
	sh_favbox_enable();
	if ( document.getElementById("th_favgrid").checked == true ) {
	    ShowContent('div_favgrid'); HideContent('div_favcomp');
	} else {
	    HideContent('div_favgrid'); ShowContent('div_favcomp');
	}
    } else {
	sh_favbox_disable()
	if ( document.getElementById("th_favgrid").checked == true ) { HideContent('div_favgrid'); }
	else { HideContent('div_favcomp'); }
    }
}

function sh_usubsbox_disable() { var rads = document.ctheme.th_usubspos; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_usubspos[i].disabled = true; } }
function sh_usubsbox_enable() { var rads = document.ctheme.th_usubspos; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_usubspos[i].disabled = false; } }
function sh_usubsbox() { //show/hide subscribers box
    if ( document.getElementById("th_usubsbox").checked == true ) { 
	sh_usubsbox_enable();
	if ( document.getElementById("th_usubsposleft").checked == true ) {
	    ShowContent('div_usubsdivleft'); HideContent('div_usubsdivright');
	} else {
	    HideContent('div_usubsdivleft'); ShowContent('div_usubsdivright');
	}
    } else {
	sh_usubsbox_disable();
	if ( document.getElementById("th_usubsposleft").checked == true ) { HideContent('div_usubsdivleft'); }
	else { HideContent('div_usubsdivright'); }
    }
}

function sh_frbox_disable() { var rads = document.ctheme.th_frpos; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_frpos[i].disabled = true; } }
function sh_frbox_enable() { var rads = document.ctheme.th_frpos; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_frpos[i].disabled = false; } }
function sh_frbox() { //show/hide friends box
    if ( document.getElementById("th_frbox").checked == true ) { 
	sh_frbox_enable();
	if ( document.getElementById("th_frposleft").checked == true ) {
	    ShowContent('div_frdivleft'); HideContent('div_frdivright');
	} else {
	    HideContent('div_frdivleft'); ShowContent('div_frdivright');
	}
    } else {
	sh_frbox_disable();
	if ( document.getElementById("th_frposleft").checked == true ) { HideContent('div_frdivleft'); }
	else { HideContent('div_frdivright'); }
    }
}

function sh_commbox_disable() { var rads = document.ctheme.th_commpos; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_commpos[i].disabled = true; } }
function sh_commbox_enable() { var rads = document.ctheme.th_commpos; for(var i=0; i < rads.length;i++ ) { document.ctheme.th_commpos[i].disabled = false; } }
function sh_commbox() { //show/hide comments box
    if ( document.getElementById("th_commbox").checked == true ) { 
	sh_commbox_enable();
	if ( document.getElementById("th_commposleft").checked == true ) {
	    ShowContent('div_commdivleft'); HideContent('div_commdivright');
	} else {
	    HideContent('div_commdivleft'); ShowContent('div_commdivright');
	}
    } else {
	sh_commbox_disable();
	if ( document.getElementById("th_commposleft").checked == true ) { HideContent('div_commdivleft'); }
	else { HideContent('div_commdivright'); }
    }
}

function set_bb_pagebg(d) { //page background
    document.getElementById('th_maintbl').style.backgroundColor = d;
    document.getElementById('th_bgcol').style.backgroundColor = d;
    document.getElementById('th_bgcol').value = d;
}

function set_bb_linkcol(d) { //link color
    for ( var i=1; i < 29; i++ ) {
	document.getElementById('bb_link'+i).style.color = d;
    }
    document.getElementById('th_linkcol').style.background = d;
    document.getElementById('th_linkcol').value = d;
}

function set_bb_linkunderlineon() { //link underline: yes
    for ( var i=1; i < 29; i++ ) {
	document.getElementById('bb_link'+i).style.textDecoration = "underline";
    }
    document.ctheme.th_linkunyes.checked = true;
}

function set_bb_linkunderlineoff() { //link underline: no
    for ( var i=1; i < 29; i++ ) {
	document.getElementById('bb_link'+i).style.textDecoration = "none";
    }
}

function set_bb_labelcol(d) { //label color
    document.getElementById('th_label1').style.color = d; 
    document.getElementById('th_label2').style.color = d; 
    document.getElementById('th_label3').style.color = d; 
    document.getElementById('th_labelcol').style.background = d;
    document.getElementById('th_labelcol').value = d;
}

function setOpacity(obj, opacity) {
  opacity = (opacity == 100)?99.999:opacity;
  obj.style.filter="progid:DXImageTransform.Microsoft.Alpha(opacity="+ opacity + ");";  // IE/Win
  obj.style.KHTMLOpacity = opacity/100;  // Safari<1.2, Konqueror
  obj.style.MozOpacity = opacity/100;  // Older Mozilla and Firefox
  obj.style.opacity = opacity/100; // Safari 1.2, newer Firefox and Mozilla, CSS3
}

function set_bb_transp(d) { //transparency
    var e = d;
    d = d + 50;
    for ( var i=0; i < 16; i++ ) {
	setOpacity(document.getElementById(idBorders[i]), d);
    }
    document.getElementById('th_transp').options[e].selected = true;
}
function set_bb_transp2(d) { //transparency
    var e = d;
    d = d + 50;
    for ( var i=0; i < 16; i++ ) {
	setOpacity(document.getElementById(idBorders[i]), d);
    }
}
function set_bb_transpmaintbl(d) { //transparency
    var e = d;
    d = d + 50;
//    for ( var i=0; i < 16; i++ ) {
	setOpacity(document.getElementById('pmaintbl'), d);
//    }
}

function set_bb_font(d) { //font family
    if ( d == "arial" ) var fam = "Arial";
    else if ( d == "times New Roman" ) fam = "Times New Roman";
    else if ( d == "georgia" ) fam = "Georgia";
    else if ( d == "verdana" ) fam = "Verdana";
    else if ( d == "comic Sans MS" ) fam = "Comic Sans MS";
    for ( var i=1; i < 29; i++ ) {
	document.getElementById('bb_link'+i).style.fontFamily = fam;
    }
    for ( var j=0; j < 16; j++ ) {
	document.getElementById(idBorders[j]).style.fontFamily = fam;
    }
}

function set_bb_fontsize(d) { //font size
    for ( var i=1; i < 29; i++ ) {
	document.getElementById('bb_link'+i).style.fontSize = d+"px";
    }
    for ( var j=0; j < 16; j++ ) {
	document.getElementById(idBorders[j]).style.fontSize = d+"px";
    }
    for ( var k=0; k < 15; k++ ) {
	document.getElementById(idBackgrounds[k]).style.fontSize = d+"px";
    }
    for ( var l=2; l < 7; l++ ) {
	document.getElementById('bb_txt'+l).style.fontSize = d+"px";
    }
    document.getElementById('bb4_txt1').style.fontSize = d+"px";
//    document.getElementById('bbbul_th2').style.fontSize = d+"px";
    document.getElementById('th_label3').style.fontSize = d+"px";
    document.getElementById('th_vlpost').style.fontSize = d+"px";
    document.getElementById('th_vlbody').style.fontSize = d+"px";
    document.getElementById('th_label1').style.fontSize = d+"px";
    document.getElementById('th_label2').style.fontSize = d+"px";
}


function set_bb_border(d) { //basic box: border color
    for ( var i=0; i < 16; i++ ) {
	document.getElementById(idBorders[i]).style.borderColor = d;
    }
    for ( var j=0; j < 15; j++ ) {
	document.getElementById(idBackgrounds[j]).style.background = d;
    }
    document.getElementById('bb_border').style.background = d;
    document.getElementById('bb_border').value = d;
}

function set_bb_bg(d) { //basic box: background color
    for ( var i=0; i < 14; i++ ) {
	document.getElementById(bbBackgrounds[i]).style.background = d;
    }
    document.getElementById('bb_bg').style.background = d;
    document.getElementById('bb_bg').value = d;
}

function set_bb_text1(d) { //basic box: header text color
    for ( var i=0; i < 14; i++ ) {
	document.getElementById(idBackgrounds2[i]).style.color = d;
    }
    document.getElementById('bb_text1').style.background = d;
    document.getElementById('bb_text1').value = d;
}

function set_bb_text2(d) { //basic box: body text color
    for ( var i=2; i < 7; i++ ) {
	document.getElementById('bb_txt'+i).style.color = d;
    }
    document.getElementById('bb_text2').style.background = d;
    document.getElementById('bb_text2').value = d;
}

function set_bb_bg2(d) { //highlight box: background color
    document.getElementById('bb_th2').style.background = d;
//    document.getElementById('bbbul_th2').style.background = d;
    document.getElementById('th_bbbordercol').style.background = d;
    document.getElementById('th_bbbordercol').value = d;
}

function set_bb_text3(d) { //highlight box: header text color
    document.getElementById('bb_th1').style.color = d;
//    document.getElementById('bbbul_th1').style.color = d;
    document.getElementById('th_bbtxt2').style.background = d;
    document.getElementById('th_bbtxt2').value = d;
}

function set_bb_text4(d) { //highlight box: body text color
    document.getElementById('bb4_txt1').style.color = d;
//    document.getElementById('bbbul_th2').style.color = d;
    document.getElementById('th_bbtxt1').style.background = d;
    document.getElementById('th_bbtxt1').value = d;
}

function set_vl_border(d) { //video log box: border color
    document.getElementById("bbvlog_th2").style.borderColor = d;
    document.getElementById('th_vlbordercol').style.background = d;
    document.getElementById('th_vlbordercol').value = d;
    document.getElementById('bbvlog_th1').style.background = d;
}

function set_vl_bg(d) { //video log box: background color
    document.getElementById('bbvlog_th2').style.background = d;
    document.getElementById('th_vlbg').style.background = d;
    document.getElementById('th_vlbg').value = d;
}

function set_vl_post(d) { //video log box: post title color
    document.getElementById('th_vlpost').style.color = d;
    document.getElementById('th_vlptitle').style.background = d;
    document.getElementById('th_vlptitle').value = d;
}

function set_vl_text1(d) { //video log box: header text color
    document.getElementById('bbvlog_th1').style.color = d;
    document.getElementById('th_vltxt1').style.background = d;
    document.getElementById('th_vltxt1').value = d;
}

function set_vl_text2(d) { //video log box: body text color
    document.getElementById('th_vlbody').style.color = d;
    document.getElementById('th_vltxt2').style.background = d;
    document.getElementById('th_vltxt2').value = d;
}

function set_fontsel(d, e) { document.getElementById('th_fontsize').options[d].selected = true; document.getElementById('th_font').options[e].selected = true; }

function set_theme1() { set_bb_linkunderlineon(); set_fontsel(5,0); set_bb_transp("50"); set_bb_pagebg("#2C405B"); set_bb_linkcol("#6B8AB8"); set_bb_labelcol("#EBEFF0"); set_bb_font("arial"); set_bb_fontsize("12"); set_bb_border("#6B8AB8"); set_bb_bg("#2C405B"); set_bb_text1("#FFFFFF"); set_bb_text2("#FFFFFF"); set_bb_bg2("#EBEFF0"); set_bb_text3("#FFFFFF"); set_bb_text4("#6B8AB8"); set_vl_border("#2C405B"); set_vl_bg("#2C405B"); set_vl_post("#6B8AB8"); set_vl_text1("#FFFFFF"); set_vl_text2("#FFFFFF"); document.getElementById('th_theme1').checked = true; }
function set_theme2() { set_bb_linkunderlineon(); set_fontsel(5,0); set_bb_transp("50"); set_bb_pagebg("#FFFFFF"); set_bb_linkcol("#0033CC"); set_bb_labelcol("#666666"); set_bb_font("arial"); set_bb_fontsize("12"); set_bb_border("#666666"); set_bb_bg("#FFFFFF"); set_bb_text1("#FFFFFF"); set_bb_text2("#000000"); set_bb_bg2("#E6E6E6"); set_bb_text3("#FFFFFF"); set_bb_text4("#666666"); set_vl_border("#FFFFFF"); set_vl_bg("#FFFFFF"); set_vl_post("#666666"); set_vl_text1("#FFFFFF"); set_vl_text2("#000000"); document.getElementById('th_theme2').checked = true; }
function set_theme3() { set_bb_linkunderlineon(); set_fontsel(5,0); set_bb_transp("50"); set_bb_pagebg("#006599"); set_bb_linkcol("#56AAD6"); set_bb_labelcol("#EBF4FB"); set_bb_font("arial"); set_bb_fontsize("12"); set_bb_border("#56AAD6"); set_bb_bg("#006599"); set_bb_text1("#FFFFFF"); set_bb_text2("#FFFFFF"); set_bb_bg2("#EBF4FB"); set_bb_text3("#FFFFFF"); set_bb_text4("#56AAD6"); set_vl_border("#006599"); set_vl_bg("#006599"); set_vl_post("#56AAD6"); set_vl_text1("#FFFFFF"); set_vl_text2("#FFFFFF"); document.getElementById('th_theme3').checked = true; }
function set_theme4() { set_bb_linkunderlineon(); set_fontsel(5,0); set_bb_transp("50"); set_bb_pagebg("#3A3A3A"); set_bb_linkcol("#898588"); set_bb_labelcol("#EEEEEE"); set_bb_font("arial"); set_bb_fontsize("12"); set_bb_border("#999999"); set_bb_bg("#3A3A3A"); set_bb_text1("#FFFFFF"); set_bb_text2("#FFFFFF"); set_bb_bg2("#EEEEEE"); set_bb_text3("#FFFFFF"); set_bb_text4("#666666"); set_vl_border("#3A3A3A"); set_vl_bg("#3A3A3A"); set_vl_post("#999999"); set_vl_text1("#FFFFFF"); set_vl_text2("#FFFFFF"); document.getElementById('th_theme4').checked = true; }
function set_theme5() { set_bb_linkunderlineon(); set_fontsel(5,0); set_bb_transp("50"); set_bb_pagebg("#234701"); set_bb_linkcol("#4F9F00"); set_bb_labelcol("#DCFFBA"); set_bb_font("arial"); set_bb_fontsize("12"); set_bb_border("#4F9F00"); set_bb_bg("#234701"); set_bb_text1("#FFFFFF"); set_bb_text2("#FFFFFF"); set_bb_bg2("#DCFFBA"); set_bb_text3("#FFFFFF"); set_bb_text4("#4F9F00"); set_vl_border("#234701"); set_vl_bg("#234701"); set_vl_post("#4F9F00"); set_vl_text1("#FFFFFF"); set_vl_text2("#FFFFFF"); document.getElementById('th_theme5').checked = true; }
function set_theme6() { set_bb_linkunderlineon(); set_fontsel(5,0); set_bb_transp("50"); set_bb_pagebg("#E25F0F"); set_bb_linkcol("#FDBE00"); set_bb_labelcol("#F7F8E6"); set_bb_font("arial"); set_bb_fontsize("12"); set_bb_border("#FDBE00"); set_bb_bg("#E25F0F"); set_bb_text1("#FFFFFF"); set_bb_text2("#FFFFFF"); set_bb_bg2("#F7F8E6"); set_bb_text3("#FFFFFF"); set_bb_text4("#E25F0F"); set_vl_border("#E25F0F"); set_vl_bg("#E25F0F"); set_vl_post("#FDBE00"); set_vl_text1("#FFFFFF"); set_vl_text2("#FFFFFF"); document.getElementById('th_theme6').checked = true; }
function set_theme7() { set_bb_linkunderlineon(); set_fontsel(5,0); set_bb_transp("50"); set_bb_pagebg("#CD2651"); set_bb_linkcol("#E9799F"); set_bb_labelcol("#FAE3EB"); set_bb_font("arial"); set_bb_fontsize("12"); set_bb_border("#E9799F"); set_bb_bg("#CD2651"); set_bb_text1("#FFFFFF"); set_bb_text2("#FFFFFF"); set_bb_bg2("#FAE3EB"); set_bb_text3("#FFFFFF"); set_bb_text4("#E9799F"); set_vl_border("#CD2651"); set_vl_bg("#CD2651"); set_vl_post("#E9799F"); set_vl_text1("#FFFFFF"); set_vl_text2("#FFFFFF"); document.getElementById('th_theme7').checked = true; }
function set_theme8() { set_bb_linkunderlineon(); set_fontsel(5,0); set_bb_transp("50"); set_bb_pagebg("#3F1F60"); set_bb_linkcol("#9560CA"); set_bb_labelcol("#EAE1F4"); set_bb_font("arial"); set_bb_fontsize("12"); set_bb_border("#9560CA"); set_bb_bg("#3F1F60"); set_bb_text1("#FFFFFF"); set_bb_text2("#FFFFFF"); set_bb_bg2("#EAE1F4"); set_bb_text3("#FFFFFF"); set_bb_text4("#9560CA"); set_vl_border("#3F1F60"); set_vl_bg("#3F1F60"); set_vl_post("#9560CA"); set_vl_text1("#FFFFFF"); set_vl_text2("#FFFFFF"); document.getElementById('th_theme8').checked = true; }
function set_theme9() { set_bb_linkunderlineon(); set_fontsel(5,0); set_bb_transp("50"); set_bb_pagebg("#5F1718"); set_bb_linkcol("#CD311B"); set_bb_labelcol("#F8E0E0"); set_bb_font("arial"); set_bb_fontsize("12"); set_bb_border("#CD311B"); set_bb_bg("#5F1718"); set_bb_text1("#FFFFFF"); set_bb_text2("#FFFFFF"); set_bb_bg2("#F8E0E0"); set_bb_text3("#FFFFFF"); set_bb_text4("#CD311B"); set_vl_border("#5F1718"); set_vl_bg("#5F1718"); set_vl_post("#CD311B"); set_vl_text1("#FFFFFF"); set_vl_text2("#FFFFFF"); document.getElementById('th_theme9').checked = true; }

function addvid(i, cb, fl, key) {
    if ( fl == "fl1" && document.getElementById(cb).checked == false ) { document.getElementById(cb).checked = true; }
    else if ( fl == "fl1" && document.getElementById(cb).checked == true ) { document.getElementById(cb).checked = false; }
    
    if ( document.getElementById(cb).checked == false)
    {
	     if ( document.getElementById("div1").style.backgroundImage == "url("+i+")" ) { document.getElementById("div1").style.backgroundImage = ""; document.getElementById("k0").value = ''; }
	else if ( document.getElementById("div2").style.backgroundImage == "url("+i+")" ) { document.getElementById("div2").style.backgroundImage = ""; document.getElementById("k1").value = ''; }
	else if ( document.getElementById("div3").style.backgroundImage == "url("+i+")" ) { document.getElementById("div3").style.backgroundImage = ""; document.getElementById("k2").value = ''; }
	else if ( document.getElementById("div4").style.backgroundImage == "url("+i+")" ) { document.getElementById("div4").style.backgroundImage = ""; document.getElementById("k3").value = ''; }
	else if ( document.getElementById("div5").style.backgroundImage == "url("+i+")" ) { document.getElementById("div5").style.backgroundImage = ""; document.getElementById("k4").value = ''; }
	else if ( document.getElementById("div6").style.backgroundImage == "url("+i+")" ) { document.getElementById("div6").style.backgroundImage = ""; document.getElementById("k5").value = ''; }
	else if ( document.getElementById("div7").style.backgroundImage == "url("+i+")" ) { document.getElementById("div7").style.backgroundImage = ""; document.getElementById("k6").value = ''; }
	else if ( document.getElementById("div8").style.backgroundImage == "url("+i+")" ) { document.getElementById("div8").style.backgroundImage = ""; document.getElementById("k7").value = ''; }
	else if ( document.getElementById("div9").style.backgroundImage == "url("+i+")" ) { document.getElementById("div9").style.backgroundImage = ""; document.getElementById("k8").value = ''; }
	
    }
    else 
    {
	     if ( document.getElementById("div1").style.backgroundImage == '' ) { document.getElementById("div1").style.backgroundImage = "url("+i+")"; document.getElementById("it1").value = cb; document.getElementById("k0").value = key; }
	else if ( document.getElementById("div2").style.backgroundImage == '' ) { document.getElementById("div2").style.backgroundImage = "url("+i+")"; document.getElementById("it2").value = cb; document.getElementById("k1").value = key; }
	else if ( document.getElementById("div3").style.backgroundImage == '' ) { document.getElementById("div3").style.backgroundImage = "url("+i+")"; document.getElementById("it3").value = cb; document.getElementById("k2").value = key; }
	else if ( document.getElementById("div4").style.backgroundImage == '' ) { document.getElementById("div4").style.backgroundImage = "url("+i+")"; document.getElementById("it4").value = cb; document.getElementById("k3").value = key; }
	else if ( document.getElementById("div5").style.backgroundImage == '' ) { document.getElementById("div5").style.backgroundImage = "url("+i+")"; document.getElementById("it5").value = cb; document.getElementById("k4").value = key; }
	else if ( document.getElementById("div6").style.backgroundImage == '' ) { document.getElementById("div6").style.backgroundImage = "url("+i+")"; document.getElementById("it6").value = cb; document.getElementById("k5").value = key; }
	else if ( document.getElementById("div7").style.backgroundImage == '' ) { document.getElementById("div7").style.backgroundImage = "url("+i+")"; document.getElementById("it7").value = cb; document.getElementById("k6").value = key; }
	else if ( document.getElementById("div8").style.backgroundImage == '' ) { document.getElementById("div8").style.backgroundImage = "url("+i+")"; document.getElementById("it8").value = cb; document.getElementById("k7").value = key; }
	else if ( document.getElementById("div9").style.backgroundImage == '' ) { document.getElementById("div9").style.backgroundImage = "url("+i+")"; document.getElementById("it9").value = cb; document.getElementById("k8").value = key; }
    }
}
function set_rpt ( d ) { 
    if ( d == 'on' ) { document.getElementById("th_maintbl").style.backgroundRepeat = "repeat";  } 
    if ( d == 'off' ) { document.getElementById("th_maintbl").style.backgroundRepeat = "no-repeat"; }
}
function set_chbtn ( d ) {
    var theclass = document.getElementById(d);
    
    if (theclass.className == d) {
	theclass.setAttribute("class",d+"x");
        theclass.setAttribute("className",d+"x");
    }
    else if (theclass.className == d+"x") {
	theclass.setAttribute("class",d);
        theclass.setAttribute("className",d);
    }
}