<?php
session_start();

if(!isset($_SESSION['token']))
{
    header('Location: index.php');
    exit();
}

?>


<H1>Protegida!</H1>

<a href="index.php">voltar</a>