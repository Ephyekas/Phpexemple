<?php
    try
    {                
        //Exécution de la requête SQL insert
        $reponse = $bdd->query('insert into article(nom_article, contenu_article) 
        values("'.$name.'", "'.$content.'")');
        echo "ajout de l'article : $name qui à comme contenu : $content";                    
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
?>