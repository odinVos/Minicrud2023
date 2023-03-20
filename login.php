<?php
    if(isset($_POST['email']) && isset($_POST['password'])){
        //var_dump($_POST);

        if($_POST['email'] == "1197607@student.roc-nijmegen.nl" && 
        $_POST['password'] == "12345"
        ){
            echo 'hello admin';
        }
    }
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
include_once('helpers/nav-klant.php');
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
                    if($_POST['email'] == ""){
                        echo 'email can\'t be empty <br>';
                    }
                                
                    if($_POST['password'] == ""){
                        echo 'password can\'t be empty <br>';
                    }
                    
                    ?>
                </div>
                     <?php 
                    if($_POST['email'] == "1197607@student.roc-nijmegen.nl" && 
                    $_POST['password'] == "12345"
                      ){
                      echo 'hello admin';
                     }
                    ?>
                    <form action="" method="post">
                        email
                        <input type="email" name="email" id="" 
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