<?php



class About extends Controller
{
    public function index($name = "andes online", $job = "front-end web developer")
    {

        $data["job"] = $job;
        $data["title"] = "About";
        $data["footer"] = "About";

        // 1. example data from model
        $data["name"] = $this->model('User_Model')->getUserName();


        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }
}
