<?php  

$host = getenv('DB_HOST');
$username = getenv('chtal6548');
$password = getenv('2226chtal6548');
$database = getenv('chtal6548');

 $db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
   
 ?>

