<?php
include('../../configs/config.php');

$sql = "select * from adv_text where active='1' order by rand();";
$result = mysql_query($sql);

//BEGIN XML TEXT ADS FILE
header('Content-Type: text/xml; charset=utf-8');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?> 
<xml>
<?php
    while($row = mysql_fetch_array($result, MYSQL_ASSOC))
    {
?>  
  <adv>
    <title><?php echo $row['name']; ?></title>
    <descr><?php echo $row['descrip']; ?></descr>
    <ads_url><?php echo $config['base_url'].'/adclick/'.$row['adkey']; ?></ads_url>
    <ads_displayed_url><?php echo $row['url']; ?></ads_displayed_url>
  </adv>
<?php
    }
?>  
</xml>