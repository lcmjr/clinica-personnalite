<?php

namespace App\Http\Controllers;

use App\ModelContato;
use App\ModelTextos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerHome extends Controller{
    public function pagina(){
        $textos = ModelTextos::home();
        $dados_contato = ModelContato::dados_contato();
        return view('home')->with('dados_contato',$dados_contato)->with("textos",$textos);
    }
}
