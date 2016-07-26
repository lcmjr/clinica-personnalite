<?php

namespace App\Http\Controllers;

use App\ModelContato;
use App\ModelTextos;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerClinica extends Controller{
    public function pagina(){
        $dados_contato = ModelContato::dados_contato();
        $textos = ModelTextos::clinica();
        return view('clinica')->with('dados_contato',$dados_contato)->with("textos",$textos);
    }
}
