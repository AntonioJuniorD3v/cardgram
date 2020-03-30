    <style>
        #imglogo{
            width: {{$user->size_img_logo.'% !important'}};
        }

        .link{
            @php
                $font = str_replace('+', ' ', $user->font_shape);
            @endphp
            font-family: {{$font}} !important;
        }

        @if($user->background_type == '#imagem')
            .divPhone{
                background-image: url({{url("media/backgrounds_user/$user->img_background")}});
            }
        @elseif($user->background_type == '#cor')
            .divPhone{
                background-color: {{$user->color_background}} !important;
                background-image: {{$user->color_background}} !important;
            }
        @elseif($user->background_type == '#gradient')
            .divPhone{
            background-attachment: fixed;
            @switch($user->img_background)
                @case('c001')
                        background: linear-gradient(180deg, #00C9FF 0%, #92FE9D 100%);
                @break
                @case('c002')
                    background: linear-gradient(180deg, #FC466B 0%, #3F5EFB 100%);
                @break
                @case('c003')
                    background: linear-gradient(180deg, #3F2B96 0%, #A8C0FF 100%);
                @break
                @case('c004')
                    background: linear-gradient(180deg, #f8ff00 0%, #3ad59f 100%);
                @break
                @case('c005')
                    background-image: linear-gradient( 135deg, #FDEB71 10%, #F8D800 100%);
                @break
                @case('c006')
                    background-color: #FF9A8B;
                    background-image: linear-gradient(90deg, #FF9A8B 0%, #FF6A88 55%, #FF99AC 100%);
                @break
                @case('c007')
                    background-image: linear-gradient( 69.7deg,  rgba(216,81,82,1) 40%, rgba(154,27,69,1) 100.1% );
                @break
                @case('c008')
                    background-image: radial-gradient( circle farthest-corner at 50.1% 52.3%,  rgba(255,231,98,1) 58.2%, rgba(251,212,0,1) 90.1% );
                @break
                @case('c009')
                    background-image: linear-gradient( 171.8deg,  rgba(5,111,146,1) 13.5%, rgba(6,57,84,1) 78.6% );
                @break
                @case('c010')
                    background-image: radial-gradient( circle 753.6px at 10% 20%,  rgba(248,167,221,1) 0%, rgba(230,192,254,1) 41%, rgba(169,217,243,1) 90% );
                @break
                @case('c011')
                    background-image: radial-gradient( circle farthest-corner at 0.1% 53.8%,  rgba(255,182,172,1) 0%, rgba(255,123,172,1) 100.2% );
                @break
                @case('c012')
                    background-image: radial-gradient( circle farthest-corner at 0.2% 1.8%,  rgba(255,90,8,1) 0%, rgba(88,0,0,1) 100.2% );
                @break
            @endswitch
        }
        @else
            @php
                $path = substr($user->background_type, '1');
                $img = substr($user->img_background, '1');
            @endphp

            .divPhone{
                background-image: url({{url("media/backgrounds_gallery/$path/$img.jpeg")}});
            }
        @endif

        @switch($user->button_shape)
        @case(1)
            .link, .button-small{
                border-radius: 0px !important;
                background-color: {{$user->color_button}};
            }
            a{
                color: {{$user->color_font}};
            }
            .link:hover, .button-small:hover{
                background-color: {{$user->color_font}};
            }
            .link:hover:hover > a, .button-small:hover > a{
                color: {{$user->color_button}};
            }
            @break
        @case(2)
            .link, .button-small, #ytvideo > div iframe{
                border-radius: 10px !important;
                background-color: {{$user->color_button}};
            }
            a{
                color: {{$user->color_font}};
            }
            .link:hover, .button-small:hover{
                background-color: {{$user->color_font}};
            }
            .link:hover:hover > a, .button-small:hover > a{
                color: {{$user->color_button}};
            }
            @break
        @case(3)
            .link, .button-small{
                border-radius: 100px !important;
                background-color: {{$user->color_button}};
            }
            #ytvideo > div iframe{
                border-radius: 10px !important;
            }
            a{
                color: {{$user->color_font}};
            }
            .link:hover, .button-small:hover{
                background-color: {{$user->color_font}};
            }
            .link:hover:hover > a, .button-small:hover > a{
                color: {{$user->color_button}};
            }
            @break
        @case(4)
            .link, .button-small{
                border-radius: 0px !important;
                background-color: transparent;
                border: 2px solid {{$user->color_button}};
            }
            a{
                color: {{$user->color_font}};
            }
            .link:hover, .button-small:hover{
                background-color: {{$user->color_button}};
            }
            .link:hover:hover > a, .button-small:hover > a{
                color: {{$user->color_font}};
            }
            @break
        @case(5)
            .link, .button-small, #ytvideo > div iframe{
                border-radius: 10px !important;
                background-color: transparent;
                border: 2px solid {{$user->color_button}};
            }
            a{
                color: {{$user->color_font}};
            }
            .link:hover, .button-small:hover{
                background-color: {{$user->color_button}};
            }
            .link:hover:hover > a, .button-small:hover > a{
                color: {{$user->color_font}};
            }
            @break
        @case(6)
            .link, .button-small{
                border-radius: 100px !important;
                background-color: transparent;
                border: 2px solid {{$user->color_button}};
            }
            #ytvideo > div iframe{
                border-radius: 10px !important;
            }
            a{
                color: {{$user->color_font}};
            }
            .link:hover, .button-small:hover{
                background-color: {{$user->color_button}};
            }
            .link:hover:hover > a, .button-small:hover > a{
                color: {{$user->color_font}};
            }
            @break
    @endswitch
    </style>

    @if($user->active_logo == 1)
        <div class="col-12 p-0 mx-auto mb-10" id="imageLogo">
            <img id="imglogo" src="{{url("media/logos/$user->img_logo")}}" >
        </div>
    @endif

    @if($user->active_img_perfil == 1)
        <div class="col-12 p-0 mx-auto mb-2" id="imagePerfil">
            <img class="user-img rounded-circle" src="{{url("media/perfil/$user->img_perfil")}}" >
        </div>
    @endif

    @if($user->active_name == 1)
        <div id="nomePerfil" class="mx-auto p-0">
            {{$user->name}}
        </div>
    @endif

    @if($user->active_description == 1)
        <div id="descricao" class="mx-auto p-0">
            {{$user->description}}
        </div>
    @endif
    <br>

    <div class="row mx-auto" style="place-content: center;">



        @foreach ($links as $key => $link)
            @if ($link->size == 'Grande')
                <div class="row align-items-center link  mx-auto col-12 " style="min-height:40px !important; " >
                    <a href="{{$link->url}}" data-id="<?php ?>" target="_blank"  class="text-decoration-none clickLink" >
                    <div class="row " >
                    @if ($link->type != '#link')
                        <div class="col-1 d-flex align-items-center p-0">
                         @if (isset($link->image))
                        <img src="{{url("media/images/$link->image")}}" style="margin-left:10px" width="30">
                    @else
                    @switch($link->type)
                        @case('#telefone-celular')
                            <i class="fas fa-mobile-alt fa-2x" style="margin-left:10px;"></i>
                        @break
                        @case('#telefone-fixo')
                            <i class="fas fa-phone fa-2x" style="margin-left:10px;"></i>
                        @break
                        @case('#e-mail')
                            <i class="fas fa-envelope fa-2x" style="margin-left:10px;"></i>
                        @break
                        @case('#website')
                            <i class="fas fa-mouse-pointer fa-2x" style="margin-left:10px;"></i>
                        @break
                        @case('#endereco')
                            <i class="fas fa-map-marker-alt fa-2x" style="margin-left:10px;"></i>
                        @break
                        @case('#whatsapp')
                            <i class="fab fa-whatsapp fa-2x" style="margin-left:10px;"></i>
                        @break
                        @case('#facebook')
                            <i class="fab fa-facebook-f fa-2x" style="margin-left:10px;"></i>
                        @break
                        @case('#youtube')
                            <i class="fab fa-youtube fa-2x" style="margin-left:10px;"></i>
                        @break
                        @case('#instagram')
                            <i class="fab fa-instagram fa-2x" style="margin-left:10px;"></i>
                        @break
                        @case('#twitter')
                            <i class="fab fa-twitter fa-2x" style="margin-left:10px;"></i>
                        @break
                        @case('#linkedin')
                            <i class="fab fa-linkedin-in fa-2x" style="margin-left:10px;"></i>
                        @break
                    @endswitch
                @endif
            </div>
            <div class="col-11 d-flex align-items-center p-0" style="place-content:center; margin: 10px -5px 10px 5px;">
                <p class="texto-estilo m-0">{{$link->name}}</p>
            </div>
        @else
            <div class="col-12 d-flex align-items-center p-0" style="place-content:center;">
                    <p class="texto-estilo m-0">{{$link->name}}</p>
            </div>
        @endif
</div>
</a>
</div>
@endif

@if ($link->size == 'Pequeno')
<div class="row align-items-center link mx-auto button-small" >
<a href="<?php?>" data-id="<?php ?>" style="margin:10px !important;" class=" text-decoration-none clickLink" >
@switch($link->type)
                @case('#telefone-celular')
                    <i class="fas fa-mobile-alt fa-2x"></i>
                @break
                @case('#telefone-fixo')
                    <i class="fas fa-phone fa-2x"></i>
                @break
                @case('#e-mail')
                    <i class="fas fa-envelope fa-2x"></i>
                @break
                @case('#website')
                    <i class="fas fa-mouse-pointer fa-2x"></i>
                @break
                @case('#endereco')
                    <i class="fas fa-map-marker-alt fa-2x"></i>
                @break
                @case('#whatsapp')
                    <i class="fab fa-whatsapp fa-2x"></i>
                @break
                @case('#facebook')
                    <i class="fab fa-facebook-f fa-2x"></i>
                @break
                @case('#youtube')
                    <i class="fab fa-youtube fa-2x"></i>
                @break
                @case('#instagram')
                    <i class="fab fa-instagram fa-2x"></i>
                @break
                @case('#twitter')
                    <i class="fab fa-twitter fa-2x"></i>
                @break
                @case('#linkedin')
                    <i class="fab fa-linkedin-in fa-2x"></i>
                @break
            @endswitch
</a>
</div>
@endif
@if($link->size == 'video')
                    <div class="col-12" id="ytvideo">
                        <div class="hs-responsive-embed-youtube">
                            <iframe src="https://www.youtube.com/embed/{{$link->url}}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                @endif
@endforeach
</div >


