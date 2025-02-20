<?php

echo "Bem-vindo(a) ao ScreenMatch!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc -1;
$somaDeNotas = 0;

for ($contador = 1; $contador < argc; $contador++){
    $somaDeNotas += $argv[$contador];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento> $anoLancamento";

if ($anoLancamento > 2022){
    echo "Esse filme é um lançamento\n";

} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Esse filme ainda é novo\n";

} else {
    echo "Esse filme não é um lançamento\n";
}

$genero = match ($nomeFilme){
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "comédia",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é $genero";

echo "$notaFilme";