<?php
    //ajout de la vue
    include('../vue/vue_article.php');
    //connexion a la BDD
    include('../utils/connect.php');
    //test existence des champs nom_article et  contenu article 
    if(isset($_POST['nom_article']) and isset($_POST['contenu_article']))
    {
        //créer 2les variables qui vont récupérer le contenu des super globales POST
        $name = $_POST['nom_article'];
        $content = $_POST['contenu_article'];
        //ajout du model
        include('../model/model_article.php.');
    }
    else{
    //affichage dans la page html de ce que l'on à enregistré en bdd
    echo '<p>veuillez remplir les champs de formulaire</p>';
    } 
?>
