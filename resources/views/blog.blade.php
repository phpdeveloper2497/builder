<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>АЛГОРИТМ САН </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction Company Website Template" name="keywords">
    <meta content="Construction Company Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <h1>АЛГОРИТМ САН</h1>
                              <img src="{{ asset('img/logo_ch.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-calendar"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Час работы</h3>
                                    <p>Пн - Пт, 8:00 - 9:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Позвоните нам</h3>
                                    <p>+7 (968) 533-46-76</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-send-mail"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Связаться с нами</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
                        <a href="{{ route('team') }}" class="nav-item nav-link">Team</a>
                        <a href="{{ route('index') }}" class="nav-item nav-link">Project</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('blog') }}" class="dropdown-item">Blog Page</a>
                                <a href="{{ route('single') }}" class="dropdown-item">Single Page</a>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ml-auto">
                        <a class="btn" href="#">ПОЛУЧИТЬ ЦЕНУ</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Blog</h2>
                </div>
                <div class="col-12">
                    <a href="">ГЛАВНЫЙ</a>
                    <a href="">Наш блог</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Последний блог</p>
                <h2>Последние новости из нашего блога</h2>
            </div>
            <div class="row blog-page">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Construction</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Construction</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Construction</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Construction</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Construction</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Construction</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-contact">
                        <h2>Контакты офиса</h2>
                        <p><i class="fa fa-map-marker-alt"></i>129226, г Москва, ул
Сельскохозяйственная, д. 17, к. 1,</p>
                        <p><i class="fa fa-phone-alt"></i>+7 (968) 533-46-760</p>
                        <p><i class="fa fa-envelope"></i>info@example.com</p>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-link">
                        <h2>Зоны обслуживания</h2>
                        <a href="">Строительство зданий</a>
                        <a href="">Ремонт дома</a>
                        <a href="">Архитектура и дизайн</a>
                        <a href="">Дизайн интерьера</a>
                        <a href="">Рисование</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-link">
                        <h2>Полезные страницы</h2>
                        <a href="">О нас</a>
                        <a href="">Связаться с нами</a>
                        <a href="">Наша команда</a>
                        <a href="">Проекты</a>
                        <a href="">Отзыв</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="Информационный бюллетень">
                        <h2>Информационный бюллетень</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu
                        </p>
                        <div class="form">
                            <input class="form-control" placeholder="Написать письмо здесь">
                            <button class="btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       {{--        <div class="container footer-menu">--}}
{{--            <div class="f-menu">--}}
{{--                <a href="">Terms of use</a>--}}
{{--                <a href="">Privacy policy</a>--}}
{{--                <a href="">Cookies</a>--}}
{{--                <a href="">Help</a>--}}
{{--                <a href="">FQAs</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    {{--        <div class="container copyright">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
