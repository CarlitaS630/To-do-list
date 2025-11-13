<?php

use Laminas\Diactoros\Response\JsonResponse;
use Laminas\Diactoros\ServerRequest;

require_once __DIR__ . '/../Models/tareas.php';

class TareasController{
    
    //Método update
    public function actTarea(ServerRequest $request, $id)
    {
        $id_al = (int) $id;
        if (!is_int(intval($id_al)) || intval($id_al) < 1){
            return new JsonResponse(['message' => 'Error en la conexión']);
        }

        $data = $request->getParsedBody();

        if(empty($data)){
            $json = $request->getBody()->getContents();
            $data = json_decode($json) ?? [];
        }

        $nombreT = $data->nombreT;
        $descripcion = $data->descripcion;

        if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/u', $nombreT)){
            return new JsonResponse(['message' => 'Error en el nombre']);
        }
        if (preg_match('/^.+$/s', $descripcion)){
            return new JsonResponse(['message' => 'Error en la descripción']);
        }

        $data_arr =
        [
            'nombreT' => $nombreT,
            'descripcion' => $descripcion
        ];

        $tarea = new tareas;
        return new JsonResponse($tarea->update($data_arr,$id_al));
    }
}
?>