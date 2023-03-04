<?php 
require_once "../app/core/Controller.php";


class Home extends Controller {

   

 

    public function index($name="andes", $job="Web Programmer") {
        $data["name"] = $name;
        $data["job"] = $job;
        $data["title"] = "Home";
        $data["footer"] = "Home";
        // call index page inside view/home directory
        $this->view('templates/header', $data);
        $this->view('home/index',$data);
        $this->view('templates/footer', $data);
    }
}


?>