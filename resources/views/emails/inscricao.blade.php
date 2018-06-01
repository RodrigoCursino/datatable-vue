<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
<table border="0" cellpadding="0" cellspacing="0" width="600">
    <tbody>
    <tr>
        <td align="center" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                    <tr align="center">
                        <td style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                            <a href="{{url('')}}" style="border:none;" target="_blank">
                                <img src="{{asset('images/logo.png')}}" alt="LSPB - Liga São Paulo de Basketball" style="display:block;max-width:580px;">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" valign="top">
            <table border="0" bgcolor="#000" cellpadding="0" cellspacing="0" width="100%" height="5" style="font-family: Open Sans,Helvetica,Arial,sans-serif;">
                <tbody>
                <tr>
                    <td align="right"></td>
                </tr>
                </tbody>
            </table>

            <table border="0" bgcolor="#FFFFFF" cellpadding="10" cellspacing="15" width="100%" style="font-family: Open Sans,Helvetica,Arial,sans-serif;border-left:1px solid #CCC;border-right:1px solid #CCC;border-bottom:1px solid #CCC;">
                <tbody>
                <tr>
                    <td align="left" valign="bottom">
                        <h1 style="font-family: Open Sans,Helvetica,Arial,sans-serif;font-weight:800;font-size:28px;color:#000;margin-bottom:0px;text-transform:uppercase;">Contato enviado pelo site</h1>
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="top" style="font-size:14px;color:#696969;font-family: Open Sans,Helvetica,Arial,sans-serif;">
                        <h3>{{$razaoSocial}}, enviou uma solicitação de inscrição pelo site.</h3>
                        <br />

                        <p>
                            <b>Razão Social:</b> {{$razaoSocial}} <br />
                            <b>CPF|CNPJ:</b> {{$cpfCnpj}} <br />
                            <b>Cep: </b> {{$cep}} <br />
                            <b>Endereço: </b> {{$endereco}} <br />
                            <b>Bairro: </b> {{$bairro}} <br />
                            <b>Cidade: </b> {{$cidade}} <br />
                            <b>Estado: </b> {{$estado}} <br />
                            <b>Responsável pela equipe: </b> {{$nomeResp}} <br />
                            <b>Email do responsável: </b> {{$emailResp}} <br />

                            @if(isset($catMasc))
                                <b>Categorias Masculinas:</b> <br />
                            <ul>
                                @foreach($catMasc as $masc)
                                    <li>{{$masc}}</li>
                                @endforeach
                            </ul>
                            <br />
                            @endif

                            @if(isset($catFem))
                                <b>Categorias Femininas:</b> <br />
                                <ul>
                                    @foreach($catFem as $fem)
                                        <li>{{$fem}}</li>
                                    @endforeach
                                </ul>
                                <br />
                            @endif
                        </p><br />
                    </td>
                </tr>
                </tbody>
            </table>

            <table border="0" bgcolor="#FFFFFF" cellpadding="10" cellspacing="15" width="100%" style="font-family: Open Sans,Helvetica,Arial,sans-serif;">
                <tbody>
                <tr>
                    <td align="center" valign="top" style="font-size:11px;color:#696969;font-family: Open Sans,Helvetica,Arial,sans-serif;">
                        <p>Esta mensagem foi enviada por um sistema automático. Por favor, não responda a este e-mail diretamente.</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>