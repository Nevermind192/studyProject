<?php
$host = 'localhost';
$dbname = 'studyProject';
$username = 'root';
$password = '';

try
{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
    return $pdo;
}
catch (PDOException $exception)
{
    die("Error DB connection: " . $exception->getMessage());
}
