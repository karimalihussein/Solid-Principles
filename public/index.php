<?php

declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';


use App\Principles\LSP\Encrypt;

$encrypt = new Encrypt('karimalihussein');

echo $encrypt->encryptor();
// echo $encrypt->decryptor();



