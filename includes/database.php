<?php

try {
  $dbName = 'mon_mini_chat';
  $host = 'localhost';
  $utilisateur = 'root';
  $motDePasse = 'root';
  $port='8886'; //port MySQL
  $dns = 'mysql:host='.$host .';dbname='.$dbName.';port='.$port;
  $bd = new PDO( $dns, $utilisateur, $motDePasse );
  $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  // On termine le script en affichant le code de l'erreur et le message
  die('<p> La connexion a échoué. Erreur['.$e->getCode().'] : '
   . $e->getMessage().'</p>');
 }
  ?>
