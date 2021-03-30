<?php
include("include/config.inc.php");
include("include/database.class.php");
$objDB = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$objDB->connect();
$tempid= $_REQUEST['eid'];
$result=mysql_query("select * from tbl_homepro where homepro_id=$tempid") or die("error");
mysql_query("delete from tbl_homepro where homepro_id= $tempid ") or die("error");
if(isset($result))
{
	$tmp_val = mysql_fetch_row($result);
	$oldimage = $tmp_val[0];
}
if(strlen($oldimage)>5)
{
	unlink("../images/".$oldimage);
}
print "<META http-equiv='refresh' content='0;URL=view_honepro.php'>";	
exit;
?>