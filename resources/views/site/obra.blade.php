@extends('template', ['title' => 'Obra'])

@section('conteudo-site')

    <section class="obra-interna">
        <div class="blue"></div>
        <div class="detalhe-1"></div>
        <div class="container">
            <div class="detalhe-2"></div>
            <div class="detalhe-3"></div>
        </div>
        <div class="container">
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li><a href="{{ route('site.obras') }}">Obras realizadas</a></li>
                    <li><a>{{ $obra->titulo }}</a></li>
                </ul>
            </nav>

            @if ($obra->galeria)
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach (json_decode($obra->galeria) as $img)
                            <div class="swiper-slide">
                                <a data-fslightbox href="{{ Voyager::image($img) }}">
                                    <img src="{{ Voyager::image($obra->getThumbnail($img, 'medium')) }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev">
                        <i class="icon-prev"></i>
                    </div>
                    <div class="swiper-button-next">
                        <i class="icon-next"></i>
                    </div>
                </div>
            @endif
            <div class="buttons-swiper">
                <h1>{{ $obra->titulo }}</h1>
                <div class="buttons">
                    <div class="custom-swiper-button-prev">
                        <i class="icon-prev"></i>
                    </div>
                    <div class="custom-swiper-button-next">
                        <i class="icon-next"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="infos">
            <div class="container">
                <div class="infos-wrapper">
                    <div class="card">
                        <div class="icon">
                            <img src="{{ asset('assets-site/img/icon-cliente.svg') }}" alt="">
                        </div>
                        <h3>Cliente</h3>
                        <p>{{ $obra->cliente }}</p>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img src="{{ asset('assets-site/img/icon-peso.svg') }}" alt="">
                        </div>
                        <h3>Peso da estrutura</h3>
                        <p>{{ $obra->peso }}</p>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img src="{{ asset('assets-site/img/icon-local.svg') }}" alt="">
                        </div>
                        <h3>Local da obra</h3>
                        <p>{{ $obra->local }}</p>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img src="{{ asset('assets-site/img/icon-software.svg') }}" alt="">
                        </div>
                        <h3>Softwares usados</h3>
                        <p>{{ $obra->softwares }}</p>
                    </div>
                    <div class="detalhe-info"></div>
                </div>
                <div class="detalhes">
                    <div class="detalhe-infos-1"></div>
                    <div class="detalhe-infos-2"></div>
                    <div class="detalhe-infos-3"></div>
                    <div class="infos">
                        <div class="text">
                            {!! $obra->descricao !!}
                        </div>
                    </div>
                    <div class="cta">
                        <h3>Precisando de um projeto?</h3>
                        <p>Atendendo as necessidades e processos produtivos de cada cliente, honrando prazos contratuais e custos adequados de mercado.</p>
                        <a href="{{ route('site.contato') }}" class="style-btn">Orçar um projeto</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


