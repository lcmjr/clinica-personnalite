@extends('includes.principal')

@section('classe-pg', 'page-doutores')
@section('conteudo')
    <article class="chamada-texto central">
        <h1 class="titulo cor-vinho">{{$textos[0]->titulo}}</h1>
        <div class="ctd-texto txt-center"><?= $textos[0]->texto;?></div>
    </article>
@stop