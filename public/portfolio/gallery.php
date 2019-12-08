<?php

require_once '../../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(
    '../../public/html/portfolio'
);
$twig = new \Twig\Environment($loader);

require_once '../storage/hotels_dat.php';

echo $twig->render('gallery.html',
    [ 'hotels' => 
        array_slice(array_reverse( $hotels ), 0, 3)
    ]
);

?>