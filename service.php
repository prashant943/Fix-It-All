<?php 

include 'config.php';
error_reporting(0);
session_start();

$email = $_SESSION['email'];
$table = $_SESSION['type'];
$sqlBase = "SELECT * FROM mechanics";
$resultBase = mysqli_query($conn, $sqlBase);

if (isset($_POST['submit'])) {
	$mechid = $_POST['mechid']; $servtype = $_POST['servtype'];   
	$sql1 = "SELECT * FROM customers WHERE email='$email'";
	$result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $custid = $row1['custid'];
    $id = abs(crc32(uniqid()));
    $sql = "INSERT INTO services
            VALUES ('$id', '$custid', '$mechid', '$servtype')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Request Sent successfully!!')</script>";
        
        header("Location: cust.php");
    } else
        echo "<script>alert('Error! Please try again later!!')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-position: center;
            background-size: cover;
            background-image: linear-gradient(rgba(28, 10, 0, 0.8), rgba(204, 149, 68, 0.4)), url("images/MechPortal.png");
        }
    </style>
</head>

<body>
    <section class="header">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="nav-links">
                <ul>
                    <li> <a href="index.php">HOME</a></li>
                    <li> <a href="about.php">ABOUT US</a></li>
                    <li> <a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h2 class="text-center text-decoration-underline text-white" style="font-size: 5em;">SERVICE REQUEST FORM</h2>
        </div>
    </section>

    <div class="loginForm">
        <div class="container">
            <form class="form" id="signup" method="POST" action="">
                <div class="form__input-group">
                    <select class="form__input form-select" aria-label="Mechanic Name" name="mechid">
                        <option selected>Mechanic Name</option>
                        <?php 
                            while($rowB = mysqli_fetch_assoc($resultBase)){
                                $mname = $rowB['name'];
                                $mid = $rowB['mechid'];
                                echo "<option value='$mid'>$mname</option>";
                            }                               
                        ?>
                    </select>
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" placeholder="Service Type" name="servtype" value="<?php echo $servtype;?>">
                </div>
                <button class="form__button" type="submit" name="submit">SUBMIT REQUEST</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>