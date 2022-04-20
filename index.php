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
                            <a href="https://discord.com/oauth2/authorize?client_id=795298036644315166&scope=bot+applications.commands+identify+guilds&response_type=code&permissions=2080374975" target="_blank"><i class="fab fa-discord"></i> Add to Discord</a>
                        </div>
                        <div class="doc">
                            <a href="./pages/divers.php" target="_blank"><i class="fa solid fa-list-ul"></i> Documentation</a>
                            
                        </div>
                    </div>
                    
                    <p class="paragraph">Amaterasu is a project currently led by a single person. It started to be developed in 2019, it is developed in Javascript more precisely in Node.js and uses the Discord.js library, Amaterasu is an open source project and evolving in time, there are currently several bugs present on the bot please excuse the developer. Many future additions are already planned. Currently Amaterasu has 7 command categories. A support server discord is available to report any bug or to have more information about the project. The website also has a precise documentation of each command. This system is also present on the bot with the help command.</p>
                </nav>
            </div>
            <div class="fav">
                <div class="feature">
                    <div>
                        <img src="./assets/img/feature/feature_1.png" class="left">
                    </div>
                    <div style="width: 100%;">
                        <h2>Various and varied commands</h2>
                        <p class="text">Find a great category of practical and more or less useful commands</p>
                    </div>
                </div>

                <div class="feature">
                    <div style="width: 100%;">
                        <h2>A system for playing music</h2>
                        <p class="text">Play your favorite music in a living room with your friends. With the ability to directly set a playlist, pause the music, or retrieve the lyrics of the current music.</p>
                    </div>
                    <div>
                        <img src="./assets/img/feature/feature_2.png" class="right">
                    </div>
                </div>

                <div class="feature">
                    <div>
                        <img src="./assets/img/feature/feature_3.png" class="left">
                    </div>
                    <div style="width: 100%;">
                        <h2>Manage your server very simply</h2>
                        <p class="text">Get information about your discord server and several other commands to manage your discord server</p>
                    </div>
                </div>

                <div class="feature">
                    <div style="width: 100%;">
                        <h2>Discover anime related commands</h2>
                        <p class="text">Use commands to get accurate information about your favorite anime and manga</p>
                    </div>
                    <div>
                        <img src="./assets/img/feature/feature_4.png" class="right">
                    </div>
                </div>

                <div class="feature">
                    <div>
                        <img src="./assets/img/feature/feature_5.png" class="left">
                    </div>
                    <div style="width: 100%;">
                        <h2>Interact with other members</h2>
                        <p class="text">Discover a list of commands for the interaction between the members of the discord</p>
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