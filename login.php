<?php 

include 'config.php';
error_reporting(0);
session_start();

if (isset($_SESSION['email']) && $_SESSION['type'] == "customers")
    header("Location: cust.php");
else if (isset($_SESSION['email']) && $_SESSION['type'] == "mechanics")
    header("Location: mech.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];   $password = md5($_POST['password']);    $table="";
    if($_POST['type'] == "0")
        $table = "customers";
    else if($_POST['type'] == "1")
        $table = "mechanics";

    $sql = "SELECT * FROM $table WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['type'] = $table;
        if($_SESSION['type'] == "customers")
            header("Location: cust.php");
        else if($_SESSION['type'] == "mechanics")
            header("Location: mech.php");
    } else 
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
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
            background-image: linear-gradient(rgba(28, 10, 0, 0.5), rgba(204, 149, 68, 0.3)), url("images/Login.jpg");
        }
    </style>
</head>
<body>
    <section class="header">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="nav-links">
                <ul>
                    <li> <a href="index.php">HOME</a></li>
                    <li> <a href="loginBuy.php">BUY</a></li>
                    <li> <a href="login.php">REPAIRS</a></li>
                    <li> <a href="about.php">ABOUT US</a></li>
                    
                </ul>
            </div>
        </nav>
    </section>

    <div class="loginForm">
        <div class="container">
        <form class="form" id="login" method="POST" action="">
                <h1 class="form__title">LOGIN</h1>
                <div class="form__input-group">
                    <select class="form__input form-select" aria-label="Customers/Mechanic" name="type">
                        <option selected>--Select--</option>
                        <option value="0">Customer</option>
                        <option value="1">Mechanic</option>
                    </select>
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" placeholder="Email" name="email" value="<?php echo $email;?>">
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" placeholder="Password" name="password" value="<?php echo $password;?>">
                </div>
                <button class="form__button" type="submit" name="submit">LOGIN</button>
                <p class="form__text">
                    <a class="form__link" href="signup.php">New User? SignUp</a>
                </p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>