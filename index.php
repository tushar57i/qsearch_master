
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QSearch || Home</title>
      <link rel="icon" type="text/img" href="img/favicon.png">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/styles.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"crossorigin="anonymous">
</head>

<body>
  <?php 
 	 require "main.php";

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


			}

		}

   ?>
</body>
</html>

<br>
<br>
<br>
<br>
<br>
<br>

<?php include_once "footer.php"; ?>