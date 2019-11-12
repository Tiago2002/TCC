<?php

// Load Composer's autoloader
require_once('../PHPMailer/autoload.php');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function gerarSenha(){
    return strtoupper(substr(bin2hex(random_bytes(5)), 1));
}

function gerarCorpoEmail($email, $senha){
    return "<table width='100%' height='100%' style='min-width:348px' border='0' cellspacing='0' cellpadding='0' lang='en'>
    <tbody>
        <tr height='32' style='height:32px'>
            <td></td>
        </tr>
        <tr align='center'>
            <td width='32' style='width:32px'></td>
            <td>
                <table border='0' cellspacing='0' cellpadding='0' style='max-width:600px'>
                    <tbody>
                        <tr>
                            <td>
                                <table bgcolor='#E6E6E6' width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px'>
                                    <tbody>
                                        <tr>
                                            <td height='40' style='height:40px' colspan='3'></td>
                                        </tr>
                                        <tr>
                                            <td width='32' style='width:32px'></td>
                                            <td
                                                style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#000000;line-height:1.25;min-width:300px'>
                                                Redefinição de senha</td>
                                            <td width='32' style='width:32px'></td>
                                        </tr>
                                        <tr>
                                            <td height='18' style='height:18px' colspan='3'></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table bgcolor='#FAFAFA' width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px'>
                                    <tbody>
                                        <tr height='16' style='height:16px'>
                                            <td width='32' rowspan='3' style='width:32px'></td>
                                            <td></td>
                                            <td width='32' rowspan='3' style='width:32px'></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table style='min-width:300px' border='0' cellspacing='0'
                                                    cellpadding='0'>
                                                    <tbody>
                                                        <tr>
                                                            <td
                                                                style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding-bottom:4px'>
                                                                Olá,</td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding:4px 0'>
                                                                Usúario: ". $email . "</b>
                                                                <br>
                                                                <br>
                                                                <td
                                                                style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding-bottom:4px'>
                                                                Sua Nova senha: ". $senha ."</td>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding-top:28px'>
                                                                Equipe de suporte D'elas</td>
                                                        </tr>
                                                        <tr height='16' style='height:16px'></tr>
                                                        <tr>
                                                            <td>
                                                                <table
                                                                    style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:12px;color:#b9b9b9;line-height:1.5'>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <b>
                                                                                    Não responda a este e-mail.
                                                                                </b>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr height='32' style='height:32px'></tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table bgcolor='#FFFFFF' width='100%' border='0' cellspacing='0' cellpadding='0'
                                    style='min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-top:0'>
                                    <tbody>
                                        <tr>
                                            <td height='18' colspan='3' style='height:18px'></td>
                                        </tr>
                                        <tr>
                                            <td width='32' style='width:32px'></td>
                                            <td
                                                style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>
                                                Você recebeu esta mensagem porque <a>". $email ."</a> é o e-mail
                                                de contato da sua Conta do <span class='il'>D'elas</span>. Isso pode ser alterado a qualquer momento
                                                nas configurações do seu perfil.
                                            <td width='10' style='width:10px'></td>
                                        </tr>
                                        <tr>
                                            <td height='18' colspan='3' style='height:18px'></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr height='16' style='height:16px'></tr>
                    </tbody>
                </table>
            </td>
            <td width='32' style='width:32px'></td>
        </tr>
        <tr height='32' style='height:32px'>
            <td></td>
        </tr>
    </tbody>
</table>";
}

function enviarEmail($email, $corpo){
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP(); // Send using SMTP
    $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = 'tiagos1401@gmail.com'; // SMTP username
    $mail->Password   = '@tiago123'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('tiagos1401@gmail.com', 'Delas');
    $mail->addAddress($email); // Add a recipient

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = utf8_decode('Redefição de senha');
    $mail->Body = $corpo;

    if ($mail->send()) { 
        echo utf8_encode(json_encode(array('envio' => true)));
    } 
    else { 
        echo utf8_encode(json_encode(array('envio' => false)));
    }
}

if(isset($_POST['email'])){

    include_once("../scripts/conexao.php");

    $email = $conexao->real_escape_string($_POST["email"]);

    $sql = "SELECT nomeCliente, emailCliente FROM Clientes WHERE emailCliente = '$email'";

    $data = $conexao->query($sql);

    if(mysqli_fetch_row($data)){

        $senha = gerarSenha();

        $corpo = gerarCorpoEmail($email, $senha);

        $senhaCriptografada = md5($senha);

        $sqlTrocaSenha = $conexao->query("UPDATE Clientes SET senhaCliente = '$senhaCriptografada' WHERE emailCliente = '$email'");

        enviarEmail($email, $corpo);

    }else{
        echo utf8_encode(json_encode(array('emailExiste' => false )));
    }
}

?>