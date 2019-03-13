<?php include_once "footer.php"; 
    require 'includes/Connection.php';
    $con=new Connection;

    if ($con->isConnect() != null) {


        if (isset($_POST['submits'])) {

            $email=$_POST['email'];
            $password=$_POST['password'];

            echo "string";

            echo $email;
           
        }
            


    }

?>