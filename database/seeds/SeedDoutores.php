<?php

use Illuminate\Database\Seeder;

class SeedDoutores extends Seeder{

    public function run(){
        DB::table('secao_home')->insert(array(
            [ 'titulo' => "Dr. Josemar Lucas Pereira  da Cruz Oliveira",
                'texto' => "&bull; Cirurgião Dentista<br/>&bull; Especialista em Implantodontia<br/>
&bull; Especialista em Plástica Periodontal<br/>&bull; Professor do Curso de Especialização em Implantodontia<br/>da APCD de Santo André.",
                'foto' => "1.jpg"],
            [ 'titulo' => "Dr. Antônio Alberto de Macedo",
                'texto' => "&bull; Cirurgião Dentista<br/>&bull; Especialista em Periodontia e Prevenção.<br/>
&bull; Especialista em Plástica Periodontal<br/>&bull; Professor do Curso de Atualização em Implantodontia<br/>da APCD de Santo André.",
                'foto' => "2.jpg"],
            [ 'titulo' => "Dr. Paulo de Tarso Zacarias Chacon",
                'texto' => "&bull; Cirurgião Dentista<br/>&bull; Pós Graduado pela USP<br/>&bull; Ex-Docente da USP e da UMESP.",
                'foto' => "3.jpg"]
        ));
    }
}
