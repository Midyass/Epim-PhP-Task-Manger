<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/lib/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/lib/magnific-popup.css" />
    <link rel="stylesheet" href="../assets/css/lib/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/fonts/font-awesome.css" />
    <link rel="stylesheet" href="../assets/css/fonts/ashik-icon.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link rel="shortcut icon" href="../assets/img/fav-2.png" type="image/x-icon" />
    <title>Ashik Personal Portfolio Template</title>
</head>

<body class="home-2">
    <!--================================
        PRELOADER START
    =================================-->
    <div class="preloader">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>
        <h5 class="preloader-text">Ashik</h5>
    </div>
    <!--================================
        PRELOADER END
    =================================-->
    <header class="main-header header-2 fixed-header">
        <div class="container">
            <div class="header-2-content">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-lg-2 col-6">
                        <div class="logo">
                            <a href="./index.html"><img src="../assets/img/epim.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div
                        class="col-xxl-6 col-lg-8 d-none d-lg-block main-menu main-menu-2">
                        <nav class="navbar-nav m-auto" id="navbarNav">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#about">About</a>
                                </li>
                                <li>
                                    <a href="#services">Services</a>
                                </li>
                                <li>
                                    <a href="#projects">Projects</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xxl-3 col-lg-2 flex-end col-6">
                        <a href="#" class="toggle-sidebar">
                            <div class="toggle">
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="portfolio2_titles">Selena Gomez</div>
    <!-- Search Popup -->
    <div class="search-popup">
        <div class="search-popup-overlay"></div>
        <div class="search-popup-content">
            <a href="#" class="close-search">
                <i class="fa-regular fa-times"></i>
            </a>
            <div class="search-popup-form-container">
                <form>
                    <input type="text" placeholder="Search Here" />
                    <button><i class="fa-regular fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Sidebar -->
    <div class="mobile-menu mobile-menu-2">
        <div class="menu-backdrop"></div>
        <div class="main-menu-mobile">
            <div class="d-flex align-items-center justify-content-between">
                <div class="nav-logo">
                    <a href="index-2.html"><img src="../assets/img/logo-2.png" alt="" title="" /></a>
                </div>
                <div class="close-btn"><span class="far fa-times fa-fw"></span></div>
            </div>
            <div id="mobile-nav"></div>
        </div>
    </div>

    <div id="scrollsmoother-container">
        <?php include("../portfolio/main.php") ?>
    </div>

    <!--==============================
        SCROLL BUTTON START
    ===============================-->
    <div class="tf__scroll_btn">
        <i class="fa-regular fa-arrow-up-long"></i>
    </div>
    <!--==============================
        SCROLL BUTTON END
    ===============================-->

    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- font awesome -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js"></script>

    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/lib/waypoints.min.js"></script>
    <script src="../assets/js/lib/jquery.counterup.min.js"></script>
    <script src="../assets/js/lib/swiper-bundle.min.js"></script>
    <script src="../assets/js/lib/imagesloaded.js"></script>
    <script src="../assets/js/lib/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/lib/isotope.js"></script>
    <!-- Gsap -->
    <script src="../assets/js/gsap/gsap.min.js"></script>
    <script src="../assets/js/gsap/SplitText.min.js"></script>
    <script src="../assets/js/gsap/ScrollSmoother.min.js"></script>
    <script src="../assets/js/gsap/ScrollTrigger.min.js"></script>
    <!--  -->
    <script src="../assets/js/animation.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>