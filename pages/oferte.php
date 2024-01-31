<?php include('../connection/server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EduConnect</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/style.css">
        <style>
            input{
            margin: 10px;
            }
        </style>
        <link rel="stylesheet" href="../styles/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
        <!-- j query cdn -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- Favicon -->
        <link href="../img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="../styles/style.css" rel="stylesheet">
  </head>
  <body>
    <header> 
        <ul class="navbar">
            <li class="li-left"><a href="index.php"><img src="../images/educonnect-high-resolution-logo-transparent.png" alt="logo"></a></li>
            <li class="li-left"><a href="" style="cursor:default">Bine ai venit, <?php echo $_SESSION['username'] ?></a></li>
            <?php  if (isset($_SESSION['username'])) : ?>
                <li class="li-right"> <a href="index.php?logout='1'" data-hover="Logout" class="animated">Logout</a> </li>
            <?php endif ?>
            <?php  if ($_SESSION['username']=='admin') : ?>
                <li class="li-right"><a href="meditatii.php" data-hover="Admin" class="animated">Admin</a></li>
            <?php endif ?>
            <?php  if ($_SESSION['username']!='admin') : ?>
                <li class="li-right"><a href=oferte.php" data-hover="Oferte" class="animated current">Oferte</a></li>
            <?php endif ?>
            <li class="li-right"><a href="index.php" data-hover="Acasa" class="animated">Acasa</a></li>
        </ul>
    </header>
    
    <!-- fetch data -->
    

    <div class="table-container">
        <div class="table-content">
            <div class="form-control">
                <input type="text" id="search-table" placeholder="Cauta">
            </div>
            <table class="table" style="color:white">
                <thead>
                    <tr>
                        <!-- <th scope="col">Id</th> -->
                        <th scope="col" class="text to-sort">Nume</th>
                        <th scope="col" class="text to-sort">Materie</th>
                        <th scope="col" class="num to-sort">Durata</th>
                        <th scope="col" class="num to-sort">Pret</th>
                        <th scope="col">Contact</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <?php
                        include '../connection/config.php';
                        $pic = mysqli_query($con,"SELECT * FROM `tutoring_sessions`");
                        while($row = mysqli_fetch_array($pic)){
                        echo "
                            <tr>
                                <td><br>$row[teacher_name]</td>
                                <td><br>$row[subject]</td>
                                <td><br>$row[duration]</td>
                                <td><br>$row[price]</td>
                                <td><br>$row[contact]</td>
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid  text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color:#181d38">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a  href="">About Us</a><br>
                    <a  href="">Contact Us</a><br>
                    <a  href="">Privacy Policy</a><br>
                    <a  href="">Terms & Condition</a><br>
                    <a  href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Str Mihail Kogalniceanu, Cluj-Napoca, România</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Înscrie-te pentru a fla cele mai noi vești</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Meditatii</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Alexandra Balo</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <script src="../scripts/sortByColumn.js"></script>
    <script src="../scripts/searchTable.js"></script>
  </body>
</html>