<?php

namespace App\Http\Controllers;

use App\ModelContato;
use App\ModelDoutores;
use App\ModelTextos;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerDoutores extends Controller{
    public function pagina(){
        $dados_contato = ModelContato::dados_contato();
        $textos = ModelTextos::doutores();
        $doutores = ModelDoutores::all();
        return view('doutores')->with('dados_contato',$dados_contato)->with("textos",$textos)->with("doutores",$doutores);
    }
}
