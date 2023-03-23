<?php




class Home extends Controller
{

    public function index($name = "andes online", $job = "Web Programmer")
    {
        // Example data from url
        $data["name"] = $name;
        $data["job"] = $job;
        $data["title"] = "Home";
        $data["footer"] = "Home";

        // 2. Example data from model (arrays assoc)
        $data["myFiends"] = $this->model('Home_Model')->getDatas();
        // call index page inside view/home directory
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}
