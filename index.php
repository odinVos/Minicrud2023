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
    <div class="background">
        <h1 class="name">Cafetaria Kranenburger</h1>
    </div>
    <main>
        <div class="wapen">

        </div>
        <div class="info">
            <h1>Over Ons</h1>
            <br>
            <hr>
            <br>
            <span>Welkom op de website van Kranenburger. <br> Kranenbrger is een cafetaria in Kranenburg(DE). Onze cafetaria bied een wijd asoortiment aan gerechten. </span>
        </div>
        <div>
        </div>
    </main>
    <div class="background">
        <div class="buttons">
            <a href="menu.php">
                <button>
                    <h2>Bekijk menu <i class="fas fa-chevron-right"></i></h2>
                </button>
            </a>
        </div>
    </div>
<?php
require_once('helpers/footer.php');
?>
</body>
</html>