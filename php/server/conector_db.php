<?php

$HOST = 'localhost';
$USER = 'Julio';
$PASSWORD = '1234';
$BASE = 'next_u';
$conect;

function  desacConec(){
        $GLOBALS['conect']->close();
    }

function initconex(){
	try{
       $GLOBALS['conect']=mysqli_connect($GLOBALS['HOST'],$GLOBALS['USER'],$GLOBALS['PASSWORD'],$GLOBALS['BASE']);
       }catch(PDOException $e){
       }	
}


?>