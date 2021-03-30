<?php
include("conn.php");
include("session.php");

$user_name=$_REQUEST['user_name'];
$user_pass=$_REQUEST['user_pass'];

/******************************Select Query For Count Data ****************************/
$data=mysql_query("select * from admin_password");
$fetch=mysql_fetch_assoc($data);

$id=$fetch['id'];

$num=mysql_num_rows($data);


		if(!empty($user_name)&&!empty($user_pass))
		{
			if($num<1)
			{
			mysql_query("INSERT INTO admin_password(user_name,user_pass) VALUES ('$user_name','$user_pass')")or die("CF");
			header("Location:index2.php");
			}
			else
			{
				mysql_query("update admin_password set user_name='$user_name',user_pass='$user_pass' where id='$id'");
				header("Location:index2.php");
			}
		}
		else
		{
			echo 'Enter Name User Name Or Password';
			/*
			print "<script type=\"text/javascript\">"; 
			print "alert('Enter User Name And Password')"; 
			print "</script>";  
			*/
		}

?>