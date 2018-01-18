function blinkId(id) {
var i = document.getElementById(id);
if(i.style.visibility=='hidden') {
i.style.visibility='visible';
} else {
i.style.visibility='hidden';
}
    setTimeout("blinkId('"+id+"')",700);
return true;
}

function ldiv(d) {
    document.getElementById('ldivx').value = d;
}
function thisDiv(d) {
    document.getElementById('thisDiv').value = d;
}
function checkAllmsg(field)
{
    document.inboxmsg['mid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function uncheckAllmsg(field)
{
    document.inboxmsg['mid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}

function checkAllmya(field)
{
    document.filesel['mid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function uncheckAllmya(field)
{
    document.filesel['mid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}

function vcheckAllmya(field)
{
    document.gvfilesel['gmid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function vuncheckAllmya(field)
{
    document.gvfilesel['gmid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}
function icheckAllmya(field)
{
    document.gifilesel['gmid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function iuncheckAllmya(field)
{
    document.gifilesel['gmid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}
function acheckAllmya(field)
{
    document.gafilesel['gmid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function auncheckAllmya(field)
{
    document.gafilesel['gmid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}

function checkAllmya2xx(field)
{
    document.gafilesel['gamid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function uncheckAllmya2xx(field)
{
    document.gafilesel['gamid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}

function checkAllmyfvg(field)
{
//    HideContent('vactdiv');
    document.gvfilesel['gvmid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function uncheckAllmyfvg(field)
{
//    ShowContent('vactdiv');
    document.gvfilesel['gvmid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}
function checkAllmyfig(field)
{
//    HideContent('iactdiv');
    document.gifilesel['gimid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function uncheckAllmyfig(field)
{
//    ShowContent('iactdiv');
    document.gifilesel['gimid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}
function checkAllmyfag(field)
{
//    HideContent('aactdiv');
    document.gafilesel['gamid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function uncheckAllmyfag(field)
{
//    ShowContent('aactdiv');
    document.gafilesel['gamid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}


function checkAllmyfv(field)
{
//    HideContent('vactdiv2');
    document.vfilesel['vmid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function uncheckAllmyfv(field)
{
//    ShowContent('vactdiv2');
    document.vfilesel['vmid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}

function checkAllmyfi(field)
{
//    HideContent('iactdiv2');
    document.ifilesel['imid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function uncheckAllmyfi(field)
{
//    ShowContent('iactdiv2');
    document.ifilesel['imid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}

function checkAllmyfa(field)
{
//    HideContent('aactdiv2');
    document.afilesel['amid[]'].checked = true;
    for (i = 0; i < field.length; i++)
    field[i].checked = true ;
}
function uncheckAllmyfa(field)
{
//    ShowContent('aactdiv2');
    document.afilesel['amid[]'].checked = false;
    for (i = 0; i < field.length; i++)
    field[i].checked = false ;
}

function ReverseExpand(d)
{
    if(document.getElementById(d).style.display == "none")
    { 
	if (d == 'bv')
	    document.getElementById('opts').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
	else if (d == 'bi')
	    document.getElementById('optsi').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
	else if (d == 'ba')
	    document.getElementById('optsa').src = baseurl+'/modules/themes/black/images/sign_plus.gif';
    }
    else 
    {
	if (d == 'bv')
	    document.getElementById('opts').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
	else if (d == 'bi')
	    document.getElementById('optsi').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
	else if (d == 'ba')
	    document.getElementById('optsa').src = baseurl+'/modules/themes/black/images/sign_minus.gif';
    }
}
