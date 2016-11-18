 <!-- N'oubliez pas de renomer le fichier en index.php-->
 <?php
session_start();
?>
<!DOCTYPE html>
<html lang = fr>
	
	
	<head> 
	   <meta name="Author" content="XXX" />  
	   <link rel = "stylesheet" href = "css/site.css" type = "text/css"/>
	   
	   <!-- N'oubliez pas le CDN de JQuery et votr fichier site.js-->
	   <script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
	   <script src="js/site.js" type="text/javascript"></script>
	   
	   <title> Contactez-nous</title> 
	</head> 
		
	<body >
	
	<form>
		<button type="submit" name="langbutton" value="FR/EN"> FR/EN </button>
	</form>
		<form id="form" action="form.php" method="POST" >
				<!-- Mise en forme: Chaque label et son champ sure une ligne-->
				<!-- Penser a mettres les couples label-champ dans une div-->
				<div class="cssdiv">
				<label>Prénom : </label> 
				<input id="jqinputname" placeholder ="Votre nom ici" name="firstname"/>
				</div>
				
				<br/>
				<br/>
				<br/>
				<br/>
				
				<div >
				<label for="lname">Nom : </label>
				<input id="jqinputsurname" type="text" name="lastname"  />
				</div>
				
				<div >
				<label>Université :</label> 
				<input   value ="UQTR" name="university"/>
				</div>
				
				<div >
				<label>Département : </label>
				<input type="text" name="department"  />
				</div>
				
				<div >
				<label>Sexe : </label>
				
					<input name="sexe" type="radio"  /> Masculin :
					<input name="sexe" type="radio" />Féminin :
					<input name="sexe" type="radio" /> Autre
				</div>
				
				<div >
				<label>Commentaires :</label>
				<textarea rows="8" cols="50" name="comments" >	</textarea>
				</div>
				
				<div >
				<label>Age : </label>
				
					<select name="age">
						<option>- de 18 ans</option>
						<option>18 à 40 ans</option>
						<option value="entre 41 et 60 ans">+ d 40 ans</option>
					</select>		
				</div>	
				
				<div >
				<input type="reset"  />
				<input type="submit" id="jqsubmit" value="Soumettre" />
				</div>
			
		</form>
		
	</body>
</html>