<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=kobayashi; host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['name']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban1/index.php");
?>
