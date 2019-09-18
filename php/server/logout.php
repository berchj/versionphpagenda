<?php
    include 'check_login.php';

    
    $NombreUsuario='';

    $id_user=0;

    setcookie('nombre',$nombre);

    setcookie('id_user',$id_user);

    header('Location: '.'../client/index.html');

 ?>