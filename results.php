<head>
	<title>Search results</title>
</head>
<?php include_once "header.php"; ?>
<div class="container">
	
	<form class="form-inline" role="search" action="results.php" method="post" name="search_bar">
		<div class="form-group">
			<div class="input-group">
				<input type="text" placeholder="search" class="form-control" name="search" id="search">
				<div class="input-group-append">
					<input action="submit" class="btn btn-default" type="submit" name="submit" value="Search">
				</div>
			</div>
		</div>
	</form>

	<ul class="nav nav-tabs>
		<li class="nav-item"><a class="nav-link active" href="#web" role="tab" data-toggle="tab">Web</a></li>
		<li class="nav-item"><a class="nav-link" href="#images" role="tab" data-toggle="tab">Images</a></li>
		<li class="nav-item"><a class="nav-link" href="#tools" role="tab" data-toggle="tab">Tools</a></li>
	</ul>


	<div class="tab-content">
		<div class="tabpanel" class="tab-pane fade in active" id="web">
			<?php 
				require "includes/Connection.php";
				$con=new Connection;
				$con=$con->isConnect();

			  	if (isset($_POST['submit'])) {
			  		$key=$_POST['search'];

			  		if ($con !=null) {
				
					$sql=" SELECT * FROM website WHERE s_title like '%".$key."%' OR s_link like '%".$key."%' OR s_key like '%".$key."%' OR s_des like '%".$key."%'";


					$query=mysqli_query($con,$sql);
					
							while($row = mysqli_fetch_assoc($query)){
								?>
								<div class="jumbotron" style="margin: 0px;">
									<h2> <?php echo $row['s_title']; ?> </h2>
									<h6><a href="https://<?php echo $row['s_link']; ?>" target="_blank"><?php echo $row['s_link']; ?></a></h6>
									<hr/>
									<p><?php echo $row['s_des']; ?></p>
								</div>
								&nbsp;
								<?php
							}
				


					}
			  	}

			 ?>

				
			</div>
		</div>
		<div class="tabpanel" class="tab-pane fade" id="images"><!--2--></div>
		<div class="tabpanel" class="tab-pane fade" id="tools"><!--3--></div>
</div>

<br>
<br>
<br>

<?php include_once "footer.php"; ?>