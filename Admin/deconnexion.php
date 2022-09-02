<?php 
session_start();
if (isset($_SESSION['pharma'])) 
{
	array();
	session_destroy();
	header("location: ../");
}
else
{
	header('location: ../login.php');
}
?>
