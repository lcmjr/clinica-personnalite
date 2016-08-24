<section class="chamada chamada-foto {{$classes or ""}}">
    <div class="central">
        <h1 class="titulo">Publicações e novidades</h1>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4 post col-sm-4">
                <h3 class="titulo">{{$post['titulo']}}</h3>
                <div class="img-blog"><img src="{{$post['foto']}}" alt="{{$post['titulo']}}"/></div>
                <div class="ctd-post">
                    <p>{!!$post['texto']!!}</p>
                </div>
                <a href="{{$post['link']}}" class="btn-reset">Leia mais</a>
            </div>
            @endforeach
        </div>
    </div>
</section>