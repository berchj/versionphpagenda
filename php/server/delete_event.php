<?php

  include 'conector_db.php';
  $id=$_POST['id'];

  deleteEvent();

  function deleteEvent(){
    initconex();
    $consul = "delete from evento where Id=".$GLOBALS['id'];

    if ($GLOBALS['conect']->query($consul) === TRUE) {
        echo json_encode(array("msg"=>"OK"));
    } else {
        echo json_encode(array("msg"=>"error al eliminar evento"));
    }
    desacConec();
  }

 ?>