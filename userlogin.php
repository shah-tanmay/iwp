<?php
    include 'database.php';
    if(isset($_POST['submit']))
    {
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
    }
    $login=false;
    $sql= "Select * from CustomerData where mail='$mail' and pass='$pass'" ;
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if(mysqli_query($con,$sql)){
        echo "";
    }else{
        echo "error:".mysqli_error($con);
    }
    if($num==1){
        $login=true;
    }else{
        $showError = "Invalid Credentials";
    }
    if($login){
        echo '<h2>Signed in!</h2>';
    }
    else{
        echo '<h2>Not signed in</h2>';
    }
    header('Location: login.html');
exit;
?>