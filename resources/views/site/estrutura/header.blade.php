<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('assets-site/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-site/css/main.css') }}">
  <link rel="shortcut icon" href="{{ asset('assets-site/img/favicon.png') }}" type="image/png">
  <title>ConnectBIM - Projetos de estruturas metálicas</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <div class="container">
            <div class="top">
                <div class="right">
                <div class="info">
                    <img src="{{ asset('assets-site/img/icon-tel.svg') }}" alt="Icone de telefone">
                    <p>+55 (54) 9.9999-9999</p>
                </div>
                <div class="info">
                    <img src="{{ asset('assets-site/img/icon-mail.svg') }}" alt="Icone de e-mail">
                    <p>contato@connectbim.com.br</p>
                </div>
                <div class="info">
                    <div class="icon">
                    <img src="{{ asset('assets-site/img/icon-map-pin.svg') }}" alt="Icone de pin">
                    </div>
                    <p>Av. Presidente Vargas, 770, Marau-RS - Brasil</p>
                </div>
                </div>
                <div class="left">
                <div class="redes">
                    <p>Acompanhe nossos lançamentos</p>
                    <a href="#" class="icon">
                    <img src="{{ asset('assets-site/img/icon-instagram.svg') }}" alt="Logo do Instagram">
                    </a>
                    <a href="#" class="icon">
                    <img src="{{ asset('assets-site/img/icon-facebook.svg') }}" alt="Logo do Facebook">
                    </a>
                    <a href="#" class="icon">
                    <img src="{{ asset('assets-site/img/icon-linkedin.svg') }}" alt="Logo do Linkedin">
                    </a>
                    <a href="#" class="icon">
                    <img src="{{ asset('assets-site/img/icon-youtube.svg') }}" alt="Logo do Youtube">
                    </a>
                </div>
                </div>
            </div>
            <nav>
                <a href="{{ route('site.index') }}" class="logo">
                <img src="{{ asset('assets-site/img/logo.png') }}" alt="Logo ConnectBIM">
                </a>
                <ul>
                <li>
                    <a href="{{ route('site.index') }}" class="active">Inicial</a>
                </li>
                <li>
                    <a href="{{ route('site.empresa') }}">A Connect Bim</a>
                </li>
                <li>
                    <a href="{{ route('site.obras') }}">Obras realizadas</a>
                </li>
                <li>
                    <button>Serviços <i class="icon-chevron"></i></button>
                    <ul class="dropdown">
                    <li><a href="{{ route('site.construcoes-horizontais') }}">Construções horizontais</a></li>
                    <li><a href="{{ route('site.multiandares') }}">Multiandares</a></li>
                    <li><a href="{{ route('site.projetos-especiais') }}">Projetos especiais</a></li>
                    <li><a href="{{ route('site.estruturas-de-processo') }}">Estruturas de processo</a></li>
                    <li><a href="{{ route('site.infraestrutura') }}">Infraestrutura</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('site.trabalhe-conosco') }}">Trabalhe conosco</a>
                </li>
                <li>
                    <a href="{{ route('site.contato') }}">Fale conosco</a>
                </li>
                </ul>
                <button class="btn-menu" id="js-btn-menu">
                    <p>MENU</p>
                    <!-- <div class="icon-menu"></div> -->
                    <a class="nav-icon" tabindex="0" title="menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </button>
            </nav>
        </div>
    </header>

    <div class="menu">
            <div class="overlay js-overlay"></div>
            <aside>
                <div class="logo"></div>
                <ul>
                    <li><a class="link-main" href="{{ route('site.index') }}">Inicial</a></li>
                    <li><a class="link-main" href="{{ route('site.empresa') }}">A ConnectBIM</a></li>
                    <li><a class="link-main" href="{{ route('site.obras') }}">Obras realizadas</a></li>
                    <li class="main">
                        <p class="link-main">Serviços <span class="chevron"></span></p>
                        <ul class="submenu">
                            <li><a href="{{ route('site.construcoes-horizontais') }}">Construções horizontais</a></li>
                            <li><a href="{{ route('site.multiandares') }}">Multiandares</a></li>
                            <li><a href="{{ route('site.projetos-especiais') }}">Projetos especiais</a></li>
                            <li><a href="{{ route('site.estruturas-de-processo') }}">Estruturas de processo</a></li>
                            <li><a href="{{ route('site.infraestrutura') }}">Infraestrutura</a></li>
                        </ul>
                    </li>
                    <li><a class="link-main" href="{{ route('site.trabalhe-conosco') }}">Trabalhe conosco</a></li>
                    <li><a class="link-main" href="{{ route('site.contato') }}">Fale conosco</a></li>
                </ul>
            </aside>
        </div>
