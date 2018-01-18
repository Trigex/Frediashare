<?php
require '../../configs/config.php';

if ( isset ( $_GET['id'] ) ) $id = filter_title($_GET['id']); elseif ( isset ( $_GET['fid'] ) ) $id = filter_title($_GET['fid']);
if ( $_GET['fid'] != '' ) { $tbl_id = "ID='2'"; } else { $tbl_id = "ID='1'"; } 

$list = key_to_info ( $id ); $vtitle = $list[2];
//$pc = $conn->execute("select pb, playlist, embed, share, repeats, mail from player_settings where $tbl_id;");
$pc = $conn->execute("select * from player_settings where $tbl_id;");
$pc_embed = $pc->fields['embed'];
$pc_share = $pc->fields['share'];
$pc_mail = $pc->fields['mail'];
$pc_rpt = $pc->fields['repeats'];
$pc_plist = $pc->fields['playlist'];
$pc_pb = $pc->fields['pb'];
$related_color = $pc->fields['color_related'];
$embed_color = $pc->fields['color_embed'];
$share_color = $pc->fields['color_share'];
$mail_color = $pc->fields['color_mail'];
$replay_color = $pc->fields['color_replay'];
$time_color = $pc->fields['color_time'];
$copy_color = $pc->fields['color_copy'];
//$adv_nav_color = $pc->fields['color_ta1'];
$adv_nav_color = '999999';
$adv_title_color = $pc->fields['color_ta2'];
$adv_body_color = $pc->fields['color_ta3'];
$adv_link_color = $pc->fields['color_ta4'];
$related = 'true';
switch ( $pc_pb ) {
    case '1': $pl_btns = 'true'; break;
    case '0': $pl_btns = 'false'; break;
    default: $pl_btns = 'true'; break;
} 
switch ( $pc_embed ) {
    case '0': $pc_embtn = 'false'; break;
    case '1': $pc_embtn = 'true'; break;
    default: $pc_embtn = 'true'; break;
} 
switch ( $pc_share ) {
    case '0': $pc_shbtn = 'false'; break;
    case '1': $pc_shbtn = 'true'; break;
    default: $pc_shbtn = 'true'; break;
} 
switch ( $pc_mail ) {
    case '0': $pc_mabtn = 'false'; break;
    case '1': $pc_mabtn = 'true'; break;
    default: $pc_mabtn = 'true'; break;
} 
switch ( $pc_rpt ) {
    case '0': $pc_rpbtn = 'false'; break;
    case '1': $pc_rpbtn = 'true'; break;
    default: $pc_rpbtn = 'true'; break;
} 
switch ( $pc_plist ) {
    case 'feat': $pc_pltxt = $lang['adm_nfptxt7']; $rel_txt = $lang['adm_nfpbtn2']; break;
    case 'comm': $pc_pltxt = $lang['adm_nfptxt8']; $rel_txt = $lang['adm_nfpbtn3']; break;
    case 'tr': $pc_pltxt = $lang['adm_nfptxt9']; $rel_txt = $lang['adm_nfpbtn4']; break;
    case 'mv': $pc_pltxt = $lang['adm_nfptxt10']; $rel_txt = $lang['adm_nfpbtn9']; break;
    default: $pc_pltxt = $lang['adm_nfptxt2']; $rel_txt = $lang['adm_nfpbtn1']; break;
} 


$th = $conn->execute("select * from player_settings where $tbl_id;");
$theme = $th->fields['theme'];
$skin_url   = $config['base_url']. '/modules/vPlayer/skins/' .$theme;

