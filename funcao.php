<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>
<?php

$atijolo = $_GET['atijolo'];
$ltijolo = $_GET['ltijolo'];
$aparede = $_GET['aparede'];
$lparede = $_GET['lparede'];
$tipo = $_GET['tipo'];

verficarcampo("Altura tijolo", $atijolo);
verficarcampo("Comprimento tijolo", $ltijolo);
verficarcampo("Altura parede", $aparede);
verficarcampo("Comprimento parede", $lparede);

$areatijolo= calculaarea($atijolo);
$areaaparede=calculaarea($aparede,$lparede);
$qtdetijolo=$areaparede/$areatijolo;

echo"<h2> Tipo: $tipo</h2> Quantidade de tijolos: $qtdetijolo <br>";

for ($i = 0; $i< $qtdetijolo; $i++){
    echo"<img src='tijolinho.jpg' width='20' heith='10'>";
}
function verificacampo($campo,$valor){
    if(!is_numeric($valor)|| $valor<=0){
        echo "<h2>Atenção, o campo $campo de ser número!</h2><br>";
        echo "<a href=\"javascrip:window.history.back();\">
        <input type=\"button\"value=\"voltar\"></a>";
        exit
    }
}

function calculaarea($alt,$compo)
{
    return $area= $alt * $compo;
}

?>
    
</body>
</html>