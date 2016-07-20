<?php

$filename = 'mydb.txt';

if (file_exists ($filename)) {
	
	$handle = fopen(filename, 'r');
	$datain = fread($handle, filesize($filename));
	$words_array = explode (';', $datain);
	//echo $words_array[0];
	echo "db login details found......successfully";
	$host="$words_array[0]";
	$portnum="$words_array[1]";
	$username="$words_array[2]";
	$password="$words_array[3]";
	$databaseName="$words_array[4]";
	
	echo "now tying to connect db ......";
	
	
	
} else {
	echo "$filename doesnot exit or its path is not correct";
	
}



echo $password;

	echo "now tying to connect db ......";
	
$dbconnect = mysqli_connect('127.0.0.1','root','');

if (!dbconnect) {
	echo "Can not connect to  database......"
}





?>