<head>
    <title>Sign In</title>
</head>
<?php include_once "header.php"; ?>


<?php
    require 'includes/Connection.php';
    $con=new Connection;
    $con=$con->isConnect();

    if ($con != null) {


        if (isset($_POST['loginAction'])) {

            $email=$_POST['email'];
            $password=$_POST['password'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  echo "<div class='alert alert-warning text-center'>Invalid email format</div>";
                  return;
             }

             if (strlen($password)<6) {
                 echo "<div class='alert alert-warning text-center'>Password must be more than 6 characters</div>";
                 return;
             }

             $sql = "SELECT * FROM register WHERE email = '$email' and password = '$password'";

              $result = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
              $count = mysqli_num_rows($result);
              
              
              if($count == 1) {
                 echo "<div class='alert alert-success text-center'>log in succss</div>";
              }else {
                 echo "<div class='alert alert-warning text-center'>Your Login Name or Password is invalid</div>";
              }
            
           
        }
            


    }

?>


<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="login.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Please Login</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <label class="sr-only" for="email">E-Mail Address</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding-top: .35rem; font-weight: bold;">
                <div class="form-check mb-2 mr-sm-2 mb-sm-0" style="font-weight: bold;">
                    <label class="form-check-label">
                        <input class="form-check-input checkbox" name="remember"
                               type="checkbox" >
                        <span style="padding-bottom: .15rem">Remember me</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 1rem">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="text-right">
                    <input type="submit" name="loginAction" class="btn btn-primary" value="Login"> &nbsp;  <a href="register.php" style="color: #fff; text-decoration: none;" class="btn btn-success">Sign Up</a>
                </div>
            <br>
                <a class="btn btn-outline-warning btn-block" href="resetpass.php" style="font-weight: bold;">Forgot Your Password?</a><br><br>
            </div>
        </div>
        </div>

    </form>
     </div>
</div>


<?php 
    include_once "footer.php"; ?>