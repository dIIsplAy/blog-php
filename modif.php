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
    // var_dump($_POST);
   
     
    $tata = file_get_contents("posts/". $_POST['file']);
     echo "<form action='newmodif.php' method='POST'>";
     echo "<input type='text' name='titre' value='".htmlspecialchars($_POST['file'])."'>";
     echo "<input type='hidden' name='last' value='".htmlspecialchars($_POST['file'])."'>";
     echo"<textarea name='contenue' clos='35' rows='7'>".$tata."</textarea>";
     echo"<input type='hidden' name='file' value='".htmlspecialchars($_POST['file'])."'>";
    echo"<button>Change</button>";
    echo"</form>";
    
    ?>
    
</body>
</html>