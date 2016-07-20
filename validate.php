<!DOCTYPE HTML>
<html lang="en">
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="author" content="allsky" />
	<title>validate login</title>
	<link rel="stylesheet" type="text/css" href="loginPage.css"/>
</head>
<body>

	<?php
	
	//attemp to collect and store form data in php variable
		$uname = filter_input(INPUT_POST, "uname");
		$upasswd = filter_input(INPUT_POST, "upasswd");
		
		echo "$uname";
		echo "$upasswd";
	//database login details
	/*	$host="narendramohan-allsky-3490859:3306";
		$user="allsky";
		$password="123";
		$db="allskydb";
	*/	
		$servername = getenv('IP');
	    $username = "allsky";
	    $password = "123";
	    $database = "allskydb";
	    $dbport = 3306;
	
	    // Create connection
	    $conn = new mysqli($servername, $username, $password, $database, $dbport);

	// attempt database connection	
//	$conn=mysqli_connect($host, $user, $password, $db);

	// Check connection
			if ($conn === false) {
				die ("ERROR: Could not connect." . mysqli_connect_error());				
			}
	// preparing querry statement
		$query="SELECT * FROM user WHERE username='$uname' and password='$upasswd' ";
		echo "$query";
		
	// attempt query execution
		$result=mysqli_query($conn, $query); 
		
	// attemp to verify the result of query
		if (mysqli_num_rows($result)==1) {
				header('location:template/homeTemp.php');
			} 
		else {
			echo "Wrong username or password"; 
			}
	// attemp to close the database connect		
		mysql_close($conn);
	?>

</body>
</html>