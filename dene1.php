<?php

include 'connect.php';


//$image = $_FILES['image']['name'];
$name = (!empty($_POST['name']) ? $_POST['name'] : '');
$image = (!empty($_FILES['image']['name']) ? $_FILES['image']['name'] : '');
$image1 = (!empty($_FILES['image']['tmp_name']) ? $_FILES['image']['tmp_name'] : '');
$imagePath = "uploads/".$image;





move_uploaded_file($image1,$imagePath);
//$pdo->query("INSERT INTO res (name,  image) VALUES ('".$name."','".$image1."')");
//$connect->query("INSERT INTO product (product_name,image) VALUES ('".$productname."','".$image."')");

$sql = 'INSERT INTO res (name,image) VALUES (:name, :image)';
    // Prepare query
    $query = $pdo->prepare($sql);
    // Execute query
    $query->execute(array(':name' => $name, ':image' => $image));

?>