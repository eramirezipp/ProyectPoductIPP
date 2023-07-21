<?php
require_once "Basedata.php";
class UserProcess {
    protected $con;
    public function __construct(){
        // utilizamos la clase ya creada anteriormente
        $db = new SQLConexionDB();
        $this->con =$db->dbConnection();
    }
    public function readUser($id){
        // ejecutamos un comando sql
        $sql = "SELECT * FROM users WHERE id = ?";
        $com = $this->con->prepare($sql);
        $com->bind_param("i", $id);
        $com->execute();
        $user = $com->get_result();
        return $user->fetch_assoc();
    }
    public function insertUser($name, $email){
        $sql = "INSERT INTO users (id, name, email) VALUES (null, ?,?)";
        $com = $this->con->prepare($sql);
        $com->bind_param("ss", $name, $email);
        $com->execute();
        $com->get_result();
        return "ok";
    }
}
?>