<?php
include("include/config.inc.php");
include("include/database.class.php");
$objDB = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$objDB->connect();
$tempid= $_REQUEST['eid'];
mysql_query("delete from tbl_category where category_id= $tempid ") or die('error1');
$result=mysql_query("SELECT * FROM tbl_category where category_id= $tempid");
while($data=mysql_fetch_assoc($result))
{
	$resultpro=mysql_query("select ProImage from productdetail where ProId=$data[ProId]") or die("error3");
	mysql_query("delete from productdetail where ProId = $data[ProId]") or die("error4");
	if(isset($resultpro))
	{
		$tmp_val = mysql_fetch_row($resultpro);
		$oldimage = $tmp_val[0];
	}
	if(strlen($oldimage)>5)
	{
		unlink("../images/".$oldimage);
	}
}
print "<META http-equiv='refresh' content='0;URL=view_category.php'>";	
exit;
?>