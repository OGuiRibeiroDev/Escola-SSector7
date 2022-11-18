<?php
$texto = $_POST['texto'];
$turma = $_POST['turma'];
$nome = $_POST['nome'];

print_r($turma);
print_r($texto);

    $pont = fopen("ferias.txt", "a+");

    fwrite($pont, 'O(A) '.$nome.' da turma '.$turma.' fez nas ferias: '.$texto);
    fwrite($pont, "\r\n","1000");

    fclose($pont);
?>