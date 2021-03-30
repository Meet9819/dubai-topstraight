<?php
include("conn.php");

$id=$_REQUEST['id'];
mysql_query("DELETE FROM `track` WHERE `id`=$id");

echo "<script>window.location='track.php'</script>";
?>