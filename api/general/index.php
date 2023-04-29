<?php
//error_reporting(0);
// se determina que la pagina repondera typo Json
// se permite el acceso desde cualquier origen y la peticion y envio de datos.
header('Content-type: application/json; ');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS,PUT,DELETE");
header("Aloow: GET, POST, OPTIONS,PUT,DELETE");
$method = $_SERVER['REQUEST_METHOD'];

$json = file_get_contents('php://input');
$data = json_decode($json, TRUE);



saludar();
function saludar()
{

   json("Hola caballero");
   
}


function json($r)
{
    echo (json_encode($r));
}
