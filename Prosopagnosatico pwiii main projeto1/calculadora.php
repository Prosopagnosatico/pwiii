<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    
</head>
<body style="background-color: rgb(144, 144, 144);">
    <div class="container">
        <h1>Projeto Calculadora</h1>

        <form method="post"action="">
            <div class="um-do-lado-do-outro">
                <input type="text" name="vlr1">
                <input type="text" name="vlr2">
            </div>

        <div class="centro">
            <button type="submit" name="operacao" value="soma" id="operacao" >+</button>
            <button type="submit" name="operacao" value="subtracao" id="operacao" >-</button>
            <button type="submit" name="operacao" value="multiplicacao" id="operacao" >*</button>
            <button type="submit" name="operacao" value="divisao" id="operacao">/</button>
        </div>

        <div class="txtMaior">
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
        </div> 

        </form>
    </div>
</body>
</html>

