<?php
require 'res.php';
?>

<body>
    <fieldset>
        <h2>Enter the System</h2>
        <p>It is necessary to login in your account in order to sign up for a course.</p>
        <h4>ARE YOU NEW? REGISTER</h4>
        <form method="post">
            <input type="text" name="name" placeholder=" User name" required="">
            <br><br>
            <input type="email" name="email" placeholder=" Email" required="">
            <br><br>
            <input type="password" name="password1" placeholder=" Password" required="">
            <br><br>
            <input type="password" name="password2" placeholder=" Confirm Password" required="">
            <br><br>
            <button name="signup">Register</button>
        </form>
        <h4>ALREADY A STUDENT?<a href="login.php"> LOGIN</a></h4>
    </fieldset>
    <style>
        fieldset{
            background-color: #E5E4E2;
        }
        h2{
            font-family: sans-serif;
            color: #151B54;
        }
        p{
            font-family: serif;
        }
        h3{
            font-family: sans-serif;
        }
        input{
            width: 400px;
            height: 40px;
            border-color: orange;
        }
        button{
            width: 100px;
            height:35px;
            margin-left: 300px;
            border-color: blue;
            font-family: sans-serif;
            color: blue;
            background-color:#E5E4E2; 
        }
    </style>
</body>
