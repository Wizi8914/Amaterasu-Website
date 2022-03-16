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
                    <h1 class="wip" id="avatar">avatar</h1>
                    <h1 class="wip" id="calcul">calcul</h1>
                    <h1 class="wip" id="calculator">calculator</h1>
                    <h1 class="wip" id="cat">cat</h1>
                    <h1 class="wip" id="coinflip">coinflip</h1>
                    <h1 class="wip" id="dog">dog</h1>
                    <h1 class="wip" id="gif">gif</h1>
                    <h1 class="wip" id="icon">icon</h1>
                    <h1 class="wip" id="image">image</h1>
                    <h1 class="wip" id="invite">invite</h1>
                    <h1 class="wip" id="mcplayer">mcplayer</h1>
                    <h1 class="wip" id="pi">pi</h1>
                    <h1 class="wip" id="say">say</h1>
                    <h1 class="wip" id="sbstats">sbstats</h1>
                    <h1 class="wip" id="soundboard">soundboard</h1>
                    <h1 class="wip" id="wikipedia">wikipedia</h1>
                    <h1 class="wip" id="bug">bug</h1>
                    <h1 class="wip" id="translate">translate</h1>
                </div>
            </div>

            <?php 
                include "../Includes/footer.html"
            ?>
        </div>
    </body>
</html>