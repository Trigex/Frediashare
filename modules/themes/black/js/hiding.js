function HideContent(d) {
document.getElementById(d).style.display = "none";
//Effect.BlindDown(d);
if (d == "bvideo") { document.getElementById('tab3').className = ""; }
if (d == "bimage") { document.getElementById('tab2').className = ""; }
if (d == "baudio") { document.getElementById('tab1').className = ""; }
if (d == "plvideo") { document.getElementById('tab3').className = ""; }
if (d == "plimage") { document.getElementById('tab2').className = ""; }
if (d == "plaudio") { document.getElementById('tab1').className = ""; }
if (d == "favvideo") { document.getElementById('tab3').className = ""; }
if (d == "favimage") { document.getElementById('tab2').className = ""; }
if (d == "favaudio") { document.getElementById('tab1').className = ""; }
if (d == "fvideo") { document.getElementById('ftab3').className = ""; }
if (d == "fimage") { document.getElementById('ftab2').className = ""; }
if (d == "faudio") { document.getElementById('ftab1').className = ""; }
if (d == "fv") { document.getElementById('t1').className = "br2b"; }
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
//Effect.BlindUp(d);
if (d == "bvideo") { document.getElementById('tab3').className = "active"; }
if (d == "bimage") { document.getElementById('tab2').className = "active"; }
if (d == "baudio") { document.getElementById('tab1').className = "active"; }
if (d == "plvideo") { document.getElementById('tab3').className = "active"; }
if (d == "plimage") { document.getElementById('tab2').className = "active"; }
if (d == "plaudio") { document.getElementById('tab1').className = "active"; }
if (d == "favvideo") { document.getElementById('tab3').className = "active"; }
if (d == "favimage") { document.getElementById('tab2').className = "active"; }
if (d == "favaudio") { document.getElementById('tab1').className = "active"; }
if (d == "fvideo") { document.getElementById('ftab3').className = "active"; }
if (d == "fimage") { document.getElementById('ftab2').className = "active"; }
if (d == "faudio") { document.getElementById('ftab1').className = "active"; }

if (d == "fv") { document.getElementById('t1').className = "br2b-on"; document.getElementById('t2').className = "br2l"; document.getElementById('t3').className = "br2l"; }
if (d == "sh") { document.getElementById('t2').className = "br2l-on"; document.getElementById('t1').className = "br2b"; document.getElementById('t3').className = "br2l"; }
if (d == "fl") { document.getElementById('t3').className = "br2l-on"; document.getElementById('t1').className = "br2b"; document.getElementById('t2').className = "br2l"; }
}
function ReverseSign(d){
    if ( document.getElementById('img'+d).src == baseurl+'modules/themes/black/images/sign_plus.gif' )
    {
        document.getElementById('img'+d).src = baseurl+'modules/themes/black/images/sign_minus.gif';
        document.getElementById('memb'+d).style.color = "white";
    }
    else 
    {
	document.getElementById('img'+d).src = baseurl+'modules/themes/black/images/sign_plus.gif';
	document.getElementById('memb'+d).style.color = "";
    }
} 
function ReverseContentDisplay(d) {
if(document.getElementById(d).style.display == "none") 
{ 
    if (d=="sdiv")
    {
        document.getElementById("tnav").ClassName = "";
    }

      document.getElementById(d).style.display = "block"; 
     // Effect.Highlight(d);
      
      if(d == "msgopts") { document.getElementById('opts').src = baseurl+'/modules/themes/black/images/sign_minus.gif'; }

      if(d == "adv_set")
      {
        document.getElementById('opts').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
	document.getElementById('opts_txt').style.color = "white";
      }
      
//      if(d == "adv_set" || d == "audio_conv")
//      {
//        document.getElementById('opts').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
//	document.getElementById('opts_txt').style.color = "white";
//      }
//      if(d == "video_conv")
//      {
//        document.getElementById('optsv').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
//	document.getElementById('opts_txtv').style.color = "white";
//      }
//      if(d == "file_set")
//      {
//        document.getElementById('optsf').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
//	document.getElementById('opts_txtf').style.color = "white";
//      }
//      if(d == "thumb_set")
//      {
//        document.getElementById('optst').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
//	document.getElementById('opts_txtt').style.color = "white";
//      }
      if(d == "rstats")
      {
        document.getElementById('optsf').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
	document.getElementById('opts_txtf').style.color = "white";
      }
      if(d == "guest_stat")
      {
        document.getElementById('opts').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
	document.getElementById('opts_txt1').style.color = "";
      }
      if(d == "site_statsa")
      {
        document.getElementById('statsa').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
	document.getElementById('sitestatsa').style.color = "white";
      }
      if(d == "site_statsi")
      {
        document.getElementById('statsi').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
	document.getElementById('sitestatsi').style.color = "white";
      }
      if(d == "site_statsv")
      {
        document.getElementById('statsv').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
	document.getElementById('sitestatsv').style.color = "white";
      }
      if(d == "site_statsg")
      {
        document.getElementById('statsg').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
	document.getElementById('sitestatsg').style.color = "white";
      }
      if(d == "recoverpass")
      {
        document.getElementById('fptxt').style.color = "white";
      }
    }
else 
    { 
      document.getElementById(d).style.display = "none"; 
      if(d == "msgopts") { document.getElementById('opts').src = baseurl+'/modules/themes/black/images/sign_plus.gif'; }
      if(d == "adv_set")
      {
        document.getElementById('opts').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
	document.getElementById('opts_txt').style.color = "";
      }
//      if(d == "adv_set" || d == "audio_conv")
//      {
    //    document.getElementById('opts').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
//	document.getElementById('opts_txt').style.color = "";
//      }
//      if(d == "video_conv")
//      {
//        document.getElementById('optsv').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
//	document.getElementById('opts_txtv').style.color = "";
//      }
//      if(d == "file_set")
//      {
//        document.getElementById('optsf').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
//	document.getElementById('opts_txtf').style.color = "";
//      }
//      if(d == "thumb_set")
//      {
//        document.getElementById('optst').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
//	document.getElementById('opts_txtt').style.color = "";
//      }
      if(d == "rstats")
      {
        document.getElementById('optsf').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
	document.getElementById('opts_txtf').style.color = "";
      }

      if(d == "guest_stat")
      {
        document.getElementById('opts').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
	document.getElementById('opts_txt1').style.color = "#b58505";
      }
      if(d == "site_statsa")
      {
        document.getElementById('statsa').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
	document.getElementById('sitestatsa').style.color = "";
      }
      if(d == "site_statsi")
      {
        document.getElementById('statsi').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
	document.getElementById('sitestatsi').style.color = "";
      }
      if(d == "site_statsv")
      {
        document.getElementById('statsv').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
	document.getElementById('sitestatsv').style.color = "";
      }
      if(d == "site_statsg")
      {
        document.getElementById('statsg').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
	document.getElementById('sitestatsg').style.color = "";
      }
      if(d == "recoverpass")
      {
        document.getElementById('fptxt').style.color = "";
      }
    }
}
function getObj(name)
{
    if (document.getElementById)
    {
	this.obj = document.getElementById(name);
	this.style = document.getElementById(name).style;
    }
    else if (document.all)
    {
	this.obj = document.all[name];
	this.style = document.all[name].style;
     }
    else if (document.layers)
    {
        this.obj = document.layers[name];
        this.style = document.layers[name];
    }
}

