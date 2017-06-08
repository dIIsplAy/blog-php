<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
  .fichier{
      margin-top:5%;
      display:flex;
      align-items:center;
      
      flex-direction:column;
  }
#creé{
    color:lightgrey;
    font-size:0.7em;
    display:flex;
    justify-content:start;
    flex-direction:column;
}
        #mamen{
            font-size:0.6em;
            color:grey;
    font-family: "capcommega";
    display:flex;
    flex-direction:column;
    align-items:center;

        }

</style>
</head>
<body>

<div id="creé">
    <h2>ICI TU CREÉ DES FICHIER MON JOIN SUR</h2>
 <a href="index.php">
    <button>Maison</button>
    </a>
    <a href="create.html">
    <button>Create TXT</button>
    </a>
    
</div>
<?php

include ('header.php');
echo '<h3 id="mamen"> LA DESSOUS YA TES FICHIER MAMENNN BREBIS GALEUSE VA</h3> ';
$dossier = "posts/";
$table = array_filter(scandir($dossier),function ($jambon){
    return !is_dir('posts/' . $jambon);
});
echo "</br>";

foreach ($table as $clef) {
  echo '<div class="fichier">';  
    echo "<h3>" . $clef . "</h3>";
    echo file_get_contents($dossier. $clef);
    echo "<form action='modif.php' method='POST'>
    <input type='hidden' value='".$clef."' name='file'>
    <button>Change</button>
    
    </form>";
      echo "<form action='deletemodif.php' method='POST'>
           <input type='hidden' value='".$clef."' name='file'>
           <button>Delete</button>

    </form>";
    
    
}

echo'</div>';

?>



<!--// <button name=".$clef.">Delete</button>
  // <button name=".$clef.">Change</button>-->
  </body>
</html>