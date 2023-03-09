<?php 

class Students_Model {

    private $serverName = 'localhost';
    private $username = "root";
    private $password = null;

    // database handler
    private $dbh;
    // statement
    private $stmt;

    // constructor
    public function __construct()
    {
        // using PDO (php data object)
        // data source name / server identity
        $dsn = "mysql:host=$this->serverName;dbname=phpmvc";
        try {
            $this->dbh = new PDO($dsn,$this->username,$this->password);
        } catch(PDOException $e) {
                die($e->getMessage());
        }
        
    }
    public function getStudentsData() {
        $this->stmt = $this->dbh->prepare("SELECT * FROM students");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>