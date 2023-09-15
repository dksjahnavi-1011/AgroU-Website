<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "website") or die("Server not connected...");

if (isset($_SESSION['cusername'])) {
  $username = $_SESSION['cusername'];
  $sel1 = "select * from customer where username='$username'";

  $res1 = mysqli_query($con, $sel1);
}





if (isset($_POST['Submit'])) {

  $fnm = $_POST['fname'];

  $id = $_POST['id'];



  $email = $_POST['email'];

  $unm = $_POST['username'];
  $pwd = $_POST['password'];


  $ins = "insert into customer(id,name,email,username,password)values('$id','$fnm','$email','$unm','$pwd')";


  if (mysqli_query($con, $ins)) {
    header("location:login.php");
  } else {
    echo mysqli_error();
  }
}

if (isset($_POST['logout'])) {
  unset($_SESSION['username']);
  header("location:Agro_html.php");
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
  <link rel="stylesheet" href="signup.css">
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
    <!--<img src="Images/logo5.png" class="avatar">-->
    <h1>Sign Up Here</h1>
    <form method="post">
      <p>Unique Id</p>
      <input type="text" name="id" placeholder="Enter ID" required>
      <p>Full Name</p>
      <input type="text" name="fname" placeholder="Enter Fullname" required>
      <p>Email-ID</p>
      <input type="text" name="email" placeholder="Enter Email" required>
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