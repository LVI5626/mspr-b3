<html lang="fr">
  <head>
    <title>Nation Sounds - Le festival de la musique</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="public/css/home.css">
  </head>
    
  <body>
  <div style="padding: 100px 0px; padding-top: 80px;/*background:url(https://www.skieur.com/media/2020/Janvier/festival%C2%A9scordianicolas.jpg);*/ width: 80%; margin: auto;">
  
  <h1 style="text-align: center; color: #000; font-size: 36px;">Bienvenue chez Nation sounds</h1></div>
        <div id="slider-home">
          <div style="background: yellow;">
            <h1>Slider</h1>
          </div>
          <div style="background: yellow;">
            <h1>Slider</h1>
          </div>
          <div style="background: yellow;">
            <h1>Slider</h1>
          </div>
          <div style="background: yellow;">
            <h1>Slider</h1>
          </div>
          <div style="background: yellow;">
            <h1>Slider</h1>
          </div>
        </div>

        <div id="news-home">
            <!--<h1>News</h1>-->
            <?php   $reponse = $dbh->query('SELECT * FROM news ORDER BY id DESC LIMIT 1');
                                while ($donnees = $reponse->fetch()){
                                require "src/require/principal-news-require.php";    
                                } ?>

            <?php   $reponse = $dbh->query('SELECT * FROM news ORDER BY id DESC LIMIT 1,2') ;
                                while ($donnees = $reponse->fetch()){
                                require "src/require/news-require.php";    
                                } ?>
                            <div class="button-link" onclick="location.href='#';">
                                    <a href="#">Voir les actus</a>
                            </div> 
        </div>

        <div id="maps-home">
            <h1>Maps</h1>
        </div>
  </body>
</html>