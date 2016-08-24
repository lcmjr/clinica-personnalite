@extends('includes.principal')

@section('classe-pg', 'page-home')
@section('javascript')
<script type="text/javascript" src="js/banner.js"></script>
@stop
@section('conteudo')
<div class="container-banner central">
    <?php $contador_banner=0;?>
    @foreach($banners as $banner)
        <img class="banner" data-banner="<?= $contador_banner++;?>" alt="" src="uploads/banner/{{$banner->banner}}"/>
    @endforeach
    <div class="clear"></div>
</div>
<div id="container-controle-banner"></div>
@include('chamadas.chamada-texto', ["titulo"=>$textos[1]->titulo,"texto" => $textos[1]->texto,"link"=>"clinica","link_txt"=>"Conheça a clínica"])
@include('chamadas.chamada-foto', ["classes"=>"seta-vinho fundo-vinho","texto" => $textos[0],"link"=>"especializacoes","link_txt"=>"Saiba Mais"])
@include('posts.posts',['posts'=>$posts,'classes'=>'posts-blog-white'])
@stop