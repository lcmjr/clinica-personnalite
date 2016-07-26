<section class="chamada chamada-foto {{$classes or ""}}">
    <div class="central">
        <h1 class="titulo">{{$texto->titulo}}</h1>
        <div class="row">
            <div class="col-md-6">
                @include('includes.foto-borda', ["foto" => $texto->foto, "classe_tamanho"=> "foto-borda-g", "titulo" =>$texto->titulo])
            </div>
            <div class="ctd-texto col-md-6">{!!$texto->texto!!}
                @if (isset($link))
                    <a href="{{$link}}" class="btn-reset">{{$link_txt}}</a>
                @endif
            </div>
        </div>
    </div>
</section>