<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contato extends Migration{
    private $tabela = "contato";

    public function up(){
        Schema::create($this->tabela, function (Blueprint $table) {
            $table->increments('id');
            $table->string('telefone_1', 15);
            $table->string('telefone_2', 15);
            $table->string('telefone_3', 15);
            $table->string('email', 100);
            $table->string('facebook', 200);
            $table->string('endereco_1', 100);
            $table->string('endereco_2', 100);
            $table->string('endereco_3', 100);
            $table->text('endereco_observacao');
            $table->text('maps');
            $table->string('atendimento', 100);
        });
    }

    public function down(){
        Schema::drop($this->tabela);
    }
}
