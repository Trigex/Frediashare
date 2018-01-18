function changeclass_inact(d){
    var theclass = document.getElementById(d);
    if (theclass.className == 'act')
    {
	theclass.setAttribute("class","");
	theclass.setAttribute("className","");
    }
}
function setclass_act(d) {
    var theclass = document.getElementById(d);
    if (theclass.className == '') { 
	theclass.setAttribute("class","act");
	theclass.setAttribute("className","act");
    }
}
function setclass_act2(d) {
    var theclass = document.getElementById(d);
    if (theclass.className == '') { 
	theclass.setAttribute("class","act");
	theclass.setAttribute("className","act");
    }
    else if (theclass.className == 'act') { 
	theclass.setAttribute("class","");
	theclass.setAttribute("className","");
    }
}

function changeclass_act(d){
    var theclass = document.getElementById(d);
    if (d == 'set1') { if (document.getElementById('adminsettingsdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('adminsettingsdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'set2') { if (document.getElementById('sitesettingsdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('sitesettingsdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'set3') { if (document.getElementById('sitemoddiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('sitemoddiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'set4') { if (document.getElementById('sitepermdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('sitepermdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'set5') { if (document.getElementById('othersetdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('othersetdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'set6') { if (document.getElementById('emailnotsettingsdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('emailnotsettingsdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'set7') { if (document.getElementById('truncatesettingsdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('truncatesettingsdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'set8') { if (document.getElementById('stringsetdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('stringsetdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'set9') { if (document.getElementById('vpagesettingsdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('vpagesettingsdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'pr') { if (document.getElementById('adminpassrec').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('adminpassrec').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'sys1') { if (document.getElementById('audio_conv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('audio_conv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'sys2') { if (document.getElementById('video_conv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('video_conv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'sys8') { if (document.getElementById('image_conv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('image_conv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'sys3') { if (document.getElementById('file_set').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('file_set').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'sys4') { if (document.getElementById('thumb_set').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('thumb_set').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'sys5') { if (document.getElementById('file_res').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('file_res').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'sys6') { if (document.getElementById('systools').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('systools').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'sys7') { if (document.getElementById('recoversetdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('recoversetdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'd1') { if (document.getElementById('filepermdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('filepermdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'd2') { if (document.getElementById('encdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('encdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'd3') { if (document.getElementById('phpdiv').style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); } else if (document.getElementById('phpdiv').style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); } }
    if (d == 'mpi') { if (document.getElementById("mpinfo").style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); document.getElementById('ffi').setAttribute("class",""); document.getElementById('ffi').setAttribute("className",""); } else if (document.getElementById("mpinfo").style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); document.getElementById('ffi').setAttribute("class",""); document.getElementById('ffi').setAttribute("className",""); } }
    if (d == 'ffi') { if (document.getElementById("ffinfo").style.display == 'none') { theclass.setAttribute("class",""); theclass.setAttribute("className",""); document.getElementById('mpi').setAttribute("class",""); document.getElementById('mpi').setAttribute("className",""); } else if (document.getElementById("ffinfo").style.display == 'block') { theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); document.getElementById('mpi').setAttribute("class",""); document.getElementById('mpi').setAttribute("className",""); } } 
}

function expandall(){
    ShowContent('adminsettingsdiv'); HideContent('adminsettingstxt'); ShowContent('sitesettingsdiv'); HideContent('sitesettingstxt'); ShowContent('sitemoddiv'); 
    HideContent('sitemodtxt'); ShowContent('sitepermdiv'); HideContent('sitepermtxt'); ShowContent('othersetdiv'); HideContent('othersettxt'); ShowContent('stringsetdiv'); 
    HideContent('stringsettxt'); ShowContent('truncatesettingsdiv'); HideContent('truncatesettingstxt'); ShowContent('emailnotsettingsdiv'); HideContent('emailnotsettingstxt');
    ShowContent('vpagesettingsdiv'); HideContent('vpagesettingstxt');
    ShowContent('recoversetdiv'); HideContent('recoversettxt');
    changeclass_act('set1'); changeclass_act('set2'); changeclass_act('set3'); changeclass_act('set4'); changeclass_act('set5'); changeclass_act('set6'); changeclass_act('set7'); changeclass_act('set8'); changeclass_act('set9'); changeclass_act('sys7'); 
}
function colapseall(){
    HideContent('adminsettingsdiv'); ShowContent('adminsettingstxt'); HideContent('sitesettingsdiv'); ShowContent('sitesettingstxt'); HideContent('sitemoddiv'); 
    ShowContent('sitemodtxt'); HideContent('sitepermdiv'); ShowContent('sitepermtxt'); HideContent('othersetdiv'); ShowContent('othersettxt'); HideContent('stringsetdiv'); 
    ShowContent('stringsettxt'); HideContent('truncatesettingsdiv'); ShowContent('truncatesettingstxt'); HideContent('emailnotsettingsdiv'); ShowContent('emailnotsettingstxt');
    HideContent('vpagesettingsdiv'); ShowContent('vpagesettingstxt'); 
    HideContent('recoversetdiv'); ShowContent('recoversettxt');
    changeclass_inact('set1'); changeclass_inact('set2'); changeclass_inact('set3'); changeclass_inact('set4'); changeclass_inact('set5'); changeclass_inact('set6'); changeclass_inact('set7'); changeclass_inact('set8'); changeclass_inact('set9'); changeclass_inact('sys7'); 
}
function expandall_sys(){
    ShowContent('audio_conv'); HideContent('audio_convtxt');
    ShowContent('video_conv'); HideContent('video_convtxt');
    ShowContent('image_conv'); HideContent('image_convtxt');
    ShowContent('systools'); HideContent('systoolstxt');
    ShowContent('file_set'); HideContent('file_settxt');
    ShowContent('thumb_set'); HideContent('thumb_settxt');
    ShowContent('file_res'); HideContent('file_restxt');
    changeclass_act('sys1'); changeclass_act('sys2'); changeclass_act('sys3'); changeclass_act('sys4'); changeclass_act('sys5'); changeclass_act('sys6'); changeclass_act('sys8'); 
}
function colapseall_sys(){
    HideContent('audio_conv'); ShowContent('audio_convtxt');
    HideContent('video_conv'); ShowContent('video_convtxt');
    HideContent('image_conv'); ShowContent('image_convtxt');
    HideContent('systools'); ShowContent('systoolstxt');
    HideContent('file_set'); ShowContent('file_settxt');
    HideContent('thumb_set'); ShowContent('thumb_settxt');
    HideContent('file_res'); ShowContent('file_restxt');
    changeclass_inact('sys1'); changeclass_inact('sys2'); changeclass_inact('sys3'); changeclass_inact('sys4'); changeclass_inact('sys5'); changeclass_inact('sys6'); changeclass_inact('sys8'); 
}
function addmember(d){
if (d == 'new')
{
    var params = Form.serialize($('addmemform'));
    new Ajax.Updater('saverespdiv', baseurl+'administration/memberadd.php?action=add', {asynchronous:true, parameters:params});
}
else if (d == 'set')
{
    var params = Form.serialize($('addmemform'));
    new Ajax.Updater('saverespdiv', baseurl+'administration/memberadd.php?action=set', {asynchronous:true, parameters:params});
}
}
function set_bl(d){
var params = Form.serialize($('filesel'));
new Ajax.Updater('opts_divresp', baseurl+'administration/setsch.php?v=lblock&f='+d, {asynchronous:true, parameters:params});
}
function set_unbl(d){
var params = Form.serialize($('filesel'));
new Ajax.Updater('opts_divresp', baseurl+'administration/setsch.php?v=lunblock&f='+d, {asynchronous:true, parameters:params});
}
function recadminpass(){
var params = Form.serialize($('adminpassrecform'));
new Ajax.Updater('adminpassrecresp', baseurl+'administration/setconfig.php?c=recover', {asynchronous:true, parameters:params});
}
function setadmin_settings(){
var params = Form.serialize($('setadminform'));
new Ajax.Updater('setadminresp', baseurl+'administration/setconfig.php?c=admin', {asynchronous:true, parameters:params});
}
function setsite_settings(){
var params = Form.serialize($('savesitesetform'));
new Ajax.Updater('setsiteresp', baseurl+'administration/setconfig.php?c=settings', {asynchronous:true, parameters:params});
}
function setsitemodule_settings(){
var params = Form.serialize($('sitemodulesform'));
new Ajax.Updater('setsitemodresp', baseurl+'administration/setconfig.php?c=sitemodules', {asynchronous:true, parameters:params});
}
function setsiteperm_settings(){
var params = Form.serialize($('sitepermform'));
new Ajax.Updater('setsitepermresp', baseurl+'administration/setconfig.php?c=siteperm', {asynchronous:true, parameters:params});
}
function setother_settings(){
var params = Form.serialize($('setotherform'));
new Ajax.Updater('setotherresp', baseurl+'administration/setconfig.php?c=other', {asynchronous:true, parameters:params});
}
function setstring_settings(){
var params = Form.serialize($('setstringform'));
new Ajax.Updater('setstrresp', baseurl+'administration/setconfig.php?c=string', {asynchronous:true, parameters:params});
}
function settruncate_settings(){
var params = Form.serialize($('settruncform'));
new Ajax.Updater('settrresp', baseurl+'administration/setconfig.php?c=truncate', {asynchronous:true, parameters:params});
}
function setemail_settings(){
var params = Form.serialize($('setmailform'));
new Ajax.Updater('setmailresp', baseurl+'administration/setconfig.php?c=email', {asynchronous:true, parameters:params});
}
function setvpage_settings(){
var params = Form.serialize($('setvpageform'));
new Ajax.Updater('setvpageresp', baseurl+'administration/setconfig.php?c=vpage', {asynchronous:true, parameters:params});
}
function setvideoconv_settings(){
var params = Form.serialize($('videoconvform'));
new Ajax.Updater('videoconvresp', baseurl+'administration/system.php?c=videoconv', {asynchronous:true, parameters:params});
}
function setaudioconv_settings(){
var params = Form.serialize($('audioconvform'));
new Ajax.Updater('audioconvresp', baseurl+'administration/system.php?c=audioconv', {asynchronous:true, parameters:params});
}
function setimageconv_settings(){
var params = Form.serialize($('imageconvform'));
new Ajax.Updater('imageconvresp', baseurl+'administration/system.php?c=imageconv', {asynchronous:true, parameters:params});
}
function setfile_settings(){
var params = Form.serialize($('filesetform'));
new Ajax.Updater('filesetresp', baseurl+'administration/system.php?c=file', {asynchronous:true, parameters:params});
}
function setfileres_settings(){
var params = Form.serialize($('fileresform'));
new Ajax.Updater('fileresresp', baseurl+'administration/system.php?c=fileres', {asynchronous:true, parameters:params});
}
function sys_clearcache(){
var params = Form.serialize($('systoolsform'));
new Ajax.Updater('systoolsresp', baseurl+'administration/system.php?c=clearcache', {asynchronous:true, parameters:params});
}
function sys_cleartemp(){
var params = Form.serialize($('systoolsform'));
new Ajax.Updater('systoolsresp', baseurl+'administration/system.php?c=cleartemp', {asynchronous:true, parameters:params});
}
function sys_clearupload(){
var params = Form.serialize($('systoolsform'));
new Ajax.Updater('systoolsresp', baseurl+'administration/system.php?c=clearupload', {asynchronous:true, parameters:params});
}
function sys_clearlogs(){
var params = Form.serialize($('systoolsform'));
new Ajax.Updater('systoolsresp', baseurl+'administration/system.php?c=clearlogs', {asynchronous:true, parameters:params});
}
function sys_analyze(){
var params = Form.serialize($('systoolsform'));
new Ajax.Updater('systoolsresp', baseurl+'administration/system.php?c=diag', {asynchronous:true, parameters:params});
}
function setrecovery_settings(){
var params = Form.serialize($('setrecoverform'));
new Ajax.Updater('filerecresp', baseurl+'administration/setconfig.php?c=recovery', {asynchronous:true, parameters:params});
}
function getusers(d) {
var params = Form.serialize($('getusersform'));
new Ajax.Updater('getusersresp', baseurl+'last.php?type='+d, {asynchronous:true, parameters:params});
}

function setdefmsg(){
var params = Form.serialize($('banform'));
new Ajax.Updater('mresp', baseurl+'administration/setsch.php?v=defmsg', {asynchronous:true, parameters:params});
}
function setdefurl(){
var params = Form.serialize($('banform'));
new Ajax.Updater('lresp', baseurl+'administration/setsch.php?v=defurl', {asynchronous:true, parameters:params});
}
function savedefmsg(i){
var params = Form.serialize($('filesel'));
new Ajax.Updater('editmsgresp'+i, baseurl+'administration/setsch.php?v=editdefmsg&id='+i, {asynchronous:true, parameters:params});
}
function savedefurl(i){
var params = Form.serialize($('filesel'));
new Ajax.Updater('editurlresp'+i, baseurl+'administration/setsch.php?v=editdefurl&id='+i, {asynchronous:true, parameters:params});
}
function arateup(i){
var params = Form.serialize($('commratediv'+i));
new Ajax.Updater('thetotal'+i, baseurl+'administration/setsch.php?v=commrate&type=audio&c=up', {asynchronous:true, parameters:params});
}
function arateup(i){
var params = Form.serialize($('commratediv'+i));
new Ajax.Updater('thetotal'+i, baseurl+'administration/setsch.php?v=commrate&type=audio&c=up', {asynchronous:true, parameters:params});
}
function aratedown(i){
var params = Form.serialize($('commratediv'+i));
new Ajax.Updater('thetotal'+i, baseurl+'administration/setsch.php?v=commrate&type=audio&c=down', {asynchronous:true, parameters:params});
}
function irateup(i){
var params = Form.serialize($('commratediv'+i));
new Ajax.Updater('thetotal'+i, baseurl+'administration/setsch.php?v=commrate&type=image&c=up', {asynchronous:true, parameters:params});
}
function iratedown(i){
var params = Form.serialize($('commratediv'+i));
new Ajax.Updater('thetotal'+i, baseurl+'administration/setsch.php?v=commrate&type=image&c=down', {asynchronous:true, parameters:params});
}
function vrateup(i){
var params = Form.serialize($('commratediv'+i));
new Ajax.Updater('thetotal'+i, baseurl+'administration/setsch.php?v=commrate&type=video&c=up', {asynchronous:true, parameters:params});
}
function vratedown(i){
var params = Form.serialize($('commratediv'+i));
new Ajax.Updater('thetotal'+i, baseurl+'administration/setsch.php?v=commrate&type=video&c=down', {asynchronous:true, parameters:params});
}
function prateup(i){
var params = Form.serialize($('commratediv'+i));
new Ajax.Updater('thetotal'+i, baseurl+'administration/setsch.php?v=commrate&type=profile&c=up', {asynchronous:true, parameters:params});
}
function pratedown(i){
var params = Form.serialize($('commratediv'+i));
new Ajax.Updater('thetotal'+i, baseurl+'administration/setsch.php?v=commrate&type=profile&c=down', {asynchronous:true, parameters:params});
}
function repto(i){
var params = Form.serialize($('repcom'+i));
new Ajax.Updater('resdiv'+i, baseurl+'administration/request.php', {asynchronous:true, parameters:params});
}
function add2fr2(i){
var params = Form.serialize($('frform'));
new Ajax.Updater('frdiv'+i, baseurl+'administration/request.php?fr='+i, {asynchronous:true, parameters:params});
}
function add2fr2x(i, itt){
var params = Form.serialize($('frform'));
new Ajax.Updater('frdiv'+itt, baseurl+'administration/request.php?fr='+i, {asynchronous:true, parameters:params});
}
function unsubuser(u){
var params = Form.serialize($('frform'));
new Ajax.Updater('frdiv'+u, baseurl+'administration/request.php?unsub='+u, {asynchronous:true, parameters:params});
}
function block_user(){
var params = Form.serialize($('blockform'));
new Ajax.Updater('bresp', baseurl+'administration/setsch.php?v=block', {asynchronous:true, parameters:params});
}
function block_user2(u){
var params = Form.serialize($('frform'));
new Ajax.Updater('frdiv'+u, baseurl+'administration/setsch.php?v=block&uid='+u, {asynchronous:true, parameters:params});
}
function block_user2x(u, itt){
var params = Form.serialize($('frform'));
new Ajax.Updater('frdiv'+itt, baseurl+'administration/setsch.php?v=block&uid='+u, {asynchronous:true, parameters:params});
}
function block_user3(u,i){
var params = Form.serialize($('inboxmsg'));
new Ajax.Updater('frdiv'+i, baseurl+'administration/setsch.php?v=block&uid='+u, {asynchronous:true, parameters:params});
}
function unblock_user(){
var params = Form.serialize($('blockform'));
new Ajax.Updater('bresp', baseurl+'administration/setsch.php?v=unblock', {asynchronous:true, parameters:params});
}
function unblock_user2(u){
var params = Form.serialize($('frform'));
new Ajax.Updater('frdiv'+u, baseurl+'administration/setsch.php?v=unblock&uid='+u, {asynchronous:true, parameters:params});
}
function unblock_user2x(u, itt){
var params = Form.serialize($('frform'));
new Ajax.Updater('frdiv'+itt, baseurl+'administration/setsch.php?v=unblock&uid='+u, {asynchronous:true, parameters:params});
}
function unblock_user3(u,i){
var params = Form.serialize($('inboxmsg'));
new Ajax.Updater('frdiv'+i, baseurl+'administration/setsch.php?v=unblock&uid='+u, {asynchronous:true, parameters:params});
}
function ReverseViewMode(){
var params = Form.serialize($('setview'));
new Ajax.Updater('setviewresp', baseurl+'administration/setsch.php?v=viewmode', {asynchronous:true, parameters:params});
}
function ReverseVideoTags(){
var params = Form.serialize($('setview'));
new Ajax.Updater('setviewrespv', baseurl+'administration/setsch.php?v=videotags', {asynchronous:true, parameters:params});
}
function ReverseImageTags(){
var params = Form.serialize($('setview'));
new Ajax.Updater('setviewrespi', baseurl+'administration/setsch.php?v=imagetags', {asynchronous:true, parameters:params});
}
function ReverseAudioTags(){
var params = Form.serialize($('setview'));
new Ajax.Updater('setviewrespa', baseurl+'administration/setsch.php?v=audiotags', {asynchronous:true, parameters:params});
}
function ReverseMyTags(){
var params = Form.serialize($('setview'));
new Ajax.Updater('setviewrespown', baseurl+'administration/setsch.php?v=mytags', {asynchronous:true, parameters:params});
}
function grabthumbs(){
var params = Form.serialize($('grabthumb'));
new Ajax.Updater('thumbresponsediv', baseurl+'administration/grabthumbs.php?f=grabth', {asynchronous:true, parameters:params});
}
function grabframe(nr, vid){
if ( nr == '1' ) var updater = 'thnr_1';
else if ( nr == '2' ) var updater = 'thnr_2';
else if ( nr == '3' ) var updater = 'thnr_3';
var params = Form.serialize($('grabthumb'));
new Ajax.Updater(updater, baseurl+'administration/grabthumbs.php?f='+nr+'&vid='+vid, {asynchronous:true, parameters:params});
}
function setsch(){
var params = Form.serialize($('schform'));
new Ajax.Updater('schdiv', baseurl+'administration/setsch.php', {asynchronous:true, parameters:params});
}
function send_pc(){
var params = Form.serialize($('pcommentsForm'));
new Ajax.Updater('commdiv', baseurl+'comment.php', {asynchronous:true, parameters:params});
}
function delcomp(i){
var params = Form.serialize($('delcommentp'+i));
new Ajax.Updater('commdelp'+i, baseurl+'comment.php', {asynchronous:true, parameters:params});
}
function send(){
var params = Form.serialize($('commentsForm'));
new Ajax.Updater('updateDiv', baseurl+'comment.php', {asynchronous:true, parameters:params});
}
function send_audio(){
var params = Form.serialize($('commentsForm'));
new Ajax.Updater('updateDiv', baseurl+'commentaudio.php', {asynchronous:true, parameters:params});
}
function send_image(){
var params = Form.serialize($('commentsForm'));
new Ajax.Updater('updateDiv', baseurl+'commentimage.php', {asynchronous:true, parameters:params});
}
function delcom(i){
var params = Form.serialize($('delcomment'+i));
new Ajax.Updater('comdiv'+i, baseurl+'comment.php', {asynchronous:true, parameters:params});
}
function delcom_audio(i){
var params = Form.serialize($('delcomment'+i));
new Ajax.Updater('comdiv'+i, baseurl+'commentaudio.php', {asynchronous:true, parameters:params});
}
function delcom_image(i){
var params = Form.serialize($('delcomment'+i));
new Ajax.Updater('comdiv'+i, baseurl+'commentimage.php', {asynchronous:true, parameters:params});
}
function report(){
var params = Form.serialize($('repform'));
new Ajax.Updater('repdiv2', baseurl+'administration/request.php', {asynchronous:true, parameters:params});
}
function report_audio(){
var params = Form.serialize($('repform'));
new Ajax.Updater('repdiv2', baseurl+'administration/requestaudio.php', {asynchronous:true, parameters:params});
}
function report_image(){
var params = Form.serialize($('repform'));
new Ajax.Updater('repdiv2', baseurl+'administration/requestimage.php', {asynchronous:true, parameters:params});
}
function feature(){
var params = Form.serialize($('featform'));
new Ajax.Updater('featdiv2', baseurl+'administration/request.php', {asynchronous:true, parameters:params});
}
function feature_audio(){
var params = Form.serialize($('featform'));
new Ajax.Updater('featdiv2', baseurl+'administration/requestaudio.php', {asynchronous:true, parameters:params});
}
function feature_image(){
var params = Form.serialize($('featform'));
new Ajax.Updater('featdiv2', baseurl+'administration/requestimage.php', {asynchronous:true, parameters:params});
}
function add2fav(){
var params = Form.serialize($('favform'));
new Ajax.Updater('favdiv2', baseurl+'administration/request.php', {asynchronous:true, parameters:params});
}
function add2fav_audio(){
var params = Form.serialize($('favform'));
new Ajax.Updater('favdiv2', baseurl+'administration/requestaudio.php', {asynchronous:true, parameters:params});
}
function add2fav_image(){
var params = Form.serialize($('favform'));
new Ajax.Updater('favdiv2', baseurl+'administration/requestimage.php', {asynchronous:true, parameters:params});
}
function add2fr(){
var params = Form.serialize($('frform'));
new Ajax.Updater('frdiv', baseurl+'administration/request.php', {asynchronous:true, parameters:params});
}

//admin area
function setpag_myaudio(){
var params = Form.serialize($('form_paging_myaudio'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_myimages(){
var params = Form.serialize($('form_paging_myimages'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_myvideos(){
var params = Form.serialize($('form_paging_myvideos'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_inbox(){
var params = Form.serialize($('form_paging_inbox'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_outbox(){
var params = Form.serialize($('form_paging_outbox'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_blocked(){
var params = Form.serialize($('form_paging_blocked'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_myfav(){
var params = Form.serialize($('form_paging_myfav'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_myfri(){
var params = Form.serialize($('form_paging_myfri'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_mypla(){
var params = Form.serialize($('form_paging_mypla'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_mysubs(){
var params = Form.serialize($('form_paging_mysubs'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_myusubs(){
var params = Form.serialize($('form_paging_myusubs'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_audio(){
var params = Form.serialize($('form_paging_audio'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
} 
function setpag_images(){
var params = Form.serialize($('form_paging_images'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_videos(){
var params = Form.serialize($('form_paging_videos'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_categ(){
var params = Form.serialize($('form_paging_categ'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_member(){
var params = Form.serialize($('form_paging_member'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_ufav(){
var params = Form.serialize($('form_paging_ufav'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_ufri(){
var params = Form.serialize($('form_paging_ufri'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_search(){
var params = Form.serialize($('form_paging_search'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_featured(){
var params = Form.serialize($('form_paging_featured'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_bestfiles(){
var params = Form.serialize($('form_paging_bestfiles'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_comments(){
var params = Form.serialize($('form_paging_comments'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_responses(){
var params = Form.serialize($('form_paging_responses'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_quicklist(){
var params = Form.serialize($('form_paging_quicklist'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_playlist(){
var params = Form.serialize($('form_paging_playlist'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_playlist2(){
var params = Form.serialize($('form_paging_playlist2'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function setpag_chan(){
var params = Form.serialize($('form_paging_chan'));
new Ajax.Updater('paging_response', baseurl+'administration/set_paging.php', {asynchronous:true, parameters:params});
}
function vsaveit(){
var params = Form.serialize($('admin_vsave'));
new Ajax.Updater('vsave', baseurl+'administration/vsave.php', {asynchronous:true, parameters:params});
}
function isaveit(){
var params = Form.serialize($('admin_isave'));
new Ajax.Updater('isave', baseurl+'administration/isave.php', {asynchronous:true, parameters:params});
}
function asaveit(){
var params = Form.serialize($('admin_asave'));
new Ajax.Updater('asave', baseurl+'administration/asave.php', {asynchronous:true, parameters:params});
}
function recoverpass(d){
var params = Form.serialize($('rec_pass'));
if ( d == 'user' ) { var mydiv = 'recpass2'; } else { var mydiv = 'recpass'; } 
new Ajax.Updater(mydiv, baseurl+'passrecovery.php?step='+d, {asynchronous:true, parameters:params});
}
function report_submit(d){
if ( d == 'profileimage' ) var params = Form.serialize($('report_form')); else if ( d == 'bgimage' ) var params = Form.serialize($('reportbg_form'));
if ( d == 'profileimage' ) { var mydiv = 'respdiv1'; } else if ( d == 'bgimage' ) { var mydiv = 'respdiv2'; } 
new Ajax.Updater(mydiv, baseurl+'administration/request.php?action=report&type='+d, {asynchronous:true, parameters:params});
}
function set_hpsess ( w ){
    if ( w == 'featv' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'feati' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'feata' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'featvid' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'ustat' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'inbox' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'about' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_myacct' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_apl' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_ipl' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_vpl' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_display' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_browsea' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_browsei' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_browsev' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_profile' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_inbox' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_comm' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_resp' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_categ' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_subsuser' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_subsfav' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_subspl' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
    else if ( w == 'menu_ch' ) new Ajax.Updater('sessdiv', baseurl+'setmenus.php?w=1&wt='+w);
}
function send_pc(){
var params = Form.serialize($('pcommentsForm'));
new Ajax.Updater('commdiv', baseurl+'comment.php', {asynchronous:true, parameters:params});
}
function delcomp(i){
var params = Form.serialize($('delcommentp'+i));
new Ajax.Updater('commdelp'+i, baseurl+'comment.php', {asynchronous:true, parameters:params});
} 
function comm_load(type,key,pagnr){
var params = Form.serialize($('commloopform'));
new Ajax.Updater('commloopdiv', baseurl+'filecomments.php?ftype='+type+'&key='+key+'&page='+pagnr, {asynchronous:true, parameters:params});
} 
function total_load(type,key,pagnr){
var params = Form.serialize($('commloopform'));
new Ajax.Updater('commcount', baseurl+'filecomments.php?ftype='+type+'&key='+key+'&page='+pagnr+'&total=1', {asynchronous:true, parameters:params});
} 
function setpagenumbering(sw){
var params = Form.serialize($('commloopform'));
if ( sw == 'on' ) new Ajax.Updater('hiddenresponsediv', baseurl+'administration/setsch.php?v=pagenumon', {asynchronous:true, parameters:params});
else if ( sw == 'off' ) new Ajax.Updater('hiddenresponsediv', baseurl+'administration/setsch.php?v=pagenumoff', {asynchronous:true, parameters:params});
}
function set_subscription(type, username, userid, stype) {
var params = Form.serialize($('chsubsform'));
new Ajax.Updater('subsrespdiv', baseurl+'modules/channels/ch_act.php?type='+type+'&userid='+userid+'&username='+username+'&stype='+stype, {asynchronous:true, parameters:params});
}
function set_subscription_fav(type, username, userid, stype) {
var params = Form.serialize($('chsubsform'));
new Ajax.Updater('subsrespdiv3', baseurl+'modules/channels/ch_act.php?type='+type+'&userid='+userid+'&username='+username+'&stype='+stype, {asynchronous:true, parameters:params});
}
function set_subscription2(type, username, userid, stype, itt, is_s) {
var params = Form.serialize($('frform'));
new Ajax.Updater('frdiv'+itt, baseurl+'modules/channels/ch_act.php?type='+type+'&userid='+userid+'&username='+username+'&stype='+stype+'&itt='+itt+'&iss='+is_s, {asynchronous:true, parameters:params});
}
function delqlistitem ( type, vid, vid_view ) {
    new Ajax.Updater('masterquicklistdiv', baseurl+'modules/channels/qlist.php?a=tdel&type='+type+'&tid='+vid+'&tvid='+vid_view);
    new Ajax.Updater('qlistadd', baseurl+'modules/channels/qlist.php?a=tupdate');
}
function clearquicklist ( type, vid_view ) {
    new Ajax.Updater('masterquicklistdiv', baseurl+'modules/channels/qlist.php?a=clear&type='+type+'&tvid='+vid_view);
    new Ajax.Updater('qlistadd', baseurl+'modules/channels/qlist.php?a=tupdate');
}
function startautoplay ( type, key ) {
    new Ajax.Updater('allcontent', baseurl+'modules/channels/qlist.php?a=startautoplay&type='+type+'&key='+key);
}
function stopautoplay ( type, key ) {
    new Ajax.Updater('allcontent', baseurl+'modules/channels/qlist.php?a=stopautoplay&type='+type+'&key='+key);
}
function ignore_quicklist() {
    new Ajax.Updater('qignore', baseurl+'modules/channels/my_quicklist.php?type=ignore');
}
function sharefile ( type, id, submitted ) {
    var params = Form.serialize($('femailform'));
    if ( submitted == '0' ) new Ajax.Updater('fshare', baseurl+type+'/email/'+id+'&sub=0', {asynchronous:true, parameters:params}); 
    else if ( submitted == '1' ) new Ajax.Updater('fshare', baseurl+type+'/email/'+id+'&sub=1', {asynchronous:true, parameters:params}); 
}
function load_tabs ( filetype, querytype, key ) {
    if ( filetype == 'audio' ) var file = 'raudio.php'; 
    else if ( filetype == 'image' ) var file = 'rimage.php'; 
    else if ( filetype == 'video' ) var file = 'rvideo.php'; 
    
    if ( querytype == 'related' ) new Ajax.Updater('relalldiv', baseurl+file+'?rel='+key);
    if ( querytype == 'user' ) new Ajax.Updater('morefromdiv', baseurl+file+'?user='+key);
}
function save2pl( type, vidid ) {
var params = Form.serialize($('playlistform'));
new Ajax.Updater('playlistdiv', baseurl+'modules/channels/my_playlist.php?action=pladd&type='+type+'&vid='+vidid, {asynchronous:true, parameters:params});
}
function saveqpl( type ) {
var params = Form.serialize($('qplform'));
new Ajax.Updater('qplresp', baseurl+'modules/channels/my_playlist.php?action=savepl&type='+type, {asynchronous:true, parameters:params});
}

function setficon( type, sw ){
    if ( type == 'fav' ) {
	if ( sw == 'on' ) document.getElementById('favico').setAttribute("class","fav_on"); 
	if ( sw == 'off' ) document.getElementById('favico').setAttribute("class","fav_off"); 
    } else if ( type == 'share' ) {
	if ( sw == 'on' ) document.getElementById('shareico').setAttribute("class","share_on"); 
	if ( sw == 'off' ) document.getElementById('shareico').setAttribute("class","share_off"); 
    } else if ( type == 'pl' ) {
	if ( sw == 'on' ) document.getElementById('plico').setAttribute("class","pl_on"); 
	if ( sw == 'off' ) document.getElementById('plico').setAttribute("class","pl_off"); 
    } else if ( type == 'flag' ) {
	if ( sw == 'on' ) document.getElementById('flagico').setAttribute("class","flag_on"); 
	if ( sw == 'off' ) document.getElementById('flagico').setAttribute("class","flag_off");
    }    
}

function setqlicon ( sw, type, id, vm ) {
    if ( type == 'video' ) var dcomp = 'v';
    if ( type == 'image' ) var dcomp = 'i'; 
    if ( type == 'audio' ) var dcomp = 'a'; 
    if ( type == 'user' ) var dcomp = 'u'; 
    
    if ( vm == 'grid' ) {
	if ( sw == 'on' ) document.getElementById(dcomp+'qlistadd'+id).style.background = 'url('+baseurl+'/modules/channels/images/btnqlist_on.gif)';
	if ( sw == 'off' ) document.getElementById(dcomp+'qlistadd'+id).style.background = 'url('+baseurl+'/modules/channels/images/btnqlist_off.gif)';
    } else if ( vm == 'list' ) {
	if ( sw == 'on' ) document.getElementById(dcomp+'lqlistadd'+id).style.background = 'url('+baseurl+'/modules/channels/images/btnqlist_on.gif)';
	if ( sw == 'off' ) document.getElementById(dcomp+'lqlistadd'+id).style.background = 'url('+baseurl+'/modules/channels/images/btnqlist_off.gif)';
    } else if ( vm == 'user' ) {
	if ( sw == 'on' ) document.getElementById(dcomp+'qlistadd'+id).style.background = 'url('+baseurl+'/modules/channels/images/btnqlist_on.gif)';
	if ( sw == 'off' ) document.getElementById(dcomp+'qlistadd'+id).style.background = 'url('+baseurl+'/modules/channels/images/btnqlist_off.gif)';
    }
} 

function add2ql ( type, type2, key, vm, vpage, vid_view ) {
    if ( type2 == 'video' ) { var dcomp = 'v'; }
    else if ( type2 == 'image' ) { var dcomp = 'i'; }
    else if ( type2 == 'audio' ) { var dcomp = 'a'; }
    else if ( type2 == 'user' ) { var dcomp = 'u'; }
    
    if ( vm == 'grid' ) {
	new Ajax.Updater(dcomp+'qlistadd'+key, baseurl+'modules/channels/qlist.php?a=add&type='+type+'&key='+key);
	document.getElementById(dcomp+"qlistadd"+key).style.background = '';
    } else if ( vm == 'list' ) {
	new Ajax.Updater(dcomp+'lqlistadd'+key, baseurl+'modules/channels/qlist.php?a=add&type='+type+'&key='+key);
	document.getElementById(dcomp+'lqlistadd'+key).style.background = '';
    } else if ( vm == 'user' ) {
	new Ajax.Updater(dcomp+'qlistadd'+key, baseurl+'modules/channels/qlist.php?a=add&type='+type+'&key='+key);
	document.getElementById(dcomp+'qlistadd'+key).style.background = '';
    }
    if ( ( typeof vpage != 'undefined' ) && ( typeof vid_view != 'undefined' ) ) new Ajax.Updater('masterquicklistdiv', baseurl+'modules/channels/qlist.php?a=tlist&type='+type+'&tvid='+vid_view);
    new Ajax.Updater('qlistadd', baseurl+'modules/channels/qlist.php?a=tupdate');
}

function setuserinfo( t, itt ) {
    if ( t == 'chinfo' ) {
	var params = Form.serialize($('cinfo'));
	new Ajax.Updater('chinfo_resp', baseurl+'administration/memberdetails.php?c=1&type='+t, {asynchronous:true, parameters:params});
    } else if ( t == 'chperf' ) {
	var params = Form.serialize($('chperf'));
	new Ajax.Updater('chperf_resp', baseurl+'administration/memberdetails.php?c=1&type='+t, {asynchronous:true, parameters:params});
    } else if ( t == 'chprof' ) {
	var params = Form.serialize($('owninfo'));
	new Ajax.Updater('chprof_resp', baseurl+'administration/memberdetails.php?c=1&type='+t, {asynchronous:true, parameters:params});
    } else if ( t == 'cheven' ) {
	var params = Form.serialize($('cheventform'));
	new Ajax.Updater('cheven_resp'+itt, baseurl+'administration/memberdetails.php?c=1&type='+t, {asynchronous:true, parameters:params});
    } else if ( t == 'chloc' ) {
	var params = Form.serialize($('chloc'));
	new Ajax.Updater('chloc_resp', baseurl+'administration/memberdetails.php?c=1&type='+t, {asynchronous:true, parameters:params});
    } else if ( t == 'churl' ) {
	var params = Form.serialize($('churl'));
	new Ajax.Updater('churl_resp', baseurl+'administration/memberdetails.php?c=1&type='+t, {asynchronous:true, parameters:params});
    }
}
function startplay ( sw, type, plk ) {
    if ( typeof plk != 'undefined' ) { new Ajax.Updater('startplayresp', baseurl+'administration/setsch.php?v=startplay&type='+type+'&sw='+sw+'&plk='+plk); }
    else { new Ajax.Updater('startplayresp', baseurl+'administration/setsch.php?v=startplay&type='+type+'&sw='+sw); }
}