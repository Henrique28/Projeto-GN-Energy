<?php 
include '../string.php';

$nome_form = $_POST["nome"];
if($nome_form!=null){ $nome_Body = '<b>Nome:</b> '.$nome_form.'<br/>'; }
$email_form = $_POST["email"];
if($email_form!=null){ $email_Body = '<b>Email:</b> '.$email_form.'<br/>'; }
$celular = $_POST["celular"];
if($celular!=null){ $celular_Body = '<b>Celular:</b> '.$celular.'<br/>'; }
$mensagem = $_POST["mensagem"];
if($mensagem!=null){ $mensagem_Body = '<b>Mensagem:</b> '.$mensagem.'<br/>'; }

$to = $email;
$subject = $_POST["nome_form"];

// prepare email body text
$Body = '<div style="position:relative;margin:1rem auto;width:90%;border-radius:.5rem;background:#f5f5f5;border:1px solid #bbb;overflow:hidden"><div style="width:100%;font-size:1.2em;padding:1rem;background:#2154b2;color:#fff;box-sizing:border-box;">Formulário: <u>Contato</u></div><div style="width:100%;font-size:1.4em;line-height:1.8em;padding:2rem;">
'.$nome_Body.'
'.$email_Body.'
'.$celular_Body.'
'.$mensagem_Body.'
'.$url_de_origem_Body.'
</div>';

$headers = array('Content-Type: text/html; charset=UTF-8',
    'From: '.get_the_title().' <'.$email.'>;',
    'BCC: '.get_the_title().' <'.$copia_email.'>;',
    'Reply-To: '.$nome.' <'.$email.'>',
);

?>