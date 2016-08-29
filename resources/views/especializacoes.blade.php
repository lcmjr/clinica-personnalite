
@extends('includes.principal')

@section('classe-pg', 'page-especializacoes')
@section('conteudo')
    @include('chamadas.chamada-foto', ["texto" => $textos[0],"classes"=>"animate-in animate-x-neg"])
    @include('posts.posts', ["classes"=>"seta-vinho fundo-vinho animate-in animate-y-neg"])
@stop