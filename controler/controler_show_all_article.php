<?php
    //import
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './view/view_show_all_articles.php';

    //instancier un nouvel objet
    $article = new Article(null, null);
    //stocke dans un tableau la liste des articles de la BDD
    $tab = $article->showAllArticle($bdd);
    //boucle pour afficher la liste des articles (avec le nom et le prix)
    foreach($tab as $value){
        echo '<li>
        '.$value->nom_art.', '.$value->content_art.' 
        </li>';
    }
    

    ?>