<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fix-It-All !!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
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
                    <li> <a href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <div class="title-header">FIX-IT-ALL</div>
        <style>
            .title-header{
                color: white;
                font-size: 15em;
                z-index: 5;
                font-family: 'Cormorant Garamond', sans-serif;
                font-weight: bold;
                font-style: italic;
                /* letter-spacing: 0.15em; */
                text-align: center;
                padding-top: 0.5em;
            }
            .header {
                min-height: 100vh;
                width: 100%;
                background-image: url("images/title.svg");
                background-position: center;
                position: relative;
            }
        </style>
    </section>

    <section class="m-5">
        <div class="py-5">
            <h2 class="text-center" style="font-size: 3em;">About Us</h2>
        </div>

        <div class="row">
            <div class="col-lg-6 col-6 col-12">
                <img src="images/about.jpg" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-6 col-12">
                <p class="py-3" style="font-size: 1.5em;">
                    The website offers exclusive range of automobile parts that perfectly satisfy the need of the customers. Just enter the model of your vehicle and we will provide a wide range of hardware products compatible to your vehicle. We also provide custom service options and vehicle service appointments can be made at ease.
                </p>
                <a class="btn btn-success" href="about.php">Know More</a>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/onsite_mechanic.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">On-site Mechanic</h4>
                            <p class="card-text">We offer a wide range of professional mechanics who 
                                will be at your doorstep in a click of a few buttons. From replacing tires to fixing
                            the engine, everything is done here.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/cheap_parts.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Cheap Parts</h4>
                            <p class="card-text">A vast variety of different car parts of almost all 
                                brands are available on our website at affordable rates. From a spark 
                            plug to break rings, everything is available at reasonable prices</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/interior.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Interior Aesthetics</h4>
                            <p class="card-text">Fix-It-All offers a lot of options for you to customize the interiors of your car,however you want!
                            You can buy ready-made car covers or even customize your own, attach speakers, aesthetic lights and many more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="colg-lg-4 col-md-4 col-12">
                    <img src="images\purolator.jpg" class="img-fluid pb-4 rounded">
                </div>
                <div class="colg-lg-4 col-md-4 col-12">
                    <img src="images\valeo.jpg" class="img-fluid pb-4 rounded">
                </div>
                <div class="colg-lg-4 col-md-4 col-12">
                    <img src="images\bosch.png" class="img-fluid pb-4 rounded">
                </div>
                <div class="colg-lg-4 col-md-4 col-12">
                    <img src="images\motherson.jpg" class="img-fluid pb-4 rounded">
                </div>
                <div class="colg-lg-4 col-md-4 col-12">
                    <img src="images\eurorepar.jpg" class="img-fluid pb-4 rounded">
                </div>
                <div class="colg-lg-4 col-md-4 col-12">
                    <img src="images\unominda.png" class="img-fluid pb-4 rounded">
                </div>
                
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Reach Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea name="comment" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </section>


    <footer>
        <h3 class="p-3 text-white text-center">@Fix-It-All DevTeam</h3>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>