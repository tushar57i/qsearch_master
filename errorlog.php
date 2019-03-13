<?php
	require_once 'connection.php';
	$email = $name = $gender = $password = '';

	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$password = MD5($pwd);
$sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password' ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result)){
		$id = $row["ID"];
		$email = $row["EMAIL"];
	session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: index.php")
}
else{
	echo "Invalid Email or Password";
}



?>