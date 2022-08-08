<?php

if(!empty($_GET['id'])){
    include_once('connection.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM products WHERE id=$id";

        $result = $connect->query($sqlSelect);

        if($result->num_rows > 0){
            while($data = mysqli_fetch_assoc($result)){
                $nome = $data['name_prod'];
                $cate = $data['cate'];
                $descri = $data['descri'];
                $qtd = $data['qtd'];
            }
            
        }else{
            header('Location: gerenciar.php');
        }  
}else{
    header('Location: gerenciar.php');
}
    
?>



<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/edit.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Produtos</title>
</head>

<body>
    <div class="nav">
        <a href="index.php">Cadastrar novo produto</a>
        <a href="categorias.php">Cadastrar nova categoria</a>
        <a href="gerenciar.php">Gerenciar produtos</a>
    </div>
    <center>
    <div class="container">
        <fieldset class="prod">
            <legend>Alterar dados dos produtos</legend>
            <form action="confirmEdit.php" method="POST">
                Nome do Produto: <br> <input type="text" name="product_name" class="ipt" required value="<?php echo $nome ?>">
                <br>
                Nome da categoria: <br><select name="categorie_name" class="ipt" required>
                    <option value="<?php echo $cate ?>">Selecione uma categoria</option>
                    <?php
                    $pegaDados = "SELECT * FROM categories";
                    $mostraDados = mysqli_query($connect, $pegaDados);
                    while($row = mysqli_fetch_assoc($mostraDados)){
                        echo "<option>".$row['categorias']."</option>";
                    }
                    ?>
                </select>
                <br>
                Descrição: <br> <input type="text" name="description" class="ipt" required value="<?php echo $descri ?>">
                <br>
                Quantidade em estoque: <br> <input type="text" name="prod_qtd" class="ipt" required value="<?php echo $qtd ?>">
                <br>
                <input type="hidden" name="id" value="<?php echo $id ?>"><br>
                <center><input type="submit" value="Alterar" name="update" class="btn"></center>
            </form>
        </fieldset>
    </div>
    </center>
</body>
</html>