<?php

Class Orders extends Controller {
    function index(){
        echo "Order controller, index method";

        $model = $this->loadModel("ordermodel");

        $db = new Database();
        $db->connect();
        $result = $db->read("select * from orders;");

        while($record = mysqli_fetch_assoc($result)) {
            show($record);
            echo '<p>'.$record['order_id'].'</p>';
            echo '<p>'.$record['status'].'</p>';
            echo '<p>'.$record['comments'].'</p>';
            echo '<hr>';
        }

        $this->view("orders");
    }
}