<?php

require_once '../backend/ClienteDAO.php';

$dao = new ClienteDAO();
$cliente = null;

if (isset($_GET['id'])) {
    $cliente = $dao->getById($_GET['id']);
}

if ($_POST) {

    $id = $_POST['id'] ?? null;
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $ativo = $_POST['ativo'] ? true : false;
    $dataDeNascimento = $_POST['dataDeNascimento'];

    $cliente = new Cliente($id, $nome, $cpf, $ativo, $dataDeNascimento);

    if ($id) {
        $dao->update($cliente);
    } else {
        $dao->create($cliente);
    }

    header("Location: ../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Formulario de Cliente</title> -->
    <title><?= $cliente ? 'Edição de Cliente' : 'Cadastro de Cliente' ?></title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <h2><?= $cliente ? 'Editar Cliente' : 'Cadastrar Cliente' ?></h2>

    <form action="cliente_form.php" method="post">
        <?php if ($cliente): ?>
            <input hidden name="id" required value="<?= $produto->getId() ?>">
        <?php endif; ?>

        <label>Nome:</label>
        <input type="text" name="nome" required value="<?= $cliente ? $cliente->getNome() : '' ?>"><br>

        <label>CPF:</label>
        <input type="number" name="cpf" step="0.01" required value="<?= $cliente ? $cliente->getCpf() : '' ?>"><br>

        <label>Ativo:</label>
        <input type="checkbox" name="ativo" value="1" <?= $cliente && $cliente->getAtivo() ? 'checked' : '' ?>><br>

        <label>Data de Nacimento:</label>
        <input type="date" name="dataDeNascimento" value="<?= $cliente ? $cliente->getdataDeNascimento() : '' ?>"><br>

        <button type="submit">Salvar</button>
    </form>

    <a href="../index.php">Cancelar</a>
</body>

</html>