


<!--method pour recuperé des information d'un text area et les stocké dans un fichier txt qu'on creé en PHP-->

<?php
$titre = $_POST['title'];
$text = $_POST['text'];
$file = fopen("text.txt", "w");
fwrite($file, $text);
fwrite($file, $titre);
fclose($file);
?>





<!--methode qui recupere les information d'un text area et les stock dans un fichier a l'interieur d'un dossier creé avec PHP'-->

<?php
   if(isset($_POST['titre'])) {
       $titre = $_POST['titre'];
       $text = $_POST['text'];
       fopen($titre . '.txt', 'w');

       if (!is_dir('posts')) {
           mkdir ('posts');
       }
       $ficier = fopen('posts/' . $titre . '.txt', 'w');
       fwrite ('$fichier, $contenu');
       fclose ('$fichier');
   }else {
       echo '<p> Formilaire vide </p>';
   };


?>