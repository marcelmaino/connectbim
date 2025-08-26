
@extends('template', ['title' => 'Política de Privacidade'])

@section('conteudo-site')

    <div class="capa">
        <img src="{{ asset('assets-site/img/capa-obras.jpg') }}" alt="">
        <div class="container">
            <h2>Política de Privacidade</h2>
        </div>
    </div>

    <div class="s-breadcrumbs">
        <div class="container">
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#" class="active">Política de Privacidade</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="s-institucional-interna">
        <div class="container">
            <div class="texto-interna">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>

<style>
.texto-interna p {
    font-size: 1.6rem;
    line-height: 150%;
    font-weight: 400;
    color: #858586;
    padding-bottom:50px;
}
</style>

@endsection

