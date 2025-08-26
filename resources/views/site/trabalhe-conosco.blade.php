@extends('template', ['title' => 'Trabalhe'])

@section('conteudo-site')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <div class="capa">
        <img src="{{ asset('assets-site/img/capa-obras.jpg') }}" alt="">
        <div class="container">
            <h2>Trabalhe conosco</h2>
        </div>
    </div>

    <div class="s-breadcrumbs">
        <div class="container">
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li><a href="{{ route('site.contato') }}" class="active">Contato</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="s-contato">
        <div class="container">
            <div class="right">
                <div class="infos">
                    <div class="info">
                        <div class="icon">
                            <img src="{{ asset('assets-site/img/icon-map-pin.svg') }}" alt="">
                        </div>
                        <p>Av. Presidente Vargas - Nº 770 - Marau - Rio Grande do Sul - Brasil</p>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <img src="{{ asset('assets-site/img/icon-mail.svg') }}" alt="">
                        </div>
                        <p>Preencha o formulário ao lado</p>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <img src="{{ asset('assets-site/img/icon-tel.svg') }}" alt="">
                        </div>
                        <p>+55 (54) 9.9999-9999<br>
                        +55 (54) 9.9999-9999</p>
                    </div>
                </div>
            </div>
            <div class="left">
                <form action="{{ route("site.envia-trabalhe") }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <h3>Venha fazer parte da nossa equipe de talentos e construir um futuro de sucesso conosco!</h3>
                    <div class="inputs-wrapper">
                        <div class="group">
                            @if($errors->has('nome'))
                                @foreach ($errors->get('nome') as $error)
                                    <span id="alert" class="alert">*{{ $error }}*</span>
                                @endforeach
                            @endif
                            <input name="nome" type="text" placeholder="Nome:" required value="{{ old('nome') }}">
                        </div>
                        <div class="group">
                            @if($errors->has('email'))
                                @foreach ($errors->get('email') as $error)
                                    <span id="alert" class="alert">*{{ $error }}*</span>
                                @endforeach
                            @endif
                            <input name="email" type="email" placeholder="E-mail" required value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="group">
                            @if($errors->has('telefone'))
                                @foreach ($errors->get('telefone') as $error)
                                    <span id="alert" class="alert">*{{ $error }}*</span>
                                @endforeach
                            @endif
                            <input name="telefone" type="text" placeholder="Celular/whatsapp" required onkeypress="handlePhone(event)" maxlength="15" value="{{ old('telefone') }}">
                        </div>
                    <div class="group">
                        <div class="select-wrapper">
                            <div class="select-button">
                                <input type="file" id="curriculo" name="curriculo" accept=".pdf, .doc, .docx" required value="{{ old('curriculo') }}" />
                                <label for="curriculo">
                                    <img src="{{ asset('assets-site/img/icon-upload.svg') }}" alt="Icone de upload">
                                    &nbsp; Selecione o seu currículo
                                </label>
                                <div id="num-of-files">Nenhum arquivo selecionado</div>
                                <ul id="files-list"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="recaptcha-form">
                        <div>
                            <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LeZQwUmAAAAAKfCuz14MiksZ9FaJTeNOqvDhnq3"></div>
                        </div>
                        <div class="button-wrapper">
                            <button class="style-btn">Enviar currículo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
       $recaptcha.setAttribute("required", "required");
    }
};

const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
}

const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
}

function scrollParaElemento() {
    const meuElemento = document.getElementById("scrool");
    const elementoTopo = meuElemento.offsetTop; // Posição do elemento em relação ao topo da página
    window.scrollTo({ top: elementoTopo, behavior: "smooth" }); // Faz o scroll até a posição do elemento
}

window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
       $recaptcha.setAttribute("required", "required");
    }
};
function recaptchaCallback()
{
    var botao = document.getElementById("botao");
    botao.disabled = false;
    botao.addEventListener("click", function(event) {
        const getValue = (id) => document.getElementById(id).value;
        const recaptcha = document.querySelector('#g-recaptcha-response');
        if(getValue('nome') && getValue('email') && getValue('telefone') && getValue('cargo') && getValue('curriculo') ){
            setTimeout(() => {
                botao.disabled = true;
                botao.innerHTML = "<div class='loader'></div>";
            }, 100)
        }
    })
}
</script>
<style>
form .group .select-wrapper .select-button {
    width: 40%;
    max-width: 100%;
}
input[type=file]::-webkit-file-upload-button {
    border: 1px solid #001E51;
    background: #001E51;
    color: #fff;
    height: 40px;
    width: 40%;
    cursor: pointer;
}
.alert{
    color: red;
    font-weight: 400;
    font-size: 14px;
}
#g-recaptcha-response {
    display: block !important;
    position: absolute;
    margin: -78px 0 0 0 !important;
    width: 302px !important;
    height: 76px !important;
    z-index: -999999;
    opacity: 0;
}
.recaptcha-form {
    width: 100%;
    height: 61px;
    position: relative;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8%;
    align-items: flex-end;
    margin: 0;
}
@media screen and (max-width: 940px) {
    form .group .select-wrapper .select-button {
    width: 100%;
    max-width: 100%;
}
    .recaptcha-form {
        width: 100%;
        height: 61px;
        position: relative;
        display: grid;
        grid-template-columns: 1fr;
        gap: 15px;
        align-items: flex-end;
        margin: 0;
    }
    .box-lancamento{
        height: 700px
    }
    .g-recaptcha iframe {
        height: 78px;
    }
}
</style>
@endsection
