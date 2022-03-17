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
                    <h1 class="wip" id="ban">ban</h1>
                    <h1 class="wip" id="kick">kick</h1>
                    <h1 class="wip" id="stopbot">stopbot</h1>
                </div>
            </div>

            <?php 
                include "../Includes/footer.html"
            ?>
        </div>
    </body>
</html>