@extends('includes.principal')

@section('classe-pg', 'page-home')
@section('conteudo')
    <section class="section-home central row" id="home-section-1">
        <h1 class="titulo cor-vinho col-md-4">{{$textos[1]->titulo}}</h1>
        <div class="ctd-texto col-md-8"><?= $textos[1]->texto;?><br/><a href="/clinica" class="btn-reset">Conheça a clínica</a>
        </div>
    </section>
    <section class="section-home seta-vinho fundo-vinho">
        <div class="central">
            <h1 class="titulo">{{$textos[0]->titulo}}</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="foto-borda">
                        <img src="uploads/paginas/{{$textos[0]->foto}}" alt="{{$textos[0]->titulo}}"/>
                    </div>
                </div>
                <div class="ctd-texto col-md-6"><?= $textos[0]->texto;?><br/><a href="/especializacoes" class="btn-reset">Saiba Mais</a></div>
            </div>
        </div>
    </section>
@stop