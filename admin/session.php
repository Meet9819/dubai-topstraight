<?php
session_start();
if(!isset($_SESSION["user_id"]) && !isset($_SESSION["user_name"]) )
{
	$msg="Please Login To An Account First";
	printf("<script>location.href='login.php?msg=$msg'</script>");
}
date_default_timezone_set('Asia/Kolkata');
?>