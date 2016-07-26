
@extends('includes.principal')

@section('classe-pg', 'page-especializacoes')
@section('conteudo')
    <article class="chamada-texto chamada-foto">
        <div class="central">
            <h1 class="titulo cor-vinho">{{$textos[0]->titulo}}</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="foto-borda">
                        <img src="uploads/paginas/{{$textos[0]->foto}}" alt="{{$textos[0]->titulo}}"/>
                    </div>
                </div>
                <div class="ctd-texto col-md-6"><?= $textos[0]->texto;?></div>
            </div>
        </div>
    </article>
@stop