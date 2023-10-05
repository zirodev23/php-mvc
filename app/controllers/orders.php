<?php

Class Orders extends Controller {
    function index(){
        echo "Order controller, index method";

        $model = $this->loadModel("ordermodel");

        $db = new Database();
        $db->connect();
        $orders = $db->read("select * from orders;");

        $this->view("orders", ["orders" => $orders]);
    }
}