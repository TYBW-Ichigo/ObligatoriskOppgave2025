<?php  /*  dynamiske listebokser */


function listeboksklassekode()
{
  include("db-tilkobling.php"); 
      
  $sqlSetning="SELECT * FROM klasse ORDER BY klassekode;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
   
	
  $antallRader=mysqli_num_rows($sqlResultat); 

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  
      $klassekode=$rad["klassekode"]; 

      print("<option value='$klassekode'>$klassekode</option>"); 
    }
}

function listeboksBrukernavn()
{
  include("db-tilkobling.php");  
      
  $sqlSetning="SELECT * FROM student ORDER BY brukernavn;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
  
	
  $antallRader=mysqli_num_rows($sqlResultat);  

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  
      $brukernavn=$rad["brukernavn"]; 

      print("<option value='$brukernavn'>$brukernavn</option>");  
    }
}


?>
