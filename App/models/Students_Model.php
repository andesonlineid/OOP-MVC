<?php 

class Students_Model {

    private $table = 'students';
    private $db;
    // constructor
    public function __construct()
    {
     $this->db = new Database();
        
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