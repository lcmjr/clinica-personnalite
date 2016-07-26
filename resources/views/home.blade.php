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
<div id="container-controle-banner">
</div>
@stop