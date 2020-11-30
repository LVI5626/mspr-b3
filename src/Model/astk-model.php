<?php
    require_once "src/connexion.php";
    global $dbh;
    $reponse = $dbh->query('SELECT * FROM members ORDER BY name_members');
    $reponse2 = $dbh->query('SELECT * FROM projects ORDER BY id ');
    $reponse3 = $dbh->query('SELECT * FROM projects WHERE project_name="'. $_GET["page"] .'"');
    $reponse4 = $dbh->query('SELECT * FROM news ORDER BY id');
    $reponse5 = $dbh->query('SELECT * FROM news WHERE news_title="'. $_GET["page"] .'"');
    $reponse6 = $dbh->query('SELECT * FROM news ORDER BY id Limit 3');
    $reponse7 = $dbh->query('SELECT * FROM events ORDER BY id');
    $reponse8 = $dbh->query('SELECT * FROM events WHERE events_title="'. $_GET["page"] .'"');
    $reponse9 = $dbh->query('SELECT * FROM events ORDER BY id Limit 3');
    $reponse10 = $dbh->query('SELECT * FROM members WHERE name_members="'. $_GET["page"] .'"');
    $reponse11 = $dbh->query('SELECT * FROM creations ORDER BY id');
    $reponse12 = $dbh->query('SELECT * FROM creations ORDER BY id');
?>