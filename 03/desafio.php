<table border="2" style="background-color: lightblue;">
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Cidade</th>
    </tr>
<?php
$clientes =
    [
        [
            "nome" => "John",
            "cpf" => "11122233344",
            "cidade" => "Sao Paulo"
        ],
        [
            "nome" => "Mary",
            "cpf" => "33322211144",
            "cidade" => "Santo Andre"
        ]
    ];

    foreach($clientes as $c) {
        echo "<tr><td>{$c['nome']}</td><td>{$c['cpf']}</td><td>{$c['cidade']}</td></tr>";
    }
?>
</table>