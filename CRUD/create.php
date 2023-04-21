<?php
require_once("../helpers/connect.php");
$messg = '';
if(isset($_SESSION['logged_in'])){


if(isset($_POST["Name"])){ 
    if($_POST["Name"] == "" | $_POST["Price"] == "" | $_POST["Beschrijving"] == ""){
        $messg = "Er mogen geen velden leeg zijn.";
    }
    if($messg == ""){
        $sql = "INSERT INTO kranenburger.menu_items
        (Name, Price, Beschrijving) 
            VALUES 
        (:Name, :Price, :Beschrijving)";
    ;
    
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":Name", $_POST['Name']);
    $stmt->bindParam(":Price", $_POST['Price']);
    $stmt->bindParam(":Beschrijving", $_POST['Beschrijving']);
    $stmt->execute();
    $stmt->debugDumpParams();
    header("Location: ../edit_menu.php");
    }
}
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
                <div class="warning-menu">
                    <?php echo ($messg == "" ? '' : $messg); ?>
                </div>
            <h4>Naam</h4>
            <input type="text"  name="Name" id=""><br/>
            <h4>Prijs</h4>
            <input type="text"  name="Price" id=""><br/>
            <h4>Beschrijving</h4>
            <input class="desc"  type="text" name="Beschrijving" id=""><br/>
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