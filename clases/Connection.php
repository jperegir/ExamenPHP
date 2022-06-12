<?php

class Connection
{
    protected $conn;
    public function __construct()
    {
        $fichero = file_get_contents(__DIR__ . "/../config/db.json");
        $datosDB = json_decode($fichero, true);

        $servername = $datosDB["host"];
        $username = $datosDB["user"];
        $password = $datosDB["password"];
        $db = $datosDB["database"];
        $port = $datosDB["port"];

        //Establece la conexión
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$db;port=$port", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conexión a BBDD establecida!";
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }

    public function __destruct()
    {
        //cierra la conexión
        $this->conn = null;
    }
}
