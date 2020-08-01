<?php

//Enviar el mail...
$email = $_POST['email'];
$message = $_POST['message'];

    $headersadm  = "MIME-Version: 1.0 \r\n";
	$headersadm .= "Content-type: text/html; charset=utf-8 \r\n"; 
    $headersadm .= "From: Close-Up Intranet Usuario: <$email> \r\n";
    $headersadm .= "To: reefCorals@admin.com \r\n";
    @mail( 'reefCorals@admin.com', $nombre, $coment, $headersadm );
    header('Location: /wordpress/?page_id=10');
