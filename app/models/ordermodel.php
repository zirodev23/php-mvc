<?php

Class OrderModel {
    // table attributes
    public $order_id = null;
    public $customer_id = null;
    public $order_date = null;
    public $status = null;
    public $comments = null;
    public $shipped_date = null;
    public $shipper_id = null;

    //custom/ui attributes
    private $status_name = null;
    
    // $attributes array type
    // ["order_id" => 1, "customer_id" => 2]
    function __construct($attributes){
        $this->order_id = $attributes["order_id"];
        $this->customer_id = $attributes["customer_id"];
    }

    // atbilst Single Responsibility principam
    private function setStatusName() {
        $this->status_name = $this->retrieveStatusName();
    }

    function retrieveStatusName() {
        // db pieprasījums izmantojot order_id
        // retrieveRecord($this->order_id)
        // pagaidām test/mock dati

        return "Delivered";
    }
    
    
}