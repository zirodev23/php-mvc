<?php

Class About {
    function index() {
        $this->view("about");
    }

    function view($view) {
        if(file_exists("../app/views/" . $view . ".php")){
            include "../app/views/" . $view . ".php";
        } else {
            include "../app/views/404.php";
        }
    }
}