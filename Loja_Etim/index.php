<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Cadastro</title>
    <linl rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <section>
        <a href="produtos.php" class="sombra">Ver todos os produtos</a>
        <form method="post" enctype="multipart/form-data">
            <h1>ENVIO DE IMAGENS</h1>
            <label for="nome">Nome do produto</label>
            <input type="text" name="nome" id="nome" class="sombra">

            <label for="nome">Descrição</label>
            <textarea name="desc" id="nome" class="sombra"></textarea>

            <label for="nome">Valor</label>
            <input type="number" name="valor" id="val" class="sombra" step="0.01" min="0">

            <input type="file" name="foto[]" multiple id="foto" class="sombra meuInput">
            <input type="submit" id="botao">
        </form>
    </section>
</body>
</html>

<?php

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $descricao = addslashes($_POST['desc']);

    $fotos = array();

    if(isset($_FILES['foto'])){
        $tipo = '';
        for($i = 0; $i < count($_FILES['foto']['name']); $i++){
            if($_FILES['foto']['type'][$i] == "image/png"){
                $tipo = ".png";
            }elseif($_FILES['foto']['type'][$i] == 'image/jpeg'){
                $tipo = ".jpg";
            }else{
                $tipo = "outro";
            }

            if($tipo == 'outro'){
                ?>
            <script>
                alert("Só é possível enviar arquivos PNG e JPG");
            </script>

            <?php
            }else{
                $nome_arquivo = md5($_FILES['foto']['name'][$i]).rand(1,999).$tipo;

                move_uploaded_file($_FILES['foto']['name'][$i], 'imagens/'.$nome_arquivo);

                array_push($fotos, $nome_arquivo);
            }
        }

        if(!empty($nome) && !empty($descricao)){
            require 'classes/produto.class.php';
            $p = new Produto();
            $p->enviarProduto($nome, $descricao, $fotos);
        } else{
            ?>
            <script>
                alert("Preencha os campos obrigatorios")
            </script>
            <?php
        }
    }
}