<?php
$pdo = require_once("connection.php");

$id = $_GET["id"];
$sql = "DELETE FROM trending WHERE id = '$id'";
$stmt = $pdo->prepare($sql);
try
{
    $stmt->execute();
    header("Location: trending.php");
}
catch (PDOException $exception)
{
    echo $exception->getMessage();
}