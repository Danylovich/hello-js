<?php

// ToDo

    require_once '../vendor/autoload.php';
    $loader = new \Twig\Loader\FilesystemLoader(
        '../public/html/'
    );
    $twig = new \Twig\Environment($loader);

    $location = '../db.sqlite3';
    $db = new SQLite3( $location );

    if( $_SERVER['REQUEST_METHOD'] == 'GET' ){
        echo $twig->render('demoadd.html', ['serv' => $_SERVER]);
    }

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // $
    }

?>