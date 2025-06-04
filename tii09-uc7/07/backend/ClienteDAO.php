<?php
require_once 'Database.php';
require_once 'Cliente.php';

class ClienteDAO
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM clientes");
        $clientes = [];

        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $clientes[] = new Cliente($row['id'], $row['nome'], $row['cpf'], $row['dataDeNascimento'], $row['ativo']);
        }

        return  $clientes;
    }

    public function getAllAlternativo(): array
    {
        $reulstado = $this->db->query("SELECT * FROM clientes")->fetchAll();
        $clientes = [];

        foreach($reulstado as $res)
        {
            $clientes[] = new Cliente($res['id'], $res['nome'], $res['cpf'], $res['dataDeNascimento'], $res['ativo']);
        }

        return  $clientes;
    }

    public function getById(int $id): ?Cliente
    {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt->execute([':id' => $id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row ? 
            new Cliente($row['id'], $row['nome'], $row['cpf'], $row['dataDeNascimento'], $row['ativo'])
            : null;
    }

    public function delete(int $id)
    {
        $stmt = $this->db->prepare("DELETE FROM clientes WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}