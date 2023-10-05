<h1>List of all orders</h1>

<?php

    foreach($data["orders"] as $order){
        show($order);
        echo '<p>'.$order['order_id'].'</p>';
        echo '<p>'.$order['some_other_status'].'</p>';
        //     echo '<p>'.$record['status'].'</p>';
        //     echo '<p>'.$record['comments'].'</p>';
        //     echo '<hr>';
    }