<ul>
    <?php
    /*
    Crie um array com 4 nomes de alunos e exiba-os em uma lista <ul>
    no navegador
    */

    $alunos = ["Luas", "Renato", "Hebert", "Lucimara"];

    foreach ($alunos as $aln) {
        echo "<li>$aln</li>";
    }
    ?>
</ul>