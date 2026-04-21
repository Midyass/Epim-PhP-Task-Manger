<?php

require_once("../config/database.php");

$id = intval($_GET['id'] ?? 1);

$query = "SELECT * FROM users WHERE id=$id";

$result = mysqli_query($connection, $query);
$data =  mysqli_fetch_array($result);


?>

<!-- Banner -->
<section class="banner-2" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-8 col-lg-7">
                <div
                    class="banner-2-content position-relative z-2 pb-xl-80 pt-xl-80">
                    <div data-animation="move" data-animation-delay="1">
                        <h4 class="fs-18 text-uparcase color-theme-2 fw-700">
                            Hello, <i class="fa-solid fa-hand-scissors" style="color: rgb(255, 212, 59);"></i>
                        </h4>
                        <h1 class="mb-18 mt-10">
                            <span>Amine</span> Aymen
                        </h1>
                    </div>
                    <div
                        data-animation="fade"
                        data-animation-direction="bottom"
                        data-animation-duration=".75"
                        data-animation-delay="1.2"
                        data-animation-offset="40"
                        data-scroll-trigger="false">
                        <p>
                            A personal portfolio is a collection of your work,
                            achievements, and skills that highlights your abilities and
                            professional growth. It serves as
                        </p>
                    </div>
                    <div
                        class="d-block d-sm-flex gap-20 mt-40"
                        data-animation="fade"
                        data-animation-direction="bottom"
                        data-animation-duration=".75"
                        data-animation-delay="1.5"
                        data-animation-offset="40"
                        data-scroll-trigger="false">
                        <a
                            href="#"
                            class="theme-btn-with-bg theme-2-bg mr-sm-30 mb-sm-15 btn_moveing_hover">View More</a>

                    </div>
                </div>
            </div>
            <div
                class="col-xxl-4 col-xl-4 col-lg-5 offset-xxl-2 flex-end d-none d-lg-flex">
                <div class="banner-2-author-img">
                    <img
                        src="../assets/img/author-banner-2.png"
                        class="w-100 img-fluid"
                        alt=""
                        data-mouse-move />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About us -->
<section class="mt-120 bg-white" id="about">
    <div class="container">
        <div class="row" data-animation="move">
            <div class="col-md-3">
                <h4 class="sub-title-2 mt-10">About us</h4>
            </div>
            <div class="col-md-9">
                <h2 class="about-2-title">
                    Stand with
                    <span>Your Personal</span>
                    Portfolio
                </h2>
            </div>
        </div>
        <div class="row mt-60 align-items-center gap-md-30">
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="about-2-img-1" data-speed=".7">
                            <img src="../assets/img/about-4.png" class="br-20" alt="" />
                        </div>
                    </div>
                    <div class="col-6" data-speed=".9">
                        <img
                            src="../assets/img/about-1.png"
                            class="img-fluid w-100 br-20"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ml-30">
                    <div data-animation="fade" data-animation-direction="bottom">
                        <p>
                            Working with this company has been a game-changer for my
                            business. Their expertise and innovat approach have a helped
                            us a remarkable Working with this company has been a game
                        </p>
                    </div>
                    <div
                        class="d-flex flex-column flex-sm-row gap-80 gap-sm-30 mt-40">
                        <div
                            class="counter-2-item"
                            data-animation="fade"
                            data-animation-direction="bottom">
                            <h3 class="fs-60 fs-md-40 fw-70 mb-15">
                                <span class="count">25</span>k
                            </h3>
                            <p>Project Done</p>
                        </div>
                        <div
                            class="counter-2-item"
                            data-animation="fade"
                            data-animation-direction="bottom"
                            data-animation-delay="0.2">
                            <h3 class="fs-60 fs-md-40 fw-70 mb-15">
                                <span class="count">302</span>+
                            </h3>
                            <p>Project Win</p>
                        </div>
                    </div>
                    <div
                        data-animation="fade"
                        data-animation-direction="bottom"
                        data-animation-delay="0.2">
                        <a href="#" class="theme-btn-3 mt-40">Read More <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rusume-->
