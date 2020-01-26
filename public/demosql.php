<?php

// twig
require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(
    '../public/html'
);
$twig = new \Twig\Environment($loader);

// sqlite
$location = '../db.sqlite3';
$db = new SQLite3( $location );
$rez = $db->query('select * from users');
$data = array();
while( $r = $rez->fetchArray() ){
    array_push( $data, $r);
};
$db->close();

// render html page
echo $twig->render('demosql.html',[
    'data' => $data
]);


?>