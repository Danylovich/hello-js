<?php

require_once '../../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(
    '../../public/html/portfolio'
);
$twig = new \Twig\Environment($loader);

$imgs = [
    '/images/xim.jpeg',
    '/images/do.jpeg',
    '/images/rose-blue-flower-rose-blooms-67636.jpeg'
];

echo $twig->render('index.html', ['imgs'=>$imgs] );

?>