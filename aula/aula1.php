<?php

function basico(){
    // Definicao de variaveis é feita com $
    $nome = "Bazon"; // String
    $idade = 16; // Inteiro
    $altura = 1.76; // Float
    $vivo = true; // Boolean

    $ocupacoes = ["Programador", "Escoteiro", "Acordeonista"]; // Array
    // $ocupacoes = array("Programador", "Escoteiro", "Acordeonista"); // Array alternativo
    
    // Exibicao de dados
    print 'Meu nome é ' . $nome; // Concatenação de strings

    echo "<p>Tenho $idade anos, minha altura é $altura metros e estou vivo: " . ($vivo ? "Sim" : "Não") . ".</p>"; // Concatenação de strings
    echo "<p>Minhas ocupações são:</p><ul>";
    foreach ($ocupacoes as $ocupacao) {
        var_dump("<li>$ocupacao</li>"); // Exibe o tipo e valor da variavel
    }
    echo "</ul>";
}
basico();

function operacoes(){
    // Operações matemáticas
    $a = 10;
    $b = 3;

    $soma = $a + $b;
    $subtracao = $a - $b;
    $multiplicacao = $a * $b;
    $divisao = $a / $b;
    $modulo = $a % $b; // Resto da divisão

    echo "<p>Soma: $soma</p>";
    echo "<p>Subtração: $subtracao</p>";
    echo "<p>Multiplicação: $multiplicacao</p>";
    echo "<p>Divisão: $divisao</p>";
    echo "<p>Módulo: $modulo</p>";
}
operacoes();

function condicional(){
    // Estruturas condicionais
    $numero = 10;

    if ($numero > 0) {
        echo "$numero é positivo.<br>";
    } elseif ($numero < 0) {
        echo "$numero é negativo.<br>";
    } else {
        echo "$numero é zero.<br>";
    }

    switch ($numero) {
        case 1:
            echo "Número é um.<br>";
            break;
        case 5:
            echo "Número é cinco.<br>";
            break;
        case 10:
            echo "Número é dez.<br>";
            break;
        default:
            echo "Número não é um, cinco ou dez.<br>";
            break;
    }
}
condicional();

function loop(){
    // Estruturas de controle
    for ($i = 1; $i <= 5; $i++) {
        echo "Número: $i<br>";
    }

    $contador = 1;
    while ($contador <= 5) {
        echo "Contador: $contador<br>";
        $contador++;
    }

    do {
        echo "Do-While Contador: $contador<br>";
        $contador--;
    } while ($contador > 0);
}
loop();
