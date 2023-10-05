<h1>Single order view</h1>

<?php

show($data["order"]);

echo "<p>{$data['order']['order_id']}</p>";
echo "<p>{$data['order_inst']->retrieveStatusName()}</p>";
echo "<p>{$data['order_inst']->customer_id}</p>";
