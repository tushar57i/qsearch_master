<?php
include_once "header.php";
?>


<head>
	<title>Add web</title>
</head>
<body>
<h3 class="text-center alert alert">
		Add your website
	</h3>
<?php 

	require "includes/Connection.php";
	$con=new Connection;
	$con=$con->isConnect();

	if (isset($_POST['submit'])) {
			$title=$_POST['s_title'];
			$link=$_POST['s_link'];
			$keyword=$_POST['s_key'];
			$description=$_POST['s_des'];
			//$img=$_POST['s_img'];
		

			if ($con != null) {
				$query="INSERT INTO `website` (`id`, `s_title`, `s_link`, `s_key`, `s_des`, `simg`) VALUES (NULL, '$title', '$link', '$keyword', '$description','null')";

				$result=mysqli_query($con,$query);

				if ($result) {
					?>
						<div class="alert alert-success text-center" role="alert">
						  Your website has been added &nbsp; <a href="index.php" style="text-decoration: none"><b>Go Back</b></a>
						</div>
					<?php
				}else{
					?>
						<div class="alert alert-warning text-center" role="alert">
						  Faild ! Please try again
						</div>
					<?php
				}
			}
	}

?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form action="addweb.php" method="post" enctype="multipart/form-data">
		<div class="form-group container" style="font-weight: bold;">
				<label for="name">Site title:</label><input type="text" id="s_title" name="s_title" class="form-control" placeholder="Type your website Title" required>

				<label for="name">Site link:</label><input type="text" id="s_link" name="s_link" class="form-control" placeholder="Type your website link" required>

				<label for="name">Site keywords:</label><input type="text" id="s_key" name="s_key" class="form-control" placeholder="Type your website Keywords" required>

				<label for="name">Site description:</label><textarea type="text" id="s_des" name="s_des" class="form-control" placeholder="Type your website Description" required></textarea><br>

				<!--<label for="name">Site Image:&nbsp;&nbsp;</label><input type="file" id="s_img" name="simg">--><br><br>
			<div class="text-right">
				<input type="submit" class="btn btn-outline-success" name="submit" value="Submit">&nbsp; &nbsp;
				<input type="reset" class="btn btn-outline-danger" name="reset" value="Reset">
			</div>
		</div>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
</body>

<?php
 include_once "footer.php";
?>