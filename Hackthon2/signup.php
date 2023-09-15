session_start();

include("db.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$Gender = $_POST['gender'];
$num = $_POST['number'];
$address = $_POST['add'];
$gmail = $_POST['mail'];
$password = $_POST['pass'];

if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
$query = "insert into form(fname, lname, gender, cnum, address, email, pass) values ('$firstname', '$lastname',
'$Gender', '$num', '$address', '$gmail', '$password')";

mysqli_query($con, $query);

echo "
<script type='text/javascript'> alert('Successfully Register')</script>";
} else {
echo "
<script type='text/javascript'> alert('Please Enter some valid Information')</script>";
}
}

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroU</title>
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
</head>

<body>
    <div class="signup">
        <h1>Sign up</h1>

        <form>
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Address</label>
            <input type="tel" name="number" required>
            <label>Address</label>
            <input type="text" name="add" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <button onclick="cart.php">Submit</button>
        </form>
        <p>By clicking the Sign Up button, you agree to our <br>
            <a href="">Terms and Conditions</a> and <a href="#">Policy Privacy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login Here</a></p>
    </div>
    <!-------------------- SCRIPT JS ------------------->
    <script src="agro_js.js"></script>
</body>

</html>