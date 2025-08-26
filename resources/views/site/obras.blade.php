@extends('template', ['title' => 'Obras'])

@section('conteudo-site')

<div class="capa">
    <img src="{{ asset('assets-site/img/capa-obras.jpg') }}" alt="">
    <div class="container">
        <h2>Obras realizadas</h2>
    </div>
</div>

<div class="s-breadcrumbs">
    <div class="container">
        <nav class="breadcrumbs">
            <ul>
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li><a href="{{ route('site.obras') }}" class="active">Obras realizadas</a></li>
            </ul>
        </nav>
    </div>
</div>

<section class="s-obras">
    <div class="container">
        @if (count($obras) > 0)
            <div class="obras-interna">
                @foreach ($obras as $obra)
                    <a href="{{ route("site.obra",$obra->slug) }}" class="obra">
                        <div class="image">
                            <img src="{{ Voyager::image($obra->getThumbnail($obra->imagem, 'img-medium')) }}" alt="">
                        </div>
                        <div class="info">
                            <h3>{{ $obra->titulo }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div> Sem obras cadastrados</div>
        @endif
    </div>
</section>

@endsection
