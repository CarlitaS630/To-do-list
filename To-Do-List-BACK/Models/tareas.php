<?php

use Laminas\Diactoros\Response\JsonResponse;

require_once __DIR__ . '/../Settings/db.php';

class Tareas{
    protected $con;

    public function __construct()
    {
        $this->con = DB::dbConnect();
    }

    //Método get
    public function get(){
        $query ='SELECT * FROM tarea';

        try{
            $stmt =$this->con->prepare($query);
            $stmt->execute();

            if ($stmt->error){
                throw new Exception('Error en la muestra de las tareas!');
            }

            $res = $stmt->get_result();
            $data_array = [];

            if ($res->num_rows > 0){
                while($data=$res->fetch_assoc()){
                array_push($data_array,$data);
                }
                return $data_array;
            }
            return $data_array;
        }catch (\Throwable $th) {
            return ['message' => $th->getMessage()];
        }
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
        { return ['Message'=>$th->getMessage()]; }
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


    // Metodo Delete
    public function delete($id)
    {
        $query = 'DELETE FROM tareas WHERE id = ?';
        try {
            $stmt = $this->con->prepare($query);
            $stmt->bind_param('i', $id);
            $stmt->execute();

            if ($stmt->error) {
                throw new Exception('No se pudo eliminar la tarea');
            }

            return ['message' => 'Tarea eliminada'];
        } catch (\Throwable $th) {
            return ['message' => $th->getMessage()];
        }
    }
}


?>