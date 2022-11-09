<?php


require("../Projeto-CRM-PWS/layout/header.php");

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}

$pagina = $_GET['pagina'];
if ($pagina == 'funcionarios') {
    require('../Projeto-CRM-PWS/View/funcionarios.view.php');
} elseif ($pagina == 'usuarios') {
    require('../Projeto-CRM-PWS/View/usuarios.view.php');
} elseif ($pagina == 'novoFuncionario') {
    require('../Projeto-CRM-PWS/View/novoFuncionario.view.php');
} elseif ($pagina == 'novoUsuario') {
    require('../Projeto-CRM-PWS/View/novoUsuario.view.php');
} else {
    require('../Projeto-CRM-PWS/View/funcionarios.view.php');
}


require("../Projeto-CRM-PWS/layout/footer.php");
