<?php
    //Define our DB config
    define('DB_HOST', 'localhost');
    define('DB_USER', 'cody');
    define('DB_PASS', '123456');
    define('DB_NAME', 'php_dev');

    //create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check the connection
    if($conn->connect_error) {
        die('Connection fail' + $conn->connect_error);
    }
?>
