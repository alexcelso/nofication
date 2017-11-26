<?php

require( __DIR__ . '/lib_ext/autoload.php');

use Notification\Email;

$ mail = novo Email (2, " mail.host.com " , " your@email.com " , " your-pass " , " smtp secure (tls / ssl) " , " porta (587) " , " de @ email.com " , " Do Nome " ) ;

$ email - > sendEmail ( " Assunto " , " Conteúdo " , " resposta@email.com " , " Nome da repetição " , " endereço@email.com " , " Nome do endereço " ) ;

var_dump($sendEmail);


