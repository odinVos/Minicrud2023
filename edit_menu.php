
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
    <div class="background2">
        <h1 class="name2">Menu Bewerken</h1>

        <div class="menu-container">
            <div class="menu">

                <br>
                <h1>Cafetaria Kranenburger</h1>
                <h2>Menu</h2>
                <br>
                <hr>
                <br>
                <?php
                require('helpers/edit_menu_db.php');
                ?>
                
                <a href="CRUD/create.php">
                    <button class="create"><p><i class="fas fa-plus"></i> Product toevoegen</p></button>
                </a>
                <br>
                <br>
                <a href="">
                   <button class="loguit"> <p>Log uit <i class="fas fa-sign-out-alt"></i></p></button> 
                </a>
                
                
            </div>
        </div>
    </div>
<?php
require_once('helpers/footer.php');
?>
</body>
</html>