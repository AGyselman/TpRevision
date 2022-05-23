<?php
//session start
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    
    
/*--------------------------ROUTER -----------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
        //route /evalmvc/test -> ./test.php
        case $path === "/TpRevision/test" : 
            include './test.php';
            break ;

            case $path === "/TpRevision/article":
                include './controler/controler_show_all_article.php';
                break ;
            }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
?>
