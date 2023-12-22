<?php

require_once 'Pessoa.php';

//Arrang
$pessoa = new Pessoa('Antony', new DateTimeImmutable('2002-03-23'));

//Act
$idadePessoa = $pessoa->idade();

// Assert

$idadeEsperada = 21;

if ($idadeEsperada === $idadePessoa){
    echo 'TESTE OK' . PHP_EOL;
} else {
    echo 'TEST FALHOU' . PHP_EOL;
}
