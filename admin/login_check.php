<?php
include("conn.php");
if(isset($_POST['submit'])=="Login")
{
		$user_name=$_POST['username'];	
		$pass_word=$_POST['password'];		
		
		$sql_login="SELECT count(*) as val FROM admin_password WHERE user_name='$user_name' AND user_pass='$pass_word'";
	
		$result_login=mysql_query($sql_login);
		$data_login=mysql_fetch_assoc($result_login);
		$data_login['val'];
		
		if($data_login['val']==1)
		{		
			$sql_00=mysql_query("SELECT * from admin_password WHERE user_name='".$user_name."' AND user_pass='".$pass_word."'");	
			$data_00=mysql_fetch_assoc($sql_00);
			$user_id=$data_00['user_id'];
			error_reporting(E_ALL);
			ini_set('display_errors', true);
			session_start();
			$_SESSION["user_id"]=$user_id;			
			$_SESSION["uname"]=$data_00['user_name'];
			//$_SESSION["uname"]=$data_00['uname'];
			$_SESSION["user_name"]=$data_00['user_name'];			
			printf("<script>location.href='index2.php'</script>");											
		}		
		else
		{	
			
			$msg="WRONG USERNAME AND PASSWORD";
			printf("<script>location.href='index.php?msg=$msg'</script>");
		}
}
?>