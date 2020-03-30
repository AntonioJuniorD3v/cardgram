@extends('layouts.landingpage')

@section('landingpage')

<!--body content wrap start-->
<div class="main">
    <!--hero section start-->
    <section class="hero-section ptb-100 background-img full-screen"
             style="background: url('../../assets/appco/img/redes-sociais.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">Seja Bem vindo!</h1>
                        <p class="lead">
                            Transforme os seus sonhos em metas.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h5 class="h3">Login</h5>
                                <p class="text-muted mb-0">Entre na sua conta para continuar.</p>
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
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label class="pb-1">Senha</label>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{$BASE_URL}}forgotPassword" class="form-text small text-muted">
                                                Esqueceu a senha?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                    </div>
                                </div>

                                <!-- Submit -->
                                <button class="btn btn-lg btn-block solid-btn border-radius mt-4 mb-3">
                                    Entrar
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
