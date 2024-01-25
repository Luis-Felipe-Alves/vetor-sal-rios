<?php
//Vetor aleatório:

$vetor = [19, 21, 31, 23, 24, 27, 22, 29];

echo gettype($vetor) . PHP_EOL;
echo 'A lista tem ' . count($vetor) . ' elementos.' . PHP_EOL;

for( $i = 0; $i < count($vetor); $i++ ){
    echo $vetor[$i] . PHP_EOL;
}

//Teste prático de vetores e loops:

$profissao = ['autonomo', 'medico', 'professor', 'advogado', 'contador'];
$salarios = [9000, 20000, 15000, 30000, 10000];

if(count($profissao) == count($salarios)){
    
    for($i = 0; $i < count($profissao); $i++){
        echo 'O salário de ' . $profissao[$i] . ' é R$ ' . $salarios[$i] . '.' . PHP_EOL;
    }

} else {
    echo 'Quantidade de profissões não condizente com número de salários.';
}
