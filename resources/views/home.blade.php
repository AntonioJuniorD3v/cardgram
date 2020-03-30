@extends('layouts.landingpage')

@section('landingpage')

<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent affix">
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
                        <a class="nav-link page-scroll" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">Vantagens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#screenshots">Exemplos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">Preços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{$BASE_URL}}login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{$BASE_URL}}register" id="register" class="" target="_blank">Registre-se Grátis!</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->
</header>
<!--header section end-->

    <!--body content wrap start-->
    <div class="main" id="home">

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
                            <img class="img-fluid d-block m-auto animation-one" src="../../assets/appco/img/cartao-interativo.png"
                                width="150" alt="animation image" id="imgTop">
                            {{-- <img class="img-fluid d-none d-lg-block animation-two"
                                src="../../assets/appco/img/instagramlike.png" style="bottom:100px !important;" alt="animation image" width="120"> --}}
                            <img class="img-fluid d-none d-lg-block animation-four" style="margin: -40px 0 0 -40px;" src="https://socialboost.uk/wp-content/uploads/2019/01/girl_right.png"
                                alt="animation image" width="200">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-img-absolute">
                <img src="../../assets/appco/img/shapes/hero-bg-shape-1.svg" alt="wave shape" class="img-fluid">
            </div>
        </section>

        <!--overflow block start-->
        <div class="overflow-hidden" id="about">
            <div id="features" class="feature-section ptb-100 mt-200">
                <div class="container">

                    {{-- <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="section-heading text-center mb-5">
                                <h2>
                                    <span>Vantagens de ter um</span><br>
                                    Cartão Interativo
                                </h2>
                                <p>Muitas pessoas estão deixando de usar os velhos cartões de visita impressos e agora estão entrando na tendencia Cartões de Visitas Digitais.</p>

                            </div>
                        </div>
                    </div> --}}

                    <!--feature new style start-->
                    <div class="row row-grid align-items-center" >
                        <div class="col-lg-4">
                            <div class="d-flex align-items-start mb-5">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-1 rounded-circle">
                                        <span class="ti-face-smile"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>Interativo</h5>
                                    <p class="mb-0">No cartão digital, tudo pode ser linkado, ou seja, seu cliente pode clicar em um botão e ser direcionado para a sua página do Facebook, seu site ou até mesmo para o seu whatsApp.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-5">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-2 rounded-circle">
                                        <span class="ti-vector"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>100% editável</h5>
                                    <p class="mb-0">Mudou de número? não tem problema, você pode editar as informações a qualquer momento.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-3 rounded-circle">
                                        <span class="ti-headphone-alt"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>Do seu jeito</h5>
                                    <p class="mb-0">Você cria o cartão do seu gosto, nossa ferramenta possibilita você editar 100% o seu cartão deixando-o com sua cara a cara do seu negócio.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="position-relative">
                                <img id="tree" alt="Image placeholder" src="../../assets/appco/img/tree.png" class="img-center img-fluid">
                                <img alt="Image placeholder" src="../../assets/appco/img/cartao-interativo.png" class="img-center img-fluid">
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
                                    <h5>Prático</h5>
                                    <p class="mb-0">O cartão digital tem um link que permite você enviar facilmente para todos seus contatos por qualquer midia digitail: e-mail, listas de transmissão, whatsApp e redes sociais.</p>
                                </div>

                            </div>
                            <div class="d-flex align-items-start mb-5">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-5 rounded-circle">
                                        <span class="ti-layout-cta-right"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>Monitore as visitas</h5>
                                    <p class="mb-0">Nossa ferramente permite monitorar todo o tráfego do cartão saber quantas pessoas clicou em cada link.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="pr-4">
                                    <div class="icon icon-shape icon-color-6 rounded-circle">
                                        <span class="ti-world"></span>
                                    </div>
                                </div>
                                <div class="icon-text">
                                    <h5>Ecológico</h5>
                                    <p class="mb-0">Não envolve impressão o cartão é 100% digital e fica online 24Hrs por dia.</p>
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
        <section id="screenshots" class="screenshots-section ptb-100 primary-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center">
                            <h2 class="text-white">Alguns clientes <br></h2>
                            <p class="lead">Veja alguns exemplos de clientes que usam o Cardgram</p>
                        </div>
                    </div>
                </div>
                <!--start app screen carousel-->
                <div class="screen-slider-content mt-5">
                    <div class="screenshot-frame"></div>
                    <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                        <img src="../../assets/appco/img/examples/nutricionista.png" class="img-fluid" alt="screenshots">
                        <img src="../../assets/appco/img/examples/burger.png" class="img-fluid" alt="screenshots">
                        <img src="../../assets/appco/img/examples/advogado.png" class="img-fluid" alt="screenshots">
                        <img src="../../assets/appco/img/examples/mulher.png" class="img-fluid" alt="screenshots">
                        <img src="../../assets/appco/img/examples/uber.png" class="img-fluid" alt="screenshots">
                        <img src="../../assets/appco/img/examples/dj.png" class="img-fluid" alt="screenshots">
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
                            <h2>Depoimentos <br><span>dos nossos clientes</span></h2>
                            <p class="lead">
                                “Meu cartão de visita digital está fazendo o maior sucesso nos grupos de Whatsapp!” ou “Nossa, consegui muitos contatos e clientes potenciais em pouquíssimo tempo!”.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="owl-carousel owl-theme client-testimonial arrow-indicator owl-loaded owl-drag">


                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1900px;"><div class="owl-item active" style="width: 445px; margin-right: 30px;"><div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="media author-info mb-3">
                                        <div class="author-img mr-3">
                                            <img src="https://appco.themetags.com/img/client-1.jpg" alt="client" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mb-0">John Charles</h5>
                                            <span>Google</span>
                                        </div>
                                    </div>
                                    <div class="client-say">
                                        <p> <img src="../../assets/appco/img/quote.png" alt="quote" class="img-fluid"> Interactively optimize fully researched expertise vis-a-vis plug-and-play relationships. Intrinsicly develop viral core competencies for fully tested customer service. Enthusiastically create next-generation growth strategies and.</p>
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
                                        <p><img src="../../assets/appco/img/quote.png" alt="quote" class="img-fluid">  Rapidiously develop user friendly growth strategies after extensive initiatives. Conveniently grow innovative benefits through fully tested deliverables. Rapidiously utilize focused platforms through end-to-end schemas.</p>
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
                                        <p><img src="../../assets/appco/img/quote.png" alt="quote" class="img-fluid"> Objectively synthesize client-centered e-tailers for maintainable channels. Holisticly administrate customer directed vortals whereas tactical functionalities. Energistically monetize reliable imperatives through client-centric best practices. Collaboratively.</p>
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
                                        <p><img src="../../assets/appco/img/quote.png" alt="quote" class="img-fluid"> Enthusiastically innovate B2C data without clicks-and-mortar convergence. Monotonectally deliver compelling testing procedures vis-a-vis B2B testing procedures. Competently evisculate integrated resources whereas global processes. Enthusiastically.</p>
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
                            <h2>Escolha seu plano<br></h2>
                            <p class="lead">
                                Monotonectally grow strategic process improvements vis-a-vis integrated resources.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-4"><h5>Trimestral</h5></div>

                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">R$<span class="price font-weight-bolder">14,90</span><small style="font-size: 50%;">/mês</small></div>
                                <div class=" text-center mb-0">Você paga R$44,70  a cada 3 meses</div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-sm mb-4 pricing-feature-list text-left">
                                    <li><i class="fas fa-check"></i> Botões ilimitados.</li>
                                    <li><i class="fas fa-check"></i> Saiba quantas vezes cada botão foi clicado.</li>
                                    <li><i class="fas fa-check"></i> Suporte prioritário.</li>
                                    <li><i class="fas fa-check"></i> Personalização completa do seu cartão.</li>
                                    <li><i class="fas fa-check"></i> Monitore o tráfego do seu cartão.</li>
                                    <li><i class="fas fa-check"></i> Botões personalizados</li>
                                    <li><i class="fas fa-check"></i> Adicione vídeo do youtube em seu cartão</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Experimente Gratuitamente!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md">
                        <div class="card popular-price text-center single-pricing-pack">
                            <div class="pt-4"><h5>Semestral</h5></div>

                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">R$<span class="price font-weight-bolder">12,90</span><small style="font-size: 50%;">/mês</small></div>
                                <div class=" text-center mb-0">Você paga R$77,40  a cada 6 meses</div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-sm mb-4 pricing-feature-list text-left">
                                    <li><i class="fas fa-check"></i> Botões ilimitados.</li>
                                    <li><i class="fas fa-check"></i> Saiba quantas vezes cada botão foi clicado.</li>
                                    <li><i class="fas fa-check"></i> Suporte prioritário.</li>
                                    <li><i class="fas fa-check"></i> Personalização completa do seu cartão.</li>
                                    <li><i class="fas fa-check"></i> Monitore o tráfego do seu cartão.</li>
                                    <li><i class="fas fa-check"></i> Botões personalizados</li>
                                    <li><i class="fas fa-check"></i> Adicione vídeo do youtube em seu cartão</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Experimentar Gratuitamente!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-4"><h5>Anual</h5></div>

                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">R$<span class="price font-weight-bolder">11,90</span><small style="font-size: 50%;">/mês</small></div>
                                <div class=" text-center mb-0">Você paga R$144,70  a cada 12 meses</div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-sm mb-4 pricing-feature-list text-left">
                                    <li><i class="fas fa-check"></i> Botões ilimitados.</li>
                                    <li><i class="fas fa-check"></i> Saiba quantas vezes cada botão foi clicado.</li>
                                    <li><i class="fas fa-check"></i> Suporte prioritário.</li>
                                    <li><i class="fas fa-check"></i> Personalização completa do seu cartão.</li>
                                    <li><i class="fas fa-check"></i> Monitore o tráfego do seu cartão.</li>
                                    <li><i class="fas fa-check"></i> Botões personalizados</li>
                                    <li><i class="fas fa-check"></i> Adicione vídeo do youtube em seu cartão</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Experimentar Gratuitamente!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <span class="mb-2" style="font-size: 25px;">Pergutas frequentes</span>
                </div>
                <!--pricing faq start-->
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div id="accordion-1" class="accordion accordion-faq">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                    <h6 class="mb-0"><span class="ti-receipt mr-3"></span>É PDF?</h6>
                                </div>
                                <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>NÃO. É uma página web como um site para compartilhar basta enviar o link do seu cartão e a pessoa irá abri-lo pelo navegador do celular.</p>
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


        <section id="about" class="about-us ptb-100 primary-bg">
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
                            <img src="../../assets/appco/img/garantia-de-7-dias.png" width="500" alt="about us" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--contact us section start-->
        <section id="contact" class="contact-us ptb-100">
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

    <!--footer section start-->
    <footer class="footer-section" style="vertical-align: bottom !important;" >
        <!--footer copyright start-->
        <img src="../../assets/appco/img/shapes/footer-top-shape.png" alt="footer shape" class="img-fluid primary-bg">
        <div class="footer-bottom pt-4 pb-4 primary-bg">
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
