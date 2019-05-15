<?php
require 'config.php';

$id = 0;

if(isset($_GET['id']) && empty($_GET['id']) == false) {
    $id = addslashes($_GET['id']);
}

if(isset($_POST['nickname']) && empty($_POST['nickname']) == false) {
    $nickname = addslashes($_POST['nickname']);
    $email = addslashes($_POST['email']);

    $sql = "UPDATE users SET nickname = '$nickname', email = '$email' WHERE id = '$id'";
    $pdo->query($sql);

    header("Location: index.php");
}

$sql = "SELECT * FROM users WHERE id = '$id'";
$sql = $pdo->query($sql);

if($sql->rowCount() > 0) {
    $data = $sql->fetch();
} else {
    header("Location: index.php");
}
?>

<form method="POST">
    Name:<br/>
    <input type="text" name="nickname" value="<?php echo $data['nickname']; ?>" /><br/><br/> 
    E-mail:<br/>
    <input type="text" name="email" value="<?php echo $data['email']; ?>" /><br/><br/> 
    <input type="submit" value="Update"> 
    <input type="submit" value="Cancel"> 
</form>