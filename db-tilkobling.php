<?php  

$host = getenv('b-studentsql-1.usn.no');
$username = getenv('chtal6548');
$password = getenv('2226chtal6548');
$database = getenv('chtal6548');

 $db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
   
 ?>

