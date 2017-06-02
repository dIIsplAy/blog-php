<?php
// cette page permet de recuperé les information dun formulaire et les met 
// dans un tableau qu'il parcours jusqua trouver les deux bonne valeur qui permete la conection'
    $log = $_POST['login'];
    $password = $_POST['pass'];
    // md5 sers a encrypté un mots de passe pour le rendre securisé
    $encryptage = md5($password);
    $json_source = file_get_contents("auth.json");
    $json_datas = json_decode($json_source);





    foreach ($json_datas as $json_data){
        echo $encryptage . "</br>" . $json_data->pass;
        if ($log == $json_data->login && $encryptage == $json_data->pass){
            echo "Le Log est correct!";
            echo "</br>";
            echo "le password est fine";
        }
    }

        // autre solution d'authentification'
            // echo "Le password est correct!";
            
    // if ($encryptage == $json_data->pass){
    //     echo "Le password est correct!";
    // }else {
    //     echo"Oops c'est faux";
    // }
        

      
     
    
     
?>



