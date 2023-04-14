<?php
include '../helpers/connect.php';

        $sql ="UPDATE kranenburger.menu_items SET
        Name = :Name,
        Price = :Price,
        Beschrijving = :Beschrijving
        WHERE Id = :id";
        $stmt = $connect->prepare($sql);
        
        $stmt->bindParam(":Name", $_POST['Name']);
        $stmt->bindParam(":Price", $_POST['Price']);
        $stmt->bindParam(":id", $_POST['Id']);
        $stmt->bindParam(":Beschrijving", $_POST['Beschrijving']);
        $stmt->execute();

        header("location: ../edit_menu.php");
    
?>