<?php

namespace App\Http\Controllers;

use Mail;
use App\ModelDoutores;
use Illuminate\Http\Request;
use App\ModelContato;
use Symfony\Component\Console\Input\Input;

class ControllerContato extends Controller{
    public function pagina(){
        $dados_contato = ModelContato::dados_contato_pg();
        $doutores = ModelDoutores::all('doutor');
        return view('contato')->with('dados_contato',$dados_contato)->with('doutores',$doutores);
    }
    public function email(Request $request){
        $data['nome'] = $request->input('nome');
        $data['email'] = $request->input('email');
        $data['telefone'] = $request->input('telefone');
        $data['dia-de-semana'] = $request->input('dia-de-semana');
        $data['horario'] = $request->input('horario');
        $data['doutor'] = $request->input('doutor');
        $data['primeira-vez'] = $request->input('primeira-vez');
        $data['informacoes'] = $request->input('informacoes');
        Mail::send('mail.contact',["data"=>$data],function($m) use($data){
            $m->from('no-reply@clinicapersonnalite.com','Clinica Personnalité');
            $m->to('contato@clinicapersonnalite.com','Clinica Personnalité')->subject('O Cliente '.$data['nome']);
        });
    }
}
