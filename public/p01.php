<?php
    $s = 'php echo working';
    $r = (2+2)*34-456;
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
    <h1> Hello PHP </h1>
    <hr>
    <?php
        echo 'php text';
    ?>
    <p><?=$s?></p>
    <p><?=$r?></p>
</body>
</html>