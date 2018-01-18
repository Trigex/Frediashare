function sh(theDIVs) {
  var elems = theDIVs.split(',');
  for(i=0;i<elems.length;i++) 
  {
 	var xdiv = document.getElementById(elems[i]);
	  if(xdiv.style.display=='none') {
		xdiv.style.display='block';
	  } else {
		xdiv.style.display='none';
	  }
  }
}

function addimagePicLine() {
	xajax_add_imageline();
}
function delimagePicLine(d) {
	xajax_del_imageline();
}
function list_featured(d) {
	if (d=="video")
	{
	    document.getElementById('fv1').className = "active";
	    document.getElementById('fv2').className = "";
	    document.getElementById('fv3').className = "";
	}
	if (d=="image")
	{
	    document.getElementById('fi1').className = "active";
	    document.getElementById('fi2').className = "";
	    document.getElementById('fi3').className = "";
	}
	xajax_feat(d);
}
function list_toprated(d) {
	if (d=="video")
	{
	    document.getElementById('fv2').className = "active";
	    document.getElementById('fv1').className = "";
	    document.getElementById('fv3').className = "";
	}	
	if (d=="image")
	{
	    document.getElementById('fi2').className = "active";
	    document.getElementById('fi1').className = "";
	    document.getElementById('fi3').className = "";
	}	
	xajax_toprated(d);
}
function list_mostrecent(d) {
	if (d=="video")
	{
	    document.getElementById('fv3').className = "active";
	    document.getElementById('fv1').className = "";
	    document.getElementById('fv2').className = "";
	}
	if (d=="image")
	{
	    document.getElementById('fi3').className = "active";
	    document.getElementById('fi1').className = "";
	    document.getElementById('fi2').className = "";
	}
	xajax_mostrecent(d);
}
