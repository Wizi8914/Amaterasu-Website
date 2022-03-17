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
                    <h1 class="wip" id="clear">clear</h1>
                    <h1 class="wip" id="info">info</h1>
                    <h1 class="wip" id="join">join</h1>
                    <h1 class="wip" id="leave">leave</h1>
                    <h1 class="wip" id="pause">pause</h1>
                    <h1 class="wip" id="play">play</h1>
                    <h1 class="wip" id="queue">queue</h1>
                    <h1 class="wip" id="resume">resume</h1>
                    <h1 class="wip" id="skip">skip</h1>
                    <h1 class="wip" id="skipto">skipto</h1>
                </div>
            </div>

            <?php 
                include "../Includes/footer.html"
            ?>
        </div>
    </body>
</html>