<?php
class Database {
    protected $servername = "127.0.0.1";
    protected $username = "root";
    protected $password = "";
    protected $conn;

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=course_management;charset=utf8", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>
