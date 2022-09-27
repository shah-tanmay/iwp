<?php
    include 'database.php';
    if(isset($_POST['submit']))
    {
        $name=$_POST['uname'];
        $mail=$_POST['mail'];
        $pass=$_POST['password'];
        $contact=$_POST['contact'];
        $birthday=$_POST['birthday'];
        $city=$_POST['city'];
        $gender=$_POST['gender'];
    }
    $sql="insert into CustomerData(name,mail,pass,contactno,birthday,city,gender)
    values('$name','$mail','$pass','$contact','$birthday','$city','$gender')";
    if(mysqli_query($con,$sql)){
        echo "<script>alert('Connection Successful: new record inserted')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
    header('Location: register.html');
exit;
?>