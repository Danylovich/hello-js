<?php

    require_once '../vendor/autoload.php';
    $loader = new \Twig\Loader\FilesystemLoader(
        '../public/html'
    );
    $twig = new \Twig\Environment($loader);

    echo $twig->render('app.html');

?>