<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>POCSOFT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Sailor - v2.2.0
    * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

{{--        <h1 class="logo"><a href="{{route('home')}}">Sailor</a></h1>--}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{route('home')}}" class="logo"><img src="{{asset('assets/img/logo.svg')}}" alt="" class="img-fluid"></a>

        <nav class="nav-menu d-none d-lg-block">

            <ul>
                <li class=""><a href="#hero">Trang chủ</a></li>

                <li><a href="#about">Về chúng tôi</a>
                </li>

                <li><a href="#clients">Khách hàng</a></li>
                <li><a href="#services">Dịch vụ</a></li>
                <li><a href="#projects">Dự án</a></li>
{{--                <li><a href="#team">Đội ngũ</a></li>--}}
{{--                <li><a href="#skills">Skills</a></li>--}}
{{--                <li><a href="#testimonials">FeedBack</a></li>--}}
                <li><a href="#contact">Liên hệ</a></li>

            </ul>

        </nav><!-- .nav-menu -->

{{--        <a href="#hero" class="get-started-btn ml-auto">Bắt đầu</a>--}}

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown"><span style="color:#EF5B34 ">POC</span>SOFT</h2>
                        <p style="font-size:2rem !important;" class="animate__animated animate__fadeInUp">Công ty nghiên cứu giải pháp và phát triển phần mềm</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Xem thêm</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown"><span style="color:#EF5B34 ">POC</span>SOFT</h2>
                        <p style="font-size:2rem !important;" class="animate__animated animate__fadeInUp">Công ty nghiên cứu giải pháp và phát triển phần mềm</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Xem thêm</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown"><span style="color:#EF5B34 ">POC</span>SOFT</h2>
                        <p style="font-size:2rem !important;" class="animate__animated animate__fadeInUp">Công ty nghiên cứu giải pháp và phát triển phần mềm</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Xem thêm</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6">
                    <h2>POCSoft luôn đồng hành cùng với khách hàng</h2>
                    <h3>Bạn không có đội ngũ nhân viên kỹ thuật, tất cả những gì bạn có chỉ là những ý tưởng.</h3>
                    <h3>
                        Hãy để POCSOFT giúp bạn!
                    </h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">

                    <ul>
                        <li><i class="ri-check-double-line"></i> Chúng tôi nhìn vào mô hình kinh doanh của khách hàng và đối tượng mục tiêu của khách hàng với một cái nhìn thật nhất. Điều này giúp cho chúng tối có thể tạo ra những giải pháp phần mềm giúp khách hàng và đối tượng mục tiêu của khách hàng hài lòng.</li>
                        <li><i class="ri-check-double-line"></i> Qua rất nhiều những dự án chúng tôi đã gặp phải rất nhiều những vấn đề và đã tìm ra nhiều giải pháp cho vấn đề đó một cách hiệu quả. Đây là cách mà chúng tôi hoàn thiện quy trình phát triển các sản phẩm phần mềm. Đến thời điểm hiện tại chúng tôi tự tin đảm bảo với khách hàng về thời gian và chất lượng sản phẩm</li>
                        <li><i class="ri-check-double-line"></i> Với một lượng lớn các tài nguyên phần mềm, công cụ, và con người. Chúng tôi luôn luôn sẵn sàng tham gia vào các dự án của khách hàng ngay lập tức khi có yêu cầu.</li>
                        <li><i class="ri-check-double-line"></i>POCSoft với chuyên môn của mình sẽ làm hạn chế rủi ro và mang lại lợi nhuận tối đa trong khoản ngân sách của khách hàng.</li>
                    </ul>
                    <p class="font-italic">
                        Chúng tôi sẽ biến ý tưởng của bạn thành một sản phẩm tuyệt vời!
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/img/clients/client1.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-md-6 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/img/clients/client2.jpg')}}" class="img-fluid" alt="">
                </div>


            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Dịch vụ</h2>
                <p>Dịch vụ chúng tôi cung cấp</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="icofont-web"></i>
                        <h4><a href="#">Thiết kế Website</a></h4>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-cubes"></i>
                        <h4><a href="#">Thiết kế hệ thống phần mềm quản lý</a></h4>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-brand-apple"></i>
                        <h4><a href="#">Thiết kế ứng dụng IOS</a></h4>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-brand-android-robot"></i>
                        <h4><a href="#">Thiết kế ứng dụng Android</a></h4>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="projects" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Dự án</h2>
                <p>Dự án của chúng tôi</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Tất cả </li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/portfolio/portfolio-app-1.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Mojo App</h4>
                            <p>Editor Story Instagram</p>
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="https://play.google.com/store/apps/details?id=com.mojo.animatedstories&referrer=utm_source%3Dappbrain%26utm_medium%3Dappbrain_web%26utm_campaign%3Dappbrain_web" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/portfolio/portfolio-web-1.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web hiệp hội du lịch Hà Nội</h4>
                            <p>Web</p>
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="http://hanta.org.vn/" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/portfolio/portfolio-app-3.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App Hair Color Change</h4>
                            <p>App</p>
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/portfolio/portfolio-app-2.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App Control Center</h4>
                            <p>App</p>
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="https://play.google.com/store/apps/details?id=com.hairedit.haircolorchanger" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Đội ngũ</h2>
                <p>Đội ngũ của POCSOFT</p>
            </div>

            <div class="row">

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{asset('assets/img/team/team-1.png')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Hieu Pham</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{asset('assets/img/team/team-2.png')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Dat Dang</h4>
                            <span>Chief Technology Officer</span>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{asset('assets/img/team/team-3.png')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Giap Hoang</h4>
                            <span>Backend Leader</span>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Truong Tran</h4>
                            <span>Frontend Leader</span>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{asset('assets/img/team/team-5.png')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Long Hoang</h4>
                            <span>Android Developer</span>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{asset('assets/img/team/team-6.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Quang Bui</h4>
                            <span>Designer</span>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container">

            <div class="section-title">
                <h2>Kỹ năng</h2>
                <p>Kỹ năng của chúng tôi</p>
            </div>

            <div class="row skills-content">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">IOS <i class="val">70%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">PHP <i class="val">85%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">WordPress/CMS <i class="val">70%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Photoshop <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">Android <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </section><!-- End Our Skills Section -->
{{--    <!-- ======= Testimonials Section ======= -->--}}
{{--    <section id="testimonials" class="testimonials">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h2>Ý kiến của khách hàng</h2>--}}
{{--                <p>Một vài đánh giá của khách hàng về POCSOFT</p>--}}
{{--            </div>--}}
{{--            <div class="row">--}}

{{--                <div class="col-lg-6">--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">--}}
{{--                        <h3>Giang Hoang</h3>--}}
{{--                        <h4>CEO GoBeGroup</h4>--}}
{{--                        <p>--}}
{{--                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.--}}
{{--                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6">--}}
{{--                    <div class="testimonial-item mt-4 mt-lg-0">--}}
{{--                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">--}}
{{--                        <h3>Sara Wilsson</h3>--}}
{{--                        <h4>Designer</h4>--}}
{{--                        <p>--}}
{{--                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.--}}
{{--                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6">--}}
{{--                    <div class="testimonial-item mt-4">--}}
{{--                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">--}}
{{--                        <h3>Jena Karlis</h3>--}}
{{--                        <h4>Store Owner</h4>--}}
{{--                        <p>--}}
{{--                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.--}}
{{--                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6">--}}
{{--                    <div class="testimonial-item mt-4">--}}
{{--                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">--}}
{{--                        <h3>Matt Brandon</h3>--}}
{{--                        <h4>Freelancer</h4>--}}
{{--                        <p>--}}
{{--                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.--}}
{{--                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6">--}}
{{--                    <div class="testimonial-item mt-4">--}}
{{--                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">--}}
{{--                        <h3>John Larson</h3>--}}
{{--                        <h4>Entrepreneur</h4>--}}
{{--                        <p>--}}
{{--                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.--}}
{{--                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6">--}}
{{--                    <div class="testimonial-item mt-4">--}}
{{--                        <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">--}}
{{--                        <h3>Emily Harison</h3>--}}
{{--                        <h4>Store Owner</h4>--}}
{{--                        <p>--}}
{{--                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                            Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.--}}
{{--                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Testimonials Section -->--}}
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Liên hệ</h2>
                <p>Liên hệ với chúng tôi</p>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.6492696820337!2d105.77533861466435!3d20.966595486032073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313452d5ea854ced%3A0x7e26dd058068f344!2zMTIzIMSQLiBUw7QgSGnhu4d1LCBQLiBOZ3V54buFbiBUcsOjaSwgSMOgIMSQw7RuZywgSMOgIE7hu5lpIDE1MjI3NSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1606894948743!5m2!1svi!2s"  frameborder="0"  allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Địa chỉ</h4>
                            <p>123 đường Tô Hiệu, Nguyễn Trãi, Hà Đông, Hà Nội</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>pocsoft@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Số điện thoại:</h4>
                            <p>+84 976221294</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tên của bạn" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Tiêu đề" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Tin nhắn"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Gửi tin nhắn</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
{{--    <div class="footer-top">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="footer-info">--}}
{{--                        <h3>POCSOFT</h3>--}}
{{--                        <p>--}}
{{--                            123 đường Tô Hiệu <br>--}}
{{--                            Nguyễn Trãi, Hà Đông, Hà Nội<br><br>--}}
{{--                            <strong>Phone:</strong> +84 976221294<br>--}}
{{--                            <strong>Email:</strong> pocsoft@gmail.com<br>--}}
{{--                        </p>--}}
{{--                        <div class="social-links mt-3">--}}
{{--                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>--}}
{{--                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>--}}
{{--                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>--}}
{{--                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>--}}
{{--                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 footer-links">--}}
{{--                    <h4>Tổng quan về POCSOFT</h4>--}}
{{--                    <ul>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">Trang chủ</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#about">Về chúng tôi</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#clients">Khách hàng</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">Liên hệ</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 footer-links">--}}
{{--                    <h4>Dịch vụ và đội ngũ của POCSOFT</h4>--}}
{{--                    <ul>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Dịch vụ</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#projects">Dự án</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#team">Đội ngũ</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#skills">Kỹ năng</a></li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 footer-newsletter">--}}
{{--                    <h4>Hòm thư</h4>--}}
{{--                    <p>Hãy để lại ý kiến của bạn!</p>--}}
{{--                    <form action="" method="post">--}}
{{--                        <input type="email" name="email"><input type="submit" value="Gửi">--}}
{{--                    </form>--}}

{{--                </div>--}}



{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>POCSOFT</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">POCSOFT</a>
        </div>
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    // Navigation active state on scroll
    var nav_sections = $('section');
    var main_nav = $('.nav-menu, #mobile-nav');

    $(window).on('scroll', function() {
        var cur_pos = $(this).scrollTop() + 200;

        nav_sections.each(function() {
            var top = $(this).offset().top,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                if (cur_pos <= bottom) {
                    main_nav.find('li').removeClass('active');
                }
                main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
            }
            if (cur_pos < 300) {
                $(".nav-menu li:first").addClass('active');
            }
        });
    });
</script>
</body>

</html>
