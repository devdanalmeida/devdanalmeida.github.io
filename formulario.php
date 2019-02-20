<?php
    $to = 'dalvanvr@gmail.com';
    $nome = $_POST["nome"];
    $email = $_POST["email"];
 


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email. "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $mensagem ='<table style="width:100%">
        <tr>
          
        </tr>
        <tr><td>Nome: '.$nome.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        
    </table>';

    if (@mail($to, $assunto, $mensagem, $headers))
    {
		echo 'Mensagem enviada com Sucesso!';
        echo " <meta http-equiv='refresh' content='10;URL=index.html'>";
		
    }else{
        echo 'Erro ao enviar';
    }

?>