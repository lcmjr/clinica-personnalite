<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Galeria extends Migration{
    private $tabela = "galeria";

    public function up(){
        Schema::create($this->tabela, function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 100);
            $table->string('foto-pequena', 100);
            $table->string('foto-grande', 100);
        });
    }

    public function down(){
        Schema::drop($this->tabela);
    }
}
