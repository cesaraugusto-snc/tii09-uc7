<?php

Class Produto
{
    private ?int $id;
    private string $nome;
    private float $cpf;
    private bool $ativo;
    private string $dataNascimento;
    
    public function __construct(?int $id, string $nome, float $cpf,bool $ativo, string $dataNascimento )
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->ativo = $ativo;
        $this->dataNascimento = $dataNascimento;
    }

    // Getters
    public function getId(): ?int { return $this->id; }
    public function getNome(): string { return $this->nome; }
    public function getCpf(): float { return $this->cpf; }
    public function getAtivo(): bool { return $this->ativo; }
    public function getdataNascimento(): string { return $this->dataNascimento; }

     // Setters
     public function setNome(string $nome) { $this->nome = $nome; }
     public function setCpf(float $cpf) { $this->cpf = $cpf; }
     public function setAtivo(bool $ativo) { $this->ativo = $ativo; }
     public function setDataNascimento(string $dataNascimento) { $this->dataNascimento = $dataNascimento; }
    
}

?>