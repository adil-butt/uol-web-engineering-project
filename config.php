<?php
	
	$host="localhost";
	$user="root";
	$password="";
	$db="loginuser";
	
	$connection=mysqli_connect($host,$user,$password);
	
	if(!$connection){
		die("Database connection failed..." .mysqli_error());
	}
	
	$db_select=mysqli_select_db($connection,$db);
	
	if(!$db_select){
		die("Database selection failed..." .mysqli_error());
	}

?>