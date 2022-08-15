<?php
include('../config/config.php');
include('../config/Database.php');

class clientes{
    public $conn;

    function __construct()
    {
        $db = new Database();
        $this->conn = $db->connectToDatabase();
    }

    function save($params){
        $firstName = $params['firstName'];
        $Direction = $params['Direction'];
        $email = $params['email'];
        $phone = $params['phone'];
        $servicio = $params['servicio'];

        $insert = " INSERT INTO clientes VALUES (NULL, '$firstName', '$Direction', '$email', '$phone', '$servicio')";
        return mysqli_query($this->conn, $insert);
        }

    function getAll(){
    $sql = "SELECT * FROM clientes  ";
    return mysqli_query($this->conn, $sql);
 }

 function getone($id){
    $sql = "SELECT * FROM clientes WHERE id = $id";
    return mysqli_query($this->conn, $sql);
} 
 
function update($params){
    $firsName = $params['firsName'];
    $Direction = $params['Direction'];
    $email = $params['email'];
    $phone = $params['phone'];
    $servicio = $params['servicio'];
    $id = $params['id'];

    $update = " UPDATE clientes SET firsName='$firsName', Direction='$Direction', email='$email', phone='$phone', servicio='$servicio' WHERE id = $id";
    return mysqli_query($this->conn, $update);
    
    }
    
    function remove($id){
        $eliminar= "DELETE FROM clientes WHERE id = $id"; /* Elimine de la tabla x, el id que me */
        return mysqli_query($this->conn, $eliminar);
    }
}