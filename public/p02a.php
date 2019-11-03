

 <?php

    $h = file_get_contents('html/tmp-header.html');
    $f = file_get_contents('html/tmp-footer.html');

    echo $h;

    echo '<h1>Hello</h1>';
    
    $td = '';
    for($i=0; $i<10; $i++){
        $td .= '<td>' . $i . '</td>';
    }

    echo "<table border='1'><tr> $td </tr></table>";

    $a = ['apple','banan','pear'];
    $li = '';
    for($j=0; $j<sizeof($a); $j++){
        $li .= '<li>' . $a[ $j ] . '</li>';
    }
     echo '<hr>';
     echo "<ol> $li </ol>";

     echo $f;
?>