<table border = "2" style="background-color: aqua;">
<?php
$cliente = 
    [   [

            "nome" => "César",
            "cpf" => "00011122265",
            "cidade"  => "São Paulo"
        
        ],
        [
            "nome" => "Renan",
            "cpf" => "00011555265",
            "cidade"  => "Rio de Janeiro"
        ],
        [
            "nome" => "Luan",
            "cpf" => "00011555355",
            "cidade"  => "São Paulo"
        ]
    ];
    foreach($cliente as $c){
        echo "<tr>
                <td>{$c['nome']}</td>
                <td>{$c['cpf']}</td>
                <td>{$c['cidade']}</td>
            </tr>";
    }

?>
</table>