<?php
include('../helpers/connect.php');
$sql = "DELETE FROM kranenburger.menu_items WHERE Id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $stmt->debugDumpParams();
    header("Location: ../edit_menu.php")
?>  
