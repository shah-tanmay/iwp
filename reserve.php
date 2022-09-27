<?php
    include 'database.php';
    if(isset($_POST['submit']))
    {
        $guests=$_POST['guests'];
        $date=$_POST['date'];
        $time=$_POST['time'];
    }
    $sql="insert into reservation(guests,date,time)
    values('$guests','$date','$time')";
    if(mysqli_query($con,$sql)){
        echo "<script>alert('new reservation record inserted')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
?>
