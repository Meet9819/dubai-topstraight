<?php
$host="148.72.232.171:3306";
$username="tsldubai_shyam12";
$password="loveyoudad9820102993";
$db_name="tsldubai_shyam12";
$conn=mysql_connect($host,$username,$password) or die("cannot connect to database error");
mysql_select_db($db_name) or die (mysql_error());
$user=0;
date_default_timezone_set('asia/kolkata');
?>