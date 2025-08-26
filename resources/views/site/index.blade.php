@extends('template')

@section('conteudo-site')

  <section class="s-institucional">
      <div class="container">
        <div class="right">
          <div class="title">
            <h3>Conheça a empresa</h3>
            <h2>A ConnectBIM</h2>
          </div>
          <div class="text">
            <p>Desenvolvemos projetos de estruturas metálicas para os mais variados campos de aplicações, tais como setor industrial comercial e infraestrutura. Podemos destacar a área biodiesel, mineração e galpões nas aplicações industriais. No setor comercial destacam-se shopping centers, supermercados e prédios comerciais de múltiplos andares.</p>
          </div>
          <div class="infos">
            <div class="info">
              <h3><span class="n-anos"></span> anos</h3>
              <p>de experiência</p>
            </div>
            <div class="info">
              <h3><span class="n-projetos"></span> projetos</h3>
              <p>executados e entregues</p>
            </div>
          </div>
        </div>
        <div class="left">
          <div class="image">
            <img class="engenheiro" src="{{ asset('assets-site/img/img-engenheiro.png') }}" alt="Engenheiro">
            <img class="fundo" src="{{ asset('assets-site/img/img-fundo-engenheiro.png') }}" alt="Fundo Engenheiro">
          </div>
          <a href="{{ route('site.contato') }}" class="link">Estou interessado, quero orçar um projeto</a>
        </div>
        <div class="detalhe-2"></div>
        <div class="detalhe-3"></div>
      </div>
      <div class="detalhe-1"></div>
  </section>

  <section class="s-servicos">
    <div class="container">
      <div class="detalhe">
        <img src="{{ asset('assets-site/img/icon-chevrons-down.svg') }}" alt="Setas para baixo">
      </div>
      <div class="right">
        <div class="title">
          <h3>Nossas competências</h3>
          <h2>Como nosso time trabalha</h2>
        </div>
        <div class="text">
          <p>Atendendo as necessidades e processos produtivos de cada cliente, honrando prazos contratuais e custos adequados de mercado</p>
        </div>
        <a href="{{ route('site.contato') }}" class="style-btn">Estou interessado, quero orçar um projeto</a>
      </div>
      <div class="left">
        <div class="accordion-container">
          <div class="ac">
            <h2 class="ac-header">
              <button type="button" class="ac-trigger"><img src="{{ asset('assets-site/img/icon-concepcao.svg') }}" alt=""> Concepção estrutural e dimensionamento</button>
            </h2>
            <div class="ac-panel">
              <p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="ac">
            <h2 class="ac-header">
              <button type="button" class="ac-trigger"><img src="{{ asset('assets-site/img/icon-projeto.svg') }}" alt=""> Projeto básico / executivo</button>
            </h2>
            <div class="ac-panel">
              <p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="ac">
            <h2 class="ac-header">
              <button type="button" class="ac-trigger"><img src="{{ asset('assets-site/img/icon-detalhamento.svg') }}" alt=""> Detalhamento de fabricação e montagem</button>
            </h2>
            <div class="ac-panel">
              <p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="ac">
            <h2 class="ac-header">
              <button type="button" class="ac-trigger"><img src="{{ asset('assets-site/img/icon-bim.svg') }}" alt=""> Compatibilização de projetos na metodologia BIM</button>
            </h2>
            <div class="ac-panel">
              <p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="s-projetos">
    <div class="detalhe-2"></div>
    <div class="container">
      <div class="detalhe"></div>

      <div class="title">
        <h2>Atendemos diversos tipos de projetos</h2>
        <p>Lorem ipsum dolor sit amet consectetur. Vitae pharetra
          euismod morbi integer sed magnis urna velit elementum</p>
      </div>

      <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'Horizontais')">Construções horizontais</button>
        <button class="tablinks" onclick="openCity(event, 'Multiandares')">Multiandares</button>
        <button class="tablinks" onclick="openCity(event, 'Especiais')">Projetos especiais</button>
        <button class="tablinks" onclick="openCity(event, 'Estruturas')">Estruturas de processo</button>
        <button class="tablinks" onclick="openCity(event, 'Infraestrutura')">Infraestrutura</button>
      </div>

      <div id="Horizontais" class="tabcontent" style="display: block;">
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur. Eu blandit aliquam laoreet tincidunt leo aliquam rhoncus orci. Etiam aliquam parturient eleifend augue in. At risus volutpat augue neque libero sit placerat vestibulum. Vel gravida duis ut sit donec eu tellus.
            Placerat ac odio id cursus. In ipsum molestie id duis malesuada risus odio habitasse laoreet. Non sit morbi vitae leo imperdiet dui faucibus. Massa turpis placerat sed hendrerit nascetur. Orci et ante etiam risus volutpat sed.
            Quisque amet sagittis at leo tellus vulputate mi morbi. Faucibus gravida morbi at euismod felis at eu. Tristique sed mus turpis malesuada. Sit parturient odio sed molestie cras non iaculis id. Arcu velit purus nisl ornare sed tortor pulvinar semper.
            Dignissim praesent mattis id vestibulum cursus sollicitudin lectus. Lacinia eget amet a quisque tortor id in nunc. Turpis eu eget at molestie tellus ac. Sed molestie arcu semper et tortor dolor tellus. Mi quam morbi amet a ipsum viverra fringilla habitant.</p>
          <img src="{{ asset('assets-site/img/img-tab.jpg') }}" alt="">
        </div>
      </div>

      <div id="Multiandares" class="tabcontent">
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur. Eu blandit aliquam laoreet tincidunt leo aliquam rhoncus orci. Etiam aliquam parturient eleifend augue in. At risus volutpat augue neque libero sit placerat vestibulum. Vel gravida duis ut sit donec eu tellus.
            Placerat ac odio id cursus. In ipsum molestie id duis malesuada risus odio habitasse laoreet. Non sit morbi vitae leo imperdiet dui faucibus. Massa turpis placerat sed hendrerit nascetur. Orci et ante etiam risus volutpat sed.
            Quisque amet sagittis at leo tellus vulputate mi morbi. Faucibus gravida morbi at euismod felis at eu. Tristique sed mus turpis malesuada. Sit parturient odio sed molestie cras non iaculis id. Arcu velit purus nisl ornare sed tortor pulvinar semper.
            Dignissim praesent mattis id vestibulum cursus sollicitudin lectus. Lacinia eget amet a quisque tortor id in nunc. Turpis eu eget at molestie tellus ac. Sed molestie arcu semper et tortor dolor tellus. Mi quam morbi amet a ipsum viverra fringilla habitant.</p>
          <img src="{{ asset('assets-site/img/img-tab.jpg') }}" alt="">
        </div>
      </div>

      <div id="Especiais" class="tabcontent">
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur. Eu blandit aliquam laoreet tincidunt leo aliquam rhoncus orci. Etiam aliquam parturient eleifend augue in. At risus volutpat augue neque libero sit placerat vestibulum. Vel gravida duis ut sit donec eu tellus.
            Placerat ac odio id cursus. In ipsum molestie id duis malesuada risus odio habitasse laoreet. Non sit morbi vitae leo imperdiet dui faucibus. Massa turpis placerat sed hendrerit nascetur. Orci et ante etiam risus volutpat sed.
            Quisque amet sagittis at leo tellus vulputate mi morbi. Faucibus gravida morbi at euismod felis at eu. Tristique sed mus turpis malesuada. Sit parturient odio sed molestie cras non iaculis id. Arcu velit purus nisl ornare sed tortor pulvinar semper.
            Dignissim praesent mattis id vestibulum cursus sollicitudin lectus. Lacinia eget amet a quisque tortor id in nunc. Turpis eu eget at molestie tellus ac. Sed molestie arcu semper et tortor dolor tellus. Mi quam morbi amet a ipsum viverra fringilla habitant.</p>
          <img src="{{ asset('assets-site/img/img-tab.jpg') }}" alt="">
        </div>
      </div>

      <div id="Estruturas" class="tabcontent">
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur. Eu blandit aliquam laoreet tincidunt leo aliquam rhoncus orci. Etiam aliquam parturient eleifend augue in. At risus volutpat augue neque libero sit placerat vestibulum. Vel gravida duis ut sit donec eu tellus.
            Placerat ac odio id cursus. In ipsum molestie id duis malesuada risus odio habitasse laoreet. Non sit morbi vitae leo imperdiet dui faucibus. Massa turpis placerat sed hendrerit nascetur. Orci et ante etiam risus volutpat sed.
            Quisque amet sagittis at leo tellus vulputate mi morbi. Faucibus gravida morbi at euismod felis at eu. Tristique sed mus turpis malesuada. Sit parturient odio sed molestie cras non iaculis id. Arcu velit purus nisl ornare sed tortor pulvinar semper.
            Dignissim praesent mattis id vestibulum cursus sollicitudin lectus. Lacinia eget amet a quisque tortor id in nunc. Turpis eu eget at molestie tellus ac. Sed molestie arcu semper et tortor dolor tellus. Mi quam morbi amet a ipsum viverra fringilla habitant.</p>
          <img src="{{ asset('assets-site/img/img-tab.jpg') }}" alt="">
        </div>
      </div>

      <div id="Infraestrutura" class="tabcontent">
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur. Eu blandit aliquam laoreet tincidunt leo aliquam rhoncus orci. Etiam aliquam parturient eleifend augue in. At risus volutpat augue neque libero sit placerat vestibulum. Vel gravida duis ut sit donec eu tellus.
            Placerat ac odio id cursus. In ipsum molestie id duis malesuada risus odio habitasse laoreet. Non sit morbi vitae leo imperdiet dui faucibus. Massa turpis placerat sed hendrerit nascetur. Orci et ante etiam risus volutpat sed.
            Quisque amet sagittis at leo tellus vulputate mi morbi. Faucibus gravida morbi at euismod felis at eu. Tristique sed mus turpis malesuada. Sit parturient odio sed molestie cras non iaculis id. Arcu velit purus nisl ornare sed tortor pulvinar semper.
            Dignissim praesent mattis id vestibulum cursus sollicitudin lectus. Lacinia eget amet a quisque tortor id in nunc. Turpis eu eget at molestie tellus ac. Sed molestie arcu semper et tortor dolor tellus. Mi quam morbi amet a ipsum viverra fringilla habitant.</p>
          <img src="{{ asset('assets-site/img/img-tab.jpg') }}" alt="">
        </div>
      </div>

    </div>
  </section>

  <section class="s-obras">
    <div class="container">
      <div class="title">
        <div class="right">
          <h3>Obras realizadas</h3>
          <h2>Nossos projetos em destaque</h2>
        </div>
        <div class="left">
          <a href="{{ route('site.obras') }}" class="style-btn">Ver todas as obras</a>
        </div>
      </div>
    </div>
    @if (count($obras) > 0)
        <div class="obras">
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
        <div class="container"> Sem obras cadastrados</div>
    @endif
  </section>

@endsection
