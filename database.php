<?php
    $servername="localhost";
    $username="root";
    $password="tanmayshah";
    $database="customer";
    $con=mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        die("Error deleting record".mysqli_error($con));
    }
    echo "connection Successful";
?>
