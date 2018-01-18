var lthumbs = new Array(); var lturl = new Array(); var ltimg = new Array();

function limgchange ( i, genid ) { 
    var inc = 0;
    var lthnr = document.getElementById( 'lthnr'+genid ).value;
    
    if ( lturl[genid] ) {
	while ( ( lthumbs[genid][i] == 0 || i >= lthnr ) && inc < 100 ) { 
	    if ( i >= lthnr ) { i = 0; }
		else { i++; }
	    inc++;
	}

	if ( ltimg[genid][i].complete ) { 
	    document.getElementById( genid ).src = ltimg[genid][i].src;
	    setTimeout ( "limgchange("+(i+1)+",'"+genid+"')", document.getElementById( 'lthdelay'+genid ).value );
	}
	else { 
	    setTimeout ( "limgchange("+i+",'"+genid+"')" , 20);
	}
    }
}

function lloadslide ( url, genid, j ) { if ( lturl[genid] ) { ltimg[genid][j].src = url; } }

function lstartslide ( genid, ta, te ) { 
    lturl[genid] = 1 ;
    var yy, xxx;
    var first = 1;
    var lthnr = document.getElementById("lthnr"+genid).value;

    for ( var j = 0; j < lthnr; j++ ) { 
	if  ( lthumbs[genid][j] ==1 ) { 
	    ltimg[genid][j] = new Image();
	    yy = j+1;
	    xxx = yy;
	    if ( first ) { first = 0; lloadslide ( ta+xxx+te, genid, j ); }
	    else { setTimeout ( "lloadslide('"+ta+xxx+te+"','"+genid+"',"+j +")", j*50 ); }
	}
    }
    limgchange ( 0, genid );
}

function lstopslide ( genid ) { lturl[genid] = 0; }
