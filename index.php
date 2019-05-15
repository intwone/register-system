<?php
require 'config.php';
?>

<a href="add.php">Add new user</a>
<table border="0" width="100%">
    <tr> <!-- row -->
        <th>Name</th> <!-- column bold --> <!-- <td></td> column without bold -->
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * FROM users";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0) {
        foreach($sql->fetchAll() as $user) {
            echo '<tr>';
            echo '<td>'.$user["nickname"].'</td>';
            echo '<td>'.$user["email"].'</td>';
            echo '<td><a href="edit.php?id='.$user['id'].'">Edit</a> - <a href="confirm_del.php?id='.$user['id'].'">Delete</a></td>'; // select id
            echo '</tr>';
        }
    } else {

    }
    ?>
</table>