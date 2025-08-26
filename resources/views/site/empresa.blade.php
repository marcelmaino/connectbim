@extends('template', ['title' => 'Sobre a Empresa'])

@section('conteudo-site')

    <div class="capa">
        <img src="{{ asset('assets-site/img/capa-obras.jpg') }}" alt="">
        <div class="container">
            <h2>A ConnectBIM</h2>
        </div>
    </div>

    <div class="s-breadcrumbs">
        <div class="container">
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li><a href="{{ route('site.empresa') }}" class="active">A ConnectBIM</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="s-institucional-interna">
        <div class="container">
            <div class="right">
                <div class="text">
                    <h2>Nossa história <br> começa lá em 2009...</h2>
                    <p>Como Sigma-3Projetos e em 2017, com uma proposta de trabalho integrada viramos a ConnectBim Engenharia.</p>
                </div>
                <div class="text">
                    <h3>Campos de aplicações</h3>
                    <p>Desenvolvemos projetos de estruturas metálicas para os mais variados campos de aplicações, tais como setor industrial comercial e infraestrutura. Podemos destacar a área biodiesel, mineração e galpões nas aplicações industriais. No setor comercial destacam-se shopping centers, supermercados e prédios comerciais de múltiplos andares.</p>
                </div>
                <div class="text">
                    <h3>O nosso time</h3>
                    <p>Com uma equipe qualificada com formação acadêmica e sólida experiência profissional buscamos a excelência e qualidade total nos serviços fornecidos. Atendendo as necessidades e processos produtivos de cada cliente, honrando prazoscontratuais e custos adequados de mercado. </p>
                </div>
                <div class="text">
                    <h3>Softwares</h3>
                    <p>Utilizamos softwares atualizados que propiciam maior produtividade equalidade no desenvolvimento das atividades de projeto e cálculo. Trabalhamos emambiente tridimensional de forma a tirar as vantagens incontestáveis dessas ferramentas de projeto e cálculo, resultando em ganhos de qualidade e produtividade. Entregamos os desenhos em acordo com os padrões específicos de cada cliente, totalmente verificados de forma a eliminar ou a minimizar as chances de erros.</p>
                </div>
            </div>
            <div class="left">
                <div class="projetos">
                    <h3>Confira alguns dos projetos connectbim</h3>
                    @if (count($obras) > 0)
                    <div class="wrapper">
                        @foreach ($obras as $obra)
                            <a href="{{ route("site.obra",$obra->slug) }}" class="projeto">
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
                <div class="trabalhe-conosco">
                    <h4>Quer fazer parte da nossa equipe?</h4>
                    <p>Se você possui habilidades técnicas excepcionais e busca fazer parte de projetos inovadores que moldam o mundo ao nosso redor, venha construir conosco um futuro de excelência e solidez!</p>
                    <a href="{{ route('site.trabalhe-conosco') }}">ENVIE O SEU CURRÍCULO</a>
                </div>
                <div class="detalhe-2"></div>
            </div>
        </div>
        <div class="detalhe-1"></div>
    </div>

    <div class="s-timeline">
        <h3 class="title">Nossa História</h3>
        <div class="swiper swiperTimeline">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image">
                        <img src="{{ asset('assets-site/img/img-obra-01.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h3>2009</h3>
                        <p>Quando iniciamos as nossas atividades com o nome Sigma-3Projetos.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image">
                        <img src="{{ asset('assets-site/img/img-obra-01.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h3>2009</h3>
                        <p>Quando iniciamos as nossas atividades com o nome Sigma-3Projetos.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image">
                        <img src="{{ asset('assets-site/img/img-obra-01.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h3>2009</h3>
                        <p>Quando iniciamos as nossas atividades com o nome Sigma-3Projetos.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image">
                        <img src="{{ asset('assets-site/img/img-obra-01.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h3>2009</h3>
                        <p>Quando iniciamos as nossas atividades com o nome Sigma-3Projetos.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image">
                        <img src="{{ asset('assets-site/img/img-obra-01.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h3>2009</h3>
                        <p>Quando iniciamos as nossas atividades com o nome Sigma-3Projetos.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image">
                        <img src="{{ asset('assets-site/img/img-obra-01.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h3>2009</h3>
                        <p>Quando iniciamos as nossas atividades com o nome Sigma-3Projetos.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image">
                        <img src="{{ asset('assets-site/img/img-obra-01.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h3>2009</h3>
                        <p>Quando iniciamos as nossas atividades com o nome Sigma-3Projetos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