header('Content-Type: text/xml; charset=utf-8');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?>
<xml>
    <text>
	<advertisement><?php echo $lang['adm_nfptxt1']; ?></advertisement>
        <options>
    	    <related><?php echo $pc_pltxt; ?></related>
    	    <share><?php echo $lang['adm_nfptxt3']; ?></share>
    	    <embed><?php echo $lang['adm_nfptxt4']; ?></embed>
	    <mail>
      		<title><?php echo $lang['adm_nfpbtn16'].' '.$vtitle; ?></title>
    		<error><?php echo $lang['adm_nfpbtn14']; ?></error>
      		<success><?php echo $lang['adm_nfpbtn15']; ?></success>
      		<script><?php echo $config['base_url']; ?>/modules/vPlayer/vPlayermail.php?id=<?php echo $id; ?></script>
      		<fields>
        	    <me><?php echo $lang['inbox_itblh3']; ?>: </me>
    		    <to><?php echo $lang['inbox_otblh2']; ?>: </to>
        	    <message><?php echo $lang['adm_membanth1']; ?>: </message>
      		</fields>
    	    </mail>
        </options>
    </text>
    <graphics>
        <options>
	    <buttons visible="<?php echo $pl_btns; ?>">
                <mail enable="<?php echo $pc_mabtn; ?>" text="<?php echo $lang['adm_nfpbtn7']; ?>"><?php echo $skin_url; ?>/btn_mail.png</mail>
                <related enable="<?php echo $related; ?>" text="<?php echo $rel_txt; ?>"><?php echo $skin_url; ?>/btn_related.png</related>
                <share enable="<?php echo $pc_shbtn; ?>" text="<?php echo $lang['adm_nfpbtn6']; ?>"><?php echo $skin_url; ?>/btn_share.png</share>
                <embed enable="<?php echo $pc_embtn; ?>" text="<?php echo $lang['adm_nfpbtn5']; ?>"><?php echo $skin_url; ?>/btn_embed.png</embed>
                <replay enable="<?php echo $pc_rpbtn; ?>" text="<?php echo $lang['adm_nfpbtn8']; ?>"><?php echo $skin_url; ?>/btn_replay.png</replay>
                <copy text="<?php echo $lang['adm_nfpbtn10']; ?>"><?php echo $skin_url; ?>/btn_copy.png</copy>
		<send text="<?php echo $lang['adm_nfpbtn12']; ?>"><?php echo $skin_url; ?>/btn_copy.png</send>
                <close><?php echo $skin_url; ?>/btn_close.png</close>
            </buttons>
        </options>
        <navigation>
            <play normal="<?php echo $skin_url; ?>/play.png" over="<?php echo $skin_url; ?>/play_over.png"/>
            <pause normal="<?php echo $skin_url; ?>/pause.png" over="<?php echo $skin_url; ?>/pause_over.png"/>
            <stop normal="<?php echo $skin_url; ?>/stop.png" over="<?php echo $skin_url; ?>/stop_over.png"/>
            <volume normal="<?php echo $skin_url; ?>/sound.png" over="<?php echo $skin_url; ?>/sound_over.png"/>
            <mute><?php echo $skin_url; ?>/mute.png</mute>
            <options normal="<?php echo $skin_url; ?>/options.png" over="<?php echo $skin_url; ?>/options_over.png"/>
            <fullscreen normal="<?php echo $skin_url; ?>/fs.png" over="<?php echo $skin_url; ?>/fs_over.png"/>
            <normalsreen normal="<?php echo $skin_url; ?>/normal.png" over="<?php echo $skin_url; ?>/normal_over.png"/>
        </navigation>
        <other>
            <msgcopied><?php echo $lang['adm_nfpbtn11']; ?></msgcopied>
            <centerButton><?php echo $skin_url; ?>/center_btn.png</centerButton>
            <navigationBg>
                <left><?php echo $skin_url; ?>/bg_nav_left.png</left>
                <middle><?php echo $skin_url; ?>/bg_nav_middle.png</middle>
                <right><?php echo $skin_url; ?>/bg_nav_right.png</right>
            </navigationBg>
        </other>
        <videoprogress>
            <tracker normal="<?php echo $skin_url; ?>/time_track.png" over="<?php echo $skin_url; ?>/time_track_over.png"></tracker>
            <bg><?php echo $skin_url; ?>/time_bg.png</bg>
            <play><?php echo $skin_url; ?>/time_play.png</play>
            <load><?php echo $skin_url; ?>/time_load.png</load>
        </videoprogress>
        <volumeprogress>
            <traker><?php echo $skin_url; ?>/volume_track.png</traker>
            <bg><?php echo $skin_url; ?>/volume_bg.png</bg>
            <active><?php echo $skin_url; ?>/volume_value.png</active>
        </volumeprogress>        
    </graphics>
    <colors>
        <mail>0x<?php echo $mail_color; ?></mail>
        <related>0x<?php echo $related_color; ?></related>
        <embed>0x<?php echo $embed_color; ?></embed>
        <share>0x<?php echo $share_color; ?></share>
        <replay>0x<?php echo $replay_color; ?></replay>
        <copy>0x<?php echo $copy_color; ?></copy>
        <time>0x<?php echo $time_color; ?></time>
        <adnavigation>0x<?php echo $adv_nav_color; ?></adnavigation>
        <adv_text_title>0x<?php echo $adv_title_color; ?></adv_text_title>
        <adv_text_body>0x<?php echo $adv_body_color; ?></adv_text_body>
        <adv_text_link>0x<?php echo $adv_link_color; ?></adv_text_link>
    </colors>
</xml>
