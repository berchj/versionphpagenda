<?php
$userName=$_POST['username'];
$password=$_POST['password'];
include 'conector_db.php';
initsesion();
function initsesion(){
	$return='';
	initconex();
	$id_user=0;
	$nombre='';
	$consul="Select * from usuario where Username='".$GLOBALS['userName']."'";
	$resul=$GLOBALS['Conexion']->query($consul);
	if(mysqli_num_rows($resul)==0){
           $return="Usuario o Contraseña incorrecta";}else{
       while ($Fila = mysqli_fetch_array($resul)){
            if(password_verify($GLOBALS['password'],$Fila['password'])){
               $id_user=$Fila['Id'];
               $nombre=$Fila['Nombre'];
               setcookie('id_user',$id_user);
               setcookie('nombre',$nombre);
               $return="OK";
            }
            else{
                $return="user o password incorrectos";
            }
        }
       }
       desacConec();
       echo json_encode(array("msg"=>$return));
    }

}



?>