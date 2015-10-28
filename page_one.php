<?php
	
	//page_one.php
	
	require_once("session.php");
	
	$_SESSION["name"] = "Reio";
	
	echo $_SESSION["name"];
	
?>