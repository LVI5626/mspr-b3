<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="public/css/header.css">
    <link rel="icon" type="image/x-icon" href="public/img/logo/myastk.png">
    
    <title>Astk.</title>
</head>
<body>


<header class="header">
      <a href="index.php?page=accueil"><img src="public/img/logo/astk.png"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">    
            <li><a href="actualités.php">Actualités</a></li>
            <li><a href="index.php?page=projets">Projets</a></li>
            <li><a href="index.php?page=realisations">Réalisations</a></li>
            <li><a href="index.php?page=presentation">Présentation</a></li>
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

        <a href="index.php?page=realisations" class="underline">Réalisations</a>
                        </p>

                    </div>


                    <div class="link" style="flex: 0 1 20%;">
                            <a href="index.php?page=accueil" ><img src="public/img/logo/astk.png"></a>
                    </div>


                    <div class="head-right" style="flex: 0 1 50%;text-align: left;">
                    <p>
                            <a href="index.php?page=presentation" class="underline">Présentation</a>

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
                        // puis afficher une liste des animes
                        require_once "src/View/accueil-view.php";
                    }

                    elseif (isset($_GET["page"]) and $_GET["page"] == "membres" ) {
                        // puis afficher une liste des animes
                        require_once "src/View/members-view.php";
                        
                    }

                    elseif (isset($_GET["page"]) and $_GET["page"] == "projets" ) {
                        // puis afficher une liste des animes
                        require_once "src/View/project-view.php";
                    }


                    elseif (isset($_GET["page"]) and $_GET["page"] == "ee1" ) {
                        //require_once "src/View/one-piece-view.php";
                        require_once "src/Controller/astk.php";
                        listProject(); // on appelle la fonction
                    }
                    elseif (isset($_GET["page"]) and $_GET["page"] == "ee2" ) {
                        //require_once "src/View/one-piece-view.php";
                        require_once "src/Controller/astk.php";
                        listProject(); // on appelle la fonction
                    }

                    elseif (isset($_GET["page"]) and $_GET["page"] == "ee3" ) {
                        //require_once "src/View/one-piece-view.php";
                        require_once "src/Controller/astk.php";
                        listProject(); // on appelle la fonction
                    }   


                    elseif (isset($_GET["page"]) and $_GET["page"] == "myastk" ) {
                        //require_once "src/View/one-piece-view.php";
                        require_once "src/Controller/astk.php";
                        listProject(); // on appelle la fonction
                    }   

                    elseif (isset($_GET["page"]) and $_GET["page"] == "nautika" ) {
                        //require_once "src/View/one-piece-view.php";
                        require_once "src/Controller/astk.php";
                        listProject(); // on appelle la fonction
                    }   

                    elseif (isset($_GET["page"]) and $_GET["page"] == "l_resize" ) {
                        //require_once "src/View/one-piece-view.php";
                        require_once "src/Controller/astk.php";
                        listProject(); // on appelle la fonction
                    }   

                    elseif (isset($_GET["page"]) and $_GET["page"] == "eechannels" ) {
                        //require_once "src/View/one-piece-view.php";
                        require_once "src/Controller/astk.php";
                        listProject(); // on appelle la fonction
                    }   

                    elseif (isset($_GET["page"]) and $_GET["page"] == "sinkice" ) {
                        //require_once "src/View/one-piece-view.php";
                        require_once "src/Controller/astk.php";
                        listProject(); // on appelle la fonction
                    }  




                    
                    elseif (isset($_GET["page"]) and $_GET["page"] == "actualités" ) {
                        // puis afficher une liste des animes
                        require_once "src/View/actualités-view.php";
                    }


                    elseif (isset($_GET["page"]) and $_GET["page"] == "realisations" ) {
                        // puis afficher une liste des animes
                        require_once "src/View/realisations-view.php";
                    }



/*Les Actualités*/                    
                    elseif (isset($_GET["page"]) and $_GET["page"] == "LE FAN-DUB BEASTARS EST LA!!!" ) {
                        // puis afficher une liste des animes
                        require_once "src/Controller/astk.php"; 
                        listNews();
                    }


                    elseif (isset($_GET["page"]) and $_GET["page"] == "La plateforme Web EE1 ouvre ses portes" ) {
                        // puis afficher une liste des animes
                        require_once "src/Controller/astk.php"; 
                        listNews();
                    }

/*Les Evénements*/                    
                    elseif (isset($_GET["page"]) and $_GET["page"] == "On se prepare a la japan expo" ) {
                        // puis afficher une liste des animes
                        require_once "src/Controller/astk.php"; 
                        listEvents();
                    }


                    elseif (isset($_GET["page"]) and $_GET["page"] == "Paris Games Week, nous voila" ) {
                        // puis afficher une liste des animes
                        require_once "src/Controller/astk.php"; 
                        listEvents();
                    }
                    



/*Les Membres*/                    
                    elseif (isset($_GET["page"]) and $_GET["page"] == "Louis DEPREZ" ) {
                        // puis afficher une liste des animes
                        require_once "src/Controller/astk.php"; 
                        listMembers();
                    }


                    elseif (isset($_GET["page"]) and $_GET["page"] == "Maxime GOUILHERS" ) {
                        // puis afficher une liste des animes
                        require_once "src/Controller/astk.php"; 
                        listMembers();
                    }






                    elseif (isset($_GET["page"]) and $_GET["page"] == "presentation" ) {
                        require_once "src/View/presentation-view.php";
                    }


                    elseif (isset($_GET["page"]) and $_GET["page"] == "connexion" ) {
                        // puis afficher une liste des animes
                        require_once "src/View/connexion-view.php";
                    }
                          

                    elseif (isset($_GET["page"]) and $_GET["page"] == "inscription" ) {
                        // puis afficher une liste des animes
                        require_once "src/View/inscription-view.php";
                    }

                    elseif (isset($_GET["page"]) and $_GET["page"] == "contact" ) {
                        // puis afficher une liste des animes
                        require_once "src/View/contact-view.php";
                    }

                    elseif (isset($_GET["page"]) and $_GET["page"] == "footer" ) {
                        // puis afficher une liste des animes
                        require_once "src/View/footer.php";
                    }
                    
                    else {
                        require_once "src/View/accueil-view.php";
                    }

    ?>
<?php
		include 'src/require/footer-require.php';
	?>
</body>
</html>