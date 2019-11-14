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
    return "<body style='margin: 0;'>
    <div align='center' style='background-color: #eee;'>
        <table style='max-width: 680px; min-width: 300px;' border='0' width='100%' height='100%' cellspacing='0'
        cellpadding='0'>
        <tbody>
        <tr>
        <td>
        <!-- padding -->
        <div style='height: 80px; line-height: 80px; font-size: 10px;'>&nbsp;</div>
        </td>
        </tr>
        <!--content 1 -->
        <tr>
        <td align='center' bgcolor='#fff' style='border-radius: 30px;'>
        <table border='0' width='100%' cellspacing='0' cellpadding='0'>
        <tbody>
        <tr>
        <td align='center'>
        <!-- padding -->
        <div style='height: 60px; line-height: 60px; font-size: 10px;'>&nbsp;</div>
        <div style='line-height: 44px;'><span
        style='font-size: x-large; color: #57697e; font-family: Arial, Helvetica, sans-serif;'>
        <span
        style='font-family: Arial, Helvetica, sans-serif; font-size: 34px; font-weight: bold; color: #08db88;'>
        Recupera&ccedil;&atilde;o de senha </span></span></div>
        <!-- padding -->
        <div style='height: 40px; line-height: 40px; font-size: 10px;'>&nbsp;</div>
        </td>
        </tr>
        <tr>
        <td align='center'>
        <div style='line-height: 24px;'><span
        style='font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;'>
        <span
        style='font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;'>
        Ol&aacute;<br /> Seus dados atualizados.
        </span></span></div>
        <div style='line-height: 24px;'>&nbsp;</div>
        <!-- padding -->
        </td>
        </tr>
        <tr>
        <td align='center'>
        <div style='line-height: 24px;'>
            <p><span style= 'background-color: #08db86; border-radius: 42px; display: inline-block; color: #000000; font-family: Verdana; font-size: 14px; text-transform: uppercase; font-weight: bold; padding: 15px 76px; text-decoration: none;  '> Us&uacute;ario: ". $email ."</span></p>
            <span
        style='background-color: #08db86; margin-top: 15px; border-radius: 42px; display: inline-block; color: #000000; font-family: Verdana; font-size: 14px; text-transform: uppercase; font-weight: bold; padding: 15px 76px; text-decoration: none;'
        href='#' target='_blank' rel='noopener'> Senha: ". $senha ."</span></div>
        <!-- padding -->
        <div style='height: 60px; line-height: 60px; font-size: 10px;'>&nbsp;</div>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        <tr>
        <td>
        <!-- padding -->
        <div style='height: 80px; line-height: 80px; font-size: 10px;'>&nbsp;</div>
        </td>
        </tr>
        </tbody>
        </table>
        </div>
 </body>";
}

function enviarEmail($email, $corpo){
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP(); // Send using SMTP
    $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = 'noreply.delas@gmail.com'; // SMTP username
    $mail->Password   = 'delas2019'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('noreply.delas@gmail.com', 'Delas');
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