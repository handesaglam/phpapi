<?php
 $host= 'localhost';
 $user='root';
 $password='';
 $dbname='pets';
 $dsn='mysql:host='. $host .';dbname='. $dbname;
 $pdo=new PDO("mysql:host=localhost;dbname=pets;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$stmt = $pdo->query('SELECT * FROM users');
//while($row = $stmt->fetch()){
   // echo $row-> name .'<br>';

//}
$name = (!empty($_POST['name']) ? $_POST['name'] : '');
$email = (!empty($_POST['email']) ? $_POST['email'] : '');
$password = (!empty($_POST['password']) ? $_POST['password'] : '');

$stmt = $pdo->prepare( "SELECT 1 FROM `userspets` WHERE `email` = ?");
$stmt->execute([$email]);
$found = $stmt->fetchColumn();
if( $found ) {
    echo "Email found!";


} else {
  //  echo "Email not found!";
  $sql = 'INSERT INTO userspets (name, email, password) VALUES (:name, :email, :password)';
    // Prepare query
    $query = $pdo->prepare($sql);
    // Execute query
    $query->execute(array(':name' => $name, ':email' => $email, ':password' => $password));
}



?>