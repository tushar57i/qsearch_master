<?php
    $conn = mysqli_connect("localhost", "root", "", "qsearch");
if($conn){
	echo "Database Connected!";
}
	else{
    echo "Database Connection Failed";
}




?>