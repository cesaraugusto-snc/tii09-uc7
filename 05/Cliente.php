<?php

/*
Propriedades: nome, veiculo, telefone (todos private string)
Construtor que recebe todas as propreidades
Sobrescreva __toString() para visualizarmos os dados
Crie um get para o "nome" e um set para o "telefone"
*/

class Cliente{
    private string $nome;
    private string $veiculo;
    private string $telefone;

    public function __construct(string $nome, string $veiculo, string $telefone)
    {
        $this->nome = $nome;
        $this->veiculo = $veiculo;
        $this->telefone = $telefone;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setTelefone(string $novoTelefone): void{
        if(strlen($novoTelefone) == 11) {
            $this->telefone = $novoTelefone;
        } else {
            echo "Telefone inválido <br>";
        }
    }

    public function __toString(){
        return "Nome: $this->nome, Veiculo: $this->veiculo, Telefone: $this->telefone";
    }

}

$cliente1 = new Cliente("César","Polo", 11981683775);
echo($cliente1);
echo "<br>";
echo($cliente1->setTelefone(11981687777));
echo "<br>";
echo($cliente1);

?>
