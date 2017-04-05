<?php

/**read*/
echo ('Problem:');
?>

<p></p>

<?php
    $pdo = new PDO('mysql:host=localhost;dbname=forma', 'root', 'ctvbyfhbz');
    var_dump($pdo);
    $sql = "SELECT * FROM article";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    var_dump($result);

?>

<p></p>
<?php
   // $pdo = new PDO('mysql:host=localhost;dbname=forma', 'root', 'ctvbyfhbz');
   // $sql = "SELECT name FROM article";
   // $pdo_statement = $pdo->prepare($sql);
   // $pdo_statement->execute();
   // $name = $pdo_statement->fetchAll();
   // var_dump($name);

   // $id = $pdo_statement->fetchall(["id"]);
   // $name = $pdo_statement->fetchall('name');
   // $description = 'description';
   // $created_at = 'created_at';
?>

<p></p>

<table>
    <tr>
        <td>Id: </td>
        <td>Name: </td>
        <td>Description:</td>
        <td>Date:</td>
    </tr>
    <tr>
        <td><?php print_r ($result) ?></td>
        <td><?php echo ('$name') ?></td>
        <td><?php echo ('$description') ?></td>
        <td><?php echo ('$created_at') ?></td>
    </tr>
</table>

