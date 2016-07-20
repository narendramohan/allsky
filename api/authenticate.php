<?php
session_start();
$data = json_decode(file_get_contents("php://input"));
//echo file_get_contents("php://input");

//$uemail = mysql_real_escape_string($data->email);
if( $data->username && $data->password ) {
	return test_function($data->username, $data->password);
	
}

function test_function($username, $password){
	$servername = "localhost:3306";
	$dbusername = "root";
	$dbpassword = "root";
	//echo $username;
	//echo $password;	
	try {
		$conn = new PDO("mysql:host=$servername;dbname=clm1", $dbusername, $dbpassword);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully";
// 		$username = mysqli_real_escape_string($conn,(String)$username);
// 		$password = mysqli_real_escape_string($conn,(String)$password);
// 		echo $username;
// 		echo $password;
		$stmt = $conn->prepare("SELECT * FROM users WHERE email=:username");
		$stmt->execute(array(":username"=>$username));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$count = $stmt->rowCount();
		if($row['password']==$password){
		
			echo "success"; // log in
			$_SESSION['user_session'] = $row['email'];
		}
		else{
		
			echo "email or password does not exist."; // wrong details
		}
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
	$return = $_POST;

	//Do what you need to do with the info. The following are some examples.
	//if ($return["favorite_beverage"] == ""){
	//  $return["favorite_beverage"] = "Coke";
	//}
	//$return["favorite_restaurant"] = "McDonald's";

	//$return["json"] = json_encode($return);
	//echo json_encode($return);
}

?>