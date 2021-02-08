<html lang="fr">
  <head>
    <title>Nos partenaires - Nation Sounds</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="public/css/partners.css">
  </head>
    
  <body>
      <h1>Villes</h1>
      <div class="partners">
            <div class="partners-second">
                    <div class="partners-third">
                            <?php   $reponse = $dbh->query('SELECT * FROM partners  WHERE partners_theme="Radio" ORDER BY id DESC');
                                                        while ($donnees = $reponse->fetch()){
                                                        require "src/require/partners-require.php";    
                                                        } ?>
                    </div>
            </div>
      </div>


      <h1>Radios</h1>
      <div class="partners">
            <div class="partners-second">
                    <div class="partners-third">
                            <?php   $reponse = $dbh->query('SELECT * FROM partners  WHERE partners_theme="Radio" ORDER BY id DESC');
                                                        while ($donnees = $reponse->fetch()){
                                                        require "src/require/partners-require.php";    
                                                        } ?>
                    </div>
            </div>
      </div>



      
      <h1>Journaux</h1>
      <div class="partners">
      <div class="partners-second">
      <div class="partners-third">
      <?php   $reponse = $dbh->query('SELECT * FROM partners  WHERE partners_theme="Journal" ORDER BY id DESC');
                                while ($donnees = $reponse->fetch()){
                                require "src/require/partners-require.php";    
                                } ?>
      </div>
      </div>
      </div>    
      <h1>Télévisions</h1>
      <div class="partners">
      <div class="partners-second">
      <div class="partners-third">
      <?php   $reponse = $dbh->query('SELECT * FROM partners  WHERE partners_theme="Radio" ORDER BY id DESC');
                                while ($donnees = $reponse->fetch()){
                                require "src/require/partners-require.php";    
                                } ?>
      </div>
      </div>
      </div>
      <h1>Boissons</h1>
      <div class="partners">
      <div class="partners-second">
      <div class="partners-third">
      <?php   $reponse = $dbh->query('SELECT * FROM partners  WHERE partners_theme="Radio" ORDER BY id DESC');
                                while ($donnees = $reponse->fetch()){
                                require "src/require/partners-require.php";    
                                } ?>
      </div>
      </div>
      </div>
  </body>
</html>