<!--<section class="mt-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 m-auto">
                <div class="text-center" data-animation="move">
                    <h4 class="sub-title-2-arrows mb-10">Rusume</h4>
                    <h2 class="section-title">
                        Unleash Your Professional the Potential
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div
                class="col-xl-8 m-auto"
                data-animation="fade"
                data-animation-direction="bottom">
                <ul class="resume-btns" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a
                            href="#pills-home"
                            class="nav-link active"
                            id="pills-home-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-home"
                            type="button"
                            role="tab"
                            aria-controls="pills-home"
                            aria-selected="true">About Me</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link"
                            href="#portfolio-photography"
                            id="portfolio-photography-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#portfolio-photography"
                            type="button"
                            role="tab"
                            aria-controls="portfolio-photography"
                            aria-selected="false">Photography</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link"
                            href="#portfolio-video"
                            id="portfolio-video-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#portfolio-video"
                            type="button"
                            role="tab"
                            aria-controls="portfolio-video"
                            aria-selected="false">Video Editing</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            href="#portfolio-ui-ux"
                            class="nav-link"
                            id="portfolio-ui-ux-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#portfolio-ui-ux"
                            type="button"
                            role="tab"
                            aria-controls="portfolio-ui-ux"
                            aria-selected="false">UX/UI Design</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div
                class="about-tab-content tab-pane fade show active pt-94 mt-60 position-relative"
                id="pills-home"
                data-animation="fade"
                data-animation-direction="bottom">
                <div class="row gap-lg-30">
                    <div
                        class="col-xl-5 col-lg-6 position-relative pl-50 pl-lg-0 pl-md-15 order-2 order-lg-1"
                        data-speed=".9">
                        <img src="../assets/img/dot-shap.png" class="dot-shap" alt="" />
                        <img
                            src="../assets/img/about-img.png"
                            class="w-100 img-fluid br-10"
                            alt="" />
                        <div class="blur-bg">
                            <div class="users-mini">
                                <div class="user">
                                    <img src="../assets/img/author-mini-1.png" alt="" />
                                </div>
                                <div class="user">
                                    <img src="../assets/img/author-mini-2.png" alt="" />
                                </div>
                                <div class="user">
                                    <img src="../assets/img/author-mini-3.png" alt="" />
                                </div>
                                <div class="plus-mini user">
                                    <i class="fa-regular fa-plus"></i>
                                </div>
                            </div>
                            <div class="user-conter">
                                <h6><span class="count">3000</span>+</h6>
                                <p>Experience Team</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 order-1 order-lg-2">
                        <div class="about-right-tab-content pl-80 pl-xl-40 pl-sm-15">
                            <h3>UX/UI Design</h3>
                            <ul>
                                <li>
                                    <h4>Name</h4>
                                    <p>Nafiz Bhuiyan</p>
                                </li>
                                <li>
                                    <h4>Phone</h4>
                                    <p>01254789242</p>
                                </li>
                                <li>
                                    <h4>Nationality</h4>
                                    <p>Bangladesh</p>
                                </li>
                                <li>
                                    <h4>Email</h4>
                                    <p>nafiz123@gmail.com</p>
                                </li>
                                <li>
                                    <h4>Experience</h4>
                                    <p>1 years</p>
                                </li>
                                <li>
                                    <h4>Freelance</h4>
                                    <p>Available</p>
                                </li>
                                <li>
                                    <h4>Skype</h4>
                                    <p>01248486246</p>
                                </li>
                                <li>
                                    <h4>Language</h4>
                                    <p>English</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade mt-60 position-relative"
                id="portfolio-photography">
                <div class="portfolio2-items">
                    <div class="portfolio2-item" data-title="Christopher Vega">
                        <a href="../assets/img/portfolio/photography/5.png">
                            <img
                                src="../assets/img/portfolio/photography/5.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Teresa Butler">
                        <a href="../assets/img/portfolio/photography/1.png">
                            <img
                                src="../assets/img/portfolio/photography/1.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div
                        class="portfolio2-item"
                        data-title="Dominic Kurniawan Suryaputra">
                        <a href="../assets/img/portfolio/photography/2.png">
                            <img
                                src="../assets/img/portfolio/photography/2.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Jackie Best">
                        <a href="../assets/img/portfolio/photography/3.png">
                            <img
                                src="../assets/img/portfolio/photography/3.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>

                    <div class="portfolio2-item" data-title="Tolga Ahmetler">
                        <a href="../assets/img/portfolio/photography/4.png">
                            <img
                                src="../assets/img/portfolio/photography/4.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade mt-60 position-relative"
                id="portfolio-video">
                <div class="portfolio2-items video-play">
                    <div
                        class="portfolio2-item"
                        data-title="Filmmaker and Photographer">
                        <a href="https://www.youtube.com/watch?v=6XMzpaZFNcw">
                            <img
                                src="../assets/img/portfolio/video-editing/1.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Filmmaking">
                        <a href="https://www.youtube.com/watch?v=6XMzpaZFNcw">
                            <img
                                src="../assets/img/portfolio/video-editing/3.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Laura Chouette">
                        <a href="https://www.youtube.com/watch?v=6XMzpaZFNcw">
                            <img
                                src="../assets/img/portfolio/video-editing/6.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Donovan Silva">
                        <a href="https://www.youtube.com/watch?v=6XMzpaZFNcw">
                            <img
                                src="../assets/img/portfolio/video-editing/4.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Roger Erdvig">
                        <a href="https://www.youtube.com/watch?v=6XMzpaZFNcw">
                            <img
                                src="../assets/img/portfolio/video-editing/5.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Youtube Editor">
                        <a href="https://www.youtube.com/watch?v=6XMzpaZFNcw">
                            <img
                                src="../assets/img/portfolio/video-editing/2.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade mt-60 position-relative"
                id="portfolio-ui-ux">
                <div class="portfolio2-items">
                    <div class="portfolio2-item" data-title="Design System">
                        <a href="../assets/img/portfolio/ui/1.png">
                            <img
                                src="../assets/img/portfolio/ui/1.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Deshboard Design">
                        <a href="../assets/img/portfolio/ui/3.png">
                            <img
                                src="../assets/img/portfolio/ui/3.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="UX Details">
                        <a href="../assets/img/portfolio/ui/6.png">
                            <img
                                src="../assets/img/portfolio/ui/6.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Mobile App">
                        <a href="../assets/img/portfolio/ui/4.png">
                            <img
                                src="../assets/img/portfolio/ui/4.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Wireframe">
                        <a href="../assets/img/portfolio/ui/5.png">
                            <img
                                src="../assets/img/portfolio/ui/5.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="portfolio2-item" data-title="Gradient Color">
                        <a href="../assets/img/portfolio/ui/2.png">
                            <img
                                src="../assets/img/portfolio/ui/2.png"
                                class="w-100 img-fluid"
                                alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- lATEST PROJRCT -->
