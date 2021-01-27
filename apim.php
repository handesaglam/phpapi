<?php
include 'connect.php';

$sqlquery="select * from userspets";
$run = $pdo->prepare($sqlquery);
$run->execute();
$fetch = array();
while($row=$run->fetch(PDO::FETCH_ASSOC)){
$fetch[]=$row;
}

echo json_encode($fetch);




?>