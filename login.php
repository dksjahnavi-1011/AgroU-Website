<?php
error_reporting(0);
session_start();
$con = mysqli_connect("localhost", "root", "", "website") or die("Server not connected");


if (isset($_POST['Submit'])) {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $membertype = $_POST['user-type'];


    if ($membertype == 'customer') {

        $sel = "select * from customer where username='$uname' and password='$pwd'";

        $res = mysqli_query($con, $sel);
        if ($rr = mysqli_fetch_array($res)) {
            $username = $rr['username'];
            $_SESSION['ausername'] = $username;
            header("location:retrieveproducts.php");
        }

    }

    if ($membertype == 'farmer') {

        $sel = "select * from farmer where username='$uname' and password='$pwd'";

        $res = mysqli_query($con, $sel);
        if ($rr = mysqli_fetch_array($res)) {
            $username = $rr['username'];
            $_SESSION['tusername'] = $username;
            header("location:retrivalproducts.php");

        }
    }

    /* if($membertype=='student')
    {
    $sel="select * from student where username='$uname' and password='$pwd'";
    $res=mysqli_query($con,$sel);
    if($rr=mysqli_fetch_array($res))
    {
    $username=$rr['username'];
    $_SESSION['tusername']=$username;
    header("location:studentdashboard.php");
    
    }	
    }*/
}
?>


<!--HTML file-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="agro_css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FONTS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Nunito&family=Alkatra&family=Shadows+Into+Light&display=swap"
        rel="stylesheet">
    <!-- SWIPER.JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="login-box">
        <img src="Images/logo5.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <div class="buttons">
                <input type="radio" id="customer" name="user-type" value="customer">
                <label for="customer">Customer</label>
                <input type="radio" id="farmer" name="user-type" value="farmer">
                <label for="farmer">Farmer</label>
                <!--  <input type="radio" id="student" name="user-type" value="student">
                <label for="student">Student</label>-->
            </div>

            <input type="submit" name="Submit" value="Login">

        </form>
    </div>
</body>

</html>