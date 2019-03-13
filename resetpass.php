<?php include_once "header.php"; ?>

<div class="alert alert-warning text-center">Password reset system temporarily disabled. we'll back as soon as possible! thank you.</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="background: #eee; padding: 20px; display: block; margin: 0px;">
			<label for="Email" style="font-weight: bold;">Reset your password:</label> <input type="email" name="reset_email" placeholder="Enter your E-mail adress" class="form-control" required="Please enter correct email address" disabled><br>
			<div class="text-right"><input type="submit" name="submit" value="Submit" class="btn btn-outline-info" disabled>&nbsp;<a class="text-center btn btn-outline-secondary" href="index.php">Go Back</a></div>
		</div>
		<div class="col-md-4"></div>
	</div>

<?php include_once "footer.php"; ?>