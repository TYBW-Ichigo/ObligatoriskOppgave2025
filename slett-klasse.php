<?php  
?> 

<script src="funksjoner.js"> </script>

<h3>Slett klasse</h3>

<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()">
  Klasse <select name="klassekode" id="klassekode">
    <option value="">velg klassekode</option>
    <?php include("dynamiske-listebokser.php"); listeboksklassekode(); ?> 
  </select>  <br/>
  <input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettKlasseKnapp"]))
    {
      $klassekode=$_POST ["klassekode"];	  
	  
      if (!$klassekode)
        {
          print ("Det er ikke valgt en klassekode"); 
        }
	  else {
		  include("db-tilkobling.php");  
      		$sjekk ="SELECT * FROM student WHERE klassekode='$klassekode';";
			$resultat = mysqli_query($db, $sjekk);
		
		if (mysqli_num_rows($resultat) > 0) {
			print("Kunne ikke slette klasse, fordi det er studenter der");
		}
		else
        {	  		 
          	
          $sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode';";
          mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
		
          print ("F&oslash;lgende klasse er n&aring; slettet: $klassekode  <br />");
        }	
    }
?> 
