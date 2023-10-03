<?php

Class Product extends Controller {
    function index(){
        // return false;
        // echo "Product index";
        $model = $this->loadModel("productmodel");
        // $record = $model->getProductByID(5);
        // $this->view("products", $record);
        $this->view("products");
    }
}