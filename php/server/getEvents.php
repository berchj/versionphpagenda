<?php

    include 'conector_db.php';



    obEvent();



    function obEvent(){

       $event="";

       initconex();

       $consul="select * from evento where IdUsuario=3";

       $return= $GLOBALS['conect']->query($consul);

       while ($Fila = mysqli_fetch_array($return)){
         if(empty($event)){

            $event="[".json_encode(array("id"=> $Fila['Id'], "title"=> $Fila['Titulo'], "start"=> $Fila['FechaInicio']." ". $Fila['HoraInicio'], "allDay"=> $Fila['DiaCompleto'], "end"=> $Fila['FechaFinalizacion']." ".$Fila['HoraFinalizacion']));
          }else{
            $event=$event.",".json_encode(array("id"=> $Fila['Id'], "title"=> $Fila['Titulo'], "start"=> $Fila['FechaInicio']." ". $Fila['HoraInicio'], "allDay"=> $Fila['DiaCompleto'], "end"=> $Fila['FechaFinalizacion']." ".$Fila['HoraFinalizacion']));
          }
        }
        if(!empty($event)){
          $event=$event."]";
        }
       desacConec();
       echo $event;

    }
 ?>
