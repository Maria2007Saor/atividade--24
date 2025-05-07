<?php
echo date('d/m/Y H:i');
?>
 <br>
<?php
$nomes = ["Ana", "Carlos", "Maria"];

var_dump(in_array("Maria", $nomes)); // true

$indice = array_search("Carlos", $nomes);
echo "Carlos está no índice: $indice"; // Carlos está no índice: 1

?>
<br>
<?php
$livro = [
    "titulo" => "Dom Casmurro",
    "autor" => "Machado de Assis",
    "ano" => 1899
];

echo "Título: " . $livro["titulo"];
?>
<br>
<?php
$alunos = [
    [
        "nome" => "João",
        "nota" => 8.5,
        "curso" => "Engenharia"
    ],
    [
        "nome" => "Ana",
        "nota" => 9.2,
        "curso" => "Medicina"
    ]
];

echo $alunos[0]["nome"] . " - " . $alunos[0]["curso"] . "<br>";
echo $alunos[1]["nome"] . " - " . $alunos[1]["curso"];
?>
<br>
<?php
$frutas = ['Banana', 'Maçã', 'Uva'];
$indice = array_search('Uva', $frutas);

if ($indice !== false) {
    echo "'Uva' encontrada no índice $indice.";
} else {
    echo "'Uva' não encontrada.";
}
?>
<br>
<?php
$nomes = "Ana,Carlos,João";
$arrayNomes = explode(",", $nomes);

print_r($arrayNomes); // ['Ana', 'Carlos', 'João']
?>
<br>

<?php
$valores = ['R$10', 'R$20', 'R$30'];
$texto = implode(' | ', $valores);

echo $texto; // R$10 | R$20 | R$30
?>
<br>
<?php
for ($i = 5; $i <= 15; $i++) {
    echo $i . "<br>";
}
?>
<br>

<?php
$linguagens = ['PHP', 'JavaScript', 'Python'];

foreach ($linguagens as $linguagem) {
    echo "Linguagem: $linguagem<br>";
}
?>

<br>
<?php
$cores = ['Azul', 'Verde', 'Amarelo'];
echo "Total de cores: " . count($cores); // 3
?>
