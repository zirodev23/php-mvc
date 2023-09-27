<?php

Class App {
    private $controller = "home";
    private $method = "index";
    private $params = [];

    function __construct() {
        // show($this->splitURL());

        $url = $this->splitURL();
        if(file_exists("../app/controllers/" . strtoLower($url[0]) . ".php")){
            $this->controller = strtoLower($url[0]);
            // show($url);
            unset($url[0]);
            // show($url);
        } else {
            echo "{$url[0]} controller DOESN'T exist";
        }

        require "../app/controllers/" . strtoLower($url[0]) . ".php");
    }

    private function splitURL() {
        return explode("/", trim($_GET["url"], "/"));
    } 

}
