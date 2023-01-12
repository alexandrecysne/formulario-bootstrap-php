<?php



$mensagem = '';
if($_POST['send']!=""){

   $headers = "MIME-Version: 1.1\n";

	while (list($key, $val) = each($_POST)) { 
		if ($key == 'from') {
        	$headers .= "Content-type: text/plain; charset=UTF-8\n";		
			$headers .= "From: " . $val . "\n";
			$headers .= "Return-Path: <" . $val . ">\n";
			$headers .= "Reply-to: <" . $val . ">\n";
		}
		elseif (($key == 'cc' ) or ($key == 'cc1' )){
		    $headers .= "Cc: " . $val . "\n";
		}
		elseif ($key == 'to') {
			$to = $val;
		}
		elseif ($key == 'subject') {
			$assunto = $val;
		}
		elseif ($key == 'resp') {
			$link = $val;
		}
		else {
			if ($key != 'send') {
				$mensagem .= $key . ": " . $val . "\n";
			}
		}
	}
	

	
	mail($to, $assunto, $mensagem, $headers);
	
	header("Location: $link");
}


?>