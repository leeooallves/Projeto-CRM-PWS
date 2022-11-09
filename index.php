<?php

require 'vendor/autoload.php';



require("View/header.php");

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}

$pagina = $_GET['pagina'];
if ($pagina == 'funcionarios') {
    require('View/funcionarios.php');
} elseif ($pagina == 'usuarios') {
    require('View/usuarios.php');
} elseif ($pagina == 'novoFuncionario') {
    require('View/novoFuncionario.php');
} elseif ($pagina == 'novoUsuario') {
    require('View/novoUsuario.php');
} else {
    require('View/home.php');
}


require("View/footer.php");
