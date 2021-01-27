<?php
	$db = mysqli_connect('localhost','root','','pets');
	if (!$db) {
		echo "Database connection faild";
	}

	//$image = $_FILES['image']['name'];
   // $name = $_POST['name'];
    $image = (!empty($_FILES['image']['name']) ? $_FILES['image']['name'] : '');
    $tarih = (!empty($_POST['tarih']) ? $_POST['tarih'] : '');
    $starttime = (!empty($_POST['starttime']) ? $_POST['starttime'] : '');
    $endtime = (!empty($_POST['endtime']) ? $_POST['endtime'] : '');
    $city = (!empty($_POST['city']) ? $_POST['city'] : '');
    $type = (!empty($_POST['type']) ? $_POST['type'] : '');
    $notlar = (!empty($_POST['notlar']) ? $_POST['notlar'] : '');
   
	$imagePath = 'uploads/'.$image;
	//$tmp_name = $_FILES['image']['tmp_name'];
    $tmp_name = (!empty($_FILES['image']['tmp_name']) ? $_FILES['image']['tmp_name'] : '');
	move_uploaded_file($tmp_name, $imagePath);

	$db->query("INSERT INTO notice(image,tarih,starttime,endtime,city,type,notlar
    )VALUES('".$image."','".$tarih."','".$starttime."','".$endtime."',
    '".$city."','".$type."','".$notlar."')");


?>