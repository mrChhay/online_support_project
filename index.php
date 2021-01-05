<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- fontawsome css -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css">

    <title>OSMS</title>
</head>

<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">OSMS</a>
        <span class="navbar-text">
            Customer's Hapiness is outer Aim
        </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#Services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#registration" class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                    <a href="Requester/Requesterlogin.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end Navigation-->

    <!-- Start Header Jumbotron  -->
    <header class="jumbotron back-image" style="background-image: url(images/banner2.jpg); margin-top: 74px">
        <div class=" myclass mainHeading">
            <h1 class="text-uppercase text-danger font-wieght-bold"> Wellcome to OSMS</h1>
            <p class="font-italic"> Customer's Happiness is our Aim</p>
            <a href="Requester/Requesterlogin.php" class="btn btn-success mr-4">Login</a>
            <a href="registration.php" class="btn btn-danger mr-4">Sing Up</a>
        </div>
    </header> <!-- End Header jumbotro -->

    <!-- Start Introduction Section -->
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center"> OSMS Services</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, consectetur pariatur placeat voluptates
                architecto asperiores sed perspiciatis distinctio praesentium. Fugiat consectetur et sapiente id
                aspernatur aperiam amet iure, quis numquam, non ducimus ipsam in? Ducimus eligendi cupiditate saepe
                mollitia, dolores architecto eveniet reprehenderit optio et, blanditiis deserunt. Corporis eius saepe
                porro quod facilis! Ipsa, voluptatibus. Deserunt quae quam eligendi cupiditate, ex quibusdam est
                assumenda dignissimos blanditiis quas illo odio illum omnis tenetur sit vero corporis? Inventore impedit
                quisquam ut consequatur rem, accusamus quam obcaecati, neque laboriosam at excepturi tempora facere
                beatae. Laudantium beatae praesentium dignissimos omnis et quae voluptatum commodi!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, rerum ratione sunt ad ab, cum quos
                dolore excepturi aliquam hic aspernatur at. Amet perspiciatis qui esse, corporis, minima, corrupti
                facere sunt quisquam hic autem quos? Quae laudantium eaque maiores, nihil eius voluptas est pariatur
                voluptatibus placeat aliquam aliquid perspiciatis dignissimos, odit error quo non quod! Sapiente
                accusantium molestias rerum maxime quaerat vel neque dolorem, atque provident repellendus iure aliquid
                nam quisquam quod quos reiciendis sint nemo dolores veniam ab quidem reprehenderit incidunt fuga!
                Dignissimos rem harum non odit assumenda maxime amet nobis eius officia, sequi, laudantium ipsa
                perspiciatis commodi repudiandae.
            </p>
        </div>
    </div><!-- End Introduction Section -->

    <!-- Start Services Section  container-->
    <div class="container text-center" id="Services">
        <h2> Our SErvicess</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#">
                    <i class="fas fa-tv fa-8x text-success"></i>
                    <h4>Electronic Appliances</h4>
                </a>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#">
                    <i class="fas fa-sliders-h fa-8x text-primary"></i>
                    <h4>Preventive Maintenance</h4>
                </a>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#">
                    <i class="fas fa-cogs fa-8x text-info"></i>
                    <h4>Fault Repair</h4>
                </a>
            </div>

        </div>
    </div>
    <!-- End Services Section container -->

    <!-- Start Registeration form -->
    <?php
include('UserRegisteration.php')
   ?>
    <!-- End Registeration form -->

    <!-- Start Happy customer -->
    <div class="jumbotron bg-danger">
        <div class="container">
            <h2 class="text-center text-white"> Happy Customers</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avatar1.png" alt="avt1" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Rahuk kumar</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Vero eos facilis itaque vitae repellendus ex ut porro, magnam dolor libero?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avatar2.png" alt="avt1" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Rahuk kumar</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Vero eos facilis itaque vitae repellendus ex ut porro, magnam dolor libero?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avatar1.png" alt="avt1" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Rahuk kumar</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Vero eos facilis itaque vitae repellendus ex ut porro, magnam dolor libero?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avatar2.png" alt="avt1" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Rahuk kumar</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Vero eos facilis itaque vitae repellendus ex ut porro, magnam dolor libero?
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Happy customer -->

    <!-- Start Contact -->
    <div class="container" id="contact">
        <h2 class="text-center mb-4"> Contact Us</h2>
        <div class="row">

            <?php
                 include('Contact.php')
             ?>

            <div class="col-md-4 text-center">
                <strong>Headquarter:</strong> <br>
                OSMS pvt Ltf, <br>
                Ashok Nagar, Rachi <br>
                Jharkjha - 4000 <br>
                Phone: +000000 <br>
                <a href="#" target="_blank">www.osm.com</a>
                <br><br>

                <strong>Branch:</strong> <br>
                OSMS pvt Ltf, <br>
                Ashok Nagar, Rachi <br>
                Jharkjha - 4000 <br>
                Phone: +000000 <br>
                <a href="#" target="_blank">www.osm.com</a>
                <br><br>

            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer -->
    <footer class="container-fluid bg-dark mt-5 text-white">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6">
                    <span class="pr-2">
                        Follow Us:
                    </span>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-rss"></i>
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <small> Designed by xxxx &copy; 2020</small>
                    <small class="ml-2">
                        <a href="Admin/login.php">Admin Login</a>
                    </small>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- script -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>