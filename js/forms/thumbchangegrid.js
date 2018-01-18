var thumbs = new Array(); var turl = new Array(); var timg = new Array();

function imgchange ( i, genid ) { 
    var inc = 0;
    var thnr = document.getElementById( 'thnr'+genid ).value;
    
    if ( turl[genid] ) {
	while ( ( thumbs[genid][i] == 0 || i >= thnr ) && inc < 100 ) { 
	    if ( i >= thnr ) { i = 0; }
		else { i++; }
	    inc++;
	}

	if ( timg[genid][i].complete ) { 
	    document.getElementById( genid ).src = timg[genid][i].src;
	    setTimeout ( "imgchange("+(i+1)+",'"+genid+"')", document.getElementById( 'thdelay'+genid ).value );
	}
	else { 
	    setTimeout ( "imgchange("+i+",'"+genid+"')" , 20);
	}
    }
}

function loadslide ( url, genid, j ) { if ( turl[genid] ) { timg[genid][j].src = url; } }

function startslide ( genid, ta, te ) { 
    turl[genid] = 1 ;
    var yy, xxx;
    var first = 1;
    var thnr = document.getElementById( 'thnr'+genid ).value;

    for ( var j = 0; j < thnr; j++ ) { 
	if  ( thumbs[genid][j] ==1 ) { 
	    timg[genid][j] = new Image();
	    yy = j+1;
	    xxx = yy;
	    if ( first ) { first = 0; loadslide ( ta+xxx+te, genid, j ); }
	    else { setTimeout ( "loadslide('"+ta+xxx+te+"','"+genid+"',"+j +")", j*50 ); }
	}
    }
    imgchange ( 0, genid );
}

function stopslide ( genid ) { turl[genid] = 0; }
