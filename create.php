<?php

/**create*/

echo ('Add your information about problem:');

var_dump($_POST['name'], $_POST['description'], $_POST['created_at']);

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {
    //проверка поступивших данных - после должен быть код который будет отправлять данные в базу
    $pdo = new PDO('mysql:host=localhost;dbname=forma', 'root', 'ctvbyfhbz');
    var_dump($pdo);
    $sql = "INSERT INTO article (name, description, created_at) VALUES (:name, :description, :created_at)";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindValue(':name', $_POST['name']);
    $pdo_statement->bindValue(':description', $_POST['description']);
    $pdo_statement->bindValue(':created_at', $_POST['created_at']);
    $pdo_statement->execute();
    //send sql
}
?>

<form action="create.php" method="post">

    <p>Name: <input type="text" name="name"></p>

    <p>Description: <input type="text" name="description"></p>

    <p>Date: <input type="text" name="created_at"></p>

    <p><input type="submit" value="Отправить" /></p>

</form>

<?php
$time = date('Y-m-d H:i:s', time());
var_dump($time);
?>
