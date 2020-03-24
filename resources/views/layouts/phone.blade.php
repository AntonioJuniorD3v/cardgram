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
                .link a{
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
                .link, .button-small{
                    border-radius: 10px !important;
                    background-color: {{$user->color_button}};
                }
                .link a{
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
                .link a{
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
                .link a{
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
                .link, .button-small{
                    border-radius: 10px !important;
                    background-color: transparent;
                    border: 2px solid {{$user->color_button}};
                }
                .link a{
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
                .link a{
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
@endforeach
</div >


