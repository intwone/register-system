<?php

$id = addslashes($_GET['id']);

echo "Are you sure you want to delete this register? <br/>";
echo "<a href='delete.php?id=$id'>YES</a> <br/>";
echo "<a href='index.php'>NO</a>";

?>