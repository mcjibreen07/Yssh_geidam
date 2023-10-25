<?php
session_start();
if(isset($_SESSION['SESS_LAST_NAME']))
{
	session_destroy();
	header("location:index.php");
}

?>