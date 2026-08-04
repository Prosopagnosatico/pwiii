<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <h1>Projeto Calculadora</h1>

        <form method="post"action="">
            <label for="vlr1">Valor 1</label>
            <input type="text" name="vlr1">
            <label for="vlr2">Valor 2</label>
            <input type="text" name="vlr2">

            <select name="operacao" id="operacao">
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>

<?php
            if( $_POST ){
                $valor1 = $_POST['vlr1'];
                $valor2 = $_POST['vlr2'];
                $operacao = $_POST['operacao'];

                echo "<h2>Resultado:</h2>";

                switch ($operacao) {
                    case 'soma':
                        echo "<p>$valor1 + $valor2 = " . ($valor1 + $valor2) . "</p>";
                        break;
                    case 'subtracao':
                        echo "<p>$valor1 - $valor2 = " . ($valor1 - $valor2) . "</p>";
                        break;
                    case 'multiplicacao':
                        echo "<p>$valor1 * $valor2 = " . ($valor1 * $valor2) . "</p>";
                        break;
                    case 'divisao':
                        if ($valor2 != 0){
                        echo "<p>$valor1 / $valor2 = " . ($valor1 / $valor2) . "</p>";
                    } else {
                        echo "<p>Erro: Divisão por zero não é permitida. </p>";
                    };
                    break;
                }
            }else{
                echo "<h2>Resultado:</h2>";
                echo "<p>Aguardando cálculo...</p>";
            }   
            ?>