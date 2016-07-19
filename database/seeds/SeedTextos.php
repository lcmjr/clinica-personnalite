<?php

use Illuminate\Database\Seeder;

class SeedTextos extends Seeder{

    public function run(){
        DB::table('textos')->insert(array(
            [ 'titulo' => "Porque um sorriso muda tudo!",
                'texto' => "<p>A Clínica Personnalité é uma clínica odontológica referência em Implantodontia e Estética.Amparados por tecnologia de 
                ponta, procuramos oferecer um atendimento personalizado e o tratamento mais adequado às necessidades e expectativas do paciente.</p>
                <p>Sempre primamos pela excelência, trabalhamos em prol da reabilitação oral e dos aspectos estéticos do sorriso.</p>
                <p>Nossa maior satisfação é poder restabelecer a autoconfiança e auto-estima dos pacientes assistidos.</p>",
                'foto' => ""],
            [ 'titulo' => "Por que escolher a Personnalité?",
                'texto' => "<p>&bull; Sistema Nobel Guide: Cirurgia Planejada no computador, sem sutura e sem grandes incisões, possibilitando um 
                            melhor pós-operatório.</p>
                            <p>&bull; Equipamentos e materiais odontológicos de última geração.</p>
                            <p>&bull; Equipe comprometida com o estudo de cada caso, procurando sempre apontar todas as alternativas de tratamento,
                             tendo como premissas a qualidade, a durabilidade e a atenção às expectativas do paciente.</p>
                            <p>&bull; Preocupação constante com a biossegurança. </p>
                            <p>&bull; Ambiente confortável e seguro. </p>
                            <p>&bull; Atendimento personalizado. </p>
                            <p>&bull; Condições facilitadas de pagamento. </p>
                            <p>&bull; Excelente localização e facilidade de acesso. </p>
                            <p>&bull; Estacionamento com manobrista e seguro.</p>",
                'foto' => "1.jpg"],
            [ 'titulo' => "Instalações!",
                'texto' => "<p>Inaugurada em abril de 2006, a Clínica Personnalité conta com modernas instalações, planejadas especialmente para 
                            proporcionar o melhor nível de conforto e segurança aos pacientes.</p>
                            <p>Localizada no luxuoso Edifício Columbus, no centro de Santo André - SP, contamos com estrutura confortável e um 
                            ambiente totalmente agradável, além de estacionamento com manobrista e seguro.</p>
                            <p>Responsabilidade Técnica: Dr. Josemar Lucas Pereira da Cruz Oliveira Registro no CRO 
                            (Conselho Regional de Odontologia): 8541</p>",
                'foto' => ""],
            [ 'titulo' => "Saúde e bem-estar: dois excelentes motivos para sorrir",
                'texto' => "<p>A Clínica Personalité é uma clínica odontológica referência em Implantodontia e Estética. Amparados por 
                            tecnologia de ponta, procuramos oferecer um atendimento personalizado e o tratamento mais adequado às necessidades e 
                            expectativas do paciente.</p>
                            <p>Sempre primamos pela excelência, trabalhamos em prol da reabilitação oral e dos aspectos estéticos do sorriso.</p>",
                'foto' => ""],
            [ 'titulo' => "Especializações",
                'texto' => "<p>Nossa maior satisfação é poder restabelecer a autoconfiança e auto-estima dos pacientes assistidos.</p>
                            <p>Confira alguns procedimentos que realizamos:</p>
                            <p>&bull; Implantes osseointegrados</p>
                            <p>&bull; Restaurações estéticas e funcionais </p>
                            <p>&bull; Plástica gengival </p>
                            <p>&bull; Próteses </p>
                            <p>&bull; Próteses sobre implantes </p>
                            <p>&bull; Carga Imediata </p>
                            <p>&bull; Facetas Laminadas (lentes de contato)</p>
                            <p>&bull; Tratamento endodôntico</p>
                            <p>&bull; Periodontia e prevenção</p>
                            <p>&bull; Cirurgia oral menor</p>",
                'foto' => "2.jpg"],
            [ 'titulo' => "Excelência, qualidade e pontualidade do início ao fim",
                'texto' => "<p>Procedimentos que realizamos:</p>
                            <p>&bull; Implantes osseointegrados</p>
                            <p>&bull; Restaurações estéticas e funcionais </p>
                            <p>&bull; Plástica gengival </p>
                            <p>&bull; Próteses </p>
                            <p>&bull; Próteses sobre implantes </p>
                            <p>&bull; Carga Imediata </p>
                            <p>&bull; Facetas Laminadas (lentes de contato)</p>
                            <p>&bull; Tratamento endodôntico</p>
                            <p>&bull; Periodontia e prevenção</p>
                            <p>&bull; Cirurgia oral menor</p>",
                'foto' => "3.jpg"],
            [ 'titulo' => "Doutores!",
                'texto' => "<p>A Clínica Personnalité conta com profissionais especializados e compromissados com a atualização constante de seus 
                            conhecimentos, bem como acesso a materiais e equipamentos de primeira linha e as mais avançadas técnicas clínicas e 
                            cirúrgicas.</p>",
                'foto' => ""],
        ));
    }
}
