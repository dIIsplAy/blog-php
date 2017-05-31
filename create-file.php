


<!--method pour recuperé des information d'un text area et les stocké dans un fichier txt qu'on creé en PHP-->

<?php
// $titre = $_POST['title'];
// $text = $_POST['text'];
// $file = fopen("text.txt", "w");
// fwrite($file, $text);
// fwrite($file, $titre);
// fclose($file);
?>





<!--methode qui recupere les information d'un text area et les stock dans un fichier a l'interieur d'un dossier creé avec PHP'-->
<?php
/*
*/
  // if(isset($_POST['create'])) {
      if(!isset($_POST['title'])
      && !isset($_POST['text'])) {
          echo '<p>formulaire non envoyé</p>';
          exit(1);
      }
      $titre = $_POST['title'];
      $text = $_POST['text'];
      if(!is_dir('posts')) {
          mkdir('posts');
      }
      $fichier = fopen('posts/' . $titre
      . '.txt', 'w');
      fwrite($fichier, $text);
      fclose($fichier);
      echo '<p>bravo tu as écrit un fichier</p>';
  // }else {
  //     echo '<p>formulaire non envoyé</p>';
  // }
?>