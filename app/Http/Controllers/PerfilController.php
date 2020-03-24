<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\User;
use Illuminate\Support\Facades\File;


class PerfilController extends Controller
{
    private $objLink;
    private $objUser;

    public function __construct() {

        $this->objLink= new Link();
        $this->objUser= new User();
    }

    public function index()
    {
        return view('perfil');
    }

    public function deleteAccount(Request $request){
        $id = $request->id;

        if($id == auth()->user()->id){
            $links = $this->objLink->where(['id_user'=>$id]);
            $user = $this->objUser->find($id);

            foreach($links as $link){
                if(!empty($link->image)){
                    unlink(public_path('media/images/'.$link->image));
                }
            }
            
            unlink(public_path('media/backgrounds_user/'.$user->img_background));
            if($user->img_logo != 'default-logo.png'){
                unlink(public_path('media/logos/'.$user->img_logo));
            }
            if($user->img_perfil != 'default-perfil.png'){
                unlink(public_path('media/perfil/'.$user->img_perfil));
            }

            $this->objLink->where(['id_user'=>$id])->delete();
            $this->objUser->where(['id'=>$id])->delete();
        }

        return redirect()->route('register');
    }

    public function pro()
    {
        return view('pro');
    }
}
