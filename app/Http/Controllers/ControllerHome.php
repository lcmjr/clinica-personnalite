<?php

namespace App\Http\Controllers;

use App\ModelContato;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerHome extends Controller{
    public function pagina(){
        $dados_contato = ModelContato::dados_contato();
        return view('home')->with('dados_contato',$dados_contato);
    }
}
