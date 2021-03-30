<?php
include("include/config.inc.php");
include("include/database.class.php");
$objDB = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$objDB->connect();
$tempid= $_REQUEST['eid'];
$result=mysql_query("select VIdeoName from videodata where VideoId=$tempid") or die("error");
mysql_query("delete from videodata where VideoId= $tempid ") or die("error");
if(isset($result))
{
	$tmp_val = mysql_fetch_row($result);
	$oldimage = $tmp_val[0];
}
if(strlen($oldimage)>5)
{
	unlink("../images/".$oldimage);
}
print "<META http-equiv='refresh' content='0;URL=all_video.php''>";	
exit;
?>