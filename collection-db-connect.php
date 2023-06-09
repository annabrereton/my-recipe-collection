<?php

const HOST = 'db';
const USER = 'root';
const PASSWORD = 'password';
const CHARSET = 'utf8mb4';

// Wrapping PDO connection in a function to call easily
function connectToDb(string $db): PDO
{

    $dsn = 'mysql:host=' . HOST . ";dbname=$db;charset=" . CHARSET;

    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        $pdo = new PDO($dsn, USER, PASSWORD, $options);
    } catch (PDOException $exception) {
        echo '<p>There was an error connecting to the db</p>';
        exit();
    }

    return $pdo;
}
