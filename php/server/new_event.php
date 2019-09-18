<?php

  include 'conector_db.php';

  $titulo=$_POST['titulo'];
  $fecha_Inicio=$_POST['start_date'];
  $todo_Dia=$_POST['allDay'];
  $fecha_Final=$_POST['end_date'];
  $hora_Final=$_POST['end_hour'];
  $hora_Inicial=$_POST['start_hour'];

  createEvent();

  function createEvent(){
    initconex();
    $consul = "INSERT INTO evento (IdUsuario, Titulo, FechaInicio, HoraInicio, FechaFinalizacion, HoraFinalizacion, DiaCompleto)
    VALUES (".$_COOKIE['id_user'].", '".$GLOBALS['titulo']."', '".$GLOBALS['fecha_Inicio']."', '".$GLOBALS['hora_Inicial']."', '".$GLOBALS['fecha_Final']."', '".$GLOBALS['hora_Final']."', '".$GLOBALS['todo_Dia']."')";

    if ($GLOBALS['conect']->query($consul) === TRUE) {
        echo json_encode(array("msg"=>"OK","Id"=>$GLOBALS['conect']->insert_id));
    } else {
        echo json_encode(array("msg"=>"Error registrar evento"));
    }
    desacConec();
  }

 ?>