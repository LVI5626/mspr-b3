<?php
    function listProject(){
        // ici requeter la base de données pour récupérer les anime
        require_once "src\Model\astk-model.php";
        $donnees3 = $reponse3->fetch();
        require "src\View\channel-view.php";
        
        $reponse->closeCursor(); // Termine le traitement de la requête
    }  


    function listNews(){
        // ici requeter la base de données pour récupérer les anime
        require_once "src\Model\astk-model.php";
        $donnees5 = $reponse5->fetch();
        require "src\View/news-view.php";
        
        $reponse5->closeCursor(); // Termine le traitement de la requête
    }  

    function listEvents(){
        // ici requeter la base de données pour récupérer les anime
        require_once "src\Model\astk-model.php";
        $donnees8 = $reponse8->fetch();
        require "src\View/events-view.php";
        
        $reponse8->closeCursor(); // Termine le traitement de la requête
    }  

    function listMembers(){
        // ici requeter la base de données pour récupérer les anime
        require_once "src\Model\astk-model.php";
        $donnees10 = $reponse10->fetch();
        require "src\View/members-presentation-view.php";
        
        $reponse5->closeCursor(); // Termine le traitement de la requête
    }  