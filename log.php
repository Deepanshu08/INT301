<?php
$link = mysqli_connect("localhost", "root", "", "website");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST["signin"])){
   $email=$_POST["email"];
   $password1=$_POST["password1"];


   if($email==NULL || $password1==NULL){
    $message="Please Enter your details !";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }

    else{
        $query="SELECT * FROM user";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        if($row["email"]==$email && $row["password1"]==$password1){
            $message="Login Successful !";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}
mysqli_close($link);
?>
