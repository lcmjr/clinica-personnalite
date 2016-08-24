<?php

namespace App\Http\Controllers;

use App\ModelBanner;
use App\ModelContato;
use App\ModelTextos;
use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerHome extends Controller{
    public function pagina(){
        $textos = ModelTextos::home();
        $dados_contato = ModelContato::dados_contato();
        $posts = Post::posts_blog();
        $banner = ModelBanner::all();
        return view('home')->with('dados_contato',$dados_contato)->with("banners",$banner)->with("textos",$textos)->with("posts",$posts);
    }
}
