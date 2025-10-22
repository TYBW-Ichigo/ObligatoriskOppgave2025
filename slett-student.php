<?php  
?> 

<script src="funksjoner.js"> </script>

<h3>Slett en student</h3>

<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return bekreft()">
  Brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
  <input type="submit" value="Slett student" name="slettStudentKnapp" id="slettStudentKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettStudentKnapp"]))
    {	
      $brukernavn=$_POST ["brukernavn"];
	  
	  if (!$brukernavn)
        {
          print ("Brukernavn m&aring; fylles ut");
        }
      else
        {
          include("db-tilkobling.php");  

          $sqlSetning="SELECT * FROM student WHERE brukernavn='$brukernavn';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader==0) 
            {
              print ("Studenten finnes ikke");
            }
          else
            {	  
              $sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn';";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
              
		
              print ("F&oslash;lgende student er n&aring; slettet: $brukernavn  <br />");
            }
        }
    }
?> 
