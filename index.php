<?php
//Arquivo index responsavel pela inicializacao do sistema
// declare(strict_types =1); restringir pelo tipo de dados

include_once 'sistema/configuracao.php';
include_once 'helps.php';


echo saudacao();

echo '<hr>';

$texto = 'texto para resumir';

var_dump($texto);
echo '<hr>';
echo saudacao();
echo '<hr>';

echo resumirTexto($texto, 150, 'continue');
