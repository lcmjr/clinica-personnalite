<?php

namespace App\Http\Controllers;

use App\ModelContato;
use App\ModelTextos;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerEspecializacoes extends Controller{
    public function pagina(){
        $dados_contato = ModelContato::dados_contato();
        $textos = ModelTextos::especializacoes();
        $posts = Post::posts_blog();
        return view('especializacoes')->with('dados_contato',$dados_contato)->with("textos",$textos)->with("posts",$posts);
    }
}
