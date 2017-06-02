<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
  


</style>
</head>
<body>
    <h1>Mon Blog Type PHP</h1>


<?php
$dossier = "posts/";
$table = array_filter(scandir($dossier),function ($jambon){
    return !is_dir('posts/' . $jambon);
});

// unlink ("posts/evan.txt");
echo "</br>";

foreach ($table as $clef) {
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


?>
 <a href="indexblog.php">
    <button>Maison</button>
    </a>
    <a href="create.html">
    <button>Create TXT</button>
    </a>


<!--// <button name=".$clef.">Delete</button>
  // <button name=".$clef.">Change</button>-->
  </body>
</html>