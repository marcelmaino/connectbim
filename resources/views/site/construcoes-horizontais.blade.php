
@extends('template', ['title' => 'Construções Horizontais'])

@section('conteudo-site')

    <div class="capa">
        <img src="{{ asset('assets-site/img/capa-obras.jpg') }}" alt="">
        <div class="container">
            <h2>Construções Horizontais</h2>
        </div>
    </div>

    <div class="s-breadcrumbs">
        <div class="container">
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li><a>Serviços</a></li>
                    <li><a class="active">Construções horizontais</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="s-content-servicos">
        <div class="container">
            <div class="top">
                <div class="text">
                    <h2>Construções Horizontais</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Eu blandit aliquam laoreet tincidunt leo aliquam rhoncus orci. Etiam aliquam parturient eleifend augue in. At risus volutpat augue neque libero sit placerat vestibulum. Vel gravida duis ut sit donec eu tellus.
                        Placerat ac odio id cursus. In ipsum molestie id duis malesuada risus odio habitasse laoreet. Non sit morbi vitae leo imperdiet dui faucibus. Massa turpis placerat sed hendrerit nascetur. Orci et ante etiam risus volutpat sed.
                        Quisque amet sagittis at leo tellus vulputate mi morbi. Faucibus gravida morbi at euismod felis at eu. Tristique sed mus turpis malesuada. Sit parturient odio sed molestie cras non iaculis id. Arcu velit purus nisl ornare sed tortor pulvinar semper.
                        Dignissim praesent mattis id vestibulum cursus sollicitudin lectus. Lacinia eget amet a quisque tortor id in nunc. Turpis eu eget at molestie tellus ac. Sed molestie arcu semper et tortor dolor tellus. Mi quam morbi amet a ipsum viverra fringilla habitant.</p>
                </div>
                <div class="image">
                    <img src="{{ asset('assets-site/img/img-tab.jpg') }}" alt="#">
                </div>
            </div>
            <div class="bottom">
                <h3>Confira algumas construções horizontais desenvolvidas pela <b style="color:#3EACD2">ConnectBIM</b></h3>
                <div class="galeria">
                    <a data-fslightbox href="{{ asset('assets-site/img/img-obra-01.jpg') }}"><img src="{{ asset('assets-site/img/img-obra-01.jpg') }}" alt="#"></a>
                    <a data-fslightbox href="{{ asset('assets-site/img/img-obra-02.jpg') }}"><img src="{{ asset('assets-site/img/img-obra-02.jpg') }}" alt="#"></a>
                    <a data-fslightbox href="{{ asset('assets-site/img/img-obra-03.jpg') }}"><img src="{{ asset('assets-site/img/img-obra-03.jpg') }}" alt="#"></a>
                    <a data-fslightbox href="{{ asset('assets-site/img/img-obra-04.jpg') }}"><img src="{{ asset('assets-site/img/img-obra-04.jpg') }}" alt="#"></a>
                    <a data-fslightbox href="{{ asset('assets-site/img/img-obra-05.jpg') }}"><img src="{{ asset('assets-site/img/img-obra-05.jpg') }}" alt="#"></a>
                    <a data-fslightbox href="{{ asset('assets-site/img/img-obra-06.jpg') }}"><img src="{{ asset('assets-site/img/img-obra-06.jpg') }}" alt="#"></a>
                </div>
            </div>
        </div>
    </section>

@endsection
