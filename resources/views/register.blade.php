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
                        <h1 class="text-white">Criar sua conta</h1>
                        <p class="lead">
                            Keep your face always toward the sunshine - and shadows will fall behind you.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-4">
                                <h6 class="h3">Criar uma conta</h6>
                                {{-- <p class="text-muted mb-0">Feito com 💜.</p> --}}
                            </div>

                            <form method="POST" class="login-signup-form">
                                @csrf
                                @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <ol>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ol>
                                    </div>
                                @endif

                                <div class="form-group" autocomplete="off">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Username <small style="font-size: 80% !important;">(Ficará no seu link: www.cardgram.me/username)</small>
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input required type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Email
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-email color-primary"></span>
                                        </div>
                                        <input required type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="name@address.com">
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Senha
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input required type="password" class="form-control" name="password"
                                               placeholder="Enter your password">
                                    </div>
                                </div>

                                  <!-- Password -->
                                  <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Confirmar a senha
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input required type="password" class="form-control" name="password_confirmation"
                                               placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="my-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="check-terms" required>
                                        <label class="custom-control-label" for="check-terms"  >Eu concordo com os <a href="#">termos e condições</a></label>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <button class="btn btn-lg btn-block solid-btn border-radius mt-4 ">
                                    Cadastrar
                                </button>
                            </form>

                        </div>
                        <div class="card-footer px-md-5 bg-transparent border-top"><small>Já tem uma conta?</small>
                            <a href="{{$BASE_URL}}login " class="small">Entrar</a></div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="bottom-img-absolute">
            <img src="../../assets/appco/img/wave-shap.svg" alt="wave shape" class="img-fluid">
        </div>
    </section>
    <!--hero section end-->
</div>
<!--body content wrap end-->
@endsection
