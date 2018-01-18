<?php
function insert_key_type($a)
{
    global $conn;
    global $config;
    $sql="select vkey from files_video where vkey='$a[vkey]'";
    $sql1="select vkey from files_image where vkey='$a[vkey]'";
    $sql2="select vkey from files_audio where vkey='$a[vkey]'";
    $rs=$conn->execute($sql);
    $rs1=$conn->execute($sql1);
    $rs2=$conn->execute($sql2);
    if ($rs->recordcount()>0) { $type="video"; $rs->Close(); }
    elseif ($rs1->recordcount()>0) { $type="image"; $rs1->Close(); }
    elseif ($rs2->recordcount()>0) { $type="audio"; $rs2->Close(); }
    
    return $type;
}
function insert_rate_stats($a)
{
    global $conn;
    global $config;
    $sql="select vote_stats from files_video where vkey='$a[vkey]'";
    $sql1="select vote_stats from files_image where vkey='$a[vkey]'";
    $sql2="select vote_stats from files_audio where vkey='$a[vkey]'";
    $rs=$conn->execute($sql);
    $rs1=$conn->execute($sql1);
    $rs2=$conn->execute($sql2);
    if ($rs->recordcount()>0) { $vs=$rs->fields[vote_stats]; $rs->Close(); }
    elseif ($rs1->recordcount()>0) { $vs=$rs1->fields[vote_stats]; $rs1->Close(); }
    elseif ($rs2->recordcount()>0) { $vs=$rs2->fields[vote_stats]; $rs2->Close(); }
    
    $ip = split('[,]', $vs);
    return $ip;
}
function insert_rate_filter_user($a)
{
    $before = substr($a[rate], 0, strpos($a[rate], ":")); //before
    return $before;
}
function insert_rate_filter_ip($a)
{
    $after =strstr($a[rate], ":"); //after
    $after = substr($after, 1);
    $before = substr($after, 0, strpos($after, ":")); //before
    return $before;
}
function insert_rate_filter_vote($a)
{
    $after =strstr($a[rate], ":"); //after
    $after = substr($after, 1);
    $after =strstr($after, ":");
    $after = substr($after, 1);
    return $after;
}
function insert_vote_counts($a)
{
    global $conn;
    global $config;
    $sql="select rate from files_video where vkey='$a[vkey]'";
    $sql1="select rate from files_image where vkey='$a[vkey]'";
    $sql2="select rate from files_audio where vkey='$a[vkey]'";
    $rs=$conn->execute($sql); 
    $rs1=$conn->execute($sql1); 
    $rs2=$conn->execute($sql2); 
    if ($rs->recordcount()>0) { $rate[0] = @number_format($rs->fields[rate],1); $rs->Close(); }
    elseif ($rs1->recordcount()>0) { $rate[0] = @number_format($rs1->fields[rate],1); $rs1->Close(); }
    elseif ($rs2->recordcount()>0) { $rate[0] = @number_format($rs2->fields[rate],1); $rs2->Close(); }
    
    $sql="select total_votes from files_video where vkey='$a[vkey]'";
    $sql1="select total_votes from files_image where vkey='$a[vkey]'";
    $sql2="select total_votes from files_audio where vkey='$a[vkey]'";
    $rs=$conn->execute($sql);
    $rs1=$conn->execute($sql1);
    $rs2=$conn->execute($sql2);
    if ($rs->recordcount()>0) { $rate[1]=$rs->fields[total_votes]; $rs->Close(); }
    elseif ($rs1->recordcount()>0) { $rate[1]=$rs1->fields[total_votes]; $rs1->Close(); }
    elseif ($rs2->recordcount()>0) { $rate[1]=$rs2->fields[total_votes]; $rs2->Close(); }
    
    return $rate;
}
?>