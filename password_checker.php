<?php
session_start();
$servername = "localhost";
$username = "imma";
$password = "immapwd";
$dbname = "php_passwords";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT username, password FROM php_passwords.users";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		if($_POST["usernaam"] == $row["username"] && $_POST["wachtwoord"] == $row["password"]){			
			$_SESSION['logged_in'] = True;
			header("location: http://localhost/webapp/page1.php");		
		}else{
			echo "Incorrect username or password.";			
			continue;			
		}
	}
}

?>