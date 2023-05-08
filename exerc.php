<?php
require_once 'sistema/configuracao.php';
include_once 'helpers.php';

// aula 021

$texto = 'texto para resumir';
echo $total = mb_strlen(trim($texto));
echo '<hr>';

echo $resumo =mb_substr($texto, 1, 3);
echo '<hr>';



