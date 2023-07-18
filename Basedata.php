<?php
class SQLConexionDB {
    // aqui se debinen la informacion basica para la conexion
    private $host = "localhost";
    private $Namedb = "usuarios";
    private $user = "root";
    private $psw = "";
    public $con;

    public function dbConnection() {
        $this->con = null;
        try {
            //generamos la conexion a la base de datos sql
            $this->con = new mysqli($this->host, $this->user, $this->psw, $this->Namedb);
        }catch(Exception $exception){
            echo $exception->getMessage();
        }
        return $this->con;
    }
}

?>