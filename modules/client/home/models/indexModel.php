<?php

function get_list_products()
{
    $result = db_fetch_array("SELECT * FROM `products`
     ORDER BY view DESC
     LIMIT 4");
    return $result;
}

function get_list_users()
{
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}
