@extends('includes.principal')

@section('classe-pg', 'page-clinica')
@section('conteudo')
    <article class="chamada-texto central row">
        <h1 class="titulo cor-vinho titulo-principal">A Clinica</h1>
        <h1 class="titulo cor-vinho col-md-4">{{$textos[0]->titulo}}</h1>
        <div class="ctd-texto col-md-8"><?= $textos[0]->texto;?><br/><a href="/especializacoes" class="btn-reset">Conheça nossas especializações</a>
            <br/>
        </div>
    </article>
    @include('includes.chamada-escolher', ["texto" => $textos[1]])
    <article class="chamada-texto central">
        <h1 class="titulo cor-vinho">{{$textos[2]->titulo}}</h1>
        <div class="ctd-texto txt-center"><?= $textos[2]->texto;?></div>
    </article>
@stop