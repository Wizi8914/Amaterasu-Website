<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <meta charset="UTF-8" />
        <title>Amaterasu support</title>
        <link rel="shortcut icon" href="./assets/logo amaterasu.ico" type="image/x-icon"/>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap"rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/5991870b6e.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="./css/style.css" />
        <link rel="stylesheet" href="./css/header.css" />
        <link rel="stylesheet" href="./css/commandlist.css" />
        <link rel="stylesheet" href="./css/loader.css" />
        <link rel="stylesheet" href="./css/footer.css" />
        <link rel="stylesheet" href="./css/cursor.css">
        <link rel="stylesheet" href="./css/index.css">
        <script src="./js/app.js"></script>
        <script src="./js/cursor.js"></script>
    </head>

    <body onload="load()">
        <div class="loader">
            <h1 class="loadertext">CHARGEMENT</h1>
            <img class="loadergif" src="./assets/gif/loader.gif">
        </div>
        
        <img class="cursor" id="cursor" src="./assets/cursor/normal.png" alt="">
        
        <div class="header">
            <div class="container">
                <div class="header__navbar">
                    <a href="./index.php" class="header__navbar--logo">
                        <img class="header__navbar--logo--amaterasu" src="./assets/logo amaterasu.png">
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
                <nav class="mainpage">
                    <h1 class="title">A powerful multi-function Discord bot</h1>
                    <div class="mainbutton">
                        <div class="addbot">
                            <a href="https://discord.com/oauth2/authorize?client_id=795298036644315166&scope=bot+applications.commands+identify+guilds&response_type=code&permissions=2080374975" target="_blank"><i class="fab fa-discord"></i> Ajouter a discord</a>
                        </div>
                        <div class="doc">
                            <a href="./pages/divers.php" target="_blank"><i class="fa solid fa-list-ul"></i> Documentation</a>
                            
                        </div>
                    </div>                    
                </nav>
            </div>
            <div class="fav">
                <div class="feature">
                    <div></div>
                    <div>
                        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, corporis totam. Doloribus quasi consequuntur itaque?</p>
                    </div>
                </div>

                <div class="feature">
                    <div></div>
                    <div>
                        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, corporis totam. Doloribus quasi consequuntur itaque?</p>
                    </div>
                </div>

                <div class="feature">
                    <div></div>
                    <div>
                        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, corporis totam. Doloribus quasi consequuntur itaque?</p>
                    </div>
                </div>

                <div class="feature">
                    <div></div>
                    <div>
                        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, corporis totam. Doloribus quasi consequuntur itaque?</p>
                    </div>
                </div>

                <div class="feature">
                    <div></div>
                    <div>
                        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, corporis totam. Doloribus quasi consequuntur itaque?</p>
                    </div>
                </div>
            </div>
            <footer class="sitefooter">
                <p class="test">Powered by <a target="_blank" class="liblink" href="https://nodejs.org/en/"><img class="footer-logo" src="/assets/img/nodejs-logo.svg" alt="Node.js">&nbsp;Node.js</a>, 
                    <a target="_blank" class="liblink" href="https://discord.js.org/"><img class="footer-logo" src="/assets/img/discordjs-logo.png" alt="Discord.js">&nbsp;Discord.js</a>
                </p>
                <span>Copyright by Wizi © 2019 - 2022</span>
                <div class="linkfooter">
                    <a href="https://discord.gg/5Mww29D9kB" class="footerlink" target="_blank"><i class="fab fa-discord"></i></a>
                    <a href="https://github.com/Wizi8914/Amaterasu" class="footerlink" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://twitter.com/Wizi20540539" class="footerlink" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </footer>
        </div>
    </body>
</html>

