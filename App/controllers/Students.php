<?php 

class Students extends Controller {

    public function index() {
        $data["title"] = "Students";
        $data["students"] = $this->model('Students_Model')->getStudentsData();
        $this->view('templates/header',$data);
        $this->view('students/index',$data);
        $this->view('templates/footer',$data);
    }
}

?>