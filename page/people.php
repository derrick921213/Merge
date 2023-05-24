<?php
session_start();
require_once($_SESSION["Base"]);
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$url = $URLS;
Base(function($user,$passwd) use ($url){
    $controller = new Controller($user,$passwd);
    if(isset($_POST["user_remove"])){
        $result = $controller->deleteData($_POST["user_remove"]);
        if(!$result){
            die($result);
        }
    }
    $url['user_table'] = $controller->printData(); 

    $loader = new FilesystemLoader(ROOT_PATH.'/templates');
    $twig = new Environment($loader);
    if (basename($_SERVER["REQUEST_URI"]) == basename(__FILE__)){
        $url["people_active"] = "active";
        echo $twig->render('people.twig',$url);
    }
});
?>