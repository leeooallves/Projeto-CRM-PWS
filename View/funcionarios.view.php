<div class="limitesInternos">
                   <div class="menu">
                   </div>
               </div>
               <div class="conteudo">
                   <table class="table">
                       <tr style="justify-content: center;">
                            <th scope="col">Id Funcionário</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Cargo</th>
                        </tr>

<?php

require ("../controller/conexao.php");

try{
    $queryPDO = "SELECT * FROM funcionarios";
    $query_Run = $conexao->query($queryPDO);
    if($query_Run){
        $row=$query_Run->fetchAll(PDO::FETCH_ASSOC);
        foreach($row as $item){ ?>
            <tr>
                <th scope="row"><?php echo $item["idFuncionarios"];?></th>
                <th><?php echo $item["nome"]; ?></th>
                <th><?php echo $item["sobrenome"];?></th>
                <th><?php echo $item["email"];?></th>
                <th><?php echo $item["senha"];?></th>
                <th><?php echo $item["telefone"];?></th>
                <th><?php echo $item["cargo"];?></th>
                <th><a href="../controller/deletar.php"><?$id=$item['id']; ?> Deletar</a></th>
            </tr>
        <?php
        }?>
        </table>
</body>
</html>
<?php
    }
}catch(PDOException $e){
    echo "Erro ao listar<br>".$e->getMessage();
}

$bd=null;