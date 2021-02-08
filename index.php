<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="public/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="">
</head>
    <body>
        
    <div class="main">
    <div class="main2">
            <div id="alert" style="">
                <p><i class="fas fa-exclamation-triangle"> </i> Alerte Covid: Port du masque obligatoire</p>
            </div>

<header class="header">
      <a href="index.php?page=accueil"><img src="public/img/logos/astk.png"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">    
            <li><a href="actualités.php">Actualités</a></li>
            <li><a href="index.php?page=scenes">scenes</a></li>
            <li><a href="index.php?page=billeterie">Billeterie</a></li>
            <li><a href="index.php?page=partenaires">Partenaires</a></li>
            <li><a href="evenements.php.php">Evenements</a></li>
            <li><a href="src/View/contact-view.html">Contact</a></li>
        </ul>
    </header>

    <header class="header-desk">
        <div class="nav">
            <nav>    
                <div class="left">
                    <a href="index.php"><img src="public/img/logos/nation_sounds.png" style="width: 100px;"></a>
                </div>
                <div class="right">
                    <a href="index.php?page=eeo-live" class="ee" id="eeone">Programme</a>
                    <a href="index.php?page=scenes" class="ee" id="eetw">Scènes</a>
                    <a href="index.php?page=billeterie" class="ee" id="eethr">Billeterie</a>
                    <a href="index.php?page=scenes" class="ee" id="eethr">FAQ</a>
                    <a href="index.php?page=contact" class="ee" id="eethr">A propos</a>
                </div>
            </nav>
        </div>
    </header>
            <?php
                    require_once "src/connexion.php";
                    $dbh->exec("SET CHARACTER SET utf8");
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

                    elseif (isset($_GET["page"]) and $_GET["page"] == "scenes" ) {
                        require_once "src/View/scenes-view.php";
                    }
                    elseif (isset($_GET["page"]) and $_GET["page"] == "contact" ) {
                        require_once "src/View/contact/contact-view.php";
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
            </div>
            </div>
    </body>
</html>