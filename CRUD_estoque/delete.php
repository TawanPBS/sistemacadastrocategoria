<?php
    if(!empty($_GET['id'])){
        include_once('connection.php');
    
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM products WHERE id=$id";

        $result = $connect->query($sqlSelect);

        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM products WHERE id=$id";
            $resultDelete = $connect->query($sqlDelete);
        }
            
    }
    header('Location: gerenciar.php');
?>