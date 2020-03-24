@extends('layouts.landingpage')

@section('landingpage')

<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top custom-nav white-bg">
        <div class="container">
            <img src="../../assets/appco/img/logo.png" alt="icon image" style="margin: 7px 5px 0 0;" class="img-fluid" width="35">

            <a class="navbar-brand logo" href="index-3.html">Cardgram</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Preços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{$BASE_URL}}login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" id="register" class="" target="_blank">Registre-se Grátis!</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->
</header>
<!--header section end-->

    <!--body content wrap start-->
    <div class="main">

        <section class="hero-section pt-100 background-img" style="background: url('img/app-hero-bg.jpg')no-repeat center center / cover">
            <div class="circles">
                <div class="point animated-point-1"></div>
                <div class="point animated-point-2"></div>
                <div class="point animated-point-3"></div>
                <div class="point animated-point-4"></div>
                <div class="point animated-point-5"></div>
                <div class="point animated-point-6"></div>
            </div>

            <div class="container">
                <div class="row align-items-center justify-content-between py-5">
                    <div class="col-md-7 col-lg-7">
                        <div class="hero-content-left text-white">
                            <div>
                                <h1><span>Crie seu Cartão Interativo</span></h1>
                            </div>
                            <div>
                                <h1>do seu jeito</h1>
                            </div>
                            <p class="lead">No primeiro contato com o cliente, qual a impressão que o seu negócio tem gerado?</p>


                            <a href="#" id="btn-top" class="btn solid-btn">😍 &nbsp; <strong>Experimente Grátis Por 7 Dias!</strong></a>

