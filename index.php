<?php

require( __DIR__ . '/lib_ext/autoload.php');

use Notification\Email;

$sendEmail = new Email;

$sendEmail->sendEmail();

var_dump($sendEmail);


