<?php

    $database_username = 'root';
    $database_password = '';
    $dbname="ue";
    $dsn = 'mysql:host=localhost;dbname=' . $dbname;
    try 
    {
        $pdo_conn = new PDO($dsn, $database_username, $database_password ); 
    }
    catch (PDOException $exception) 
    {
        echo $exception;
        die();
    }
?>
