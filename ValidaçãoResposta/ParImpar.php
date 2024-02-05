<?php

$numeroEscolido = 15;

function ParInpar($numeroEscolido)
{
    if($numeroEscolido % 2 == 0){
        echo 'Par';
    } else {
        echo 'Impar';
    }
}

ParInpar(15);