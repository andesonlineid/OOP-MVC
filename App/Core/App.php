<?php 

class App {

    // property / data member
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    // constructor
    public function __construct()
    {

       $url = $this->parseUrl();
      
     
      

    // if($url == NULL) {
    //     $url = [$this->controller];
    // }

    // check controller
       if(file_exists('../app/controllers/' . $url[0] . '.php')) {
        $this->controller = $url[0];
        // make it controller name dissapear
        unset($url[0]);
       }

       require_once "../app/controllers/" . $this->controller . '.php';
    
       // instance class so we can call method
       $this->controller = new $this->controller;


    // check method
       if( isset($url[1]) ) {
            if(method_exists($this->controller,$url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
       } 
 

    // parameter

        if(!empty($url) ) {
            $this->params = array_values($url);
        }

        // run controller, method and send params (if there's)
        call_user_func_array([$this->controller,$this->method], $this->params);
  

    }
    


    public function parseURL() {
        if(isset($_GET['url']) ) {
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/',$url);    
        return $url;

        }  else {
            $url = [$this->controller];
            return $url;
        }

    }

}

?>