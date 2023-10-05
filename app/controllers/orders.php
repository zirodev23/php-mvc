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

    function show($id = null){
        if(isset($id)){
            $db = new Database();
            $db->connect();
            $order = $db->read("select * from orders where order_id={$id};")[0];

            $this->view("order", ["order" => $order]);
        }
    }
}