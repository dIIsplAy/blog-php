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
    unlink("posts/".$_POST['file']);
    echo 'fichier suprimé';

    ?>
    <a href="index.php">
    <button>Maison</button>
    </a>
</body>
</html>