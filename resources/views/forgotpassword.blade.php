@extends('layouts.landingpage')

@section('landingpage')

<!--body content wrap start-->
<div class="main">
    <!--hero section start-->
    <section class="hero-section ptb-100 background-img full-screen"
             style="background: url('../../assets/appco/img/hero-bg-1.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">Seja Bem vindo!</h1>
                        <p class="lead">
                            Keep your face always toward the sunshine - and shadows will fall behind you.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h5 class="h3">Esqueci minha senha</h5>
                                <p class="text-muted mb-0">Insira seu email para recuperar sua senha.</p>
                            </div>

                            <!--login form-->
                            <form method="POST" class="login-signup-form">

                                @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @csrf
                                <div class="form-group">
                                    <label class="pb-1">Email</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-email color-primary"></span>
                                        </div>
                                        <input type="email" name="email" class="form-control" placeholder="cardgram@gmail.com">
                                    </div>
                                </div>
                                <!-- Password -->

                                <!-- Submit -->
                                <button class="btn btn-lg btn-block solid-btn border-radius mt-4 mb-3">
                                    Recuperar senha
                                </button>

                            </form>
                        </div>
                        <div class="card-footer bg-transparent border-top px-md-5"><small>Ainda não tem conta?</small>
                            <a href="{{$BASE_URL}}register" class="small"> Criar uma conta</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-img-absolute">
            <img src="../../assets/appco/img/hero-bg-shape-1.svg" alt="wave shape" class="img-fluid">
        </div>
    </section>
    <!--hero section end-->
</div>
<!--body content wrap end-->
@endsection
