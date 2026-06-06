<?php

namespace Controllers;

use Model\Cita;
use Model\Servicio;

class APIController
{
    public static function index()
    {
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar()
    {
        $cita = new Cita($_POST);


        $respuesta = [
          //Arreglo asociativo es igual a un objeto en javascript, por ende se puede utilizar en javascript
          'cita' => $_POST
        ];

        echo json_encode($respuesta);
    }
}
