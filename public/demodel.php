<?php

    $id = $_GET['id'];

    // ToDo - delete
    $location = '../db.sqlite3';
    $db = new SQLite3( $location );

    //      BAD, but maybe injected
    // $sql = 'delete from users where id=' . $id;
    // $db->exec( $sql );

    //      GOOD
    $pq = $db->prepare('delete from users where id=:id');
    $pq->bindValue( ':id', $id, SQLITE3_INTEGER );
    $pq->execute();
    $db->close();

    // Go -> demosql
    header( 'Location: demosql.php' );

?>

DELETE - <?=$id;?>