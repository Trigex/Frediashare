var uthumbs = new Array(); var uturl = new Array(); var utimg = new Array();

function uimgchange ( i, genid ) { 
    var inc = 0;
    var uthnr = document.getElementById( 'uthnr'+genid ).value;
    
    if ( uturl[genid] ) {
	while ( ( uthumbs[genid][i] == 0 || i >= uthnr ) && inc < 100 ) { 
	    if ( i >= uthnr ) { i = 0; }
		else { i++; }
	    inc++;
	}

	if ( utimg[genid][i].complete ) { 
	    document.getElementById( genid ).src = utimg[genid][i].src;
	    setTimeout ( "uimgchange("+(i+1)+",'"+genid+"')", document.getElementById( 'uthdelay'+genid ).value );
	}
	else { 
	    setTimeout ( "uimgchange("+i+",'"+genid+"')" , 20);
	}
    }
}

function uloadslide ( url, genid, j ) { if ( uturl[genid] ) { utimg[genid][j].src = url; } }

function ustartslide ( genid, ta, te ) { 
    uturl[genid] = 1 ;
    var yy, xxx;
    var first = 1;
    var uthnr = document.getElementById("uthnr"+genid).value;

    for ( var j = 0; j < uthnr; j++ ) { 
	if  ( uthumbs[genid][j] ==1 ) { 
	    utimg[genid][j] = new Image();
	    yy = j+1;
	    xxx = yy;
	    if ( first ) { first = 0; uloadslide ( ta+xxx+te, genid, j ); }
	    else { setTimeout ( "uloadslide('"+ta+xxx+te+"','"+genid+"',"+j +")", j*50 ); }
	}
    }
    uimgchange ( 0, genid );
}

function ustopslide ( genid ) { uturl[genid] = 0; }
