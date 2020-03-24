@extends('layouts.admintemplate')

@section('content')

<div class="container-fluid position-fixed posicaoMobile ">

    <div class="row ">

<style>
    #imglogo{
        width: {{$user->size_img_logo.'% !important'}};
    }
</style>
        <!-- Iphone -->
        <div class="col-md-4 iphoneDiv">
            <div class="col-md-12 d-flex justify-content-start ">
                <div class="form-control-wrap mx-auto mt-20 row p-5">
                    {{-- <div id="nameCard">
                        Meu cartão:
                    </div> --}}
                    <div>
                        <u><a href="http://127.0.0.1:8000/{{$user->name}}" target="_blank" id="urlLink"> http://127.0.0.1:8000/{{$user->name}}</a></u>
                        <button type="button" id="btnCopy" class="btn btn-round btn-sm waves-effect waves-light waves-round colorSite">
                            <i class="far fa-copy fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="screen mx-auto" id="phoneDiv" >
                <div style="overflow-y: hidden; width:100%; height: 100%;">
                    <div id="previewPhone" style="z-index:;">
                        <div class="cv-spinnerr">
                            <span class="spinnerr"></span>
                        </div>
                    </div>
                    <div class="container divPhone p-5 " id="divPhone" >
                        @include('layouts.phone')
                    </div>
                </div>
            </div>
        </div>
      <!-- End Div Iphone -->


      <!-- Example Basic -->
      <div class="example-wrap col-md-8 col-sm-12">
        <div class="example">
          <div class="h-500" data-plugin="scrollable" style="height: 600px !important;">
            <div data-role="container">
              <div data-role="content">
                <!-- Example Tabs -->
                <div class="example-wrap">
                  <div class="nav-tabs-horizontal" data-plugin="tabs">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab">Links</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab">Configurações</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsThree" aria-controls="exampleTabsThree" role="tab">Personalizar</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsFour" aria-controls="exampleTabsFour" role="tab">Analytics</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link d-none preview" data-toggle="tab" href="#exampleTabsFive" aria-controls="exampleTabsFive" role="tab">Preview</a></li>
                    </ul>
                    <div class="tab-content pt-15">
                      <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">

                        <div class="col-md-12 mx-auto " id="divLinks">


                          <div class="col-xxl-4 col-lg-10 mx-auto panelPadding">

                            <button class="btn col-md-12 mx-auto colorSite h-60" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              <i class="icon md-plus" aria-hidden="true"></i>Adicionar novo botão
                            </button>



                            <div class="collapse" id="collapseExample" style="margin-top: 5px;">
                              <div class="card card-body">

                                <div class="panel panel-bordered p-0">
                                  <div class="panel-body p-0">
                                    <form class="col-md-12 mx-auto marginFormAddLink p-0" enctype='multipart/form-data'  name="addFormLink" method="POST" >
                                        @csrf
                                        <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0 row">
                                            <div class="col-8 p-0">
                                                <h4 class="example-title">Tipo</h4>
                                                <select class="form-control form-control-md teste123" id="select-page" data-plugin="selectpicker" name="ftipo_bt[]">
                                                    <option value="#link" selected>Link</option>
                                                    <option data-icon="fab fa-youtube-square" value="#youtube-video">Video Youtube </option>
                                                    <option data-icon="fas fa-mobile-alt" value="#telefone-celular">Telefone Celular </option>
                                                    <option data-icon="fas fa-phone-alt" value="#telefone-fixo">Telefone Fixo </option>
                                                    <option data-icon="fas fa-envelope" value="#e-mail">E-mail</option>
                                                    <option data-icon="fas fa-mouse-pointer" value="#website">Website</option>
                                                    <option data-icon="fas fa-map-marker-alt" value="#endereco">Endereço </option>
                                                    <option data-icon="fab fa-whatsapp" value="#whatsapp">WhatsApp </option>
                                                    <option data-icon="fab fa-facebook-f" value="#facebook">Facebook </option>
                                                    <option data-icon="fab fa-youtube" value="#youtube">YouTube </option>
                                                    <option data-icon="fab fa-instagram" value="#instagram">Instagram </option>
                                                    <option data-icon="fab fa-twitter" value="#twitter">Twitter </option>
                                                    <option data-icon="fab fa-linkedin-in " value="#linkedin">LinkedIn </option>
                                                </select>
                                            </div>

                                            <div class="col-4" id="size">
                                                <h4 class="example-title">Tamanho</h4>
                                                <select class="form-control form-control-md" name="size">
                                                    <option selected>Grande</option>
                                                    <option>Pequeno</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="content" id="link">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do link</h4>
                                                <p class="lead emoji-picker-container">
                                                    <input required type="text" class="form-control " placeholder="ex: Instagram" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">URL</h4>
                                                <input required type="url" class="form-control " placeholder="https://www.instagram.com.br" id="inputRounded" name="link">
                                            </div>
                                        </div>

                                        <div class="content" id="telefone-celular">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do botão <small>(Apenas no tamanho grande)</small> </h4>
                                                <p class="lead emoji-picker-container">
                                                    <input required type="text" class="form-control " value="Iniciar chamada" placeholder="Nosso celular" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>

                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Número com DDD</h4>
                                                <input required type="text" class="form-control" id="inputPhone" data-plugin="formatter"
                                                    data-pattern="([[99]]) [[99999]]-[[9999]]" name="link"/>
                                            </div>
                                        </div>

                                        <div class="content" id="telefone-fixo">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do botão</h4>
                                                <p class="lead emoji-picker-container">
                                                    <input required type="text" class="form-control " value="Iniciar chamada" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Telefone com DDD</h4>
                                                <input required type="text" class="form-control" data-plugin="formatter"
                                                data-pattern="([[99]]) [[9999]]-[[9999]]" name="link" />
                                            </div>
                                        </div>

                                        <div class="content" id="e-mail">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do link</h4>
                                                <p class="lead emoji-picker-container">
                                                    <input required type="text" class="form-control " value="Envie um e-mail" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>

                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">E-mail</h4>
                                                <input required type="email" class="form-control" placeholder="cardgram@gmail.com" id="inputRounded" name="link">
                                            </div>
                                        </div>

                                        <div class="content" id="website">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do botão</h4>
                                                <p class="lead emoji-picker-container">
                                                    <input required type="text" class="form-control " value="Acesse nosso site" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>

                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">URL</h4>
                                                <input required type="url" class="form-control " placeholder="https://www.cardgram.me" id="inputRounded" name="link">
                                            </div>
                                        </div>

                                        <div class="content" id="endereco">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do botão</h4>
                                                <p class="lead emoji-picker-container">
                                                    <input required type="text" class="form-control " value="clique para abrir o GPS" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>

                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">URL <small>(Cole a URL completa do google maps)</small> </h4>
                                                <input required type="url" class="form-control " placeholder="https://www.google.com/maps/@-99.99999,-99.999999,99z" id="inputRounded" name="link">
                                            </div>
                                        </div>

                                        <div class="content" id="whatsapp">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do botão</h4>
                                                <p class="lead emoji-picker-container">
                                                    <input required type="text" class="form-control " value="Enviar mensagem no WhatsApp" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>

                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Número com DDD</h4>
                                                <input required type="text" class="form-control" id="inputPhone" data-plugin="formatter"
                                                data-pattern="+55 ([[99]]) [[99999]]-[[9999]]" name="link"/>
                                            </div>
                                        </div>

                                        <div class="content" id="facebook">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do botão</h4>
                                                <p class="lead emoji-picker-container">
                                                <input required type="text" class="form-control " value="Acessar facebook" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>

                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">URL</h4>
                                                <input required type="url" class="form-control " placeholder="https://www.facebook.com/cardgram"  name="link">
                                            </div>
                                        </div>

                                        <div class="content" id="youtube">
                                            <!-- Example Rounded Input -->
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do botão</h4>
                                                <p class="lead emoji-picker-container">
                                                <input required type="text" class="form-control " value="Acessar canal no youtube" data-emojiable="true" name="buttonName">
                                                </p>
                                                <!-- <input type="text" class="form-control  col-12 wInputName" placeholder="ex: Instagram" id="inputRounded" name="name"> -->
                                            </div>

                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">URL</h4>
                                                <input required type="url" class="form-control " placeholder="https://www.youtube.com/cardgram" name="link" >
                                            </div>
                                        </div>

                                        <div class="content" id="instagram">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do botão</h4>
                                                <p class="lead emoji-picker-container">
                                                <input required type="text" class="form-control " value="Acessar Instagram" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>

                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">URL</h4>
                                                <input required type="url" class="form-control " placeholder="https://www.instagram.com/cardgram" name="link">
                                            </div>
                                        </div>

                                        <div class="content" id="twitter">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do botão</h4>
                                                <p class="lead emoji-picker-container">
                                                    <input required type="text" class="form-control " value="Acessar twitter" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>

                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">URL</h4>
                                                <input required type="url" class="form-control " placeholder="https://www.twitter.com/cardgram" name="link">
                                            </div>
                                        </div>

                                        <div class="content" id="linkedin">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Nome do botão</h4>
                                                <p class="lead emoji-picker-container">
                                                    <input required type="text" class="form-control " value="Acessar linkedIn" data-emojiable="true" name="buttonName">
                                                </p>
                                            </div>

                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <input required type="text" class="form-control " value="video" data-emojiable="true" name="buttonName" hidden>
                                                <h4 class="example-title">URL</h4>
                                                <input required type="url" class="form-control " placeholder="https://www.linkedin.com/cardgram" name="link">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="content" id="youtube-video">
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">URL do video</h4>
                                                <input required type="url" class="form-control " placeholder="https://www.youtube.com/watch?v=vrEXmO5yJIc" name="link" >
                                            </div>
                                        </div>
                                        <br>

                                        <div class="t" id="image" >
                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                <h4 class="example-title">Imagem <small>(Opcional)</small></h4>
                                            </div>
                                            <div class="example example-buttons d-flex justify-content-center p-0">
                                                <div class="example-wrap">
                                                    <div class="examplee">
                                                    <input
                                                    type="file"
                                                    id="input-file-now-custom-1"
                                                    data-plugin="dropify"
                                                    data-height="100"
                                                    data-width="75"
                                                    data-max-file-size="1M"
                                                    data-allowed-file-extensions="jpeg jpg png"
                                                    name="img"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="panel-footer text-right">
                                            <button type="button" class="btn  btn-danger" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Cancelar</button>
                                            &nbsp;
                                            <button type="submit" class="btn btn-success">
                                                Criar
                                            </button>
                                        </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                            <div id="divSortableMaster" class="col-md-10 links mx-auto">
                                <ul id="sortable" class="col-12 p-0 grid span8">
                                    @foreach ($links as $link)
                                        @if($link->name == 'video')
                                        <li id="{{$link->id}}" style="list-style-type: none;" class="well span2 tile">
                                            <div class="col-12 panelPadding p-0">
                                                <div class="container">
                                                    <div class="row">
                                                        <span class="handle sortable-handle">
                                                            <i class="fa fa-ellipsis-v "></i>
                                                        </span>
                                                        <div class="divSortable col-12 h-80" style="border-radius:3px;">
                                                            <div class="example iconsLinks float-left col-12 row p-0 text-left">
                                                                <div class="col-10 p-0">
                                                                    <div class="float-left mt-3 col-12">
                                                                    <label fclass="labelReticencias" style="color: grey;font-size: 15px;font-weight: bolder;">Video Youtube</label>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="labelReticencias" style="color: grey;">{{$link->url}}</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-2 p-0 mt-10 text-right">

                                                            <input @if($link->active === 1) checked @endif class="isChecked" type="checkbox" data-plugin="switchery" data-color="green" data-size="small" value="{{$link->id}}" />

                                                            </div>
                                                        </div>

                                                        <div class="example iconsLinks float-right col-12 text-right">
                                                            <div class="divActionLink" style="margin-top: -20px;">
                                                                <span class="mx-5 " style="font-size: 15px; color: grey; ">
                                                                    {{$link->views}} <i class="fa fa-eye fa-1x" aria-hidden="true"></i>
                                                                </span>
                                                                &nbsp;
                                                                <span style="font-size: 25px; color: grey;">
                                                                <button class="btn p-5 clickEditButton" id="clickEdit{{$link->id}}" style="background-color:transparent" type="button" data-toggle="collapse" data-target="#edit{{$link->id}}" aria-expanded="false" aria-controls="edit{{$link->id}}">
                                                                    <i class="fas fa-pencil-alt " style="font-size: 16px;" aria-hidden="true"></i>
                                                                </button>
                                                                </span>

                                                                <span style="font-size: 25px; color: grey;">
                                                                <button class="btn p-5" style="background-color:transparent" type="button" id="inputStylePrimary" name="colorChosen" data-target="#modal_delete_link" data-toggle="modal" data-id="{{$link->id}}">
                                                                    <i class="fas fa-trash-alt " style="font-size: 16px;" aria-hidden="true"></i>
                                                                </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="collapse" id="edit{{$link->id}}" style=" border-left: 30px solid #7259c1; ">
                                                <div class="card card-body">
                                                <!-- Example Panel With Footer -->
                                                <div class="panel panel-bordered p-0">
                                                    <div class="panel-body p-0">
                                                        <form class="col-md-12 mx-auto updateFormLink p-0" name="updateFormLink" method="POST">
                                                            @method('PUT')
                                                            @csrf
                                                            <input class="d-none" id="id" type="text" value="{{$link->id}}" name="id">
                                                            <input class="d-none" id="type" type="text" value="{{$link->type}}" name="type">

                                                            <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                                <h4 class="example-title">URL</h4>
                                                                <input type="text" class="form-control " value="{{$link->url}}" placeholder="https://www.instagram.com.br" id="inputRounded" name="url">
                                                            </div>

                                                        <br>

                                                        <div class="panel-footer text-right">
                                                            <button class="btn btn-danger p-5 clickEditButton" id="clickEdit{{$link->id}}" type="button" data-toggle="collapse" data-target="#edit{{$link->id}}" aria-expanded="false" aria-controls="edit{{$link->id}}">
                                                                Cancelar
                                                            </button>
                                                            &nbsp;
                                                            <button type="submit" class="btn btn-success laddaBtnUpdate">
                                                                <span class="ladda-label">Salvar</span>
                                                                <span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div>
                                                            </button>
                                                        </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @else
                                            <li id="{{$link->id}}" style="list-style-type: none;" class="well span2 tile">
                                                <div class="col-12 panelPadding p-0">
                                                    <div class="container">
                                                        <div class="row">
                                                            <span class="handle sortable-handle">
                                                                <i class="fa fa-ellipsis-v "></i>
                                                            </span>
                                                            <div class="divSortable col-12 h-80" style="border-radius:3px;">
                                                                <div class="example iconsLinks float-left col-12 row p-0 text-left">
                                                                    <div class="col-10 p-0">
                                                                        <div class="float-left mt-3 col-12">
                                                                        <label fclass="labelReticencias" style="color: grey;font-size: 15px;font-weight: bolder;">{{$link->name}}</label>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="labelReticencias" style="color: grey;">{{$link->url}}</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-2 p-0 mt-10 text-right">

                                                                <input @if($link->active === 1) checked @endif class="isChecked" type="checkbox" data-plugin="switchery" data-color="green" data-size="small" value="{{$link->id}}" />

                                                                </div>
                                                            </div>

                                                            <div class="example iconsLinks float-right col-12 text-right">
                                                                <div class="divActionLink" style="margin-top: -20px;">
                                                                    <span class="mx-5 " style="font-size: 15px; color: grey; ">
                                                                        {{$link->views}} <i class="fa fa-eye fa-1x" aria-hidden="true"></i>
                                                                    </span>
                                                                    &nbsp;
                                                                    <span style="font-size: 25px; color: grey;">
                                                                    <button class="btn p-5 clickEditButton" id="clickEdit{{$link->id}}" style="background-color:transparent" type="button" data-toggle="collapse" data-target="#edit{{$link->id}}" aria-expanded="false" aria-controls="edit{{$link->id}}">
                                                                        <i class="fas fa-pencil-alt " style="font-size: 16px;" aria-hidden="true"></i>
                                                                    </button>
                                                                    </span>

                                                                    <span style="font-size: 25px; color: grey;">
                                                                    <button class="btn p-5" style="background-color:transparent" type="button" id="inputStylePrimary" name="colorChosen" data-target="#modal_delete_link" data-toggle="modal" data-id="{{$link->id}}">
                                                                        <i class="fas fa-trash-alt " style="font-size: 16px;" aria-hidden="true"></i>
                                                                    </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="collapse" id="edit{{$link->id}}" style=" border-left: 30px solid #7259c1; ">
                                                    <div class="card card-body">
                                                    <!-- Example Panel With Footer -->
                                                    <div class="panel panel-bordered p-0">
                                                        <div class="panel-body p-0">
                                                            <form class="col-md-12 mx-auto updateFormLink p-0" name="updateFormLink" method="POST">
                                                                @method('PUT')
                                                                @csrf
                                                                <input class="d-none" id="id" type="text" value="{{$link->id}}" name="id">
                                                                <input class="d-none" id="type" type="text" value="{{$link->type}}" name="type">

                                                                <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0 row">
                                                                    <div class="col-12 p-0">
                                                                    <h4 class="example-title">Tamanho</h4>
                                                                    <select class="form-control form-control-md" name="size" >
                                                                        <option {{ ( $link->size == 'Pequeno') ? 'selected' : ''}}>Pequeno</option>
                                                                        <option {{ ( $link->size == 'Grande') ? 'selected' : ''}}>Grande</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                                    <h4 class="example-title">Nome do link</h4>
                                                                    <p class="lead emoji-picker-container">
                                                                        <input type="text" class="form-control " value="{{$link->name}}" placeholder="ex: Instagram" data-emojiable="true" name="name">
                                                                    </p>
                                                                </div>
                                                                <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                                    <h4 class="example-title">URL</h4>
                                                                    <input type="text" class="form-control " value="{{$link->url}}" placeholder="https://www.instagram.com.br" id="inputRounded" name="url">
                                                                </div>

                                                            <br>
                                                            <div class="t" >
                                                                <div class="example-wrap col-xl-8 col-sm-12 mx-auto p-0">
                                                                    <h4 class="example-title">Imagem <small>(Opcional)</small></h4>
                                                                </div>
                                                                    <div class="example example-buttons  d-flex justify-content-center p-0">
                                                                    <div class="example-wrap">
                                                                        <div class="examplee">
                                                                        <input
                                                                        type="file"
                                                                        id="input-file-now-custom-1"
                                                                        data-plugin="dropify"
                                                                        data-height="100"
                                                                        @if(!empty($link->image))
                                                                            data-default-file='{{url("media/images/$link->image")}}'
                                                                        @endif
                                                                        data-width="75"
                                                                        data-max-file-size="1M"
                                                                        data-allowed-file-extensions="jpeg jpg png"
                                                                        name="img"/>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>
                                                            <br>

                                                            <div class="panel-footer text-right">
                                                                <button class="btn btn-danger p-5 clickEditButton" id="clickEdit{{$link->id}}" type="button" data-toggle="collapse" data-target="#edit{{$link->id}}" aria-expanded="false" aria-controls="edit{{$link->id}}">
                                                                    Cancelar
                                                                </button>
                                                                &nbsp;
                                                                <button type="submit" class="btn btn-success laddaBtnUpdate">
                                                                    <span class="ladda-label">Salvar</span>
                                                                    <span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div>
                                                                </button>
                                                            </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                      </div>

                      <div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
                        <div class="panel panel-primary panel-line col-12 mx-auto temaBorderTop" style="background-color: white; border-top-color: purple;">
                            <div class="row">
                                <div>
                                    <h3 class="panel-title" style="color: #9900cc;">Logo</h3>
                                </div>
                                <div class="col-2 p-0 text-left" style="align-self: center; margin-left: -10px;">
                                    <input @if($user->active_logo === 1) checked @endif  class="checkboxConfigs" type="checkbox" data-plugin="switchery" data-color="green" data-size="small" data-type="active_logo" value="{{$user->id}}" />
                                </div>
                            </div>
                            <!-- Foto perfil -->
                            <form id="formImgLogo" enctype="multipart/form-data" method="POST">
                                @method('PUT')
                                @csrf
                                <div id="active_logo" @if($user->active_logo === 0) style="display:none" @endif >
                                    <div class="media col-md-10 mx-auto" >
                                        <div class="example-wrap">
                                        <div class="examplee">
                                            <input
                                            @if(!empty($user->img_logo))
                                                data-default-file='{{url("media/logos/$user->img_logo")}}'
                                            @endif
                                            name="img_logo"
                                            type="file"
                                            data-plugin="dropify"
                                            data-height="150"
                                            data-width="150"
                                            data-max-file-size="2M"
                                            data-show-remove="false"
                                            data-allowed-file-extensions="jpeg jpg png"
                                            onchange="document.getElementById('btnFormLogo').click()"/>
                                        </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="example-wrap col-7 ml-70">
                                        <h4 class="example-title" style="color:#7259c1">Tamanho da imagem:</h4>
                                        <div class="example mt-10">
                                            <div class="mb-0">
                                                <div class="form-group mt-0">
                                                    <input onchange="document.getElementById('btnFormLogo').click()" name="size" type="text" data-skin="modern" data-postfix="%" id="irs_1" data-from="{{$user->size_img_logo}}" name="irsExample" data-plugin="ionRangeSlider" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <h3 class="panel-title" style="color: #9900cc;">Foto Perfil</h3>
                                    </div>
                                    <div class="col-2 p-0 text-left" style="align-self: center; margin-left: -10px;">
                                        <input @if($user->active_img_perfil === 1) checked @endif class="checkboxConfigs" type="checkbox" data-plugin="switchery" data-color="green" data-size="small" data-type="active_img_perfil" value="{{$user->id}}" />
                                    </div>
                                </div>
                                <div id="active_img_perfil" @if($user->active_img_perfil === 0) style="display:none" @endif class="media col-md-10 mx-auto"  >
                                    <div class="perfilAvatasdfr">
                                        <div class="perfilAvatar">
                                            <input
                                            @if(!empty($user->img_perfil))
                                                data-default-file='{{url("media/perfil/$user->img_perfil")}}'
                                            @endif
                                            name="img_perfil"
                                            type="file"
                                            id="input-file-now-custom-2"
                                            data-plugin="dropify"
                                            data-show-remove="false"
                                            data-height="100"
                                            data-width="100"
                                            data-max-file-size="2M"
                                            data-allowed-file-extensions="jpeg jpg png"
                                            onchange="document.getElementById('btnFormLogo').click()"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <h3 class="panel-title" style="color: #9900cc;">Nome</h3>
                                    </div>
                                    <div class="col-2 p-0 text-left" style="align-self: center; margin-left: -10px;">
                                        <input @if($user->active_name === 1) checked @endif class="checkboxConfigs" type="checkbox" data-plugin="switchery" data-color="green" data-size="small" data-type="active_name" value="{{$user->id}}" />
                                    </div>
                                </div>
                                <!-- Foto perfil -->
                                <div id="active_name" @if($user->active_name === 0) style="display:none" @endif class="media col-md-10 mx-auto">
                                    <div class="media-body align-self-center">
                                        <p>
                                            <div class="input-group" style="max-width: 300px;">
                                            <input name="name" type="text" value="{{$user->name}}" class="form-control" placeholder="Nome">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn waves-effect waves-light waves-round colorSite">Salvar</button>
                                                </span>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <!-- End Foto Perfil -->
                                <div class="row">
                                    <div>
                                        <h3 class="panel-title" style="color: #9900cc;">Descrição</h3>
                                    </div>
                                    <div class="col-2 p-0 text-left" style="align-self: center; margin-left: -10px;">
                                        <input @if($user->active_description === 1) checked @endif class="checkboxConfigs" type="checkbox" data-plugin="switchery" data-color="green" data-size="small" data-type="active_description" value="{{$user->id}}" />
                                    </div>
                                </div>
                                <!-- Foto perfil -->
                                <div id="active_description" @if($user->active_description === 0) style="display:none" @endif class="media col-md-10 mx-auto">
                                    <div class="media-body align-self-center">
                                        <p>
                                            <div class="input-group" style="max-width: 300px;">
                                            <input name="description" value="{{$user->description}}" type="text" class="form-control" placeholder="Descrição">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn waves-effect waves-light waves-round colorSite">Salvar</button>
                                            </span>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <!-- End Foto Perfil -->
                                <button id="btnFormLogo" class="d-none" type="submit"></button>
                            </form>
                        </div>
                        <br>
                        <br>

                      </div>

                      <div class="tab-pane" id="exampleTabsThree" role="tabpanel">
                      <!-- Temas -->
                      <form id="cardCustomization" method="post">
                        @method('PUT')
                        @csrf
                        <div class="panel panel-primary panel-line col-12 mx-auto temaBorderTop" style="background-color: white; border-top-color: purple;">
                            <div class="">
                            <h3 class="panel-title" style="color: #9900cc;">Fundo do cartão</h3>
                            </div>

                            <div class="media col-md-5 ml-20 ">
                            <div class="example-wrap col-xl-10 col-sm-12 mx-auto p-0 row">
                                <div class="col-12 p-0">
                                <select class="form-control form-control-md " id="select-page2" data-plugin="selectpicker" name="ftipo_bt[]">
                                    <optgroup label="Galeria">
                                        <option @if ($user->background_type == '#mulheres') selected @endif value="#mulheres"  >Mulheres</option>
                                        <option @if ($user->background_type == '#minimalist') selected @endif value="#minimalist">Minimalista</option>
                                        <option @if ($user->background_type == '#music') selected @endif value="#music">Música</option>

                                    </optgroup>
                                    <option @if ($user->background_type == '#imagem') selected @endif value="#imagem">Enviar uma imagem</option>
                                    <option @if ($user->background_type == '#cor') selected @endif value="#cor">Cor Sólida ou Gradiente</option>
                                </select>
                                </div>
                            </div>
                            </div>
                            <br>


                            <div class="content2" id="mulheres">
                                <div class="media col-md-12 mx-auto pl-50 divGallery">
                                    <div class="example-wrap">
                                        <section id="sectionGaleria">
                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w001') checked @endif id="w001" class="selectBackground" name="select" data-type='1' value="w001" >
                                            <label for="w001">
                                            <div class="imgDiv" for="w001">
                                                <img src={{url("media/backgrounds_gallery/mulheres/001.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>

                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w002') checked @endif id="w002" class="selectBackground" name="select" data-type='1' value="w002" >
                                            <label for="w002">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/002.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>

                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w003') checked @endif id="w003" class="selectBackground" name="select" data-type='1' value="w003" >
                                            <label for="w003">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/003.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>

                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w004') checked @endif id="w004" class="selectBackground" name="select" data-type='1' value="w004" >
                                            <label for="w004">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/004.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>

                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w005') checked @endif id="w005" class="selectBackground" name="select" data-type='1' value="w005" >
                                            <label for="w005">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/005.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>

                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w006') checked @endif id="w006" class="selectBackground" name="select" data-type='1' value="w006" >
                                            <label for="w006">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/006.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w007') checked @endif id="w007" class="selectBackground" name="select" data-type='1' value="w007" >
                                            <label for="w007">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/007.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w008') checked @endif id="w008" class="selectBackground" name="select" data-type='1' value="w008" >
                                            <label for="w008">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/008.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w009') checked @endif id="w009" class="selectBackground" name="select" data-type='1' value="w009" >
                                            <label for="w009">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/009.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w010') checked @endif id="w010" class="selectBackground" name="select" data-type='1' value="w010" >
                                            <label for="w010">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/010.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>

                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w011') checked @endif id="w011" class="selectBackground" name="select" data-type='1' value="w011" >
                                            <label for="w011">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/011.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w012') checked @endif id="w012" class="selectBackground" name="select" data-type='1' value="w012" >
                                            <label for="w012">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/012.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w013') checked @endif id="w013" class="selectBackground" name="select" data-type='1' value="w013" >
                                            <label for="w013">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/013.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w014') checked @endif id="w014" class="selectBackground" name="select" data-type='1' value="w014" >
                                            <label for="w014">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/014.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w015') checked @endif id="w015" class="selectBackground" name="select" data-type='1' value="w015" >
                                            <label for="w015">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/015.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w016') checked @endif id="w016" class="selectBackground" name="select" data-type='1' value="w016" >
                                            <label for="w016">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/016.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w017') checked @endif id="w017" class="selectBackground" name="select" data-type='1' value="w017" >
                                            <label for="w017">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/017.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>


                                        <div class="divGaleria">
                                            <input type="radio" @if ($user->img_background == 'w018') checked @endif id="w018" class="selectBackground" name="select" data-type='1' value="w018" >
                                            <label for="w018">
                                            <div class="imgDiv" >
                                                <img src={{url("media/backgrounds_gallery/mulheres/018.jpeg")}}>
                                            </div>
                                            </label>
                                        </div>

                                        </section>
                                    </div>
                                </div>
                            </div>

                            <div class="content2" id="minimalist">
                                <div class="media col-md-12 mx-auto pl-50 divGallery">
                                    <div class="example-wrap">
                                        <section id="sectionGaleria">

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'm001') checked @endif id="m001" class="selectBackground" name="select" data-type='2' value="m001" >
                                                <label for="m001">
                                                    <div class="imgDiv" for="m001">
                                                        <img src={{url("media/backgrounds_gallery/minimalist/001.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'm002') checked @endif id="m002" class="selectBackground" name="select" data-type='2' value="m002" >
                                                <label for="m002">
                                                    <div class="imgDiv" for="m002">
                                                        <img src={{url("media/backgrounds_gallery/minimalist/002.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'm003') checked @endif id="m003" class="selectBackground" name="select" data-type='2' value="m003" >
                                                <label for="m003">
                                                    <div class="imgDiv" for="m003">
                                                        <img src={{url("media/backgrounds_gallery/minimalist/003.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'm004') checked @endif id="m004" class="selectBackground" name="select" data-type='2' value="m004" >
                                                <label for="m004">
                                                    <div class="imgDiv" for="m004">
                                                        <img src={{url("media/backgrounds_gallery/minimalist/004.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'm005') checked @endif id="m005" class="selectBackground" name="select" data-type='2' value="m005" >
                                                <label for="m005">
                                                    <div class="imgDiv" for="m005">
                                                        <img src={{url("media/backgrounds_gallery/minimalist/005.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'm006') checked @endif id="m006" class="selectBackground" name="select" data-type='2' value="m006" >
                                                <label for="m006">
                                                    <div class="imgDiv" for="m006">
                                                        <img src={{url("media/backgrounds_gallery/minimalist/006.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'm007') checked @endif id="m007" class="selectBackground" name="select" data-type='2' value="m007" >
                                                <label for="m007">
                                                    <div class="imgDiv" for="m007">
                                                        <img src={{url("media/backgrounds_gallery/minimalist/007.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                        </section>
                                    </div>
                                </div>
                            </div>


                            <div class="content2" id="music">
                                <div class="media col-md-12 mx-auto pl-50 divGallery">
                                    <div class="example-wrap">
                                        <section id="sectionGaleria">

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'g001') checked @endif id="g001" class="selectBackground" name="select" data-type='2' value="g001" >
                                                <label for="g001">
                                                    <div class="imgDiv" for="g001">
                                                        <img src={{url("media/backgrounds_gallery/music/001.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'g002') checked @endif id="g002" class="selectBackground" name="select" data-type='2' value="g002" >
                                                <label for="g002">
                                                    <div class="imgDiv" for="g002">
                                                        <img src={{url("media/backgrounds_gallery/music/002.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'g003') checked @endif id="g003" class="selectBackground" name="select" data-type='2' value="g003" >
                                                <label for="g003">
                                                    <div class="imgDiv" for="g003">
                                                        <img src={{url("media/backgrounds_gallery/music/003.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'g004') checked @endif id="g004" class="selectBackground" name="select" data-type='2' value="g004" >
                                                <label for="g004">
                                                    <div class="imgDiv" for="g004">
                                                        <img src={{url("media/backgrounds_gallery/music/004.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="divGaleria">
                                                <input type="radio" @if ($user->img_background == 'g005') checked @endif id="g005" class="selectBackground" name="select" data-type='2' value="g005" >
                                                <label for="g005">
                                                    <div class="imgDiv" for="g005">
                                                        <img src={{url("media/backgrounds_gallery/music/005.jpeg")}}>
                                                    </div>
                                                </label>
                                            </div>

                                        </section>
                                    </div>
                                </div>
                            </div>

                            <div class="content2" id="imagem">
                                <div class="media col-md-10 mx-auto">
                                <div class="example-wrap">
                                    <div class="examplee">
                                        <input
                                            @if($user->background_type == '3')
                                                data-default-file='{{url("media/backgrounds_user/$user->img_background")}}'
                                            @endif
                                            name="imgBackgroundCard"
                                            type="file"
                                            id="input-file-now-custom-1"
                                            data-plugin="dropify"
                                            data-show-remove="false"
                                            data-max-file-size="2M"
                                            data-height="300"
                                            data-width="250"
                                            class="asColorpicker form-control"
                                            data-allowed-file-extensions="jpeg jpg png"
                                            data-max-file-size="2M"
                                            onchange="document.getElementById('formBackground').click()"
                                            />
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="media col-md-5 ml-20">
                            <div class="example-wrap col-xl-10 col-sm-12 mx-auto p-0 row">
                                <div class="col-12 p-0">
                                <div class="content2" id="cor">
                                    <div class="example-wrap">
                                        <div class="example m-0">
                                            <label>Selecione a cor:</label>
                                            <input type="text" id="colorBackground" class="asColorpicker form-control" data-plugin="asColorPicker"
                                        data-mode="gradient" value="{{$user->color_background}}" name="colorBackground" />
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>

                            <br>

                            <script>
                                $('{{$user->background_type}}').show();
                            </script>

                                <hr>
                                <div class="">
                                <h3 class="panel-title" style="color: #9900cc;">Forma do botão</h3>
                                </div>
                                <div class="media col-md-6">
                                <div class="example-wrap col-xl-10 col-sm-12 mx-auto p-0 row ">
                                    <div class="col-12 p-0">
                                    <div class="example-wrap row ml-20">
                                        <div>
                                        <div class="radio-custom radio-primary">
                                            <input @if ($user->button_shape == '1') checked @endif type="radio" class="radioBtnShape" value="1" id="inputRadiosUnchecked" name="inputRadio" >
                                            <label for="inputRadiosUnchecked">
                                                <button type="button" id="btnSquare1"class="formButton"></button>
                                            </label>
                                        </div>

                                        <div class="radio-custom radio-primary">
                                            <input @if ($user->button_shape == '2') checked @endif type="radio" class="radioBtnShape" value="2" id="inputRadiosUnchecked" name="inputRadio">
                                            <label for="inputRadiosUnchecked">
                                            <button type="button " id="btnBorder1" class="formButton"></button>
                                            </label>
                                        </div>

                                        <div class="radio-custom radio-primary">
                                            <input @if ($user->button_shape == '3') checked @endif type="radio" class="radioBtnShape" value="3" id="inputRadiosUnchecked" name="inputRadio">
                                            <label for="inputRadiosUnchecked">
                                            <button type="button" id="btnRounded1" class="formButton"></button>
                                            </label>
                                        </div>
                                        </div>

                                    <div class="ml-20">
                                        <div class="radio-custom radio-primary">
                                            <input @if ($user->button_shape == '4') checked @endif type="radio" class="radioBtnShape" value="4" id="inputRadiosUnchecked" name="inputRadio">
                                            <label for="inputRadiosUnchecked">
                                                <button type="button"id="btnSquare2" class="formButton"></button>
                                            </label>
                                        </div>

                                        <div class="radio-custom radio-primary">
                                            <input @if ($user->button_shape == '5') checked @endif type="radio" class="radioBtnShape" value="5" id="inputRadiosUnchecked" name="inputRadio">
                                            <label for="inputRadiosUnchecked">
                                                <button type="button"id="btnBorder2" class="formButton"></button>
                                            </label>
                                        </div>

                                        <div class="radio-custom radio-primary">
                                            <input @if ($user->button_shape == '6') checked @endif type="radio" class="radioBtnShape" value="6" id="inputRadiosUnchecked" name="inputRadio">
                                            <label for="inputRadiosUnchecked">
                                                <button type="button" id="btnRounded2" class="formButton"></button>
                                            </label>
                                        </div>

                                        </div>
                                        <div class="example m-0">
                                            <label>Selecione a cor do botão:</label>
                                            <input type="text" id="colorButton" class="asColorpicker form-control" data-plugin="asColorPicker"
                                        data-mode="simple" value="{{$user->color_button}}" name="colorButton" />
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="">
                      <h3 class="panel-title" style="color: #9900cc;">Fonte</h3>
                    </div>

                    <div class="media col-md-6 ">
                      <div class="example-wrap col-xl-10 col-sm-12 mx-auto p-0 row ">
                        <div class="col-12 p-0">
                          <div class="example-wrap row ml-20">
                            <div>
                              <input name="font" value="{{$user->font_shape}}" class="form-control" id="font" type="text">
                            </div>
                            <br>
                            <div class="example mt-10">
                              <label>Selecione a cor da fonte:</label>
                              <input type="text" class="asColorpicker form-control" data-plugin="asColorPicker"
                              data-mode="simple" value="{{$user->color_font}}" id="colorFont" name="colorFont"/>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>

                <div class="">
                    <h3 class="panel-title" style="color: #9900cc;">Cor do Nome e Descrição</h3>
                </div>

                <div class="media col-md-6 ">
                    <div class="example-wrap col-xl-10 col-sm-12 mx-auto p-0 row ">
                        <div class="col-12 p-0">
                            <div class="example-wrap row ml-20">
                                <select class="form-control form-control-md "  data-plugin="selectpicker" name="colorName">
                                    <option value="0"  @if ($user->color_name == '0') selected @endif>Clara</option>
                                    <option value="1"  @if ($user->color_name == '1') selected @endif>Escura</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <button id="formBtnShape" type="submit" class="btn btn-success float-right">
                    <div>
                        <i class="far fa-save fa-2x"></i>
                    </div>
                    <div>
                        <strong>Salvar Alterações</strong>
                    </div>
                </button>
            </form>
                <br>
                <br>
                <br>
                <br>
                <br>
              </div>

              </div>
            <div class="tab-pane" id="exampleTabsFour" role="tabpanel">
                <!-- Temas -->
                <div class="panel panel-primary panel-line col-12 mx-auto temaBorderTop" style="background-color: white; border-top-color: purple;height: 410px;">
                    <form method="POST" id="analytics">
                        <div>
                            <h3 class="panel-title" style="color: #9900cc;">Google Analytics ID</h3>
                        </div>
                        <!-- Foto perfil -->
                        <div class="media col-md-10 mx-auto">
                            <div class="media-body align-self-center">
                                    <div class="input-group" style="max-width: 300px;">
                                    <input id="googleAnalytics" type="text" class="form-control" placeholder="Exemplo: UA-99999999-88" value="{{$user->google_analytics}}">
                                    </div>
                                    <label for="">Inseir apenas o ID (Ex: UA-99999999-88)</label>
                            </div>
                        </div>
                        <!-- End Foto Perfil -->
                        <div>
                            <h3 class="panel-title" style="color: #9900cc;">Facebook Pixel ID</h3>
                        </div>
                        <!-- Foto perfil -->
                        <div class="media col-md-10 mx-auto">
                            <div class="media-body align-self-center">
                                    <div class="input-group" style="max-width: 300px;">
                                    <input id="facebookPixel" type="text" class="form-control" placeholder="Exemplo: 123456789" value="{{$user->facebook_pixel}}">
                                    </div>
                                    <label for="">Inseir apenas o ID (Ex: 123456789)</label>
                            </div>
                        </div>

                        <br>
                        <div>
                            <span class="ml-40">Atenção: Deixe em branco o campo que não deseja inserir informação.</span>
                        </div>
                        <hr>

                        <button type="submit" class="btn btn-success float-right">
                            <div>
                                <i class="far fa-save fa-2x"></i>
                            </div>
                            <div>
                                <strong>Salvar Alterações</strong>
                            </div>
                        </button>

                        <!-- End Foto Perfil -->
                    </form>
                </div>
                <br>
                <br>
            </div>

                        {{-- <div class="tab-pane" id="exampleTabsFive" role="tabpanel">
                            <div class="screen mx-auto" id="phoneDivv" >
                                <div style="overflow-y: hidden; width:100%; height: 100%;">
                                    <div class="container divPhone p-5 " id="divPhone"  >
                                        @include('layouts.phone')
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                  </div>
                </div>
                <!-- End Example Tabs -->

              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div>
@endsection
