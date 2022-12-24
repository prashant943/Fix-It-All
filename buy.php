<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buy product Page</title>
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

        .details {
            margin-left: auto;
	    margin-right: auto;
	    margin-top: 10vh;
	
	justify-content: space-between;
	width: 75%;
	height: fit-content;
	padding: 2rem;
	text-align: center;
	border-radius: var(--border-radius);
	background: rgb(255, 252, 224);
	border-color: rgb(54, 21, 0);
	border-style: inset;
        }
        .details h1{
            font-size: 25px;
        }
        table{
            border: 3px solid black;
            margin: auto;
        }
        td,th{
            padding: 10px;
            border: 1px dotted black;
        }
    </style>
</head>
<body>
    <section class="header">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="nav-links">
                <ul>
                    <li> <a href="index.php">HOME</a></li>
                    <li> <a href="login.php">REPAIRS</a></li>
                    <li> <a href="about.php">ABOUT US</a></li>
                    <li> <a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </nav>
        <div class="details">
        <h1> Hey customer, Glad to inform that your required product is available.
                    <br> You may proceed with the details mentioned below.</h1>
                    <br>

        <?php
            include 'config.php';
            error_reporting(0);
            session_start();
            $company=$_SESSION['comp'];
            $modelno=$_SESSION['modid'];
            $table="product";
            $sql="SELECT * from $table where comp='$company' and modelno='$modelno'";
            $result = mysqli_query($conn, $sql);
            echo "";
            if (mysqli_num_rows($result) > 0) 
            {
                while($row = mysqli_fetch_array($result))
                {
                    // echo "<h1>Hey customer , your product $row[0] is available</h1>";
                    // echo "You can get your product at the price of $row[3]";
                    if($row[5]==1)
                        $online='Yes';
                    else
                        $online='No';
                    echo " <table>
                            <tr>
                                <th> Model No.</th>
                                <th> Product Company</th>
                                <th> Product Price</th>
                                <th> Seller Name</th>
                                <th> Seller Contact</th>
                                <th> Online Delivery</th>
                            </tr>
                            <tr>
                                <td> $row[2]</td>
                                <td> $row[1]</td>
                                <td> $row[3]</td>
                                <td> $row[4]</td>
                                <td> $row[6]</td>
                                <td> $online</td>
                            </tr>
                            </table>";
                }
            } else 
            echo "<h1>Woops! Regret to inform that product not found</h1>";
            ?>    
            </div>
    </section>

    </body>
</html>