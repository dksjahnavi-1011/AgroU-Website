<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "website") or die("Server not connected...");

if (isset($_SESSION['fusername'])) {
  $username = $_SESSION['fusername'];
  $sel1 = "select * from farmer where username='$username'";

  $res1 = mysqli_query($con, $sel1);
}





if (isset($_POST['btn'])) {
  $if = $_POST['id'];
  $fnm = $_POST['fname'];
  $lnm = $_POST['lname'];
  $place = $_POST['place'];
  $num = $_POST['num'];

  $price = $_POST['price'];






  $ins = "insert into land(landid,fname,lname,place,num,price)values('$if','$fnm','$lnm','$place','$num','$price')";


  if (mysqli_query($con, $ins)) {
    header("location:retrivalland.php");
  } else {
    echo mysqli_error();
  }
}

if (isset($_POST['logout'])) {
  unset($_SESSION['username']);
  header("location:Agro_html.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Land Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="land">
    <h1>Registration for Farm Land.</h1>
    <form method="post">
      <label>Land ID</label>
      <input type="text" name="id" required>
      <label>First Name</label>
      <input type="text" name="fname" required>
      <label>Last Name</label>
      <input type="text" name="lname" required>
      <label>Place</label>
      <input type="text" name="place" required>
      <label>Phone Number</label>
      <input type="text" name="num" required>
      <label>Rent/Lease Price</label>
      <input type="text" name="price" required>


      <!--  <input type="file" name="" required>-->
      <input type="submit" name="btn" value="Submit">

    </form>

  </div>
</body>

</html>