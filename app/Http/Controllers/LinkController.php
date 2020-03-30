<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\User;
use Illuminate\Support\Facades\File;

class LinkController extends Controller
{

    private $objLink;

    public function __construct() {

        $this->objLink= new Link();
    }

    public function store(Request $request){

        if($request->ftipo_bt[0] == '#telefone-fixo' || $request->ftipo_bt[0] == '#telefone-celular'){
            $termos = array("(",")", "-", " " );
            $request->link = 'tel:+55'.str_replace($termos, '', $request->link);
        } else if($request->ftipo_bt[0] == '#email' ){
            $request->link = 'mailto:'.$request->link;
        }  else if($request->ftipo_bt[0] == '#whatsapp' ){
            $termos = array("(",")", "-", "+", " ");
            $request->link = str_replace($termos, '', $request->link);
            $request->link = 'https://api.whatsapp.com/send?phone='.$request->link;
        } else if($request->ftipo_bt[0] == '#youtube-video' ){
            $position = strpos($request->link, 'watch?v=');
            $request->link = substr($request->link, $position+8, 11);
            $request->buttonName = 'video';
            $request->size = 'video';
        }

        $imageName = null;
        if(!empty($request->img)){
            $request->validate([
                'img' => 'required|image|mimes:jpeg,jpg,png|max:1024'
            ]);
            $ext = $request->img->extension();
            $imageName = time().'.'.$ext;
            $request->img->move(public_path('media/images'), $imageName);
        }

        $register = $this->objLink->create([
            'id_user' => auth()->user()->id,
            'type' => $request->ftipo_bt[0],
            'size' => $request->size,
            'name' => $request->buttonName,
            'url' => $request->link,
            'active' => 1,
            'image' => $imageName
        ]);

        return $register;
    }

    public function updateChecked($id, $active){
        return $this->objLink->where(['id'=>$id])->where(['id_user'=>auth()->user()->id])->update([
            'active'=>$active
        ]);
    }

    public function update(Request $request, $id){

        if($request->type == '#telefone-fixo' || $request->type == '#telefone-celular'){
            $termos = array("(",")", "-", " " );
            $request->url = 'tel:+55'.str_replace($termos, '', $request->url);
        } else if($request->type == '#email' ){
            $request->url = 'mailto:'.$request->url;
        }  else if($request->type == '#whatsapp' ){
            $termos = array("(",")", "-", "+", " ");
            $request->url = str_replace($termos, '', $request->url);
            $request->url = 'https://api.whatsapp.com/send?phone='.$request->url;
        } else if($request->type == '#youtube-video' ){
            $position = strpos($request->url, 'watch?v=');
            $request->url = substr($request->url, $position+8, 11);
            $request->buttonName = 'video';
            $request->size = 'video';
            $request->name = 'video';
        }

        //$imageName = null;
        if(!empty($request->img)){
            $request->validate([
                'img' => 'required|image|mimes:jpeg,jpg,png|max:1024'
            ]);
            $ext = $request->img->extension();
            $imageName = 'imgbtn'.$id.'.'.$ext;
            $request->img->move(public_path('media/images'), $imageName);

            return
            $this->objLink
                ->where(['id'=>$id])
                ->where(['id_user'=>auth()->user()->id])
                ->update([
                    'size'=>$request->size,
                    'name'=>$request->name,
                    'url'=>$request->url,
                    'image'=>$imageName
                ]);
        }else{
            return
            $this->objLink
                ->where(['id'=>$id])
                ->where(['id_user'=>auth()->user()->id])
                ->update([
                    'size'=>$request->size,
                    'name'=>$request->name,
                    'url'=>$request->url,
                ]);
        }

    }

    public function destroy(Request $request, $id){
        $file_path = $this->objLink->find($id);

        if(!empty($file_path->image)){
            unlink(public_path('media/images/'.$file_path->image));
        }

        return $this->objLink->destroy($id);
    }

    public function updatePosition(Request $request){
        foreach ($request->list as  $key => $link){
            $this->objLink
            ->where(['id'=>$link])
            ->update(['position'=>$key]);
        }

        return;
    }

    public function updateViews(Request $request){
        return $this->objLink
        ->where(['id'=>$request->id])
        ->increment('views', 1);
    }
}
