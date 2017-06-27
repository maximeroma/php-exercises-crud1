<?php
try {
  $bdd = new PDO ('mysql:host=localhost;dbname=colyseum;charset=utf8', 'roma', '8PJFIm!');

}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM showTypes');

?>

<ul>
  <?php
  while($donnees=$reponse->fetch()){
    echo '<li>'. $donnees['type'] . '</li>';
  }
  ?>
</ul>
