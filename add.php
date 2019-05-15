<?php
require 'config.php';

if(isset($_POST['name']) && empty($_POST['name']) == false) { // Se existir o nome e não estiver vazio
    $nickname = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $password = md5(addslashes($_POST['password']));

    $sql = "INSERT INTO users (nickname, email, pass) VALUES ('$nickname', '$email', '$password')";
    $pdo->query($sql);

    header("Location: index.php"); 
}
?>

<form method="POST">
    Name:<br/>
    <input type="text" name="name" /><br/><br/> 
    E-mail:<br/>
    <input type="text" name="email" /><br/><br/> 
    Passoword: <br/>
    <input type="password" name="password" /><br/><br/> 
    <input type="submit" value="Register"> 
</form>