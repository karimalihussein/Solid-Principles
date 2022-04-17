<?php

namespace App\Principles\LSP;


class Encrypt
{
    private string $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function getString(): string
    {
        return $this->string;
    }

    public function setString(string $string): void
    {
        $this->string = $string;
    }

    public function encryptor(){
        return sha1($this->getString());
    }

    public function decryptor(){
        // return base64_decode($this->encryptor());
    }

}