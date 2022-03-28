<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php
            include "../Includes/link.html"
        ?>
    </head>

    <body onload="load()">

        <div class="loader">
            <h1 class="loadertext">CHARGEMENT</h1>
            <img class="loadergif" src="../assets/gif/loader.gif">
        </div>

        <img class="cursor" id="cursor" src="../assets/cursor/normal.png">

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