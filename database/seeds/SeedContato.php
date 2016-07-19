<?php

use Illuminate\Database\Seeder;

class SeedContato extends Seeder{

    public function run(){
        DB::table('contato')->insert(array(
            ['telefone_1' => "11 4432-2877",
            'telefone_2' => "11 4438-4874",
            'telefone_3' => "11 4994-4447",
            'email' => "contato@clinicapersonnalite.com",
            'facebook' => "",
            'endereco_1' => "Av. Cel. Fernando Prestes, 350",
            'endereco_2' => "Edifício Columbus, Cj. 181 - Centro",
            'endereco_3' => "Santo André - SP - CEP 09020-110",
            'endereco_observacao' => "> Ao lado do Colégio Pentágono\n> Estacionamento gratuito no local",
            'maps' => "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1536.4836791061593!2d-46.530177183567474!3d-23.661840887934765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4289a332f94f%3A0x546484a0ab89de6e!2sR.+Cel.+Fernando+Prestes%2C+360+-+Vila+Assun%C3%A7%C3%A3o%2C+Santo+Andr%C3%A9+-+SP%2C+09020-110!5e0!3m2!1spt-BR!2sbr!4v1468855566074\" width=\"1920\" height=\"480\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>",
            'atendimento' => "Segunda a sexta: 8hs - 18hs"]
        ));
    }
}
