<?php

use Illuminate\Database\Seeder;

class SeedGaleria extends Seeder{
    public function run(){
        DB::table('galeria')->insert(array(
            [ 'titulo' => "Teste",
                'foto-pequena' => "1-p.jpg",
                'foto-grande' => "1.jpg"],
            [ 'titulo' => "Teste2",
                'foto-pequena' => "2-p.jpg",
                'foto-grande' => "2.jpg"],
            [ 'titulo' => "Teste3",
                'foto-pequena' => "3-p.jpg",
                'foto-grande' => "3.jpg"],
            [ 'titulo' => "Teste4",
                'foto-pequena' => "4-p.jpg",
                'foto-grande' => "4.jpg"],
            [ 'titulo' => "Teste5",
                'foto-pequena' => "5-p.jpg",
                'foto-grande' => "5.jpg"],
        ));
    }
}