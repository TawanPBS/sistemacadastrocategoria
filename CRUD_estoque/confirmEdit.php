<?php
    include_once('connection.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['product_name'];
        $cate = $_POST['categorie_name'];
        $descri = $_POST['description'];
        $qtd = $_POST['prod_qtd'];

        $sqlUpdate = "UPDATE products SET name_prod='$nome', cate='$cate', descri='$descri', qtd='$qtd' WHERE id = $id";

        $result = $connect->query($sqlUpdate);

        header('Location: gerenciar.php');
    }
?>