<section class="mt-120" id="projects">
    <div class="container">
        <div
            class="row align-items-center align-items-xxl-start"
            data-animation="move">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xxl-3">
                        <h4 class="sub-title-2">lATEST PROJRCT</h4>
                    </div>
                    <div class="col-xxl-9">
                        <h2 class="section-title pl-30 pl-xxl-0">
                            Your Portfolio Your A Success Story
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <p class="mt-20 pl-50 pl-xxl-0">
                    A personal portfolio is a collection of your work, achievements,
                    and skills highlights your abilities and professional
                </p>
            </div>
        </div>
        <div
            class="mt-100 portfolio-items"
            data-animation="fade"
            data-animation-direction="bottom">
            <div class="row gap-md-30">
                <div class="col-md-3">
                    <div class="portfolio-item">
                        <img
                            src="../assets/img/portfolio-2.png"
                            class="w-100 img-fluid br-10"
                            alt="" />
                        <div class="portfolio-content">
                            <h3>
                                Personalize Your Portfolio, Amplify Your Impact The Best
                            </h3>
                            <p>Social Media Management</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-item active">
                        <img
                            src="../assets/img/portfolio-1.png"
                            class="w-100 img-fluid br-10"
                            alt="" />
                        <div class="portfolio-content">
                            <h3>
                                Personalize Your Portfolio, Amplify Your Impact The Best
                            </h3>
                            <p>Social Media Management</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="portfolio-item">
                        <img
                            src="../assets/img/portfolio-3.png"
                            class="w-100 img-fluid br-10"
                            alt="" />
                        <div class="portfolio-content">
                            <h3>
                                Personalize Your Portfolio, Amplify Your Impact The Best
                            </h3>
                            <p>Social Media Management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cta -->
