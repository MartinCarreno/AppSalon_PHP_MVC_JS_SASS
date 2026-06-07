<?php

namespace Controllers;

use Model\Cita;
use Model\CitaServicio;
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
        //almacena la cita y devuelve la id
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();
        $id = $resultado['id'];

        
        //Almacena los servicios con el ID de la cita
        $idServicios = explode(",", $_POST['servicios']); //explode es como un split, como le pasamos POST devuelve un arreglo. por eso usamos un foreach luego
        foreach ($idServicios as $idServicio) {
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];
            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();
        }
        

        /* $respuesta = [
          //Arreglo asociativo es igual a un objeto en javascript, por ende se puede utilizar en javascript
          'cita' => $cita
        ]; */

        //retorna una Respuesta
        echo json_encode(['resultado' => $resultado]);
    }
}
