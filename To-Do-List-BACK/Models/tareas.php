<?php
require_once __DIR__ . '/../Settings/db.php';

class Tareas{
    protected $con;

    public function __construct()
    {
        $this->con = DB::dbConnect();
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