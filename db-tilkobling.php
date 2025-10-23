<?php  

$host = getenv('DB_HOST');
$username = getenv('DB_chtal6548');
$password = getenv('DB_2226chtal6548');
$database = getenv('DB_chtal6548');

 $db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
   
 ?>

