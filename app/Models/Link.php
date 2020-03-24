<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['id_user', 'type', 'size', 'name', 'url', 'active', 'image'];

    public function relUsers(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }
}
