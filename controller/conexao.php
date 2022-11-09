<?php 
    $host="localhost";
    $user="root";
    $senha="";
    $banco="projeto";

    try {
        
        $conexao= new PDO("mysql:host=$host; dbname=$banco", $user, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

    } catch(PDOException $e) {
        echo "Erro de conexao<br>".$e->getMessage();
    }

?>
