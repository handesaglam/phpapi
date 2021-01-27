<?php

$pdo=new PDO("mysql:host=localhost;dbname=pets;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$name = (!empty($_POST['name']) ? $_POST['name'] : '');
$email = (!empty($_POST['email']) ? $_POST['email'] : '');
$password = (!empty($_POST['password']) ? $_POST['password'] : '');

$kullanici = $pdo->query("SELECT * FROM userspets  WHERE email = '$email' AND password = '$password'")->fetch(PDO::FETCH_ASSOC);

if($kullanici)
{
   // $_SESSION["kullanici"] = $kullanici;
 echo "dogru";
}
else
{
    echo "yanlış";
}







?>