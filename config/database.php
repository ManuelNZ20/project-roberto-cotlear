<?php
// Clase para la conexión a la base de datos
require_once (__DIR__.'/config.php');

class BaseConnection {
    private $driver;
    private $host, $user, $pass, $database, $port;
    
    public function __construct() {
        $this->driver = DRIVER;
        $this->host = HOST;
        $this->user = USER;
        $this->pass = PASS;
        $this->database = BASE;
        $this->port = PORT;
    }
    
    public function connect() {
        // Exepción para el control de errores
        try {
            $con = new PDO($this->driver.':host='.$this->host.';dbname='.$this->database, $this->user, $this->pass);
            echo 'Conexión exitosa';
            return $con;
        } catch (PDOException $e) {
            echo 'Conexión Fallida';
            echo $e->getMessage();
        }

    }
}
$base = new BaseConnection();
$base->connect();
?>