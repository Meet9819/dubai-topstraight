<?php
session_start();
unset($_SESSION['admin_username']);
unset($_SESSION['admin_id']);
unset($_SESSION['utype']);
unset($_SESSION);
print "<META http-equiv='refresh' content='0;URL=index.php'>";	
?>