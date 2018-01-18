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

function addPicLine() {
	xajax_add_line();
}
function delPicLine() {
	xajax_del_line();
}
function addiPicLine() {
	xajax_add_iline();
}
function deliPicLine() {
	xajax_del_iline();
}


