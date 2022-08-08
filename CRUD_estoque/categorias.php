<?php
    if(isset($_POST['submit'])){
        include_once('connection.php');


        $name_cate = $_POST['categoria'];
        
        

        
        $send = mysqli_query($connect, "INSERT INTO categories(categorias) VALUES ('$name_cate')");
    }
?>


<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/categorias.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Categorias</title>
</head>
<body>
    <div class="nav">
        <a href="index.php">Cadastrar novo produto</a>
        <a href="categorias.php">Cadastrar nova categoria</a>
        <a href="gerenciar.php">Gerenciar produtos</a>
    </div>
    <center>
        <fieldset class="catego">
            <legend>Cadastro de categorias</legend>
            <form action="categorias.php" method="POST">
                Nome da nova categoria: <input type="text" name="categoria" class="ipt" required>
                <br>
                <center><input type="submit" name="submit" value="Cadastrar" class="btn"></center>
            </form>
        </fieldset>
    </center>
</body>
</html>