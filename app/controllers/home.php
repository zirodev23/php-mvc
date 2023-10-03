<?php

Class Home extends Controller {
    function index($a = "dparam1", $b = "dparam2", $c = "dparams3") {
        show($a);
        show($b);
        show($c);

        $image_class = $this->loadModel("image_class");
        show($image_class);
        $this->view("home");
    }
}
