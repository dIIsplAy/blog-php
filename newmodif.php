<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // suprime le fichier precedent
    unlink("posts/".$_POST['last']);
    // creéé un dossier
    $file = fopen("posts/".$_POST['titre'],"w");
    // ecrit dans le dossier
    fwrite($file, $_POST['contenue']);
    fclose($file);
      

    echo 'Votre fichier a bien été modifier!';

    
    ?>
    <a href="index.php">
    <button>Maison</button>
    </a>
    <a href="create.html">
    <button>Create TXT</button>
    </a>
</body>
</html>