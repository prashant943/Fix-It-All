<?php 

include 'config.php';
error_reporting(0);
session_start();

$email = $_SESSION['email'];
$table = $_SESSION['type'];
$sql = "SELECT * FROM $table WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $mechid = $row['mechid'];
    $name = $row['name'];   $mobile = $row['mobile'];
}

$sqlBase = "SELECT * FROM services where mechid='$mechid'";
$resultBase = mysqli_query($conn, $sqlBase);
$count = mysqli_num_rows($resultBase);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mechanic Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/portal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background-position: center;
            background-size: cover;
            background-image: linear-gradient(rgba(28, 10, 0, 0.5), rgba(204, 149, 68, 0.3)), url("images/MechPortal.png");
        }
    </style>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="nav-links">
                <ul>
                    <li> <a href="index.php">HOME</a></li>
                    <li> <a href="loginBuy.php">BUY</a></li>
                    <li> <a href="about.php">ABOUT US</a></li>
                    <li> <a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </nav>
    </div>

	<div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card card-body">
                    <h2>Mechanic Name:<br><?php echo $name; ?></h2>
                    <a class="btn btn-outline-danger btn-sm btn-block" href="deleteAcc.php">Delete Account</a>
                </div>
            </div>
        
            <div class="col-md">
                <div class="card card-body">
                    <h2>Mechanic Info</h2><hr>
                    <p>EMail: <?php echo $email; ?></p>
                    <p>Mobile: <?php echo $mobile; ?></p>
                </div>
            </div>
        
            <div class="col-md">
                <div class="card card-body">
                    <h2>Total Service Provided:</h2><hr>
                    <div class="count"><?php echo $count; ?></div>
                </div>
            </div>
        </div>
        
        <div class="row my-5">
            <div class="col-md">
                <div class="card card-body">
                    <table class="table table-sm">
                        <tr colspan="5">Pending Service Requests</tr>
                        <tr>
                            <th>Service No</th>
                            <th>Customer Name</th>
                            <th>Mobile</th>
                            <th>Service Type</th>
                            <th>Actions</th>
                        </tr>
                        
                        <?php 
                            while($rowB = mysqli_fetch_assoc($resultBase)){
                                $sno = $rowB['servid'];
                                $cid = $rowB['custid']; $servtype = $rowB['servtype'];
                                $sql2 = "SELECT * FROM customers WHERE custid='$cid'";
                                $result2 = mysqli_query($conn, $sql2);
                                $row2 = mysqli_fetch_assoc($result2);
                                echo "<tr><td>$sno</td><td>".$row2['name']."</td><td>".$row2['mobile']."</td><td>".$servtype."</td>";
                                echo "<td><form action='deleteServ.php' method='POST'><input type='hidden' name='sid' value='$sno'><button type='submit' class='btn btn-primary'>Request Serviced</button></form></td>
                                </tr>";
                            }                               
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </section>
    <style>
        body{
            background-color: linear-gradient(rgba(40, 11, 65, 0.897),rgba(255, 220, 66, 0.5));
        }
    </style>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>