<section
    class="cta"
    data-animation="fade"
    data-animation-direction="bottom">
    <div class="container">
        <div class="cta-bg position-relative pl-xl-40 pr-xl-40">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-4 d-none d-xl-block">
                    <i class="ashik-icon-misc misc-icon"></i>
                    <div class="cta-img">
                        <img src="../assets/img/newsletters.png" alt="" />
                        <i class="ashik-icon-ziczac-arrow"></i>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1">
                    <h2 class="section-title mt-82">Newsletters</h2>
                    <p class="mt-20">
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </p>
                    <form>
                        <input type="email" placeholder="Enter Email Adress" />
                        <button>
                            Browse More <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service -->
<section
    class="service-2 ml-80 mr-80 mr-xl-40 ml-xl-40 mr-md-15 ml-md-15 pl-15 pr-15 br-20"
    id="services">
    <div class="container">
        <div data-animation="move">
            <h4 class="sub-title-2">Latest Service</h4>
            <h2 class="section-title">
                Elevate of Professional <br />
                Presence
            </h2>
        </div>
        <div class="service-2-items">
            <div
                class="service-2-item row align-items-center gap-lg-20"
                data-animation="fade"
                data-animation-direction="bottom"
                animation-delay="0"
                data-animation-duration=".3">
                <div class="col-xl-4 col-lg-4">
                    <div class="service-2-icon-name">
                        <i class="ashik-icon-trophy"></i>
                        <h3>Central Program</h3>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <p>
                        A personal portfolio is a collection of your work,
                        achievements, and skills highlights your abilities and
                        professional
                    </p>
                </div>
                <div class="col-xl-3 col-lg-4 flex-lg-end">
                    <a href="#">Read More
                        <i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div
                class="service-2-item row align-items-center gap-lg-20"
                data-animation="fade"
                data-animation-direction="bottom"
                animation-delay="0"
                data-animation-duration=".3">
                <div class="col-xl-4 col-lg-4">
                    <div class="service-2-icon-name">
                        <i class="ashik-icon-umbrella"></i>
                        <h3>Dynamic Security</h3>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <p>
                        A personal portfolio is a collection of your work,
                        achievements, and skills highlights your abilities and
                        professional
                    </p>
                </div>
                <div class="col-xl-3 col-lg-4 flex-lg-end">
                    <a href="#">Read More
                        <i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div
                class="service-2-item row align-items-center gap-lg-20"
                data-animation="fade"
                data-animation-direction="bottom"
                animation-delay="0"
                data-animation-duration=".3">
                <div class="col-xl-4 col-lg-4">
                    <div class="service-2-icon-name">
                        <i class="ashik-icon-support"></i>
                        <h3>Customer Creative</h3>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <p>
                        A personal portfolio is a collection of your work,
                        achievements, and skills highlights your abilities and
                        professional
                    </p>
                </div>
                <div class="col-xl-3 col-lg-4 flex-lg-end">
                    <a href="#">Read More
                        <i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Brands -->
