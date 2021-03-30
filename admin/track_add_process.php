<?php
include("conn.php");

$awb=$_POST['awb'];
$consignee=$_POST['consignee'];
$bookdate=$_POST['bookdate'];
$country=$_POST['country'];
$status=$_POST['status'];
$ddate=$_POST['ddate'];
$rcvrname=$_POST['rcvrname'];
$web=$_POST['web'];
$forwn=$_POST['forwn'];

date($bookdate,"dd/mm/YYYY");
date($ddate,"DD/MM/YYYY");
//move_uploaded_file($_FILES['category']['tmp_name'],"sub_category/".$category1);

mysql_query("insert into `track` (`awb`,`consignee`,`bookdate`,`country`,`status`,`ddate`,`rcvrname`,`web`,`forwn`) values('$awb','$consignee','$bookdate','$country','$status','$ddate','$rcvrname','$web','$forwn')") or die();

echo "<script>window.location='track.php'</script>";
?>