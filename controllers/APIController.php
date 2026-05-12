<?php

namespace Controllers;

use Model\Servicio;

class APIController
{
    public static function index()
    {
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public function guardar()
    {
        $respuesta = [
            'mensaje' => 'Todo Ok',
        ];

        echo json_encode($respuesta);
    }
}

