<?php


class dataBaseConnect{
    
    private $conn;
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dataBase = "empresas";

    public function __construct(){
        $this->connect_db();
    }


    //metodo para conectar a base de datos 

    public function connect_db(){
        $this->conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dataBase);

        if ($this->conn->connect_errno) {
            die("La conexion a base de datos fallo:". $this->conn->connect_errno);
        }else {
            //echo "Conexion exitosa a base de datos";
        }
    }

    //metodo para traer datos de la base de datos 

    public function readData_db(){
        
        $sql = "SELECT Id_producto, Nombre_producto, Descripcion_producto, Valor_producto, 
                DATE_FORMAT(Fecha_vencimiento, '%d-%m-%Y') AS Fecha_venc, Imagen_producto FROM producto";
        
        $result = mysqli_query($this->conn, $sql);

        return $result;
    }


}
    