<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Banner extends Migration{
    private $tabela = "banner";

    public function up(){
        Schema::create($this->tabela, function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner', 100);
        });
    }

    public function down(){
        Schema::drop($this->tabela);
    }
}
