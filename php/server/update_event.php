<?php

  include 'conector_db.php';


 

  $fecha_Final=$_POST['end_date'];
  $hora_Final=$_POST['end_hour'];
  $hora_Inicial=$_POST['start_hour'];
  $fecha_Inicio=$_POST['start_date'];
  $ID=$_POST['id'];

  createEvent();

  function createEvent(){
    initconex();
    $Consul = "update evento set FechaInicio='".$GLOBALS['fecha_Inicio']."', HoraInicio='".$GLOBALS['hora_Inicial']."', FechaFinalizacion='".$GLOBALS['fecha_Final']."', HoraFinalizacion='".$GLOBALS['hora_Final']."'
    where Id=".$GLOBALS['ID'];

    if ($GLOBALS['Conect']->query($Consul) === TRUE) {
        echo json_encode(array("msg"=>"OK"));
    } else {
        echo json_encode(array("msg"=>"Error registrar evento"));
    }
    desacConec();
  }
?>