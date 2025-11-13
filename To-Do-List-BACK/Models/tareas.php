<?php

use Laminas\Diactoros\Response\JsonResponse;

require_once __DIR__ . '/../Settings/db.php';

class Tareas{
    protected $con;

    public function __construct()
    {
        $this->con = DB::dbConnect();
    }

    //METODO CREATE
    public function create($data){
      $query=  "INSERT INTO tareas(nombreT,descripcion) VALUES(?,?)";
        try{
        $stmt=$this->con->prepare($query);
        $stmt->bind_param('ss',$data['nombreT'],$data['descripcion']);
        $stmt->execute();

        if($stmt->error){
            throw new Exception('Error al almacenar los datos');
        }
        return ['Message'=>'Datos alamcenados correctamente'];

        }
        catch(\Throwable $th)
        { return new JsonResponse(['Message'=>$th->getMessage()]); }
    }
    //Método Update
    public function update($id,$data){
        $query = 'UPDATE tareas SET nombreT = ?, descripcion = ? WHERE id_tareas = ?';
        try {
            $stmt = $this->con->prepare($query);
            $stmt->bind_param('ssi',$data['nombreT'],$data['descripcion'],$id);
            $stmt->execute();

            if($stmt->error){
                throw new Exception('Ocurrió un error al actualizar');
            }
        } catch (\Throwable $th) {
            return ['message' => $th->getMessage()];
        }

        return ['message' => 'Tarea actualizada satisfactoriamente'];
    }
    
}
?>