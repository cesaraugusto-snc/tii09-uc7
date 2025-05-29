<?php
require_once 'Cliente.php';
require_once 'Database.php';

Class ClienteDAO
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
            // extrair os dados do $stmt e inserir no $clientes
            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $clientes[] = new Cliente( //dificuldade para entender
                    $row['id'],
                    $row['nome'],
                    $row['cpf'],
                    $row['ativo'],
                    $row['dataDeNascimento']
                );
            }

            return $clientes;
        }




        public function getById(int $id): ?Cliente
        {

            $stmt = $this->db->prepare("SELECT * FROM clientes WHERE id = :id");
            $stmt->execute([':id' => $id]);

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $row? new Cliente( // dificuldade para entender
                $row['id'],
                $row['nome'],
                $row['cpf'],
                $row['ativo'],
                $row['dataDeNascimento']
            ): null;
        }

        
        // public function create(Cliente $clientes ): void
        // {
        //     $sql = "INSERT INTO clientes (nome, cpf, ativo, dataNascimento) VALUES (:nome, :cpf, :ativo, :dataNascimento)";

        //     $stm = $this->db->prepare($sql);
        //     $stm->execute([
        //         ':nome' => $
        //     ]);
        // };

}
        

