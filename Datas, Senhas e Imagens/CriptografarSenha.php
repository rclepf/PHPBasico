<?php
$senha = '1234';

$hash = md5($senha);

echo "SENHA ORIGINAL " . $senha . "<br/>";
echo "HASH: " . $hash;