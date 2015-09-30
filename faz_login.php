<?php

session_start();

if ($_POST['email'] == 'admin@admin.com' && $_POST['senha'] == '123') {
    $_SESSION['usuario_logado'] = true;
    $_SESSION['nome_do_usuario'] = 'Admin';
    header('location:/crudci/clientes');
} else {
    $_SESSION['usuario_logado'] = false;
    unset($_SESSION['nome_do_usuario']);
    header('location:/crudci?erro_login=1');
}

