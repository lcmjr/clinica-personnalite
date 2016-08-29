@extends('includes.principal')

@section('classe-pg', 'page-doutores')
@section('conteudo')
    @include('chamadas.chamada-texto-centro', ["titulo"=>$textos[0]->titulo,"texto" => $textos[0]->texto])
    <div class="central container-doutores">
    @foreach($doutores as $doutor)
        <div class="doutor row animate-in animate-y-pos">
            <div class="col-md-5">
            @include('includes.foto-borda', ["path"=>"uploads/doutor/","foto" => $doutor->foto, "classe_tamanho"=> "foto-borda-m", "titulo" =>$doutor->doutor])
            </div>
            <div class="ctd-doutor col-md-7">
                <div class="ctd-texto"><h2 class="titulo cor-verde">{{$doutor->doutor}}</h2>{!!$doutor->texto!!} </div>
            </div>
        </div>
    @endforeach
    </div>
    @include('chamadas.chamada-foto', ["classes"=>"seta-vinho fundo-vinho animate-in animate-y-neg","texto" => $textos[1]])
@stop