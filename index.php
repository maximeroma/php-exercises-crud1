<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      try {
        $bdd = new PDO ('mysql:host=localhost;dbname=exemple_pour_auch;charset=utf8', 'roma', '8PJFIm!');

      }
      catch (Exception $e)
      {
          die('Erreur : ' . $e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM exemple_auch');

      while($donnees=$reponse->fetch()){
        echo '<p>Nom user= ' . $donnees['nom'] . ' - Email user=' . $donnees['email'].'</p>';
      }


      // $req= $bdd->prepare('INSERT INTO exemple_auch(nom, email, password) VALUES(:nom,:email,:password)');
      // $req-> execute(array(
      //   'nom' => $nom,
      //   'email' => $email,
      //   'password' => $password,
      // ));

      $bdd->exec('UPDATE exemple_auch SET nom = "lala" WHERE nom = "rom"');

      $bdd->exec('DELETE FROM exemple_auch WHERE nom="lala"');

    ?>
  </body>
</html>
