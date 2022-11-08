               <div class="limitesInternos">
                   <a class="itemMenu" href="../View/novoFuncionario.php">Novo Funcionário</a>

                   <table class="table table-dark">
                       <tr style="justify-content: center;">
                           <th scope="col">Nome</th>
                           <th scope="col">Sobrenome</th>
                           <th scope="col">E-mail</th>
                           <th scope="col">Telefone</th>
                           <th scope="col">Cargo</th>
                       </tr>

                       <?php
                        /* include 'model/conexaoDB.php';
                        while ($linha = mysqli_fetch_array($consulta_funcionarios)) {
                            echo '<tr><td>' . $linha['nome'] . '</td>';
                            echo '<td>' . $linha['sobrenome'] . '</td>';
                            echo '<td>' . $linha['email'] . '</td>';
                            echo '<td>' . $linha['telefone'] . '</td>';
                            echo '<td>' . $linha['cargo'] . '</td>';
                        ?>
                           <td>
                               <!--<a href="deletaTarefa.php?id=<?php echo $linha['id']; ?>">Deletar</a>--!-->
                           </td>
                           </tr>
                      
                      <?php
                        }
                        */ ?>
                   </table>
               </div>