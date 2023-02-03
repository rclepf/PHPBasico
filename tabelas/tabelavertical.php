<?php

$array = [
    'nome' => 'Rodolfo',
    'idade' => 33,
    'empresa' => 'Trabalho',
    'cor' => 'colorido',
    'prof' => 'programador'
];
?>


<table border="1">
<?php foreach($array as $chave => $valor): ?> 
    <tr>
        <td><?php echo $chave; ?></td>
        <td><?php echo $valor; ?></td>
    </tr>   
<?php endforeach; ?>
</table>