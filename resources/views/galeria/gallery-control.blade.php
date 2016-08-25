<div class="hidden-container-imgs-controle" data-qty="{{count($fotos)}}">
    <div class="arrow-gallery arrow-gallery-1"></div>
    <div class="container-imgs-controle">
        @foreach($fotos as $key=>$foto)
            <img src="uploads/galeria/{{$foto['foto-pequena']}}" data-key="{{$key}}" alt="{{$foto->titulo}}" data-foto="{{$foto['foto-grande']}}" draggable="false"/>
        @endforeach
    </div>
    <div class="arrow-gallery arrow-gallery-2"></div>
</div>