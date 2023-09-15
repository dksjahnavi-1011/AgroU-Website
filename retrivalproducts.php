<?php
session_start();
error_reporting(0);
/* $host="localhost";
$user="root";
$password="";
$db="tool";*/

$connection = mysqli_connect("localhost", "root", "", "website");

$sql = "select * from product";
$result = mysqli_query($connection, $sql);

if ($_GET['username']) {
    $tid = $_GET['username'];
    $sql2 = "delete from product where username='$usn' ";
    $result2 = mysqli_query($connection, $sql2);

    if ($result2) {
        header('location:retrivalproducts.php');
    }
}
?>

<!--HTMl file-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Proctor Details</title>

    <link rel="stylesheet" href="retrival.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

    <input type="checkbox" id="check">
    <!--Header area start-->
    <header>
        <label for="check">
            <i class="fa fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>AgroU</h3>
        </div>
        <div class="right_area">

            <a href="Agro_html.php" class="logout_btn">Logout</a>
        </div>
    </header>

    <!--Sidebar start-->
    <div class="sidebar">
        <centre>
            <!--   <img src="Images/adb.png" class="profile_image" alt="">-->
        </centre>
        <a href="Agro_html.php"><i class="fa fa-user"></i><span>Landing Page</span></a>
        <a href="retrivalproducts.php"><i class="fa fa-plus-square"></i><span>Products Sale</span></a>
        <a href="retrivalland.php"><i class="fa fa-search"></i><span>Rent/Lease Lands</span></a>
        <a href="addproducts.php"><i class="fa fa-plus-square"></i><span>Register Products</span></a>
        <a href="addland.php"><i class="fa fa-search"></i><span>Register Farmlands</span></a>


    </div>

    <div class="content">

    </div>

    <div class="content1">
        <h1>View Bulk Products Data</h1>
    </div>

    <!--Filter-->

    <!--teacher-->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Search Data by Product Name/Price<h4>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="filter value" class="form-control"
                                            placeholder="Type to Search...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" name="filter_btn" class="btn-submit">Search</button>
                                </div>
                            </div>
                        </form>


                        <table class="table" border="1px"
                            style="position:absolute;top:300px;right:-400px;width:75%;overflow;">
                            <thead>
                                <tr>
                                    <th scope="col">UserName</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Place</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Picture</th>


                                    <th scope="col">Edit/Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                if (isset($_POST['filter_btn'])) {
                                    /* $connection=mysqli_connect("localhost","root","","tool");*/
                                    $value_filter = $_POST['filter_value'];
                                    $query = "SELECT * FROM product WHERE CONCAT(pname,price) LIKE '%$value_filter%' ";
                                    $query_run = mysqli_query($connection, $query);

                                    if (mysqli_num_rows($query_run) > 0) {

                                        while ($row = mysqli_fetch_array($query_run)) {

                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['username']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['fname']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['lname']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['place']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['phone']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['pname']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['quantity']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['price']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['picture']; ?>
                                                </td>



                                                <td>
                                                    <?php
                                                    echo "
                <a class='btn_edit' href='updateproduct.php?username={$row['username']}'>Edit/Update
                
                </a>";
                                                    ?>

                                                </td>

                                                <td>
                                                    <?php
                                                    echo "
                <a onClick=\"javascript:return confirm('Are You Sure to Delete This');\" class='btn_delete' href='retrivalproducts.php?username={$row['username']}'>Delete</a>";
                                                    ?>
                                                </td>


                                            </tr>

                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="9">No Record Found</td>
                                        </tr>
                                        <?php
                                    }

                                }
                                ?>


                            </tbody>
                        </table>

                    </div>
        </div>
    </div>







    </centre>

</body>

</html>