<?php

require('../Model/funcionario.model.php');

class Conexao
{
    private static $instancia;

    public static function get()
    {
        try {
            if (isset(self::$instancia)) {
                self::$instancia = new PDO("mysql:host=localhost;dbname=projeto", "root", "");
            }
            return self::$instancia;
        } catch (Exception $th) {
            throw new Exception($th->getMessage());
        }
    }

    public function gravarFuncionario()
    {
        $bd = Conexao::get();

        $query = $bd->prepare("INSERT INTO funcionarios (nome, sobrenome, email, senha, telefone) VALUES (:nome, :sobrenome, :email, :senha, :telefone)");
        $query->bindParam(':nome', $_POST['titulo']);
    }
}
