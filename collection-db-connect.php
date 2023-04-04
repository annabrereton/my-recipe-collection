<?php

// The below might sometimes be put in a separate settings file.
const HOST = 'db';
const USER = 'root';
const password = 'password';
const CHARSET = 'utf8mb4';

// Wrapping PDO connection in a function to call easily
function connectToDb(string $db): PDO
{
//    echo 'In connectToDb'; // To test why not working
//    echo 'HOST is ' . HOST; // To test who not working
    $dsn = 'mysql:host=' . HOST . ";dbname=$db;charset=" . CHARSET;// $dsn = "mysql:host=HOST;dbname=$db;charset=CHARSET";
//echo $dsn; // To test why not working                            // Above is the incorrect code that test echos helped identify
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        $pdo = new PDO($dsn, USER, password, $options);
    } catch (PDOException $exception) {
        echo '<p>There was an error connecting to the db</p>';
        exit();
    }

    return $pdo;
}
