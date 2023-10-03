<?php

Class Database {
    $db_connection = null;

    function connect(){
        try {
            $this->db_connection = mysqli_connect(
                'db',
                'lamp_demo',
                'password',
                'lamp_demo'
            );
        } catch (mysqli_sql_exception $e){
            die("Wrong DB credentials!");
        }

        return $db_connection;
    }

    function read($query){
        if($this->db_connection){
            return $result = mysqli_query($this->db_connection, $query);
        }
    }   
}