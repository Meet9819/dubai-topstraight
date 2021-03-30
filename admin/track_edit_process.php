<?php
include("conn.php");
$id=$_REQUEST['id'];
$awb=$_POST['awb'];
$consignee=$_POST['consignee'];

$bookdate=$_POST['bookdate'];
$country=$_POST['country'];
$status=$_POST['status'];
$ddate=$_POST['ddate'];
$rcvrname=$_POST['rcvrname'];
$web=$_POST['web'];
$forwn=$_POST['forwn'];


if($id=="")
{
		echo "update `track` set awb='$awb',`consignee`='$consignee',`bookdate`='$bookdate',`country`='$country',`status`='$status',`ddate`='$ddate',`rcvrname`='$rcvrname',`web`='$web',`forwn`='$forwn' where id='$id'";
	mysql_query("update `track` set awb='$awb',`consignee`='$consignee',`bookdate`='$bookdate',`country`='$country',`status`='$status',`ddate`='$ddate',`rcvrname`='$rcvrname',`web`='$web',`forwn`='$forwn' where id='$id'");
	
	echo "<script>window.location='sub_category.php'</script>";
}
else
{		
	mysql_query("update `track` set awb='$awb',`consignee`='$consignee',`bookdate`='$bookdate',`country`='$country',`status`='$status',`ddate`='$ddate',`rcvrname`='$rcvrname',`web`='$web',`forwn`='$forwn' where id='$id'");
	
	echo "<script>window.location='track.php'</script>";
}
?>