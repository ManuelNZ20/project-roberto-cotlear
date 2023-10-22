<?php
// Clase para la conexión a la base de datos
class BaseConnection {
    private $driver;
    private $host, $user, $pass, $database, $port, $charset;
    
    public function __construct() {
        $db_cfg = require_once 'config/config.php';
        $this->driver = $db_cfg["DRIVER"];
        $this->host = $db_cfg["HOST"];
        $this->user = $db_cfg["USER"];
        $this->pass = $db_cfg["PASS"];
        $this->database = $db_cfg["BASE"];
        $this->port = $db_cfg["PORT"];
    }
    
    public function connect() {
        if ($this->driver == "mysql" || $this->driver == null) {
            $con = new PDO($this->driver.':host='.$this->host.';dbname='.$this->database, $this->user, $this->pass);
            $con->query("SET NAMES '".$this->charset."'");
        }
        
        return $con;
    }
}
?>