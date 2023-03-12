<?php 

class Students_Model {

    private $table = 'students';
    private $db;
    // constructor
    public function __construct()
    {
     $this->db = new Database();
        
    }



    public function addDataStudent($data) {
      
        $name = htmlspecialchars($data["student_name"]);
        $nim = htmlspecialchars($data["student_nim"]);
        
        $query = "INSERT INTO students VALUES ('',:name,:nim)";
        $this->db->query($query);
        $this->db->bind('name',$name);
        $this->db->bind('nim',$nim);
        
        // Execute
        $this->db->execute();
        return $this->db->rowCount();
       
    }

    
    public function getAllStudents() {
        // query process
        $this->db->query("SELECT * FROM $this->table");
        // get data 
        return $this->db->resultSet();
    }

    public function getStudentById($id) {
        // stored data you want to bind
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }



}

?>