<?php
    session_start();
    require_once '../UsuarioDAO.php';

    if(!isset($_SESSION['token']))
    {
        header('Location: index.php');
        exit();
    }

    $dao = new UsuarioDAO();
    $user = $dao->getByToken($_SESSION['token']);

    if(!isset($_SESSION['token']))
    {
        header('Location: index.php');
        exit();
}

?>
<h1> Minha Conta</h1>

<p>Nome: <?= $user->getNome()?></p>
<p>Email: <?= $user->getEmail()?></p>
<a href="index.php">Voltar</a>