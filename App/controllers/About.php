<?php 

    class About extends Controller {
        public function index($name="andes",$job="programmer") {
        $data["name"] = $name;
        $data["job"] = $job;
        $data["title"] = "About";
        $data["footer"] = "About";
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer',$data);
        }
      
    }

?>