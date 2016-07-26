@extends('includes.principal')

@section('classe-pg', 'page-clinica')
@section('conteudo')
    <h1 class="titulo cor-vinho titulo-principal txt-center">A Clinica</h1>
    @include('chamadas.chamada-texto', ["titulo"=>$textos[0]->titulo,"texto" => $textos[0]->texto,"link"=>"especializacoes","link_txt"=>"Conheça nossas especializações"])
    @include('chamadas.chamada-foto', ["classes"=>"seta-vinho fundo-vinho","texto" => $textos[1]])
    @include('chamadas.chamada-texto-centro', ["titulo"=>$textos[2]->titulo,"texto" => $textos[2]->texto])
@stop