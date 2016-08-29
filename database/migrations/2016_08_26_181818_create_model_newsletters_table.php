<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_newsletters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('email', 100);
            $table->string('codigo', 00);
            $table->char('ativo', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('model_newsletters');
    }
}
