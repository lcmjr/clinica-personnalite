<?php

namespace App\Http\Controllers;

use Mail;
use App\ModelNewsletter;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerNewsletter extends Controller {
    public function email(Request $request){
        $data['nome'] = $request->input('nome');
        $data['email'] = $request->input('email');
        $data['codigo'] = hash('sha256',($request->input('nome').$data['nome'].$data['email']));
        $email = ModelNewsletter::where('nome',$data['nome'])->orWhere('email',$data['email'])->get();
        if($email->count() == 0){
            $id = ModelNewsletter::insertGetId(
                ['email' => $data['email'],
                    'nome'=> $data['nome'],
                    'codigo' => $data['codigo'],
                    'ativo'=> 'N']
            );
            $data['id'] = $id;
            $this->enviar_email($data);
            echo "1";
        }else if($email[0]->ativo == 'N'){
            $data['id'] = $email[0]->id;
            $this->enviar_email($data);
            echo "2";
        }else
            echo "3";
    }
    
    public function ativar_email($codigo){
        ModelNewsletter::find($codigo)->update(['ativo' => 'S']);
        return redirect()->route('Home');
    }
    
    private function enviar_email($data){
        Mail::send('mail.newsletter',["data"=>$data],function($m) use($data){
            $m->from('no-reply@clinicapersonnalite.com','Clinica Personnalité');
            $m->to($data['email'],$data['nome'])->subject('Confirmação de Newsletter');
        });
    }
}
