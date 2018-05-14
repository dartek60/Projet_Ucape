<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Styles.css">
	<title>selection pays</title>
</head>
<body>
	<header>
    	<div class="Titre">
         	<div><h1 class="titre1">Ucape - Section</h1></div>
         	<div>
         		<p style="color: white">Vous êtes connecté en tant que :</p>
         		<a  href="#" class="deco" style="color: white">Déconnexion</a>
         	</div>

        </div>
	</header>

	<div>
		<h2 class="Choix">Navigation  :</h2>
        <a href="#" class="button1">Choix des pays</a>
        <a href="#" class="button2">Student Profile</a>
        <a href="#" class="button3">Documentation</a>
	</div>

	<div>
		<h2 class="Choix2"> Souhait de la destination :</h2>
		<form method="post" action="">
			<p>
				<label for="choice2">choix 1 <span style="color: red">*</span><label>
     			<select name="choice1" id="choice1">
			        <option value="">Méxique</option>
			        <option value="">Etats-Unis</option>
			        <option value="">Espagne</option>
			        <option value="">Allemagne</option>
     			</select>

			</p>
		</form>
	
		<form method="post" action="">
			<p>
				<label for="choice2">choix 2 <span style="color: red">*</span><label>
     			<select name="choice2" id="choice2">
			        <option value="">Méxique</option>
			        <option value="">Etats-Unis</option>
			        <option value="">Espagne</option>
			        <option value="">Allemagne</option>
     			</select>

			</p>
		</form>
		
		<form method="post" action="">
			<p>
				<label for="choice2">choix 3 <span style="color: red">*</span><label>
     			<select name="choice3" id="choice3">
			        <option value="">Méxique</option>
			        <option value="">Etats-Unis</option>
			        <option value="">Espagne</option>
			        <option value="">Allemagne</option>
     			</select>

			</p>
		</form>
	</div>

	<div class="echange">
		<fieldset>
  			<legend>En cas d'impossibilité d'échanges, envisagez-vous de partir avec Terre des Langues? <span style="color: red">*</span></legend>
			  <div>
			  </br>
			    <input type="checkbox" id="Yes" name="choiceYes" value="Yes">
			    <label for="Yes">Oui</label>
			  </div>
			  <div>
			    <input type="checkbox" id="music" name="choiceNo" value="No">
			    <label for="No">Non</label>

			  </div>
			  </br>
		</fieldset>
	</div>

	<div>
		<form method="post" action="traitement.php">
   			<p class="comment">
		       <label for="ameliorer">
		       Commentaire :
		       </label>
		       <br />
       
		       <textarea name="ameliorer" id="ameliorer" rows="10" cols="50">
		       
		       </textarea>       
   			</p>

   			<input type="checkbox" id="Visa" name="choiceYes" value="Visa">
			    <label for="Visa">Visa du parent</label>
		</form>
	</div>
	<div class="bouton">
		<a href="#" class="button4">Validation des souhaits</a>
	</div>
</body>
</html>