<?php
/**
 * Created by PhpStorm.
 * User: luizm
 * Date: 19/07/2016
 * Time: 14:07
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinica Personnalité @yield('title')</title>
    <base href="http://localhost:8000"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet">
    <link href='css/padrao.css' rel='stylesheet' type='text/css'>
    <link href='css/topo.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/padrao.js"></script>
    @yield('javascript')
</head>
<body class="@yield('classe-pg')">
<header id="topo-principal">
    <div class="central">
        <div class="topo-barra borda-dashed">
            @include('includes.horario-atendimento')
            <div class="container-telefone">
                <div class="icone-telefone"></div>
                <div class="content-telefone">
                    @include('includes.telefone-contato')
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <a id="logo" href="/home"></a>
        <div id="btn-menu-rpsv" class="rpsv-mobile"></div>
        <nav id="menu-principal">
            <a class="link-menu link-menu-home" href="/home">Home</a>
            <a class="link-menu link-menu-clinica" href="/clinica">A Clínica</a>
            <a class="link-menu link-menu-especializacoes" href="/especializacoes">Especializações</a>
            <a class="link-menu link-menu-doutores" href="/doutores">Doutores</a>
            <a class="link-menu link-menu-blog" href="/blog">Blog</a>
            <a class="link-menu link-menu-contato" href="/contato">Contato</a>
        </nav>
        <a class="rede-facebook" target="_blank" href="{{$dados_contato[0]->facebook}}"></a>
        <a class="agende-consulta" href="/contato"></a>
        <div class="clear"></div>
    </div>
</header>
@yield('conteudo')
</body>
</html>