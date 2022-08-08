<?php
    include_once('connection.php');
    $pegaDados = "SELECT * FROM products ORDER BY id ASC";
    $mostraDados = mysqli_query($connect, $pegaDados);


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
        <a href="index.php">Cadastrar novo produto</a>
        <a href="categorias.php">Cadastrar nova categoria</a>
        <a href="gerenciar.php">Gerenciar produtos</a>
    </div>
    <center>
        <table border='1'>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do produto</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Editar/Remover</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($data = mysqli_fetch_assoc($mostraDados)){
                        echo "<tr>";
                        echo "<td>".$data['id']."</td>";
                        echo "<td>".$data['name_prod']."</td>";
                        echo "<td>".$data['cate']."</td>";
                        echo "<td>".$data['descri']."</td>";
                        echo "<td>".$data['qtd']."</td>";
                        echo "<td>
                            <a href='edit.php?id=$data[id]'>
                                <img src='../images/pencil.svg'></img>
                            </a>
                            /
                            <a href='delete.php?id=$data[id]'>
                                <img src='../images/trash.svg'></img>
                            </a>
                        </td>";
                    }
                ?>
            </tbody>
        </table>
    </center>
</body>
</html>