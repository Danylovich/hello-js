<?php
    echo '<table border="1">';
    echo '<tr>';
    $td = '';
    for($i=0; $i<10; $i++){
        $td .= '<td>' . $i . '</td>';
    }

    $a = ['apple','banan','pear'];
    $li = '';

    for($j=0; $j<sizeof($a); $j++){
        $li .= '<li>' . $a[ $j ] . '</li>';
    }
    // echo '</tr>';
    // echo '</table>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr><?=$td;?></tr>
    </table>

    <hr>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium adipisci itaque molestiae.</p>
        <ol>
            <?=$li;?>
        </ol>
</body>
</html>