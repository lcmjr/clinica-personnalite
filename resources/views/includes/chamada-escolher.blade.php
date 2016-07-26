<section class="chamada-texto chamada-foto seta-vinho fundo-vinho">
    <div class="central">
        <h1 class="titulo">{{$texto->titulo}}</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="foto-borda">
                    <img src="uploads/paginas/{{$texto->foto}}" alt="{{$texto->titulo}}"/>
                </div>
            </div>
            <div class="ctd-texto col-md-6"><?= $texto->texto;?></div>
        </div>
    </div>
</section>