{{--
                            <div class="video-promo-content py-4 d-flex align-items-center">
                                <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon-without-bip video-play-icon mr-3"><span class="ti-control-play"></span></a> Watch Video Overview
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="hero-animation-img">
                            <img class="img-fluid d-block m-auto animation-one" src="https://www.cartaointerativo.com.br/img/big_thumb_home.png"
                                width="150" alt="animation image" id="imgTop">
                            <img class="img-fluid d-none d-lg-block animation-two"
                                src="../../assets/appco/img/instagramlike.png" style="bottom:100px !important;" alt="animation image" width="120">
                            <img class="img-fluid d-none d-lg-block animation-three"
                                src="../../assets/appco/img/face.png" alt="animation image" width="120">
                            <img class="img-fluid d-none d-lg-block animation-four" style="margin: -40px 0 0 -40px;" src="https://socialboost.uk/wp-content/uploads/2019/01/girl_right.png"
                                alt="animation image" width="200">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-img-absolute">
                <img src="../../assets/appco/img/hero-bg-shape-1.svg" alt="wave shape" class="img-fluid">
            </div>
        </section>

        <!--promo section start-->
        <section class="promo-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Porque você precisa de um Cartão Interativo?<br><span></span></h2>
                            <p class="lead">
                                Following reasons show advantages of adding AppCo to your lead pages, demos and
                                checkouts
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row equal">
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <span class="ti-eye text-white"></span>
                            </div>
                            <h5>Identidade Visual</h5>
                            <p>Realize importance of social proof in customer’s purchase decision.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <span class="ti-vector text-white"></span>
                            </div>
                            <h5>Redes sociais</h5>
                            <p>Insira todas suas redes sociais e informações de contato.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <span class="ti-lock text-white"></span>
                            </div>
                            <h5>Secure Data</h5>
                            <p>Build your online store’s trust using Social Proof & Urgency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--overflow block start-->
        <div class="overflow-hidden">
            <div id="features" class="feature-section ptb-100 gray-light-bg">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="section-heading text-center mb-5">
                                <h2>Quick &amp; Easy Process with <br>
                                    <span>best features</span></h2>
                                <p>Objectively deliver professional value with diverse web-readiness.
                                    Collaboratively transition wireless customer service without goal-oriented catalysts for
                                    change. Collaboratively.</p>

                            </div>
                        </div>
                    </div>

                    <!--feature new style start-->
                    <div class="row row-grid align-items-center">
                        <div class="col-lg-4">
                            <div class="d-flex align-items-start mb-5">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-1 rounded-circle">
                                        <span class="ti-face-smile"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>Responsive web design</h5>
                                    <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-5">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-2 rounded-circle">
                                        <span class="ti-vector"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>Loaded with features</h5>
                                    <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-3 rounded-circle">
                                        <span class="ti-headphone-alt"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>Friendly online support</h5>
                                    <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="position-relative">
                                <img alt="Image placeholder" src="../../assets/appco/img/iphone.png" class="img-center img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex align-items-start mb-5">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-4 rounded-circle">
                                        <span class="ti-layout-media-right"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>Free updates forever</h5>
                                    <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-5">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-5 rounded-circle">
                                        <span class="ti-layout-cta-right"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>Built with Sass</h5>
                                    <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-6 rounded-circle">
                                        <span class="ti-palette"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>Infinite colors</h5>
                                    <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--feature new style end-->
                </div>
            </div>
        </div>
        <!--overflow block end-->

        <!--screenshots section start-->
        <section id="screenshots" class="screenshots-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center">
                            <h2>App screenshots <br> <span>Looks awesome</span></h2>
                            <p class="lead">Credibly synthesize multimedia based networks vis-a-vis top-line growth strategies. Continually leverage existing worldwide interfaces </p>
                        </div>
                    </div>
                </div>
                <!--start app screen carousel-->
                <div class="screen-slider-content mt-5">
                    <div class="screenshot-frame"></div>
                    <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                        <img src="../../assets/appco/img/01.png" class="img-fluid" alt="screenshots">
                        <img src="../../assets/appco/img/02.png" class="img-fluid" alt="screenshots">
                        <img src="../../assets/appco/img/03.png" class="img-fluid" alt="screenshots">
                        <img src="../../assets/appco/img/04.png" class="img-fluid" alt="screenshots">
                        <img src="../../assets/appco/img/05.png" class="img-fluid" alt="screenshots">
                        <img src="../../assets/appco/img/06.png" class="img-fluid" alt="screenshots">
                    </div>
                </div>
                <!--end app screen carousel-->

            </div>
        </section>
        <!--screenshots section end-->

        <section class="testimonial-section ptb-100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="section-heading mb-5">
                            <h2>Testimonials <br><span>what clients say</span></h2>
                            <p class="lead">
                                Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                                e-business. Conveniently innovate compelling internal.
                            </p>

                            <div class="client-section-wrap d-flex flex-row align-items-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><img src="img/client-1-color.png" width="85" alt="client" class="img-fluid"></li>
                                    <li class="list-inline-item"><img src="img/client-6-color.png" width="85" alt="client" class="img-fluid"></li>
                                    <li class="list-inline-item"><img src="img/client-3-color.png" width="85" alt="client" class="img-fluid"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="owl-carousel owl-theme client-testimonial arrow-indicator owl-loaded owl-drag">


                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1900px;"><div class="owl-item active" style="width: 445px; margin-right: 30px;"><div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="media author-info mb-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-1.jpg" alt="client" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mb-0">John Charles</h5>
                                            <span>Google</span>
                                        </div>
                                    </div>
                                    <div class="client-say">
                                        <p> <img src="img/quote.png" alt="quote" class="img-fluid"> Interactively optimize fully researched expertise vis-a-vis plug-and-play relationships. Intrinsicly develop viral core competencies for fully tested customer service. Enthusiastically create next-generation growth strategies and.</p>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 445px; margin-right: 30px;"><div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="media author-info mb-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-2.jpg" alt="client" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mb-0">Arabella Ora</h5>
                                            <span>Amazon</span>
                                        </div>
                                    </div>
                                    <div class="client-say">
                                        <p><img src="img/quote.png" alt="quote" class="img-fluid">  Rapidiously develop user friendly growth strategies after extensive initiatives. Conveniently grow innovative benefits through fully tested deliverables. Rapidiously utilize focused platforms through end-to-end schemas.</p>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 445px; margin-right: 30px;"><div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="media author-info mb-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-1.jpg" alt="client" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mb-0">Jeremy Jere</h5>
                                            <span>Themetags</span>
                                        </div>
                                    </div>
                                    <div class="client-say">
                                        <p><img src="img/quote.png" alt="quote" class="img-fluid"> Objectively synthesize client-centered e-tailers for maintainable channels. Holisticly administrate customer directed vortals whereas tactical functionalities. Energistically monetize reliable imperatives through client-centric best practices. Collaboratively.</p>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 445px; margin-right: 30px;"><div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="media author-info mb-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-1.jpg" alt="client" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mb-0">John Charles</h5>
                                            <span>Google</span>
                                        </div>
                                    </div>
                                    <div class="client-say">
                                        <p><img src="img/quote.png" alt="quote" class="img-fluid"> Enthusiastically innovate B2C data without clicks-and-mortar convergence. Monotonectally deliver compelling testing procedures vis-a-vis B2B testing procedures. Competently evisculate integrated resources whereas global processes. Enthusiastically.</p>
                                    </div>
                                </div>
                            </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                    </div>
                </div>
            </div>
        </section>

        <!--our pricing packages section start-->
        <section id="pricing" class="package-section background-shape-right ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Afforadble Pricing and Packages <br><span>choose your best one</span></h2>
                            <p class="lead">
                                Monotonectally grow strategic process improvements vis-a-vis integrated resources.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-4"><h5>Basic</h5></div>
                            <div class="pricing-img mt-4">
                                <img src="img/basic.svg" alt="pricing img" class="img-fluid">
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">29</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                    <li>Push Notifications</li>
                                    <li>Data Transfer</li>
                                    <li>SQL Database</li>
                                    <li>Search &amp; SEO Analytics</li>
                                    <li>24/7 Phone Support</li>
                                    <li>2 months technical support</li>
                                    <li>2+ profitable keyword</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md">
                        <div class="card popular-price text-center single-pricing-pack">
                            <div class="pt-4"><h5>Standard</h5></div>
                            <div class="pricing-img mt-4">
                                <img src="img/standard.svg" alt="pricing img" class="img-fluid">
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">149</span></div>

                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                    <li>Push Notifications</li>
                                    <li>Data Transfer</li>
                                    <li>SQL Database</li>
                                    <li>Search &amp; SEO Analytics</li>
                                    <li>24/7 Phone Support</li>
                                    <li>1 Year technical support</li>
                                    <li>50+ profitable keyword</li>
                                </ul>
                                <a href="#" class="btn solid-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-4"><h5>Unlimited</h5></div>
                            <div class="pricing-img mt-4">
                                <img src="img/unlimited.svg" alt="pricing img" class="img-fluid">
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">39</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                    <li>Push Notifications</li>
                                    <li>Data Transfer</li>
                                    <li>SQL Database</li>
                                    <li>Search &amp; SEO Analytics</li>
                                    <li>24/7 Phone Support</li>
                                    <li>6 months technical support</li>
                                    <li>10+ profitable keyword</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p class="mb-2">If you need custom services or Need more? <a href="#" class="color-secondary">
                        Contact us
                    </a></p>
                </div>
                <!--pricing faq start-->
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div id="accordion-1" class="accordion accordion-faq">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                    <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Which license do I need?</h6>
                                </div>
                                <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>Uniquely leverage other's distinctive infomediaries rather than leveraged supply chains. Continually seize distributed collaboration and idea-sharing whereas user.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                    <h6 class="mb-0"><span class="ti-gallery mr-3"></span> How do I get access to a theme?</h6>
                                </div>
                                <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>Rapidiously incentivize virtual e-commerce and exceptional e-tailers. Progressively network focused catalysts for change without orthogonal benefits. Dramatically empower.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span> How do I see previous orders?
                                    </h6>
                                </div>
                                <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>Proactively monetize long-term high-impact innovation and scalable relationships. Dynamically mesh principle-centered functionalities before next-generation best practices. Distinctively empower.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="accordion-2" class="accordion accordion-faq">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-1" data-toggle="collapse" role="button" data-target="#collapse-2-1" aria-expanded="false" aria-controls="collapse-2-1">
                                    <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Which license do I need?</h6>
                                </div>
                                <div id="collapse-2-1" class="collapse" aria-labelledby="heading-2-1" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Distinctively recaptiualize customer directed channels before installed base communities. Continually disintermediate distinctive web services vis-a-vis team building e-commerce.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-2" data-toggle="collapse" role="button" data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                                    <h6 class="mb-0"><span class="ti-lock mr-3"></span> How do I get access to a theme?</h6>
                                </div>
                                <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Quickly recaptiualize revolutionary meta-services and multimedia based channels. Seamlessly impact diverse deliverables rather than cooperative strategic theme areas.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-3" data-toggle="collapse" role="button" data-target="#collapse-2-3" aria-expanded="false" aria-controls="collapse-2-3">
                                    <h6 class="mb-0"><span class="ti-widget mr-3"></span> How do I see previous orders?
                                    </h6>
                                </div>
                                <div id="collapse-2-3" class="collapse" aria-labelledby="heading-2-3" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Efficiently supply B2B networks vis-a-vis best-of-breed schemas. Dramatically parallel task reliable technology with cross functional core competencies. Phosfluorescently.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--pricing faq end-->
            </div>
        </section>
        <!--our pricing packages section end-->


        <section id="about" class="about-us ptb-100 gray-light-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <span class="badge badge-primary badge-pill">Satisfação Garantida!</span>
                        <h2 class="mt-4">Satisfação GARANTIDA ou seu dinheiro DE VOLTA</h2>
                        <p class="mb-4 lh-190">Garantimos para você que depois do uso do Cardgram, seus resultados serão tão expressivos que NUNCA mais você irá deixar de usá-lo.

                            Para que você tenha maior certeza sobre nosso produto, queremos te oferecer algo...</p>
                        <ul class="list-unstyled">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-primary mr-3">
                                            <span class="ti-check"></span>
                                        </div>
                                    </div>
                                    <div><p class="mb-0">Satisfação total ou 100% do valor investido de volta!</p></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="about-content-right">
                            <img src="https://expressonacional.com/wp-content/uploads/2018/07/garantia-de-7-dias.png" width="500" alt="about us" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--contact us section start-->
        <section id="contact" class="contact-us gray-light-bg ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="section-heading">
                            <h3>Ainda tem dúvidas?</h3>
                            <p>Mande uma mensagem e logo nossa equipe irá entrar em contato.</p>
                        </div>
                        <div class="footer-address">
                            <ul>
                                <li><span>Email : <a href="mailto:hello@yourdomain.com">suporte@cardgram.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form action="#" method="POST" id="contactForm1" class="contact-us-form" novalidate="novalidate">
                            <h5>Formulário de contato</h5>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Nome"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25"
                                                placeholder="Mensagem"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn solid-btn" id="btnContactUs">
                                        Enviar mensagem
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->

    </div>
    <!--body content wrap end-->

    <!--shape image start-->
    <div class="shape-img subscribe-wrap">
        <img src="../../assets/appco/img/footer-top-shape.png" alt="footer shape" class="img-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="#" method="post" class="subscribe-form subscribe-form-footer d-none d-md-block d-lg-block">
                        <div class="d-flex align-items-center">
                            <input type="text" class="form-control input" id="email-footer" name="email"
                                placeholder="seuemail@gmail.com">
                            <input type="submit" class="button btn solid-btn" id="submit-footer" value="Inscrever-se">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--shape image end-->

    <!--footer section start-->
    <footer class="footer-section">

        <!--footer top start-->
        <div class="footer-top pt-150 pb-5 background-img-2">

        </div>
        <!--footer top end-->

        <!--footer copyright start-->
        <div class="footer-bottom gray-light-bg pt-4 pb-4">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-md-6 col-lg-5"><p class="copyright-text pb-0 mb-0">Copyrights © 2020. Todos os direitos reservados
                        <a href="#">Cardgram</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--footer copyright end-->
    </footer>
    <!--footer section end-->
@stop
