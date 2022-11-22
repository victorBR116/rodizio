<?php

$diaRodizio = [
    1,2 => 'Segunda-Feira',
    3,4 => 'Terça-Feira', 
    5,6 => 'Quarta-Feira',
    7,8 => 'Quinta-Feira',
    9,0 => 'Sexta-Feira'
];

var_dump($diaRodizio);

$pro = array_search('Segunda-Feira', $diaRodizio);
echo $pro;

echo "Horário do rodízio: Das 7h às 10h e das 17h às 20h";
