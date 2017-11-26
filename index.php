<?php

require( __DIR__ . '/lib_ext/autoload.php');

use Notification\Email;

$sendEmail = new Email;

$sendEmail->sendEmail("assunto", "<p>Esse é um email<b>teste</b></p>", "alexmcmc@hotmail.com", "alex M Celso", "lcon@gmail.com", "Lcon");

var_dump($sendEmail);


