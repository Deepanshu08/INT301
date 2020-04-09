<?php
$link = mysqli_connect("localhost", "root", "", "website");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST["signup"])){
   $name=$_POST["name"];
   $email=$_POST["email"];
   $password1=$_POST["password1"];
   $password2=$_POST["password2"];
   if($name==NULL || $email==NULL||$password2==NULL||$password1==NULL){
    $message="Please enter your details !";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $message="Enter Valid Email !";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
else if($password2!=$password1){
    $message="Password not matched !";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
else{
    $query="SELECT * FROM user";
    $result=mysqli_query($link,$query);
    $count=0;
    while($row=mysqli_fetch_array($result)){
        if($row["email"]==$email || $row["name"]==$name){
            $count=$count+1;
            $message="Already Taken !";
            echo "<script type='text/javascript'>alert('$message');</script>";
            break;
        }
    }
    if($count==0){
        $insert="INSERT INTO user (name,email,password1,password2) VALUES ('$name','$email','$password1','$password2')";
        if(mysqli_query($link,$insert)){
            header("Location: login.php ");
        }
    }
}
}
mysqli_close($link);
?>