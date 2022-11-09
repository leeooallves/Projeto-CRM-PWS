<section>
    <div class="limitesfuncionarios">
        <article class="articleNovofuncionario">
            <p>
            <form class="formFuncionario" method="POST" action="index.php?acao=criarFuncionario">
                <fieldset id="funcionario" class="boxCadastro">
                    <p class="boxLoginLabel">Novo Funcionário</p>
                    <div class="faixaBrancaBoxLogin"></div>
                    <label class="boxLoginLabel" for="cNome">Nome:</label>
                    <input class="boxLoginInput" type="text" name="cNome" id="cNome" size="20" maxlength="30" placeholder="Nome">
                    <label class="boxLoginLabel" for="cSobrenome">Sobrenome:</label>
                    <input class="boxLoginInput" type="text" name="cSobrenome" id="cSobrenome" size="20" maxlength="30" placeholder="Sobrenome">
                    <label class="boxLoginLabel" for="cEmail">Email: </label>
                    <input class="boxLoginInput" type="text" name="cEmail" id="cEmail" size="20" maxlength="30" placeholder="Email">
                    <label class="boxLoginLabel" for="cSenha">Senha: </label>
                    <input class="boxLoginInput" type="text" name="cSenha" id="cSenha" size="20" maxlength="30" placeholder="Senha">
                    <label class="boxLoginLabel" for="cTelefone"> Telefone: </label>
                    <input class="boxLoginInput" type="text" name="cTelefone" id="cTelefone" size="20" maxlength="30" placeholder="Telefone">
                    <label class="boxLoginLabel" for="cCargo"> Cargo: </label>
                    <input class="boxLoginInput" type="text" name="cCargo" id="cCargo" size="20" maxlength="30" placeholder="Cargo">
                    <input class="botao" type="submit">
                </fieldset>
            </form>
            </p>
        </article>
    </div>
</section>