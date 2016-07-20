<!DOCTYPE HTML>
<html lang="en">
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="author" content="allsky" />
	<title>Login DB</title>
	<link rel="stylesheet" type="text/css" href="loginPage.css"/>
</head>


<body> 
	<?php 
		$dbhost = 'localhost:3036'; 
		$dbuser = 'root'; 
		$dbpass = 'cisco'; 
		$conn = mysql_connect($dbhost, $dbuser, $dbpass); 
			if(! $conn ) { 
				die('Could not connect: ' . mysql_error());
			 } 
			echo 'Connected successfully';

		$sql = 'CREATE DATABASE TUTORIALS'; 

		$retval = mysql_query( $sql, $conn ); 
		if(! $retval ) { 
		die('Could not create database: ' . mysql_error()); 
		} 
		echo "Database TUTORIALS created successfully\n"; 
		mysql_close($conn); 

	?> 
</body> 

</html>