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
                    <h1 class="wip" id="botinfo">botinfo</h1>
                    <h1 class="wip" id="clearchat">clearchat</h1>
                    <h1 class="wip" id="help">help</h1>
                    <h1 class="wip" id="ping">ping</h1>
                    <h1 class="wip" id="roles">roles</h1>
                    <h1 class="wip" id="server">server</h1>
                    <h1 class="wip" id="servericon">servericon</h1>
                </div>
            </div>

            <?php 
                include "../Includes/footer.html"
            ?>
        </div>
    </body>
</html>