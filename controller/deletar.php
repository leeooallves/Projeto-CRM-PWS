<?php
    require("conexaoPDO.php");

    try {
        
        /*$conexao= new PDO("mysql:host=$host; dbname=$banco", $username, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
        
        $id =$_GET['idFuncionario'];
            $query=$conexao->prepare("DELETE FROM funcionarios where idFuncionarios = :id");
            $query->bindParam(':id', $_GET['idFuncionario']);
            $query->execute();

    } catch(PDOException $e) {
        echo "Erro<br>". $e->getMessage();
    }
?>