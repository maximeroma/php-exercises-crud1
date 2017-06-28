<?php
try {
  $bdd = new PDO ('mysql:host=localhost;dbname=colyseum;charset=utf8', 'roma', '8PJFIm!');

}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query("SELECT * FROM clients" );

?>

<ul>
  <?php
  while($donnees=$reponse->fetch()){
    if ($donnees['card'] == 1){
      echo '<li>Nom: '. $donnees['firstName'] ." Prénom: ".$donnees['lastName']." Date de naissance: ". $donnees['birthDate']." Carte de fidélité: OUI Numéro de carte: " .$donnees['cardNumber'] . '</li>';
    }
    echo '<li>Nom: '. $donnees['firstName'] ." Prénom: ".$donnees['lastName']." Date de naissance: ". $donnees['birthDate']. '</li>'
;
  }
  ?>
</ul>
