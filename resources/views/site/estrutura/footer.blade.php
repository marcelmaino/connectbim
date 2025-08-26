
    <footer>
        <div class="container">
            <div class="topo">
                <div class="sobre">
                <div class="logo">
                    <img src="{{ asset('assets-site/img/logo.png') }}" alt="Logo ConnectBIM">
                </div>
                <p>Desenvolvemos projetos de estruturas metálicas para os mais variados campos de aplicações, tais como setor industrial comercial e infraestrutura.</p>
                </div>
                <div class="infos">
                <div class="info">
                    <h3>Endereço</h3>
                    <p>Av. Presidente Vargas, 770, Marau-RS - Brasil</p>
                </div>
                <div class="info">
                    <h3>Telefones</h3>
                    <p>+55 (54) 9.9999-9999</p>
                    <p>+55 (54) 9.9999-9999</p>
                </div>
                </div>
                <nav class="servicos">
                <h3>Serviços</h3>
                <ul>
                    <li><a href="{{ route('site.construcoes-horizontais') }}">Construções horizontais</a></li>
                    <li><a href="{{ route('site.multiandares') }}">Multiandares</a></li>
                    <li><a href="{{ route('site.projetos-especiais') }}">Projetos especiais</a></li>
                    <li><a href="{{ route('site.estruturas-de-processo') }}">Estruturas de processo</a></li>
                    <li><a href="{{ route('site.infraestrutura') }}">Infraestrutura</a></li>
                </ul>
                </nav>
                <div class="navs">
                <nav>
                    <h3>Institucional</h3>
                    <ul>
                    <li><a href="{{ route('site.empresa') }}">A ConnectBIM</a></li>
                    <li><a href="{{ route('site.obras') }}">Obras realizadas</a></li>
                    </ul>
                </nav>
                <nav>
                    <h3>Relacionamento</h3>
                    <ul>
                    <li><a href="{{ route('site.contato') }}">Fale conosco</a></li>
                    <li><a href="{{ route('site.trabalhe-conosco') }}">Trabalhe conosco</a></li>
                    </ul>
                </nav>
                </div>
            </div>
            <div class="bottom">
                <div class="copy">
                <p>© 2023 Connect BIM.<br> Todos os direitos reservados.</p>
                </div>
                <nav>
                <ul>
                    <li><a href="{{ route('site.termos-de-uso') }}">Termos de uso</a></li>
                    <li><a href="{{ route('site.politica-de-privacidade') }}">Privacidade</a></li>
                </ul>
                </nav>
                <div class="redes">
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
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets-site/js/plugins.js') }}"></script>
    <script src="{{ asset('assets-site/js/all.js') }}"></script>
</body>

</html>
