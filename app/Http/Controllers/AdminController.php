<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\User;

class AdminController extends Controller
{

    private $objUser;
    private $objLink;

    public function __construct() {
        $this->middleware('auth');
        $this->objUser= new User();
        $this->objLink= new Link();
    }

    public function index()
    {
        $links = $this->objUser->find(auth()->user()->id)->relLinks->sortBy('position');
        $user = $this->objUser->find(auth()->user()->id);

        foreach($links as $link){
            if($link->type == '#telefone-fixo' || $link->type == '#telefone-celular'){
                $link->url = str_replace("tel:+55", '', $link->url);
            } else if($link->type == '#email' ){
                $link->url = str_replace("mailto:", '', $link->url);
            }  else if($link->type == '#whatsapp' ){
                $link->url = str_replace('https://api.whatsapp.com/send?phone=', '', $link->url);
            } else if($link->type == '#youtube-video' ){
                $link->url = 'https://www.youtube.com/watch?v='.$link->url;
            }
        }

        return view('admin', ["links" => $links, "user" => $user ]);
    }

    public function updateChecked($id, $active, $type){
        return $this->objUser->where(['id'=>$id])->where(['id'=>auth()->user()->id])->update([
            $type => $active
        ]);
    }

    public function updateLogo(Request $request){

        if(!empty($request->img_logo)){
            $request->validate([
                'img_logo' => 'required|image|mimes:jpeg,jpg,png|max:1024'
            ]);
            $ext = $request->img_logo->extension();
            $imgLogo = 'imglogo'.auth()->user()->id.'.'.$ext;
            $request->img_logo->move(public_path('media/logos'), $imgLogo);
        }

        if(!empty($request->img_perfil)){
            $request->validate([
                'img_perfil' => 'required|image|mimes:jpeg,jpg,png|max:1024'
            ]);
            $ext = $request->img_perfil->extension();
            $imgPerfil = 'imgperfil'.auth()->user()->id.'.'.$ext;
            $request->img_perfil->move(public_path('media/perfil'), $imgPerfil);
        }

        if(isset($imgLogo)){
            return $this->objUser->where(['id'=>auth()->user()->id])->update([
                'img_logo' => $imgLogo,
                'size_img_logo' => $request->size,
                'name' => $request->name,
                'description' => $request->description
            ]);
        } else if(isset($imgPerfil)){
            return $this->objUser->where(['id'=>auth()->user()->id])->update([
                'img_perfil' => $imgPerfil,
                'size_img_logo' => $request->size,
                'name' => $request->name,
                'description' => $request->description
            ]);
        }else {
            return $this->objUser->where(['id'=>auth()->user()->id])->update([
                'size_img_logo' => $request->size,
                'name' => $request->name,
                'description' => $request->description
            ]);
        }
    }

    public function cardCustomization(Request $request){

        if($request->ftipo_bt[0] == "#imagem"){
            if(!empty($request->imgBackgroundCard)){
                $request->validate([
                    'imgBackgroundCard' => 'required|image|mimes:jpeg,jpg,png|max:1024'
                ]);
                $ext = $request->imgBackgroundCard->extension();
                $imgBackgroundCard = 'imgBackgroundCard'.auth()->user()->id.'.'.$ext;
                $request->imgBackgroundCard->move(public_path('media/backgrounds_user'), $imgBackgroundCard);
            }

            if(isset($imgBackgroundCard)){
                return $this->objUser->where(['id'=>auth()->user()->id])->update([
                    'img_background' => $imgBackgroundCard,
                    'background_type' => $request->ftipo_bt[0],
                    'button_shape' => $request->inputRadio,
                    'color_button' => $request->colorButton,
                    'font_shape' => $request->font,
                    'color_font' => $request->colorFont,
                    'color_name' => $request->colorName

                ]);
            }
        } else if($request->ftipo_bt[0] == "#cor"){
            return $this->objUser
            ->where(['id'=>auth()->user()->id])
            ->update([
                'background_type' => $request->ftipo_bt[0],
                'color_background' => $request->colorBackground,
                'button_shape' => $request->inputRadio,
                'color_button' => $request->colorButton,
                'font_shape' => $request->font,
                'color_font' => $request->colorFont,
                'color_name' => $request->colorName

            ]);
        } else {
            return $this->objUser
            ->where(['id'=>auth()->user()->id])
            ->update([
                'background_type' => $request->ftipo_bt[0],
                'img_background' => $request->select,
                'button_shape' => $request->inputRadio,
                'color_button' => $request->colorButton,
                'font_shape' => $request->font,
                'color_font' => $request->colorFont,
                'color_name' => $request->colorName
            ]);
        }
    }

    public function setAnalytics(Request $request){
        return $this->objUser
        ->where(['id'=>auth()->user()->id])
        ->update([
            'google_analytics' => $request->google_analytics,
            'facebook_pixel' => $request->facebook_pixel
        ]);
    }

    public function sendImgbackgroundCard(Request $request){

        if(!empty($request->imgBackgroundCard)){
            $request->validate([
                'imgBackgroundCard' => 'required|image|mimes:jpeg,jpg,png|max:1024'
            ]);
            $ext = $request->imgBackgroundCard->extension();
            $imgBackgroundCard = 'imgBackgroundCard'.auth()->user()->id.'.'.$ext;
            $request->imgBackgroundCard->move(public_path('media/backgrounds_user'), $imgBackgroundCard);
        }

        if(isset($imgBackgroundCard)){
            return $this->objUser->where(['id'=>auth()->user()->id])->update([
                'img_background' => $imgBackgroundCard,
                'background_type' => 3,
            ]);
        }
    }


}
