<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Amaterasu support</title>
        <link rel="shortcut icon" href="../assets/logo amaterasu.ico" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/5991870b6e.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/commandlist.css">
        <link rel="stylesheet" href="../css/loader.css">
        <link rel="stylesheet" href="../css/footer.css">
        <script src="../js/app.js"></script>
    </head>

    <body onload="load()">

        <div class="loader">
            <h1 class="loadertext">CHARGEMENT</h1>
            <img class="loadergif" src="../assets/loader.gif">
        </div>
        <div class="header">
            <div class="container">
                <div class="header__navbar">
                    <a href="../index.html" class="header__navbar--logo">
                        <img class= "header__navbar--logo--amaterasu" src="../assets/logo amaterasu.png">
                        <h1 class="header__navbar--logo--name">Amaterasu</h1>
                    </a>
                    <div class="header__navbar--menu">
                        <a href="https://discord.gg/5Mww29D9kB" class="header__navbar--menu--link" target="_blank"><i class="fab fa-discord"></i> Discord</a>
                        <a href="https://github.com/Wizi8914/Amaterasu" class="header__navbar--menu--link" target="_blank"><i class="fab fa-github"></i> Github</a>
                        <a href="https://twitter.com/Wizi20540539" class="header__navbar--menu--link" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="container" class="grid">

            <div class="separate">
                <?php
                    include "../Includes/sidebar.php"
                ?>

                <div class="commandinfo">
                    <h1 class="wip" id="ban">ban</h1>
                    <h1 class="wip" id="kick">kick</h1>
                    <h1 class="wip" id="stopbot">stopbot</h1>
                </div>
            </div>

            <?php 
                include "../Includes/footer.php"
            ?>
        </div>
    </body>
</html>