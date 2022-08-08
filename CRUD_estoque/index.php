<?php
    include_once('connection.php');
    if(isset($_POST['submit'])){
        $name_prod = $_POST['product_name'];
        $cate = $_POST['categorie_name'];
        $descri = $_POST['description'];
        $qtd = $_POST['prod_qtd'];
        
        $send = mysqli_query($connect, "INSERT INTO products(name_prod, cate ,descri, qtd) 
        VALUES ('$name_prod','$cate','$descri','$qtd')");
    }

    
?>



<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Produtos</title>
</head>

<body>
    <div class="nav">
        <a href="cadastro_prod.php">Cadastrar novo produto</a>
        <a href="categorias.php">Cadastrar nova categoria</a>
        <a href="gerenciar.php">Gerenciar produtos</a>
    </div>
    <center>
    <div class="container">
        <fieldset class="prod">
            <legend>Cadastro de produtos</legend>
            <form action="index.php" method="POST">
                Nome do Produto: <br> <input type="text" name="product_name" class="ipt" required>
                <br>
                Nome da categoria: <br><select name="categorie_name" class="ipt" required>
                    <option value="0">Selecione uma categoria</option>
                    <?php
                    $pegaDados = "SELECT * FROM categories";
                    $mostraDados = mysqli_query($connect, $pegaDados);
                    while($row = mysqli_fetch_assoc($mostraDados)){
                        echo "<option>".$row['categorias']."</option>";
                    }
                    ?>
                </select>
                <br>
                Descrição: <br> <input type="text" name="description" class="ipt" required>
                <br>
                Quantidade em estoque: <br> <input type="text" name="prod_qtd" class="ipt" required>
                <br>
                <center><input type="submit" value="Cadastrar" name="submit" class="btn"></center>
            </form>
        </fieldset>
    </div>
    </center>
</body>
</html>