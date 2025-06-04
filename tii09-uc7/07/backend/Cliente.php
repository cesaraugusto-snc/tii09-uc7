<?php

class Cliente
{
    private ?int $id;
    private string $nome;
    private string $cpf;
    private string $dataDeNascimento;
    private bool $ativo;

    public function __construct(?int $id, string $nome, string $cpf, string $dataDeNascimento, bool $ativo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataDeNascimento = $dataDeNascimento;
        $this->ativo = $ativo;
    }

    public function getId(): ?int { return $this->id; }
    public function getNome(): string { return $this->nome; }
    public function getCpf(): string { return $this->cpf; }
    public function getDataDeNascimento(): string { return $this->dataDeNascimento; }
    public function getAtivo(): bool { return $this->ativo; }

    public function setNome(string $nome):void { $this->nome = $nome; }
    public function setCpf(string $cpf):void  { $this->cpf = $cpf; }
    public function setDataDeNascimento(string $dataDeNascimento):void  { $this->dataDeNascimento = $dataDeNascimento; }
    public function setAtivo(bool $ativo):void  { $this->ativo = $ativo; }
}