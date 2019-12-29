<?php

require_once '../../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(
    '../../public/html/portfolio'
);
$twig = new \Twig\Environment($loader);

// require_once '../storage/hotels_dat.php';

// $h_str = serialize( $hotels );
// // var_dump( $h_str );
// $f = fopen( '../storage/hotals.dat', 'w+' );
// $ws = fwrite( $f, $h_str );
// fclose( '../storage/hotals.dat', $f );

// $fname = '../storage/hotals.txt';
$fname = '../storage/hotals.dat';
$f = fopen($fname,'r');
$h_str = fread( $f, filesize( $fname ) );
$hotels = unserialize( $h_str );
fclose( $f );

echo $twig->render('gallery.html',
    [ 'hotels' =>
        $hotels
        // array_slice(array_reverse( $hotels ), 0, 3)
    ]
);

?>