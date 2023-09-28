<?php

Class App {
    private $controller = "home";
    private $method = "index";
    private $params = [];

    function __construct() {
        // show($this->splitURL());

        

        $url = $this->splitURL();
        // show($url);

        if(file_exists("../app/controllers/" . strtoLower($url[0]) . ".php")){
            $this->controller = strtoLower($url[0]);
            // show($url);
            unset($url[0]);
            // show($url);
        }

        require "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller();
        // $this->controller->index();

        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // show($url);
        $this->params = array_values($url);
        call_user_func_array([$this->controller, $this->method],$this->params);
    }

    private function splitURL() {
        // var_dump($_GET);
        // $url = nosacjums ? izpilda ja ir true : izpilda ja ir false
        // $url = (1 == 2) ? "/" : "/citslink";
        return explode("/", filter_var(trim($_GET["url"], "/"), FILTER_SANITIZE_URL));
    } 

}
