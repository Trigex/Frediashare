    <table cellpadding="10" cellspacing="0" align="center" class="width950" border="0">
	<tr>
	    <td width="50%" valign="top" class="">
	    <form name="resetform" method="post" action="">
		<table cellpadding="2" cellspacing="0" align="center" width="100%" border="0">
		    <tr><td class="">{$passreset1}</td></tr>
		</table>
		<table width="100%" border="0" cellspacing="0" cellpadding="2" align=center class="br1">
		    <tr><td colspan="3" class="">&nbsp;</td></tr>
		    <tr>
			<td width="20">&nbsp;</td>
        		<td align="left" width="150">{$mypr_passtxt3}</td>
        		<td><input type="password" name="newpass1" class="ff" size="25"></td>
        	    </tr>
        	    <tr>
			<td></td>
        		<td align="left"><span class="star">*</span>{$mypr_passtxt6}</td>
        		<td><input type="password" name="newpass2" class="ff" size="25"></td>
        	    </tr>
        	    <tr>
        		<td colspan="2"></td>
        		<td>
        		    <input type="submit" name="resetme" value="{$myfiles_editbtnsave}" class="fb">
        		    <input type="submit" name="cancelme" value="{$myfiles_editbtncancel}" class="fb" onclick="location.href='{$base_url}/main'; return false;">
    			</td>
        	    </tr>
        	    <tr><td colspan="3">&nbsp;</td></tr>
        	</table>
    	    </form>
    	    {if $recoverytimer eq "1"}
    	    <form name="counter"><br>
    		<table cellpadding="2" cellspacing="0" align="center" width="100%" border="0">
    		    <tr>
    			<td width="20">&nbsp;</td> 
    			<td width="150"><div align="center">{$linkexp}</div></td>
    			<td><input type="text" name="d2" class="ff" readonly size="25"></td>
    		    </tr>
    		</table>
    	    </form> 
    	    <script type="text/javascript"> 
    		<!-- //
    		var milisec=0;
    		var seconds={if $due ne ""}{$due}{else}0{/if};
    		document.counter.d2.value='30';
    		{literal}
    		function display() {
    		    if (milisec<=0) {
    			milisec=10;
    			seconds-=1;
    		    }
    		    if (seconds<=-1) {
    			milisec=0;
    			seconds+=1;
    		    }  else milisec-=1;
    		    var mymin = Math.floor(seconds/60);
    		    var mysec = Math.floor(seconds%60);
    		    var myh = Math.floor(mymin/60);
    		    
    		    document.counter.d2.value = myh+"h : "+mymin%60+"m : "+mysec+"s : "+milisec+"ms";
    		    setTimeout("display()",100);
    		} 
    		{/literal}
    		display();
    		--> 
    		</script> 
    	    {/if}
    	    </td>
    	    <td width="50%" class="" valign="top">{include file="auth_table.tpl"}</td>
    	</tr>
    </table>
