<?php

/**read*/
echo ('Problem:');
?>

<p></p>

<?php
    $pdo = new PDO('mysql:host=localhost;dbname=forma', 'root', 'ctvbyfhbz');

    $sql = "SELECT * FROM article";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();

    foreach ($result as &$value){
     }
?>

<table>
    <tr>
        <td>Id: </td>
        <td>Name: </td>
        <td>Description:</td>
        <td>Date:</td>
    </tr>
   <tr>
        <td><?php echo ($value['id']) ?></td>
        <td><?php echo ($value['name']) ?></td>
        <td><?php echo ($value['description']) ?></td>
        <td><?php echo ($value['created_at']) ?></td>
    </tr>
</table>

