<?php include_once "header.php"; ?>
<div class="container">
    <form class="form-horizontal" role="form" method="post" action="register.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Sign Up</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <label for="email">E-Mail Address:</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>

                    <label for="name">Full Name:</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="Type your Full name" required autofocus>
                    </div>

                    <label for="name">Gender:</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="radio" name="gender" id="gender"> Male<br><br>
                        <input type="radio" name="gender" id="gender"> Female
                    </div>

                    <label for="name">Password:</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required autofocus>
                    </div>
                    
                    <label for="name">Retype Password:</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="password" name="retype_password" class="form-control" id="retype_password"
                               placeholder="Password" required autofocus>
                    </div>
                

                <br>
                <div class="text-right">
                    <input type="submit" name="submit" value="Sign up" class="btn btn-outline-success">
                    <a href="index.php" class="btn btn-outline-danger">Cancel</a>

                </div>

                </div>
            </div>
            <div class="col-md-3"></div>
            </div>
        </div>
    </form>
</div>
<?php include_once "footer.php"; ?>

<!--Connection-->
<?php 
require ('connection2.php');
    $email = $name = $gender = $password = $pwd = '';


    $email = $_POST ['email'];
    $name = $_POST ['name'];
    $gender = $_POST ['gender'];
    $password = $_POST ['password'];
   // $password = MD5($pwd);

$sql = "INSERT INTO register (email, name, gender, password) VALUES ('$email', '$name', '$gender', '$password')";

$result = mysqli_query($conn, $sql);
    if(result){
        header("Location: postreg.php");
/*?>
       <div class="alert alert-success text-center" role="alert">
           Successfully Registered! Now You Can <a href="addweb.php">Submit your website</a> 
       </div>

<?php*/
    }
else{
    echo "Error: ".$sql;
}

?>