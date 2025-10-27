<?php  

$host = getenv('DB_HOST', 'b-studentsql-1.usn.no');
$username = getenv('DB_USER', 'chtal6548');
$password = getenv('DB_PASSWORD', '2226chtal6548');
$database = getenv('DB_DATABASE', 'chtal6548');

 $db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
   
 ?>
