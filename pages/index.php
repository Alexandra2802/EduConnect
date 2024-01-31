<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <link rel="stylesheet" href="../styles/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
        <!-- j query cdn -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <title>EduConnect</title>    
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
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="../styles/style.css" rel="stylesheet">
        
    </head>
    <body>
        <header> 
            <ul class="navbar">
                <li class="li-left"><a href="index.php"><img src="../images\educonnect-high-resolution-logo-transparent.png" alt="logo"></a></li>
                <li class="li-left"><a href="" style="cursor:default">Bine ai venit, <?php echo $_SESSION['username'] ?></a></li>
                <?php  if (isset($_SESSION['username'])) : ?>
                    <li class="li-right"> <a href="index.php?logout='1'" data-hover="Logout" class="animated">Logout</a> </li>
                <?php endif ?>
                <?php  if ($_SESSION['username']=='admin') : ?>
                    <li class="li-right"><a href="meditatii.php" data-hover="Admin" class="animated">Admin</a></li>
                <?php endif ?>
                <?php  if ($_SESSION['username']!='admin') : ?>
                    <li class="li-right"><a href="oferte.php" data-hover="Oferte" class="animated">Oferte</a></li>
                <?php endif ?>
                <li class="li-right"><a href="index.php" data-hover="Acasa" class="animated current">Acasa</a></li>
            </ul>
        </header>

        <!-- Carousel start-->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="../img/carousel-2.jpg" alt="carousel-2">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .3);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Cei mai buni profesori</h5>
                                    <h1 class="display-3 text-white animated slideInDown">Gaseste-ti usor profesori pentru meditatii</h1>
                                    <p class="fs-5 text-white mb-4 pb-2">Facilitam legatura dintre studenti si profesori pentru ca tu sa te poti concentra pe ceea ce conteaza: studiul</p>
                                    <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a> -->
                                    <!-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="../img/carousel-1.jpg" alt="carousel-2">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .3);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Cei mai buni profesori</h5>
                                    <h1 class="display-3 text-white animated slideInDown">Gaseste-ti usor profesori pentru meditatii</h1>
                                    <p class="fs-5 text-white mb-4 pb-2">Facilitam legatura legatura dintre studenti si profesori pentru ca tu sa te poti concentra pe ceea ce conteaza: studiul</p>
                                    <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a> -->
                                    <!-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel end -->

        <!-- Services start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                                <h5 class="mb-3">Cei mai buni profesori</h5>
                                <p style="color:black">Profesorii noștri sunt calificați și foarte competenți în domeniul lor pentru a vă ajuta cât mai mult</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                <h5 class="mb-3">Meditații online</h5>
                                <p style="color:black">De la pandemie încoace modul de predare s-a schimbat iar noi n-am adaptat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-home text-primary mb-4"></i>
                                <h5 class="mb-3">Meditații in persoana</h5>
                                <p style="color:black">Profesorii sunt dispuși să se întâlnească cu voi în diferite locații: acasă, bibliotecă sau cafenele</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                                <h5 class="mb-3">Materiale de studiu</h5>
                                <p style="color:black">Oferim manuale și modele de examen pentru o pregatire adecvată</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services end -->
        <br><br><br>

        <!-- The Modal -->
        <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img src="#" class="modal-content" id="img01" alt="testimonial-1">
        <div id="caption"></div>
        </div>

        <!-- Testimonials start -->
        <div id="page" class="site">
            <div class="show-more-container">
                <div class="show-more-header"><h1>Testimoniale</h1></div>
                <br><br><br>
                <main>
                    <div class="post">
                        <ul>
                            <li>
                                <div class="thumbnail"></div>
                                    <a href="#"><img src="../img/testimonial-1.jpg" alt="testimonial-1" ></a>
                                <div class="meta">
                                    <h2>Am început să iau meditații la matematică și am fost foarte mulțumită de experiență. Profesorul a fost foarte priceput și a explicat conceptele complexe într-un mod simplu. Am făcut progrese semnificative în timpul meditațiilor și am învățat multe lucruri noi. Recomand cu căldură oricui are nevoie de ajutor.</h2>
                                    <p>Maria, 2 Iunie 2022</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumbnail"></div>
                                    <a href="#"><img src="../img/testimonial-2.jpg" alt="testimonial-2"></a>
                                <div class="meta">
                                    <h2>Am luat meditații la limba engleză și a fost o experiență excelentă. Profesoara a fost foarte atentă la nevoile mele și mi-a oferit o mulțime de resurse utile. Am reușit să-mi îmbunătățesc abilitățile de vorbire și scriere în engleză și am devenit mult mai sigur pe mine în timpul conversațiilor.</h2>
                                    <p>Ionuț, 23 Mai 2022</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumbnail"></div>
                                    <a href="#"><img src="../img/testimonial-3.jpg" alt="testimonial-3"></a>
                                <div class="meta">
                                    <h2>Am luat meditații la biologie pentru a mă pregăti pentru examenul de admitere la facultate și am reușit să obțin rezultate foarte bune. Am reușit să mă pregătesc pentru toate subiectele examenului și am avut acces la o mulțime de resurse utile pentru a învăța. Am obținut o notă foarte bună la examen și sunt foarte recunoscător pentru ajutorul lor.</h2>
                                    <p>Marian, 21 Iunie 2021</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumbnail"></div>
                                    <a href="#"><img src="../img/testimonial-4.jpg" alt="testimonial-4"></a>
                                <div class="meta">
                                    <h2>Am ales să iau meditații la istorie pentru a mă pregăti pentru examenul de bacalaureat și am obținut rezultate peste asteptarile mele. Profesorul meu a reușit să mă ajute să înțeleg subiectul și să îmi îmbunătățesc abilitățile de analiză și sinteză.</h2>
                                    <p>Ioana, 20 Mai 2022</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumbnail"></div>
                                    <a href="#"><img src="../img/testimonial-7.jpg" alt="testimonial-7"></a>
                                <div class="meta">
                                    <h2>Am luat meditații la matematică și am observat o îmbunătățire semnificativă în abilitățile mele, dar și în încrederea mea în sine. Profesorul mi-a oferit feedback constructiv și m-a încurajat să încerc să rezolv exercițiile chiar dacă nu eram sigură de răspunsul meu.</h2>
                                    <p>Andrei, 10 Iunie 2022</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumbnail"></div>
                                    <a href="#"><img src="../img/testimonial-6.jpg" alt="testimonial-6"></a>
                                <div class="meta">
                                    <h2>Am avut rezultate foarte bune la examene și asta se datorează profesorului care m-a ajutat și m-a încurajat la fiecare ședință. Voi mai apela la această platoformă și în viitor pentru a-mi găsi un profesor de meditații.</h2>
                                    <p>Radu, 16 Iunie 2022</p>
                                </div>
                            </li>
                        </ul>
                        <button class="load-more">
                            Load more
                        </button>
                    </div>
                </main>
            </div>
        </div>
        <!-- Testimonials end -->
        <br><br><br>
        <!-- <h2 style="margin:auto;color:aliceblue">Oferim meditatiii la:</h2>
        <ul style="list-style-type:none;margin:auto">
            <li><h3 style="color:aliceblue">Materii reale:</h3></li>
            <li>
                <ul style="list-style-type:none;">
                    <li>Matematica</li>
                    <li>Informatica</li>
                    <li>Fizica</li>
                    <li>Chimie</li>
                    <li>Biologie</li>
                </ul>
            </li>
            <li><h3 style="color:aliceblue">Materii umaniste:</h3></li>
            <li>
                <ul style="list-style-type:none;">
                    <li>Romana</li>
                    <li>Engleza</li>
                    <li>Istorie</li>
                    <li>Filosofie</li>
                </ul>
            </li>
        </ul> -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Quick Links</h4>
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
                                <img class="img-fluid bg-light p-1" src="../img/course-1.jpg" alt="course-1" id="pop-up-img">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="../img/course-2.jpg" alt="course-2">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="../img/course-3.jpg" alt="course-3">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="../img/course-2.jpg" alt="course-4">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="../img/course-3.jpg" alt="course-5">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="../img/course-1.jpg" alt="course-6">
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
                            &copy; <a class="border-bottom" href="#">EduConnect</a>, All Right Reserved.

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

        <script src="../scripts/showMore.js"></script>
        <script src="../scripts/displayPopUp.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/wow/wow.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../js/main.js"></script>
        <script src="../scripts/loadMore.js"></script>

    </body>
</html>