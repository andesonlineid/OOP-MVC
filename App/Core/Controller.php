<!-- this controller class set all controller classes -->

<?php 

class Controller {
    
    public function view($view,$datas = []) {
        require_once "../app/views/" .$view . '.php';
    }


    public function model($model) {
        require_once "../app/models/" . $model . '.php';
        return new $model;
    }
}

?>