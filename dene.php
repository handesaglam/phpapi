<?php
include "connect.php";

  // Create database connection
 // $image = $_FILES['image']['name'];
  $name = (!empty($_POST['name']) ? $_POST['name'] : '');
  $image = (!empty($_FILES['image']['name']) ? $_FILES['image']['name'] : '');
  $imagePath = "uploads/".$image;
  //move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);

  //move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);

  if(isset($_FILES['image'])){
   // echo $_FILES['image']['tmp_name'];
   move_uploaded_file($_FILES['image']['tmp_name'],$name);
}else{


echo "gvg";

}

?>