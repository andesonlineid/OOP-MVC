<?php 

class Students extends Controller {

    public function index() {
        $data["title"] = "Students";
        
        $data["students"] = $this->model('Students_Model')->getAllStudents();
        $this->view('templates/header',$data);
        $this->view('students/index',$data);
        $this->view('templates/footer',$data);
    }
    public function details($id) {
        $data["title"] = "Details Students";
        $data["details"] = $this->model('Students_Model')->getStudentById($id);
        $this->view('templates/header',$data);
        $this->view('students/details',$data);
        $this->view('templates/footer',$data);
    }
    public function addStudent() {
      if($this->model('Students_Model')->addDataStudent($_POST) > 0) {
            Flasher::setFlasher('success','adding','success');
            header('Location: ' . BASEURL . "Students");
            exit();
      } else {
        Flasher::setFlasher('fail','adding','danger');
      
    }
   
    }
}

?>