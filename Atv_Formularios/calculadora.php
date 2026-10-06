<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>Calculadora</h1>

    <form method="post">
        <label for="vlr1">Valor 1</label>
        <input type="text" name="vlr1">
        <label for="vlr2">Valor 2</label>
        <input type="text" name="vlr2">

        <select name="operacao" id="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="divisao">Multiplicação</option>
            <option value="multiplicacao"></option> 
        </select>
        <button>Calcular</button>
    </form>
</div>
 
<?php
if( $_POST ){
    $valor1 = $_POST['vlr1'];
    $valor2 = $_POST['vlr2'];
    
    echo<h2>Resultado: </h2>

    switch($operacao){
        case 1 'soma';
            echo "<p>$valor1 + $valor2 =" . ($valor1 + $valor2) ."</p>";
            break;
        case 2 'subtracao';
            echo "<p>$valor1 - $valor2 =" . ($valor1 - $valor2) ."</p>";
            break;
        case 3 'multiplicacao';
            echo "<p>$valor1 * $valor2 =" . ($valor1 * $valor2) ."</p>";
            break;
        case 4 'divisao';
            if($valor2 != 0){
            echo "<p>$valor1 / $valor2 =" . ($valor1 / $valor2) ."</p>";
            else{
                "<p>Erro: Divisão por 0 não é permitida</p>";
            };
            break;  
    }}
}
?>

</body>
</html>
