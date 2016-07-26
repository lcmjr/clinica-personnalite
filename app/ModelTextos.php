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

    public static function especializacoes(){
        return self::orderBy('id', 'ASC')->where("id","=","5")->get();
    }

    public static function doutores(){
        return self::orderBy('id', 'DESC')->where("id","=","7")->orWhere("id","=","2")->get();
    }
}
