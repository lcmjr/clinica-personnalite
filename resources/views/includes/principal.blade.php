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
    <base href="{{ asset('/') }}"/>
    <link rel="icon" href="imagens/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='css/all.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/padrao.js"></script>
    @yield('javascript')
</head>
<body class="@yield('classe-pg')">
<header class="seta-vinho" id="topo-principal">
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
        <a class="agende-consulta" href="/contato"></a>
        <a class="rede-facebook" target="_blank" href="{{$dados_contato[0]->facebook}}"></a>
        <button id="btn-menu-rpsv" class="hamburger hamburger--collapse" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <nav id="menu-principal">
            <a class="link-menu link-menu-home" href="/home">Home</a>
            <a class="link-menu link-menu-clinica" href="/clinica">A Clínica</a>
            <a class="link-menu link-menu-especializacoes" href="/especializacoes">Especializações</a>
            <a class="link-menu link-menu-doutores" href="/doutores">Doutores</a>
            <a class="link-menu link-menu-blog" href="/blog">Blog</a>
            <a class="link-menu link-menu-contato" href="/contato">Contato</a>
        </nav>
        <div class="clear"></div>
    </div>
</header>
@yield('conteudo')
<div class="borda-dashed" id="newsletter-box">
    <h3>Cadastre-se para receber novidades!</h3>
    <form action="/newsletter" method="post">
        <label for="nome-news">Nome:</label>
        <input id="nome-news" type="text" class="ipt-reset"/>
        <label for="email-news">Email:</label>
        <input id="email-news" type="email" class="ipt-reset"/>
        <button class="btn-reset">OK</button>
    </form>
</div>
<footer id="rodape">
    <div class="central">
        <div id="onde-estamos-rodape">
            <h2>Onde estamos?</h2>
            @include('includes.endereco')
        </div>
        <div id="fale-com-a-clinica-rodape">
            <h2>Fale com a clínica</h2>
            @include('includes.telefone-contato')<br/><br/>
            @include('includes.horario-atendimento')
        </div>
        <a class="agende-consulta" href="/contato"></a>
        <div class="clear"></div>
        <div id="copyright"><span>Clínica Personalité - Copyright 2016. Todos os direitos reservados.</span><a id="logo-youp" target="_blank" href="http://youp.com.br/"></a>
            <div class="clear"></div></div>
    </div>
</footer>
</body>
</html>