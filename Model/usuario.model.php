<?php

class Usuario
{
    public $nome;
    public $sobrenome;
    public $emal;
    private $senha;
    public $telefone;
    public $cargo;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }
}
