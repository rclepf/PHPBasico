<?php

$sql = $pdo->query('SELECT * FROM usuarios');

echo "Total: " .$sql->rowCount()." Usuários";
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);