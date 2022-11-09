<?php
    require("../controller/db.conexao.php");

    try {
        
        /*$conexao= new PDO("mysql:host=$host; dbname=$banco", $username, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
        
        $nome =$_POST['cNome'];
            $query=$conexao->prepare("INSERT INTO funcionarios(nome, sobrenome, email, senha, telefone, cargo)
            VALUES(:nome, :sobrenome, :email, :senha, :telefone, :cargo)");
            $query->bindParam(':nome', $_POST['cNome']);
            $query->bindParam(':sobrenome', $_POST['cSobrenome']);
            $query->bindParam(':email', $_POST['cEmail']);
            $query->bindParam(':senha',$_POST['cSenha']);
            $query->bindParam(':telefone',$_POST['cTelefone']);
            $query->bindParam(':cargo', $_POST['cCargo']);
            $query->execute();

    } catch(PDOException $e) {
        echo "Erro ao Cadastrar<br>". $e->getMessage();
    }
?>