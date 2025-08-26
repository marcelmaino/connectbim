@extends('template', ['title' => 'Contato com sucesso!'])

@section('conteudo-site')

    <div class="capa">
        <img src="{{ asset('assets-site/img/capa-obras.jpg') }}" alt="">
        <div class="container">
            <h2>Contato</h2>
        </div>
    </div>

    <div class="s-breadcrumbs">
        <div class="container">
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#" class="active">Contato</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="s-contato">
        <div class="container">
            <div class="sucesso">
                <h1 style="font-weight: 600; font-size: 30px;">Agradecemos o seu contato, em breve retornaremos!</h1>
                <a href="{{ route('site.index') }}" class="bt">CONTINUAR NAVEGANDO</a>
            </div>
        </div>
        </div>
    </section>

<style>
.sucesso{
    padding: 80px 0;
}
.bt {
    background-color: #001E51;
    color: #fff;
    padding: 14px 30px;
    float: left;
    text-align: center;
}
</style>
@endsection
