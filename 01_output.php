<?php
//This is a comment

/* This is a multi
line comment
in pgp */

//USE THE SEMICOLON

//ECHO
echo 123, 'hello', 10.5;

//PRINT
print 123;

//PRINT_R()
print_r([1,2,3]);

//VAR_DUMP
var_dump('hello');

//VAR_EXPORT()
var_export('hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            //This is an php output in html
            echo 'Title: This is a title';
        ?>
    </h1>
    <h2><!-- Short hand to echo something out in php -->
        <?= 'This was short hand' ?>
    </h2>
</body>
</html>
