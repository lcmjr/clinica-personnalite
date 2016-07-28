<?php

namespace App\Http\Controllers;

use App\ModelDoutores;
use Illuminate\Http\Request;
use App\ModelContato;

use App\Http\Requests;

class ControllerContato extends Controller{
    public function pagina(){
        $dados_contato = ModelContato::dados_contato_pg();
        $doutores = ModelDoutores::all('doutor');
        return view('contato')->with('dados_contato',$dados_contato)->with('doutores',$doutores);
    }
}
