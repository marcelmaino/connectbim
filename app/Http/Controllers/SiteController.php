<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StoreFormContato;
use App\Http\Requests\StoreFormTrabalheConosco;
use App\Contato;
use App\TrabalheConosco;
use App\Obra;

class SiteController extends Controller
{
    public function index(){
        $obras = Obra::where('destaque', 1)->orderBy('id', 'DESC')->limit(8)->get();
        return view('site.index', compact('obras'));
    }

    public function empresa(){
        $obras = Obra::where('destaque', 1)->orderBy('id', 'DESC')->limit(3)->get();
        return view('site.empresa', compact('obras'));
    }

    public function contato(){
        return view('site.contato');
    }

    public function construcoesHorizontais(){
        return view('site.construcoes-horizontais');
    }

    public function multiandares(){
        return view('site.multiandares');
    }

    public function projetosEspeciais(){
        return view('site.projetos-especiais');
    }

    public function estruturasProcesso(){
        return view('site.estruturas-de-processo');
    }

    public function infraestrutura(){
        return view('site.infraestrutura');
    }

    public function obras(){
        $obras = Obra::orderBy('id', 'DESC')->get();
        return view('site.obras', compact('obras'));
    }

    public function obra($slug){
        $obra = Obra::firstWhere('slug', $slug);
        return view('site.obra', compact('obra'));
    }

    public function politicadePrivacidade(){
        return view('site.politica-de-privacidade');
    }

    public function termosUso(){
        return view('site.termos-de-uso');
    }

    public function trabalheConosco(){
        return view('site.trabalhe-conosco');
    }

    public function enviaContato(StoreFormContato $request)
    {
        $dataForm     = $request->all();
        //dd($dataForm);
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret = '6LeZQwUmAAAAADmTcBjPKjM3WVIxQS1LcDbZMkTg';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt(
                $ch,
                CURLOPT_POSTFIELDS,
                "secret=" . $secret . "&response=" . $_POST['g-recaptcha-response']
            );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $responseData = json_decode($result, TRUE);
            curl_close($ch);

            if ($responseData['success']) {
                $dados    = $request->all();
                $criarContato = Contato::create($dataForm);

                if ($criarContato) {
                    $subject = 'Connect Bim Site - Formulário de Contato';
                    $body = "<br><br><b>Nome:</b> " . $dados['nome'];
                    $body .= "<br><b>E-mail:</b> " . $dados['email'];
                    $body .= "<br><b>Empresa:</b> " . $dados['empresa'];
                    $body .= "<br><b>Telefone:</b> " . $dados['telefone'];
                    $body .= "<br><b>Assunto:</b> " . $dados['assunto'];
                    $body .= "<br><b>Mensagem:</b> ";
                    $body .= "<br><br>";
                    $body .= $dados['mensagem'];
                    $body .= "<br>";

                    $response = Http::asForm()->post('http://api-email.artemidas.com.br/', [
                        'replyToName' => $dados['nome'],
                        'senderName' => $dados['nome'],
                        'origin'   => 'cucchi_contato',
                        'subject'  => $subject,
                        'message'  => $body,
                        'to'       => setting('site.email'),
                        'replyTo'  => $dados['email'],
                    ]);

                    //dd($response->json());
                    $response = $response->json();

                    //dd($response->body());

                    if ($response['success']) {
                        return view("site.sucesso-contato");
                    }


                    echo "<script>alert('Erro ao enviar!')</script>";
                    return view("site.contato");
                }
            } else {
                return redirect()->back()->with('msg', 'Recaptcha inválido, preencha e tente novamente!');
            }
        }
        return redirect()->back()->with('msg', 'Recaptcha não preenchido, preencha e tente novamente!');
    }


    public function enviaTrabalhe(StoreFormTrabalheConosco $request)
    {
        //dd();
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret = '6LeZQwUmAAAAADmTcBjPKjM3WVIxQS1LcDbZMkTg';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt(
                $ch,
                CURLOPT_POSTFIELDS,
                "secret=" . $secret . "&response=" . $_POST['g-recaptcha-response']
            );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $responseData = json_decode($result, TRUE);
            curl_close($ch);

            if ($responseData['success']) {
                $nameFile = null;

                $todos = $request->all();
                $todos['curriculo'] = '';

                $salva = TrabalheConosco::create($todos);
                $id = $salva->id;

                // Verifica se informou o arquivo e se � v�lido
                if ($request->hasFile('curriculo') && $request->file('curriculo')->isValid()) {
                    $name =  "curriculo_" . $id . "_";
                    $sender =  str_replace(' ', '_', $request->nome);
                    $extension = $request->curriculo->extension();
                    $nameFile = "{$name}{$sender}.{$extension}";
                    $upload = $request->curriculo->storeAs('documentos', $nameFile);
                    if (
                        !$upload
                    )
                        return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload')
                            ->withInput();
                }

                $dados    = $request->all();
                $dados['curriculo'] = "[{\"download_link\":\"documentos\\\\" . $nameFile . "\",\"original_name\":\"curriculo\"}]";
                // $dados['curriculo'] = $nameFile;
                $criarTrabalheConosco = TrabalheConosco::where('id', $id)->update(['curriculo' => $dados['curriculo']]);

                if ($criarTrabalheConosco) {
                    $subject = 'ConnectBim - Trabalhe Conosco';
                    $body = "<br><br><b>Nome:</b> " . $dados['nome'];
                    $body .= "<br><b>E-mail:</b> " . $dados['email'];
                    $body .= "<br><b>Telefone:</b> " . $dados['telefone'];
                    $body .= "<br><b>Currículo armazenado no painel.</b> ";


                    $response = Http::attach(
                        'attachment',
                        file_get_contents($request->file('curriculo')),
                        $nameFile
                    )
                        ->post('http://api-email.artemidas.com.br/', [
                            'replyToName' => $dados['nome'],
                            'senderName' => $dados['nome'],
                            'origin'   => 'connectbim_trabalhe',
                            'subject'  => $subject,
                            'message'  => $body,
                            'to'       => setting('site.email'),
                            //'to'       => 'programacao@artemidas.com.br',
                            'replyTo'  => $dados['email'],
                        ]);

                    //dd($response);
                    $contato = 'trabalhe';
                    if ($response['success']) {
                        return view("site.sucesso-trabalhe-conosco");
                    }

                    echo "<script>alert('Erro ao enviar!')</script>";
                    return view("site.trabalhe-conosco");
                }
            } else {
                return redirect()->back()->with('msg', 'Recaptcha não preenchido ou inválido, preencha e tente novamente');
            }
        }
        return redirect()->back()->with('msg', 'Recaptcha não preenchido, preencha e tente novamente!');
    }



}
