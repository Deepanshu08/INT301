<?php
require 'log.php';
?>

<body>
    <fieldset>
        <h2>Enter the System</h2>
        <p>It is necessary to login in your account in order to sign up for a course.</p>
        <h4>ARE YOU NEW?<a href="register.php"> REGISTER</a></h4>
        <fieldset style="background-color: #0C0E5B;width: 300px;">
        <h4 style="color: white;font-family: sans-serif;">ALREADY A STUDENT? LOGIN</h4>
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder=" Email" id="i1" required="">
            <br><br>
            <input type="password" name="password1" placeholder=" Password" id="i1" required="">
            <br><br>
            <input type="checkbox">
            <label style="color: white;">Remember me ?</label>
            <button name="signin">Login</button>
            <br><br>
            <a href="" id="a2" onclick="fun()">Forgot Password?</a>
        </form>
        </fieldset>
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
        #i1{
            width: 400px;
            height: 40px;
        }
        button{
            width: 100px;
            height:35px;
            margin-left: 300px;
            border-color: orange;
            font-family: sans-serif;
            color: white;
            background-color:#0C0E5B; 
        }
        #a2{
            margin-left: 300px;
            font-family: serif;
            font-size: 13px;
            color: white;
        }
    </style>
    <script>
        function fun(){
            alert("If u forgot password then register again !");
        }
    </script>
</body>
