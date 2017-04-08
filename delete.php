<?php
/**
 * Delete
 */

if (isset($_GET['id'])) {
    // Если вызов произошел из этой формы по методу delete
    $pdo = new PDO("mysql:host=localhost;dbname=forma", 'root', 'ctvbyfhbz');
    $sql = "DELETE FROM article WHERE id = :id";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindParam(':id', $_GET['id']);
    $Result = $pdo_statement->execute();
    //var_dump($Result);

    header ("Location: read.php");
    exit(); // возвращаемся в read.php
}
?>