<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="public/css/header.css">
    <link rel="icon" type="image/x-icon" href="">
</head>
    <body>
    <div id="topbar">
        <div class="topbar-social">
            <a href="#"> <img src="public/img/socials/facebook-bl.png"></a>
            <a href="#"> <img src="public/img/socials/twitter-bl.png"></a>
            <a href="#"> <img src="public/img/socials/insta-bl.png"></a>
        </div>
    </div>

    <header class="header">
      <a href="index.php?page=accueil"><img src="public/img/logos/astk.png"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">    
            <li><a href="actualités.php">Actualités</a></li>
            <li><a href="index.php?page=projets">Projets</a></li>
            <li><a href="index.php?page=billeterie">Billeterie</a></li>
            <li><a href="index.php?page=partenaires">Partenaires</a></li>
            <li><a href="evenements.php.php">Evenements</a></li>
            <li><a href="src/View/contact-view.html">Contact</a></li>
        </ul>

    </header>


            <div class="head2">
                <div class="head">
                    <div class="head-left" style="flex: 0 1 50%;margin-left: auto;justify-content: right;text-align: right;">
                        <p>

        <a href="actualités.php" class="underline">Actualités</a>


        <a href="index.php?page=projets" class="underline">Projets</a>

        <a href="index.php?page=billeterie" class="underline">Billeterie</a>
                        </p>

                    </div>


                    <div class="link" style="flex: 0 1 20%;">
                            <a href="index.php?page=accueil" ><img src="public/img/logos/astk.png"></a>
                    </div>


                    <div class="head-right" style="flex: 0 1 50%;text-align: left;">
                    <p>
                            <a href="index.php?page=partenaires" class="underline">Partenaires</a>

                            <a href="evenements.php" class="underline">Evenements</a>

                            <a href="index.php?page=contact" class="underline">Contact</a>

                    </p>
                    </div>
                </div>
            </div>
            <?php
                    require_once "src/connexion.php";

                    if (isset($_GET["page"]) and $_GET["page"] == "migration" ) {
                        require_once "src/Migration/migration20200406150927.php";
                    }
                    
                    elseif (isset($_GET["page"]) and $_GET["page"] == "fixture" ) {
                        require_once "src/Fixture/fixtures.php";
                    }

                    elseif (isset($_GET["page"]) and $_GET["page"] == "accueil" ) {
                        require_once "src/View/accueil-view.php";
                    }

                    elseif (isset($_GET["page"]) and $_GET["page"] == "billeterie" ) {
                        require_once "src/View/billets-view.php";
                    }

                    elseif (isset($_GET["page"]) and $_GET["page"] == "partenaires" ) {
                        require_once "src/View/partners-view.php";
                        
                    }
                    else {
                        require_once "src/View/accueil-view.php";
                    }
                ?>
            <footer>
                <div class="footer-flex">
                    <div class="footer-left">            
                        <p>
                            © 2019 Main Square Festival. All rights reserved.
                            Live Nation France Festivals contact@mainsquarefestival.fr
                            Politique de confidentialité    Cookies
                        </p>
                    </div>
                    <div class="footer-right">
                        <a href="#"> <img src="public/img/socials/facebook.png"></a>
                        <a href="#"> <img src="public/img/socials/twitter.png"></a>
                        <a href="#"> <img src="public/img/socials/insta.png"></a>
                    </div>
                </div>
            </footer>
    </body>
</html>