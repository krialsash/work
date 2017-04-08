<?php
    if ($_POST['name'] && $_POST['description'] && $_POST['created_at']) {
        //Проверяем чтобы все значения были заполнены
        //echo (info);
        //апдейтим
        $pdo = new PDO('mysql:host=localhost;dbname=forma', 'root', 'ctvbyfhbz', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $sql = "UPDATE article SET name = :name, description = :description, created_at = :created_at WHERE id = :id";
        $pdo_statement = $pdo->prepare($sql);
        //var_dump($sql);
        $pdo_statement->bindParam(':name', $_POST['name']);
        $pdo_statement->bindParam(':description', $_POST['description']);
        $pdo_statement->bindParam(':created_at', $_POST['created_at']);
        $pdo_statement->bindParam(':id', $_GET['id']);
        $result = $pdo_statement->execute();
        var_dump($result);

        header ("Location: read.php");
        exit(); // возвращаемся в read.php
        }
//var_dump($item);
?>

<?php

/**update */

if (isset($_GET['id'])) {
    echo ('UPDATE:');

    $pdo = new PDO('mysql:host=localhost;dbname=forma', 'root', 'ctvbyfhbz');
    $sql = "SELECT * FROM article WHERE id=:id";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindParam(':id', $_GET['id']);
    $pdo_statement->execute();
    $Result = $pdo_statement->fetchall();
    $item = $Result[0];
    $title = $item['name'];
}
//var_dump($item);
?>
<form method="post" action="update.php?id=<?php echo $item['id']?>">
<table border="1" >
    <tr align="center" >
        <td>Name: </td>
        <td>Description:</td>
        <td>Date:</td>
    </tr>
    <tr>
        <td><input type="text" name="name" value="<?php echo ($item['name']) ?>"</td>
        <td><input type="text" name="description" value="<?php echo ($item['description']) ?>"</td>
        <td><input type="date" name="created_at" value="<?php echo ($item['created_at']) ?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}"/> </td>
    </tr>
</table>

<p><input type="submit" value="Отправить" /></p>
</form>