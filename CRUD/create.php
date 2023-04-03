<?php
require_once("../helpers/connect.php");
if(isset($_SESSION['logged_in'])){


if(isset($_POST["Name"])){ 
    $sql = "INSERT INTO kranenburger.menu_items
    (Name, Price) 
        VALUES 
    (:Name, :Price)";
;

$stmt = $connect->prepare($sql);
$stmt->bindParam(":Name", $_POST['Name']);
$stmt->bindParam(":Price", $_POST['Price']);
$stmt->execute();
$stmt->debugDumpParams();
header("Location: ../edit_menu.php")

;}
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
                <button class="back"><h4>Terug</h4> </button>
            </a>
            </div>
                <h1>Product toevoegen</h1>
            <form action="" method= "post">
                <h4>Naam</h4>
               <input type="text" name="Name" id=""><br/>
               <h4>Prijs</h4>
              <input type="text" name="Price" id=""><br/>
              <br>
              <input class="verzenden" type="submit" value="Toevoegen" id="">
              
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