<!DOCTYPE html>
<html>
<head>
    <title>formulaire</title>
    <meta charset="utf-8">
</head>
<body>
  <div class="form">
    <form method="post" action="formulaire.php">
      <h4>Votre pseudo : <input type="text" name="pseudo"></h4>
      <h4>Votre message : <input type="text" name="msg"></h4>
      <input type="submit" name="submit" value="envoyer">
       <div id="container"><a href="deconnexion.php"><input type="submit" id='submit' value='DECONNEXION'></a> </div>
  </form>
</div>
<hr>
<div class="msg">

<?php

	if(isset($_POST['submit'])){ 
		   extract($_POST);
		   if(!empty($pseudo) && !empty($msg)){ 

		 	   include('includes/database.php');
		 	
		 	   $q = $bd->prepare("INSERT INTO mini_chat(pseudo,msg) VALUES (:pseudo,:msg)");
		 	  
		 	   $q ->execute([
		 	   			'pseudo' => $pseudo,
		 	   			'msg' => $msg
		 	   ]);

		    }else{
		    	echo "les champs ne sont pas tous remplies";
		    }
	}//fin grand isset
	
	

 	  include('includes/database.php');
      $afficher = $bd->query('SELECT * FROM formulaire ORDER BY id DESC LIMIT 0 ,10');//afficher les 10 derniers, du plsu recent au plus ancien msg
      while($donnees = $afficher->fetch()){ //affichage des msg du chat
      ?>
      <p> <?php echo $donnees['date_heure']; ?> <strong>Pseudo: <?php echo $donnees['pseudo']; ?><strong> Message: <?php echo $donnees['msg'];?> </p> 
      <?php
      }
  

  ?>
</div>
</body>
</html>
