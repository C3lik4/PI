<?php
class Conexion
{
    private $host;
    private $userName;
    private $password;
    private $db;
    private $configFile = "conf.csv";
    protected $conn;

    public function __construct()
    {
        $this->connect();
    }

    public function __destruct()
    {
        $this->conn->close();
    }
    //LEER LOS DATOS DEL FICHERO CONF.CSV Y REALIZAR LA CONEXIÓN A LA BASE DE DATOS//
    public function connect()
    {
        $configFile = fopen($this->configFile, "r") or die("Unable to open file!");
        if (!feof($configFile)) {
            $connData = fgetcsv($configFile);
            $this->host = $connData[0];
            $this->userName = $connData[1];
            $this->password = $connData[2];
            $this->db = $connData[3];
            $this->conn = new mysqli($this->host, $this->userName, $this->password, $this->db);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
    }
}