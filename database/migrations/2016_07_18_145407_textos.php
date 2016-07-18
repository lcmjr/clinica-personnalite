<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Textos extends Migration{
    private $tabela = "textos";

    public function up(){
        Schema::create($this->tabela, function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 100);
            $table->string('foto', 100);
            $table->text('texto');
        });
    }

    public function down(){
        Schema::drop($this->tabela);
    }
}
