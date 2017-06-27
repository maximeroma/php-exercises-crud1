<?php
try {
  $bdd = new PDO ('mysql:host=localhost;dbname=colyseum;charset=utf8', 'roma', '8PJFIm!');

}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM clients LIMIT 0,19');

?>

<ul>
  <?php
  while($donnees=$reponse->fetch()){
    echo '<li>'. $donnees['firstName'] ." ".$donnees['lastName']. '</li>';
  }
  ?>
</ul>
