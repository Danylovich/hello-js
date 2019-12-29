<?php

require_once '../../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(
    '../../public/html/portfolio'
);
$twig = new \Twig\Environment($loader);

// foreach ( array_keys($_SERVER) as $k ) {
//     echo $k . ' ::: ' . $_SERVER[$k];
//     echo '<br>';
// }

if( $_SERVER['REQUEST_METHOD'] == 'GET' ){
    echo $twig->render('gallery_create.html', ['serv' => $_SERVER]);
}

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $title = $_POST['h_title'];
    $desc = $_POST['h_desc'];
    $file = $_FILES['h_file'];
    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $newname = ( uniqid(rand(), true) ) . '.' . $ext;
    move_uploaded_file(
        $file['tmp_name'],
        '../images/hotels/' . $newname
    );
    $url = '/images/hotels/' . $newname;

    $fname = '../storage/hotals.dat';
    $f = fopen($fname,'r');
    $h_str = fread( $f, filesize( $fname ) );
    $hotels = unserialize( $h_str );
    array_push( $hotels, [
        'title' => $title,
        'url' => $url,
        'desc' => $desc
    ] );
    $h_str = serialize( $hotels );
    $f = fopen( $fname, 'r+' );
    $ws = fwrite( $f, $h_str );
    fclose( $f );
    header('Location: /portfolio/gallery.php');

    // var_dump( $title, $file, $newname );
    // echo $twig->render('gallery_create.html');
}

// echo $twig->render('gallery.html');

?>