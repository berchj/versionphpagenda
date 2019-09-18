<?php



    include 'conector_db.php';





    createUser('Julio Bermudez','1996/04/09','Julio@gmail.com','1234');
    createUser('Stefany Molina','1996/03/30','Stefany@gmail.com','1234');
    createUser('Carly Bermudez','2003/09/03','Carly@gmail.com','1234');






    function createUser($Nombre,$FechaNacimiento,$UserName,$Password){

    initconex();
    $consul="Select * from usuario where Username='".$UserName."'";
    $return= mysqli_num_rows($GLOBALS['conect']->query($consul));
    if($Resultado==0){
        $consul = "INSERT INTO usuario (Nombre, FechaNacimiento, Username, Password)
        VALUES ('".$Nombre."', '".$FechaNacimiento."', '".$UserName."', '".password_hash($Password, PASSWORD_BCRYPT)."')";

        if ($GLOBALS['conect']->query($consul) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: ". $sql."<br>".$GLOBALS['conect']->error;
        }
    }
     desacConec();
    }
 ?>