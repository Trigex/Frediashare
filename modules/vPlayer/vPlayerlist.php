<?php
include('../../configs/config.php');
if ( $_REQUEST['aid'] != '' ) { $key=filter_title($_REQUEST['aid']); $ad = 'yes'; }
elseif ( $_REQUEST['id'] != '' ) { $key=filter_title($_REQUEST['id']); $ad = 'no'; } 
elseif ( $_REQUEST['fid'] != '' ) { $key=filter_title($_REQUEST['fid']); $ad = 'no'; } 
if ( $_GET['fid'] != '' ) {
    $tbl_id = "ID='2'";
} else {
    $tbl_id = "ID='1'";
} 
function untime($val) 
{
    global $lang;
    
    $hours = floor ($val / 3600);
    $minutes = floor(($val - ($hours * 3600)) / 60);
    if ($minutes < 10)
        $minutes = "0".$minutes;
    $seconds = $val - ($hours * 3600) - ($minutes * 60);
    if ($seconds < 10)
        $seconds = "0".$seconds;

    return $minutes.$lang['fileduration_min'].round($seconds).$lang['fileduration_sec'];
}

$active = "and active='1' and is_inapp='no'";
$rs = $conn->execute("select playlist from player_settings where $tbl_id;");
$pl_opt = $rs->fields['playlist'];

switch ( $pl_opt ) {
    case 'feat': $sql = "select * from files_video where vtype='public' and vkey!='$key' and active='1' and is_inapp='no' and is_featured='yes' order by views desc limit 0, 50"; break;
    case 'comm': $sql = "select * from files_video where vtype='public' and vkey!='$key' and active='1' and is_inapp='no' and comments!='0' order by comments desc limit 0, 50"; break;
    case 'tr': $sql = "select * from files_video where vtype='public' and vkey!='$key' and active='1' and is_inapp='no' and rate!='0' order by rate desc limit 0, 50"; break; 
    case 'mv': $sql = "select * from files_video where vtype='public' and vkey!='$key' and active='1' and is_inapp='no' and views!='0' order by views desc limit 0, 50"; break; 
    default: $sql = "select * from files_video where vtype='public' and vkey!='$key' and active='1' and is_inapp='no' and (vtags like '%$relv[0]%' $chnl) order by views desc"; break;
}

if ( $pl_opt == 'rel' )
{ 
    $list=key_to_info($key);
    
    $relv=explode(" ",$list[3]);
    if(count($relv)>1)
	for($i=1;$i<count($relv);$i++) { $chnl.="or vtags like '%$relv[$i]%'"; }
    $sql = "select * from files_video where vtype='public' and vkey!='$key' and active='1' and is_inapp='no' and (vtags like '%$relv[0]%' $chnl) order by views desc";
    $result = mysql_query($sql);
}
else { $result = mysql_query($sql); }

//BEGIN XML PLAYLIST FILE
header('Content-Type: text/xml; charset=utf-8');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?>
<xml>
    <videos>
<?php
    while($row = mysql_fetch_array($result, MYSQL_ASSOC))
    {
?>    
	<video>
	    <title><?php echo $row['vtitle']; ?></title>
	    <duration><?php echo $lang['adm_nfptxt11'].untime($row['vduration']); ?></duration>
	    <url><?php if ( $ad == 'yes' ) { echo $row['vkey']; } else { if ($config['same_title_uploads']  == '0') { echo $config['base_url'].'/video/'.urlencode(ereg_replace(" {1,}", "_", $row['vtitle'])); } else { echo $config['base_url'].'/video/'.$row['vkey']; } } ?></url>
	    <image><?php $rndbn = insert_vid_to_rndvv(); echo $config['tmb_url'].'/user'.$row['uid'].'/'.$rndbn.'_'.$row['vid'].substr(md5($row['vid']),13,7).'.jpg'; ?></image>
	    <desc><?php echo modifier_spchar($row['vdescr']); ?></desc>
	    <stars><?php echo substr($row['rate'], 0, 3); ?></stars>
	</video>
<?php
    }
?>	
    </videos>
</xml>