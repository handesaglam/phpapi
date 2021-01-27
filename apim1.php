<?php
include 'connect.php';

$sqlquery="select * from notice";
$run = $pdo->prepare($sqlquery);
$run->execute();
$fetch = array();
while($row=$run->fetch(PDO::FETCH_ASSOC)){
$fetch[]=$row;
}

echo json_encode($fetch);



?>