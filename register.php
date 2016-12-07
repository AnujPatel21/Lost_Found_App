<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lost and Found</title>
    <!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="User Icon Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For-Mobile-Apps -->
    <!-- Style -->
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <script type="text/javascript" src="jquery-1.9.1.js"></script>

</head>
<?php

$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('lostandfound',$conn) or die('Database doesnot exist');
if(isset($_POST['username'])){



    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $re_pass = $_POST['re_password'];
    if($pass === $re_pass){
        $sql = "insert into user (username, email, password, re_pass) VALUES ('$user','$email','$pass','$re_pass')";
        $result = mysql_query($sql);
        if($result == 1){
            echo "<script language='javascript' type='text/javascript'>document.location.href ='index.php';</script>";
        }
    }
    else {

        echo "<script language='javascript' type='text/javascript'>alert('passwords dont match');</script>";
    }
}

?>
<body>
<div class="container">

    <div class="contact-form">
        <div class="profile-pic">
            <div class="username_availability_result" id="username_availability_result"></div>
        </div>
        <div class="signin">
            <form method="post">
                <div class='web'>



                </div>
                <input type="text" name="username" id="username" class="user" value="Username" style="font-family:Helvetica" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" />
                <input type="email" name="email" id="email" class="user" value="Email Id" style="font-family:Helvetica" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                <input type="password" name="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
                 <input type="password" name="re_password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" />

                 <p style="font-family:Helvetica"> <a href="login.php">Already a member?</a></p>

        </div>
        <input type="submit" name="submit" value="Sign Up" style="font-family:Helvetica"/>
    </div>
    </form>
</div>

</body>
</html>