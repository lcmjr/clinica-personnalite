<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTextos extends Model{
    protected $table = 'textos';
    public static function home(){
        return self::orderBy('id', 'desc')->where("id","=","4")->orWhere("id","=","6")->get();
    }
}