<section class="mt-120 pl-sm-15 pr-sm-15">
    <div class="container">
        <div class="brands">
            <div class="row p-0">
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-6.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-7.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-8.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-9.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-10.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-11.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-12.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-13.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-14.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-15.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-16.png"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="brand-item">
                        <img
                            data-animation="fade"
                            data-animation-direction="bottom"
                            src="../assets/img/brand/brand-17.png"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->
<section
    class="testimonial-2-bg mt-120 bg-white ml-80 mr-80 mr-xl-40 ml-xl-40 mr-md-15 ml-md-15 br-20 overflow-hidden position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="position-relative z-2">
                    <div class="bg-blur-2"></div>
                    <div class="testimonial-2-img">
                        <img src="../assets/img/testimonial-author-2.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-xl-40 pl-0 pr-0 overflow-hidden">
                <div class="testimonial2-sliders">
                    <div class="swiper-wrapper pl-md-15 pr-md-15">
                        <div class="swiper-slide">
                            <p class="fs-24 fs-md-16 lh-md-25 lh-42">
                                Working with this company has been a game-changer for my
                                business. Their expertise and innovat approach have a
                                helped us achieve remarkable Working with this company has
                                been a game-changer for my business
                            </p>
                            <div class="d-flex">
                                <div
                                    class="d-sm-flex d-block justify-content-between w-100 mt-45">
                                    <div class="d-flex gap-20">
                                        <img
                                            src="../assets/img/author-mini-1.png"
                                            class="w-73 h-73 rounded-carcle"
                                            alt="" />
                                        <div class="testimonial-author-info">
                                            <h3>Darlene Robertson</h3>
                                            <p class="mt-6">Software Engineer</p>
                                        </div>
                                    </div>
                                    <div class="rating mt-10 ml-sm-90">
                                        <i class="fa-sharp fa-solid fa-star color-rating"></i>
                                        <i class="fa-sharp fa-solid fa-star color-rating"></i>
                                        <i class="fa-sharp fa-solid fa-star color-rating"></i>
                                        <i class="fa-sharp fa-solid fa-star color-rating"></i>
                                        <i class="fa-sharp fa-solid fa-star color-rating"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p class="fs-24 fs-md-16 lh-md-25 lh-42">
                                Working with this company has been a game-changer for my
                                business. Their expertise and innovat approach have a
                                helped us achieve remarkable Working with this company has
                                been a game-changer for my business
                            </p>
                            <div class="d-flex">
                                <div
                                    class="d-sm-flex d-block justify-content-between w-100 mt-45">
                                    <div class="d-flex gap-20">
                                        <img
                                            src="../assets/img/author-mini-1.png"
                                            class="w-73 h-73 rounded-carcle"
                                            alt="" />
                                        <div class="testimonial-author-info">
                                            <h3>Darlene Robertson</h3>
                                            <p class="mt-6">Software Engineer</p>
                                        </div>
                                    </div>
                                    <div class="rating mt-10 ml-sm-90">
                                        <i class="fa-sharp fa-solid fa-star color-rating"></i>
                                        <i class="fa-sharp fa-solid fa-star color-rating"></i>
                                        <i class="fa-sharp fa-solid fa-star color-rating"></i>
                                        <i class="fa-sharp fa-solid fa-star color-rating"></i>
                                        <i class="fa-sharp fa-solid fa-star color-rating"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial2-nav">
                        <div class="testimonial-prev">
                            <i class="fa-sharp fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="testimonial-next">
                            <i class="fa-sharp fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Wtach Highlight -->
