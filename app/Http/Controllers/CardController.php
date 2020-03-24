<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\User;

class CardController extends Controller
{
    private $objUser;
    private $objLink;

    public function __construct() {
        //$this->middleware('auth');
        $this->objUser= new User();
        $this->objLink= new Link();
    }

    public function __invoke()
    {
        //$links = $this->objUser->find(1)->relLinks->sortBy('position');
        //$user = $this->objUser->find(1);
       // return view('card', ["links" => $links, "user" => $user ]);
    }

    public function card($card)
    {
        $user = $this->objUser->where('name', $card)->first();
        if(isset($user->id)){
            $links = $this->objUser->find($user->id)->relLinks->sortBy('position');
            return view('card', ["links" => $links, "user" => $user ]);
        }else{
            return view('404');
        }
    }

    public function makeCard(){
        $links = $this->objUser->find(auth()->user()->id)->relLinks->sortBy('position');
        $user = $this->objUser->find(auth()->user()->id);
        return view('layouts/phone', ["links" => $links, "user" => $user ]);
    }
}
