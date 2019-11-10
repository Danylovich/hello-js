<?php

    require_once '../vendor/autoload.php';
    $loader = new \Twig\Loader\FilesystemLoader(
        '../public/html'
    );
    $twig = new \Twig\Environment($loader);

    $cities = ['Lviv','Kyiv','Ivano-Frankivsk'];
    $myName = 'Bohdan';

    $score = [
        ['name'=>'Pupil 1', 'score'=>[7,4,11], 'avg'=>0 ],
        ['name'=>'Pupil 2', 'score'=>[8,12,11], 'avg'=>0 ],
        ['name'=>'Pupil 3', 'score'=>[7,7,10], 'avg'=>0 ],
        ['name'=>'Pupil 4', 'score'=>[2,4,6], 'avg'=>0 ],
        ['name'=>'Pupil 5', 'score'=>[12,6,8], 'avg'=>0 ]
    ];

    for($i=0; $i < count($score); $i++){
        $a = 0;
        for($j=0; $j < 3; $j++){
            $a += $score[$i]['score'][$j];
        }
        $a /= 3;
        $score[$i]['avg'] = $a;
    }

    echo $twig->render('app.html',[
        'title' => 'lst twig page',
        'username' => $myName,
        'cities' => $cities,
        'score' => $score
    ]);

?>