<?php

function ajouter($a, $b, $c, $d){

    if(require("database.php")){
        $requete= $database->prepare("INSERT INTO utilisateur (email, nom, prenom, age) VALUES (?, ?, ?, ?)") ;
        $requete->execute(array($a, $b, $c, $d));
        $requete->closeCursor() ;
    }
}

function afficher(){
    
}

function modifier(){
    
}

function supprimer(){
    
}

?>