function TabSearch(d) {
if(document.getElementById(d).style.display == "none") 
    { 
	if (d=="audios")
	{
	    document.getElementById('all').style.display = "none";
	    document.getElementById('images').style.display = "none";
	    document.getElementById('videos').style.display = "none";
	    document.getElementById('members').style.display = "none";
	    document.getElementById('tags').style.display = "none";
	    document.getElementById(d).style.display = "block";
	    var a = new getObj('saudio'); a.style.color = "white";
	    var b = new getObj('simage'); b.style.color = "";
	    var c = new getObj('svideo'); c.style.color = "";
	    var d = new getObj('smember'); d.style.color = "";
	    var e = new getObj('stags'); e.style.color = "";
	}
	if (d=="images")
	{
	    document.getElementById('all').style.display = "none";
	    document.getElementById('audios').style.display = "none";
	    document.getElementById('videos').style.display = "none";
	    document.getElementById('members').style.display = "none";
	    document.getElementById('tags').style.display = "none";
	    document.getElementById(d).style.display = "block";
	    var a = new getObj('simage'); a.style.color = "white";
	    var b = new getObj('saudio'); b.style.color = "";
	    var c = new getObj('svideo'); c.style.color = "";
	    var d = new getObj('smember'); d.style.color = "";
	    var e = new getObj('stags'); e.style.color = "";
	    
	}
	if (d=="videos")
	{
	    document.getElementById('all').style.display = "none";
	    document.getElementById('audios').style.display = "none";
	    document.getElementById('images').style.display = "none";
	    document.getElementById('members').style.display = "none";
	    document.getElementById('tags').style.display = "none";
	    document.getElementById(d).style.display = "block";
	    var a = new getObj('svideo'); a.style.color = "white";
	    var b = new getObj('saudio'); b.style.color = "";
	    var c = new getObj('simage'); c.style.color = "";
	    var d = new getObj('smember'); d.style.color = "";
	    var e = new getObj('stags'); e.style.color = "";
	}
	if (d=="members")
	{
	    document.getElementById('all').style.display = "none";
	    document.getElementById('audios').style.display = "none";
	    document.getElementById('images').style.display = "none";
	    document.getElementById('videos').style.display = "none";
	    document.getElementById('tags').style.display = "none";
	    document.getElementById(d).style.display = "block";
	    var a = new getObj('smember'); a.style.color = "white";
	    var b = new getObj('saudio'); b.style.color = "";
	    var c = new getObj('simage'); c.style.color = "";
	    var d = new getObj('svideo'); d.style.color = "";
	    var e = new getObj('stags'); e.style.color = "";
	}
	if (d=="tags")
	{
	    document.getElementById('all').style.display = "none";
	    document.getElementById('audios').style.display = "none";
	    document.getElementById('images').style.display = "none";
	    document.getElementById('videos').style.display = "none";
	    document.getElementById('members').style.display = "none";
	    document.getElementById(d).style.display = "block";
	    var a = new getObj('stags'); a.style.color = "white";
	    var b = new getObj('saudio'); b.style.color = "";
	    var c = new getObj('simage'); c.style.color = "";
	    var d = new getObj('svideo'); d.style.color = "";
	    var e = new getObj('smember'); e.style.color = "";
	}
    }
else
{
    if (d=="audios" || d=="images" || d=="videos" || d=="members" || d=="tags")
    {
	document.getElementById(d).style.display = "none";
	document.getElementById('all').style.display = "block";
	document.getElementById('images').style.display = "none";
	document.getElementById('videos').style.display = "none";
	document.getElementById('members').style.display = "none";
	document.getElementById('tags').style.display = "none";
	var a = new getObj('saudio'); a.style.color = "";
	var b = new getObj('simage'); b.style.color = "";
	var c = new getObj('svideo'); c.style.color = "";
	var d = new getObj('smember'); d.style.color = "";
	var e = new getObj('stags'); e.style.color = "";
    }
}    
}
