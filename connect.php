<?php
 $host= 'localhost';
 $user='root';
 $password='';
 $dbname='pets';
 $dsn='mysql:host='. $host .';dbname='. $dbname;
 $pdo=new PDO("mysql:host=localhost;dbname=pets;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($pdo){
//echo "basarılı";
}else{
echo "basarısız";
}
?>