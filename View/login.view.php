<?php
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';
$erro = false;
?>

<section class="secaoForm">

    <div class="limitesInternos">
        <article class="artForm">
            <p>
            <form method="POST" action="/UTFPR/Projeto/projeto22/model/logar.php">
                <!-- 
                <?php // if ($erro) : 
                ?>
                    <p class="erroLogin">ERRO<br>Usuário ou senha inválidos<br>Tente novamente</p>
                <?php //endif 
                ?>*/
               -->
                <fieldset id="usuario" class="boxLogin">
                    <p class="boxLoginLabel">LOGIN</p>
                    <p class="boxLoginLabel subAviso">(Apenas usuários logados poderão visualizar o conteúdo)</p>
                    <div class="faixaBrancaBoxLogin"></div>
                    <!--<p><label class="boxLoginLabel" for="cNome">Nome:</label><input class="boxLoginInput" type="text" name="nome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo" /></p>
                    o size indica a quantidade de char q ira aparecer e maxlenght a quantidade de char permitida/o placeholder é a msg q aparece na caixa antes do usuario digitar/ existem varios tipos ex:text,password...-->
                    <p><label class="boxLoginLabel" for="cEmail">E-mail:</label><input class="boxLoginInput" type="email" name="login" id="cEmail" placeholder="E-Mail" size="20" maxlength="40" /></p>
                    <p><label class="boxLoginLabel" for="cSenha">Senha:</label><input class="boxLoginInput" type="password" name="senha" placeholder="Senha" id="cSenha" /></p>
                    <input type="submit" class="botao" value="Login">
                </fieldset>
            </form>
            </p>
        </article>
    </div>
</section>