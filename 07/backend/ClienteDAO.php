<?php
require_once 'Cliente.php';
require_once 'Database.php';

class ClienteDAO
{
        private $db;
    
        public function __construct()
        {
            $this->db = Database::getInstance();
        }

        public function getAll(): array
        {
            $resultadoDoBanco = $this->db->query("SELECT * FROM clientes");
            $clientes = [];

            while($row = $resultadoDoBanco->fetch(PDO::FETCH_ASSOC)){
                $clientes[] = new Cliente{
                    $row['id'],
                    $row['nome'],
                    $row['cpf'],
                    $row['ativo'],
                    $row['dataNascimento']
                };
            }

            return $clientes;
        }
        public function getById(int $id): ?Produto
        {
            $sql = "SELECT * FROM clientes WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->execute([':id' => $id]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row? new Cliente( //dificuldade para entender
                $row['id'],
                $row['nome'],
                $row['cpf'],
                $row['ativo'],
                $row['dataNascimento']
            ): null;
        }
        
        public function create(Cliente $clientes ): void
        {
            $sql = "INSERT INTO clientes (nome, cpf, ativo, dataNascimento) VALUES (:nome, :cpf, :ativo, :dataNascimento)";

            $stm = $this->db->prepare($sql);
            $stm->execute([
                
            ])

        }

}
        

