<?php

class Students_Model
{

    private $table = 'students';
    private $db;
    // constructor
    public function __construct()
    {
        // instanciate database wrapper
        $this->db = new Database();
    }


    public function addDataStudent($data)
    {

        $name = htmlspecialchars($data["student_name"]);
        $nim = htmlspecialchars($data["student_nim"]);

        $query = "INSERT INTO students VALUES ('',:name,:nim)";
        $this->db->query($query);
        $this->db->bind('name', $name);
        $this->db->bind('nim', $nim);

        // Execute
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteStudent($id)
    {
        $query = "DELETE FROM $this->table WHERE " . 'id=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateStudent($data)
    {
        $id = $data['student_id'];
        $name = $data['student_name'];
        $nim = $data['student_nim'];

        var_dump($id, $name, $nim);
        $query = "UPDATE $this->table SET name=:name, nim=:nim  WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('name', $name);
        $this->db->bind('nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function searchStudent($data)
    {
        $username = $data['search-form'];
        $query = "SELECT * FROM $this->table WHERE name LIKE :username";
        $this->db->query($query);
        $this->db->bind("username", "%$username%");
        $this->db->execute();
        return $this->db->resultSet();
    }


    public function getAllStudents()
    {
        // query process
        $this->db->query("SELECT * FROM $this->table");
        // get data 
        return $this->db->resultSet();
    }

    public function getStudentById($id)
    {
        // stored data you want to bind
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
