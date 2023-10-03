<?php

Class OrderModel {
    // table attributes
    private $order_id = null;
    private $customer_id = null;
    private $order_date = null;
    private $status = null;
    private $comments = null;
    private $shipped_date = null;
    private $shipper_id = null;

    //custom/ui attributes
    private $status_name = null;
    
    // atbilst Single Responsibility principam
    private function setStatusName() {
        $this->status_name = $this->retrieveStatusName();
    }

    private function retrieveStatusName() {
        // db pieprasījums izmantojot order_id
        // retrieveRecord($this->order_id)
        
        // pagaidām test/mock dati
        return "Delivered";
    }
    
    
}