<section class="mt-120">
    <div class="container">
        <div class="row align-items-center gap-lg-30">
            <div class="col-xxl-5 col-lg-6">
                <div data-animation="move">
                    <h4 class="sub-title-2 mb-10">Wtach Highlight</h4>
                    <h2 class="section-title">
                        Stand with Your the a Personal Portfolio
                    </h2>
                </div>
                <div data-animation="fade" data-animation-direction="bottom">
                    <p class="mt-37">
                        Working with this company has been a game-changer for my
                        business. Their expertise and innovat approach have a helped
                        us a remarkable Working with this company has been a game
                    </p>
                </div>
            </div>
            <div
                class="col-xxl-6 col-lg-6 offset-xxl-1"
                data-image-animation="reveal">
                <img
                    src="../assets/img/watch-highlight.png"
                    class="w-100 img-fluid"
                    alt=""
                    data-speed=".9" />
            </div>
        </div>
    </div>
</section>
<!-- Blog -->
<section class="mt-120" id="blog" data-pin>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-lg-9">
                <div class="text-center" data-animation="move">
                    <h4 class="sub-title-2-arrows mb-10">lATEST bLOG nEWS</h4>
                    <h2 class="section-title">
                        Personalize Portfolio Amplify Impact
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt-60 gap-lg-30">
            <div
                class="col-lg-4"
                data-animation="fade"
                data-animation-direction="bottom"
                data-animation-duration="1.15">
                <div class="blog-item">
                    <div class="position-relative">
                        <img src="../assets/img/blog-1.png" class="img-fluid w-100" alt="" />
                        <div class="date">
                            <h3>16</h3>
                            <p>Mar</p>
                        </div>
                        <div class="blog-item-info">
                            <div class="info">
                                <i class="fa-light fa-comments"></i>
                                <p>Comments (05)</p>
                            </div>
                            <div class="info">
                                <i class="fa-light fa-user"></i>
                                <p>By admin</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item-content">
                        <h3>
                            <a href="#">Showcase Your Skills, Land Your Dream Job</a>
                        </h3>
                        <p>
                            Corporate businesses typically offerings services such as
                            man consulting
                        </p>
                        <a href="#" class="btn-read-more theme-btn-3">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div
                class="col-lg-4"
                data-animation="fade"
                data-animation-delay="0.2"
                data-animation-duration="1.15"
                data-animation-direction="bottom">
                <div class="blog-item">
                    <div class="position-relative">
                        <img src="../assets/img/blog-2.png" class="img-fluid w-100" alt="" />
                        <div class="date">
                            <h3>16</h3>
                            <p>Mar</p>
                        </div>
                        <div class="blog-item-info">
                            <div class="info">
                                <i class="fa-light fa-comments"></i>
                                <p>Comments (05)</p>
                            </div>
                            <div class="info">
                                <i class="fa-light fa-user"></i>
                                <p>By admin</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item-content">
                        <h3>
                            <a href="#">Showcase Your Skills, Land Your Dream Job</a>
                        </h3>
                        <p>
                            Corporate businesses typically offerings services such as
                            man consulting
                        </p>
                        <a href="#" class="btn-read-more theme-btn-3">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div
                class="col-lg-4"
                data-animation="fade"
                data-animation-delay="0.4"
                data-animation-duration="1.15"
                data-animation-direction="bottom">
                <div class="blog-item">
                    <div class="position-relative">
                        <img src="../assets/img/blog-3.png" class="img-fluid w-100" alt="" />
                        <div class="date">
                            <h3>16</h3>
                            <p>Mar</p>
                        </div>
                        <div class="blog-item-info">
                            <div class="info">
                                <i class="fa-light fa-comments"></i>
                                <p>Comments (05)</p>
                            </div>
                            <div class="info">
                                <i class="fa-light fa-user"></i>
                                <p>By admin</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item-content">
                        <h3>
                            <a href="#">Showcase Your Skills, Land Your Dream Job</a>
                        </h3>
                        <p>
                            Corporate businesses typically offerings services such as
                            man consulting
                        </p>
                        <a href="#" class="btn-read-more theme-btn-3">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("../portfolio/footer.php"); ?>