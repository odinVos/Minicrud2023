<?php
require_once("../helpers/connect.php");
if(isset($_SESSION['logged_in'])){

// var_dump($_GET['id']);
$stmt = $connect->prepare("SELECT * FROM kranenburger.menu_items WHERE Id = :id");
$stmt->execute(['id' => $_GET['id']]);

    $data = $stmt->fetch();
    // var_dump($data);
    $stmt->bindParam(":id", $_POST['Id']);
        $stmt->execute();
    
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kranenburger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="../assets/main.css" rel="stylesheet">
</head>
<body>
    <div class="background4">
        <div class="edit-container">
            <div>
                <a href="../edit_menu.php">
                <button class="back"><h4>Terug</h4></button>
                 </a>
            </div>
            <h1>Product aanpassen</h1>
            <form action="edit_item.php" method="post" name="edit">
              <h4>Id</h4>
              <input type="text" disabled  name="" id="" value="<?php echo $data ['Id']; ?>"><br />
              <input type="hidden"  name="Id" id="" value="<?php echo $data ['Id']; ?>">
              <h4>Naam</h4>
              <input type="text" name="Name" id="" value="<?php echo $data ['Name']; ?>"><br />
              <h4>Prijs</h4>
              <input type="text" name="Price" id="" value="<?php echo $data ['Price']; ?>"><br />
              <br>  
              <input class="verzenden" type="submit" value="Aanpassen" id="">
            </form>
        </div>
    </div>
    <?php
}else{
    echo "Error, niemand ingelogt";
}
    ?>
</body>
</html>