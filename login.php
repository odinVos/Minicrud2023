<?php
    require 'helpers/connect.php';

    $sql = "SELECT * FROM kranenburger.users";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kranenburger</title>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <?php
if (isset($_SESSION['logged_in'])){
    require_once("helpers/nav-admin.php");
}else {
    require_once("helpers/nav-klant.php");
}
?>
    </header>
    <div class="background3">
        <h1 class="name2">Login</h1>

        <div class="menu-container">
            <div class="login-panel">

                <br>
                <h2>Login</h2>
                <br>
                <div class="warning">
                    <?php
                    if(isset($_POST['email']) && $_POST['email'] == ""){
                        echo 'email can\'t be empty <br>';
                    }
                                
                    if(isset($_POST['password']) && $_POST['password'] == ""){
                        echo 'password can\'t be empty <br>';
                    }
                    
                    ?>
                </div>
                     <?php 
                     foreach($result as $value)
                     {
                        $name=$value['Username'];
                        if(isset($_POST['email']) && isset($_POST['password'])){
                            if($_POST['email'] == $value['Email'] && 
                            $_POST['password'] == $value['Password']
                            ){
                                $_SESSION ['logged_in'] = true;
                                $_SESSION ['username'] = $name;
                                header("location: edit_menu.php");
                            } 
                        }
                                           
                     }

                    ?>
                   <form action="" method="post">
                    email
                    <input type="text" name="email" id="" 
                    placeholder="email">
                    password
                    <input type="password" name="password" id="" placeholder="password">
                    <input type="submit" value="login">
                </form>
            </div>
        </div>
    </div>
    <?php
require_once('helpers/footer.php');
?>
</body>
</html>