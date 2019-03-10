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
$conn=mysqli_connect('127.0.0.1','root','mysql');
$db=mysqli_select_db($conn, 'cloud') or die('Database doesnot exist');
if(isset($_POST['username'])){



    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql="SELECT * FROM user WHERE username='".$user."' and password='".$pass."' LIMIT 1";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    $id=$row['ID'];
    $user_name = $row['username'];
    $password = $row['password'];
   // $u_id = $row['user_id'];

    if($count==1) {
//session_register("Username");
//session_register("password");
        $_SESSION['login_user'] = $id;
        echo "<script language='javascript' type='text/javascript'>document.location.href ='index.php';</script>";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>alert('invalid username or password'); </script>";
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
                <input type="password" name="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
                 <p style="font-family:Helvetica"> <a href="register.php">Not a member?</a></p>

        </div>
        <input type="submit" name="submit" value="Login" style="font-family:Helvetica"/>
    </div>
    </form>
</div>

</body>
</html>