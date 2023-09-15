<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "website") or die("Server not connected...");

if (isset($_SESSION['fusername'])) {
  $username = $_SESSION['fusername'];
  $sel1 = "select * from farmer where username='$username'";

  $res1 = mysqli_query($con, $sel1);
}





if (isset($_POST['submit'])) {
  $usn = $_POST['username'];
  $fnm = $_POST['fname'];
  $lnm = $_POST['lname'];
  $pla = $_POST['place'];
  $pho = $_POST['phone'];
  $pro = $_POST['product'];
  $quan = $_POST['quantity'];
  $pri = $_POST['price'];
  $pic = $_POST['pic'];

  $ins = "insert into product(username,fname,lname,place,phone,pname,quantity,price,picture)values('$usn','$fnm','$lnm','$pla','$pho','$pro','$quan','$pri','$pic')";


  if (mysqli_query($con, $ins)) {
    header("location:retrivalproducts.php");
  } else {
    echo mysqli_error();
  }
}

if (isset($_POST['logout'])) {
  unset($_SESSION['username']);
  header("location:retrivalproducts.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fruit Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="fruit">
    <h1>Registration for Bulk Products.</h1>

    <form method="post">
      <label>Username</label>
      <input type="text" name="username" required>
      <label>First Name</label>
      <input type="text" name="fname" required>
      <label>Last Name</label>
      <input type="text" name="lname" required>
      <label>Place</label>
      <input type="text" name="place" required>
      <label>Phone Number</label>
      <input type="text" name="phone" required>
      <label>Product Name</label>
      <input type="text" name="product" required>
      <label>Product Quantity</label>
      <input type="type" name="quantity" required>
      <label>Product Price</label>
      <input type="type" name="price" required>
      <label>Picture</label>
      <input type="file" name="pic">
      <input type="submit" name="submit" value="Submit">
    </form>
    <!-- <p>Proceed to Pay<a href="#"> Pay Here</a></p>-->
  </div>
</body>

</html>