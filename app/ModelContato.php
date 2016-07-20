<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelContato extends Model{
    protected $table = 'contato';
    public static function dados_contato(){
        return self::get(['telefone_1','telefone_2','telefone_3','email','facebook','endereco_1','endereco_2','endereco_3','endereco_observacao','atendimento']);
    }
}