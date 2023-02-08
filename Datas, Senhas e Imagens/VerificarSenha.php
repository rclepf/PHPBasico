<?php
$hash = '81dc9bdb52d04dc20036dbd8313ed055';
$senha = '12345';

/* if(password_verify($senha, $hash)){
    echo 'Senha correta!';
}else{
    echo 'Senha errada!';
} */

if(md5($senha) == $hash){
    echo 'Senha CERTA!';
}else{
    echo 'Senha ERRADA!';
}