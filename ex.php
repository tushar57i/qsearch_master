<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>

	<form action="ex.php" method="post">

	<input type="text" name="s_title" placeholder="Enter keyword whitch you want search">
	<input type="submit" name="submit" value="Search">

	</form>

</body>
</html>

<?php 
	require "includes/Connection.php";
	$con=new Connection;
	$con=$con->isConnect();

	if (isset($_POST['submit'])) {
		//error_reporting(0);
			$key=$_POST['s_title'];

			if ($con !=null) {
				
				$sql=" SELECT * FROM website WHERE s_title like '%".$key."%' OR s_link like '%".$key."%' OR s_key like '%".$key."%' OR s_des like '%".$key."%'";


				$query=mysqli_query($con,$sql);

				$row = mysqli_fetch_array($query, MYSQLI_BOTH);

				session_start();
				$_SESSION['title']=$row['s_title'];
				$_SESSION['des']=$row['s_des'];
				$_SESSION['keyword']=$row['s_key'];
				$_SESSION['link']=$row['s_link'];

				echo $row['s_title'];


			}

		}


 ?>
