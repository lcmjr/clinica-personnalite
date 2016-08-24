
@extends('includes.principal')

@section('classe-pg', 'page-especializacoes')
@section('conteudo')
    @include('chamadas.chamada-foto', ["texto" => $textos[0]])
    @include('posts.posts', ["classes"=>"seta-vinho fundo-vinho"])
@stop