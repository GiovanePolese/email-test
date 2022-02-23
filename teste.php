<?php
    $para = "giovanemoraispolese@gmail.com";
    $assunto = "Título do assunto";
    $mensagem = "<strong>Nome:  </strong>";
    $mensagem .= "<br>  <strong>Mensagem: </strong>"
    ."Mensagem fica aqui";

    
    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  Atual Card<giovane.m.p@outlook.com>\n";
    $headers .= "Reply-to: giovane.m.p@outlook.com\r\n";

    mail($para, $assunto, $mensagem, $headers);
