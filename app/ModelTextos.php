<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTextos extends Model{
    protected $table = 'textos';
    public static function home(){
        return self::orderBy('id', 'desc')->where("id","=","4")->orWhere("id","=","6")->get();
    }

    public static function clinica(){
        return self::orderBy('id', 'ASC')->where("id","=","1")->orWhere("id","=","3")->orWhere("id","=","2")->get();
    }
}
