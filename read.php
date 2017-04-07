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
?>

<table border="1" >
    <tr align="center" >
        <td>Id: </td>
        <td>Name: </td>
        <td>Description:</td>
        <td>Date:</td>
        <td>Action:</td>
    </tr>
    <tr><?php foreach($result as &$value) { ?>
       <td><?php echo ($value['id']) ?></td>
       <td><?php echo ($value['name']) ?></td>
       <td><?php echo ($value['description']) ?></td>
       <td><?php echo ($value['created_at']) ?></td>
        <td>
            <a href="Update.php?id=<?php echo $value['id'];?>"> Update</a>
            <a href="Delete.php?id=<?php echo $value['id'];?>"> Delete</a>
        </td>
       </tr>
    <?php } ?>
</table>

