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
    <article class="chamada-texto chamada-foto seta-vinho fundo-vinho">
        <div class="central">
            <h1 class="titulo">{{$textos[1]->titulo}}</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="foto-borda">
                        <img src="uploads/paginas/{{$textos[1]->foto}}" alt="{{$textos[1]->titulo}}"/>
                    </div>
                </div>
                <div class="ctd-texto col-md-6"><?= $textos[1]->texto;?></div>
            </div>
        </div>
    </article>
    <article class="chamada-texto central">
        <h1 class="titulo cor-vinho">{{$textos[2]->titulo}}</h1>
        <div class="ctd-texto txt-center"><?= $textos[2]->texto;?></div>
    </article>
@stop