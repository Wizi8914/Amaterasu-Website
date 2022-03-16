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
        <?php 
            include "../Includes/header.html"
        ?>
        <div id="container" class="grid">

            <div class="separate">
                <?php
                    include "../Includes/sidebar.html"
                ?>

                <div class="commandinfo">
                    <h1 class="wip" id="feed">feed</h1>
                    <h1 class="wip" id="hug">hug</h1>
                    <h1 class="wip" id="kiss">kiss</h1>
                    <h1 class="wip" id="pat">pat</h1>
                </div>
            </div>

            <?php 
                include "../Includes/footer.html"
            ?>
        </div>
    </body>
</html>